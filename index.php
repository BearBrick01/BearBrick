<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bearbrick house </title>
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
</head>

<body class="layout-top-nav" data-new-gr-c-s-check-loaded="14.982.0" data-gr-ext-installed="" style="height: auto;">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link" class="brand-text font-weight-light">
          <img src="pics/bearlogo.png"class="brand-image img-circle elevation-3" style="opacity: .8">
          Bearbrick house
        </a>
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="register.php" class="nav-link">Sigup</a>
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

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            <h1>Bearbrick House </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                  </div>
                  <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                    <div class="float-right">
                      <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="index"> Sort by Position </option>
                        <option value="sortData"> Sort by Custom Data </option>
                      </select>
                      <div class="btn-group">
                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                  
                    <div class="row">
                      <div class="status_instock" onclick="window.open('#')"></div>
                        <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                          <a href="https://via.placeholder.com/1200/FFFFFF.png" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="http://www.toys2plays.com/shop/toys2plays/images/l_cewxpl42fupzlhtlsgeh24220213614007057.png" class="img-fluid mb-2" alt="white sample"/>
                          </a>
                          <div class="description">Bearbrick IRONMAN MARK XLII(42) DAMAGE 1000%</div>
                          <div class="pdtxr">
                            <div class="pdtxr1"> 
                              <span style="display: block; width: 65px; height: 13px; background: red no-repeat 0 0;">
                                <span style="display: block; width: 0%; height: 13px; background: red no-repeat 0 -13px;"></span>
                              </span>
                            </div>
                            <div class="pdtxr2" style="left: 190px;;position: relative; bottom: 20px;" >0 review(s)</div>
                            <div class="clear"></div>
                          </div>
                          <span>฿&nbsp;150,000</span>
                        </div>
                        
                        <div class="filtr-item col-sm-3 " data-category="2, 4" data-sort="black sample">
                          <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
                            <img src="http://www.toys2plays.com/shop/toys2plays/images/l_ybhavxt3oseck5x0oi0q21220213058007056.png" class="img-fluid mb-2" alt="black sample"/>
                          </a>
                          <div class="description">Bearbrick BAPE® MANEKINEKO & DARUMA 400% set of 2</div>
                        </div>
                        <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                            <img src="http://www.toys2plays.com/shop/toys2plays/images/l_2pjkxzomxmacrsjlck3s14220214530007039.png" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                          <div class="description">Bearbrick Dr.Slump & Arale 400% & 100% /Set of 3</div>
                        </div>
                        <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                            <img src="http://www.toys2plays.com/shop/toys2plays/images/l_c2djnoec3qxyexdsikay271020202919006986.png" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                          <div class="description">Bearbrick PINOCCHIO 100% & 400%</div>
                        </div>
                    </div>
                        
                        <div class="row">
                          <div class="filtr-item col-sm-3" data-category="2, 4" data-sort="black sample">
                            <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_hibtmerksueu2axbth5q30420201538006116.png" class="img-fluid mb-2" alt="black sample"/>
                            </a>
                            <div class="description">Bearbrick HARLEY QUINN 400%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_hibtmerksueu2axbth5q30420201637006117.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick MICKEY MOUSE (B&W 2020 Ver.)100% & 400%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_vykqomav1zfxwhqffwgg1782020375006713.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">BearbrickOasis White Chrome 400%+100%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="2, 4" data-sort="black sample">
                            <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_vykqomav1zfxwhqffwgg17820204920006711.png" class="img-fluid mb-2" alt="black sample"/>
                            </a>
                            <div class="description">Bearbrick Andy Wahols Muhammad Ali 400%+100%</div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_vykqomav1zfxwhqffwgg17820202730006710.png" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <div class="description">Bearbrick Van Gogh Museum Self Portrail 400%+100%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_04dczak103ry4zwhcwv03172020444006649.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick MICKEY MOUSE (R&W 2020 Ver.) 100％ & 400％</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_04dczak103ry4zwhcwv03172020326006648.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick MICKEY MOUSE (R&W 2020 Ver.) 100％ & 400％</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="2, 4" data-sort="black sample">
                            <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_04dczak103ry4zwhcwv03172020210006647.png" class="img-fluid mb-2" alt="black sample"/>
                            </a>
                            <div class="description">Bearbrick  MICKEY MOUSE (R&W 2020 Ver.) 100％ & 400％</div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="filtr-item col-sm-3" data-category="2, 4" data-sort="black sample">
                            <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_04dczak103ry4zwhcwv03172020019006646.png" class="img-fluid mb-2" alt="black sample"/>
                            </a>
                            <div class="description">Bearbrick MICKEY MOUSE (R&W 2020 Ver.) 100％ & 400％</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_04dczak103ry4zwhcwv031720203446006645.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick PAC-MAN 100% & 400%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_c0ncnzp0b5t1mc0wcauy30620201430006509.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick PUSHEAD #5 100% & 400%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="2, 4" data-sort="black sample">
                            <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_c0ncnzp0b5t1mc0wcauy3062020135006507.png" class="img-fluid mb-2" alt="black sample"/>
                            </a>
                            <div class="description">Bearbrick THE JOKER (BATMAN The Animated Series Ver.) 1000%</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_hibtmerksueu2axbth5q30420201732006118.png" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <div class="description">Bearbrick MICKEY MOUSE (B&W 2020 Ver.)1000%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_by0wbqwwpuq5mibkk10r432019627003989.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick Tossakan 400%+100%</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="1" data-sort="white sample">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_xo0zs3xpgu2kbstwi3x35220195121003858.png" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <div class="description">Bearbrick Rider Kuuga exclusive 400％</div>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="2, 4" data-sort="black sample">
                            <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                              <img src="http://www.toys2plays.com/shop/toys2plays/images/l_qxjleqfj3y1epo3ehz31231120185558003661.png" class="img-fluid mb-2" alt="black sample"/>
                            </a>
                            <div class="description">Bearbrick A BATHING APE(R) 25th ANNIV. MULTI COLOR BE@RBRICK 400％+100% & A BATHING APE(R) × HEBRU BRANTLEY × SOCIAL STATUS BE@RBRICK 400％+100%</div>
                          </div>
                        </div>

              </div>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
   </footer>
 
 
 <!-- jQuery -->
 <script src="../plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../dist/js/demo.js"></script>
 </body>
 </html>