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

<?php 

$connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");

  $qry1="SELECT * FROM husers WHERE usremail='$email'";


  $executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $row = mysqli_fetch_assoc($executequery);
  $id= $row['userid'];
  $money=$row['usrcredit'];
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
?>
<!DOCTYPE html>
<html>
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
      display: none;

    }

</style>


	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Hardware: Payment.</title>

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
    <style>
    body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
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

<div >


<div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="receipt.php" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name"  />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input maxlength="100" type="text" required="required" id="email" name="email" class="form-control" placeholder="Enter Email" />
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea required="required" class="form-control" id="address" name="address" placeholder="Enter your address" ></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
          <div class="form-group">
            <label class="control-label">Contact No</label>
            <input maxlength="200" type="text" required="required" id="contact" name="contact" class="form-control" placeholder="Enter Contact no" />
          </div>
          <div class="form-group">
            <label class="control-label">Nearest landmark</label>
            <input maxlength="200" type="text" required="required" id="landmark" name="landmark" class="form-control" placeholder="landmark"  />
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3><?php 
          echo '
          <blockquote>Your credits: Rs '.$money.'</blockquote>
          <br>
          <blockquote>Total Payment: Rs '.$payment.'</blockquote><br>'; 
          ?>
          <div class="random_class"><blockquote>Insufficient Funds</blockquote></div>
          <button class="btn btn-success btn-lg pull-right" id="payment" type="submit">Pay</button>
        </div>
      </div>
    </div>
  </form>
  
</div>


</div>
<script type="text/javascript">


	$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');



  var money=<?php echo $money;?>;
  var payment=<?php echo $payment;?>;
  if(money<payment)
  {
    $('#payment').hide();
    $('.random_class').toggle();

  }
});
</script>

</body>
</html>