<?php
session_start();
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hardware: Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    
   
    
    
    
    
    
    
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        
        
     
  
    </style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">HARDWARE</a>
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
                        <a class="" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="" href="choice.php">Product</a>
                    </li>
                    <li>
                        <a class="" href="contactus.php">Contact Us</a>
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
              <input type="text" class="form-control" name= "email" id="email" placeholder="Enter email" onclick="validate()">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
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
              <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" onclick="validate()">
              <h2 id='result'></h2>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
//      function validateEmail(email) {
//   var re = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
//   return re.test(email);
// }

// function validate() {
//   $("#result").text("");
//   var email = $("#email").val();
//   if (validateEmail(email)) {
//     $("#result").text(email + " is valid :)");
//     $("#result").css("color", "green");
//   } else {
//     $("#result").text(email + " is not valid :(");
//     $("#result").css("color", "red");
//   }
//   return false;
// }
    
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Header -->
    <header>
        <div class="container" >
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Hardware Arena</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Your Personal HardWare Advisor</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Modify laptop</h4>
                    <p class="text-muted">Is your laptop too old? Do you love your laptop and don't want to sell it! Never fear we are here!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Modify Pc</h4>
                    <p class="text-muted">Upgrade Your PC hardware parts by our suggestions and be assured of best pc for <b>ANY</b> budget.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Buy Modules</h4>
                    <p class="text-muted">Directly Purchase modules from our suggestions as we care for our customers and their money.</p>
                </div>
            </div>
        </div>
    </section>

  

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">The First <b>EVER</b> computer advisor is here for you.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Our Voyage into the HardWare WORLD!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Dedication and Commitment.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> 24/7 full time services rendered to the public! LIVE!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">New faces, new ideas to be implemented!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Meet the brains behind <b>HardWare</b></h3>
                </div>
            </div>
            <div class="row">
               
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/5.jpg" class="img-responsive img-circle" style="height:225px; width: 225px;" alt="">
                        <h4>Manogya</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/4.png" class="img-responsive img-circle" style="height:225px; width: 225px; " alt="">
                        <h4>Mukul</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Group of dedicated coders and business minded people. We came together to form a startup for the people and ofcourse of the people.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    
    <footer style="    background-color: rgba(28, 27, 28, 0.75);
    margin:0px auto;
    padding: 20px 0px 20px 0px;">
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contactus.php">About</a></li>
                        <li><a href="choice.php">Products</a></li>
                        <li><a href="contactus.php">Contact</a></li>
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


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
