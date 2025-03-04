<!DOCTYPE html>
<html lang="en">

<head>

    <title>Yellowskyscraper - Currently Rebuilding Stuff</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <script type="text/javascript">			
		window.location = "../yellow5/index.php";
	</script>

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
		
		<?php include 'data/elements/header-construction.php'; ?> 
    </header>

    <section id="contentcontainer">
		<section id="maindetail">

			<div class="large_copy">    
				<p>If you would please excuse the mess, we here at Yellowskyscraper are currently undergoing a massive restructuring. You see, the times they have been changing, and we're struggling (as all must) to stay relevant in this ever changing landscape of information. You can rest assured that our team at Yellowskyscraper is working around the clock, in below adequate conditions to bring you the best experiences ever possible.<br><br>
                
			    So, in the mean time please enjoy this temporary showcase of recent works.</p>
				
				<h2>Wish you the best,<br> 
				CEO James S. Hovell</h2>
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