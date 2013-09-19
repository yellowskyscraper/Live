<!doctype html>
<html lang="en">

<head>
	<title>iSearch Media &middot; Yellowskyscraper</title>
	<meta name="description" content="A website for a search agency." /> 
	
	<meta property="og:title" content="iSearch Media &middot; Yellowskyscraper" />
	<meta property="og:description" content="A website for a search agency." />
	<meta property="og:image" content="http://www.yellowskyscraper.com/yellow5/data/img/og.jpg" />
	<meta property="og:url" content="http://www.yellowskyscraper.com/yellow5/iSearchMedia.php" />

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
				<h1>iSearch Media</h1>
				<p>ISM, they're a search agency.</p>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="twelvecol information-bar">
				<ul>
					<li>January 2010</li>
					<li>Actionscript 3.0 Web Site</li>
					<li>Developed for <a href="http://www.ordinarykids.com/" target="_blank">OrdinaryKids</a></li>
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
				<a href="ISM" target="_blank"><div class="link-to-microsite link-a"><h3>Launch ISM (Depreciated) &raquo;</h3></div></a>
				<img src="data/projects/iSearchMedia/image1.jpg">
				<img src="data/projects/iSearchMedia/image2.jpg">
				<img src="data/projects/iSearchMedia/image3.jpg">
			</div>
			<div class="fivecol last">
				<a href="ISM" target="_blank"><div class="link-to-microsite link-b"><h3>Launch ISM (Depreciated) &raquo;</h3></div></a>
				<img src="data/projects/iSearchMedia/image4.jpg">
				<img src="data/projects/iSearchMedia/image5.jpg">
				<img src="data/projects/iSearchMedia/image6.jpg">
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