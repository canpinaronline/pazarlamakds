<?php 
include('baglanti.php');
 ?>
<div class="dashboard-wrapper"><!-- silme -->
    <div class="container-fluid dashboard-content"><!-- silme -->
    
    <?php 

        if($_POST) {
            if(!empty($_POST['kid']) &&	!empty($_POST['sif'])) {
            $kullanici = ($_POST['kid']);
            $sifre = password_hash(($_POST['sif']), PASSWORD_DEFAULT);
            //$kullaniciara = "SELECT * FROM uye WHERE uye.kullanici_adi='$kullanici' AND uye.sifre='$sifre'";
            $kaydet = "insert into uye(kullanici_adi, sifre) 
            values('$kullanici', '$sifre')";
            mysqli_query($baglan, $kaydet);
            
            }
        }
    
    ?>
    

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div class="form-group">
                        <input class="form-control form-control-lg" name="kid" id="kullaniciadi" type="text" placeholder="Kullanıcı Adı" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="sif" id="sifre" type="password" placeholder="Şifre">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Kayıt Yap</button>
                </form>






    
    </div><!-- silme -->
</div> <!-- silme -->
