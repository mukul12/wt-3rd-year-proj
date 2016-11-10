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

    <title>HardWare: Shopping Cart</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
  <!--  <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
</head>
<body>



<div class="">
        <nav class="navbar navbar-default navbar-fixed">
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

<div class="content">

<div class="container">


<!--TEST HERE ______________________________________________________________________________________________-->

<div class="row">
     <div class="col-md-12">

     <?php
     $connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");

  $qry1="SELECT * FROM husers WHERE usremail='$email'";


  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $row = mysqli_fetch_assoc($executequery);
  $id= $row['userid'];
$qry1="SELECT * FROM cart WHERE userid='$id'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
$numrows=mysqli_num_rows($executequery);
    while($row =mysqli_fetch_assoc($executequery))
      $cartsolutions[] = $row;
       
  /*    for($i=0;$i<$numrows;$i++)
      {
        echo '<li>'.$osolutions[$i]['oprocessor'].'<br>'.$osolutions[$i]['oram'].'<br>'.$osolutions[$i]['ohdd'].'<br><h3>Order '.($i+1).' cost:'.$osolutions[$i]['ordercost'].'</h3><br><br><hr></li>';
      }*/
                    ?>
                </li>

    <h1> Shopping Cart</h1><br>
     
        <table class="table table-bordered table-striped">
          <thead>
              <tr>
                <th>Remove</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Reference No:</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $sum=0;
             for($i=0;$i<$numrows;$i++){
              if(is_null($cartsolutions[$i]['oprocessor'])){
            echo '
              <tr>
                <td class=""><button class="btn bg-info" name="'.$cartsolutions[$i]['cartid'].'" id="check_button"><i class="fa fa-check-circle-o"></i></button></td>

                <td class="muted center_text"><a href="#"><img class="img-responsive" style="height:250px;" src="limg/'.$cartsolutions[$i]['imageid'].'.jpeg"></a></td>
                <td>'.$cartsolutions[$i]['oprocessor'].'<br>'.$cartsolutions[$i]['oram'].'<br>'.$cartsolutions[$i]['ohdd'].'<br>'.$cartsolutions[$i]['omotherboard'].'<br>'.$cartsolutions[$i]['ogpu'].'</td>
                <td>'.($cartsolutions[$i]['cartid']+1000).'</td>
                <td>1</td>
                <td>'.$cartsolutions[$i]['ordercost'].'</td>
                <td>'.$cartsolutions[$i]['ordercost'].'</td>
              </tr>';
              $sum=$sum+$cartsolutions[$i]['ordercost'];}
              else{
                echo '
              <tr>
                <td class=""><button class="btn bg-info" name="'.$cartsolutions[$i]['cartid'].'" id="check_button"><i class="fa fa-check-circle-o"></i></button></td>

                <td class="muted center_text"><a href="#"><img class="img-responsive" style="height:250px;" src="'.$cartsolutions[$i]['imageid'].'.jpeg"></a></td>
                <td>'.$cartsolutions[$i]['oprocessor'].'<br>'.$cartsolutions[$i]['oram'].'<br>'.$cartsolutions[$i]['ohdd'].'<br>'.$cartsolutions[$i]['omotherboard'].'<br>'.$cartsolutions[$i]['ogpu'].'</td>
                <td>'.($cartsolutions[$i]['cartid']+1000).'</td>
                <td>1</td>
                <td>'.$cartsolutions[$i]['ordercost'].'</td>
                <td>'.$cartsolutions[$i]['ordercost'].'</td>
              </tr>';
              $sum=$sum+$cartsolutions[$i]['ordercost'];
                }}  
                if(isset($_POST['input01']) )
                {
                  $disccost=(int)($sum/10);
                  $code=$_POST['input01'];
                 // echo $code;
                  $mycode="mukulisgod";
                  if(!strcasecmp($code,$mycode) && !isset($_COOKIE['Discount'])){
                    $sum=$sum-$disccost;
                    setcookie('Discount', 1, time()+86400, '/');
                    $qry1="INSERT INTO discount values (NULL,$sum,$id)";
                    $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
                  }
                  else if(!strcasecmp($code,$mycode) && isset($_COOKIE['Discount']) )
                  {
                    $sum=$sum-$disccost;
                  }
                }


                 ?>                    
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
               <?php   echo'<td><strong>'.$sum.'</strong></td>' ?>
              </tr>       
            </tbody>
          </table>
          
          <form class="form-horizontal" method="POST" action="mycart.php">
        <fieldset>    
          
          
                    <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">

                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  <h3>Apply discount code</h3>
                </a>
              </div>
              <div style="height: auto;" id="collapseOne" class="accordion-body in collapse">
                <div class="accordion-inner">
          <div class="control-group">
            <label for="input01" class="control-label">Discount code: </label>
            <div class="controls">
              <input id="input01" name="input01" class="input-xlarge" placeholder="Enter your coupon here" type="text">
              <p class="help-block">You can only use one discount code at a time</p>
            </div>
          </div>
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    <h3>Use gift voucher</h3>
                </a>
              </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
          <div class="control-group">
            <label for="input01" class="control-label">Gift voucher: </label>
            <div class="controls">
              <input id="input02" name="input02" class="input-xlarge" placeholder="Enter your gift voucher here" type="text value="">
              <p class="help-block">You can use multiple gift vouchers at a time</p>
            </div>
          </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-md-5 col-xs-6">
            <button class="btn btn-primary" id="Update" type="submit" name="Update">Update</button>
            </div>        
            <div class="col-xs-6" style="text-align:right;">
            <a href="choice.php" class="btn btn-primary" id="shop" name="shop">Continue shopping</a>
            </div>        
            
          </div>
          <br>
          <br>
        
          <hr>
          <div class="row">
          <div class="col-md-7 col-xs-12">
            <a href="placeorder.php" class="btn btn-primary pull-right" style="height:50px; width:200px;font-size:22px">Checkout</a>
           
            </div>
            </div>
            
        </fieldset>
        </form>



</div> <!-- /container -->




<!-- Le javascript
================================================== -->

<!--<script src="js/jquery.rating.pack.js"></script> -->



</div>

</div>
</div>



                        </div>
                    </div>
               </div>
      


      


    </div>
</div>
 <br>
            <br>
            <br>
            <br>
            <br>
            <br> <br>
            <br>
            <br>
            <br>
            <br>
            <br>

</body>

    <!--   Core JS Files   -->
  <!--  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> -->

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <!-- <script src="assets/js/light-bootstrap-dashboard.js"></script> -->

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
<script type="text/javascript">
//     $('#buy0').on('click', function (){
//     var ram="<?php //echo $rsolutions[$ram_no1]['rname'];?>";
//     var proc="<?php //echo $psolutions[$proc_no1]['pname'];?>";
//     var hdd="<?php //echo $hsolutions[$hdd_no1]['hname'];?>";
//     var mb="<?php //echo $msolutions[$mb_no1]['mname'];?>";
//     var gpu="<?php //echo $gsolutions[$gpu_no1]['gname'];?>";
//     var cost=<?php //echo $cost1;?>;
//     console.log(ram+proc+hdd+mb+gpu+cost);
//     var urlString="ram="+ram+"&processor="+proc+"&hdd="+hdd+"&mb="+mb+"&gpu="+gpu+"&cost="+cost;
//     console.log("this is urlString:"+urlString);
//     var a=confirm("Do you want to buy?");
//   if(a==1){
// $.ajax
//   ({
//   url: "getjsondata.php",

//   type : "POST",
//   cache : false,
//   data : urlString,
//   success: function(response)
//   {
//     alert(response);
//     //window.location="getjsondata.php";
//   },
//   complete: function(response)
//   {
//     alert("In complete");
//   },
//   error: function(response)
//   {
//     alert(response+"TERA AJAX FAILED HAI BOSS");
//   }

//   });
// //window.location.href=window.location.href;
// }
// });


// $('#buy1').on('click', function (){
//   var ram="<?php //echo $rsolutions[$ram_no]['rname'];?>";
//   var proc="<?php //echo $psolutions[$proc_no]['pname'];?>";
//   var hdd="<?php //echo $hsolutions[$hdd_no]['hname'];?>";
//   var mb="<?php //echo $msolutions[$mb_no]['mname'];?>";
//   var gpu="<?php //echo $gsolutions[$gpu_no]['gname'];?>";
//   var cost=<?php //echo $cost;?>;
//   console.log(ram+proc+hdd+mb+gpu+cost);
//   var urlString="ram="+ram+"&processor="+proc+"&hdd="+hdd+"&mb="+mb+"&gpu="+gpu+"&cost="+cost;
//   console.log("this is urlString:"+urlString);
//   var a=confirm("Do you want to buy?");
//   if(a==1){
// $.ajax
//   ({
//   url: "getjsondata.php",

//   type : "POST",
//   cache : false,
//   data : urlString,
//   success: function(response)
//   {
//   alert(response);
//   //window.location="getjsondata.php";
//   },
//   complete: function(response)
//   {
//     alert("In complete");
//   },
//   error: function(response)
//   {
//     alert(response+"TERA AJAX FAILED HAI BOSS");
//   }

//   });
// //window.location.href=window.location.href;
// }
// });

// $('#Update').on('click',function()
// {
// var sum=<?php //echo $sum; ?>;
// var disccost=(int)(sum/10);
// var code= input01.val();
// var disccode= "mukulisgod";
// if(code==disccode){
// sum=sum-disccost;
// var urlString="mynewcost="+sum;
//       $.ajax
//       ({
//   url: "mycart.php",

//   type : "POST",
//   cache : false,
//   data : urlString,
//   success: function(response)
//   {
//     window.location="mycart.php";
//   //alert(response);
//   //window.location="getjsondata.php";
//   },
//   complete: function(response)
//   {
//     alert("Discount Added");
//     response;
//   },
//   error: function(response)
//   {
//     alert(response+"TERA AJAX FAILED HAI BOSS");
//   }

//   });
// }

// });
    
  $(document).on('click', '#check_button', function(e){
      var id= parseInt(e.currentTarget.name);
      console.log(id);
      var urlString="id="+id;
      $.ajax
      ({
  url: "remove.php",

  type : "POST",
  cache : false,
  data : urlString,
  success: function(response)
  {
    window.location="mycart.php";
  //alert(response);
  //window.location="getjsondata.php";
  },
  complete: function(response)
  {
    alert("Removed");
    response;
  },
  error: function(response)
  {
    alert(response+"TERA AJAX FAILED HAI BOSS");
  }

  });


  });

  
    
</script>

</html>
