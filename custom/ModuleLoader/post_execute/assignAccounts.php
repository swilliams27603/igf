<?php
define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('modules/Teams/TeamSet.php');

$teams = array (
    'AP ANZ Team',
    'AP ASEAN Team',
    'AP ISA Team',
    'AP KOR Team',
    'CAN Team',
    'EP BNLX Team',
    'EP CEE Team',
    'EP DACH Team',
    'EP FRA Team',
    'EP ITA Team',
    'EP NORDICS Team',
    'EP SPGI Team',
    'EP UKI Team',
    'GCG CH Team',
    'GCG HK Team',
    'JP Team',
    'LA BRA Team',
    'LA MEX Team',
    'LA SSA Team',
    'MEA Team',
    'US BDE Team',
    'US FSE Team',
    'WW CAP Mkt team',
    'WW Team',
    'Test Team',
);

$wwTeam = null; 
foreach ($teams as $name) {
    
    $focus = getTeam($name);
    $focuses[] = $focus;
    if ($focus->name == 'WW Team') {
        $wwTeam = $focus->id;
    }
}

foreach($focuses as $focus) {
    setupDefaultTeam($focus->id, $focus->name, $wwTeam);
}

function getTeam($name)
{
    $query = "SELECT id FROM teams WHERE name = '".$name."' AND deleted=0"; 
    $id = $GLOBALS['db']->getOne($query);
    $focus = BeanFactory::getBean('Teams', $id);
    return $focus;
}

function setupDefaultTeam($teamId, $teamName, $wwTeam)
{
    $query = "SELECT user_id FROM team_memberships where team_id = '".$teamId."' AND deleted=0 ";
    $result = $GLOBALS['db']->query($query, true, "Error reading number of users: ");  
    $users = array();
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $users[] = $row['user_id'];
    }
    if (!$users) {
        return;
    }
    
    foreach ($users as $userId) {
        addWWTeams($userId, $teamId, $wwTeam, 'accounts', 'Accounts');
    }

    if ($wwTeam) { //ww team
        migrate($wwTeam, " team_id = '1' AND team_set_id = '1' ");
    }


    $query 
        = "DELETE FROM team_sets_teams 
          WHERE 
          team_id = '1' 
          AND 
          team_set_id IN (
            SELECT team_set_id FROM accounts 
            WHERE team_set_id != '1' group by team_set_id
          )
          ";
    $result = $GLOBALS['db']->query($query, true, "Error updating team sets ");

}

function addWWTeams($userId, $teamId, $wwTeam, $table, $module) {
    $query = "SELECT id FROM {$table} where assigned_user_id = '".$userId."' AND deleted=0 ";
    $result = $GLOBALS['db']->query($query, true, "Error reading number of accounts: ");  
    $recs = array();
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $recs[] = $row['id'];
    }

    foreach($recs as $record_id) {
        addWWTeam($record_id, $teamId, $wwTeam, $module);
    }
}

function addWWTeam($record_id, $teamId, $wwTeam, $module) {
  
    $bean = BeanFactory::retrieveBean($module, $record_id, array('disable_row_level_security' => true));
    $bean->load_relationship('teams');
    $bean->team_id = $teamId;
    $bean->teams->add(array($wwTeam, $teamId));
    $bean->save();
}

function migrate($teamId, $where) 
{
    $query 
        = "UPDATE accounts 
        SET 
          team_id = '{$teamId}',
          team_set_id = '{$teamId}' 

        WHERE 
          {$where}
          AND deleted=0 ";

    $result = $GLOBALS['db']->query($query, true, "Error updating accounts ");
  
}