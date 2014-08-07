<?php
session_start();
include("config/conn.php");
$username=$_SESSION["username"];
header("location:index.php");
session_unset();
session_destroy();
?>