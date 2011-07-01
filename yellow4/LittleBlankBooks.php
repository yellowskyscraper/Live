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
			     
			<div class="detailsbar">    
				<p>May 2009 <span class="black">|</span> Interactive Installation</p> 
       
				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div> 
			<!--    
			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="" target="blank"><h4>Browse Archive</h4></a>
			</div>
			-->
			<div class="article_columns">
				<h3>An Exhibition Concerning An Undergraduate</h3>
				<p>So, what exactly is the result of an undergraduate degree in the Fine Arts and what is four years of study worth to a person these days? Is it a piece of paper noting competence in a certain specialization? Does it allow for a more significant income bracket or more status? When 'Fine Arts' follows it, does it then imply a cohesive body of work, thorough and not without a learned intention? Or is it rebellion and experimentation unconcerned with all that has past into convention before it? It might be silly to say that it is anything specific amongst these, in reality it's everything listed above and more, in any case at the other end of an intensive undergraduate program you have a person.</p><br>

				<p>For me it was right there after those years of study that I found a little of myself. Where I was was no longer in those pieces&#151;valuable stepping stones no less&#151;they only seemed relics to me in hindsight. I had grown since then, and with that, every experimentation of the class room looked foreign, no longer a part of me. This was some thought process to find yourself in when asked to put together a Senior Exhibit, an exhibit meant to showcase four years of production and accomplished study.</p><br>
				
				<p>It was here I figured what form the showcase should take, what if it were a collection of ruminations over said intensive undergraduate career, what if instead of work it was a presentation of a personal outcome. A showcase of reflection instead of a showcase of production. It was realizing this, that I was much less concerned with what I had produced over those years of study, and much more interested with where I had come as a result of those immersed years that inspired my Little Blank Books.</p><br>
				
				<h3>The Interaction</h3>
				<p>Each 'Little Blank Book' in the collection is a short examination, and together they form a collection of where I landed as an undergraduate, as a person. Specifically each Little Book is blank inside, with only a code and title on the cover indicating it's contents. In order to reveal the contents of the book, the user must first place it on the a nearby reader, where the contents are then displayed on the adjoining monitors. It is through this that the user must step in order to glean anything from my experiences, it is through my own relationship with digital and physical interactions that the user must brave in order to use.</p>
			</div>

			<img class="firstorder" src="data/projects/LittleBlankBooks/image1.jpg" alt="Image Description" />
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