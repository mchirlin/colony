<?php $page = "home"; ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

  <div class="row clearfix">
    <div class="col-md-12 column">
			<!--  Carousel - consult the Twitter Bootstrap docs at 
			      http://twitter.github.com/bootstrap/javascript.html#carousel -->
			<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			  <div class="carousel-inner">
			    <div class="item active"><!-- class of active since it's the first item -->
			      <img src="http://colonyultimate.com/photos/team.jpg" alt="" />
			      <div class="carousel-caption">
			        <p>Needs caption</p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://colonyultimate.com/photos/team2.jpg" alt="" />
			      <div class="carousel-caption">
			        <p>Needs caption</p>
			      </div>
			    </div>
			  </div><!-- /.carousel-inner -->
			  <!--  Next and Previous controls below
			        href values must reference the id for this carousel -->
			    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
			    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->
			<div class="jumbotron">
				<h2 class="font_2">
					<span>About Colony</span>
				</h2>
				<p>
					<span>Formed in 2010 in Sydney, Colony is Australia's premier men's Ultimate club.</span>
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="http://colonyultimate.com/history.html">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<a class="twitter-timeline" href="https://twitter.com/colonyultimate" data-widget-id="555969728133361664">Tweets by @colonyultimate</a>
		</div>
		<div class="col-md-4 column">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details</a>
			</p>
		</div>
	</div>

<?php include("includes/footer.php"); ?>