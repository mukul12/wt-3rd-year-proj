<?php
session_start();

?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
if(empty($password) || empty($email)){
	echo '<script type="text/javascript">alert("Please fill all the fields");</script>';
	echo '<script type="text/javascript">window.location="index.php";</script>';
}

//$password=md5($password);

if(!empty($email) && !empty($password)){
	$connect=mysqli_connect("mysql.hostinger.in","u602930306_root","mukul123","u602930306_hardw") or die("Connection Error");
	$checkquery="SELECT * FROM husers WHERE usremail='$email'";
	$executequery=mysqli_query($connect,$checkquery) or die(mysqli_errno($connect));
	$numrows=mysqli_num_rows($executequery);
	//echo $numrows;
	if($numrows>0){
		echo '<script type="text/javascript">alert("User already exists");</script>';
	echo '<script type="text/javascript">window.location="index.php";</script>';
	}
	else{

	$query="INSERT INTO husers (usrpass,usremail) VALUES ('$password','$email')";
	//echo $query;
	$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
	$_SESSION['email']=$email;
	
	
	echo '<script type="text/javascript">window.location="choice.php";</script>';
	}
	
	
}

?>