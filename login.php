<?php
          session_start();
          require_once("connect.php");
         
          if (isset($_POST['Login'])){
            $mysqli = new mysqli("localhost", "root", "1111", "bear02");
        
              if(empty($_POST["Username"]) && empty($_POST["Password"])){  
                echo '<script>alert("Both Fields are required")</script>';  
              
              }else{ 
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                
                  $strSQL = "SELECT * FROM customer WHERE Username = '$Username' AND Password = '$Password'";
                  $strSQL2 = "SELECT * FROM employees WHERE Username = '$Username' AND Password = '$Password'";
                  $objQuery = mysqli_query($conn,$strSQL);
                  $objQuery2 = mysqli_query($conn,$strSQL2);
                 
                   if (mysqli_num_rows($objQuery2) == 1) {        
                    $objResult2 = mysqli_fetch_array($objQuery2);
                              
                              if($objResult["Title"] == "1"){

                                echo " '$Username'  Exists login!";
                                //*** Go to Main page  
                                header("location:index2.php");
                                exit();

                               }else{
                                  //*** Update Status Login
                                  $sql2 = "UPDATE employees SET Title = '1' , ModifiedDate = NOW() WHERE EmployeeNumber = '".$objResult["EmployeeNumber"]."' ";
                                  $query2 = mysqli_query($conn,$sql2);
                              
                                //*** Session
                                $_SESSION["EmployeeNumber"] = $objResult2["EmployeeNumber"];
                                session_write_close();
                                //*** Go to Main page  
                                header("location:index3.php");
                              }
                          
                    }else {
                      echo "<script>alert('Username or Password has wrong ');</script>";
                    }
                    
                    if (mysqli_num_rows($objQuery) == 1) {        
                      $objResult = mysqli_fetch_array($objQuery);
                                
                                if($objResult["Title"] == "1"){
  
                                  echo " '$Username'  Exists login!";
                                  //*** Go to Main page  
                                  header("location:index2.php");
                                  exit();
  
                                 }else{
                                     //*** Update Status Login
                                  $sql = "UPDATE customer SET Title = '1' , ModifiedDate = NOW() WHERE CustomerNumber = '".$objResult["CustomerNumber"]."' ";

                                  $query = mysqli_query($conn,$sql);
                                  //*** Session
                                  $_SESSION["CustomerNumber"] = $objResult["CustomerNumber"];
                                  session_write_close();
                                  //*** Go to Main page  
                                  header("location:index2.php");
                                }
                            
                      }else {
                        echo "<script>alert('Username or Password has wrong ');</script>";
                      }
                    
                 
              
              }//else1
               
          }//if 1
        
          mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick house | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!--font-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>
<body class="hold-transition login-page" Style= "background-image: url('pics/bg9.jpg');
    background-size:100%;"> 

    
<div class="login-box" style="align-content: center" >

  <div class="login-logo"  >
  <a href="index.php" >
      <img class="brand-image img-circle elevation-3" src="pics/bearlogo.png"  Style ="width:15%" ><br>
      <span style="font-size: 50pt;font-family: 'Reenie Beanie', cursive;font-weight:1000;color:#f2fff6;text-shadow: 2px 2px black">Bearbrick House</span>    
    </a>
  </div>

  <!-- /.login-logo -->
  <div class="card" style="opacity:0.95" >
    <div class="card-body login-card-body" >
    <p class="login-box-msg">Welcome to Bearbrick House</p>
    
      <form name="formlogin" method="post" >
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-md-4 offset-md-4">
                <button type="submit" class="btn btn-primary btn-block" id="Login" name="Login">Login</button>
            </div>
            <div class="col-6"></div>
            <div class="col-6"><a href="register.php" class="text-center"><small> Register a new membership </small></a></div> 
        </div>  
         
          <!-- /.col -->
        </div>
      </form>
            
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
