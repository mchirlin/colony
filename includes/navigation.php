<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="http://colonyultimate.com">Colony Ultimate</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="<?php if($page == "home") echo "active"?>">
							<a href="http://colonyultimate.com">Home</a>
						</li>
						<!-- TODO: Create Results Pages -->
						<li class="<?php if($page == "results") echo "active"?> dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="http://colonyultimate.com/results/2015.html">2015</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/results/2014.html">2014</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/results/2013.html">2013</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/results/2012.html">2012</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/results/2011.html">2011</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/results/2010.html">2010</a>
								</li>
							</ul>
						</li>
						<!-- TODO: Create Roster Pages -->
						<li class="<?php if($page == "roster") echo "active"?> dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Roster<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="http://colonyultimate.com/roster/2015.html">2015</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/roster/2014.html">2014</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/roster/2013.html">2013</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/roster/2012.html">2012</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/roster/2011.html">2011</a>
								</li>
								<li>
									<a href="http://colonyultimate.com/roster/2010.html">2010</a>
								</li>
							</ul>
						</li>
						<!-- TODO: Create History Page -->
						<li class="<?php if($page == "history") echo "active"?>">
							<a href="http://colonyultimate.com/history.html">History</a>
						</li>
						<li class="<?php if($page == "contact") echo "active"?>">
							<a href="http://colonyultimate.com/contact.php">Contact</a>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<ul id="social">
							<li class="facebook"><a href="http://facebook.com/ColonyUltimate" title="Facebook" target="_blank">Facebook</a></li>
							<li class="twitter"><a href="http://twitter.com/colonyultimate" title="Twitter" target="_blank">Twitter</a></li>
							<li class="youtube"><a href="#" title="YouTube" target="_blank">YouTube</a></li>
            </ul>
					</ul>
				</div>
			</nav>
		</div>
	</div>