<?php
include "db_conn.php";
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['gender'];
$e=$_POST['stream'];
$f=$_POST['qualifications'];
$g=$_POST['address'];
$h=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];



// // echo $a,$b;
// echo "<pre>";
// print_r($b);
echo $files="upload/".$h;
move_uploaded_file($filename, $files);

if($h==""){
    $data="update image SET name='$a' where id=$id";
}
else{
    $data="update image SET name='$a' , image='$files' where id=$id";
}




// echo $id,$a,$b,$c,$files;
// die;
$x=implode(',',$f);
$data="update user SET name='$a' , email='$b' , number='$c', gender='$d' , stream='$e' , qualifications='$f' , address='$g' , image='$files'  where id=$id";
 mysqli_query($conn,$data);
 header('location:btech_display.php');
?>