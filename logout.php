<?php
session_start();
session_unset(); //destrroys the session
header('Location:user_login.php');
?>