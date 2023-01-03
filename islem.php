<?php
session_start();
include('baglanti.php');
include('veri.php');
?>

<?php
if (isset($_POST['kampanyaekle'])) {

    $kampanya_tip = $_POST['kampanyatip'];
    $kampanya_adi = $_POST['kampanyaadi'];
    $kampanya_indirim = $_POST['indirimyuzde'];

 
    $test = mysqli_connect('localhost', 'root', '', 'rastgeleteknoloji');
    mysqli_set_charset($test, 'UTF8');
    $eklesorgu = "INSERT INTO kampanyalar(kampanya_tip, kampanya_tip_aciklama, indirim_yuzde) VALUES('$kampanya_tip', '$kampanya_adi', '$kampanya_indirim')";
    /* ON DUPLICATE KEY UPDATE kampanya_tip='$kampanya_tip', kampanya_tip_aciklama='$kampanya_adi', indirim_yuzde='$kampanya_indirim' */
    

    if (mysqli_query($test, $eklesorgu)) {
        $_SESSION['kampanyabilgi'] = "Kampanya ekleme işlemi başarılı.";
        $_SESSION['statu'] = "1";
        header("Location: kampanyalar.php");
        exit(0);
    } else {
        $_SESSION['kampanyabilgi'] = "Kampanya ekleme işlemi başarısız.";
        $_SESSION['statu'] = "0";
        header("Location: kampanyalar.php");
        exit(0);


    }
    
}
?>
<?php 
if (isset($_POST['kampanyasil'])) {

    $silinecekKampanya = $_POST['kampanyaOption'];

    $sx = mysqli_connect('localhost', 'root', '', 'rastgeleteknoloji');
    mysqli_set_charset($sx, 'UTF8');
    $kampanyaSilSorgu = "DELETE FROM kampanyalar WHERE kampanya_tip_aciklama='$silinecekKampanya'";


    if (mysqli_query($sx, $kampanyaSilSorgu)) {
        $_SESSION['kampanyabilgi'] = "Kampanya silme işlemi başarılı.";
        $_SESSION['statu'] = "1";
        header("Location: kampanyalar.php");
        exit(0);
    } else {
        $_SESSION['kampanyabilgi'] = "Kampanya silme işlemi başarısız.";
        $_SESSION['statu'] = "0";
        header("Location: kampanyalar.php");
        exit(0);


    }

}
?>

<?php
if (isset($_POST['analizet'])) {
    $analizEdilenMagazaAd = $_POST['analizOption'];
    /* Mağaza ID ve Mağaza Adlarının Bulunduğu associative array*/
    $magazaQuery = mysqli_query($baglan,"SELECT * FROM magaza WHERE magaza.ad ='$analizEdilenMagazaAd'");
    $analizEdilenMagazaId;
    while($row = mysqli_fetch_array($magazaQuery)) {
        $analizEdilenMagazaId = $row['id'];
    }

    /* Çalışan Başına Satış */
    $calisan_basina_satis_Query = "CALL `calisan_basina_satis`($analizEdilenMagazaId)";
    $cbs;
    if($result = mysqli_query($baglan,$calisan_basina_satis_Query)) {
        if(mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_array($result)) {
                $cbs = $row['Calisan_Basina_Satis'];
            }
        } 
    }
    mysqli_free_result($result);  
    mysqli_next_result($baglan);  
    /* Metre Kare Verimliliği */
    $metre_kare_verimlilik_Query = "CALL `metrekare_verimliligi`($analizEdilenMagazaId)";
    $mkv;
    if($result = mysqli_query($baglan,$metre_kare_verimlilik_Query)) {
        if(mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_array($result)) {
                $mkv = $row['metrekare_verimliligi'];
            }
        } 
    }
    mysqli_free_result($result);  
    mysqli_next_result($baglan);
    /* Ortalama İşlem Değeri - ATV */
    $ortalama_islem_degeri_Query = "CALL `ortalama_islem_degeri_atv`($analizEdilenMagazaId)";
    $oid;
    if($result = mysqli_query($baglan,$ortalama_islem_degeri_Query)) {
        if(mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_array($result)) {
                $oid = $row['Ortalama_Islem_Degeri'];
            }
        } 
    }
    mysqli_free_result($result);  
    mysqli_next_result($baglan);

    
    
    
    

    header('Location: onerimerkezi.php');
}
?>