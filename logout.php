<?php 
session_start();
$_SESSION["userid"] = '';
$_SESSION["name"] = '';
$_SESSION["role"] = '';
session_destroy(); // Call the session_destroy function
header("Location: index.php");
?>
