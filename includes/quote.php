<blockquote>
	<p>
		<?php echo $email[1] ?>
	</p> <small><?php echo $email[2] <cite>Email <?php echo $email[0]; ?></cite></small>
	
	<?php 
	  if($email[3] != "") {
	     echo "<p>";
	     echo $email[3];
	     echo "</p> <small>" . $email[4] . " <cite>Email <?php echo $email[0]; ?></cite></small>";
	   }
	 ?>
</blockquote>