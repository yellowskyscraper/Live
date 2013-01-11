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
				<h2>Jimventory</h2>
				<p>An inventory of relationships.</p>
			</div>  

			<div class="detailsbar">    
				<p>November 2008 <span class="black">|</span> Interactive Installation</p> 

				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div> 

			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="Jimventory/index.html" target="blank"><h4>View My Jimventory</h4></a>
			</div>          
	
			<div class="article_columns">
				<h3>My Desk at 6:00pm on 9.21.2008</h3>
				<p>Have you ever stopped and thought about how many things you own, I mean really every single thing in your everyday space and why you've got it? I found that within the clutter many of my things go predominantly unused, even forgotten. But why then do I keep so much that I don't really use or need, what compeled me to hang on to all this clutter? Perhaps it's more about the emotional relationship we have with our objects, than it is with their physical attributes. These relationships can be as simple as a utility or a fascination, or as complex as a memory or a deep sentiment. Either large or small, utilitarian or sentimental, this relationship seems to prevail over the tangible object itself.</p><br>
			
				<p>It is these attachments we have with our surroundings that I have become interested. It was realizing that I had all these things for more than just there material value, that inspired something. I asked, could these things have the capacity to define me if looked at collectively? Perhaps while looking into the very reasons we keep our clutter, one could possibly glean something about any person. Through the process of inventory I used to catalogue the very things in my work space, I ask the user to participate in my inventory to learn a little something more about me. This is the documentation of the relationships I have with the things I own, this is my Jimventory. </p><br>
				
				<h3>Interaction:</h3>
				<p>Simple wooden blocks, 60 in total, each representing a single item that happened to be sitting on my desk on a random Saturday afternoon at 6:00pm. Each block is accompanied by unique bar code, associating the block (the representational object) with the reason I have it. A barcode scanner is set up nearby, so the user can grab and scan my blocks to reveal the relationships I have with each thing.</p>
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

	<footer>
		<?php include 'data/elements/footer.php'; ?>
	</footer>  
</body>
</html>