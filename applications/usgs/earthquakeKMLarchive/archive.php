<?php   	
/*
	include('fusion-tables-client-php/clientlogin.php');
	include('fusion-tables-client-php/sql.php');
	include('fusion-tables-client-php/file.php');  
                                                              
	$username = 'jim@yellowskyscraper.com';
	$password = 'weaponx1021';
	$token = ClientLogin::getAuthToken($username, $password);
	$ftclient = new FTClientLogin($token);
*/
	
	//| Earthquake Archiving Script From USGS KMLs yearly archive to: Google Fusion Table (4041285), CSV
//	echo '<b>Earthquake Archiving Script From USGS KML yearly archive to Google Fusion Table </b>(4041285)<br>';
//	echo $ftclient->query(SQLBuilder::showTables()) .'<br><br>';
	echo "Name,Description,Lat,Lon\n";

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
		global $run;
		global $ftclient;
		global $count; 
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

			//| Format Year Month Day
			$mon = $name_array[4];
			for($i=1;$i<=12;$i++)
			{
			    if(strtolower(date('M', mktime(0, 0, 0, $i, 1, 0))) == strtolower($mon))
			    {
			        $mon = sprintf('%02s', $i);
			        break;
			    }
			}
			$day = str_replace(',','',$name_array[5]);
			$day = sprintf('%02s', $day); //| Adds 0 to beginning of single digits
			$yer = $name_array[3];

			//| Set Up Entires
			$Qname = 'M '.$name_array[1].''.ucwords(strtolower($name[1]));
			$Qdescription = $yer.' '.$mon.' '.$day;
			$Qlat = $lonlat[1]; //| Look into why this is reversed in the KML files
			$Qlon = $lonlat[0]; //| Look into why this is reversed in the KML files

			//| Render Values to screen and database or to CSV format 
//			if($run == true) $result = $ftclient->query("INSERT INTO 4041285 (Name, Description, Lat, Lon) VALUES ('$Qname', '$Qdescription', '$Qlat', '$Qlon')");
//			echo $Qname.' '.$Qdescription.' '.$Qlat.' '.$Qlon.' <br>';
			echo $Qname.",".$Qdescription.",".$Qlat.",".$Qlon."\n";
			
     		$count+=1;
			$hold_name = 'empty';
		} 
	}    
	
	function element_end($sax, $tag)
	{  
		global $count; 
		global $placemark;  
		global $name;         
		global $hold_name;
		global $coordinates; 
		global $db;     
		                                                                                                          
		if($tag === 'Placemark') $placemark = FALSE;      
		if($placemark == TRUE && $tag === 'name') $name = FALSE;
		if($placemark == TRUE && $tag === 'coordinates') $coordinates = FALSE;   
		if($tag === 'kml') 
		{
//			echo '<b>Fin</b> '. $count;
		}
	}    
      
	//| XML SAX Parser Set Up  
	$count = 0;
//	$year = 2011;
	$year = $_GET['year'];
	$run = false;
//	$run = $_GET['run'];                         
	$placemark = FALSE;  
	$name = FALSE;          
	$hold_name = 'empty';
	$coordinates = FALSE;
	
	$sax = xml_parser_create();
	xml_parser_set_option($sax, XML_OPTION_CASE_FOLDING, false);
	xml_parser_set_option($sax, XML_OPTION_SKIP_WHITE, true);   
    xml_set_element_handler($sax, 'element_start', 'element_end');
	xml_set_character_data_handler($sax, 'element_data');      
	xml_parse($sax, file_get_contents('kmls/'.$year.'_Earthquakes_ALL.kml'), true);
	xml_parser_free($sax);
?>