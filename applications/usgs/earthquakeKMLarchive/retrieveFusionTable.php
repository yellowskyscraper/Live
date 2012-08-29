<?php
    
	include('fusion-tables-client-php/clientlogin.php');
	include('fusion-tables-client-php/sql.php');
	include('fusion-tables-client-php/file.php');  
                                                              
	$username = 'jim@yellowskyscraper.com';
	$password = 'weaponx1021';

	$token = ClientLogin::getAuthToken($username, $password);
	$ftclient = new FTClientLogin($token);

	//| Earthquake Retrieval Script From Google Fusion Table
//	echo '<b>Earthquake Retrieval Script From Google Fusion Table </b>(4041285)<br>';
//	echo $ftclient->query(SQLBuilder::showTables()) .'<br><br>';

    $query = $ftclient->query('SELECT Name, Description, Lat, Lon FROM 4041285 ORDER BY Description DESC');
	$deliminator = substr($query, 24, 1); //| Identify the 'char' that acts as the space between the returned rows 
	$quakes = explode($deliminator, $query); //| Break the rows apart into an array
	unset($quakes[0]); //| Chop "Name, Description, Lat, Lon" from the array.
	unset($quakes[count($quakes)]); //| Not sure why I'm cutting the last off here, might be because of the Daily Archive

  	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<quakes>';                            
	foreach($quakes as &$a)
	{                                                                                                     
		$arr = explode(",", $a);  

		if(distance(37.807614, -122.209167, $arr[2], $arr[3], true) <= 25) 
		{
			echo '<item><name>'.$arr[0].'</name><description>'.$arr[1].'</description><lat>'.$arr[2].'</lat><lon>'.$arr[3] .'</lon></item>';   
//			echo $arr[1].' - '.$arr[0].' ('.$arr[2].', '.$arr[3].') <br>';
		}                                                          
	} 
	echo '</quakes>';

	//| Distance Check
	function distance($lat1, $lng1, $lat2, $lng2, $miles = true)
	{
		$pi80 = M_PI / 180;
		$lat1 *= $pi80;
		$lng1 *= $pi80;
		$lat2 *= $pi80;
		$lng2 *= $pi80;

		$r = 6372.797; // mean radius of Earth in km
		$dlat = $lat2 - $lat1;
		$dlng = $lng2 - $lng1;
		$a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlng / 2) * sin($dlng / 2);
		$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
		$km = $r * $c;

		return ($miles ? ($km * 0.621371192) : $km);
	}  
?>