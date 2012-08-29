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
				<h2>Workopotamus</h2>
				<p>One suit. One hundred dollars.</p>
			</div>        
			
			<div class="detailsbar">    
				<p>BETA Version <span class="black">|</span> July 2010 <span class="black">|</span> E-Commerce Flash Site <span class="black">|</span> Made at OrdinaryKids</p> 
       
				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div> 
			    
			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="https://www.workopotamus.com/" target="blank"><h4>Go see for yourself</h4></a>
			</div>
	
			<div class="article_columns">
				<h3>One simple suit for the working man.</h3>
				<p>The Branding and Production of a full E-Commerce Flash site for a start up suit company specializing in one affordable suit for the working stiff. In short Workopotomus is a modern suit made for the newly employed, or anyone who has less than a million dollars to spend on work wear but still needs to look good. It's one reliable fit in two colors to keep costs down and to make the suit-buying process as easy as possible. Try one out, I promise, you wont be disappointed.</p>
			</div>
			
			<img class="firstorder" src="data/projects/Workopotamus/image1.jpg" alt="Image Description" />
			<img src="data/projects/Workopotamus/image2.jpg" alt="Image Description" />
			<img src="data/projects/Workopotamus/image3.jpg" alt="Image Description" />
			<img src="data/projects/Workopotamus/image4.jpg" alt="Image Description" />
			<img src="data/projects/Workopotamus/image5.jpg" alt="Image Description" />
			
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