<?php
        if(isset($_POST['search_name']))
		{
		 $search_name=$_POST['search_name'];
	$connect = mysql_connect("localhost", "root", "")
	or die ("Couldn't connect to database");
	mysql_select_db ("travel",$connect);
			$query = "SELECT country,region,city,datetime,geoinfo,comment FROM record WHERE country LIKE '%".$search_name."%'";
			$result =mysql_query($query,$connect);
			while($row = mysql_fetch_array($result))
			{
				
				        $country = $row['country'];
		                $region = $row['region'];
		                $city= $row['city'];
						$datetime=$row['datetime'];
						$geoinfo=$row['geoinfo'];
						$comment=$row['comment'];
						echo $country.'<br>';
						echo $region.'<br>';
						echo $city.'<br>';
						echo $datetime.'<br>';
						echo $geoinfo.'<br>';
						echo $comment.'<br>';
						
			}
		}
	 
?>
