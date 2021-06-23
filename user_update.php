<?php
include "db_conn.php";
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];



// // echo $a,$b;
// echo "<pre>";
// print_r($b);
echo $files="upload/".$d;
move_uploaded_file($filename, $files);

if($d==""){
    $data="update image SET name='$a' where id=$id";
}
else{
    $data="update image SET name='$a' , image='$files' where id=$id";
}




// echo $id,$a,$b,$c,$files;
// die;
$data="update user SET name='$a' , email='$b' , password='$c', image='$files' where id=$id";
 mysqli_query($conn,$data);
 header('location:user_display.php');
?>