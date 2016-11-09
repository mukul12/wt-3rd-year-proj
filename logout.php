<?php 
session_start();
?>
<?php 

/* logout.php */
setcookie('action', '', time()-7000000, '/');
setcookie('Discount', '', time()-7000000, '/');
session_destroy();
header("Location:index.php");
?>