<?php
session_start();
require_once("connect.php");
 
//*** Update Status
$sql = "UPDATE customer SET Title = '0' , ModifiedDate = '0000-00-00 00:00:00'  WHERE CustomerNumber = '".$_SESSION["CustomerNumber"]."' ";
$query = mysqli_query($conn,$sql);

//*** Update Status em
$sql2 = "UPDATE employees SET Title = '0' , ModifiedDate = '0000-00-00 00:00:00'  WHERE EmployeeNumber = '".$_SESSION["EmployeeNumber"]."' ";
$query = mysqli_query($conn,$sql2);

session_destroy();
header("location:login.php");

?>