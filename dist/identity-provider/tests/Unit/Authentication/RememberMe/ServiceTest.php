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

namespace Sugarcrm\IdentityProvider\Tests\Unit\Authentication\RememberMe;

use Sugarcrm\IdentityProvider\Authentication\RememberMe\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testStore()
    {
        $session = $this->createMock(SessionInterface::class);
        $service = new Service($session);
        $service->store($this->createMock(TokenInterface::class));
    }

    /**
     * @dataProvider retrieveDataProvider
     */
    public function testRetrieve($expected, $stored)
    {
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
            ->method('get')
            ->willReturn($stored);
        $service = new Service($session);
        $result = $service->retrieve();
    }

    public function retrieveDataProvider(): array
    {
        $token = $this->createMock(TokenInterface::class);
        return [
            [null, []],
            [$token, [$token]],
        ];
    }

    public function testClear()
    {
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
            ->method('remove');
        $service = new Service($session);
        $service->clear();
    }
}
