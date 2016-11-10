<?php
session_start();
$email=$_SESSION['email'];
?>
<?php





$email1=$_POST['email'];

$connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");
$qry1="SELECT * from husers where usremail='$email1'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $row = mysqli_fetch_assoc($executequery);
  $password=$row['usrpass'];
  if($email1==$row['usremail']){

 // echo $password;

//$connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","	u602930306_hardw") or die("Connection Error");
	$checkquery="SELECT * FROM husers WHERE usremail='$email'";
	//$executequery=mysqli_query($connect,$checkquery) or die(mysqli_errno($connect));
	//$numrows=mysqli_num_rows($executequery);
	//echo $numrows;
	//if($numrows>0){
	



//composer require phpmailer;
require './PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
//echo "MG";
//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "manomukul@gmail.com";                 
$mail->Password = "manomukul1234";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "manomukul@gmail.com";
$mail->FromName = "manoooo";

$mail->addAddress($email1, "manooo");

$mail->isHTML(true);

$mail->Subject = "Forgot Password-Hardware-Noreply";
$mail->Body = "Your Password is: ".$password;
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo '<script type="text/javascript">alert("Mail has been sent to your mail");</script>';
    echo '<script type="text/javascript">window.location="forget.php";</script>';
}



}


	//}
	//else{

	//echo '<script type="text/javascript">alert("No such user exist");</script>';
	//echo '<script type="text/javascript">window.location="forget.php";</script>';
	//}


else
{
	echo '<script type="text/javascript">alert("Incorrect Email, Email Not registered.");</script>';
	 echo '<script type="text/javascript">window.location="index.php";</script>';
}


?>
