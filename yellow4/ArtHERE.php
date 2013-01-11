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
				<h2>ArtHERE</h2>
				<p>A Personal Exploration</p>
			</div>     

			<div class="detailsbar">                                                                                                       
				<p>November 2010 <span class="black">|</span> Online Utility</p>

				<div class='social'>   
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>

			<div class="article_columns">
				<h3>Good Question</h3>
				<p>ArtHERE matches under-used urban spaces with art and culture, empowering people to transform and engage communities through creative projects and other cultural happenings.</p>
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
</body>
</html>