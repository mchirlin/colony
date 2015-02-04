<?php $name = $_GET["name"]; ?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><?php echo $name; ?></h4>
</div>
<div class="modal-body">
  <h3>Modal Body</h3>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>