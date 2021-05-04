<?php
require_once("../connect.php");
$Product_sub = $_POST['add_to_cart'];
$Date_or = $_POST['dates'];
$User_or = $_POST['usertest'];
$User_oq = $_POST['OrderQty'];
$user  =   $_POST['user'];
echo   $Product_sub;
echo   $Date_or;
echo   $User_oq ;

echo   $user;
//**DISPLAY PRODUCT INFO */
$query2 = "select * from product WHERE ProductID = '$Product_sub' ";                       
$result2 = mysqli_query($conn, $query2);
$objResult3 = mysqli_fetch_array($result2); 

 echo 'Added into the Basket.';
 echo "Employee order",$User_or;
 echo $objResult3['ProductID'];
 echo $objResult3['Name'] ,"SUM" , $objResult3['Price'],"*",$User_oq ,"==",$objResult3['Price'] *  $User_oq ;
 header("location:cart.php");
 
     $mysqli = new mysqli("localhost", "root","1111","bear02");
     
     $OrderQty  =$_POST['OrderQty'];
     $ProductID =$_POST['add_to_cart'];
     
     $query3 = "INSERT into ordersummary(OrderID,OrderQty,ProductID,UnitPrice,UnitPriceDiscount,SubTotal,ModifiedDate,User_or,user) 
     VALUES                              (null,'$OrderQty','$ProductID',null,null,null,null,'$User_or','$user')" ; 
     $result4 = mysqli_query($conn, $query3);
      echo $query3;
 
?>