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
        <title>Sergi Oluştur</title>
        <?php include '_head.php';?> 

    </head>

    <body class="hold-transition sidebar-mini">
        <form method="post">
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
                                    <h1>Sergi Oluştur</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active">Sergi Oluştur</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>

                    <form method="post" enctype="multipart/form-data">

                        <section class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-navy">

                                        <div class="card-header">
                                            <h3 class="card-title"></h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="inputName">Sergi İsmi</label>
                                                <input type="text" name="sergi_isim" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputDescription">Açıklama</label>
                                                <textarea name="aciklama" class="form-control" rows="4"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputStatus">İçerik</label>
                                                <select multiple name="icerik[]" class="form-control custom-select">
                                                    <option selected disabled>Seç</option>
                                                    <option value="ayna">Ayna</option>
                                                    <option value="biblo">Biblo</option>
                                                    <option value="ev eşyaları">Ev Eşyaları</option>
                                                    <option value="aksesuar">Aksesuar</option>
                                                    <option value="giyim">Giyim</option>
                                                    <option value="araç">Araç</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputClientCompany">Firma</label>
                                                <input type="text" name="firma_isim" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputClientCompany">Firma Sahibi</label>
                                                <input type="text" name="firma_sahip" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card card-pink">

                                        <div class="card-header">
                                            <h3 class="card-title"></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Bütçe</label>
                                                <input type="number" name="butce" p class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Tarih:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control float-right" name="tarih">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Saat</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input type="time" class="form-control float-right" name="saat">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Seçilenler</label>
                                                <article id="" class="form-control">
                                                </article>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFile">Sergi Görseli</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="dosya">
                                                        <label class="custom-file-label" for="exampleInputFile">Seç</label>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <a href="" class="btn btn-secondary">İptal</a>
                                    <input type="submit" name="olustur" value="Oluştur" class="btn btn-success float-right">
                                </div>
                            </div>

                        </section>

                    </form>

                    <?php

                    error_reporting(0);
                    include("server.php");

                    if (isset($_POST['olustur'])) {
                        $sergi_ad = $_POST['sergi_isim'];
                        $sergi_aciklama = $_POST['aciklama'];
                        $sergi_icerik = $_POST['icerik'];
                        $sergi_firma = $_POST['firma_isim'];
                        $sergi_sahip = $_POST['firma_sahip'];
                        $sergi_butce = $_POST['butce'];
                        $sergi_tarih = $_POST['tarih'];
                        $sergi_saat = $_POST['saat'];

                        $resim = $_FILES['dosya']['tmp_name'];
                        $yukresim = file_get_contents($_FILES['dosya']['tmp_name']);
                        $resim_isim = addslashes($_FILES['dosya']['name']);
                        $resim_boyutu = getimagesize($_FILES['dosya']['tmp_name']);

                        mysqli_query($conn, "INSERT INTO sergi (sergi, aciklama, icerik, firma, sahip, butce, tarih, saat, resim_isim, resim) VALUES ('$sergi_ad', '$sergi_aciklama', '$sergi_icerik', '$sergi_firma', '$sergi_sahip', '$sergi_butce', '$sergi_tarih', '$sergi_saat', '$resim_isim', '$resim_boyutu')");

                        $kayit = mysqli_query($conn, "select * from sergi");
                    }


                    ?>
                </div>

                <footer class="main-footer">
                    <div class="float-right d-none d-sm-block">
                    </div>
                    <strong>Copyright &copy; 2014-2020 <a href="">Amit Antika Mağazası</a>.</strong> Tüm Hakları Saklıdır
                </footer>

                <aside class="control-sidebar control-sidebar-dark">
                </aside>
            </div>

        </form>
       

    </body>

    </html>

<?php
    //login olmayan kullanici
} else {
    header("location:login.php");
}
?>