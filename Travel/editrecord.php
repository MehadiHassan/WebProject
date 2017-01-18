<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<?php
session_start();
if($_SESSION["logged_in"]==true){
$con=mysql_connect("localhost","root","");
mysql_select_db("travel",$con);
  if($_POST)
  {
	if($_POST['event']=="edit"){
		    $eid=$_POST['eid'];
			$country=$_POST["country"];
			$region=$_POST["region"];
			$city=$_POST["city"];
			$date=$_POST["datetime"];
			$geoinfo=$_POST["geoinfo"];
			$comment=$_POST["comment"];
			$query="update record set country='$country', region='$region', city='$city', datetime='$date', geoinfo='$geoinfo' , comment='$comment' where eid=$eid";
			$result=mysql_query($query,$con);
			if(!$result){
				echo "Error: ".mysql_error();
			}
		}
   }
 if($_GET){
		if($_GET['event']=="delete"){
			$eid=$_GET['eid'];	
			$query="delete from record where eid=$eid";
			$result=mysql_query($query,$con);
			if(!$result){
				echo "Error: ".mysql_error();
			}			
		}
	}   
?>	
        <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Contact - Travel</title>
        <meta name="description" content="">
<!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="images/logo.png" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
									<li><a href="logout.php">Log Out</a></li>
                                    <li><a href="services.php">Visit Info</a></li>
									<li><a href="events.php">Visit Record</a></li>
									
									<li class="active"><a href="editrecord.php">Edit Record</a></li>
                                	<li><a href="about.html">About Kate</a></li>

                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                    <li><a href="logout.php">Log Out</a></li>
                                    <li><a href="services.php">Visit Info</a></li>
                                    <li><a href="events.php">Visit Record</a></li>
									<li class="active"><a href="editrecord.php">Edit Record</a></li>
                                	<li><a href="about.html">About Kate</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->

        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->

        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Kate Travel Record</h3>
                        <div class="map-holder">
						
						<?php	
						$query="select * from record";
                    	$result=mysql_query($query,$con);	
	                    $num=mysql_num_rows($result);
                    if($result)
                    {
											
	             for($i=0;$i<$num;$i++){
		$eid=mysql_result($result,$i,"eid");
		$country=mysql_result($result,$i,"country");
		$region=mysql_result($result,$i,"region");
		$city=mysql_result($result,$i,"city");
		$date=mysql_result($result,$i,"datetime");
		$geoinfo=mysql_result($result,$i,"geoinfo");
		$comment=mysql_result($result,$i,"comment");
		echo "<tr>";
		    echo "Country: ";
			echo "<td>$country</td></br>";
			echo "Region: ";
			echo "<td>$region</td></br>";
			echo "City: ";
			echo "<td>$city</td></br>";
			echo "Date and Time: ";
			echo "<td>$date</td></br>";
			echo "Geographical info: ";
			echo "<td>$geoinfo</td></br>";
			echo "Comment: ";
			echo "<td>$comment</td></br>";
	     	echo "</tr>";
			echo "</br>";
	}					
	
					}
						?>
						</div>
						
                        <div class="contact-infos">
                            <ul>
                                <li>123 Thamine Street, Digital Estate</li>
                                <li>Yangon 10620, Myanmar</li>
                                <li>Tel: 010-020-0340</li>
                                <li>Email: <a href="mailto:kate@company.com">kate@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Edit Visit Record</h3>

						                        <div class="contact-form">
<?php
	$query="select * from record";
	$result=mysql_query($query,$con);	
	$num=mysql_num_rows($result);	
	for($i=0;$i<$num;$i++){
		$eid=mysql_result($result,$i,"eid");
		$country=mysql_result($result,$i,"country");
		$region=mysql_result($result,$i,"region");
		$city=mysql_result($result,$i,"city");
		$date=mysql_result($result,$i,"datetime");
		$geoinfo=mysql_result($result,$i,"geoinfo");
		$comment=mysql_result($result,$i,"comment");
	
	}
	
	echo "<td><a href='editrecord.php?event=edit&eid=$eid&country=$country&region=$region&city=$city&datetime=$date&geoinfo=$geoinfo&comment=$comment'>Update Record</a></td></br>";
	echo "<td><a href='editrecord.php?event=delete&eid=$eid'>Delete Record</a></td>";
	
	if($_GET){
		if($_GET['event']=="edit"){
			$eid=$_GET['eid'];	
			$country=$_GET['country'];
			$region=$_GET['region'];
			$city=$_GET['city'];
			$datetime=$_GET['datetime'];
			$geoinfo=$_GET['geoinfo'];
			$comment=$_GET['comment'];
?>
      <form name="contactform" id="contactform" action="editrecord.php" method="post">	
			<form  action="editrecord.php" method="post">
			<tr>
				<td>Country</td>
				<td><input type="text" name="country" placeholder="country"/></td>
			</tr>
			<tr>
				<td>Region</td>
				<td><input type="text"  name="region" placeholder="region" /></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" placeholder="city" /></td>
			</tr>
			<tr>
				<td>Dates Of Visit</td>
				<td><input type="date" name="datetime" /></td>
			</tr>
			<tr>
				<td>Geographical Information</td>
				<textarea type="message" name="geoinfo" placeholder="geographical info"></textarea>
			</tr>
			<tr>
				<td>Comments</td>
				<td><input type="text" name="comment"  placeholder="comments"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				     <input type="hidden" name="eid" value="<?php echo $eid?>" />
					 <input type="hidden" value="edit" name="event" />
					 <input type="submit" value="Edit Record">
				</td>
			</tr>
                           
                         </form>
							</div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>
					
		<div class="partner-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner1.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner2.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner3.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner1.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner2.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item last">
                            <img src="images/partners/partner3.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->


        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>Copyright &copy; 2016 <a href="#">Tamanna Tabassum Khan</a></span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('.first-map, .map-holder').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 16,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>
        <!-- templatemo 409 travel --> 

    </body>
</html>	 
<?php
     }
   }
  }
 ?>

