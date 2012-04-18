<?php
header("Expires: 0");
header("Cache-Control: no-cache, no-store");
header("Pragma: no-cache");

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME']); 
?>
<!DOCTYPE html>
<!-- G5Framework -->

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="UTF-8"> 
	
	<title>Index</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="imagetoolbar" content="no" />
	
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="-1" />
	
	<meta name="author" content="" /> 
	<meta name="copyright" content="" /> 
	<meta name="description" content="" /> 
	<meta name="robots" content="index,follow" /> 
	<meta name="robots" content="noodp" />
	
	<?php include 'include/browsersniff.php'; ?>
	
	<script src="js/libs/modernizr-1.6.min.js"></script> <!-- Modernizr -->
	<script type="text/javascript" src="js/jquery-latest.js"></script> <!-- JQuery -->
</head>

<body onload="load()">
    <div id="wrapper">    
		<header id="top">
			<nav>
	       		<ul>
	       			<li><a href="index.php">Index</a></li>
	       			<li><a href="application.php">Application</a></li>
	       			<li><a href="faq.php">FAQ</a></li>
	       		</ul>
       		</nav>
		</header><!--end #top-->  
				
        <section class="content">

            <div class="btmspc">
                <img src="images/slides/roadsofroads.jpg" />
            </div><!--end #featured-->
                
            <section class="cols">

                <article class="col1">
					<h5>I could be bounded in a nutshell and count myself a king of infinite space</h5>
					<p>Vivamus massa nunc, condimentum a iaculis nec, commodo id enim. Suspendisse sed sapien ut turpis bibendum fermentum non eleifend leo. Donec mollis sagittis 
					velit, tincidunt vestibulum odio condimentum a. Aenean fringilla tortor felis, ac placerat neque. Curabitur mauris felis, blandit vitae congue suscipit, 
					venenatis a ante. Mauris aliquam auctor nulla, in scelerisque nisl pulvinar sit amet.</p>
				</article>
                
                <article class="col2">
                	<img src="images/slides/tobuild.jpg" />
                
                    <h6>The glow that illumines</h6>
                    
                    <p>Suspendisse fringilla, est euismod bibendum faucibus, tortor purus tempor orci, sit amet pellentesque odio diam sed leo. Nam a eros ac magna pellentesque viverra. 
                    Mauris aliquet eros ut mi gravida quis placerat justo auctor. Quisque congue, dui nec tincidunt semper, odio justo interdum orci, sit amet dapibus odio nibh a augue.</p>
                    
                    <h6>The glare that obscures</h6>
                    <p>Vestibulum a arcu eros. Maecenas fringilla, odio eu faucibus sodales, massa odio porta enim, ac vestibulum massa nibh in enim. Integer quam erat, aliquet ut 
                    vehicula sodales, varius eu nibh. Ut velit justo, tempor non vulputate in, feugiat molestie nunc.</p>
                    
                    <div class="boxcallout">
	                    <p>There are two kinds of light — the glow that illumines, and the glare that obscures</p>
                    </div>
                </article>

            </section><!--end .cols-->
			
		</section><!--end .content--> 
 
        <footer id="bottom">
        	<p>&copy; 2012 Exploratorium The museum of science, art and human perception At the Palace of Fine Arts, 3601 Lyon Street, San Francisco, CA 94123</p>
        </footer><!--end #bottom-->

    </div><!--end #wrapper-->

<script src="js/jquery.min.js"></script><!--Load jQuery-->
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.2.min.js"%3E%3C/script%3E'))</script>
<script src="js/script.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script src="js/jquery.reveal.js"></script>
<script src="js/jquery.orbit.min.js"></script>

<!--[if lt IE 7 ]>
<script src="js/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg');</script>
<![endif]-->

<!--[if IE 6]>
    <script type="text/javascript"> 
        /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; } 
            var IE6UPDATE_OPTIONS = {
                icons_path: "js/ie6update/images/"
            }
     </script>
     <script type="text/javascript" src="js/ie6update/ie6update.js"></script>
<![endif]-->

</body>
</html>