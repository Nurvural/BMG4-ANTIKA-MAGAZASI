<?php

//session ile kullanici login mi diye kontrol ediyorum
//eger login ise sayfaa giris yapabilsin
//degil ise bu class'in sonunda yazdigim gibi login sayfasina yonlendirilsin ve islemleri login olmadigi icin kabul edilmesin
session_start();

if ($_SESSION["Login"] == true) {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sergiler</title>


        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="home_page.php" class="nav-link">Anasayfa</a>
                    </li>
                </ul>

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

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item dropdown-footer">T??m Mesajlar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge"></span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="" class="brand-link">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AM??T</span>
                </a>

                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="profile.php" class="d-block">
                                <?php echo $_SESSION['iUserMail']; ?>
                            </a>
                        </div>
                    </div>

                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="home_page.php" class="nav-link">
                                    <i class="nav-icon fas fa-columns"></i>
                                    <p>
                                        Anasayfa
                                    </p>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="exhibition.php" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Sergiler
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Profil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="favorite.php" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Favoriler
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="store.php" class="nav-link">
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                        Ma??azalar
                                    </p>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="bag.php" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>
                                        Sepet
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">????erik</li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>
                                        Sergi Ayarlar??
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="exhibition_add.php" class="nav-link">
                                            <i class="nav-icon fas fa-chart-pie"></i>
                                            <p>Sergi Olu??tur</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="exhibition_edit.php" class="nav-link">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>Sergi D??zenle</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Di??er Sayfalar
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <?php
                                    include("veritabani_baglanti.php");
                                    $admin = $_SESSION["iUserMail"];

                                    $adminsor = mysqli_query($conn, "select * from user where mail='$admin'");
                                    $admincek = mysqli_fetch_array($adminsor);
                                    if ($admincek['yetki_id'] == "1") {
                                    ?>
                                        <li class="nav-item">
                                            <a href="users.php" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>
                                                <p>Kullan??c??lar</p>
                                            </a>
                                        </li>

                                    <?php
                                    }
                                    ?>

                                    <li class="nav-item">
                                        <a href="login.php" class="nav-link">
                                            <i class="nav-icon far fa-circle text-info"></i>
                                            <p class="text">Giri??</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forgot_password.php" class="nav-link">
                                            <i class="nav-icon far fa-circle text-warning"></i>
                                            <p>??ifremi Unuttum</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logout.php" class="nav-link">
                                            <i class="nav-icon far fa-circle text-danger"></i>
                                            <p>????k????</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-search"></i>
                                    <p>
                                        Search
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../search/simple.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Simple Search</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../search/enhanced.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Enhanced</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Sergiler</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                    <li class="breadcrumb-item active">Sergiler</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="card card-solid">
                        <div class="card-body pb-0">

                            <?php

                            include("server.php");

                            $tablo = mysqli_query($conn, "select * from sergi");

                            while ($dizi = $tablo->fetch_assoc()) {
                            ?>
                                <div class="row d-flex align-items-stretch">
                                    <!-- magazalar blok girisi -->
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                        <div class="card bg-light">
                                            <div class="card-header text-muted border-bottom-0">
                                                <?php echo $dizi["sergi_ismi"]; ?>
                                            </div>
                                            <form method="POST">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b><?php echo $name = $dizi["sergi_ismi"]; ?></b></h2>
                                                            <p class="text-muted text-sm"><b>Hakk??nda: </b></p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b> Adres : </b> <?php echo $dizi["firma"]; ?></li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg"></i></span> <b> B??t??e : </b><?php echo $dizi["butce"]; ?></li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg"></i></span> <b> Ba??lama Tarihi : </b> <?php echo $dizi["bas_tarih"]; ?></li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg"></i></span> <b> Biti?? Tarih : </b> <?php echo $dizi["bit_tarih"]; ?></li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg"></i></span> <b> Saat : </b> <?php echo $dizi["saat"]; ?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <img src="dist/img/mag_6.png" alt="user-avatar" class="img-circle img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a href="shop.php" class="btn btn-block btn-outline-secondary btn-sm">
                                                            <i class="fas fa-user"></i> Sergiye Git
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>

                        <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                                <ul class="pagination justify-content-center m-0">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <!-- dongu kurulur magaza say??s??na gore kolonlar otomatik olusur -->
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>

                </section>
            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                </div>
                <strong>Copyright &copy; 2014-2020 <a href="">Amit Antika Ma??azas??</a>.</strong> T??m Haklar?? Sakl??d??r
            </footer>

            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>

        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="dist/js/adminlte.min.js"></script>

        <script src="plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

        <script src="plugins/bootstrap-slider/bootstrap-slider.min.js"></script>

        <script src="dist/js/demo.js"></script>

    </body>

    </html>


<?php
    //login olmayan kullanici
} else {
    header("location:login.php");
}
?>