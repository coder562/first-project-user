<?php
session_start();
if(empty($_SESSION['vaishali'])){
	header('Location:user_login.php');
}
?>