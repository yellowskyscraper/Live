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
				<h2>Noise</h2>
				<p>The making or given to making a lot of noise.</p>
			</div>

			<div class="detailsbar">    
				<p>A Prototype <span class="black">|</span> July 2011 <span class="black">|</span> iPhone Application</p> 
       
				<div class='social'>     
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>                          

			<div class="article_columns">
				<h3>Alas, Signal and Noise.</h3>
				<p>It was the hustle and bustle of everyday life that inspired the development of this little productivity app. It was never knowing when I'd need to concentrate, always being stuck just too far from the peace and quiet of my study. It was the a constant need to focus through the noise of public comotion, it's from this desire that Noise came. Noise is a simple utility application  for the iPhone that generates noise to combat noise. Everyone knows of White Noise, but why stop there, it's certainly not my favorite variety of noise, so along come Pink and Brown to suit any mood or environment.</p>
			</div>
			
			<img class="firstorder" style="border: 1px solid #FFFFFF;" src="data/projects/Noise/image1.jpg" alt="Image Description" />
			<img style="border: 1px solid #FFFFFF;" src="data/projects/Noise/image2.jpg" alt="Image Description" />
			
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