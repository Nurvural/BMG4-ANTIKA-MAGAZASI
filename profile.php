<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kullanıcı Profili</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
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
          <a class="nav-link" data-widget="fullscreen"role="button">
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
            <a href="" class="d-block">Kullanıcı Yazdırılacak</a>
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
                    <img class="profile-user-img img-fluid img-circle"
                        src="dist/img/user4-128x128.jpg"
                        alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Kullanıcı İsmi Yazdırıacak</h3>

                  <p class="text-muted text-center">Meslek Yazdırıacak</p>

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
                  <strong><i class="fas fa-book mr-1"></i> Eğitim</strong>

                  <p class="text-muted">
                    eğitim Bilgileri yazılacak
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Adres</strong>

                  <p class="text-muted">Nereli olduğu</p>

                  <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> Beceriler</strong>

                  <p class="text-muted">
                    <span class="tag tag-danger">Her span becerileri yazacak veritabanından</span>
                    <span class="tag tag-success">Coding</span>
                    <span class="tag tag-info">Javascript</span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-primary">Node.js</span>
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
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="dist/img/user1-128x128.jpg" alt="user image">
                          <span class="username">
                            <a href="#">Jonathan Burke Jr.</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore the hate as they create awesome
                          tools to help create filler text for everyone from bacon lovers
                          to Charlie Sheen fans.
                        </p>

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="dist/img/user7-128x128.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Sarah Ross</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Sent you a message - 3 days ago</span>
                        </div>
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore the hate as they create awesome
                          tools to help create filler text for everyone from bacon lovers
                          to Charlie Sheen fans.
                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Response">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="dist/img/user6-128x128.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Adam Jones</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-6">
                            <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
                          </div>
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="dist/img/photo2.png" alt="Photo">
                                <img class="img-fluid" src="dist/img/photo3.jpg" alt="Photo">
                              </div>
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="dist/img/photo4.jpg" alt="Photo">
                                <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
                              </div>
                            </div>
                          </div>
                        </div>

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                    </div>
                    <div class="tab-pane" id="timeline">
                      <div class="timeline timeline-inverse">
                        <div class="time-label">
                          <span class="bg-danger">
                            10 Feb. 2014
                          </span>
                        </div>
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                              weebly ning heekya handango imeem plugg dopplr jibjab, movity
                              jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                              quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div>
                          <i class="fas fa-user bg-info"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                            </h3>
                          </div>
                        </div>
                        <div>
                          <i class="fas fa-comments bg-warning"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                              Take me to your leader!
                              Switzerland is small and neutral!
                              We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                            </div>
                          </div>
                        </div>
                        <div class="time-label">
                          <span class="bg-success">
                            3 Jan. 2014
                          </span>
                        </div>
                        <div>
                          <i class="fas fa-camera bg-purple"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                              <img src="https://placehold.it/150x100" alt="...">
                              <img src="https://placehold.it/150x100" alt="...">
                              <img src="https://placehold.it/150x100" alt="...">
                              <img src="https://placehold.it/150x100" alt="...">
                            </div>
                          </div>
                        </div>
                        <div>
                          <i class="far fa-clock bg-gray"></i>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                          </div>
                        </div>
                      </form>
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
