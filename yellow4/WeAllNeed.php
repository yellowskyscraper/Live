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
				<h2>We <span class="italics">All</span> Need</h2>
				<p>A simple solution to a simple question.</p>
			</div>     

			<div class="detailsbar">                                                                                                       
				<p>In Progress <span class="black">|</span> November 2010 <span class="black">|</span> Online Archive</p>

				<div class='social'>   
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>

			<div class="article_columns">
				<h3>Thoughts &amp; Needs</h3>
				<p>What do you need? What do you think? These simple questions remind us that no matter how complex it gets, it's still about people, talking with people, and living with people. Because no matter how far we may find ourselves apart from one another, our similarities will always outweigh our differences. The aim of this project is to celebrate the shared human experiences of those that find themselves in the Tenderloin and those that don't. The neighborhood itself is unfortunately susceptible to one-sided reporting and dire data sets that only perpetuate these negative stereotypes. To balance this, We All Need is a data set that aims to remind us that there are people living in the Tenderloin, a simple fact that is easily overlooked. With this we hope a vivid portrait of the Tenderloin composed of the thoughts and needs of people interviewed on its streets will transcend neighborhood boundaries and inspire a meaningful conversation.</p>
			</div>
			
			<img class="firstorder" src="data/projects/WeAllNeed/image1.jpg" alt="Image Description" />
			<!-- <img src="data/projects/VaporRoom/image2.jpg" alt="Image Description" /> -->
			
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