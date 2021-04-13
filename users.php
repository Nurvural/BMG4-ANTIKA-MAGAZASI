<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kullanıcı Listesi</title>

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
              <h1>Kişiler</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                <li class="breadcrumb-item active">Kişiler</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="content">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kişiler</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- Dongu icine alinip vt'dan yazdirilacak -->
          <div class="card-body p-0">
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">
                    Sıra
                  </th>
                  <th style="width: 20%">
                    İşletme
                  </th>
                  <th style="width: 30%">
                    İşletme Sahibi
                  </th>
                  <th>
                    İşletme Numarası
                  </th>
                  <th style="width: 8%" class="text-center">
                    Statü
                  </th>
                  <th style="width: 20%">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    vt sırası gelecek
                  </td>
                  <td>
                    <a>
                      İşletme İsmi Gelecek
                    </a>
                    <br />
                    <small>
                      Oluşturma Tarihi Gelecek
                    </small>
                  </td>
                  <td>
                    <!-- Isletme Logosu -->
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="dist/img/avatar.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="dist/img/avatar2.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="dist/img/avatar3.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="dist/img/avatar4.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="dist/img/avatar5.png">
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                      </div>
                    </div>
                    <small>
                      Numara gelecek
                    </small>
                  </td>
                  <td class="project-state">
                    <span class="badge badge-success">Success</span>
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      Görüntüle
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Düzenle
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Sil
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
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