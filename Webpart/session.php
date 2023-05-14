<?php
include('dbconn.php');
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}
// $fullname = "";

$user_id=$_SESSION['id'];
?>