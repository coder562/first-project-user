<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['email'];
$c=md5($_POST['password']);

$d=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];
$image=md5(rand()). '.' .$d;
// echo "<pre>";
// print_r($image);
// die;

// echo $a,$b,$c,$d;
$files="upload/".$image;
move_uploaded_file($filename, $files);


$email_check=mysqli_query($conn,"select * from user where email='$b'");
if(mysqli_num_rows($email_check)>0)
{
	echo "<h1>email already exist</h1>";
}
else{
	$data="insert into user(name,email,password,image)values('$a', '$b' , '$c' , '$files')";
mysqli_query($conn,$data);
header('Location:user_display.php');
}


// $data="insert into user(name,email,password,image)values('$a', '$b' , '$c' , '$files')";
// mysqli_query($conn,$data);
// header('Location:user_display.php');
?>