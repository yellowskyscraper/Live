<html>
	<head>
		<title>LISTEN</title>
		<meta name="Keywords" content="Yellow Skyscraper, yellowskyscraper, James, Jim, Hovell, Sean, Interactive Design, Tangible Interface, Graphic Designer" />
        <meta name="description" content="A tall building of many stories which stimulates both the long- and medium-wavelength cone cells of the retina, but has yet to significantly stimulate the short-wavelength cone cells.">		
		    <link href="labs.css" media="screen" rel="stylesheet" type="text/css" />
		    <link href="examples.css" media="screen" rel="stylesheet" type="text/css" />
		    <link href="highlight.css" media="screen" rel="stylesheet" type="text/css" />
		    
		    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		    <script src="highlight.min.js"></script>
		    <script>hljs.initHighlightingOnLoad();</script>    
		    <script src="examples.js"></script>
	</head>
	
	<body>
		<script src="//connect.soundcloud.com/sdk.js"></script>
		<script>
			SC.initialize({
				client_id: "dc2f4ca0230c3f83ee02857c02790c57",
				redirect_uri: "callback.html"
			});

			$("#stream").live("click", function(){
				SC.stream("/tracks/94707217", {autoPlay: true});
			});

			$("#loadTracks").live("click", function(){
				SC.get("/groups/126109/tracks", {limit: 1}, function(tracks){
					var track = tracks[0];
					SC.oEmbed(track.uri, document.getElementById("track"));
				});
			});
		</script>

		<a id="stream" href="#"><div class="general-button">Play it Sam, play 'As Time Goes By.'</div></a>
		<a id="loadTracks" href="#"><div class="general-button">Get it Sam, play 'As Time Goes By.'</div></a>

		<div id="track"></div>

    </body>
</html>
