<?php
session_start();
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

<!doctype html>
<html>
<head>

	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Hardware: Receipt</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
  @media print {
   .noprint{
      display: none !important;
   }
}

  body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}
              html { 
  background: url("cloud.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style>



</head>   

<body>

<?php 

$connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");
$fname=$_POST['fname'];

$lname=$_POST['lname'];
$cemail=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$landmark=$_POST['landmark'];
  
  $qry1="SELECT * FROM husers WHERE usremail='$email'";
  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $row = mysqli_fetch_assoc($executequery);
  $id= $row['userid'];
  $money=$row['usrcredit'];
  // echo $money;
  // echo $id;
$qry1="SELECT * FROM cart WHERE userid='$id'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
$numrows=mysqli_num_rows($executequery);
    while($row =mysqli_fetch_assoc($executequery))
      $cartsolutions[] = $row;
  //$dude=$_COOKIE['action'];
if (isset($_COOKIE['action'])) {
  
} else {
  setcookie('action', 1, time()+300, '/');
  for($i=0;$i<$numrows;$i++)
    {
    $ram=$cartsolutions[$i]['oram'];
    $proc=$cartsolutions[$i]['oprocessor'];
    $cost=$cartsolutions[$i]['ordercost'];
    $hdd=$cartsolutions[$i]['ohdd'];
    $mb=$cartsolutions[$i]['omotherboard'];
    $gpu=$cartsolutions[$i]['ogpu'];
    $meraid=$cartsolutions[$i]['cartid'];
    $qry1="INSERT INTO orders VALUES (NULL, $cost, '$ram', '$proc', '$hdd', '$mb', '$gpu',$id)";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($conn));
    $qry1="DELETE FROM cart WHERE cartid=$meraid";
    }
 $qry1="INSERT INTO orders_customer VALUES (NULL, '$fname', '$lname', '$cemail', '$address', '$contact', '$landmark',$id)";
  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));

    $qry1="SELECT SUM(ordercost) as SUM FROM cart WHERE userid='$id'";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
    $row =mysqli_fetch_assoc($executequery);
    $payment=$row['SUM'];
    
    $qry1="SELECT * FROM discount WHERE userid='$id'";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
    $row =mysqli_fetch_assoc($executequery);
   $discountprice=$row['sum'];
  if(!is_null($discountprice)){
    $payment=$discountprice;
  }
  $money=$money-$payment;
    $qry1="UPDATE husers SET usrcredit='$money' WHERE userid='$id'";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));

}

 $qry1="SELECT SUM(ordercost) as SUM FROM cart WHERE userid='$id'";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
    $row =mysqli_fetch_assoc($executequery);
    $payment=$row['SUM'];
     $qry1="SELECT * FROM discount WHERE userid='$id'";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
    $row =mysqli_fetch_assoc($executequery);
   $discountprice=$row['sum'];
  if(!is_null($discountprice)){
    $payment=$discountprice;
  }
    $money=$money-$payment;

   

?>

<nav class="navbar navbar-default navbar-fixed no-print">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="choice.php">Products</a>
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

<div class="container">
<div class="jumbotron"  style="background-color: white;">
<blockquote>Transaction details</blockquote>
<?php 
$qry1="SELECT * FROM cart WHERE userid='$id'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
$numrows=mysqli_num_rows($executequery);
    while($row =mysqli_fetch_assoc($executequery))
      $osolutions[] = $row;
echo '<p>Seller:<br><h6>HardWare.Inc <br>A-42, Swapnashilp Society,<br>
                      Mahant Road, VileParle(East)<br>
                      Mumbai-400057,<br>
                      India<br><br> </h6></p>
<p>Buyer:<br><h6>'.$fname.' '.$lname.'<br>'.$address.'<br>'.$contact.'</h6><br> New balance = Rs '.$money.'<br> Order Placed.</p>';

for($i=0;$i<$numrows;$i++)
{
echo'<div class="row">'.($i+1).'<p><br> '.$osolutions[$i]['oprocessor'].'<br>'.$osolutions[$i]['oram'].'<br>'.$osolutions[$i]['ohdd'].'<br>'.$osolutions[$i]['omotherboard'].'<br>'.$osolutions[$i]['ogpu'].'<br> Cost: Rs '.$osolutions[$i]['ordercost'].'</p><hr></div>'; 

    } 
echo '<h3>Total Cost: Rs '.$payment.'</h3>';
    for($i=0;$i<$numrows;$i++){
    $meraid=$osolutions[$i]['cartid'];
    $qry1="DELETE FROM cart WHERE cartid=$meraid";
    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));

    }
$qry1="DELETE FROM discount WHERE userid=$id";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
    ?>
<div style="text-align:center;">
<button onclick="myFunction()" id="print" class="btn btn-primary noprint" >Print Receipt</button>
<p class="noprint">DO NOT REFRESH BEFORE PRINTING</p>
</div>


</div>
</div>


<script>
$(function()
{
    $('#print').on("click",function()

    {
// $(".no-print").css('display', 'none');

window.print();



    });




});

</script>

</body>
</html>