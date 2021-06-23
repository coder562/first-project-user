<?php
include "db_conn.php";
$id=$_GET['a'];
echo $data="delete from btech where id=$id";
mysqli_query($conn,$data);
header('Location:btech_display.php');

?>