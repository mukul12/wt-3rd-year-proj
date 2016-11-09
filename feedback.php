

<?php
include_once './connect.php' ;
$conn = mysqli_connect($servername, $username, $password, $db);
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $mail = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $city= $_POST['city'];
 $state=$_POST['state'];
  $zip=$_POST['zip'];
   $feedback=$_POST['comment'];
  
	$qry1="INSERT INTO feedback VALUES (NULL, '$fname', '$lname', '$mail', '$phone', '$address', '$city','$state','$zip','$feedback')";
  	$executequery=mysqli_query($conn,$qry1) or die(mysqli_errno($conn));
  	 ob_start();
    header('Location:contactus.php');
    ob_end_flush();
    die();
	
?>
