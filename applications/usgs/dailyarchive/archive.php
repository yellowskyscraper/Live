<?php   

    include('fusion-tables-client-php/clientlogin.php');
	include('fusion-tables-client-php/sql.php');
	include('fusion-tables-client-php/file.php');  
	                                                              
	$username = 'jim@yellowskyscraper.com';
	$password = 'weaponx1021';

	$token = ClientLogin::getAuthToken($username, $password);
	$ftclient = new FTClientLogin($token);

	/*//| Daily Earthquake Archive: 2305587 
	echo $ftclient->query(SQLBuilder::showTables()); 
	echo "<br>"; */
	     
	echo '<b>Worldwide Earthquakes Passed Day</b><br>';                                                                                                                        

    function element_start($sax, $tag, $attr)
	{  
		global $item;      
		global $title;    
		global $description;     
		global $lat; 
		global $lon;         
		                                                                       
		if($tag === 'item') $item = TRUE; 
		if($item == TRUE && $tag === 'title') $title = TRUE;  
		if($item == TRUE && $tag === 'description') $description = TRUE;
		if($item == TRUE && $tag === 'geo:lat') $lat = TRUE;   
		if($item == TRUE && $tag === 'geo:long') $lon = TRUE;
	}   
	
	function element_end($sax, $tag)
	{  
		global $item;      
		global $title;    
		global $description;     
		global $lat; 
		global $lon;       
		                                                                         
		if($tag === 'item') $item = FALSE;      
		if($item == TRUE && $tag === 'title') $title = FALSE;    
		if($item == TRUE && $tag === 'description') $description = FALSE;       
		if($item == TRUE && $tag === 'geo:lat') $lat = FALSE;   
		if($item == TRUE && $tag === 'geo:long') $lon = FALSE;
	} 
	
	function element_data($sax, $data) 
	{                
		global $ftclient;
		global $item;      
		global $title;    
		global $description;     
		global $lat; 
		global $lon;       
		global $hold_title; 
		global $hold_description;
		global $hold_lat; 
		global $hold_lon;                          
		                                                         
		if($item == TRUE && $title == TRUE) $hold_title = str_replace(',', '', $data);   
		if($item == TRUE && $description == TRUE) $hold_description = str_replace(',', '', $data);       
		if($item == TRUE && $lat == TRUE) $hold_lat = $data;
		if($item == TRUE && $lon == TRUE) 
		{        
			$hold_lon = $data;                                                                                                 
			$query = $ftclient->query("INSERT INTO 2305587 (Name, Description, Lat, Lon) VALUES ('$hold_title', '$hold_description', '$hold_lat', '$hold_lon')");           
			echo '<b>' . $hold_title .'</b> <br>' . $hold_description . ' (' . $hold_lat .' '. $hold_lon .')<br>';    
			$hold_name = 'empty';
			$hold_lat = 'empty';
			$hold_lon = 'empty';
		} 
	}   
	
	$item = FALSE;  
	$title = FALSE;   
	$description = FALSE;             
	$lat = FALSE;    
	$lon = FALSE;   
	$hold_title = 'empty';  
	$hold_description = 'empty';
	$hold_lat = 'empty';    
	$hold_lon = 'empty';   
	 
	$sax = xml_parser_create();
	xml_parser_set_option($sax, XML_OPTION_CASE_FOLDING, false);
	xml_parser_set_option($sax, XML_OPTION_SKIP_WHITE, true);   
    xml_set_element_handler($sax, 'element_start', 'element_end');
	xml_set_character_data_handler($sax, 'element_data');      
	xml_parse($sax, file_get_contents('http://earthquake.usgs.gov/earthquakes/catalogs/eqs1day-M0.xml'), true);
	xml_parser_free($sax);   

?>