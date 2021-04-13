<?php

session_start();
include("server.php");

if (@$_SESSION["Login"] == true) {
  header("location:home_page.php");
} else {


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>login</title>
    <?php include '_head.php';?>
  </head>

  <body class="hold-transition login-page">

    <form method="POST">
      <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="" class="h1"><b>AMİT </b>ANTİKA</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Oturum Açın</p>

            <form method="post">
              <div class="input-group mb-3">
                <input type="email" required class="form-control" placeholder="Email" name="mail" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" required class="form-control" placeholder="Password" name="password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Beni Hatırla
                    </label>
                  </div>
                </div>
                <div class="col-4">
                  <input type="submit" class="btn btn-primary btn-block" name="giris" value="Giriş">
                </div>
              </div>
            </form>

            <div class="social-auth-links text-center mt-2 mb-3">
              <a href="" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Facebook İle Giriş Yap
              </a>
              <a href="" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Google İle Giriş Yap
              </a>
            </div>

            <p class="mb-1">
              <a href="forgot_password.php">Şifremi Unuttum</a>
            </p>
            <p class="mb-0">
              <a href="register.php" class="text-center">Kayıt Ol</a>
            </p>
          </div>
        </div>
      </div>

      <?php

      include("server.php");

      if (isset($_POST["giris"])) {

        if (!empty($_POST["mail"] and !empty($_POST["password"]))) {

          $email = strip_tags($_POST["mail"]);
          $sifre = strip_tags($_POST["password"]);

          $userTablo = mysqli_query($conn, "select * from users where mail='$email'");
          $userDizi = mysqli_fetch_array($userTablo);

          if ($sifre == $userDizi["password"]) {
            $_SESSION["Login"] = true;
            $_SESSION["iUserMail"] = $userDizi["mail"];
            $_SESSION["iUserYetki"] = $userDizi["yetiki_id"];

            header("location:home_page.php");
          } else {
            echo "Şifre ve E-mail yanlış.";
          }
        } else {
          echo "Şifre ve E-mail yanlış.";
        }
      }

      ?>

    </form>
    
  </body>

  </html>

<?php

}

?>