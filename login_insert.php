<?php
session_start();
include "db_conn.php";
$a=$_POST['email'];
$b=$_POST['password'];

// echo $a,$b;
$data="select * from user where email='$a' AND password='$b'";
$result=mysqli_query($conn,$data);

// echo "<pre>";
// print_r($result);
$total=mysqli_num_rows($result);
if($total==1){
	$_SESSION['vaishali']=$a;
header('Location:dashboard.php');
}
else{
	echo "<h1>Incorrect password or Id</h1>";
}



?>