<div class="player">
  <a href="#" data-toggle="modal" data-target="#modal" data-remote="http://colonyultimate.com/player_bio.php?year=<?php echo urlencode($player[0]); ?>&name=<?php echo urlencode($player[1]); ?>">
    <div class="photo">
      <img src="http://colonyultimate.com/team/photos/<?php if (file_exists('photos/' . strtolower(str_replace(" ", "-", $player[1])) . '.png')) echo strtolower(str_replace(" ", "-", $player[1])); else if($player[2] == "Pillage") echo 'nophoto'; else echo 'nophoto2'; ?>.png" />
    </div>
    <div class="number"><?php echo $player[3]; ?></div>
    <div class="name"><?php echo $player[1]; ?></div>
  </a>
</div>