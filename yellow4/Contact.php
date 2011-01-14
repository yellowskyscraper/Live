<!DOCTYPE html>
<html lang="en">
<!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in -->
<head>
    
    <title>Yellowskyscraper - Currently Rebuilding Stuff</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />  

	<?php include 'data/elements/headerlinks.php'; ?>     
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   
	<script type="text/javascript">   
   
		var overlay;
		InfoOverlay.prototype = new google.maps.OverlayView();
	
		function initialize() {      
			var markLatLng = new google.maps.LatLng(37.78469, -122.41392);   
			var mapLatLng = new google.maps.LatLng(37.79069, -122.39800);  
			
			var mapOptions = {
				zoom: 13,
				center: mapLatLng,  
				draggable:false,
				scrollwheel:false,   
				scaleControl:false,
				disableDefaultUI: true,    
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(document.getElementById("map"), mapOptions);  
			
		    var swBound = new google.maps.LatLng(37.79969, -122.41392);
		    var neBound = new google.maps.LatLng(37.78469, -122.41392);
		    var bounds = new google.maps.LatLngBounds(swBound, neBound);  
		       
		    var srcImage = 'data/images/InfoWindow.png';                    
		
		    overlay = new InfoOverlay(bounds, srcImage, map);                    
		}                                                       
                   
		function InfoOverlay(bounds, image, map) {    
			this.bounds_ = bounds;
			this.image_ = image;
			this.map_ = map;                            
			this.div_ = null;  
			this.setMap(map);
		}

		InfoOverlay.prototype.onAdd = function() {  
			var div = document.createElement('DIV');
			div.style.borderStyle = "none";
			div.style.borderWidth = "0px";
			div.style.position = "absolute";                   
			
			var img = document.createElement("img");  
			img.style.position = "absolute"; 
			img.src = this.image_;
			img.style.width = "370px";
			img.style.height = "119px"; 
			                              
		  var content = document.createElement("content");  
			content.style.position = "absolute";   
			content.style.margin = "10px"; 
			content.style.width = "370px";
			content.style.height = "119px";
		  content.innerHTML = '<h1>Yellowskyscraper HQ</h1>'+ 
								'<h2>CEO James S. Hovell</h2>'+
						    '<p>office@yellowskyscraper.com</p>';
						                       
			div.appendChild(img);
			div.appendChild(content);                       
			
			this.div_ = div;                                   
			
			var panes = this.getPanes();
			panes.overlayImage.appendChild(div);   
		}   

		InfoOverlay.prototype.draw = function() {  
			var overlayProjection = this.getProjection();         
			
			var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());   
			
			var div = this.div_;
		    div.style.left = sw.x + 'px';
			div.style.top = sw.y + 'px';                  
		}

		InfoOverlay.prototype.onRemove = function() {  
			this.div_.parentNode.removeChild(this.div_);
			this.div_ = null;   
		}  
	</script>
</head>

<body onLoad="initialize()">
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <header id="headercontainer">
		<div class="topbar"></div> 
		
		<nav>	                                                  
			<a href="" class="active">contact</a>  
			<a href="About.php">about</a>   
			<a href="index.php">work</a>
		</nav>  
        
		<?php include 'data/elements/header-contact.php'; ?>
    </header>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <section id="contentcontainer">

		<section id="maindetail">  
			
			<div class="large_copy">                     
				<p>But how can we here at Yellowskyscraper have any time for new, exciting clients and adventures while entrenched in such an overwhelming undertaking as a massive restructuring? Well, thank goodness that's not for the blood, sweat, and tears of our employees to decide.<br><br>     
				
				So please contact us, despite all the scary scaffolding out front, we're still very much in business and would love to hear from you.</p>
			</div>   
			
			<div class="mapcontainer">
				<div id="mapoverlay"></div>
				<div id="map"></div>
			</div>                           
			
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