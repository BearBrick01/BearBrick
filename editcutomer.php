<?php
session_start();
require_once("../connect.php");

if(!isset($_SESSION['CustomerNumber']))  
{  
   echo "Please Login!";
   exit();
   header("Location:../login.php"); 
} 
//*** Update Last Stay in Login System
$sql = "UPDATE customer SET ModifiedDate = NOW() WHERE CustomerNumber = '".$_SESSION['CustomerNumber']."' ";
$query = mysqli_query($conn,$sql);
//*** Get User Login
$strSQL = "SELECT * FROM customer WHERE CustomerNumber = '".$_SESSION['CustomerNumber']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery); 

if (isset($_POST['submit'])) {
 
  $conn = mysqli_connect("localhost", "root", "1111", "bear02");
  $old_username = $_POST['usertest'];
  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $Username = $_POST['Username'];
  $Email = $_POST['EmailAddress'];
  $Password= $_POST['Password'];
  $Phone= $_POST['Phone'];

 $query1 = "UPDATE customer SET FirstName='$Firstname',LastName='$Lastname',EmailAddress='$Email',
                             Username='$Username', Password='$Password',Phone='$Phone'
                             WHERE CustomerNumber = '$old_username'";                       
$result1 = mysqli_query($conn, $query1);

$strSQL = "SELECT * FROM customer WHERE CustomerNumber = '".$_SESSION['CustomerNumber']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery); 
}

//*** address
$strSQL3 = "SELECT * FROM address WHERE Username LIKE '".$objResult["Username"]."' ";
$objQuery3 = mysqli_query($conn,$strSQL3);


if (isset($_POST['submitADD'])) {

  $Address = $_POST['Address'];
  $City = $_POST['City'];
  $StateProvince = $_POST['StateProvince'];
  $CountryRegion = $_POST['CountryRegion'];
  $PostalCode = $_POST['PostalCode'];
  $Username = $_POST['Username'];

    echo $CountryRegion;
    echo $PostalCode;
    echo $City;
$query4 = "UPDATE address SET AddressLine1='$Address',City='$City',StateProvince='$StateProvince',
                             CountryRegion='$CountryRegion',PostalCode='$PostalCode,Username='$Username'";                       
$result4 = mysqli_query($conn, $query4);
echo $query4;

$query2 = "INSERT INTO address (AddressNumber,Username,AddressLine1,City,StateProvince,CountryRegion,PostalCode)
VALUES(null,'$Username','$Address','$City','$StateProvince','$CountryRegion','$PostalCode')";  
$result = mysqli_query($conn, $query2);

$strSQL3 = "SELECT * FROM address WHERE Username LIKE '".$objResult["Username"]."' ";
$objQuery3 = mysqli_query($conn,$strSQL3);
}

if (isset($_POST['subdelete'])) {

  $conn = mysqli_connect("localhost", "root", "1111", "bear02");
  $deleteid = $_POST['deleteid'];

  /*$strSQL = "SELECT * FROM address WHERE AddressNumber LIKE '$deleteid' ";
  $objQuery4 = mysqli_query($conn,$strSQL);*/
  // echo $deleteid;

  $qry = "DELETE FROM address WHERE AddressNumber = '$deleteid' ";
  mysqli_query($conn,$qry);
  echo  $qry;

  $strSQL3 = "SELECT * FROM address WHERE Username LIKE '".$objResult["Username"]."' ";
  $objQuery3 = mysqli_query($conn,$strSQL3);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick House </title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
      <!--font-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="padding-right: 35pt;">
      <!-- Category Dropdown Menu -->
      <div class="dropdown" style="margin:2%">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Basic</a></li>
          <li><a class="dropdown-item" href="#">Jellybean</a></li>
          <li><a class="dropdown-item" href="#">Horror</a></li>
          <li><a class="dropdown-item" href="#">SF</a></li>
          <li><a class="dropdown-item" href="#">Animal</a></li>
          <li><a class="dropdown-item" href="#">Pattern</a></li>
          <li><a class="dropdown-item" href="#">Artist</a></li>
        </ul>
      </div>
     
      <!-- Notifications Dropdown Menu -->
      <!-- Category Dropdown Menu -->
      <div class="dropdown" style="margin:2%">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Scale
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">50%</a></li>
          <li><a class="dropdown-item" href="#">70%</a></li>
          <li><a class="dropdown-item" href="#">100%</a></li>
          <li><a class="dropdown-item" href="#">200%</a></li>
          <li><a class="dropdown-item" href="#">400%</a></li>
          <li><a class="dropdown-item" href="#">1000%</a></li>
        </ul>
      </div>

      <div class="dropdown" style="margin:2%">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Vender
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Andy Warhol</a></li>
          <li><a class="dropdown-item" href="#">Kaws</a></li>
          <li><a class="dropdown-item" href="#">Nike</a></li>
          <li><a class="dropdown-item" href="#">Bape</a></li>
          <li><a class="dropdown-item" href="#">Van Gogh</a></li>
          <li><a class="dropdown-item" href="#">DesignerCon</a></li>
          
        </ul>
      </div>
         
      <li class="nav-item" style="margin:1%">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index2.php" class="brand-link">
    <img src="../pics/bearlogo.png"class="brand-image img-circle elevation-3" style="opacity: .8">
        <span style="font-size: 20pt;font-family: 'Reenie Beanie', cursive;">Bearbrick House </span>
        <br>
        <!-- <span class="brand-text font-weight-light" style="font-size: 10pt">Database Management System </span> -->
    </a>

  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
           <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          </div>
  
          <div class="info">
          <a href="editcutomer.php" class="d-block"><?php echo $objResult["Username"];?></a>
          <i><p style="padding-left:150px">
              <a href="../login.php" class="d-block">Logout</a>
              </p></i>
            </div>
          </div>
        
        <!-- Sidebar Menu -->
 <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            
            <li class="nav-header"></li>
            <li class="nav-item">
              <a href="productlinecustomer.php" class="nav-link">
                <i class="nav-icon far fas fa-store"></i>
                <p>
                  Product
                </p>
              </a>
            </li>
            <br>
    
            <li class="nav-item">
              <a href="cartcustomer.php" class="nav-link">
              <i class="nav-icon far fas fa-shopping-cart"></i>
                <p>
                 Cart
                </p>
              </a>
            </li>
            <br>
            
           
           
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 2343.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../pics/bearlogo.png" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $objResult["Username"];?></h3>

                <p class="text-muted text-center">Classic Member</p>

              </div> 
            </div>
            <!-- /.card -->
         </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#Profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#Address" data-toggle="tab">Address</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="Profile">
                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Name : </b>
                            <a><?php echo $objResult["FirstName"];?></a><a><?php echo $objResult["LastName"];?></a>
                        </li>
                        <li class="list-group-item">
                            <b>E-mail : </b> 
                            <a><?php echo $objResult["EmailAddress"];?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Phone :</b>
                            <a><?php echo $objResult["Phone"];?></a>
                        </li>
                        </ul>
                              <div class="row">
                                <div class="col-sm-2 offset-sm-10">
                                <a class="btn btn-primary btn-danger"class="nav-link" href="#settings" data-toggle="tab"name="Edit">Edit<a>
                                </div>
                              </div>
                 </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="Address">
                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Name : </b>
                            <a><?php echo $objResult["FirstName"];?></a><a><?php echo $objResult["LastName"];?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Address : </b>
                        <?php
                  
                  while($objResult3 = mysqli_fetch_array($objQuery3) )
                  {
                  ?>  
                        
                        <a>
                        <?php
                        if( $objResult3== Null ){
                        
                             echo ' ';
                      
                        } 
                        
                        else {
                        
                            // echo $objResult3["AddressNumber"];
                             echo $objResult3["AddressLine1"];
                             echo $objResult3["City"];
                             echo $objResult3["StateProvince"];
                             echo $objResult3["CountryRegion"];
                             echo $objResult3["PostalCode"];
                      
                        } ?>
                       <div class="row">
                        <div class="col-sm-2 offset-sm-10">
                        <form method="post">
                        <input name ="deleteid" type="text" value="<?php  echo $objResult3["AddressNumber"]; ?>"hidden>
                        <button type="submit" class="btn pull-right" name ="subdelete"><i class="fa fa-trash" style="font-size:15px;color:#FF6347;"></i></button>
                      
                        </from>
                        </div>
                        </div>
                        
                        </a>
                        </li>
                        <?php
                        }
                        ?>
                        </ul>
                              <div class="row">
                                <div class="col-sm-2 offset-sm-10">
                                <a class="btn btn-primary btn-danger"class="nav-link" href="#settingsAdd" data-toggle="tab"name="EditAdd">Edit<a>
                                </div>
                              </div>
                             
                  </div>
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="Address">
                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">
                         <a></a>
                        </li>
                        </ul>
                             
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                  <form method="post">
                  <label for="Profile setting" class="col-sm-2 col-form-label">Profile Setting</label>
                            <div class="form-row">
                                <div class="col"> 
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="Fname" name="Firstname" placeholder="Fristname">
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"> 
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" mid="Lname" name="Lastname"  placeholder="Lastname">
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                              <div class="col"> 
                                <div class="input-group mb-3">
                                  <input type="email" class="form-control" id="Email" name="EmailAddress"  placeholder="Email">
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="col"> 
                                <div class="input-group mb-3">
                                  <input type="double" class="form-control" id="Phone" name="Phone" placeholder="Phone">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-address-book"></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col"> 
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" id="Username" name="Username"  placeholder="Username">
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fas fa-user"></span>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="col"> 
                                <div class="input-group mb-3">
                                  <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <!-- /.col -->
                             
                              <div class="row">
                                <div class="col-sm-2 offset-sm-10">
                                  <input type="text" id="usertest" name="usertest" value="<?php echo $objResult["CustomerNumber"];?>" hidden>
                                  <button type="submit" class="btn btn-primary btn-danger" id="submit" name="submit">submit</button>
                                </div>
                              </div>
                              
                              <!-- /.col -->
                    </form>
                  </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="Address">
                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">
                         <a></a>
                        </li>
                        </ul>
                             
                  </div>
                  <!-- /.tab-pane -->

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settingsAdd">
                  <form method="post">
                  <label for="Profile setting" class="col-sm-2 col-form-label">Address Setting</label>
                            <div class="form-row">
                                <div class="col"> 
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Address">
                                      <!--  <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                        </div>-->
                                    </div>
                                </div>
                  
                            </div>
                            <div class="form-row">
                              <div class="col"> 
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" id="City" name="City"  placeholder="City">
                                  
                                </div>
                              </div>
                              <div class="col"> 
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" id="StateProvince" name="StateProvince"  placeholder="StateProvince">
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col"> 
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" id="CountryRegion" name="CountryRegion"  placeholder="CountryRegion">
                                  
                                </div>
                              </div>
                              <div class="col"> 
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" id="PostalCode" name="PostalCode"  placeholder="PostalCode">
                                 
                                </div>
                              </div>
                            </div>
                              <!-- /.col -->
                             
                              <div class="row">
                                <div class="col-sm-2 offset-sm-10">
                                  <input type="text" id="username" name="Username" value="<?php echo $objResult["Username"];?>" hidden>
                                  <button type="submit" class="btn btn-primary btn-danger" id="submitADD" name="submitADD">submit</button>
                                </div>
                              </div>
                              
                              <!-- /.col -->
                    </form>
                  </div>
              <!----จบ-->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-white">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard3.js"></script>

<script var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
  return new bootstrap.Dropdown(dropdownToggleEl)
})></script>

</body>
</html>