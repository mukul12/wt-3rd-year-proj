<?php
session_start();
?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
//$password=md5($password);
if($email && $password){
	$connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");
	$query=mysqli_query($connect, "SELECT * FROM husers WHERE usremail='$email'");
	$row=mysqli_fetch_assoc($query);
	
	$numrows=mysqli_num_rows($query);
	$dbpassword=$row['usrpass'];
	$dbemail=$row['usremail'];
	$password=trim($password);
	$dbpassword=trim($dbpassword);
	if($numrows!=0 && $password==$dbpassword){
		
		
		$_SESSION['email']=$row['usremail'];
		$_SESSION['password']=$row['usrpass'];
		echo '<script type="text/javascript">alert("Login Successful");</script>';
		echo '<script type="text/javascript">window.location="choice.php";</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Login Unsuccessful");</script>';
		echo '<script type="text/javascript">window.location="index.php";</script>';
	}
}
?>