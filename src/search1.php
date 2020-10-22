<?php


session_start();
$_SESSION['type']=$_POST['type'];
header("Location: search.php" );
?>