<?php
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "1111", "bear02");
if (mysqli_connect_errno())
{
echo "Database Connect Failed : " . mysqli_connect_error();
exit();
}

$intRejectTime = 20; // Minute
$sql = "UPDATE customer SET Title = '0', ModifiedDate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(ModifiedDate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
$sql2 = "UPDATE employees SET Title = '0', ModifiedDate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(ModifiedDate, INTERVAL $intRejectTime MINUTE) <= NOW() ";

$query = mysqli_query($conn,$sql);
$query2 = mysqli_query($conn,$sql2);
?>