<?php $page = "team"; ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#2015" aria-controls="home" role="tab" data-toggle="tab">2015</a></li>
    <li role="presentation"><a href="#2014" aria-controls="profile" role="tab" data-toggle="tab">2014</a></li>
    <li role="presentation"><a href="#2013" aria-controls="messages" role="tab" data-toggle="tab">2013</a></li>
    <li role="presentation"><a href="#2012" aria-controls="settings" role="tab" data-toggle="tab">2012</a></li>
     <li role="presentation"><a href="#2011" aria-controls="settings" role="tab" data-toggle="tab">2011</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="2015">...</div>
    <div role="tabpanel" class="tab-pane" id="2015">...</div>
    <div role="tabpanel" class="tab-pane" id="2014">...</div>
    <div role="tabpanel" class="tab-pane" id="2013">...</div>
    <div role="tabpanel" class="tab-pane" id="2012">...</div>
    <div role="tabpanel" class="tab-pane" id="2011">...</div>
  </div>

</div>

<?php include("includes/footer.php"); ?>