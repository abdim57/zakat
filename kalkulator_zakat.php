<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  <!-- javascript -->
  
  </script>

  <title>Sistem Informasi PYD</title>

</head>
<body class="sidebar-mini fixed">
  <div class="wrapper">
    <!-- Navbar-->
    <header class="main-header hidden-print"><a class="logo" href="index.html">-ASRAMA-</a>
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu">
          <ul class="top-nav">

            <!-- User Menu-->
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
              <ul class="dropdown-menu settings-menu">
                <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
          <div class="pull-left info">
            <p>-User-</p>
            <p class="designation">-Level Akses-</p>
          </div>
        </div>
        <?php include "all_menu.php" ?>
      </section>
    </aside>
    <div class="content-wrapper">
      <div class="page-title">
        <div>
          <h1><i class="fa fa-calculator"></i> Kalulator Zakat</h1>
          <!-- <p>Sample forms</p> -->
        </div>
      </div>
    <div class="row">
          <div class="col-md-6">
            <div class="widget-small success"><i class="icon fa fa-calculator fa-3x"></i>
              <div class="info">
                    <p class="bs-component"><a class="btn btn-success btn-lg btn-block" href="zakatfitrah_hitung.php">Hitung Zakat Fitrah</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="widget-small success"><i class="icon fa fa-calculator fa-3x"></i>
              <div class="info">
                <p class="bs-component"><a class="btn btn-info btn-lg btn-block" href="zakatfidyah_hitung.php">Hitung Fidyah</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="widget-small success"><i class="icon fa fa-calculator fa-3x"></i>
              <div class="info">
                <p class="bs-component"><a class="btn btn-danger btn-lg btn-block" href="zakatpenghasilan_hitung.php">Hitung Zakat Penghasilan & Zakat Mal</a></p>
              </div>
            </div>
          </div>
        </div>

    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>