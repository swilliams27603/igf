<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\IdentityProvider\Tests\Unit\App\Listener\Success;

use Sugarcrm\IdentityProvider\App\Authentication\ConfigAdapter\LocalConfigAdapter;
use Sugarcrm\IdentityProvider\App\Listener\Success\UserPasswordListener;
use Sugarcrm\IdentityProvider\Authentication\User;
use Sugarcrm\IdentityProvider\App\Application;
use Sugarcrm\IdentityProvider\App\Authentication\AuthProviderManagerBuilder;

use Doctrine\DBAL\Connection;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * @coversDefaultClass Sugarcrm\IdentityProvider\App\Listener\Success\UserPasswordListener
 */
class UserPasswordListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var Application */
    protected $application;

    /** @var Connection */
    protected $dbConnection;

    /** @var  AuthenticationEvent */
    protected $authEvent;

    /** @var  UsernamePasswordToken */
    protected $token;

    /** @var  EventDispatcher */
    protected $dispatcher;

    /** @var  User */
    protected $user;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        $this->application = $this->createMock(Application::class);
        $this->dbConnection = $this->createMock(Connection::class);
        $this->authEvent = $this->createMock(AuthenticationEvent::class);
        $this->token = $this->createMock(UsernamePasswordToken::class);
        $this->dispatcher = $this->createMock(EventDispatcher::class);
        $this->user = new User('max', 'max', ['id' => 'max-id']);

        $this->application->method('getDoctrineService')->willReturn($this->dbConnection);
        $this->authEvent->method('getAuthenticationToken')->willReturn($this->token);
        $this->token->method('getUser')->willReturn($this->user);
    }

    public function providerInvokeWorksOnlyForLocalAuth()
    {
        return [
            [AuthProviderManagerBuilder::PROVIDER_KEY_LDAP, 0],
            [AuthProviderManagerBuilder::PROVIDER_KEY_MIXED, 0],
            [AuthProviderManagerBuilder::PROVIDER_KEY_SAML, 0],
            [AuthProviderManagerBuilder::PROVIDER_KEY_LOCAL, 1],
        ];
    }

    /**
     * @covers ::__invoke
     * @dataProvider providerInvokeWorksOnlyForLocalAuth
     *
     * @param string $providerKey
     * @param int $times
     */
    public function testInvokeWorksOnlyForLocalAuth($providerKey, $times)
    {
        /** @var $listener UserPasswordListener */
        $listener = $this->getMockBuilder(UserPasswordListener::class)
            ->setMethods([
                'checkPasswordTime',
                'checkPasswordLoginAttempts',
                'getConfigValue',
            ])
            ->setConstructorArgs([$this->application])
            ->getMock();

        $listener->method('getConfigValue')->willReturn(LocalConfigAdapter::PASSWORD_EXPIRATION_TYPE_TIME);
        $this->token->method('getProviderKey')->willReturn($providerKey);

        $listener->expects($this->exactly($times))->method('checkPasswordTime');

        $listener($this->authEvent, 'success', $this->dispatcher);
    }

    public function providerInvokeCallsCheckerAccordingToExpirationType()
    {
        return [
            [1, 'checkPasswordTime', 1],
            ['1', 'checkPasswordTime', 1],
            [2, 'checkPasswordLoginAttempts', 1],
            ['2', 'checkPasswordLoginAttempts', 1],
            [0, 'checkPasswordTime', 0],
            [0, 'checkPasswordLoginAttempts', 0],
            [3, 'checkPasswordTime', 0],
            [3, 'checkPasswordLoginAttempts', 0],
        ];
    }

    /**
     * @covers ::__invoke
     * @dataProvider providerInvokeCallsCheckerAccordingToExpirationType
     *
     * @param int $expirationType
     * @param string $method
     * @param int $times
     */
    public function testInvokeCallsCheckerAccordingToExpirationType($expirationType, $method, $times)
    {
        /** @var $listener UserPasswordListener */
        $listener = $this->getMockBuilder(UserPasswordListener::class)
            ->setMethods([
                'checkPasswordTime',
                'checkPasswordLoginAttempts',
                'getConfigValue',
            ])
            ->setConstructorArgs([$this->application])
            ->getMock();

        $this->token->method('getProviderKey')->willReturn(AuthProviderManagerBuilder::PROVIDER_KEY_LOCAL);
        $listener->method('getConfigValue')->willReturn($expirationType);

        $listener->expects($this->exactly($times))->method($method);

        $listener($this->authEvent, 'success', $this->dispatcher);
    }

    /**
     * @covers ::checkPasswordLoginAttempts
     *
     * @expectedException \Sugarcrm\IdentityProvider\Authentication\Exception\PasswordExpiredException
     * @expectedExceptionMessage Maximum login times exceeded. Password is expired
     */
    public function testCheckPasswordLoginAttemptsThrowsExceptionWhenMaxAttemptsReached()
    {
        $listener = new UserPasswordListener($this->application);

        $this->user->setAttribute('login_attempts', '50');

        $this->application->method('getConfig')->willReturn(
            [
                'local' => [
                    'password_expiration' => [
                        'attempt' => 40,
                    ],
                ],
            ]
        );

        $this->dbConnection->expects($this->once())
            ->method('executeUpdate')
            ->with(
                'UPDATE users SET login_attempts = login_attempts + 1 WHERE id = ?',
                ['max-id']
            );

        $listener->checkPasswordLoginAttempts($this->user);
    }

    /**
     * @covers ::checkPasswordLoginAttempts
     */
    public function testCheckPasswordLoginAttemptsIncrementsAttemptsAndNoExceptionThrown()
    {
        $listener = new UserPasswordListener($this->application);

        $this->user->setAttribute('login_attempts', 15);

        $this->application->method('getConfig')->willReturn(
            [
                'local' => [
                    'password_expiration' => [
                        'attempt' => 40,
                    ],
                ],
            ]
        );

        $this->dbConnection->expects($this->once())
            ->method('executeUpdate')
            ->with(
                'UPDATE users SET login_attempts = login_attempts + 1 WHERE id = ?',
                ['max-id']
            );

        $listener->checkPasswordLoginAttempts($this->user);
    }

    /**
     * @covers ::checkPasswordTime
     *
     * @expectedException \Sugarcrm\IdentityProvider\Authentication\Exception\PasswordExpiredException
     * @expectedExceptionMessage Password lifetime is expired. Password is expired
     */
    public function testCheckPasswordTimeThrowsExceptionWhenPasswordLifetimeExpired()
    {
        $listener = new UserPasswordListener($this->application);

        $this->user->setAttribute('password_last_changed', '2017-02-21 15:39:49');

        $this->application->method('getConfig')->willReturn(
            [
                'local' => [
                    'password_expiration' => [
                        'time' => 7 * 24 * 3600, // one week
                    ],
                ],
            ]
        );

        $this->dbConnection->expects($this->never())->method('executeUpdate');

        $listener->checkPasswordTime($this->user);
    }

    /**
     * @covers ::checkPasswordTime
     */
    public function testCheckPasswordTimeUpdatesUserPasswordLastChangedDateIfNotSet()
    {
        $listener = new UserPasswordListener($this->application);

        $this->user->setAttribute('password_last_changed', null);

        $this->application->method('getConfig')->willReturn(
            [
                'local' => [
                    'password_expiration' => [
                            'time' => 3600,
                    ],
                ],
            ]
        );

        $this->dbConnection->expects($this->once())
            ->method('executeUpdate')
            ->with(
                'UPDATE users SET password_last_changed = ? WHERE id = ?',
                $this->isType('array')
            );
        $listener->checkPasswordTime($this->user);
    }
}
