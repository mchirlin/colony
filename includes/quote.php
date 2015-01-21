<h2><?php echo $email[0]; ?></h2>
<blockquote>
	<p>
		<?php echo $email[2]; ?>
	</p> <small><?php echo nl2br($email[3]); ?> <cite><?php echo $email[1]; ?></cite></small>
	
	<?php 
	  if($email[4] != "") {
	     echo "<p>";
	     echo $email[4];
	     echo "</p> <small>" . nl2br($email[5]) . " <cite>". $email[1] . "</cite></small>";
	   }
	 ?>
</blockquote>