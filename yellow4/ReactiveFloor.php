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
				<h2>Reactive Floor Prototype</h2>
				<p>Connections and collaborations.</p>
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
				<a href="data/projects/ReactiveFloor/Practicum_Bayer.pdf" target="blank"><h4>View Full Case Study</h4></a>
			</div>       
			
			<div class="article_columns">
				<h3>Bayer Material Sciences: A Reactive Floor Prototype.</h3>
				<p>Bayer was in need of a bridge, a bridge to cross the gap between the Industrial Designer and the Material Supplier. The current chain works something like this, the Designer would create, the Engineer would have their say, then, eventually the Material Supplier would become involved. Bayer was interested in informing the designer of new material research in order to potentially influence design earlier on in the process.</p><br> 

				<p>Bayer wanted challenge the Manufacturing sector of the production line in order to inspire change and innovation through new materials and techniques. Starting within the Automotive Sector they wished to revamp an entire process. In their eyes, why replace one part to increase efficiency, when you can think holistically and drastically improve the entire automobile.</p><br>

				<p>With collaboration in mind a series of interactive and conceptual promotions were developed to reach out into the creative sector. Ideas ranging from co-branding with artist and designers, to large interactive installations and events, to documentation and tone. Allowing Bayer to reach their hand out into the creative community in order to encourage a relationship. These promotions are intended to provoke opportunities to integrate themselves into the creative process. A collaborative position would move Bayer into an active role in the ideation phase, allowing them to contribute to the problem solving process, inviting creative new solutions that might cause them to rethink or develop something entirely new. In effect, facilitating progressive change and ingenuity.</p><br>
			
				<h3>Prototype 1 of 6:</h3>
				<p>Extracting from the essence of collaboration and the relationships formed from such cooperation, the Reactive Floor intends to engage users in a simple collaborative interaction. This will generate an experience that allows for the user to participate and build with others. The floor will grow and form around its participants, making connections between users that otherwise might not have been made. This applies the idea of multiple parts in a whole metaphorically to the users experience, reinforcing idea of collaboration. This small scale prototype would eventually be considered for installation spaces in galleries or innovation showrooms. </p>
			</div>
			
			<img class="firstorder" src="data/projects/ReactiveFloor/image1.jpg" alt="Image Description" />
			<img src="data/projects/ReactiveFloor/image2.jpg" alt="Image Description" />
			<img src="data/projects/ReactiveFloor/image3.jpg" alt="Image Description" />
			
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