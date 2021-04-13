<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Şifremi Unuttum</title>
    <?php include '_head.php';?> 
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                <a href="" class="h1"><b>AMİT </b>ANTİKA</a>
                </div>
                <div class="card-body">
                <p class="login-box-msg">Şifrenizi Unuttuysanız Buradan Yeni Bir Şifre Alabilirsiniz.</p>
                <form action="recover_password.php" method="post">
                    <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Yeni Bir Şifre Al</button>
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
