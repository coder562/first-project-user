<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['gender'];
$e=$_POST['stream'];
$f=$_POST['qualifications'];
$g=$_POST['address'];
$h=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];

$x=implode(',',$f); 
// echo $a,$b,$c,$d,$e,$f,$g,$h;
$files="upload/".$h;
move_uploaded_file($filename, $files);
$data="insert into btech(name,email,number,gender,stream,qualifications,address,image)values('$a','$b','$c','$d','$e','$x','$g','$files')";
mysqli_query($conn,$data);
header('Location:btech_display.php')

?>