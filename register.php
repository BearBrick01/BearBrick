<?php
session_start();

require_once "connect.php";


    if(isset($_SESSION["Username"])){  
        header("Location:entry.php");  
    }

    if (isset($_POST['Register']) ){
      $mysqli = new mysqli("localhost", "root", "", "bearbrick");
     
      if(empty($_POST["Fname"]) && empty($_POST["Lname"]) && empty($_POST["Email"]) && empty($_POST["Username"]) && empty($_POST["Username"]) )
      {  
        echo '<script>alert("Fields are required")</script>';  

      }else{
        
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Username = $_POST['Username'];
        $Password = md5($Password); 
        
        $query = "INSERT INTO costomer (idcostomer,Fname,Lname,Email,Password,Username)
                  VALUES(null, '$Fname', '$Lname', '$Email', '$Password' ,'$Username')";  
         mysqli_query($conn, $query);
      }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BearBrick | Register</title>

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
  <div class="card" style="width: 30rem">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post">
        <div class="form-row">
            <div class="col"> 
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="Fname" name="Fname" placeholder="Fristname">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                    </div>
                 </div>
            </div>
            <div class="col"> 
                <div class="input-group mb-3">
                    <input type="text" class="form-control" mid="Lname" name="Lname"  placeholder="Lastname">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="Email" name="Email"  placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="Password" name="Password"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <small id="password" class="form-text text-muted"> Make sure it's at least 8 characters including a number and a lowercase letter.</small>
        </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-md-4 offset-md-4">
            <button type="submit" class="btn btn-primary btn-block" id="Register" name="Register">Register</button>
            </div>
            <div class="col-7"></div>
            <div class="col-5"><a href="login.php" class="text-center"><small> I already have a membership </small></a></div> 
         </div>
          <!-- /.col -->
        </div>
      </form>
     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

