<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sergi Düzenle</title>
    <?php include '_head.php';?> 
    <?php include '_navbar.php';?> 
    <?php require_once 'server.php';


      $listesor=$db->prepare("SELECT * FROM sergi where id=:id");
      $listesor->execute(array(
	   'id' => $_GET['id']
));
    $listecek=$listesor->fetch(PDO::FETCH_ASSOC);

?>
</head>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Sergi Düzenle</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home_page.php">Anasayfa</a></li>
                                <li class="breadcrumb-item active">Sergi Düzenle</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Düzenle</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <form class="form" action="exhibition_edit.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Sergi İsmi</label>
                                    <input type="text" id="inputName" class="form-control" name="sergi" value="<?php echo $listecek['sergi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Açıklama</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"  name="aciklama" value="<?php echo $listecek['aciklama'] ?>"></textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label for="inputClientCompany">Firma</label>
                                    <input type="text" id="inputClientCompany" class="form-control"  name="firma" value="<?php echo $listecek['firma'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Firma Sahibi</label>
                                    <input type="text" id="inputClientCompany" class="form-control"  name="sahip" value="<?php echo $listecek['sahip'] ?>">
                                </div>
                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                <div class="row">
                                   <div class="col-12">
                                   <button class="button" name="duzenle">UPDATE</button>
                            </div>
                         </div>
                             </div>
                      </form>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Kayıtlı Sergiler</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table">
                                
                                <thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Sergi</th>
					<th scope="col">Aciklama</th>
					<th scope="col">Firma</th>
                    <th scope="col">Sahip</th>
					<th scope="col"></th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>

				<?php 
				$say=0;
				$listesor=$db->prepare("SELECT * FROM sergi order by id DESC");
				$listesor->execute();
				while ($listecek=$listesor->fetch(PDO::FETCH_ASSOC)) {$say++; ?>

					<tr>
						<th scope="row"><?php echo $say; ?></th>
						<td><?php echo strtoupper($listecek['sergi']) ?></td>
						<td><?php echo strtoupper($listecek['aciklama']) ?></td>
						<td><?php echo strtoupper($listecek['firma']) ?></td>
						<td><?php echo strtoupper($listecek['sahip']) ?></td>
						<td><a type="button" class="btn btn-success btn-xs" href="exhibition_edit.php?id=<?php echo $listecek['id'] ?>">Düzenle</a></td>
						<td><a type="button" class="btn btn-danger btn-xs" href="exhibition_edit.php?id=<?php echo $listecek['id'] ?>&liste=sil">Sil</a></td>
					</tr>

				<?php } ?>


			</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
            </section>
        </div>
        <?php 
          if (isset($_POST['duzenle'])) {

            $duzenle=$db->prepare("UPDATE sergi SET
        
                sergi=:sergi,
                aciklama=:aciklama,
                firma=:firma,
                sahip=:sahip
                WHERE id={$_POST['id']}");
        
            $update=$duzenle->execute(array(
        
                'sergi' => $_POST['sergi'],
                'aciklama' => $_POST['aciklama'],
                'firma' => $_POST['firma'],
                'sahip' => $_POST['sahip']
            ));
        
                if ($update) {
        
                header("Location:exhibition_edit.php?ok");
        
            } else {
        
                header("Location:exhibition_edit.php?no");
            }
        
        }

        if ($_GET['liste']=="sil") {
	
            $sil=$db->prepare("DELETE from sergi where id=:id");
            $kontrol=$sil->execute(array(
                'id' => $_GET['id']
            ));
        
            if ($kontrol) {
        
                Header("Location:exhibition_edit.php?durum=ok");
        
            } else {
        
                Header("Location:exhibition_edit.php?durum=no");
            }
        
        }
        
        ?>
</form>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="">Amit Antika Mağazası</a>.</strong> Tüm Hakları Saklıdır
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>


</body>

</html>