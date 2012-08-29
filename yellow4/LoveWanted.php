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
				<h2>LOVE WANTED</h2>
				<p>A Personal Exploration</p>
			</div>     

			<div class="detailsbar">                                                                                                       
				<p>February 2009 <span class="black">|</span> Large Print Installation</p>

				<div class='social'>   
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>

			<div class="article_columns">
				<h3>Looking At Desires Underbelly</h3>
				<p>An observation of a single form that our tireless search for companionship, physical gratification, and love can sometimes take. We all experience and understand longing and love subjectively, developing our own notions deeply rooted in collective expectation and secondly personal experience. Where, if you were to peek through the personals section of your local paper, you might find a different means to such satisfaction, such ends.</p> 
				<p>Borrowing from the Metro Times of Detroit I wished to express this idea, that to a point, no matter how tall you build mans accomplishments and sophistication, no matter how "civilized" he becomes, he still is animal no less. So what is this kind of love, perhaps nothing, perhaps it's only a window through to the underbelly of our sexual desires, or maybe it's a window into a facet of ourselves, a facet that we rather keep hidden.</p>
			</div>
			
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