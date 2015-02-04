<?php $page = "team"; ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/navigation.php"); ?>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Small Modal</h4>
      </div>
      <div class="modal-body">
        <h3>Modal Body</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div role="tabpanel">

  <h2>Players</h2>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#2015" aria-controls="home" role="tab" data-toggle="tab">2015</a></li>
    <li role="presentation"><a href="#2014" aria-controls="profile" role="tab" data-toggle="tab">2014</a></li>
    <li role="presentation"><a href="#2013" aria-controls="messages" role="tab" data-toggle="tab">2013</a></li>
    <li role="presentation"><a href="#2012" aria-controls="settings" role="tab" data-toggle="tab">2012</a></li>
    <li role="presentation"><a href="#2011" aria-controls="settings" role="tab" data-toggle="tab">2011</a></li>
    <li role="presentation"><a href="#2010" aria-controls="settings" role="tab" data-toggle="tab">2010</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="2015">
      <?php $year = 2015; ?>
      <?php include("year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2014">
      <?php $year = 2014; ?>
      <?php include("year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2013">
      <?php $year = 2013; ?>
      <?php include("year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2012">
      <?php $year = 2012; ?>
      <?php include("year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2011">
      <?php $year = 2011; ?>
      <?php include("year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2010">
      <?php $year = 2010; ?>
      <?php include("year_roster.php"); ?>
    </div>
  </div>
</div>

<script>
  $('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
</script>

<?php include("../includes/footer.php"); ?>