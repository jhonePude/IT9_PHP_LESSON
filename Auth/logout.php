<?php
session_start();

//unset all session variables
$_SESSION = [];

//destroy session
session_destroy();

//delete session cookies
setcookie("PHPSESSID", "", time() - 3600, "/");

//redirect
header("Location: login.php");
exit();

?>