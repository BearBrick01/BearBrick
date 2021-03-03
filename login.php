
<?php
session_start();
  
require_once "connect.php";

  if(isset($_SESSION["Username"])){  
    header("Location:entry.php"); 
  }

  if (isset($_POST['Signin'])){
    $mysqli = new mysqli("localhost", "root", "", "bearbrick");

      if(empty($_POST["Username"]) && empty($_POST["Password"])){  
        echo '<script>alert("Both Fields are required")</script>';  

      }else{ 
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        // $Password = md5( $_POST['Password']);

        $query = "SELECT * FROM costomer WHERE Username = '$Username' AND Password = '$Password'";
        $query2 = "SELECT * FROM employee WHERE Username = '$Username' AND Password = '$Password'";
        $result=mysqli_query($conn,$query);
        $result2=mysqli_query($conn,$query2);
         
          if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['Username'] = $row['Username'];
            header("Location: entry.php");
          }else {
            echo "<script>alert('Username or Password has wrong ');</script>";
          }
          
          if (mysqli_num_rows($result2) == 1) {
            $row = mysqli_fetch_array($result2);
            $_SESSION['Username'] = $row['Username'];
            header("Location: entry.php");
          }else {
            echo "<script>alert('Username or Password has wrong ');</script>";
          }
          
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BearBrick | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <a href=""><img class="mr-3" src="logo.png"><b>BEARBRICK</b>House</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg">Welcome to BearBrick House</p>
    
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
                <button type="submit" class="btn btn-primary btn-block" id="Signin" name="Signin">Sign In</button>
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