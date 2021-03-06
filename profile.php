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
    <title>Kullanıcı Profili</title>

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <script>
      function eylem() {
        return confirm("Üyeliğiniz Silinecektir Onaylıyor Musunuz?");
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
                      <i class="nav-icon fas fa-th"></i>
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
                  include("server.php");
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
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                  <li class="breadcrumb-item active">Kullanıcı Profili</li>
                </ol>
              </div>
            </div>
          </div>
        </section>

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">

                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">
                      <?php
                      include("server.php");
                      $email = $_SESSION['iUserMail'];
                      $tablo = mysqli_query($conn, "select * from user WHERE mail='$email'");
                      $dizi = mysqli_fetch_array($tablo);
                      echo $dizi["name"] . " " . $dizi["surname"];
                      ?>
                    </h3>

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Takipçi</b> <a class="float-right">1,322</a>
                      </li>
                      <li class="list-group-item">
                        <b>Takip Edilen</b> <a class="float-right">543</a>
                      </li>

                    </ul>

                    <a href="" class="btn btn-primary btn-block"><b>Takip Et</b></a>
                  </div>
                </div>

                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Hakkımda</h3>
                  </div>
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i>Kişisel/Mağaza</strong>

                    <p class="text-muted">
                      <?php
                      include("server.php");
                      $email = $_SESSION['iUserMail'];
                      $tablo = mysqli_query($conn, "select * from user WHERE mail='$email'");
                      $dizi = mysqli_fetch_array($tablo);

                      if ($dizi["tur_id"] == 3) {
                        echo "Kişisel Hesap";
                      } else {
                        echo "Mağaza Hesabı";
                      }
                      ?>
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Adres</strong>

                    <p class="text-muted">
                      <?php
                      include("server.php");
                      $email = $_SESSION['iUserMail'];
                      $tablo = mysqli_query($conn, "select * from user WHERE mail='$email'");
                      $dizi = mysqli_fetch_array($tablo);
                      echo $dizi["adress"];
                      ?>
                    </p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Numara</strong>

                    <p class="text-muted">
                      <?php
                      include("server.php");
                      $email = $_SESSION['iUserMail'];
                      $tablo = mysqli_query($conn, "select * from user WHERE mail='$email'");
                      $dizi = mysqli_fetch_array($tablo);
                      echo $dizi["number"];
                      ?>
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notlar</strong>

                    <p class="text-muted">Ekstra?</p>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Ayarlar</a></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">

                      <div class="active tab-pane" id="settings">
                        <form method="POST" class="form-horizontal">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">İsim</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="name" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Soyisim</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="surname" placeholder="Surname">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="mail" placeholder="Mail">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Telefon</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="phone" placeholder="Phone">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Adres</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="adress" placeholder="Adress">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Şifre</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="password" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="text-right">
                              <input type="submit" class="btn btn-block btn-outline-warning btn-sm" name="duzenle" value="Kaydet">
                            </div>
                          </div>
                        </form>

                        <form method="POST">
                          <div class="form-group row">
                            <div class="text-right">

                              <input href="logout.php" onclick="eylem()" type="submit" class="btn btn-block btn-outline-danger btn-sm" name="sil" value="Kayıt Sil">

                            </div>
                          </div>

                          <?php

                          include("server.php");
                          $email = $_SESSION['iUserMail'];

                          if (isset($_POST['sil'])) {

                            $sql = mysqli_query($conn, "DELETE FROM user where mail='$email'");
                          }


                          ?>


                        </form>



                        <?php


                        error_reporting(0);
                        include("server.php");

                        $isim = $_POST['name'];
                        $soyisim = $_POST['surname'];
                        $email = $_POST['mail'];
                        $tel = $_POST['phone'];
                        $adres = $_POST['adress'];
                        $sifre = $_POST['password'];

                        if (isset($_POST['duzenle'])) {
                          mysqli_query($conn, "UPDATE user SET name='$isim', surname='$soyisim', mail='$email', number='$tel', adress='$adres', password='$sifre' where mail='$email'");
                        }


                        ?>

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