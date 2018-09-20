<?php

/*
    To add WW Team to module teams
*/

class ModuleTeams
{
    public static $wwTeam = null;
    public static $wwTeamModules = ['opportunities', 'accounts'];

    public function addWWTeamToModule($bean, $event, $args)
    {
        if (self::$wwTeam === null) {
            $query = "SELECT id FROM teams WHERE name = 'WW Team' AND deleted=0";
            self::$wwTeam = $GLOBALS['db']->getOne($query);
        }

        if (in_array(strtolower($bean->module_dir), self::$wwTeamModules)) {
            unset($bean->teams);
            $bean->load_relationship('teams');
            $bean->teams->add([self::$wwTeam]);
            $bean->save();
        }
    }
}
