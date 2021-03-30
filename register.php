<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kayıt</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>

  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="" class="h1"><b>AMİT </b>ANTİKA</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Yeni Bir Üyelik Oluşturun</p>

          <form action="login.php" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Full name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                  <a href=""> Şartları </a>Kabul ediyorum 
                  </label>
                </div>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
              </div>
            </div>
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

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
  </body>
</html>
