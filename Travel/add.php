<?php
session_start();
if($_SESSION["logged_in"]==true){
$con=mysql_connect("localhost","root","");
mysql_select_db("travel");
	if($_POST){
		if($_POST['event']=="insert"){
			$country=$_POST["country"];
			$region=$_POST["region"];
			$city=$_POST["city"];
			$datetime=$_POST["datetime"];
			$geoinfo=$_POST["geoinfo"];
			$comment=$_POST["comment"];
			
			$query="insert into record(country,region,city,datetime,geoinfo,comment) 
			values('$country','$region','$city','$datetime','$geoinfo','$comment')";
			$result=mysql_query($query,$con);
			if($result)
			{
				$to = "mehadi.cse38@gmail.com";
                $subject = "Test mail";
                $message = "Hello! This is a test email message.";
                $from = "mehadikuet2013@gmail.com";
                $headers = 'From:' . $from;
                $mail=mail($to,$subject,$message,$headers);
			}
			
			if(!$result){
				echo "Error: ".mysql_error();
			}
		}
	}
	header('location:events.php');
}	
?>