<?php
session_start();
require_once ("../connect.php");
$mysqli = new mysqli("localhost", "root","1111","bear02");

// $objResult2 = mysqli_fetch_array($result3);


//**DISPLAY order INFO */
$query3 = "select * from (ordersummary JOIN product ON ordersummary.ProductID = product.ProductID ) JOIN customer ON customer.CustomerNumber = ordersummary.user and ordersummary.User_or = customer.Username WHERE customer.CustomerNumber='".$_SESSION['CustomerNumber']."' ";
$result3 = mysqli_query($conn, $query3);

// echo $query3;

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
$objResult= mysqli_fetch_array($objQuery); 


//**DISPLAY PRODUCT INFO */
// $query2 = "select * from product ";                       
// $result2 = mysqli_query($conn, $query3);

// echo $query3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick | Cart</title>
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
          <a href="../index2.php" class="nav-link">Home</a>
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
          <a href="editcutomer.php" class="d-block"><?php echo $objResult['Username'];?></a>
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
  <div class="content-wrapper">
 


    <!-- Main content -->
    <section class="content">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-sm-3"></div>

                <div class="col-md-12">
                    <div class="card-header" style="font-size: 35pt;">
                        <b>Cart</b>
                    </div><!--card header-->
                    <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                  <img src="../pics/bearlogo.png"class="brand-image img-circle elevation-3" style="width:6%">&nbsp;&nbsp;&nbsp;&nbsp;<strong style="font-size: 20pt;font-family: 'Reenie Beanie', cursive;">Bearbrick House</strong><br>
                    <!-- 795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br> -->
                    Email: admin@house.com
                 
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $objResult['Username']?></strong><br>
                    <!-- 795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br> -->
                    Email: <?php echo $objResult['EmailAddress']?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                  <!-- <b>Invoice #007612</b><br>
                  <br> -->
                  <!-- <b>Order ID:&nbsp;&nbsp;</b><?php echo $objResult3['OrderID']?><br> -->
                  <!-- <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567 -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

                    <div class="table-responsive mailbox-messages">
                        <table class="table " >
                            <thead>
                                <tr style="background-color: black;text-align: center;color:white"> <!--- row1-->
                                  <!---col1-->
                                    <th width=80px>
                                      </th>
                                   <!---col 2-->
                                    <th width=>
                                      <div class="subject">
                                        <h5><b>Name</b></h5>
                                      </div>
                                      </th>
                                  
                                    <th width=>
                                      <div class="subject">
                                        <h5><b>Price</b></h5>
                                      </div>
                                      </th>
                                  
                                    <th width=> 
                                      <div class="subject">
                                        <h5><b>Quantity</b></h5>
                                      </div>
                                      </th>
                                      <th width=>
                                        <h5><b>SubTotal</b></h5>
                                      </th>
                                  
                                  
                                </tr>
                              </thead>

                              <?php 
                              $i=1;
                              $AllTotal = 0;
                             while($objResult = mysqli_fetch_array($result3)  )
                             {
                           
                              ?>

                              <tbody style="text-align: center;">
                                <tr>
                                    <td>
                                    <img src="../pics/<?php echo $objResult["Photosize1"]; ?>"  style="width:60%" class="img-fluid mb-2" alt="white sample"/>
                                    </td>
                                    <td width=180px ><?php echo $objResult['Name']?></td>
                                    <td>
                                       <?php echo $objResult['Price']?>
                                    </td>
                                    <td>
                                        <?php echo $objResult['OrderQty']?>
                                    </td>
                                    <td name="pricequantity">
                                        <?php echo  $objResult['Price'] *  $objResult['OrderQty']  ?>
                                        <?php $SubTotal = $objResult['Price'] *  $objResult['OrderQty']; ?>
                                        
                                    </td>
                        
                                    <?php
                                     
                                     $AllTotal= $AllTotal+ $SubTotal;  // echo $AllTotal; ?> 
                                </tr>
                               
                            </tbody>
                            <?php
                            $i++;
                             }
                            ?>
                        </table>
                        <div class="table-responsive">
              <table class="table">
                <tbody>
                  
                  <tr>
                    <th>Shipping:</th>
                    <td>Free</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td><?php echo$AllTotal?>฿</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
                    </div>

                </div><!--col-md-6-->
             
                <div class="col-3">
            <!--col-md-4-->
            <!-- <p class="lead">Amount Due 2/22/2014</p> -->
   
           

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
        </div> <!--contain-fluid-->
    </section>
   
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

 <!-- jQuery -->
 <script src="../plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../dist/js/adminlte.min.js"></script>


<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
</body>
</html>
