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
				<h2>The Vapor Room</h2>
				<p>Your friendly neighborhood dispensary.</p>
			</div>    

			<div class="detailsbar">                                                                                                     
				<p>September 2009 <span class="black">|</span> Flash Web Site <span class="black">|</span> Developed at OrdinaryKids</p>

				<div class='social'>   
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>

			<div class="linkbar"> 
				<div class='arrow'></div>    
				<a href="http://vaporroom.com/" target="blank"><h4>Launch The Vapor Room</h4></a>
			</div>     
			
			<img class="firstorder" src="data/projects/VaporRoom/image1.jpg" alt="Image Description" />
			<img src="data/projects/VaporRoom/image2.jpg" alt="Image Description" />
			
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