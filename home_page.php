<?php

    session_start();

    if($_SESSION["Login"]==true){
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Anasayfa</title>
    <?php include '_head.php';?> 
    <?php include '_navbar.php';?> 
</head>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Anasayfa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                <li class="breadcrumb-item active">Anasayfa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Anasayfa</h3>
                                </div>
                                <div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header"></div>
                                            <div class="card-body">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <!-- resimlere id verilmis -->
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="dist/img/antika1.jpg" alt="Photo 1" class="img-fluid">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="dist/img/antika6.jpg" alt="Photo 1" class="img-fluid">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="dist/img/antika9.jpg" alt="Photo 1" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <!-- onceki id'ye doner her pasidiginda -->
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <!-- sonraki id'ye gider her pasidiginda -->
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- döngü olarak vt'den mağazalar yazdırılacak -->
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika2.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika3.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika5.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antik.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika8.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika12.jpg" alt="Photo 1" class="img-fluid">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-4">
                                                <div class="jumbotron text-center" style="margin-bottom:0">
                                                    <div class="position-relative">
                                                        <img src="dist/img/antika4.jpg" alt="Photo 1" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika7.jpg" alt="Photo 2" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative" style="min-height: 180px;">
                                                    <div class="jumbotron text-center" style="margin-bottom:0">
                                                        <img src="dist/img/antika11.jpg" alt="Photo 3" class="img-fluid">
                                                    </div>
                                                </div>
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
t>

</body>

</html>

<?php
    }
    else{
        header("location:login.php");
    }
?>