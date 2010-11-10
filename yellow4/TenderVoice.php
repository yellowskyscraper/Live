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
				<h2>TenderVoice</h2>
				<p>Welcome to the Tenderloin!</p>
			</div>
			
			<div class="linkbar">
				<div class="bar"></div>
				<div class="top"></div>
				<a href="http://tendervoice.org/" target="blank"><h3>Launch TenderVoice</h3></a>
			</div>

			<div class="article_columns">
				<h2>San Francisco's Tenderloin</h2>
				<p>The Design and Development of a simple Flash resource to serve the community. TenderVoice is an interactive web application which uses sound narratives to highlight community services and resources in the Tenderloin. It is designed to increase awareness about the service organizations in the neighborhood, as well as to serve as an educational tool for computer literacy.</p>
				<br>
				<p>TenderVoice users can be personally engaged in learning about resources available in the Tenderloin by hearing personal interviews with service providers. The application includes a full organizational database and interactive map of community resources, as well as a game which tests the knowledge of users about the community resources.</p>
				<br>
				<p>This website is currently being used by the Tenderloin Tech Lab, as a teaching tool for introducing interactive web-based applications to new computer users. The project was developed as part of the City Centered Festival, sponsored by the Gray Area Foundation for the Arts and KQED in San Francisco.</p>
			</div>
			
			<img src="data/projects/TenderVoice/image1.jpg" alt="Image Description" />
			<img src="data/projects/TenderVoice/image2.jpg" alt="Image Description" />
			<img src="data/projects/TenderVoice/image3.jpg" alt="Image Description" />
			
			<!-- <div class="dividerbar"></div>  --> 
			<div class="dividerdots"></div>
		</section>

    	<section id="portfolio" class="detailprojects">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>

    </section>

	<footer></footer>
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