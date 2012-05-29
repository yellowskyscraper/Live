<?php   

	$row = 1;

	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<quakes>'; 
	if (($handle = fopen("csvs/earthquake_archive_ascending.csv", "r")) !== FALSE) 
	{
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
	    {
	        $num = count($data);
	        
	        if(distance(37.807614, -122.209167, $data[2], $data[3], true) <= 50)
	        {
	        	echo '<item><name>'.$data[0].'</name><description>'.$data[1].'</description><lat>'.$data[2].'</lat><lon>'.$data[3] .'</lon></item>'; 
	        	//echo "Row <b>$row</b> " . $data[0] . " " . $data[1] . " (" . $data[2] . ", " . $data[2] . ") <br>\n";	
	        	$row++;
	        } 
	    }
	    fclose($handle);
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