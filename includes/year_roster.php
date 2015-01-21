<?php
  $file = fopen("data/players.csv","r");

  $players = array();

  while(! feof($file)) {
    $array = fgetcsv($file);
    array_push($players, $array[0] => $array);
   }
   
   print_r($players);

  fclose($file);
?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Offensive Handlers</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    Panel content
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Offensive Cutters</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    Panel content
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Defensive Handlers</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    Panel content
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" contenteditable="true">Defensive Cutters</h3>
  </div>
  <div class="panel-body" contenteditable="true">
    Panel content
  </div>
</div>