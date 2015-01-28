<?php $page = "home"; ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

		<div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1607303849498270&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="row clearfix">
    <div class="col-md-12 column">
			<!--  Carousel - consult the Twitter Bootstrap docs at 
			      http://twitter.github.com/bootstrap/javascript.html#carousel -->
			<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			  <div class="carousel-inner">
			    <div class="item active"><!-- class of active since it's the first item -->
			      <img src="http://colonyultimate.com/photos/team.jpg" alt="" />
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://colonyultimate.com/photos/team2.jpg" alt="" />
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://colonyultimate.com/photos/skateboard.jpg" alt="" />
			      <div class="carousel-caption">
			        <p></p>
			      </div>
			    </div>
			  </div><!-- /.carousel-inner -->
			  <!--  Next and Previous controls below
			        href values must reference the id for this carousel -->
			    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
			    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->
			<div class="jumbotron">
        <div class="row">
          <div class="col-md-5">
            <h2 class="font_2">About Colony</h2>
				    <p>
					    <span>Formed in 2010 in Sydney, Colony is Australia's premier men's Ultimate club.</span>
				    </p>
				    <p>
					    <a class="btn btn-primary btn-large" href="http://colonyultimate.com/history.html">Learn more</a>
				    </p>
          </div>
          <div class="col-md-7">
            <iframe width="560" height="315" src="//www.youtube.com/embed/pOYrsWaucts" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
		  <a class="twitter-timeline" href="https://twitter.com/ColonySYD" data-widget-id="555969728133361664">Tweets by @ColonySYD</a>
		</div>
		<div class="col-md-4 column">
			<!-- TODO: Update following content -->
			<!--<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details</a>
			</p>-->
		</div>
		<div class="col-md-4 column">
			<div class="fb-like-box" data-href="https://www.facebook.com/ColonyUltimate" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
		</div>
	</div>

<?php include("includes/footer.php"); ?>