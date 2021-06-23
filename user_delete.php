<?php
include "db_conn.php";
$id=$_GET['a'];
echo $data="delete from user where id=$id";
mysqli_query($conn,$data);
header('Location:user_display.php');

?>