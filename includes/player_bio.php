<div class="player">
  <div class="number">
    <img src="http://colonyultimate.com/photos/
    <?php
      if (file_exists('http://colonyultimate/photos' + $player[3] + '.png')) echo 'generic';
      else echo str_replace(" ", "-", $player[3]);
    ?>.png" />
  </div>
  <div class="number"><?php echo $player[3]; ?></div>
  <div class="name"><?php echo $player[1]; ?></div>
</div>