
<?php
session_start();
  
require_once "../connect.php";
if(!isset($_SESSION['EmployeeNumber'] ))  
{  
   echo "Please Login!";
   exit();
   header("Location:login.php"); 
} 
//*** Update Last Stay in Login System
$sql = "UPDATE employees SET ModifiedDate = NOW() WHERE  EmployeeNumber = '".$_SESSION['EmployeeNumber']."' ";
$query = mysqli_query($conn,$sql);
//*** Get User Login
$strSQL = "SELECT * FROM employees WHERE  EmployeeNumber = '".$_SESSION['EmployeeNumber']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery); 


if (isset($_POST['add']) ){
  $mysqli = new mysqli("localhost","root","1111","bear02");
     
      if( empty($_POST["Name"]) && empty($_POST["ProductCategoryID"]) && empty($_POST["Scale"]) && empty($_POST["OfficeCode"])  && empty($_POST["Quantity"]) && empty($_POST["Price"]) )
      {  
        echo '<script>alert("Fields are required")</script>';  
      }else{
          
        //   $Product_code = $_POST['ProductID'];
           $Product_name = $_POST['Name'];
           $Product_category = $_POST['ProductCategoryID'];
           $Product_scale = $_POST['Scale'];
           $VendorNo = $_POST['VendorNo'];
          $Product_office = $_POST['OfficeCode'];
           $Product_description = $_POST['Description'];
           $Product_Quantity = $_POST['Quantity'];
           $Product_price = $_POST['Price'];
         /*  $Product_Photosize1 = $_POST['Photosize1'];
           $Product_Photosize2= $_POST['Photosize2'];*/

           //upload file 1
          $fileType = pathinfo(basename($_FILES["Photosize1"]["name"]),PATHINFO_EXTENSION);
          $newname_filetype = "imge" . uniqid() .".". $fileType;
          $target_dir = "../pics/";
          $target_file  = $target_dir .$newname_filetype;
          
           //uploading 1
          if (move_uploaded_file($_FILES["Photosize1"]["tmp_name"], $target_file)) {
            header("location:productadd.php");
              // echo "The file ". basename( $_FILES["Photosize1"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
          
           //upload file 2
           $fileType = pathinfo(basename($_FILES["Photosize2"]["name"]),PATHINFO_EXTENSION);
           $newname_filetype2 = "imge" . uniqid() .".". $fileType;
           $target_dir = "../pics/";
           $target_file  = $target_dir .$newname_filetype2;
           
            //uploading 2
           if (move_uploaded_file($_FILES["Photosize2"]["tmp_name"], $target_file)) {
               header("location:productadd.php");
              //  echo "The file ". basename( $_FILES["Photosize2"]["name"]). " has been uploaded.";
           } else {
               echo "Sorry, there was an error uploading your file.";
           }

          $query = "INSERT INTO product (ProductID,Name,ProductCategoryID,Scale,VendorNo,OfficeCode,Description,Quantity,Price,Photosize1,Photosize2)
                    VALUES(null,'$Product_name','$Product_category','$Product_scale',null,'$Product_office','$Product_description', '$Product_Quantity' ,'$Product_price','$newname_filetype' ,'$newname_filetype2')";  
          $result = mysqli_query($conn, $query);
          echo $query;
             
          
        }
    }

 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick | Add Product</title>
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
  <link rel="stylesheet" href="../dist/css/dropify.min.css">
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
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index3.php">Home</a></li>
            <li class="breadcrumb-item active">Add Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
 <!-- Main content -->
 <section class="content">
   
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

              <div class="container-fluid">
         
                  <form  method="POST" enctype="multipart/form-data">  
                    <div class="row">      
                    <div class="col-md-4">
                        <div class="col-md-9">
                         <!-- files upload -->
                          <input type="file" id="input-file-now-custom-2" class="dropify" data-height="300" name="Photosize1"/>
                          <br>
                          <!-- files upload -->
                          <input type="file" id="input-file-now-custom-2" class="dropify" data-height="300" name="Photosize2"/>
                         </div>
                         </div>  
                      <div class="col-md-8">
                     
                        <div class="form-row">
                            <!-- <div class="form-group col-md-3">
                              <label>Product Code</label>
                              <input type="text" class="form-control" name="ProductID" value=" " >
                            </div> -->
                            <div class="form-group col-md-5">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="Name" id="pname" value=" ">
                            </div>
                        </div>    
                            
                         <div class="form-row">
                       
                            <div class="form-group col-md-3">
                                <label>Category</label>
                                <select class="form-control" name="ProductCategoryID">
                                                                        <option value="1">Basic</option>
                                                                        <option value="2">Jellybean</option>
                                                                        <option value="3">Horror</option>
                                                                        <option value="4">SF</option>
                                                                        <option value="5">Animal</option>
                                                                        <option value="6">Pattern</option>
                                                                        <option value="7">Artist</option>
                                                                    </select>
                            </div>
                           

                            <div class="form-group col-md-3">
                        
                               <label>Scale</label>
                                <select class="form-control" name="Scale">
                                                              <option value="50">50%</option>
                                                            <option value="70">70%</option>
                                                            <option value="100">100%</option>
                                                            <option value="200">200%</option>
                                                            <option value="400">400%</option>
                                                            <option value="1000">1000%</option>
                                                        </select>
                            </div>

                                <div class="form-group col-md-3">
                                <label>Vendor</label>
                                <select class="form-control"  name="VendorNo"> <option value="Andy Warhol">Andy Warhol</option>
                                                                    <option value="Kaws">Kaws</option>
                                                                    <option value="Nike">Nike</option>
                                                                    <option value="Bape">Bape</option>
                                                                    <option value="Van Gogh">Van Gogh</option>
                                                                    <option value="DesignerCon">DesignerCon</option>
                                                                </select>
                                </div>
                                <div class="form-group col-md-3">
                                   <label>Office/Branch</label>
                                   <select class="form-control" name="OfficeCode">
                                                                  <option value="1">Branch 1</option>
                                                                <option value="7">Branch 7</option>
                                                                <option value="9">Branch 9</option>
                                                            </select>

                                </div>



                          </div>

                           

                        <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" rows="4" name="Description"></textarea>
                        </div>  
                        </div>

                          <div class="form-group col-sm-3">
                                      
                                      <div class="input-group">
                                      <label>Quantity</label>&nbsp&nbsp <input type="number" class="form-control" id="QuantityInStock" step="1" min="1" max="7724" name="Quantity" value="1">  
                                      
                                      </div>                                  
                                   </div>
                        <br>

                        <div class="form-row">
                        <label>Price</label>
                            <div class="input-group col-md-3">
                               <div class="input-group-prepend">
                                       <div class="input-group-text">Bath</div>
                                      <div><input type="text" class="form-control" name="Price" id="Price"></div>
                                </div>
                            </div>
                        </div> 
                        
                
                        <div class="form-row">
                            <div class="col-sm-2 offset-sm-9">
                                <button type="submit" name="add" class="btn btn-primary btn-lg btn-block">Add</button>
                            </div>
                    </div><!--row-->    
                       
                  </form>
              </div><!--container-fluid -->
             </div><!-- Car-body -->
          </div><!-- Card -->
                                                
  </section>      
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <!-- jQuery -->
 <script src="../plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../dist/js/adminlte.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="../dist/js/dropify.min.js"></script>
 <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();


    });
    </script>
    


<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
</body>
</html>



