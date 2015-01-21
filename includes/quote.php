<blockquote>
	<p>
		<?php echo $email[0] ?>
	</p> <small><?php echo $email[1] <cite>Email</cite></small>
	
	<?php 
	  if($email[2] != "") {
	     echo "<p>";
	     echo $email[2];
	     echo "</p> <small>" . $email[3] . " <cite>Email</cite></small>";
	   }
	 ?>
</blockquote>