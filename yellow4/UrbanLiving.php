<!DOCTYPE html>
<html lang="en">
<!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in -->
<head>
    
    <title>Yellowskyscraper - Currently Rebuilding Stuff</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <?php include 'data/elements/headerlinks.php'; ?>   

	<style>
		/* Image will scale to whatever width and height you set here. */
		#flickr_div { 
			border: 1px solid #000000;
			background-color: #000;
			margin-top: 15px;
			margin-left: 1px;
			width: 926px;
			height: 647px;
		}
		
		#flickr_div img{ 
			margin:0px;
			margin-top:-1px;
			margin-left:-1px;
		}
	</style>
	
	<!-- link to plug-in style sheet -->
	<link rel="stylesheet" href="data/js/jquery-flickr-gallery/jquery-flickr.css" type="text/css" charset="utf-8">
	
	<!-- Google hosted jQuery core -->
	<script src="http://www.google.com/jsapi"></script>
	<script>google.load("jquery", "1");</script>
	
	<!-- Link to js file from plug-in -->
	<script src="data/js/jquery-flickr-gallery/jquery-flickr-gallery.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- JS call to set up gallery -->
	<script>
		// Replace the setID below with your setID
		// Get your flickrAPI here: http://www.flickr.com/services/api/misc.api_keys.html
		$(document).ready(function() {
		    $('#flickr_div').flickrGallery({
				"flickrId" : "7296286@N03",
				"flickrKey" : "9487eab6d4e67ec44054bf55ec692929"
			});
		});
	</script>
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
		
			<div class="titlebar_photo">
				<h2>The Photo Archive</h2>
				<p>Photographic developments over a period of time.</p>
			</div>
			  
			<div class="detailsbar">    
				<p>Constantly Archiving <span class="black">|</span> Film &amp; Digital Respectivly</p> 
       
				<div class='social'>   
					<?php   
					$header = 'The Photo Archive ~ Yellowskyscraper';  
					include 'data/elements/sharing.php'; 
					?>
				</div>     
			</div>    
		  
			<!--<img class="firstorder" src="data/photographs/UrbanLiving/image.jpg" alt="Image Description" />   -->
	
			<div id="flickr_div"></div> 
		                                                                                                                          
			<div class="dividerdots"></div> 
		</section>

    	<section id="portfolio">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>

    </section>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->    	

	<footer>

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