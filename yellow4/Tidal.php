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
				<h2>Tidal Project</h2>
				<p>A modern day message in a bottle.</p>
			</div> 

			<div class="detailsbar">    
				<p>In Progress <span class="black">|</span> November 2008 <span class="black">|</span> People and the currents within</p> 

				<div class='social'>    
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>   

			<div class="article_columns">
				<h3>The Stories of a Swelling Fresh Water Crisis</h3>
				<p>Tidal is the growing collection of stories that otherwise would have been left untold. They are the families and communities in our own back yards that are being effected by the swelling fresh water crisis. This is no longer a matter of some family over there, it's here, it's now, it's effecting all of us. Even Michigan—a state surrounded by 28 percent of the worlds fresh water—is on the tipping point. Seen in the long term effects of large scale irrigation and the families that go without fresh water during the summer months. Or Detroit's 40,000 in Highland Park that have been disconnected from their municipal water. Or the effects of a Nestle Bottled water plant on the environment and local communities. Or the large scale pollution of the great lakes from near by Oil Sand Refineries and Industrial dumping. It is in these local stories that have seemingly gone untold, the stories of our own communities gathered from the very families affected by the neglect and complacency towards policy development. Tidal is the rising awareness in the very regions these issues affect. Stories that will inspire action and participation in local organizations, and encouraging political involvement in policy making. An awareness through a traveling Message, a Message with no intended recipient only the hope it will find an interested hand. A sort of modern Message in a bottle, released, left for someone to find. Inspired from the tiny and gratifying discovery of a message inside of something, left from someone else, set into the world, eventually crossing your path. Set out into naturally occurring systems of circulation, the message would travel until interrupted by a passer by. Set out into centers where masses of people move through everyday or systems that circulate masses of people everyday in hopes of sharing a local story.</p>
			</div>
			
			<img class="firstorder" src="data/projects/Tidal/image1.jpg" alt="Image Description" />
			<img src="data/projects/Tidal/image2.jpg" alt="Image Description" />
			<img src="data/projects/Tidal/image3.jpg" alt="Image Description" />
			<img src="data/projects/Tidal/image4.jpg" alt="Image Description" />
			
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