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
  <div class="col-md-2 column">
  	<div class="player">
  	  <div class="photo">
        <img src="http://colonyultimate.com/team/photos/<?php if (file_exists('photos/' . strtolower(str_replace(" ", "-", $player[1])) . '.png')) echo strtolower(str_replace(" ", "-", $player[1])); else if($player[2] == "Pillage") echo 'nophoto'; else echo 'nophoto2'; ?>.png" />
      </div>
      <div class="number"><?php echo $player[3]; ?></div>
    </div>
  </div>
  <div class="col-md-10 column">
    <form class="form-horizontal">
      <div class="form-group">
        <label for="inputPassword" class="col-sm-3 control-label"><span class="label label-danger">Bio</span></label>
        <div class="col-sm-9">
          <p class="form-control-static"><?php echo $player[4]; ?></p>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-sm-3 control-label"><span class="label label-danger">Years on team</span></label>
        <div class="col-sm-9">
          <p class="form-control-static"><?php echo implode(', ', $years); ?></p>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>