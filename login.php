<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>login</title>
  <?php include '_head.php';?> 
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>AMİT </b>ANTİKA</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Oturum Açın</p>

      <form action="home_page.php" method="post">
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password" required>
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
            <button type="submit" class="btn btn-primary btn-block" name="giris">Giriş</button>
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



</body>
</html>
