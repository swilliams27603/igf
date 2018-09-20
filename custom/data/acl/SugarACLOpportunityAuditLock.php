<?php
/**
 * Created by PhpStorm.
 * User: xye
 * Date: 3/28/18
 * Time: 1:11 PM
 */


/**
 * Class SugarACLOpportunityAuditLock
 *
 * This ACL restricts the write access to normal user when opportunity in certain sales_stage.
 */
class SugarACLOpportunityAuditLock extends SugarACLOwnerWrite
{
    /**
     * {@inheritDoc}
     *
     * Only allow edit access to admin user or opporunity record not in certain sales_stage.
     *
     * @param string $module
     * @param string $view
     * @param array $context
     */
    public function checkAccess($module, $view, $context)
    {
        // Allow all read access.
        if (!self::isWriteOperation($view, $context)) {
            return true;
        }

        // Some contexts may not have a bean. For example, the call to /me
        // which retrieves the user's metadata checks access for each module,
        // but there is no specific bean and therefore we do not need to
        // restrict access.
        if (!array_key_exists('bean', $context)) {
            return true;
        }

        $user = $this->getCurrentUser($context);
        $bean = $context['bean'];
        return !in_array($module, array('Opportunities')) || $user->isAdminForModule($module) || $this->isNotInLockedStatus($bean->sales_stage);
    }

    /**
     * Check whether the record end user is viewing is in locked status or not.
     *
     * @param string $sales_stage
     * @return true|false
     */
    protected function IsNotInLockedStatus($sales_stage = '') {
        global $sugar_config;

        if(isset($sugar_config['opportunity_locked_status_for_normal_user'])) {
            return !in_array($sales_stage, $sugar_config['opportunity_locked_status_for_normal_user']);
        } else {
            return false;
        }

    }
}
