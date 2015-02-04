<?php
  $year = $_GET["year"];
  $name = $_GET["name"];
  
  $rosterFile = fopen("data/roster.csv","r");
  $years = array();
  
  while(! feof($rosterFile)) {
    $array = fgetcsv($rosterFile);
    if($array[1] == $name) {
      array_push($years, $array[0]);
      if($array[0] == $year) $player = $array;
    } 
  }
  
  fclose($rosterFile);
?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><?php echo $player[1]; ?></h4>
</div>
<div class="modal-body">
<div class="row clearfix">
  <div class="col-md-4 column">
  	<div class="photo">
      <img src="http://colonyultimate.com/team/photos/<?php if (file_exists('photos/' . strtolower(str_replace(" ", "-", $player[1])) . '.png')) echo strtolower(str_replace(" ", "-", $player[1])); else if($player[2] == "Pillage") echo 'nophoto'; else echo 'nophoto2'; ?>.png" />
    </div>
  </div>
  <div class="col-md-8 column">
    Number: <?php echo $player[3]; ?><br />
    Bio:<br />
    Years on team: <?php echo implode(', ', $years); ?>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
