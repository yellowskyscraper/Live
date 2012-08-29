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
	
    $query = $ftclient->query('SELECT Name, Description, Lat, Lon FROM 2305587 ORDER BY Description DESC');  	  
	$deliminator = substr($query, 24, 1);     
	$quakes = explode($deliminator, $query); 
	unset($quakes[0]);
	unset($quakes[count($quakes)]);
      
	$holderday = 0;
	$change_days = 0; 
	$count_days = 0;   
	$quake_count = 0;
	
	foreach($quakes as &$a)
	{                                                                                                                           
		$arr = explode(",", $a); 
		$day = explode(" ", $arr[1]);                                                                                            
		if($day[1] != $holderday) {
		    $holderday = $day[1];                
			$count_days += 1;  
		} 
		
		if($count_days <= 30) $quake_count += 1;                                                                                                                                                                            
	}

  	echo '<?xml version="1.0" encoding="UTF-8"?>';
	//echo '<quakes days="'.$count_days.'">';   
	echo '<quakes days="30">'; 
	$count = 0; 
	                                 
	foreach($quakes as &$a)
	{                                                                                                                           
		$arr = explode(",", $a);                                                                                    
		if($count <= $quake_count) {  
			//echo '<b>'.$arr[1] .'</b> '. $arr[0] .' ('. $arr[2] .','. $arr[3] .')<br>';
			echo '<item><name>'.$arr[0].'</name><description>'.$arr[1].'</description><lat>'.$arr[2].'</lat><lon>'.$arr[3] .'</lon></item>'; 
		}	      
		$count += 1;                                        
	} 
	echo '</quakes>'; 
                                                                                                                                                                                          
?>