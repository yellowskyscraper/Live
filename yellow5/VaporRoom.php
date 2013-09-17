<!doctype html>
<html lang="en">

<head>
	<title>The Vapor Room &middot; Yellowskyscraper</title>
	<meta name="description" content="A website for a local neighborhood dispensary." /> 
	
	<meta property="og:title" content="The Vapor Room &middot; Yellowskyscraper" />
	<meta property="og:description" content="A website for a local neighborhood dispensary." />
	<meta property="og:image" content="http://www.yellowskyscraper.com/yellow5/data/img/og.jpg" />
	<meta property="og:url" content="http://www.yellowskyscraper.com/yellow5/VaporRoom.php" />

	<?php include 'data/includes/header.php'; ?>

	<!--Delete embedded styles, just for example.-->
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
						<a href="work.php"><li class="current-section">Work</li></a>
						<a href="news.php"><li>News</li></a>
						<a href="information.php"><li>Information</li></a>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section id="first">
		<div class="row">
			<div class="twelvecol work-detail">
				<h1>The Vapor Room</h1>
				<p>Your friendly neighborhood dispensary.</p>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="twelvecol information-bar">
				<ul>
					<li>September 2009</li>
					<li>Actionscript 3.0 Web Site</li>
					<li>Developed at <a href="http://www.ordinarykids.com/" target="_blank">OrdinaryKids</a></li>
				</ul>
				
				<div class="share-me">
					<?php include 'data/includes/share.php'; ?>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="sevencol">
				<a href="VaporRoom/" target="_blank"><div class="link-to-microsite link-a"><h3>Visit the Vapor Room (Depreciated) &raquo;</h3></div></a>
				<img src="data/projects/VaporRoom/image1.jpg">
				<img src="data/projects/VaporRoom/image2.jpg">
			</div>
			<div class="fivecol last" target="_blank">
				<a href="VaporRoom/" target="_blank"><div class="link-to-microsite link-b"><h3>Visit the Vapor Room (Depreciated) &raquo;</h3></div></a>
				<img src="data/projects/VaporRoom/image3.jpg">
				<img src="data/projects/VaporRoom/image4.jpg">
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