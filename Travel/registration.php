<?php 
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $email = $_POST['email'];	

	$connection = mysql_connect("localhost", "root", "")
	or die ("Couldn't connect to database");
	mysql_select_db ("travel",$connection);
	
	$query= "select * from user where username='$username'";
	$results = mysql_query ($query, $connection);
	if (!$results) {
		echo "<p>" . mysql_error() . "</p>";
	}
	$num_results = mysql_num_rows ($results);
	if ($num_results != 0) {
		echo "That username already exists <br />";
	    header ("location:contact.html");        
	exit;
	}
	$query = "insert into user (forename,surname,username,password,age,email) values ('$forename' , '$surname','$username' , '$password','$age' , '$email')";
	$ret = mysql_query ($query);
	if (!$ret) {
		echo "<p>" . mysql_error() . "</p>";
	}
	else {
		echo "Registration successful<br />";
		header("location:index.html");
	}
?>
