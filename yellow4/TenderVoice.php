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

    <section id="contentcontainer">

		<section id="detail">
		
			<div class="titlebar">
				<h2>TenderVoice</h2>
				<p>Welcome to the Tenderloin!</p>
			</div>          
			
			<div class="detailsbar">    
				<p>BETA Launch <span class="black">|</span> June 2010 <span class="black">|</span> Interactive Resource &amp; Game</p> 
       
				<div class='social'>      
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div> 
			    
			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="http://tendervoice.org/" target="blank"><h4>Launch TenderVoice</h4></a>
			</div>         

			<div class="article_columns">
				<h3>San Francisco's Tenderloin</h3>
				<p>TenderVoice is a simple and easy to use website developed to serve a neighborhood. It's a web application that indexes local organizations found throughout San Francisco's Tenderloin District, highlighting not only the organizations themselves but the people that are responsible for their very being. Designed to increase awareness about the density and diversity of services located in the neighborhood, as well as to serve as an educational tool for computer literacy.</p>
				<br>
				<p>TenderVoice users become personally engaged in learning about the resources available to them by hearing interviews with the very people behind them. The application includes an organizational tool for easy use and an interactive map of the resources found in the neighborhood, as well as a game which tests the knowledge of users about those resources for good measure.</p>
				<br>
				<p>The TenderVoice site is currently being used by the Tenderloin Tech Lab as a tool for introducing interactive web-based applications to new computer users. The project was developed as part of the City Centered Festival, sponsored by the Gray Area Foundation for the Arts and KQED in San Francisco. And Please view our sister project <a href="http://tendernoise.movity.com/">TenderNoise</a>, a companion site in our discussion about a neighborhood, while rich with resource and community, is rather the noisiest in the bay area.</p>
			</div>
			
			<img class="firstorder" src="data/projects/TenderVoice/image1.jpg" alt="Image Description" />
			<img src="data/projects/TenderVoice/image2.jpg" alt="Image Description" />
			<img src="data/projects/TenderVoice/image3.jpg" alt="Image Description" />
			
			<!-- <div class="dividerbar"></div>  --> 
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