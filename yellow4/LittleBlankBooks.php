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

	<footer>

	</footer>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <section id="contentcontainer">

		<section id="detail">
			
			<div class="titlebar">
				<h2>Little Blank Books</h2>
				<p>Grab a Little Blank Book and begin.</p>
			</div>
            <!-- 
			<div class="linkbar">
				<div class="bar"></div>
				<div class="top"></div>
				<a href="data/sites/LittleBlankBooks/index.php" target="blank"><h3>View Little Blank Books</h3></a>
			</div>
	         --> 
			<div class="article_columns">
				<h2>A Senior Exhibition</h2>
				<p>So, what exactly is the result of of an undergraduate degree in the fine arts; what is four years of study worth to a person in todays day and age? Is it a piece of paper signifying competence in a certain specialization? Is it allowing of a certain income bracket? Is it a body of work, cohesive and thorough, not without intention? Is it experimentation unconcerned with all that convention and indoctrination of an institutional education? Well, it might be silly to say that it is anything specific amongst these questions, in a way it's everything listed, nuanced and subjective, but in any case at the end you have a person.</p><br>

				<p>For me, where I had found myself after those years of study wasn't apparent in the work itself, the work had been a sort of stepping stone to where I had ended up. I had grown beyond those experimentations of the class room. I figured this while putting together my senior exhibit of past work, I found that I was much less concerned with what I had produced over those years of study, and much more interested in where I had come as a result of those years of study. So there my exhibit was conceived, Little Blank Books, a collection of ruminations over an intensive undergraduate career, a presentation of personal outcome. A Showcase of four years of reflection instead of four years of production, in hopes to better understand the person the years produced.</p><br>
				
				<h2>Interaction</h2>
				<p>Each 'Little Blank Book' in the collection is a short examination, and together they form a collection of where I landed as an undergraduate. Each Little Book is blank inside, with a code and title on the cover. The content is revealed only through a digital interaction, the user moves the book over to the sensor where the content is revealed on the adjoining monitors.</p>
			</div>

			<img src="data/projects/LittleBlankBooks/image1.jpg" alt="Image Description" />
			<img src="data/projects/LittleBlankBooks/image2.jpg" alt="Image Description" /> 
			<img src="data/projects/LittleBlankBooks/image3.jpg" alt="Image Description" />
			<img src="data/projects/LittleBlankBooks/image4.jpg" alt="Image Description" />
			<img src="data/projects/LittleBlankBooks/image5.jpg" alt="Image Description" />
			<img src="data/projects/LittleBlankBooks/image6.jpg" alt="Image Description" />
			
		   	<!-- <div class="dividerbar"></div>  --> 
			<div class="dividerdots"></div>
		</section>

    	<section id="portfolio" class="detailprojects">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>

    </section>
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