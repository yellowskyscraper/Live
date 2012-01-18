<?php    
    
	include('fusion-tables-client-php/clientlogin.php');
	include('fusion-tables-client-php/sql.php');
	include('fusion-tables-client-php/file.php');  
                                                              
	$username = 'jim@yellowskyscraper.com';
	$password = 'weaponx1021';

	$token = ClientLogin::getAuthToken($username, $password);
	$ftclient = new FTClientLogin($token);

	/*//| Earthquakes 1973-2010: 2317273 
	echo $ftclient->query(SQLBuilder::showTables()); 
	echo "<br>"; */   

	function distance($lon1, $lat1, $lon2, $lat2) 
	{           
		$theta = $lon1 - $lon2; 
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
		$dist = acos($dist); 
		$dist = rad2deg($dist); 
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);

		return $miles;      
	}    	                                                                                                                
          
    function element_start($sax, $tag, $attr)
	{         
		global $placemark;  
		global $name;         
		global $hold_name;
		global $coordinates;     
		                                                                      
		if($tag === 'Placemark') $placemark = TRUE;   
		if($placemark == TRUE && $tag === 'name') $name = TRUE;  
		if($placemark == TRUE && $tag === 'coordinates') $coordinates = TRUE; 
	}  

	function element_data($sax, $data) 
	{         
		global $ftclient;
		global $placemark;  
		global $name;         
		global $hold_name;
		global $coordinates;                               

		if($placemark == TRUE && $name == TRUE) $hold_name = $data;
		if($placemark == TRUE && $coordinates == TRUE)
		{     
			$lonlat = explode(',', $data);    
			$name_array = explode(' ', $hold_name);
			$name = explode(',', $hold_name);                                                                                                                          
			$temp = str_replace(',', '', $name_array[5]);       
			
			$query = $ftclient->query("INSERT INTO 2317273 (Magnitude, Year, Month, Day, Location, Lon, Lat) VALUES ('$name_array[1]', '$name_array[3]', '$name_array[4]', '$temp', '$name[1]', '$lonlat[0]', '$lonlat[1]')");                                                     
			echo '<b>'.$name_array[1].'</b> '.$name_array[3].' '.$name_array[4].' '.$temp.' '.$name[1].' '.$lonlat[0].' '. $lonlat[1] . '<br>';
			
			$hold_name = 'empty';
		} 

	}    
	
	function element_end($sax, $tag)
	{  
		global $placemark;  
		global $name;         
		global $hold_name;
		global $coordinates; 
		global $db;     
		                                                                                                          
		if($tag === 'Placemark') $placemark = FALSE;      
		if($placemark == TRUE && $tag === 'name') $name = FALSE;
		if($placemark == TRUE && $tag === 'coordinates') $coordinates = FALSE;   
		if($tag === 'kml') mysql_close($db); 
	}                                                                                                 
	
	//| Set Up SAX Parser
	//| start with: /parse.php?year=1973
	$year = $_GET['year'];                               
	$placemark = FALSE;  
	$name = FALSE;          
	$hold_name = 'empty';
	$coordinates = FALSE;
	
	$sax = xml_parser_create();
	xml_parser_set_option($sax, XML_OPTION_CASE_FOLDING, false);
	xml_parser_set_option($sax, XML_OPTION_SKIP_WHITE, true);   
    xml_set_element_handler($sax, 'element_start', 'element_end');
	xml_set_character_data_handler($sax, 'element_data');      
	xml_parse($sax, file_get_contents('../seismic/'. $year .'_Earthquakes_ALL.kml'), true);
	xml_parser_free($sax);  
	/**/
?>