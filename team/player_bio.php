<div class="player">
  <div class="photo">
    <img src="http://colonyultimate.com/team/photos/<?php if (file_exists('photos/' . strtolower(str_replace(" ", "-", $player[1])) . '.png')) echo strtolower(str_replace(" ", "-", $player[1])); else if($player[2] == "Pillage") echo 'nophoto'; else echo 'nophoto2'; ?>.png" />
  </div>
  <div class="number"><a href="#"><?php echo $player[3]; ?></a></div>
  <div class="name"><?php echo $player[1]; ?></div>
</div>