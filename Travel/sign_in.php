<?php
    session_start();
	include "database.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	login($username,$password);
	function login($username,$password)
	{
	       $sql = "select * from user where username='$username'";
           $results = mysql_query ($sql);
		   while ($row = mysql_fetch_array ($results)){
			   
			   if ($row['password'] == $password ){
				   $_SESSION['id'] = $row['user_id'];
				   header ('Location:index.php');
			   }
			   else{
				   header ("location:index.html?error=yes");
			   }
			   
		   }
		  
	}		
	
?>