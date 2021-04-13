<?php

    session_start();

    if($_SESSION["Login"]==true){

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Anasayfa</title>
    <?php include '_head.php';?> 
    
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
                        <a href="" class="dropdown-item dropdown-footer">Tüm Mesajlar</a>
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
                <span class="brand-text font-weight-light">AMİT</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="profile.php" class="d-block">Kullanıcı Yazdırılacak</a>
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
                                    Mağazalar
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
                        <li class="nav-header">İçerik</li>
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Takvim
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Sergi Ayarları
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="exhibition_add.php" class="nav-link">
                                        <i class="nav-icon fas fa-chart-pie"></i>
                                        <p>Sergi Oluştur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="exhibition_detail.php" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>Sergi Detayları</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="exhibition_edit.php" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Sergi Düzenle</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Diğer Sayfalar
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="users.php" class="nav-link">
                                        <i class="fas fa-circle nav-icon"></i>
                                        <p>Kullanıcılar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p class="text">Giriş</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forgot_password.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Şifremi Unuttum</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p>Çıkış</p>
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
                            <h1>Anasayfa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                <li class="breadcrumb-item active">Anasayfa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Anasayfa</h3>
                                </div>
                                <div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header"></div>
                                            <div class="card-body">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <!-- resimlere id verilmis -->
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="dist/img/antika1.jpg" alt="Photo 1" class="img-fluid">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="dist/img/antika6.jpg" alt="Photo 1" class="img-fluid">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="dist/img/antika9.jpg" alt="Photo 1" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <!-- onceki id'ye doner her pasidiginda -->
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <!-- sonraki id'ye gider her pasidiginda -->
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- döngü olarak vt'den mağazalar yazdırılacak -->
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika2.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika3.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika5.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antik.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika8.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika12.jpg" alt="Photo 1" class="img-fluid">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika4.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika7.jpg" alt="Photo 2" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative" style="min-height: 180px;">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika11.jpg" alt="Photo 3" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="">Amit Antika Mağazası</a>.</strong> Tüm Hakları Saklıdır
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
t>

</body>

</html>

<?php
    }
    else{
        header("location:login.php");
    }
?>