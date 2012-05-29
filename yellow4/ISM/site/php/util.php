<?php

// List all bots to search for and detect
$botlist = array("alexa", "appie", "Ask Jeeves", "crawler", "FAST",
 "froogle", "Firefly", "girafabot", "Googlebot", "InfoSeek", "inktomi",
 "looksmart", "NationalDirectory", "rabaz", "Scooter", "Slurp", "Spade",
 "TECNOSEEK", "Teoma", "WebBug", "WebFindBot", "URL_Spider_SQL",
 "ZyBorg");
 


// UTILITY FUNCTION
   function detectBrowser($agent, $redirect) {
		if (eregi("botlist", $agent)) {
			$browser = "Bot";
		} else {
			$browser = "Bot";
	}
	return $browser;
   }

	if ($isBrowser=="Bot") {
		// do nothng cause this page is already working below
	} else {
		$URL = $redirect;
		header("Location: $URL");
	}

?>