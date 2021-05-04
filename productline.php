<?php
session_start();
require_once("../connect.php");
if (isset($_POST['submit']) ){
  header("Location:test.php"); 
}

if(!isset($_SESSION['EmployeeNumber'] ))  
{  
   echo "Please Login!";
   exit();
   header("Location:../login.php"); 
} 
//*** Update Last Stay in Login System
$sql = "UPDATE employees SET ModifiedDate = NOW() WHERE  EmployeeNumber = '".$_SESSION['EmployeeNumber']."' ";
$query = mysqli_query($conn,$sql);
//*** Get User Login
$strSQL = "SELECT * FROM employees WHERE  EmployeeNumber = '".$_SESSION['EmployeeNumber']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery); 


//**DISPLAY PRODUCT INFO */
$query2 = "select * from product JOIN productcategory ON product.ProductCategoryID =  productcategory.productCategoryID";                       
$result2 = mysqli_query($conn, $query2);

// if(!isset($_POST['submit'])){
// if (isset($_POST['Basic']) ){
//   $Basic= $_POST['Basic'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Basic'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
//   // echo $strSQL;
//   // echo $Basic;
// }
// if (isset($_POST['Jellybean']) ){
//   $Jellybean = $_POST['Jellybean'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Jellybean'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
// }
// if (isset($_POST['SF']) ){
//   $SF = $_POST['SF'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$SF'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
// }
// if (isset($_POST['Horror']) ){
//   $Horror = $_POST['Horror'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Horror'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
// }
// if (isset($_POST['Animal']) ){
//   $Animal = $_POST['Animal'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Animal'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
// }
// if (isset($_POST['Pattern']) ){
//   $Pattern = $_POST['Pattern'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Pattern'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
// }
// if (isset($_POST['Artist']) ){
//   $Artist = $_POST['Artist'];
//   $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Artist'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
//   $result2 = mysqli_query($conn, $strSQL);
// }
// }else{
//   header("Location:test.php");
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick | Productline</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
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
        <a href="../index3.php" class="nav-link">Home</a>
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
        <!-- <form id="form2" method="POST"> -->
          <li><button class="dropdown-item" name="Basic" value="1"  type="submit">Basic</button></li>
          <li><button class="dropdown-item" name="Jellybean" value="2"  type="submit">Jellybean</button></li>
          <li><button class="dropdown-item" name="Horror" value="3"  type="submit">Horror</button></li>
          <li><button class="dropdown-item" name="SF" value="4"  type="submit">SF</button></li>
          <li><button class="dropdown-item" name="Animal" value="5"  type="submit">Animal</button></li>
          <li><button class="dropdown-item" name="Pattern" value="6"  type="submit">Pattern</button></li>
          <li><button class="dropdown-item" name="Artist" value="7"  type="submit">Artist</button></li>
          <!-- </from> -->
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
      <a href="../index3.php" class="brand-link">
        <img src="../pics/bearlogo.png"class="brand-image img-circle elevation-3" style="opacity: .8">
        <span style="font-size: 20pt;font-family: 'Reenie Beanie', cursive;">Bearbrick House </span>
      <br>
      <span class="brand-text font-weight-light" style="font-size: 10pt;padding-left:30px">Database Management System </span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
           <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          </div>
  
          <div class="info">
            <a href="#" class="d-block"><?php echo $objResult["Username"];?></a>
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
              <a href="productline.php" class="nav-link">
                <i class="nav-icon far fas fa-store"></i>
                <p>
                  Product
                </p>
              </a>
            </li>
            <br>
      
            <li class="nav-item">
              <a href="productadd.php" class="nav-link">
                <i class="nav-icon far fas fa-plus"></i>
                <p>
                  Add Product
                </p>
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a href="productstatus.php" class="nav-link">
                <i class="nav-icon far fas fa-stream"></i>
                <p>
                  Product Status
                </p>
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a href="cart.php" class="nav-link">
              <i class="nav-icon far fas fa-shopping-cart"></i>
                <p>
                 Cart
                </p>
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a href="order.php" class="nav-link">
                <i class="nav-icon far fas fa-folder-open"></i>
                <p>
                 Order
                </p>
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a href="employee.php" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                 Employees
                </p>
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a href="customer.php" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>
                 Customers
                </p>
              </a>
            </li>
           
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"Style= "background-image: url('../pics/bg10.jpg');background-size:100%">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

            <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="Profile">
                  <div class="row"><!-- /row1-->
                                
                  <?php
                    $i = 0;
                    while($objResult2 = mysqli_fetch_array($result2) )
                    {
                 ?>
                                    <div class="filtr-item col-sm-4" >
                                    <form action="test.php" method="post">
                                    <!-- <input type="text" name="ProductID" value="<?php $objResult2['ProductID']; ?>"> -->
                                      
                                         <img src="../pics/<?php echo $objResult2["Photosize1"]; ?>"  style="width:60%;padding-left:100px" class="img-fluid mb-2" alt="white sample"/>

                                        <span style="display: block; width:80px; height: 5px; background: deepskyblue no-repeat 0 0;"></span>
                                      <h4 style="color: blue;">฿&nbsp;<?php echo $objResult2["Price"]; ?></h4>
                                      <small style="color: black;"><?php echo $objResult2["Scale"]; ?>%| <?php echo $objResult2["cName"]; ?></small>
                                      <div class="Name" style="color:black; font-size: 13px;"><?php echo $objResult2["Name"]; ?>
                                      
                                   
                                      <button  class="btn btn-link " type="submit" name="submit" value="<?php echo $objResult2['ProductID'];?>"><i class="fab fa-readme"></i></div>
                                      <input type="text" name="ProductID" value="<?php echo $objResult2['ProductID']; ?>"hidden>
                                      <input type="text" name="Name" value="<?php echo $objResult2['Name']; ?>"hidden>
                                      <input type="text" name="Photosize1" value="<?php echo $objResult2['Photosize1']; ?>" hidden>
                                      <input type="text" name="Price" value="<?php echo $objResult2["Price"];?>" hidden>
                                      <input type="text" name="Scale" value="<?php echo $objResult2["Scale"];?>" hidden>
                                      <input type="text" name="ProductCategoryID" value="<?php echo $objResult2["ProductCategoryID"];?>" hidden>
                                      <input type="text" name="Description" value="<?php echo $objResult2["Description"];?>" hidden>
                                      <input type="text" name="usertest" value="<?php echo $objResult["Username"]; ?>" hidden>
                                      <!-- <button  class="btn btn-link" type="submit" name="submit" value="<?php echo $objResult2['ProductID'];?>">read -->
                                    
                                      </from>
                                   </div>

                    <?php
                    $i++;
                    }
                    ?>
                                   
                              </div><!-- /row1 -->
                            
            <!-- /.tab-pane -->
            </div></div></div></div></div></div>    
    </setion>
                
                

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="../dist/js/pages/dashboard3.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
</script>
</body>
</html>
