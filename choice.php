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
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
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
    background-color: rgba(126, 57, 146, 1);
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
    
        
        .nav1{
            
             background-image: url("i13.jpg");
            
        }    
        
        
        
        
        
        
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    .sidenav {
        
       background-image: url("i12.jpg");
        
       /* background-color: #FFFD63; */
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
   
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 650px) {
      .sidenav {
        height: 650;
      
      }
      .row.content {height: auto;}
    }
  
      
        
        .hovereffect {
  width: 300px;
  height: 300px;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
   width: 60%;
  height: 60%;
  left:60px;
  top:60px;

  border-radius: 80%;
  border: 2px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(50%,50%,0);
  transform: translate3d(50%,50%,0);
}

.hovereffect:hover .overlay {
  background-color: rgba(0,0,0,0.3);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="1.4" /><feFuncG type="linear" slope="1.4" /><feFuncB type="linear" slope="1.4" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(1.4);
  -webkit-filter: brightness(1.4);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-150%,-400%,0);
  transform: translate3d(-150%,-400%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-150%,-400%,0);
  transform: translate3d(-150%,-400%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2, .hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
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
                      <?php
      if(isset($email)){
        
              echo'<li class="hidden">
              <a href="#page-top"></a>
                    </li> 
                    
                    <li>
                        <a class="page-scroll" href="index.php">HOME</a>
                    </li>
            
                    <li>
                        <a class="page-scroll" href="contactus.php">contact us</a>
                    </li>
                    <li>
                    <span style="position:relative;top:17px;left:7px" class="glyphicon glyphicon-shopping-cart"></span>
                    </li>
                    <li>
                        <a class="page-scroll" href="mycart.php">Cart</a>
                    </li>
                    <li style="position: relative; top:15px; font-size: 15px; color: white;"><b>Welcome</b> '.$email.'</li>
                     <li>
                            <a href="logout.php" class="btn">
                                Log out
                            </a>
                        </li>
                    ';
      }
      ?>    </ul></div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>




    
    
    
    
    
    
    
    
    
    
    
    
   

    
    
    
    
    
    

    
    
    
    
    
    



        <!-- Modal -->
 
    
    
    
    
 <div class="container-fluid" >
  <div class="row content" style="height:700px; position:relative; top:-50px;">
    <div class="col-sm-6  sidenav "  background= "i9.jpg">
         <br><br>
      <h1 style=" color: #d54d7b;     position: relative;
    left: 0px; top:50px;  font-family: Great Vibes,cursive; font-size: 165px; line-height: 160px; font-weight: normal; margin-bottom: 0px;
                                                            margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff;  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.19); ">Computer</h1>






 <div class="hovereffect" style=" 
                                 
                                 
     box-shadow: 0 4px 80px 0 rgba(255, 255, 255, 0.79), 6px 6px 20px 6px rgba(255, 255, 255, 0.79);                             
             
  
   border-radius:150px;
                                 
                                 
                                 
                                 position: relative;
    left: 180px; top:70px;">
     <img class="img-responsive" src="i7.jpg"  style="  background-repeat: no-repeat; "> 
         <a href="#">   <div class="overlay" id="myModal11"   data-target="#myModal1">
                <h2 style= "font-family: Great Vibes;">Computer</h2>
        <p style="font-family: Great Vibes;">
          Upgrade Your PC?
        </p> 

            </div></a>
            
    </div>









<!--

      <img  class="aa" src="i7.jpg" style="  background-repeat: no-repeat;  position: relative;
    left: 180px; top:40px;">
-->
      </div>
    

    <div class="col-sm-6 nav1"     style=" height:100%;">
     
         <br><br> 
      <h1 style=" color: #d54d7b;     position: relative;
    left: 0px; top:50px;  font-family: Great Vibes,cursive; font-size: 165px; line-height: 160px; font-weight: normal; margin-bottom: 0px;
                                                            margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff;  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.19); ">Laptop</h1>






 <div class="hovereffect" style=" position: relative;
                                 
                                box-shadow: 0 4px 80px 0 rgba(255, 255, 255, 0.79), 6px 6px 20px 6px rgba(255, 255, 255, 0.79);                               
             
  
   border-radius:150px;
                                 
                                 
    left: 180px; top:70px;">
        <img class="img-responsive" src="i8.jpg"  style="  background-repeat: no-repeat; ">
          <a href="#">  <div class="overlay" id="myModal12"   data-target="#myModal2">
                <h2 style="font-family: Great Vibes;">Laptop</h2>
        <p style="font-family: Great Vibes;">
          Laptop too Old?
        </p> 
            </div></a>
    </div>


   
      
     
      </div>
    </div>
  </div>

    
    







<div class="modal fade" id="myModal2" role="dialog">
    
 <div id="login-overlay" class="modal-dialog" style="">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">LAPTOP</h4>
          </div>
          <div class="modal-body" style="background-color:rgba(250, 178, 229, 0.5);">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well" style="background:rgba(90, 1, 65,0.44);">
                          <form id="myform" method="POST" action="homelaptop.php" accept="image/gif, image/jpeg, image/png, image/jpg">
                           <!-- <div class="form-group"> <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend"
value="mmmpuranik@gmail.com" />
<input type="hidden" id="skip_Subject" name="skip_Subject"
value=" CAPTCHA" />
<input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn"
value="index.php" />
<input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID"
value="GU2N92K6UH22" /></div> -->
                              <div class="form-group">
                                  <label for="model_name" class="control-label">Model</label>
                                  <input type="text" class="form-control" id="model" name="model" value="" required="" title="Please enter the model name" placeholder="Example:Asus ROG GL552VW">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="Price" class="control-label">Budget</label>
                                  <input type="text" class="form-control" id="budget" name="budget" value="" required="" title="" placeholder="Example: Rs 20000">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="RAM" class="control-label">RAM</label>
                                  <select name="ram" id="ram" value="Select RAM Size">
                                    <option value="2">2 GB</option>
                                    <option value="4">4 GB</option>                                 
                                    <option value="8">8 GB</option>                          
                                  </select>
                                  <span class="help-block"></span>
                              </div>
                               <div class="form-group">
                                  <label for="HDD" class="control-label">Memory Size</label>
                                  <select name="HDD" id="HDD">
                                    
                                    <option value="1000">1 TB HDD @7200RPM</option>
                                    <option value="250">250 GB SSD</option>
                                    <option value="512">512GB SSD</option>
                                    <option value="500">500 GB SSD</option>
                                    <option value="240">240GB SSD </option>
                                    
                                  </select>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="image_1" class="control-label">Upload the bill image, Not necessary</label>
                                  <input type="file" name="image_1" id="image_1">
                                  <span class="help-block"></span>
                              </div>
                               <p><img src="imagebuilder.php" border="1">  </p>
      <p>Please enter the code shown above and click Submit.<br>
        <input MAXLENGTH=8 SIZE=8  id="userstring" name="userstring" type="text" value="">
        <br>
                              
                              
                              <button type="submit" class="btn btn-success btn-block">Done</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><a href="#"><u>Read more</u></a></li>
                      </ul>
                      
                  </div>
              </div>
          </div>
      </div>
      </div>





</div>
 
<script>
$(document).ready(function(){
    $("#myModal12").click(function(){
        $("#myModal2").modal();
    });
});
</script>



















    
    
    
    <div class="modal fade" id="myModal1" role="dialog">
    
 <div id="login-overlay" class="modal-dialog" style="">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">COMPUTER</h4>
          </div>
          <div class="modal-body" style="background-color:rgba(250, 178, 229, 0.5);">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well" style="background:rgba(90, 1, 65,0.44);">
                          <form id="myform" method="POST" action="home.php" accept="image/gif, image/jpeg, image/png, image/jpg" method="post">
                         

                         <!--  <div class="form-group"> <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend"
value="mmmpuranik@gmail.com" />
  <input type="hidden" id="skip_Subject" name="skip_Subject"
value=" CAPTCHA" />
<input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn"
value="index.php" />
<input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID"
value="GU2N92K6UH22" />
</div>-->
                           
                                  
                              <div class="form-group">
                                  <label for="budget" class="control-label" >Budget</label>
                                  <input type="text" class="form-control" id="budget" name="budget" value="" required="" title="" placeholder="Example: Rs70000">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                            <label for="processor" class="control-label" >Processor</label>
                                  <select name="processor" value="Select Processor Generation:"  id="processor">
                                    <option value="i3-4th">Intel i3 4th Gen processor</option>
                                    <option value="A6">AMD A6 processor</option>                                 
                                    <option value="i5-6th">Intel i5 6th Gen processor</option>                          
                                    <option value="FX-9th">AMD FX-9th generation</option>
                                     <option value="FX-4th">AMD FX-4th generation</option>
                                     <option value="i7-5th">Intel i7 5th Gen processor</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="ram" class="control-label" >RAM</label>
                                  <select name="ram" value="Select RAM Size in GB"  id="ram">
                                    <option value="2">2 GB</option>
                                    <option value="4">4 GB</option>                                 
                                    <option value="8">8 GB</option>                          
                                    <option value="16">16 GB</option>
                                     <option value="32">32 GB</option>
                                  </select>
                                  <span class="help-block"></span>
                              </div>
                               <div class="form-group">
                                  <label for="HDD" class="control-label" >Memory Size</label>
                                  <select name="HDD"  id="HDD">
                                    <option value="1000">1 TB HDD @5600RPM</option>
                                     <option value="1000">1 TB HDD @7200RPM</option>
                                    <option value="2000">2 TB HDD</option>
                                    <option value="512">512GB SSD</option>
                                    <option value="500">500 GB SSD</option>
                                    <option value="256">256GB SSD </option>
                                    <option value="4000">4TB HDD @7200RPM</option>
                                    <option value="3000">3TB HDD @5600RPM </option>
                                  </select>
                                 
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="gpu" class="control-label" >Graphic Card</label>
                                  <select name="gpu"  id="gpu">
                                    <option value="1">1GB GRAM GPU</option>
                                     <option value="2">2GB GRAM GPU</option>
                                    <option value="4">4GB GRAM GPU</option>
                                    <option value="6">6GB GRAM GPU</option>
                                    <option value="8">8GB GRAM GPU</option>
                    
                                  </select>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="image_1" class="control-label">Upload the bill image</label>
                                  <input type="file" name="image_1" id="image_1">
                                  <span class="help-block"></span>
                              </div>
                           <p><img src="imagebuilder.php" border="1">  </p>
      <p>Please enter the code shown above and click Submit.<br>
        <input MAXLENGTH=8 SIZE=8  id="userstring" name="userstring" type="text" value="">
        <br>
                                     

                                      
                              <button type="submit" class="btn btn-success btn-block">Done</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><a href="#"><u>Read more</u></a></li>
                      </ul> 
                  </div>
              </div>
          </div>
      </div>
      </div>





</div>
 
<script>
$(document).ready(function(){
    $("#myModal11").click(function(){
        $("#myModal1").modal();
    });
});
</script>

    

    
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
                        <li><a href="choice.php">Products</a></li>
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







</body>
</html>