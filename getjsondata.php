<?php
session_start();
$email=$_SESSION['email'];
?>

<?php
include_once './connect.php' ;
$conn = mysqli_connect($servername, $username, $password, $db);
 $ram = $_POST['ram'];
 $proc = $_POST['processor'];
 $hdd = $_POST['hdd'];
 $mb = $_POST['mb'];
 $gpu = $_POST['gpu'];
 $cost= $_POST['cost'];
  //echo $ram;
 //echo $aadhar;
 $ram = mysqli_escape_string($conn, $ram);
 $proc = mysqli_escape_string($conn, $proc);
 $hdd = mysqli_escape_string($conn, $hdd);
 $mb = mysqli_escape_string($conn, $mb);
 $gpu = mysqli_escape_string($conn, $gpu);
 $cost = mysqli_escape_string($conn, $cost);
 $connect=mysqli_connect("localhost","root","","hardware") or die("Connection Error");
$qry1="SELECT * from husers where usremail='$email'";
$executequery=mysqli_query($connect,$qry1) or die(mysqli_errno($connect));
  $row = mysqli_fetch_assoc($executequery);
  $id=$row['userid'];
	//echo $ram;
	$qry1="INSERT INTO orders VALUES (NULL, $cost, '$ram', '$proc', '$hdd', '$mb', '$gpu',$id)";
  	$executequery=mysqli_query($conn,$qry1) or die(mysqli_errno($conn));
	
?>
