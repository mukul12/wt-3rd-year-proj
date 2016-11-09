<?php 
	include_once './connect.php' ;
	session_start();
$email=$_SESSION['email'];
	if(isset($_POST)){
		$conn = mysqli_connect($servername, $username, $password, $db);
		$i=$_POST['id'];
		$i = mysqli_escape_string($conn, $i);
		$q = "DELETE FROM cart WHERE cartid = $i";
		$executequery=mysqli_query($conn,$q) or die(mysqli_errno($conn));
	
	
	}
 ?>