<?
session_start();
$id = $_GET['id'];
$_SESSION['persona'.$id] = NULL;
header('Location: index.php');
?>