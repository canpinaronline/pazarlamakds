<?php
session_start();
include('baglanti.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>R. Teknoloji - Giriş</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="giris.php" class="logo d-flex align-items-center w-auto">
                <span class="d-none d-lg-block"><span style="color:#9C254D;">Rastgele</span>
                    Teknoloji</span>
                </a>
              </div><!-- End Logo -->
              <?php
                
                if (isset($_POST['giris'])) {
                    
                    if (!empty($_POST['kid']) && !empty($_POST['sif'])) {
                        $kullanici = ($_POST['kid']);
                        $sifre = ($_POST['sif']);
                        $kullaniciara = "SELECT * FROM uye WHERE uye.kullanici_adi='$kullanici'";
                        if($result = mysqli_query($baglan,$kullaniciara)) {
                            if(mysqli_num_rows($result) > 0) {
                                while($row=mysqli_fetch_array($result)) {
                                        if(password_verify($sifre,$row['sifre'])) {
                                            $_SESSION['kullanici_adi'] = $row['kullanici_adi'];
                                            $_SESSION['statu'] = "Giriş Yapıldı";
                                            header('Location: index.php'); 
                                        }
                                        
    
                                        
                                }
                            } else {
                                echo "<div class='text-center text-dark alert alert-danger'>"."Kullanıcı adı veya şifre yanlış."."</div>";
                            }
                            
                        } 
                        
                        
                    } else {
                        echo "<div class='text-center text-dark alert alert-danger'>"."Kullanıcı adı ve şifre giriniz."."</div>"; 
                    }
                        
                        
                }
    
    
                ?>
    

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Giriş Yap</h5>
                  
                  </div>

                  <!-- <form method="post" action="<?php /* echo $_SERVER['PHP_SELF']; */ ?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" required name="kid" id="kullaniciadi" type="text"
                            placeholder="Kullanıcı Adı" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" required name="sif" id="sifre" type="password" placeholder="Şifre">
                    </div>

                    <button type="submit" name='giris' class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
                </form> -->
                <form class="row g-3 needs-validation" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Kullanıcı Adı</label>
                      <div class="input-group has-validation">
                        
                        <input class="form-control form-control-lg" required name="kid" id="kullaniciadi" type="text"
                            placeholder="Kullanıcı Adı" autocomplete="off">
                        <div class="invalid-feedback">Kullanıcı adınızı girin.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input class="form-control form-control-lg" required name="sif" id="sifre" type="password" placeholder="Şifre">
                      <div class="invalid-feedback">Şifrenizi girin.</div>
                    </div>

          
                    <div class="col-12">
                    <button type="submit" name='giris' class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
                    </div>

                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>