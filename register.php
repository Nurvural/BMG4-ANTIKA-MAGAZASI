<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kayıt</title>
  <?php include '_head.php';?> 
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
              <input type="text" class="form-control" placeholder="İsim" name="name" required> 
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Soyisim" name="surname" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="mail" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Telefon" name="phone" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-calendar-alt"></span>
                </div>
              </div>
            </div>
          
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Şifre" name="password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                  <label for="agreeTerms">
                    <a href=""> Şartları </a>Kabul ediyorum
                  </label>
                </div>
              </div>
              <div class="col-4">
                <input type="submit" class="btn btn-primary btn-block" name="okay" value="kaydet">
              </div>
            </div>

            <?php

            error_reporting(0);
            include("server.php");

            if ($_POST['okay']) {

              $isim = $_POST['name'];
              $soyisim = $_POST['surname'];
              $email = $_POST['mail'];
              $tel = $_POST['phone'];
              $sifre = $_POST['password'];

              mysqli_query($conn, "INSERT INTO users (name, surname, mail, number, password) VALUES ('$isim', '$soyisim', '$email', '$tel', '$sifre')");

              $kayit = mysqli_query($conn, "select * from users");

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

    

  </form>

</body>

</html>