<?php  
	function getCurrentUrl() 
	{                     
		$url = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';	
		$url .= ($_SERVER['SERVER_PORT'] != '80') ? $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'] : $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		return $url;
	} 
	
	$title = $header;
    $url = getCurrentUrl();
                                                                                                                             
	echo "<a href='http://www.facebook.com/sharer.php?u=$url &t=$title' target='_blank'><img src='data/images/ico_facebook.jpg' /></a>";
	echo "<a href='http://twitter.com/home?status=$title $url' target='_blank'><img src='data/images/ico_twitter.jpg' /></a>";
	echo "<a href='http://digg.com/submit?url=$url' target='_blank'><img src='data/images/ico_digg.jpg' /></a>";
	echo "<a href='http://www.stumbleupon.com/submit?url=$url' target='_blank'><img src='data/images/ico_stumbleupon.jpg' /></a> ";	 
?>
