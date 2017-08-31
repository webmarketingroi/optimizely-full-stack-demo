<?php 
session_start();

$identity = isset($_SESSION['identity'])?$_SESSION['identity']:null;

header('Location: thank-you.php');
?>

