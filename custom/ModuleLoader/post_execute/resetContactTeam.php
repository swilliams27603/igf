<?php
define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('modules/Teams/TeamSet.php');

contactDefaultTeam($team->id, $team->name, $wwTeam);

function contactDefaultTeam($teamId, $teamName, $wwTeam)
{
    $query = "SELECT id, team_id FROM contacts where team_id <> 1 ";
    $result = $GLOBALS['db']->query($query, true, "Error reading number of users: ");  
    $ids = array();
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $ids[] = $row;
    }
    foreach ($ids as $contact) {
        $sql 
            = "SELECT after_value_string 
                FROM `contacts_audit` 
                WHERE field_name IN ('team_id') 
                and parent_id='".$contact['id']."' 
                order by date_created DESC LIMIT 0,1";
        
        $oldTeamId = $GLOBALS['db']->getOne($sql);

        if (!empty($oldTeamId) && $contact['team_id'] != $oldTeamId) {
            migrate($oldTeamId, " id = '".$contact['id']."' ");
        }
       
    }
}

function migrate($teamId, $where) 
{
    $query 
        = "UPDATE contacts 
        SET 
          team_id = '{$teamId}',
          team_set_id = '{$teamId}' 

        WHERE 
          {$where}
          AND deleted=0 ";

    $result = $GLOBALS['db']->query($query, true, "Error updating contacts ");
  
}


