
<?php
/*
============================
QuickCaptcha 1.0 - A bot-thwarting text-in-image web tool.
Copyright (c) 2006 Web 1 Marketing, Inc.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
============================
See settings.php for common settings. You shouldn't need to change
anything in this file.
============================
*/
include "settings.php";

session_start();
$string = strtoupper($_SESSION['string']);
$userstring = strtoupper($_POST['userstring']); 
   

if ($string == $userstring) 
{

} else {
 
  header("Location: choice.php");
  exit();
}
?>
<?php
$email=$_SESSION['email'];
if(is_null($email))
{   echo "<script>alert('Please Login!');</script>";
 echo "<script>window.location='index.php'</script>";
    ob_start();
    // header('Location:index.php');
    ob_end_flush();
    die();
}
?>

<?php 
$budge=$_POST['budget'];
$ram=$_POST['ram'];
$ram=(int)$ram;
$HDD=$_POST['HDD'];
$gpu=$_POST['gpu'];
$gpu=(int)$gpu;
$processor=$_POST['processor'];
/*print_r($processor);
echo '<br>';
print_r($gpu);
echo '<br>';
print_r($ram);
echo '<br>';
print_r($HDD);*/
 
 //echo $ram;
  $connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");

  $budget=(int)$budge;
  $ram_price=(int)(2*$budget/10);
  $hdd_price=(int)(2*$budget/10);

  $qry1="SELECT * FROM ram WHERE rsize=$ram and rprice<=$ram_price";
  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $numrows=mysqli_num_rows($executequery);
  $random= rand(0,$numrows-1);
  $ram_no=$numrows-1;
   while($row = mysqli_fetch_assoc($executequery)) {
  $rsolutions[] = $row;
}
//$ram_name=$rsolutions[$numrows-1]['rname'];
//$cost=$cost+$rsolutions[$numrows-1]['rprice'];
  
  $qry1="SELECT * FROM hdd WHERE hsize='$HDD'"; 
  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $numrows=mysqli_num_rows($executequery);
  $random= rand(0,$numrows-1);
  $hdd_no=$random;
    while($row = mysqli_fetch_assoc($executequery)) {
  $hsolutions[] = $row;
}
//$hdd_name=$hsolutions[$random]['hname'];
//$cost=$cost+$hsolutions[$random]['hprice'];
$bd=(int)($ram_price/2);
$qry1="SELECT * FROM motherboard WHERE mprice <= $bd";

$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $numrows=mysqli_num_rows($executequery);
  $random= rand(0,$numrows-1);
  $mb_no=$random;

  while($row = mysqli_fetch_assoc($executequery)) {
  $msolutions[] = $row;
}
//$mb_name=$msolutions[$random]['mname'];
//$cost=$cost+$msolutions[$random]['mprice'];

$qry1="SELECT * FROM gpu WHERE gram=$gpu";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $numrows=mysqli_num_rows($executequery);
  $random= rand(0,$numrows-1);
$gpu_no=$random;
  while($row = mysqli_fetch_assoc($executequery)) {
  $gsolutions[] = $row;
}

//$gpu_name=$gsolutions[$random]['gname'];
//$cost=$cost+$gsolutions[$random]['gprice'];
$c=(int)($budget/2);

$qry1="SELECT * FROM processor WHERE pgen = '$processor'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $numrows=mysqli_num_rows($executequery);
  $random= rand(0,$numrows-1);
  $proc_no=$random;
  while($row = mysqli_fetch_assoc($executequery)) {
  $psolutions[] = $row;
}

//$proc_name=$psolutions[$random]['pname'];
//$cost=$cost+$psolutions[$random]['pprice'];

$cost=0;
?>
<!doctype html>
<html lang="en">
<head>
<style type="text/css">
    #dash
    {
        display: none;
    }
    .parties
    {

    }
    .random_class{

    }

</style>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Products for you.</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    HardWare
                </a>
            </div>

            <ul class="nav">
               
                    <li class="active">

                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Recommended Product</p>
                    </a>
                    <?php


  /*$qry1="SELECT * FROM husers WHERE usremail='$email'";


  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $row = mysqli_fetch_assoc($executequery);
  $id= $row['userid'];
$qry1="SELECT * FROM orders WHERE userid='$id'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
$numrows=mysqli_num_rows($executequery);
    while($row =mysqli_fetch_assoc($executequery))
      $osolutions[] = $row;
       
  /*    for($i=0;$i<$numrows;$i++)
      {
        echo '<li>'.$osolutions[$i]['oprocessor'].'<br>'.$osolutions[$i]['oram'].'<br>'.$osolutions[$i]['ohdd'].'<br><h3>Order '.($i+1).' cost:'.$osolutions[$i]['ordercost'].'</h3><br><br><hr></li>';
      }*/
                    ?>
                </li>
                <li><a href="mycart.php">
                        <i class="pe-7s-graph"></i>
                        <p>My cart</p>
                    </a></li>


		
<?php 
 /*for($i=0;$i<$numrows;$i++)
      {
        echo '<li>'.$osolutions[$i]['oprocessor'].'<br>'.$osolutions[$i]['oram'].'<br>'.$osolutions[$i]['ohdd'].'<br><h3>Order '.($i+1).' cost:'.$osolutions[$i]['ordercost'].'</h3><br><br><hr></li>';
      }
         */
?>
               
                
              
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Products</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                              
                            </a>
                        </li>
                        
                        <li>
                            <a href="logout.php" class="btn">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="content">

<div class="container-fluid"><?php
$id = rand(3,6); 
$cost=$psolutions[$proc_no]['pprice']+$gsolutions[$gpu_no]['gprice']+$msolutions[$mb_no]['mprice']+$hsolutions[$hdd_no]['hprice']+$rsolutions[$ram_no]['rprice'];
//echo $cost;
$cost1=$cost;
for($i=0;$i<2;$i++) {
	$cost=0;
	$proc_no1=$proc_no;
	$gpu_no1=$gpu_no;
	$mb_no1=$mb_no;
	$hdd_no1=$hdd_no;
	$ram_no1=$ram_no;
	$cost=$psolutions[$proc_no]['pprice']+$gsolutions[$gpu_no]['gprice']+$msolutions[$mb_no]['mprice']+$hsolutions[$hdd_no]['hprice']+$rsolutions[$ram_no]['rprice'];
	echo '
	<div class="row" id="row" style=" border-radius: 25px; border: 2px solid #73AD21; height:280px">
	<div class="col-sm-5"><img src="'.$id.'.jpeg" style="height:250px; position:relative;left:30px;top:17px;"/></div><div class="col-sm-7" style="color:#7E3992;position:relative;top:20px;">'.$psolutions[$proc_no]['pname'].'<br>'.$rsolutions[$ram_no]['rname'].'<br>'.$hsolutions[$hdd_no]['hname'].'<br>'.$msolutions[$mb_no]['mname'].'<br>'.$gsolutions[$gpu_no]['gname'].'<h3>Total cost:'.$cost.'</h3><br><button id="buy'.$i.'" name="buy" class="btn btn-info btn-lg">Add to Cart</button></div></div><br><br>';
$mb_no= rand(0,$mb_no);
	$proc_no=rand(0,$proc_no);
	$ram_no=rand(0,$ram_no);
	$hdd_no=rand(0,$hdd_no);
	$gpu_no=rand(0,$gpu_no);
	$id=$id-1;
}
//echo $cost;
?>
</div>
</div>



                        </div>
                    </div>
               </div>
      


      <footer style="    background-color: rgba(28, 27, 28, 0.75);
    margin:0px auto;
    padding: 20px 0px 20px 0px;">
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address style="font-size: 80%;
    margin: 0px;
    color:#E1E1B6;">
                      A-42, Swapnashilp Society,<br>
                      Mahant Road, VileParle(East)<br>
                      Mumbai-400057,<br>
                      India<br>
                      <i class="fa fa-phone"></i>: +91 1234 5678<br>
                      <i class="fa fa-fax"></i>: +91 8765 4321<br>
                      <i class="fa fa-envelope"></i>: 
                        <a href="mailto:confusion@food.net">ceo@hardware.com</a>
                   </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center style="color:#E1E1B6;">© Copyright 2016 HardWare.Inc</p>
                </div>
            </div>
        </div>
    </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	
<script type="text/javascript">
	$('#buy0').on('click', function (){
	var ram="<?php echo $rsolutions[$ram_no1]['rname'];?>";
	var proc="<?php echo $psolutions[$proc_no1]['pname'];?>";
	var hdd="<?php echo $hsolutions[$hdd_no1]['hname'];?>";
	var mb="<?php echo $msolutions[$mb_no1]['mname'];?>";
	var gpu="<?php echo $gsolutions[$gpu_no1]['gname'];?>";

	var cost=<?php echo $cost1;?>;
  console.log(cost);
  var id=<?php echo ($id+1);?>;
	console.log(ram+proc+hdd+mb+gpu+cost);
	var urlString="ram="+ram+"&processor="+proc+"&hdd="+hdd+"&mb="+mb+"&gpu="+gpu+"&cost="+cost+"&id="+id;
	console.log("this is urlString:"+urlString);
	var a=confirm("Add to cart?");
  if(a==1){
$.ajax
  ({
  url: "getjsondata.php",

  type : "POST",
  cache : false,
  data : urlString,
  success: function(response)
  {
 	//alert(response);
 	//window.location="getjsondata.php";
  },
  complete: function(response)
  {
  	alert("Done");
  },
  error: function(response)
  {
  	alert(response);
  }

  });
//window.location.href=window.location.href;
}
});


$('#buy1').on('click', function (){
  var ram="<?php echo $rsolutions[$ram_no]['rname'];?>";
  var proc="<?php echo $psolutions[$proc_no]['pname'];?>";
  var hdd="<?php echo $hsolutions[$hdd_no]['hname'];?>";
  var mb="<?php echo $msolutions[$mb_no]['mname'];?>";
  var gpu="<?php echo $gsolutions[$gpu_no]['gname'];?>";
  var cost=<?php echo $cost;?>;
  var id=<?php echo $id;?>;
  console.log(ram+proc+hdd+mb+gpu+cost+id);
  var urlString="ram="+ram+"&processor="+proc+"&hdd="+hdd+"&mb="+mb+"&gpu="+gpu+"&cost="+cost+"&id="+id;
  console.log("this is urlString:"+urlString);
  var a=confirm("Add to Cart?");
  if(a==1){
$.ajax
  ({
  url: "getjsondata.php",

  type : "POST",
  cache : false,
  data : urlString,
  success: function(response)
  {
  //alert(response);
  //window.location="getjsondata.php";
  },
  complete: function(response)
  {
    alert("Done");
  },
  error: function(response)
  {
    alert(response);
  }

  });
//window.location.href=window.location.href;
}
});
	
</script>

</html>
