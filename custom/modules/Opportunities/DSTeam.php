<?php

/*
    To add supplier and distributor teams to opty
*/

class DSTeam
{

    public static $teams = array();
    public static $remove_team_ids;
    //var $teamFormat = 'WW {teamName} Team';

    public function __construct()
    {
        if (empty(self::$teams)) {
            $query = "SELECT id,name FROM teams where name like 'WW %' and deleted=0 ";
            $result = $GLOBALS['db']->query($query, true, "Error reading number of teams: ");
            
            while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
                $team_id = $row['id'];
                if (strpos($team_id, '-team')) {
                    $team_id_pos = strpos($team_id, '-team');
                    $team_id_pos = (int)$team_id_pos + 5;
                    $team_id = substr($team_id, 0, $team_id_pos);
                }
                self::$teams[$team_id] = $row['id'];
            }
        }
    }

    public function addDSTeam($bean, $event, $args)
    {
        //$distributor_name = str_replace('{teamName}', $bean->distributor_c, $teamFormat);
        //$supplier_name = str_replace('{teamName}', $bean->supplier_c, $teamFormat);
        $distributor_name = str_replace(" ", "-", strtolower($bean->distributor_c)).'-team';
        $supplier_name = str_replace(" ", "-", strtolower($bean->supplier_c)).'-team';

        $opty_team_ids = array();
        if (!empty($bean->distributor_c) && isset(self::$teams[$distributor_name])) {
            $opty_team_ids[] = self::$teams[$distributor_name];
        }
        if (!empty($bean->supplier_c) && isset(self::$teams[$supplier_name])) {
            $opty_team_ids[] = self::$teams[$supplier_name];
        }

        //$existing_distributor_name = str_replace('{teamName}', $bean->fetched_row['distributor_c'], $teamFormat);
        //$existing_supplier_name = str_replace('{teamName}', $bean->fetched_row['supplier_c'], $teamFormat);
        $existing_distributor_name = str_replace(" ", "-", strtolower($bean->fetched_row['distributor_c'])).'-team';
        $existing_supplier_name = str_replace(" ", "-", strtolower($bean->fetched_row['supplier_c'])).'-team';
        self::$remove_team_ids = array();

        if (!empty($bean->fetched_row['distributor_c']) && isset(self::$teams[$existing_distributor_name]) &&
            $distributor_name !== $existing_distributor_name) {
            self::$remove_team_ids[] = self::$teams[$existing_distributor_name];
        }
        if (!empty($bean->fetched_row['supplier_c']) && isset(self::$teams[$existing_supplier_name]) &&
            $supplier_name !== $existing_supplier_name) {
            self::$remove_team_ids[] = self::$teams[$existing_supplier_name];
        }

        if (!empty($opty_team_ids)) {
            $bean->load_relationship('teams');
            $bean->teams->add($opty_team_ids);
        }
    }

    public function removeDSTeam($bean, $event, $args)
    {
        if (!empty(self::$remove_team_ids)) {
            unset($bean->teams);
            $bean->load_relationship('teams');
            $bean->teams->remove(self::$remove_team_ids);
            $bean->save();
        }
    }
}
