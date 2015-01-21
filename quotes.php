<?php $page = "quotes"; ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php

	$emailFile = fopen("data/emails.csv","r");
  $emails = array();
  
  $skipFirstLine = true;
  
  while(! feof($emailFile)) {
    $array = fgetcsv($emailFile);
    
    if($skipFirstLine) {
      $skipFirstLine = false;
      continue;
    }
    array_push($emails, $array);
  }
  
  fclose($emailFile);
?>

<div class="row clearfix">
  <div class="col-md-12 column">
    <?php foreach($emails as $email) include("includes/quote.php"); ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>