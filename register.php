<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kayıt</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">

  <form method="post">

    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="" class="h1"><b>AMİT </b>ANTİKA</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Yeni Bir Üyelik Oluşturun</p>

          <form method="post">

            <div class="input-group mb-3">
              <input type="text" required class="form-control" placeholder="İsim/Mağaza İsmi" name="name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" required class="form-control" placeholder="Soyisim/Yetkili ismi" name="surname">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="email" required class="form-control" placeholder="Email" name="mail">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" required class="form-control" placeholder="Telefon" name="phone">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-calendar-alt"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" required class="form-control" placeholder="Adres" name="adress">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="password" required class="form-control" placeholder="Şifre" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="tur" value="agree">
                  <label for="agreeTerms">
                    <a href=""> Mağaza </a>Olarak Kaydol
                  </label>
                </div>
              </div>

              <div class="col-4">
                <input type="submit" class="btn btn-primary btn-block" name="okay" value="kaydet">
              </div>

            </div>

            <?php

            //server class'imizi cagirdik
            //baglantiyi kurduk
            include("server.php");

            //veriler girilip butona basildiginin kontrolü
            if ($_POST['okay']) {

              //texterden alinan veriler degskenlere atadi
              $isim = $_POST['name'];
              $soyisim = $_POST['surname'];
              $email = $_POST['mail'];
              $tel = $_POST['phone'];
              $adres = $_POST['adress'];
              $sifre = $_POST['password'];
              $kayit_tur = $_POST['tur'];
              

              //veritabanina ekleme islemi

              if($_POST['tur']){
                //magaza olanlar id = 3
                $kayit_tur = 3;
                mysqli_query($conn, "INSERT INTO magaza (magazaismi, adres, telefon, sifre) VALUES ('$isim', '$adres', '$tel', '$sifre')");
                mysqli_query($conn, "INSERT INTO user (name, surname, mail, number, adress, password, tur_id) VALUES ('$isim', '$soyisim', '$email', '$tel', '$adres', '$sifre', '$kayit_tur')");
  
                }
              else{
                $kayit_tur = 4;
                mysqli_query($conn, "INSERT INTO user (name, surname, mail, number, adress, password, tur_id) VALUES ('$isim', '$soyisim', '$email', '$tel', '$adres', '$sifre', '$kayit_tur')");
  
                $kayit = mysqli_query($conn, "select * from user");  
              }
               
              header("location:login.php");
            }

            ?>

          </form>

          <div class="social-auth-links text-center">
            <a href="" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i>
              Facebook hesabı kullanarak kayıt ol
            </a>
            <a href="" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i>
              Google hesabı kullanarak kayıt ol
            </a>
          </div>

          <a href="login.php" class="text-center">Zaten Üyeliğim Var</a>
        </div>
      </div>
    </div>

    <?php

    ?>

  </form>

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>