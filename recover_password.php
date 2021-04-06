
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Şifre Kurtarma</title>
  <?php include '_head.php';?> 

</head>
    <body class="hold-transition login-page">
        <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="" class="h1"><b>AMİT </b>ANTİKA</a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Şifrenizi Kurtarın</p>
            <form action="login.php" method="post">
                <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Confirm Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Şifre Değiştir</button>
                </div>
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="login.php">Login</a>
            </p>
            </div>
        </div>
        </div>
     
    </body>
</html>
