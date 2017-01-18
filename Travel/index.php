<?php
session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$con = mysql_connect ("localhost", "root", "");
	mysql_select_db ("travel",$con);
	$query = "select * from user where username='$username'";
	$results = mysql_query ($query, $con);
	$num_results = mysql_num_rows ($results);	  
	if ($num_results ==1) {
		$user=mysql_fetch_array($results);
		$attempts = $user['attempts'];
		$pass = $user['password'];
		$time= $user['timestamp'];
			if($username == 'admin')
	           {
		$_SESSION["logged_in"] = true;
	    $_SESSION["username"] = $user['username'];
		header ("location:events.php");
	            }
			
	else if ($pass == $password) {
			if ($time >time()) {
					header ("location:index.html");
			}
			else {
				$query = "update user set timestamp='0' where username = '$username'";
				mysql_query ($query, $con);
				$query = "update user set attempts='0' where username = '$username'";
				mysql_query ($query, $con);
				$_SESSION["logged_in"] = true;
				$_SESSION["username"] = $user['username'];
				header("location:services.php");
			}
		}
		else {
			$attempts = $attempts + 1;
			$query = "update user set attempts='$attempts' where username = '$username'";
			mysql_query ($query, $con);
			
			if($attempts>3){
				$time = time() + (60 * 1);
				$query = "update user set timestamp='$time' where username = '$username'";
				mysql_query ($query, $con);
			}
			if ($attempts>=4) {
				header("location:index.html");
			}
			else{	
				echo "<h2 align='center'>Invalid login</h2>";
				header ("location:index.html");
			}
		}
				
	}
	else {
		echo "<h2 align='center'>Invalid Username<br/>";
		header("location:index.html");
	}
	
	
?>