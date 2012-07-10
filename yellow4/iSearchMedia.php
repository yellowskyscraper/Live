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
				<h2>iSearch Media</h2>
				<p>ISM, they're a search agency. </p>
			</div>
			  
			<div class="detailsbar">                                                                                                         
				<p>January 2010 <span class="black">|</span> Flash Web Site <span class="black">|</span> Developed at OrdinaryKids.</p>
       
				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>
			
			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="ISM/index.html" target="blank"><h4>Launch Depreciated ISM Site</h4></a>
			</div>
		  
			<img class="firstorder" src="data/projects/iSearchMedia/image1.jpg" alt="Image Description" />
			<img src="data/projects/iSearchMedia/image2.jpg" alt="Image Description" />
			<img src="data/projects/iSearchMedia/image3.jpg" alt="Image Description" />
			<img src="data/projects/iSearchMedia/image4.jpg" alt="Image Description" />
			<img src="data/projects/iSearchMedia/image5.jpg" alt="Image Description" />
			<img src="data/projects/iSearchMedia/image6.jpg" alt="Image Description" />
		                                                                      
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