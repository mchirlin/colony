<?php $page = "quotes"; ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php

	$emailFile = fopen("data/emails.csv","r");
  $emails = array();
  
  while(! feof($emailFile)) {
    $array = fgetcsv($emailFile);
    array_push($emails, $array);
  }
  
  fclose($emailFile);
?>

<div class="row clearfix">
  <div class="col-md-12 column">
    <?php foreach($oHandlersPill as $player) include("includes/quote.php"); ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>