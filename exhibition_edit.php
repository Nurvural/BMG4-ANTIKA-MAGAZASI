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
        <title>Sergi Düzenle</title>

        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="dist/css/adminlte.min.css">

        <script>
            function eylem() {
                return confirm("Sergiyi Silmeyi Onaylıyor musunuz?");
            }
        </script>

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
                                                <p>Kullanıcılar</p>
                                            </a>
                                        </li>

                                    <?php
                                    }
                                    ?>

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
                                <h1>Sergi Düzenle</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                    <li class="breadcrumb-item active">Sergi Düzenle</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card card-teal">
                                <div class="card-header">
                                    <h3 class="card-title">Kayıtlı Sergilerim</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Seç</th>
                                                <th>Sergi İsmi</th>
                                                <th>Bütçe</th>
                                                <th>Mail</th>
                                                <th>İçerik</th>
                                                <th>Oluşturma Tarihi</th>
                                                <th>Bitiş Tarihi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            include("server.php");
                                            $email = $_SESSION['iUserMail'];

                                            $tablo = mysqli_query($conn, "select * from sergi WHERE firma='$email'");

                                            while ($dizi = $tablo->fetch_assoc()) {

                                                echo "<tr>";
                                                echo "<td>";

                                            ?>
                                                <form method="POST">
                                                    <div class="btn-group btn-group-sm">

                                                        <i class="fas fa-trash">

                                                            <a class="btn btn-danger" href="exhibition_edit.php?id=<?php echo $dizi['id']; ?>"> Sil </a>
                                                        </i>

                                                    </div>
                                                    <div class="btn-group btn-group-sm">
                                                        <i>
                                                            <input type="submit" class="btn btn-block btn-info btn-sm" name="duzenle" value="Düzenle">
                                                        </i>
                                                    </div>

                                                </form>

                                                <?php

                                                echo "<td>";
                                                echo $dizi["sergi_ismi"] . "<br><br>";
                                                echo "</td>";

                                                echo "<td>";
                                                echo $dizi["butce"] . "<br><br>";
                                                echo "</td>";

                                                echo "<td>";
                                                echo $dizi["firma"] . "<br><br>";
                                                echo "</td>";

                                                echo "<td>";
                                                echo $dizi["icerik"] . "<br><br>";
                                                echo "</td>";

                                                echo "<td>";
                                                echo $dizi["bas_tarih"] . "<br><br>";
                                                echo "</td>";

                                                echo "<td>";
                                                echo $dizi["bit_tarih"] . "<br><br>";
                                                echo "</td>";

                                                ?>
                                            <?php
                                            }

                                            ?>

                                            <?php

                                            error_reporting(0);
                                            include("server.php");
                                            if (isset($_GET['id'])) {
                                                $sergi_id = $_GET['id'];
                                                $sql = mysqli_query($conn, "DELETE FROM sergi where id='$sergi_id'");
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6" id="duzen">
                            <div class="card card-purple">
                                <div class="card-header">
                                    <h3 class="card-title">Düzenle</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <form method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputName">Düzenlenecek Sergi İsmi</label>
                                            <input type="text" name="duzen_isim" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Sergi İsmi</label>
                                            <input type="text" name="sergi_isim" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEstimatedBudget">Bütçe</label>
                                            <input type="number" name="butce" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">Açıklama</label>
                                            <textarea name="ser_aciklama" class="form-control" rows="4" required class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputStatus">İçerik</label>
                                            <select name="icerik" class="form-control custom-select">
                                                <option selected disabled>Seç</option>
                                                <option>Ayna</option>
                                                <option>Biblo</option>
                                                <option>Ev Eşyaları</option>
                                                <option>Aksesuar</option>
                                                <option>Giyim</option>
                                                <option>Araç</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputClientCompany">Firma Mail</label>
                                            <input type="text" name="firma_mail" required class="form-control">
                                            <?php echo $dizi['firma'] ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputClientCompany">Firma Sahibi</label>
                                            <input type="text" name="sahip" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Başlangıç Tarihi:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input required type="date" class="form-control float-right" name="baslangic_tarih">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Bitiş Tarihi:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input required type="date" class="form-control float-right" name="bitis_tarih">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="submit" value="Kaydet" name="kayit" class="btn btn-success float-right">
                                        </div>
                                    </div>
                                </form>
                                <?php

                                include("veritabani_baglanti.php");

                                echo $duzen;
                                $duzen = $_POST['duzen_isim'];
                                $isim = $_POST['sergi_isim'];
                                $aciklama = $_POST['ser_aciklama'];
                                $icerik = $_POST['icerik'];
                                $mail = $_POST['firma_mail'];
                                $sahip = $_POST['sahip'];
                                $fiyat = $_POST['butce'];
                                $baslangic_tarih = $_POST['baslangic_tarih'];
                                $bitis_tarih = $_POST['bitis_tarih'];

                                if (isset($_POST['kayit'])) {

                                    mysqli_query($conn, "UPDATE sergi SET sergi_ismi='$isim', aciklama='$aciklama', icerik='$icerik', firma='$mail', sahip='$sahip', butce='$fiyat', bas_tarih='$baslangic_tarih', bit_tarih='$bitis_tarih' where sergi_ismi='$duzen'");
                                }

                                ?>
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

        <script src="plugins/jquery/jquery.min.js"></script>

        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="dist/js/adminlte.min.js"></script>

        <script src="dist/js/demo.js"></script>
    </body>

    </html>

<?php
    //login olmayan kullanici
} else {
    header("location:login.php");
}
?>