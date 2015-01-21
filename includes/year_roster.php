<?php

	$rosterFile = fopen("data/roster.csv","r");
  $roster = array();
  
  while(! feof($rosterFile)) {
    $array = fgetcsv($rosterFile);
    if($array[0] == $year) $roster[$array[1]] = $array;
  }
  
  fclose($rosterFile);
	
	$oHandlersPill = array();
	$oCuttersPill = array();
	$dHandlersPill = array();
	$dCuttersPill = array();
	
  $oHandlersPlun = array();
	$oCuttersPlun = array();
	$dHandlersPlun = array();
	$dCuttersPlun = array();
	
	foreach ($roster as $key => $value) {
	  switch ($value[5]) {
	    case 'OH':
	      if($value[2] == 'Pillage') array_push($oHandlersPill, $value);
	      else array_push($oHandlersPlun, $value);
	      break;
	    case 'OC':
	      if($value[2] == 'Pillage') array_push($oCuttersPill, $value);
	      else array_push($oCuttersPlun, $value);
	      break;
	    case 'DH':
	      if($value[2] == 'Pillage') array_push($dHandlersPill, $value);
	      else array_push($dHandlersPlun, $value);
	      break;
	    case 'DC':
	      if($value[2] == 'Pillage') array_push($dCuttersPill, $value);
	      else array_push($dCuttersPlun, $value);
	      break;
	  }
	}
?>

<div class="row clearfix">
  <div class="col-md-6 column">
  	<img class="img-responsive" src="http://colonyultimate.com/img/pillage.png">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Offensive Handlers</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($oHandlersPill as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Offensive Cutters</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($oCuttersPill as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Defensive Handlers</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($dHandlersPill as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Defensive Cutters</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($dCuttersPill as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>
  </div>
  <div class="col-md-6 column">
  	<img class="img-responsive" src="http://colonyultimate.com/img/plunder.png">
  	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Offensive Handlers</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($oHandlersPlun as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Offensive Cutters</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($oCuttersPlun as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Defensive Handlers</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($dHandlersPlun as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" contenteditable="true">Defensive Cutters</h3>
      </div>
      <div class="panel-body" contenteditable="true">
        <?php foreach($dCuttersPlun as $player) include("includes/player_bio.php"); ?>
      </div>
    </div>
  </div>
</div>