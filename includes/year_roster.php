<?php
  $playerFile = fopen("data/players.csv","r");
  $players = array();
  
  while(! feof($playerFile)) {
    $array = fgetcsv($playerFile);
    $players[$array[0]] = $array;
  }
  
  fclose($playerFile);
	
	$rosterFile = fopen("data/roster.csv","r");
  $roster = array();
  
  while(! feof($rosterFile)) {
    $array = fgetcsv($rosterFile);
    if($array[1] == $year) $roster[$array[2]] = $array;
  }
  
  fclose($rosterFile);
	
	$oHandlers = array();
	$oCutters = array();
	$dHandlers = array();
	$dCutters = array();
	
	foreach ($roster as $key => $value) {
	  switch ($players[$key][5]) {
	    case 'OH':
	      array_push($oHandlers, $players[$key]);
	      break;
	    case 'OC':
	      array_push($oCutters, $players[$key]);
	      break;
	    case 'DH':
	      array_push($dHandlers, $players[$key]);
	      break;
	    case 'DC':
	      array_push($dCutters, $players[$key]);
	      break;
	  }
	}
?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Offensive Handlers</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($oHandlers as $player) echo $player[1]; ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Offensive Cutters</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($oCutters as $player) echo $player[1]; ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Defensive Handlers</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($dHandlers as $player) echo $player[1]; ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Defensive Cutters</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    <?php foreach($dCutters as $player) echo $player[1]; ?>
  </div>
</div>