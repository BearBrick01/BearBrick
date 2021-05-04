<?php
session_start();
require_once ("connect.php");
//**DISPLAY PRODUCT INFO */
// $query2 = "select * from product ";                       
// $result2 = mysqli_query($conn, $query2);
// $objResult = mysqli_fetch_array($result2); 


//**DISPLAY PRODUCT INFO */
// $ProductCategoryID = $_POST['ProductCategoryID'];

$query2 = "select * from product JOIN productcategory ON product.ProductCategoryID =  productcategory.productCategoryID";                       
$result2 = mysqli_query($conn, $query2);

if (isset($_POST['Basic']) ){
  $Basic= $_POST['Basic'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Basic'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
  // echo $strSQL;
  // echo $Basic;
}
if (isset($_POST['Jellybean']) ){
  $Jellybean = $_POST['Jellybean'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Jellybean'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
}
if (isset($_POST['SF']) ){
  $SF = $_POST['SF'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$SF'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
}
if (isset($_POST['Horror']) ){
  $Horror = $_POST['Horror'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Horror'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
}
if (isset($_POST['Animal']) ){
  $Animal = $_POST['Animal'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Animal'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
}
if (isset($_POST['Pattern']) ){
  $Pattern = $_POST['Pattern'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Pattern'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
}
if (isset($_POST['Artist']) ){
  $Artist = $_POST['Artist'];
  $strSQL = "SELECT * from product JOIN productcategory ON product.ProductCategoryID WHERE '$Artist'  = productcategory.ProductCategoryID AND product.ProductCategoryID =  productcategory.productCategoryID";
  $result2 = mysqli_query($conn, $strSQL);
}
if (isset($_POST['S1']) ){
  $S1 = $_POST['S1'];
  $strSQL = "SELECT * from product WHERE Scale LIKE '$S1' ";
  $result2 = mysqli_query($conn, $strSQL);
  echo $S1;
 }

 if (isset($_POST['Ss']) ){
  $Ss = $_POST['Ss'];
  $strSQL = "SELECT * from product WHERE Scale LIKE '$Ss' ";
  $result2 = mysqli_query($conn, $strSQL);
  echo $$strSQL;
 }
 if (isset($_POST['S3']) ){
  $S3 = $_POST['S3'];
  $strSQL = "SELECT * from product WHERE Scale LIKE '$S3' ";
  $result2 = mysqli_query($conn, $strSQL);
  echo $S3;
 }
 if (isset($_POST['S4']) ){
  $S4 = $_POST['S4'];
  $strSQL = "SELECT * from product WHERE Scale LIKE '$S4' ";
  $result2 = mysqli_query($conn, $strSQL);
  echo $S4;
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick | House </title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>

<body class="layout-top-nav" data-new-gr-c-s-check-loaded="14.982.0" data-gr-ext-installed="" style="height: auto;background-color:white">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link">Log in</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="register.php" class="nav-link">Sign up</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="padding-left:500px">
        <a href="index.php" class="nav-link" class="brand-text font-weight-light">
          <!-- <img src="pics/bearlogo.png"class="brand-image img-circle elevation-3" style="opacity: .8"> -->
          <span style="font-size: 20pt;font-family: 'Reenie Beanie', cursive;">Bearbrick House </span>
        </a>
      </li>
    </ul>
    

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="padding-right: 35pt;">
      <!-- Category Dropdown Menu -->
      <div class="dropdown" style="margin:2%">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <form  action="" method="POST">
          <li><button class="dropdown-item" name="Basic" value="1"  type="submit">Basic</button></li>
          <li><button class="dropdown-item" name="Jellybean" value="2"  type="submit">Jellybean</button></li>
          <li><button class="dropdown-item" name="Horror" value="3"  type="submit">Horror</button></li>
          <li><button class="dropdown-item" name="SF" value="4"  type="submit">SF</button></li>
          <li><button class="dropdown-item" name="Animal" value="5"  type="submit">Animal</button></li>
          <li><button class="dropdown-item" name="Pattern" value="6"  type="submit">Pattern</button></li>
          <li><button class="dropdown-item" name="Artist" value="7"  type="submit">Artist</button></li>
          </from>
          </ul>
      </div>
     
      <!-- Notifications Dropdown Menu -->
      <!-- Category Dropdown Menu -->
      <div class="dropdown" style="margin:2%">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Scale
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><button class="dropdown-item" name="S1" value="50"   type="submit"><a class="dropdown-item">50%</button></li>
          <li><button class="dropdown-item" name="Ss" value="70"   type="submit"><a class="dropdown-item">70%</button></li>
          <li><button class="dropdown-item" name="S3" value="100"  type="submit"><a class="dropdown-item">100%</button></li>
          <li><button class="dropdown-item" name="S4" value="200"  type="submit"><a class="dropdown-item">200%</button></li>
          <li><button class="dropdown-item" name="S5" value="400"  type="submit"><a class="dropdown-item">400%</button></li>
          <li><button class="dropdown-item" name="S6" value="1000" type="submit"><a class="dropdown-item">1000%</button></li>
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

   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" Style= "background-image: url('pics/bg10.jpg');background-size:100%;">
    <!-- Content Header (Page header) -->
    <section class="content-header"style="opacity:0.95" >
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
 <section class="content"style="opacity:0.94">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" >

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
                                    <form action="pages/testcustomer.php" method="post">
                                    <!-- <input type="text" name="ProductID" value="<?php $objResult2['ProductID']; ?>"> -->
                                      
                                         <img src="pics/<?php echo $objResult2["Photosize1"]; ?>"  style="width:55%;padding-left:100px" class="img-fluid mb-2" alt="white sample"/>
      
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
  <script src="plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="dist/js/adminlte.min.js"></script>


<!-- Ekko Lightbox -->
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
</body>
</html>

