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
			<a href="" class="active">about</a>   
			<a href="index.php">work</a>
		</nav>

		<?php include 'data/elements/header-about.php'; ?>
    </header> 
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <section id="contentcontainer">
		<section id="maindetail">
			
			<div class="large_copy">      
				<p>So, you've found yourself wondering about our little Skyscraper gilded in Yellow?<br><br> 
					
				Well, if you look closely you'll see we're a very tall building of many stories that just so happens to have stimulated both the long- and medium-wavelength cone cells of the retina, producing that yellowing effect we have all come to know and love. It's in further inquiry though, the situation begins to complicate, so much so, that our own team can't even settle on much more than senseless rambling and insult. To avoid this, <strong>why</strong> is slightly easier to address than <strong>what</strong>, as why we do what we do, or better yet why we aren't doing what we aren't doing, is somewhat agreed upon. You see it isn't that we like to make loads of money at the expense of others, it's not even that we wish to make a difference in this world, it's not even that we desire fame and the admiration of our contemporaries. It's that we're simply people and this is just what we must do, even if we don't entirely understand and even if the process ultimately kills us.<br><br>

			  I hope this has been of some help to you.</p>
		    	
				<h2>Take care and be safe,<br> 
		  		Your friends at Yellowskyscraper</h2>       
			</div>            
		   	                                                             		                              
			<div class="dividerdots"></div>
		</section>

    	<section id="portfolio" class="detailprojects">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>

    </section>          

<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

	<footer>

	</footer>
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