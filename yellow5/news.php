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

	<!--<script src="data/js/galleria/galleria-1.2.9.min.js"></script>
	<script src="data/js/galleria/plugins/flickr/galleria.flickr.min.js"></script>-->

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
						<a href="work.php"><li>Work</li></a>
						<a href="news.php"><li class="current-section">News</li></a>
						<a href="information.php"><li>Information</li></a>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section id="first">
		<div class="row">
			<div class="tencol landing-header">
				<p>Soon to come! Yellowskyscraper News Room; up to date observations and happenings, out of date ruminations and hindsight, future predictions and aspirations. Why? It's simple, we're already doing it.</p>
				  
				<p>Until we get this News Room up and running please enjoy a selection of recent photos. We're always out there, always looking at stuff.</p>
			</div>
			<div class="twocol last">

			</div>
		</div>
		  
		<div class="row">
			<div class="twelvecol">
				<a href="http://www.flickr.com/photos/yellowskyscraper/" target="_blank"><div class="link-to-microsite link-a"><h3>Browse the complete Archive on Flickr &raquo;</h3></div></a>
				<a href="http://www.flickr.com/photos/yellowskyscraper/" target="_blank"><div class="link-to-microsite link-b"><h3>Browse the complete Archive on Flickr &raquo;</h3></div></a>
			</div>
		</div>

		<div class="row">
		<?php
			/*$params = array(
				'api_key'	=> '9487eab6d4e67ec44054bf55ec692929',
				'method'	=> 'flickr.photos.getInfo',
				'photo_id'	=> '8317630365',
				'format'	=> 'php_serial',
			);*/

			$params = array(
				'api_key' => '9487eab6d4e67ec44054bf55ec692929',
				'method' => 'flickr.photos.search',
				'user_id' => '7296286@N03',
				'format' => 'php_serial'
			);

			$encoded_params = array();
			foreach ($params as $k => $v) $encoded_params[] = urlencode($k).'='.urlencode($v);

			$url = "http://api.flickr.com/services/rest/?".implode('&', $encoded_params);
			$rsp = file_get_contents($url);
			$rsp_obj = unserialize($rsp);

			if ($rsp_obj['stat'] == 'ok'){
				echo "<div class='sevencol'>";
				print_r ($rsp_obj);
				echo "</div>";

				foreach ($rsp_obj['photos']['photo'] as $photo) {
					
					$farm = $photo['farm'];
					$server = $photo['server'];
					$photoID = $photo['id'];
					$secret = $photo['secret'];
					$photo_title = $photo['title'];
					
					echo "<div class='sevencol'>";
						echo "Title is ".$photo_title."!<br>";
						echo "<img src='http://farm".$farm.".staticflickr.com/".$server."/".$photoID."_".$secret."_b.jpg' />";
					echo "</div>";
				}

			} else {
				echo "Call failed!";
			}
			
		?>
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