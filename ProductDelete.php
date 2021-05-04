<?php
session_start();
require_once("../connect.php");


// $query1 = "DELETE FROM product WHERE ProductID='$ProductID' ";
// $result1 = mysqli_query($conn, $query1);
// $objResult = mysqli_fetch_array($result1);

	$conn = mysqli_connect("localhost", "root", "1111", "bear02");
	// $deleteid = $_POST['deleteid'];
	
	// $ProductID = $_POST['ProductID'];
	
	//**DISPLAY PRODUCT INFO */
		$query2 = "select * from product ";                       
		$result2 = mysqli_query($conn, $query2);
		$objResult = mysqli_fetch_array($result2);


	$qry = "DELETE FROM product WHERE ProductID= '$ProductID' ";
	$result1 = mysqli_query($conn,$qry);
	echo  $qry;
	if($result1){
		echo "<script type='text/javascript'>";
		echo "alert('Romove Succesfuly');";
		echo $qry;
		// echo "window.location = 'productstatus.php'; ";
		echo "</script>";

		}
		
	else{
		echo $qry;
		echo "<script type='text/javascript'>";
		echo "alert('Error back to delete again');";
		echo "</script>";
	}
  


  
?>