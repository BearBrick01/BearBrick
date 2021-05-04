<?php
session_start();
require_once("../connect.php");


	$conn = mysqli_connect("localhost", "root", "1111", "bear02");


	if (isset($_POST['delete'])) {
  
		$conn = mysqli_connect("localhost", "root", "1111", "bear02");
		$deleteid = $_POST['deleteid'];

	$qry = "DELETE FROM employees WHERE EmployeeNumber= '".$objResult['EmployeeNumber']."' ";
	$result1 = mysqli_query($conn,$qry);
	echo  $qry;

	if($result1){
		echo "<script type='text/javascript'>";
		echo "alert('Romove Succesfuly');";
		echo "window.location = 'employee.php'; ";
		echo "</script>";
		  
	
	//**DISPLAY Employees INFO */
	$query2 = "select * from employees ";                       
	$result2 = mysqli_query($conn, $query2);
	$objResult = mysqli_fetch_array($result2);
		}
		
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to delete again');";
		echo "</script>";
	}
	}

  
?>