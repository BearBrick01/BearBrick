<?php
session_start();
require_once("../connect.php");


	$conn = mysqli_connect("localhost", "root", "1111", "bear02");
	
	//**DISPLAY PRODUCT INFO */
		$query2 = "select * from customer ";                       
		$result2 = mysqli_query($conn, $query2);
		$objResult = mysqli_fetch_array($result2);
	
		$deleteid = $_POST['CustomerNumber'];

		
	$qry = "DELETE FROM customer WHERE CustomerNumber = '".$objResult['CustomerNumber']."' ";
	$result1 = mysqli_query($conn,$qry);
	$objResult2 = mysqli_fetch_array($result2);
	echo  $qry;
	if($result1){
		echo "<script type='text/javascript'>";
		echo "alert('Romove Succesfuly');";
		// echo "window.location = 'productstatus.php'; ";
		echo "</script>";
		
		}
		
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to delete again');";
		echo "</script>";
	}
  


  
?>