<?php

	$rosterFile = fopen("data/roster.csv","r");
  $roster = array();
  
  while(! feof($rosterFile)) {
    $array = fgetcsv($rosterFile);
    if($array[0] == $year) $roster[$array[1]] = $array;
  }
  
  fclose($rosterFile);
	
	$pillage = array();
	$plunder = array();
	
	foreach ($roster as $key => $value) {
	  if($value[2] == 'Pillage') array_push($pillage, $value);
	  else array_push($plunder, $value);
	}
?>

<div class="row clearfix">
  <div class="col-md-6 column">
  	<img class="img-responsive" src="http://colonyultimate.com/img/pillage.png">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Roster</h3>
      </div>
      <div class="panel-body">
        <?php foreach($pillage as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>
  </div>
  <div class="col-md-6 column">
  	<img class="img-responsive" src="http://colonyultimate.com/img/plunder.png">
  	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Roster</h3>
      </div>
      <div class="panel-body">
        <?php foreach($plunder as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>
  </div>
</div>