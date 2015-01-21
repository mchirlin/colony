<div class="player">
  <div class="number">
    <img src="http://colonyultimate.com/photos/<?php if (file_exists('http://colonyultimate/photos' + $player[1] + '.png')) echo str_replace(" ", "-", $player[1]); else echo 'nophoto'; ?>.png" />
  </div>
  <div class="number"><?php echo $player[3]; ?></div>
  <div class="name"><?php echo $player[1]; ?></div>
</div>