<?php
session_start();
if(isset($_SESSION['email']))

$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
    <title>HardWare- CheapWare: Contact Us</title>
        <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    
    
    
    <style>
        
        
        

        .navbar-custom {
  background-color: transparent;
  border-color: transparent;
}
.navbar-custom .navbar-brand {
  color: #fed136;
  font-family: "Kaushan Script", "Helvetica Neue", Helvetica, Arial, cursive;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus,
.navbar-custom .navbar-brand:active,
.navbar-custom .navbar-brand.active {
  color: #fec503;
}
.navbar-custom .navbar-collapse {
  border-color: rgba(255, 255, 255, 0.02);
}
.navbar-custom .navbar-toggle {
  background-color: #fed136;
  border-color: #fed136;
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  color: #fed136;
  font-size: 12px;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #fed136;
}
.navbar-custom .nav li a {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  letter-spacing: 1px;
  color: #fed136;
}
.navbar-custom .nav li a:hover,
.navbar-custom .nav li a:focus {
  color: #fed136;
  outline: none;
}
.navbar-custom .navbar-nav > .active > a {
  border-radius: 0;
  color: #fed136;
  background-color: #fed136;
}
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: white;
  background-color: #fec503;
}
@media (min-width: 768px) {
  .navbar-custom {
    background-color: rgba(126, 57, 146, 0.86);
    padding: 25px 0;
    -webkit-transition: padding 0.3s;
    -moz-transition: padding 0.3s;
    transition: padding 0.3s;
    border: none;
  }
  .navbar-custom .navbar-brand {
    font-size: 2em;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
  }
  .navbar-custom .navbar-nav > .active > a {
    border-radius: 3px;
  }
}
@media (min-width: 768px) {
  .navbar-custom.affix {
    background-color: transparent;
    padding: 10px 0;
  }
  .navbar-custom.affix .navbar-brand {
    font-size: 1.5em;
  }
}
        
        
    </style>
    

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-inverse navbar-custom navbar-fixed-top"    >
        <div class="container"  >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><h1 style=" color: #d54d7b;     position: relative;
    left: -40px; top:20px;  font-family: Great Vibes,cursive; font-size: 65px; line-height: 0px; font-weight: normal; margin-bottom: 0px;
                                                            margin-top: 0px; text-align: center; text-shadow: 0 1px 1px #fff; ">Hardware</h1></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     
                    <?php if(isset($email))
                    {

                    echo '<li style="position: relative; top:15px; font-size: 15px; color: white;"><b>Welcome</b> '.$email.'</li> ';
                     }

                    ?>
                    
                    
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li> <span style="position:relative;top:17px;left:7px" class="glyphicon glyphicon-shopping-cart"></span></li>
                    <li>

                        <a class="page-scroll" href="mycart.php">Cart</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contactus.php">Contact us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Team</a>
                    </li>
                    
               <?php  if(!isset($email)){
                    echo '<li>
                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login-modal">
              <span class="glyphicon glyphicon-user"></span> Login
        </button>
                    </li>
                    
                    <li>
          
          
        </li>
         <li>
        
         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login-modal1">
              <span class="glyphicon glyphicon-user"></span> SignUp
        </button>
          
          
        </li>'; }
else
{
    echo '<li>
                            <button onclick= "window.location=\'logout.php\';" class="btn btn-info btn-lg">
                                Log out
                            </button>
                        </li>';
}
        ?>
                </ul>
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>










    <!-- Modal -->
  <div class="modal fade" id="login-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header1" style="padding:35px 50px;   background-color: #7E3992;
      color:white !important;
      text-align: center;
      font-size: 30px;">
          <button type="button" class="close" data-dismiss="modal" style=" background-color: #7E3992;
      color:white !important;
      text-align: center;
      font-size: 30px;">&times;</button>
          <h4 style=" background-color: #7E3992;
      color:white !important;
      text-align: center;
      font-size: 30px;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" name="loginform" id="loginform" method="POST" action="login.php">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" name= "email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>e
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer" style="  background-color: #7E3992;">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Forgot <a href="forget.php">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>
</div>

 
<script>

$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

    


<!-- Modal -->
  <div class="modal fade" id="login-modal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header1" style="padding:35px 50px;   background-color: #7E3992;
      color:white !important;
      text-align: center;
      font-size: 30px;">
          <button type="button" class="close" data-dismiss="modal" style=" background-color: #7E3992;
      color:white !important;
      text-align: center;
      font-size: 30px;">&times;</button>
          <h4 style=" background-color: #7E3992;
      color:white !important;
      text-align: center;
      font-size: 30px;"><span class="glyphicon glyphicon-lock"></span> Sign-Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" name="registerform" id="registerform" method="POST" action="signup.php" onsubmit="return validateform()">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer" style="  background-color: #7E3992;">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
         
        </div>
      </div>
      
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>



<script type="text/javascript">
   
   function validateform()
   {
    var x=document.forms["registerform"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if( atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length | x.charAt(atpos+1)=="." || x.charAt(atpos-1)=="."){
      alert("Invalid Email ID");
      return false;
    }
   }
 </script>



    <header class="jumbotron" style="position:relative; top:-50px;">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                <br><br>
                    <h1>HardWare-The Wares at cheap Fares</h1>
                    <p style="padding:40px;"></p>
                    <p>Our one and only goal is to give you the<b style="font-size:30px;"><i> Best </i></b> service</p>
                </div>
                <div class="col-xs-12 col-sm-4">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="index.php">Home</a></li>
                   <li class="active">Contact Us</li>
               </ul>
            </div>
            <div class="col-xs-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>
        
        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Location Information</h3> 
           </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100% ; color:black;">
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
            <div class="col-xs-12 col-sm-6 col-sm-offset-1" id="map" style="height:200px">
                <script>
                function myMap() {
                var myCenter = new google.maps.LatLng(19.1019115, 72.8473772);

                var myStation = new google.maps.LatLng(19.1071382,72.8348634);

                var mapCanvas = document.getElementById("map");

                  var mapProp = {center: myCenter, zoom: 15};

                var map = new google.maps.Map(mapCanvas, mapProp);        

    

                var marker = new google.maps.Marker({position:myCenter,animation:google.maps.Animation.BOUNCE});
                marker.setMap(map);

                var stationMarker=new google.maps.Marker({
                position:myStation,
                });
                stationMarker.setMap(map);


                 google.maps.event.addListener(marker,'click',function() {
                var infowindow = new google.maps.InfoWindow({
                content:"Head office"
                 });
                infowindow.open(map,marker);
                 });

                google.maps.event.addListener(stationMarker,'click',function() {
                var infowindow = new google.maps.InfoWindow({
                 content:"Our Franchise"
                });
                infowindow.open(map,stationMarker);
                });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRi94kf17KFMZc-DhzBQe7CiaaVkw7Zs4&callback=myMap"></script>

            </div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1">
                
            </div>
        </div>

        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Send us your Feedback</h3> 
           </div>
           <script type="text/javascript">
                 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
       
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please give us a valuable Feedback'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


           </script>
            <div class="col-xs-12 col-sm-9">
                <form class="well form-horizontal" action="feedback.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" id="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" id="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" id="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" id="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" id="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" id="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Maharashtra</option>
      <option>Karnataka</option>
      <option>Madhya Pradesh</option>
      <option>Gujarat</option>
      <option>Tamil Nadu</option>
      <option>Uttar Pradesh</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" id="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Feedback</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="comment" id="comment" placeholder="Your Comments"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
            </div>
             <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
            </div>
       </div>

    </div>

    <footer class="row-footer">
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">About</a></li>
                        <li><a href="choice.php">Products</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <h5>Our Address</h5>
                    <address>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>