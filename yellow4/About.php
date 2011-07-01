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
				<p>So, you've found yourself wondering about our little Skyscraper of gilded Yellow? Well, at first glance you may have noticed that we're a very tall building of many stories, you may have also noticed that we stimulated both the long- and medium-wavelength cone cells of your retina (apologies for any feeling of intrusion but we assure you it was necessary) producing that yellowing effect we have all come to know and love. It's getting beyond the facade that situation begins to complicate, so much so, that our own team can't even produce much more than senseless ramblings and insults. The best we can offer as an explanation is that we're simply people and this is just what me must do, even if we don't understand entirely and even if the process ultimately kills us.<br><br>
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