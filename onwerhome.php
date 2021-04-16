<?php
session_start();
include("dbconnect.php");
extract($_POST);
$oid=$_SESSION['oid'];
?>