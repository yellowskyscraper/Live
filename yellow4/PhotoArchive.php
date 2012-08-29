<!DOCTYPE html>
<html lang="en">
<!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in -->
<head>
    
    <title>Yellowskyscraper - Currently Rebuilding Stuff</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <?php include 'data/elements/headerlinks.php'; ?>   
	
	<link rel="stylesheet" href="data/js/jquery-flickr-gallery/jquery-flickr.css" type="text/css" charset="utf-8">
	<script src="http://www.google.com/jsapi"></script>
	<script>google.load("jquery", "1");</script>
	<script src="data/js/jquery-flickr-gallery/jquery-flickr-gallery.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
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

    <section id="contentcontainer">

		<section id="detail">
		
			<div class="titlebar_photo">
				<h2>The Photo Archive</h2>
				<p>Photographic developments over a period of time.</p>
			</div>
			  
			<div class="detailsbar">    
				<p>2000 - 2011 <span class="black">|</span> Film &amp; Digital</p> 
       
				<div class='social'>   
					<?php   
					$header = 'The Photo Archive ~ Yellowskyscraper';  
					include 'data/elements/sharing.php'; 
					?>
				</div>     
			</div>  
			    
			<div class="linkbar_photo"> 
				<div class='arrow'></div>    
				<a href="http://www.flickr.com/photos/yellowskyscraper/" target="blank"><h4>Browse Archive On Flickr</h4></a>
			</div>   

			<div class="large_copy">    
				<p> Welcome to the Photo Archive, below is a slide collection of our goings ons. A sort of light documentaion of things that might not be categorized in any other way than with their sole association to us. So please take a minute and enjoy.</p>
			</div>   
			<div id="flickr_div"></div> 
		                                                                                                                          
			<div class="dividerdots"></div> 
		</section>

    	<section id="portfolio">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>
    </section>

	<footer>
		<?php include 'data/elements/footer.php'; ?>
	</footer>
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