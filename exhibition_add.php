<?php

//session ile kullanici login mi diye kontrol ediyorum
//eger login ise sayfaa giris yapabilsin
//degil ise bu class'in sonunda yazdigim gibi login sayfasina yonlendirilsin ve islemleri login olmadigi icin kabul edilmesin
session_start();

if ($_SESSION["Login"] == true) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sergi Oluştur</title>
        <?php include '_head.php';?> 
        <?php include '_navbar.php';?> 
    </head>

                <div class="content-wrapper">
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Sergi Oluştur</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active">Sergi Oluştur</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>

                    <form method="post" enctype="multipart/form-data">

                        <section class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-navy">

                                        <div class="card-header">
                                            <h3 class="card-title"></h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="inputName">Sergi İsmi</label>
                                                <input type="text" name="sergi_isim" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputDescription">Açıklama</label>
                                                <textarea name="aciklama" class="form-control" rows="4"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputStatus">İçerik</label>
                                                <select multiple name="icerik[]" class="form-control custom-select">
                                                    <option selected disabled>Seç</option>
                                                    <option value="ayna">Ayna</option>
                                                    <option value="biblo">Biblo</option>
                                                    <option value="ev eşyaları">Ev Eşyaları</option>
                                                    <option value="aksesuar">Aksesuar</option>
                                                    <option value="giyim">Giyim</option>
                                                    <option value="araç">Araç</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputClientCompany">Firma</label>
                                                <input type="text" name="firma_isim" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputClientCompany">Firma Sahibi</label>
                                                <input type="text" name="firma_sahip" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card card-pink">

                                        <div class="card-header">
                                            <h3 class="card-title"></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="inputEstimatedBudget">Bütçe</label>
                                                <input type="number" name="butce" p class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Tarih:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control float-right" name="tarih">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Saat</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input type="time" class="form-control float-right" name="saat">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Seçilenler</label>
                                                <article id="" class="form-control">
                                                </article>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFile">Sergi Görseli</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="dosya">
                                                        <label class="custom-file-label" for="exampleInputFile">Seç</label>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <a href="" class="btn btn-secondary">İptal</a>
                                    <input type="submit" name="olustur" value="Oluştur" class="btn btn-success float-right">
                                </div>
                            </div>

                        </section>

                    </form>

                    <?php

                    error_reporting(0);
                    include("server.php");

                    if (isset($_POST['olustur'])) {
                        $sergi_ad = $_POST['sergi_isim'];
                        $sergi_aciklama = $_POST['aciklama'];
                        $sergi_icerik = $_POST['icerik'];
                        $sergi_firma = $_POST['firma_isim'];
                        $sergi_sahip = $_POST['firma_sahip'];
                        $sergi_butce = $_POST['butce'];
                        $sergi_tarih = $_POST['tarih'];
                        $sergi_saat = $_POST['saat'];

                        $resim = $_FILES['dosya']['tmp_name'];
                        $yukresim = file_get_contents($_FILES['dosya']['tmp_name']);
                        $resim_isim = addslashes($_FILES['dosya']['name']);
                        $resim_boyutu = getimagesize($_FILES['dosya']['tmp_name']);

                        mysqli_query($conn, "INSERT INTO sergi (sergi, aciklama, icerik, firma, sahip, butce, tarih, saat, resim_isim, resim) VALUES ('$sergi_ad', '$sergi_aciklama', '$sergi_icerik', '$sergi_firma', '$sergi_sahip', '$sergi_butce', '$sergi_tarih', '$sergi_saat', '$resim_isim', '$resim_boyutu')");

                        $kayit = mysqli_query($conn, "select * from sergi");
                    }


                    ?>
                </div>

                <footer class="main-footer">
                    <div class="float-right d-none d-sm-block">
                    </div>
                    <strong>Copyright &copy; 2014-2020 <a href="">Amit Antika Mağazası</a>.</strong> Tüm Hakları Saklıdır
                </footer>

                <aside class="control-sidebar control-sidebar-dark">
                </aside>
            </div>

        </form>
       

    </body>

    </html>

<?php
    //login olmayan kullanici
} else {
    header("location:login.php");
}
?>