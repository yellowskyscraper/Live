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
				<h2>Arts &amp; Scrpas</h2>
				<p>Give us your scrap.</p>
			</div>  
			    
			<div class="detailsbar">    
				<p>February 2008 <span class="black">|</span> Promotional Mail Outs</p> 

				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>     

			<div class="article_columns">
				<h3>Art from Scraps.</h3>
				<p>Arts &amp; Scraps provides children with creative experiences using recycled industrial scraps to actively involve them in learning, increase their confidence and encourage independent thinking. This in mind these promotional solutions are meant to align with the non-wast, second life ideals of the Arts &amp; Scraps organization. The designs are minimal in form and printed on recycled industrial papers. Either processed recycled paper or straight up found materials, such as graphs, schematics, blue prints and so on. The three themes represented throughout the series are a 'Call for Donation', a 'Fabric Sale', and a 'Self Awareness' promotional. The series consists of six deluxe post cards, a 18x24 in poster, a mailer with premium and a micro site.</p>
			</div>
			
			<img class="firstorder" src="data/projects/ArtsScraps/image1.jpg" alt="Image Description" />
			<img src="data/projects/ArtsScraps/image2.jpg" alt="Image Description" />
			<img src="data/projects/ArtsScraps/image3.jpg" alt="Image Description" />
			<img src="data/projects/ArtsScraps/image4.jpg" alt="Image Description" />
			<img src="data/projects/ArtsScraps/image5.jpg" alt="Image Description" />
			<img src="data/projects/ArtsScraps/image6.jpg" alt="Image Description" />
			<img src="data/projects/ArtsScraps/image7.jpg" alt="Image Description" />
			
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