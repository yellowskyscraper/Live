<html>
	<head>
		<title>SPEAK</title>
		<meta name="Keywords" content="Yellow Skyscraper, yellowskyscraper, James, Jim, Hovell, Sean, Interactive Design, Tangible Interface, Graphic Designer" />
        <meta name="description" content="A tall building of many stories which stimulates both the long- and medium-wavelength cone cells of the retina, but has yet to significantly stimulate the short-wavelength cone cells.">		
		<link href="examples.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="labs.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="//connect.soundcloud.com/sdk.js"></script>
		<script>
		  SC.initialize({
		    client_id: "dc2f4ca0230c3f83ee02857c02790c57",
		    redirect_uri: "callback.html"
		  });

		  $("#recorderUI.reset #controlButton").live("click", function(e){
		    updateTimer(0);
		    SC.record({
		      start: function(){
		        setRecorderUIState("recording");
		      },
		      progress: function(ms, avgPeak){
		        updateTimer(ms);
		      }
		    });
		    e.preventDefault();
		  });

		  $("#recorderUI.recording #controlButton, #recorderUI.playing #controlButton").live("click", function(e){
		    setRecorderUIState("recorded");
		    SC.recordStop();
		    e.preventDefault();
		  });

		  $("#recorderUI.recorded #controlButton").live("click", function(e){
		    updateTimer(0);
		    setRecorderUIState("playing");
		    SC.recordPlay({
		      progress: function(ms){
		        updateTimer(ms);
		      },
		      finished: function(){
		        setRecorderUIState("recorded");
		      }
		    });
		    e.preventDefault();
		  });

		  $("#reset").live("click", function(e){
		    SC.recordStop();
		    setRecorderUIState("reset");
		    e.preventDefault();
		  });

		  $("#upload").live("click", function(e){
		    setRecorderUIState("uploading");

		    SC.connect({
		      connected: function(){
		        $("#uploadStatus").html("Uploading...");
		        SC.recordUpload({
		          track: {
		            title: "Untitled Recording",
		            sharing: "private"
		          }
		        }, function(track){
		          $("#uploadStatus").html("Uploaded: <a href='" + track.permalink_url + "'>" + track.permalink_url + "</a>");
		        });
		      }
		    });

		    e.preventDefault();
		  });

		  function updateTimer(ms){
		    $("#timer").text(SC.Helper.millisecondsToHMS(ms));
		  }

		  function setRecorderUIState(state){
		    // state can be reset, recording, recorded, playing, uploading
		    // visibility of buttons is managed via CSS
		    $("#recorderUI").attr("class", state);
		  }
		</script>

		<div id="recorderUI" class="reset">
		  <a href="#" id="controlButton" class="record"><span id="timer" class="hidden">0:00</span></a>
		  <div id="otherControls">
		    <a href="#" id="reset" class="button">Reset</a>
		    <a href="#" id="upload" class="button">Upload</a>
		  </div>
		  <div id="uploadStatus"></div>
		</div>

    </body>
</html>
