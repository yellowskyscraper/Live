<!doctype html>
<html lang="en">

<head>
	<title>Yellowskyscraper; watching things happen since 1986.</title>
	<meta name="description" content="Yellowskyscraper News Room; up to date observations and happenings, out of date ruminations and hindsight, future predictions and asperations. Why? It's simple, we're already doing it." /> 
	
	<meta property="og:title" content="Yellowskyscraper; watching things happen since 1986." />
	<meta property="og:description" content="Yellowskyscraper News Room; up to date observations and happenings, out of date ruminations and hindsight, future predictions and asperations. Why? It's simple, we're already doing it." />
	<meta property="og:image" content="http://www.yellowskyscraper.com/yellow5/data/img/og.jpg" />
	<meta property="og:url" content="http://www.yellowskyscraper.com/yellow5/news.php" />
	
	<?php include 'data/includes/header.php'; ?>

	<link rel="stylesheet" href="data/js/jquery-flickr-gallery/jquery-flickr.css" type="text/css" charset="utf-8">
	<script src="http://www.google.com/jsapi"></script>
	<script>google.load("jquery", "1");</script>
	<script src="data/js/jquery-flickr-gallery/jquery-flickr-gallery.js" type="text/javascript" charset="utf-8"></script>

	<script src="data/js/galleria/galleria-1.2.9.min.js"></script>
	<script src="data/js/galleria/plugins/flickr/galleria.flickr.min.js"></script>
	
	<script>
		$(document).ready(function() {
		    $('#flickr_div').flickrGallery({
				"flickrId" : "7296286@N03",
				"flickrKey" : "9487eab6d4e67ec44054bf55ec692929"
			});
		});
	</script>

	<!--Deleted or special cases embedded styles-->
	<style type="text/css">
	

	</style>
</head>

<body>

	<header id="navigation">
		<div class="row">
			<div class="twelvecol">
				<h1><a href="index.php">Yellowskyscraper</a></h1>
				<nav>
					<ul>
						<li><a href="work.php">Work</a></li>
						<li class="current-section"><a href="news.php">News</a></li>
						<li><a href="information.php">Information</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section id="first">
		<div class="row">
			<div class="tencol landing-header">
				<p>Soon to come! Yellowskyscraper News Room; up to date observations and happenings, out of date ruminations and hindsight, future predictions and asperations. Why? It's simple, we're already doing it.</p>
				  
				<p>Until we get this News Room up and running please enjoy a selection of recent photos. We're always out there, always observing things.</p>
				
			</div>
			<div class="twocol last">

			</div>
		</div>
		  
		<div class="row">
			<div class="twelvecol">
				<div id="galleria"></div>

		        <script>
		            Galleria.loadTheme('data/js/galleria/themes/classic/galleria.classic.min.js');
		     
		           	var flickr = new Galleria.Flickr();
					flickr.setOptions({
						max: 100,
						thumbSize: 'big'
					}).user('yellowskyscraper', function(data) {
						Galleria.run('#galleria', {
							dataSource: data
						});
					});
		        </script>
			</div>
		</div>
		
	</section>

	<section>
		<div class="row">
			<div class="twelvecol divider-line">
			</div>
		</div>

		<?php include 'data/includes/thumbnails.php'; ?>
	</section>

	<footer>
		<?php include 'data/includes/footer.php'; ?>
	</footer>

</body>

</html>