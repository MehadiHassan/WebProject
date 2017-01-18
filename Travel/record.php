<?php
	$country=$_POST["country"];
	$region=$_POST["region"];
	$city=$_POST["city"];
	$date=$_POST["datetime"];
    $geoinfo=$_POST["geoinfo"];
    $comment=$_POST["comment"];	
	$con=mysql_connect("localhost", "root","");
	mysql_select_db("travel",$con);

	$query="insert into record(country,region,city,datetime,geoinfo,comment) 
			values('$country','$region','$city','$date','$geoinfo','$comment')";
	$result=mysql_query($query,$con);
	
	if($result){
		echo "Successfully Inserted";
		
$to = "mehadicse38@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a test email message.";
$from = "mehadikuet2013@gmail.com";
$headers = "From:" . $from;

$mail=mail($to,$subject,$message,$headers);
if($mail) {
    echo "Thanks for mail";
} else {
    echo "Mail not Sent";
}

//Email response
//echo "Thank you for contacting us!";

		header ("location:events.php");
	}
	else{
		echo "Couldn't Insert ". mysql_error();
	}
?>

