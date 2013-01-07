<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--[if lte IE 9]><link rel="stylesheet" href="data/css/ie.css" type="text/css" media="screen" /><![endif]-->
<link rel="stylesheet" href="data/css/1140.css" type="text/css" media="screen" />
<link rel="stylesheet" href="data/css/styles.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Tinos:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="data/js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {
		var aboveHeight = $('header').outerHeight();

		$(window).scroll(function(){
			if ($(window).scrollTop() > aboveHeight){
				$('#navigation').addClass('fixed');
				$('#first').addClass('firstup');
			} else {
				$('#navigation').removeClass('fixed');
				$('#first').removeClass('firstup');
			}
		});
	});


	var BrowserDetect = {
		init: function () {
			this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
			this.version = this.searchVersion(navigator.userAgent)
				|| this.searchVersion(navigator.appVersion)
				|| "an unknown version";
			this.OS = this.searchString(this.dataOS) || "an unknown OS";
		},
		searchString: function (data) {
			for (var i=0;i<data.length;i++)	{
				var dataString = data[i].string;
				var dataProp = data[i].prop;
				this.versionSearchString = data[i].versionSearch || data[i].identity;
				if (dataString) {
					if (dataString.indexOf(data[i].subString) != -1)
						return data[i].identity;
				}
				else if (dataProp)
					return data[i].identity;
			}
		},
		searchVersion: function (dataString) {
			var index = dataString.indexOf(this.versionSearchString);
			if (index == -1) return;
			return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
		},
		dataBrowser: [
			{
				string: navigator.userAgent,
				subString: "Chrome",
				identity: "Chrome"
			},
			{ 	string: navigator.userAgent,
				subString: "OmniWeb",
				versionSearch: "OmniWeb/",
				identity: "OmniWeb"
			},
			{
				string: navigator.vendor,
				subString: "Apple",
				identity: "Safari",
				versionSearch: "Version"
			},
			{
				prop: window.opera,
				identity: "Opera"
			},
			{
				string: navigator.vendor,
				subString: "iCab",
				identity: "iCab"
			},
			{
				string: navigator.vendor,
				subString: "KDE",
				identity: "Konqueror"
			},
			{
				string: navigator.userAgent,
				subString: "Firefox",
				identity: "Firefox"
			},
			{
				string: navigator.vendor,
				subString: "Camino",
				identity: "Camino"
			},
			{		// for newer Netscapes (6+)
				string: navigator.userAgent,
				subString: "Netscape",
				identity: "Netscape"
			},
			{
				string: navigator.userAgent,
				subString: "MSIE",
				identity: "Explorer",
				versionSearch: "MSIE"
			},
			{
				string: navigator.userAgent,
				subString: "Gecko",
				identity: "Mozilla",
				versionSearch: "rv"
			},
			{ 		// for older Netscapes (4-)
				string: navigator.userAgent,
				subString: "Mozilla",
				identity: "Netscape",
				versionSearch: "Mozilla"
			}
		],
		dataOS : [
			{
				string: navigator.platform,
				subString: "Win",
				identity: "Windows"
			},
			{
				string: navigator.platform,
				subString: "Mac",
				identity: "Mac"
			},
			{
				   string: navigator.userAgent,
				   subString: "iPhone",
				   identity: "iPhone/iPod"
		    },
			{
				string: navigator.platform,
				subString: "Linux",
				identity: "Linux"
			}
		]

	};
	
	/*BrowserDetect.init();
	alert("Would you look at that, you're using " + BrowserDetect.browser +" "+ BrowserDetect.version +" on a "+ BrowserDetect.OS);
	document.writeln('<link rel="stylesheet" type="text/css" href="data/css/reset.css">');
	document.writeln('<link rel="stylesheet" type="text/css" href="data/css/style.css">');
	
		 if(BrowserDetect.browser == "Firefox" && BrowserDetect.OS == "Mac") document.writeln('<link rel="stylesheet" type="text/css" href="data/css/firefox.css">');
	else if(BrowserDetect.browser == "Chrome" && BrowserDetect.OS == "Mac") document.writeln('<link rel="stylesheet" type="text/css" href="data/css/chrome.css">');
	else if(BrowserDetect.browser == "Firefox" && BrowserDetect.OS == "Windows") document.writeln('<link rel="stylesheet" type="text/css" href="data/css/firefoxWindows.css">');
	else if(BrowserDetect.browser == "Chrome" && BrowserDetect.OS == "Windows") document.writeln('<link rel="stylesheet" type="text/css" href="data/css/chromeWindows.css">');
	else if(BrowserDetect.browser == "Explorer") window.location = "http://www.yellowskyscraper.com/yellow4/NoDice.php";
	*/
</script>