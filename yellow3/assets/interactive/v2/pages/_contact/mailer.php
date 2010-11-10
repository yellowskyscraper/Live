
<?php
	if(isset($_POST['submit'])) {
		
		$to = "jim_seandesign@yahoo.com";
		$subject = "YELLOW CONTACT";
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];
		 
		$body = "FROM: $name_field\n EMAIL: $email_field\n MESSAGE:\n $message";
		 
		echo "<html>";
		echo "<link rel='stylesheet' type='text/css' href='../../script/page_style.css' />";
		echo "<body>";
		echo "<div class='header'>";
		echo "	Jim Hovell<br>";
		echo "	734.812.4006<br>";
		echo "	jim_seandesign@yahoo.com<br><br>";
		echo "	message sent...<br>";
		echo "</div>";
		echo "</body>";
		echo "</html>";
		mail($to, $subject, $body);
	
	} else {
	
		echo "blarg!";
	
	}
?>
