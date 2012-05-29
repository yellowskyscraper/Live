<!DOCTYPE html>
<html lang="en">
<!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in -->
<head>
    
    <title>Yellowskyscraper - Currently Rebuilding Stuff</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <?php include 'data/elements/headerlinks.php'; ?>
</head>

<body>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <header id="headercontainer">
		<div class="topbar"></div>

		<nav>	                                                  
			<a href="Contact.php">contact</a>  
			<a href="About.php">about</a>   
			<a href="" class="active">work</a>
		</nav>
		
		<?php include 'data/elements/header.php'; ?>
    </header>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <section id="contentcontainer">
		<section id="detail">
			<div class="titlebar">
				<h2>Dynamic Earth</h2>
				<p>Alas; Time stays, we go!</p>
			</div>     

			<div class="detailsbar">                                                                                                       
				<p>Exhibit Prototype <span class="black">|</span> November 2010 <span class="black">|</span> Data Visualization <span class="black">|</span> Made at the Exploratorium</p>

				<div class='social'>   
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>

			<div class="article_columns">
				<h3>Thousands of years ago in the future.</h3>
				<p>Lending the Bay Model—a large topographic relief of San Francisco and the Bay Area—to a Geological study exploring the tectonic boundary that San Francisco is so intimately acquainted. The simple idea is to provide an entry point into the complex forces at work beneath our feet, the very forces that have governed the shaping of our seas and continents. This entry point is made through a glimpse into our local geological foundation and the currents that are constantly forming it. An exploration of the very foundation we build upon, and the timescales unconcerned of us.</p>
			</div>
			
			<img class="firstorder" src="data/projects/DynamicEarth/image1.jpg" alt="Image Description" />
			<img src="data/projects/DynamicEarth/image2.jpg" alt="Image Description" />
			<img src="data/projects/DynamicEarth/image3.jpg" alt="Image Description" />
			<img src="data/projects/DynamicEarth/image4.jpg" alt="Image Description" />
			<img src="data/projects/DynamicEarth/image5.jpg" alt="Image Description" />
			<img src="data/projects/DynamicEarth/image6.jpg" alt="Image Description" />
			
			<div class="dividerdots"></div>
		</section>

    	<section id="portfolio" class="detailprojects">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>
    </section>

	<footer>
		<?php include 'data/elements/footer.php'; ?>
	</footer>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-9207090-1");
			pageTracker._trackPageview();
		} catch(err) {
			
		}
	</script>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->    
</body>
</html>