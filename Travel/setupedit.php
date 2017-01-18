<?php	
	@$con = mysql_connect("localhost", "root", "")
	or die ("Couldn't connect to database");
	
	$query = "DROP DATABASE if exists travel";
	$result = mysql_query ($query, $con);
	
	$query = "CREATE DATABASE travel";
	$result = mysql_query ($query, $con);
	
	mysql_select_db ('travel');
	
	$query = "CREATE TABLE user( 
				forename varchar(20),
				surname varchar(20),
				username varchar (20), 
				password varchar (20), 
				age int, 
				email varchar(40)
			)";
	$result = mysql_query ($query, $con);

	$query = "CREATE TABLE record( 
				eid int primary key auto_increment,
				country varchar(30),
				region varchar (12), 
				city varchar (10), 
				datetime DATETIME, 
				geoinfo TEXT(100),
				comment varchar(50)
			)";
	$result = mysql_query ($query, $con);		

	$query="insert into user values('Tamanna','Tabassum','admin','1234',22, 'example@gmail.com')";
	$result = mysql_query ($query, $con);
	$query="insert into record values('1','Bangladesh','East','Bagerhat','12/01/1995','Tempreture Hot and Sometimes Cloudy', 'Not Good')";
	$result = mysql_query ($query, $con);
   header("Location:index.html");
?>
	