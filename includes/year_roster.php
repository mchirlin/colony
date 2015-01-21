<?php

	$rosterFile = fopen("data/roster.csv","r");
  $roster = array();
  
  while(! feof($rosterFile)) {
    $array = fgetcsv($rosterFile);
    if($array[0] == $year) $roster[$array[1]] = $array;
  }
  
  fclose($rosterFile);
	
	$oHandlers = array();
	$oCutters = array();
	$dHandlers = array();
	$dCutters = array();
	
	foreach ($roster as $key => $value) {
	  switch ($value[5]) {
	    case 'OH':
	      array_push($oHandlers, $value);
	      break;
	    case 'OC':
	      array_push($oCutters, $value);
	      break;
	    case 'DH':
	      array_push($dHandlers, $value);
	      break;
	    case 'DC':
	      array_push($dCutters, $value);
	      break;
	  }
	}
?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Offensive Handlers</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($oHandlers as $player) include("includes/player_bio.php"); ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Offensive Cutters</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($oCutters as $player) include("includes/player_bio.php"); ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Defensive Handlers</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($dHandlers as $player) include("includes/player_bio.php"); ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Defensive Cutters</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($dCutters as $player) include("includes/player_bio.php"); ?>
  </div>
</div>