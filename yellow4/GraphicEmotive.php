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
				<h2>Graphic Emotive</h2>
				<p>Everyone has them &amp; everyone uses them.</p>
			</div>  

			<div class="detailsbar">    
				<p>Project Status <span class="black">|</span> Month Year <span class="black">|</span> Media Type or Category</p> 

				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>    

			<div class="article_columns">
				<h3>A Story of Jonathan Barnbrook.</h3>
				<p>A simple questioning of convention, an alteration or consideration of ones individual perception within his environment. Jonathan Barnbrook, Damien Hurst and Adbusters alike, consider  the conventional in new and interesting ways. Allowing for us to reflect upon the way in which we perceive information. With these cards I questioned the potential of a linear and complete read of information, a 'book'. I also considered the relationships between content, images and read. Abstracting their individual rolls away from the usual understanding of a book.</p>
			</div>
			
			<img class="firstorder" src="data/projects/GraphicEmotive/image1.jpg" alt="Image Description" />
			<img src="data/projects/GraphicEmotive/image2.jpg" alt="Image Description" />
			<img src="data/projects/GraphicEmotive/image3.jpg" alt="Image Description" />
			
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