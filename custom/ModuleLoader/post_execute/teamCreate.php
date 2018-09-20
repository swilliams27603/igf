<?php
define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('modules/Teams/TeamSet.php');

$teams = array (
    'AP ANZ Team' => 
    array (
      0 => 'cheahxm@my.ibm.com',
      1 => 'deepav@sg.ibm.com',
      2 => 'jonls@au1.ibm.com',
      3 => 'loypi@sg.ibm.com',
      4 => 'theunsa@au1.ibm.com',
    ),
    'AP ASEAN Team' => 
    array (
      0 => 'cheahxm@my.ibm.com',
      1 => 'deepav@sg.ibm.com',
      2 => 'loypi@sg.ibm.com',
      3 => 'ngcs@my.ibm.com',
    ),
    'AP ISA Team' => 
    array (
      0 => 'cheahxm@my.ibm.com',
      1 => 'deepav@sg.ibm.com',
      2 => 'loypi@sg.ibm.com',
      3 => 'pavankumarev@in.ibm.com',
      4 => 'rampshan@in.ibm.com',
      5 => 'vibhatna@in.ibm.com',
    ),
    'AP KOR Team' => 
    array (
      0 => 'cheahxm@my.ibm.com',
      1 => 'cylyeo@kr.ibm.com',
      2 => 'deepav@sg.ibm.com',
      3 => 'jeunk@kr.ibm.com',
      4 => 'loypi@sg.ibm.com',
      5 => 'mkkim@kr.ibm.com',
    ),
    'CAN Team' => 
    array (
      0 => 'cmatusi@us.ibm.com',
      1 => 'dkorey@ca.ibm.com',
      2 => 'dlupo@ca.ibm.com',
    ),
    'EP BNLX Team' => 
    array (
      0 => 'ada.pakhlajian@hu.ibm.com',
      1 => 'agnes_balint@hu.ibm.com',
      2 => 'alexander_bax@nl.ibm.com',
      3 => 'Alexandra.Huczek@ibm.com',
      4 => 'andrea.bors@sk.ibm.com',
      5 => 'anna.kollar@hu.ibm.com',
      6 => 'CLJEANNE@hu.ibm.com',
      7 => 'darnai.beata@hu.ibm.com',
      8 => 'Eszter.Olajos@ibm.com',
      9 => 'gabor.kawka@hu.ibm.com',
      10 => 'HEITJANS@de.ibm.com',
      11 => 'j_van_brug@nl.ibm.com',
      12 => 'Judit.Kovacs@hu.ibm.com',
      13 => 'laszlo.hoczek@hu.ibm.com',
      14 => 'melinda.molnar@hu.ibm.com',
      15 => 'Patrick.Empsten@be.ibm.com',
      16 => 'PBreuer@hu.ibm.com',
      17 => 'zfazekas@hu.ibm.com',
    ),
    'EP CEE Team' => 
    array (
      0 => 'ada.pakhlajian@hu.ibm.com',
      1 => 'agnes_balint@hu.ibm.com',
      2 => 'amkovari@hu.ibm.com',
      3 => 'andrea.bors@sk.ibm.com',
      4 => 'Anita.Dombovari@ibm.com',
      5 => 'AVorobec@hu.ibm.com',
      6 => 'CLJEANNE@hu.ibm.com',
      7 => 'darnai.beata@hu.ibm.com',
      8 => 'HEITJANS@de.ibm.com',
      9 => 'Judit.Kovacs@hu.ibm.com',
      10 => 'Klaudia.Kali1@hu.ibm.com',
      11 => 'marianna.gharibyan@hu.ibm.com',
      12 => 'MCONTE@hu.ibm.com',
      13 => 'melinda.molnar@hu.ibm.com',
      14 => 'Pawel.Dlugosz@pl.ibm.com',
      15 => 'PBreuer@hu.ibm.com',
      16 => 'Peter.Komives@hu.ibm.com',
      17 => 'Tatiana.Shustova@ibm.com',
      18 => 'zfazekas@hu.ibm.com',
    ),
    'EP DACH Team' => 
    array (
      0 => 'agnes_balint@hu.ibm.com',
      1 => 'andrea.bors@sk.ibm.com',
      2 => 'Benjamin.Schmitt@ibm.com',
      3 => 'Christopher.Klein1@ibm.com',
      4 => 'CLJEANNE@hu.ibm.com',
      5 => 'darnai.beata@hu.ibm.com',
      6 => 'Edina.Sukta@ibm.com',
      7 => 'FASIG@de.ibm.com',
      8 => 'gellert.horvath@hu.ibm.com',
      9 => 'HEITJANS@de.ibm.com',
      10 => 'joerg.braitmaier@de.ibm.com',
      11 => 'Judit.Kovacs@hu.ibm.com',
      12 => 'Julien.Tremmel@de.ibm.com',
      13 => 'LBelicza@hu.ibm.com',
      14 => 'marco_kempf@de.ibm.com',
      15 => 'Maria.Hauk@de.ibm.com',
      16 => 'Mate.Bedo@ibm.com',
      17 => 'melinda.molnar@hu.ibm.com',
      18 => 'MMESSMER@de.ibm.com',
      19 => 'mostbacher.e@hu.ibm.com',
      20 => 'Nora.Heusner@de.ibm.com',
      21 => 'PBreuer@hu.ibm.com',
      22 => 'RBAY@de.ibm.com',
      23 => 'TKeller1@hu.ibm.com',
      24 => 'VVoros@hu.ibm.com',
      25 => 'zfazekas@hu.ibm.com',
    ),
    'EP FRA Team' => 
    array (
      0 => 'agnes_balint@hu.ibm.com',
      1 => 'andrea.bors@sk.ibm.com',
      2 => 'bence.breglovics@hu.ibm.com',
      3 => 'CLJEANNE@hu.ibm.com',
      4 => 'darnai.beata@hu.ibm.com',
      5 => 'fguirriec@fr.ibm.com',
      6 => 'HEITJANS@de.ibm.com',
      7 => 'HMDMTRV@hu.ibm.com',
      8 => 'Judit.Kovacs@hu.ibm.com',
      9 => 'lrocabois@fr.ibm.com',
      10 => 'melinda.molnar@hu.ibm.com',
      11 => 'PBreuer@hu.ibm.com',
      12 => 'zfazekas@hu.ibm.com',
      13 => 'Zsofia.Sneider@ibm.com',
    ),
    'EP ITA Team' => 
    array (
      0 => 'agnes_balint@hu.ibm.com',
      1 => 'andrea.bors@sk.ibm.com',
      2 => 'Anita.Gulyas@ibm.com',
      3 => 'bruno_pasero@it.ibm.com',
      4 => 'claudia_fusi@it.ibm.com',
      5 => 'CLJEANNE@hu.ibm.com',
      6 => 'danilo_colombo@it.ibm.com',
      7 => 'darnai.beata@hu.ibm.com',
      8 => 'HEITJANS@de.ibm.com',
      9 => 'Judit.Kovacs@hu.ibm.com',
      10 => 'maurizio_bertoncini@it.ibm.com',
      11 => 'melinda.molnar@hu.ibm.com',
      12 => 'Paul.Maier1@ibm.com',
      13 => 'PBreuer@hu.ibm.com',
      14 => 'Reka.Svebis@hu.ibm.com',
      15 => 'zfazekas@hu.ibm.com',
      16 => 'Zsofia.Fekete@ibm.com',
    ),
    'EP NORDICS Team' => 
    array (
      0 => 'agnes_balint@hu.ibm.com',
      1 => 'Alexandra.Takacs@ibm.com',
      2 => 'andrea.bors@sk.ibm.com',
      3 => 'BNORIN@dk.ibm.com',
      4 => 'CLJEANNE@hu.ibm.com',
      5 => 'darnai.beata@hu.ibm.com',
      6 => 'edina.kiss@hu.ibm.com',
      7 => 'H43854@hu.ibm.com',
      8 => 'HEITJANS@de.ibm.com',
      9 => 'heli.keinanen@fi.ibm.com',
      10 => 'Judit.Kovacs@hu.ibm.com',
      11 => 'kristin.mellbye@no.ibm.com',
      12 => 'melinda.molnar@hu.ibm.com',
      13 => 'PBreuer@hu.ibm.com',
      14 => 'WALLIN@se.ibm.com',
      15 => 'zfazekas@hu.ibm.com',
      16 => 'Zsuzsanna.Delczeg@ibm.com',
    ),
    'EP SPGI Team' => 
    array (
      0 => 'agnes_balint@hu.ibm.com',
      1 => 'andrea.bors@sk.ibm.com',
      2 => 'Bernadett.Hajdu@hu.ibm.com',
      3 => 'CLJEANNE@hu.ibm.com',
      4 => 'darnai.beata@hu.ibm.com',
      5 => 'Dora.Apostagi@ibm.com',
      6 => 'gellert.horvath@hu.ibm.com',
      7 => 'HEITJANS@de.ibm.com',
      8 => 'Irene_Gonzalez@es.ibm.com',
      9 => 'Judit.Kovacs@hu.ibm.com',
      10 => 'melinda.molnar@hu.ibm.com',
      11 => 'PBreuer@hu.ibm.com',
      12 => 'zfazekas@hu.ibm.com',
    ),
    'EP UKI Team' => 
    array (
      0 => 'agnes_balint@hu.ibm.com',
      1 => 'andrea.bors@sk.ibm.com',
      2 => 'Bettina.Szamak@ibm.com',
      3 => 'CLJEANNE@hu.ibm.com',
      4 => 'darnai.beata@hu.ibm.com',
      5 => 'edina.kiss@hu.ibm.com',
      6 => 'FRANNICH@uk.ibm.com',
      7 => 'Gergely.Komaromi@ibm.com',
      8 => 'HEITJANS@de.ibm.com',
      9 => 'JEREMMAC@uk.ibm.com',
      10 => 'jonathan_morley@uk.ibm.com',
      11 => 'JONES1TO@uk.ibm.com',
      12 => 'Judit.Kovacs@hu.ibm.com',
      13 => 'Kristina.Hruba1@ibm.com',
      14 => 'melinda.molnar@hu.ibm.com',
      15 => 'NLaki@hu.ibm.com',
      16 => 'Orsolya.Egerszegi-Bayer@ibm.com',
      17 => 'PBreuer@hu.ibm.com',
      18 => 'Petra.Nyitraine.Kovago@ibm.com',
      19 => 'tim_clements@uk.ibm.com',
      20 => 'zfazekas@hu.ibm.com',
    ),
    'GCG CH Team' => 
    array (
      0 => 'mrjanwu@cn.ibm.com',
      1 => 'sunxl@cn.ibm.com',
      2 => 'yanzwbj@cn.ibm.com',
    ),
    'GCG HK Team' => 
    array (
      0 => 'ellenng@hk1.ibm.com',
      1 => 'mrjanwu@cn.ibm.com',
    ),
    'JP Team' => 
    array (
      0 => 'BH508721@jp.ibm.com',
      1 => 'E33813@jp.ibm.com',
      2 => 'KAZUYUKI@jp.ibm.com',
      3 => 'MINAMOTO@jp.ibm.com',
      4 => 'MOTONORI@jp.ibm.com',
      5 => 'NAITOU@jp.ibm.com',
      6 => 'TOSAKAI@jp.ibm.com',
    ),
    'LA BRA Team' => 
    array (
      0 => 'andreacap@br.ibm.com',
      1 => 'estevaop@br.ibm.com',
      2 => 'maricna@br.ibm.com',
    ),
    'LA MEX Team' => 
    array (
      0 => 'andreacap@br.ibm.com',
      1 => 'maricna@br.ibm.com',
      2 => 'tribeiro@mx1.ibm.com',
    ),
    'LA SSA Team' => 
    array (
      0 => 'andreacap@br.ibm.com',
      1 => 'maricna@br.ibm.com',
      2 => 'sportugu@pe.ibm.com',
      3 => 'ucarcovi@pe.ibm.com',
    ),
    'MEA Team' => 
    array (
      0 => 'balazs.bereznai@hu.ibm.com',
      1 => 'kevin_taws@uk.ibm.com',
    ),
    'US BDE Team' => 
    array (
      0 => 'louisg@us.ibm.com',
      1 => 'Michael.Hennig@ibm.com',
      2 => 'rayramos@us.ibm.com',
      3 => 'rhbejarz@us.ibm.com',
      4 => 'tcoppol@us.ibm.com',
      5 => 'wilblank@us.ibm.com',
    ),
    'US FSE Team' => 
    array (
      0 => 'jshapiro@us.ibm.com',
      1 => 'pkreger@us.ibm.com',
      2 => 'pslocum@us.ibm.com',
      3 => 'sbarnh@us.ibm.com',
      4 => 'tmwyatt@us.ibm.com',
      5 => 'wlyang@us.ibm.com',
      6 => 'wmussell@us.ibm.com',
    ),
    'WW CAP Mkt team' => 
    array (
      0 => 'daniel.ignacz@hu.ibm.com',
      1 => 'dlcrecca@us.ibm.com',
      2 => 'ghubbard@us.ibm.com',
      3 => 'jpugsley@us.ibm.com',
      4 => 'jscotty@us.ibm.com',
      5 => 'kevinwoo@sg.ibm.com',
      6 => 'sluga@us.ibm.com',
      7 => 'tim_t_burt@uk.ibm.com',
      8 => 'Zoltan.Kun@hu.ibm.com',
    ),
    'WW Team' => 
    array (
      0 => 'agmitch@us.ibm.com',
      1 => 'amariano@us.ibm.com',
      2 => 'haze@us.ibm.com',
      3 => 'Istvan_Dobo@hu.ibm.com',
      4 => 'jmoreno@ca.ibm.com',
      5 => 'kellmill@us.ibm.com',
      6 => 'leuze@de.ibm.com',
      7 => 'maxine.nwaneri@no.ibm.com',
      8 => 'OUTLAWC@uk.ibm.com',
      9 => 'scotta@us.ibm.com',
      10 => 'slorange@us.ibm.com',
      11 => 'surendra.an@us.ibm.com',
    ),
    'Test Team' => 
    array (
      0 => 'lpilavad@in.ibm.com',
      1 => 'mchavhan@in.ibm.com',
    ),
);

$wwTeam = null; 
foreach ($teams as $name=>$team) {
    
    $focus = addTeam($name, $team);
    $focuses[] = $focus;
    if ($focus[0]->name == 'WW Team') {
        $wwTeam = $focus[0]->id;
    }
}

assignTeamMembers($focuses, $wwTeam);


function addTeam($name, $emailIds)
{
    $query = "SELECT id FROM teams WHERE name = '".$name."' AND deleted=0"; 
    $id = $GLOBALS['db']->getOne($query);
    if (!empty($id)) {
        $focus = BeanFactory::getBean('Teams', $id);
    } else {
        $focus = new Team();
        $focus->name = $name;
        $focus->save();
    }
    
    return array($focus, $emailIds);
    
}

function assignTeamMembers(Array $focuses, $wwTeam)
{
  foreach($focuses as $focus) {
      addTeamMembers($focus[0], $focus[1], $wwTeam);
  }
}

function addTeamMembers(Team $team, Array $emailIds, $wwTeam)
{
    $team->load_relationship('users');
    $db = DBManagerFactory::getInstance();  
    $emailIdStr = implode("','", $emailIds);
    $query = "SELECT id FROM users WHERE user_name IN ('".$emailIdStr ."') AND deleted=0";  
    $result = $db->query($query, true, "Error reading number of users: ");  
    $ids = array();
    while ($row = $db->fetchByAssoc($result)) {
        $ids[] = $row['id'];
    }
    if ($ids) {
        $team->users->add($ids);
        setupDefaultTeam($team->id, $team->name, $wwTeam);
    }
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
        $focus = BeanFactory::getBean('Users', $userId);
        $focus->team_id = $teamId;
        $focus->default_team = $teamId;
        $focus->team_set_id = $teamId;
        $focus->save();
    }


    foreach ($users as $userId) {
        addWWTeams($userId, $teamId, $wwTeam, 'opportunities', 'Opportunities');
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
            SELECT team_set_id FROM opportunities WHERE team_set_id != '1' group by team_set_id
          )
          ";
    $result = $GLOBALS['db']->query($query, true, "Error updating team sets ");

}

function addWWTeams($userId, $teamId, $wwTeam, $table, $module) {
    $query = "SELECT id FROM {$table} where assigned_user_id = '".$userId."' AND deleted=0 ";
    $result = $GLOBALS['db']->query($query, true, "Error reading number of opties: ");  
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

    /*$bean->team_id = 'f3a52452-8080-11e8-9085-4cee33a7c72b';
    $bean->teams->add(
        array('f3a52452-8080-11e8-9085-4cee33a7c72b', '0212a0fa-8081-11e8-8d19-79fcdbd9ffc6')
    );*/

    $bean->save();
}

function migrate($teamId, $where) 
{
    $query 
        = "UPDATE opportunities 
        SET 
          team_id = '{$teamId}',
          team_set_id = '{$teamId}' 

        WHERE 
          {$where}
          AND deleted=0 ";

    $result = $GLOBALS['db']->query($query, true, "Error updating opportunities ");
  
}