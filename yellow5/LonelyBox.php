<!doctype html>
<html lang="en">

<head>
	<title>A Lonely Box &middot; Yellowskyscraper</title>

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
						<li class="current-section"><a href="work.php">Work</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="information.php">Information</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section id="first">
		<div class="row">
			<div class="twelvecol work-detail">
				<h1>A Lonely Box</h1>
				<p>Studying lonelyness.</p>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="twelvecol information-bar">
				<p>In Progress | 1986 - Current | Interactive Installation</p>
				<div class="share-me">
					<?php include 'data/includes/share.php'; ?>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="sixcol bodycopy">
				<h2>Prototyping Loneliness.</h2>
				<p>Simple Needs is a part of a larger exploration of loneliness, one in a series of observations and experiments intended to better my understanding of this curious and age old conundrum.</p>

				<p>If one was so inclined, they might say that our conscious understanding of the world is limited to, or constrained to our perception of it. We perceive our surroundings, then rationalize our surroundings, and it is through this that we build an understanding of our environment and our relationship to it. And since we can never truly escape these bodies of ours, and transcend this perception, we are forever trapped in a universes governed by these ever so temperamental of senses.</p>
			</div>

			<div class="sixcol bodycopy last">
				<p>This particular exploration was to create a small electronic device that could experience loneliness on its most shallow of levels, company; alone he grows anxious and erratic, accompanied he becomes calm and ordered. The device was granted a single mode to perceive his world; movement, and a single means to expressing that perception; an illuminated heartbeat.</p>

				<br>
				
				<h2>Documentation.</h2>
				<p>For this a simple algorithm was written to detect changes in the environment sent in from a Dual-Axis Accelerometer, triggering the ebb and flow of the simulated emotional reaction of a heart beat.</p>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="twelvecol">
				<img src="data/projects/LonelyBox/image2.jpg">
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