 <?php
session_start();
if($_SESSION["logged_in"]==true){
$con=mysql_connect("localhost","root","");
mysql_select_db("travel",$con);
  if($_POST)
  {
	if($_POST['event']=="edit"){
			$country=$_POST["country"];
			$region=$_POST["region"];
			$city=$_POST["city"];
			$datetime=$_POST["datetime"];
			$geoinfo=$_POST["geoinfo"];
			$comment=$_POST["comment"];
			$query="update record set country='$country', region='$region', city='$city', datetime='$datetime', geoinfo='$geoinfo' , comment='$comment' where eid=$eid";
			$result=mysql_query($query,$con);
			if(!$result){
				echo "Error: ".mysql_error();
			}
		}
   }		
	}
?>
