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
				<h2>Jimventory</h2>
				<p>An inventory of relationships.</p>
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

			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="data/sites/Jimventory/index.html" target="blank"><h4>View My Jimventory</h4></a>
			</div>          
	
			<div class="article_columns">
				<h3>My Desk at 6:00pm on 9.21.2008</h3>
				<p>Through a detailed inventory of my personal work space, I found more in the things I own than just their function, I found an emotional connection and a relationship. This is the documentation of the relationships I have with the things I own, this is my Jimventory.</p><br>
			
				<p>Have you ever stopped and thought about how many things you own, I mean really every single thing in your everyday space and why you have them. I find that within my clutter many things go predominantly unused or even forgotten. But why do we keep so much that we don't really use or need, what compels us to hang on to the clutter. Perhaps its more about our emotional relationship with the object, than its physical attributes. These relationships can be as simple as utility or a fascination or as complex as a memory or of sentiment. Either large or small, utilitarian or sentimental, this relationship seems to prevail over the tangible object. It is these reasons, these attachments we have with our surroundings that I became interested in.</p><br>
				
				<p>Helping me to realize that I have these things for more than just there material value, I have them for a deeper reason and purpose. These things collectively have the capacity to define me. Perhaps in looking into the very reasons we keep the clutter, one could possibly glean something about a person. Through the process of inventory I used to catalogue the very things in my work space, I ask the user to participate in my inventory to learn something more about me.</p><br>
				
				<h3>Interaction:</h3>
				<p>Simple wooden blocks, 60 in total, each representing a single item, that happened to be sitting on my desk on a random Saturday afternoon at 6:00pm. Each block is accompanied by unique bar code, associating the block (the representational object) with the reason why I have it. A barcode scanner is set up nearby, so the user can grab and scan my blocks to reveal the relationships I have with each thing.</p>
			</div>
			
			<img class="firstorder" src="data/projects/Jimventory/image1.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image2.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image3.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image4.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image5.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image6.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image7.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image8.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image9.jpg" alt="Image Description" />
			<img src="data/projects/Jimventory/image10.jpg" alt="Image Description" />
			
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