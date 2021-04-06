<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kayıt</title>
  <?php 
   include '_head.php';   
  ?> 
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
              <input name="username" type="text" class="form-control" placeholder="Usurname" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
           
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
            <div class="input-group mb-3">
              <input name="password2" type="password" class="form-control" placeholder="Password" required>
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
                <button type="submit" class="btn btn-primary btn-block" name="kayit">Kaydet</button>
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
    <?php
  require 'server.php';
  if(isset($_POST['kayit'])){
    $isim = $_POST['username'];
    $posta = $_POST['email'];
    $sifre = $_POST['password'];
    $sifredogrula = $_POST['password2'];
   
  
   }else if(!filter_var($posta, FILTER_VALIDATE_EMAIL)){
  
    exit();
  }
  else if($sifre !== $sifredogrula){
    header("Location: register.php?hata=sifrelereslesmedi");
    exit();
   
  }else{
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
    if($stmt === false) die("Bağlantı Hatası:".$conn->error);
    $kriptosifre = password_hash($sifre, PASSWORD_DEFAULT);
    $stmt->bind_param("sss", $isim, $posta, $kriptosifre);
    $stmt->execute();
    header("Location: register.php?kayit=basarali");
    exit();
    $stmt->close();
    $conn->close();
   
  }

  if(isset($_GET['kayit'])){
    if($_GET['kayit'] == "basarali"){
    echo "Kayıt Başarıyla Eklendi";
  }
  }
?>
  </body>
</html>
