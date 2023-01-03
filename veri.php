<?php include('baglanti.php') ?>

<?php

/* ------------------------------------Genel Grafik Verileri Başlangıç------------------------------------ */

/* Ürün */
$genelencoksatanbesurunsorgu = "CALL `genelencoksatanbesurun`()";
$genelencoksatanbesurunad = [];
$genelencoksatanbesurunadet = [];
$genelencoksatanbesurunfiyat = [];
if ($result = mysqli_query($baglan, $genelencoksatanbesurunsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genelencoksatanbesurunad, $row["urun_ad"]);
            array_push($genelencoksatanbesurunadet, $row["toplam_satis_Adet"]);
            array_push($genelencoksatanbesurunfiyat, $row["urun_fiyat"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kategori */
$genelencoksatanbeskategorisorgu = "CALL `genelencoksatanbeskategori`();";
$genelencoksatanbeskategoriad = [];
$genelencoksatanbeskategoriadet = [];
if ($result = mysqli_query($baglan, $genelencoksatanbeskategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genelencoksatanbeskategoriad, $row["kategori_ad"]);
            array_push($genelencoksatanbeskategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* Renk */
$genelencoksatanrenksorgu = "CALL `genelencoksatanrenkler`();";
$genelencoksatanbesrenkad = [];
$genelencoksatanbesrenkadet = [];
if ($result = mysqli_query($baglan, $genelencoksatanrenksorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genelencoksatanbesrenkad, $row["renk_ad"]);
            array_push($genelencoksatanbesrenkadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Genel Mağazalar renge göre en çok satan kategoriler dağılımı */
/* Beyaz Renk */
/* Beyaz ürünlerde en çok satan kategoriler */
$genelbeyazrenkkategorisorgu = "CALL `genelbeyazkategori`();";
$genelbeyazrenkkategoriad = [];
$genelbeyazrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $genelbeyazrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genelbeyazrenkkategoriad, $row["kategori_ad"]);
            array_push($genelbeyazrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
/* Siyah ürünlerde en çok satan kategoriler */
$genelsiyahrenkkategorisorgu = "CALL `genelsiyahkategori`();";
$genelsiyahrenkkategoriad = [];
$genelsiyahrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $genelsiyahrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genelsiyahrenkkategoriad, $row["kategori_ad"]);
            array_push($genelsiyahrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Gri Renk */
/* Gri ürünlerde en çok satan kategoriler */
$genelgrirenkkategorisorgu = "CALL `genelgrikategori`();";
$genelgrirenkkategoriad = [];
$genelgrirenkkategoriadet = [];
if ($result = mysqli_query($baglan, $genelgrirenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genelgrirenkkategoriad, $row["kategori_ad"]);
            array_push($genelgrirenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Lacivert Renk */
/* Lacivert ürünlerde en çok satan kategoriler */
$genellacivertrenkkategorisorgu = "CALL `genellacivertkategori`();";
$genellacivertrenkkategoriad = [];
$genellacivertrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $genellacivertrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($genellacivertrenkkategoriad, $row["kategori_ad"]);
            array_push($genellacivertrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* GENEL GRAFİK: 2021 ve 2022 satışlar verileri başlangıç*/
/* 2021 tüm mağaza satışlar */
$genel2021satislarsorgu = "CALL `genel2021satislar`()";
$genel2021satislar = [];

if ($result = mysqli_query($baglan, $genel2021satislarsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $genel2021satislar[] = $row['Ocak'];
            $genel2021satislar[] = $row['Subat'];
            $genel2021satislar[] = $row['Mart'];
            $genel2021satislar[] = $row['Nisan'];
            $genel2021satislar[] = $row['Mayis'];
            $genel2021satislar[] = $row['Haziran'];
            $genel2021satislar[] = $row['Temmuz'];
            $genel2021satislar[] = $row['Agustos'];
            $genel2021satislar[] = $row['Eylul'];
            $genel2021satislar[] = $row['Ekim'];
            $genel2021satislar[] = $row['Kasim'];
            $genel2021satislar[] = $row['Aralik'];

        }
    }
}
$genel2021satislartoplami = array_sum($genel2021satislar);
mysqli_free_result($result);
mysqli_next_result($baglan);
/* 2022 tüm mağaza satışlar */
$genel2022satislarsorgu = "CALL `genel2022satislar`()";
$genel2022satislar = [];

if ($result = mysqli_query($baglan, $genel2022satislarsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $genel2022satislar[] = $row['Ocak'];
            $genel2022satislar[] = $row['Subat'];
            $genel2022satislar[] = $row['Mart'];
            $genel2022satislar[] = $row['Nisan'];
            $genel2022satislar[] = $row['Mayis'];
            $genel2022satislar[] = $row['Haziran'];
            $genel2022satislar[] = $row['Temmuz'];
            $genel2022satislar[] = $row['Agustos'];
            $genel2022satislar[] = $row['Eylul'];
            $genel2022satislar[] = $row['Ekim'];
            $genel2022satislar[] = $row['Kasim'];
            $genel2022satislar[] = $row['Aralik'];

        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Genel Satışlar Değişimi 2021 den 2022'ye %lik */
$genel2022satislartoplami = array_sum($genel2022satislar);
$genelyuzde = round(($genel2022satislartoplami - $genel2021satislartoplami) / ($genel2021satislartoplami) * 100, 2);


/* GENEL GRAFİK: 2021 ve 2022 satışlar verileri bitiş*/

/* MAĞAZA KAMPANYALARI */
$kampanyalarsorgu = "SELECT * from kampanyalar";
$kampanyatip = [];
$kampanyatipaciklama = [];
$kampanyaindirim = [];
if ($result = mysqli_query($baglan, $kampanyalarsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kampanyatip, $row["kampanya_tip"]);
            array_push($kampanyatipaciklama, $row["kampanya_tip_aciklama"]);
            array_push($kampanyaindirim, $row["indirim_yuzde"]);
        }
    }
}



/* ------------------------------------ Genel Grafik Verileri Bitiş ------------------------------------*/

/* ------------------------------------Dashboard Sayılar Başlangıç------------------------------------ */
$personelsayisorgu = "SELECT COUNT(*) as personel_sayi from personeller";
$personelsayisi;
if ($result = mysqli_query($baglan, $personelsayisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $personelsayisi = $row['personel_sayi'];
        }
    }
}

$musterisayisorgu = "SELECT COUNT(*) as musteri_sayi from musteriler";
$musterisayisi;
if ($result = mysqli_query($baglan, $musterisayisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $musterisayisi = $row['musteri_sayi'];
        }
    }
}

$satilmisurunsayisisorgu = "SELECT SUM(siparisler.siparis_adet) as siparis_sayi from siparisler";
$satilmisurunsayisi;
if ($result = mysqli_query($baglan, $satilmisurunsayisisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $satilmisurunsayisi = $row['siparis_sayi'];
        }
    }
}

$markasayisorgu = "SELECT COUNT(*) as marka_sayi from markalar";
$markasayisi;
if ($result = mysqli_query($baglan, $markasayisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $markasayisi = $row['marka_sayi'];
        }
    }
}


$magazasorgu = "SELECT * FROM magaza";
$magazabilgisi = [];
if ($result = mysqli_query($baglan, $magazasorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $magazabilgisi[$row['id']] = $row['ad'];
        }
    }
}
$izmirid = array_search("Rastgele Teknoloji Konak Şubesi", array_values($magazabilgisi))+1 ;
$ankaraid = array_search("Rastgele Teknoloji Kızılay Şubesi", array_values($magazabilgisi))+1 ;
$bursaid = array_search("Rastgele Teknoloji Nilüfer Şubesi", array_values($magazabilgisi))+1 ;
$istanbulavrupaid = array_search("Rastgele Teknoloji Beşiktaş Şubesi", array_values($magazabilgisi))+1 ;
$istanbulasyaid = array_search("Rastgele Teknoloji Kadıköy Şubesi", array_values($magazabilgisi))+1 ;





$kategorisayisorgu = "SELECT COUNT(*) as kategori_sayi from kategoriler";
$kategorisayisi;
if ($result = mysqli_query($baglan, $kategorisayisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $kategorisayisi = $row['kategori_sayi'];
        }
    }
}

$urunsayisorgu = "SELECT COUNT(*) as urun_sayi from urunler";
$urunsayisi;
if ($result = mysqli_query($baglan, $urunsayisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $urunsayisi = $row['urun_sayi'];
        }
    }
}

$metrekaresorgu = "SELECT SUM(magaza.metrekare) as metrekare_sayi from magaza";
$metrekaresayisi;
if ($result = mysqli_query($baglan, $metrekaresorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $metrekaresayisi = $row['metrekare_sayi'];
        }
    }
}


$toplamsatislarsorgu = "SELECT SUM(siparis_detay.siparis_toplam) as toplam_satis FROM siparis_detay";
$toplamsatis;
if ($result = mysqli_query($baglan, $toplamsatislarsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $toplamsatis = $row['toplam_satis'];
        }
    }
}


/* ------------------------------------ Dashboard Sayılar Bitiş ------------------------------------ */

/* Kategoriler */
$kategorisorgu = "SELECT * from kategoriler";
$kategoriler = [];
if ($result = mysqli_query($baglan, $kategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kategoriler, $row['kategori_ad']);
        }
    }
}

$markasorgu = "SELECT * from markalar";
$markalar = [];
if ($result = mysqli_query($baglan, $markasorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($markalar, $row['marka_ad']);
        }
    }
}

$dolarsorgu = "SELECT * from doviz WHERE doviz_tur = 'Dolar'";
$dovizdeger = [];
if ($result = mysqli_query($baglan, $dolarsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $dovizdeger[] = $row['2021ort'];
            $dovizdeger[] = $row['2022ort'];
        }
    }
}

$kampanyasorgu = "SELECT * from kampanyalar";
$kampanyalar = [];
if ($result = mysqli_query($baglan, $kampanyasorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kampanyalar, $row['kampanya_tip_aciklama']);
        }
    }
}


/* --------------------------------- İZMİR BAŞLANGIÇ  ---------------------------------*/

/* İzmir 2021 Satışlar */
$izmir2021satislar = "SELECT * FROM satislar2021 WHERE satislar2021.magaza_id = 1;";
$izmir21satislar = [];

if ($result = mysqli_query($baglan, $izmir2021satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $izmir21satislar[] = $row['ocak'];
            $izmir21satislar[] = $row['subat'];
            $izmir21satislar[] = $row['mart'];
            $izmir21satislar[] = $row['nisan'];
            $izmir21satislar[] = $row['mayis'];
            $izmir21satislar[] = $row['haziran'];
            $izmir21satislar[] = $row['temmuz'];
            $izmir21satislar[] = $row['agustos'];
            $izmir21satislar[] = $row['eylul'];
            $izmir21satislar[] = $row['ekim'];
            $izmir21satislar[] = $row['kasim'];
            $izmir21satislar[] = $row['aralik'];

        }
    }
}
$izmir21satislartoplami = array_sum($izmir21satislar);
/* İzmir 22 satışlar */
$izmir2022satislar = "SELECT * FROM satislar2022 WHERE satislar2022.magaza_id = 1;";
$izmir22satislar = [];
if ($result = mysqli_query($baglan, $izmir2022satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $izmir22satislar[] = $row['ocak'];
            $izmir22satislar[] = $row['subat'];
            $izmir22satislar[] = $row['mart'];
            $izmir22satislar[] = $row['nisan'];
            $izmir22satislar[] = $row['mayis'];
            $izmir22satislar[] = $row['haziran'];
            $izmir22satislar[] = $row['temmuz'];
            $izmir22satislar[] = $row['agustos'];
            $izmir22satislar[] = $row['eylul'];
            $izmir22satislar[] = $row['ekim'];
            $izmir22satislar[] = $row['kasim'];
            $izmir22satislar[] = $row['aralik'];

        }
    }
}
$izmir22satislartoplami = array_sum($izmir22satislar);




/* İzmir Satış Değişim Yuzde */
$izmirsatisdegisim = "CALL `satisdegisim`('1');";
$izmiryuzde;
if ($result = mysqli_query($baglan, $izmirsatisdegisim)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $izmiryuzde = $row['Yuzde'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/*  */

/* İZMİR En çok satan beş ürün */
$izmirencoksatanbesurunsorgu = "CALL `encoksatanbesurun`($izmirid);";
$izmirencoksatanbesurunad = [];
$izmirencoksatanbesurunadet = [];
$izmirencoksatanbesurunfiyat = [];
if ($result = mysqli_query($baglan, $izmirencoksatanbesurunsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirencoksatanbesurunad, $row["urun_ad"]);
            array_push($izmirencoksatanbesurunadet, $row["toplam_satis_Adet"]);
            array_push($izmirencoksatanbesurunfiyat, $row["urun_fiyat"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* İZMİR En çok satan beş kategori */
$izmirencoksatanbeskategorisorgu = "CALL `encoksatanbeskategori`($izmirid);";
$izmirencoksatanbeskategoriad = [];
$izmirencoksatanbeskategoriadet = [];
if ($result = mysqli_query($baglan, $izmirencoksatanbeskategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirencoksatanbeskategoriad, $row["kategori_ad"]);
            array_push($izmirencoksatanbeskategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* İZMİR En çok satan renkler */
$izmirencoksatanrenksorgu = "CALL `encoksatanrenk`($izmirid);";
$izmirencoksatanrenkad = [];
$izmirencoksatanrenkadet = [];
if ($result = mysqli_query($baglan, $izmirencoksatanrenksorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirencoksatanrenkad, $row["renk_ad"]);
            array_push($izmirencoksatanrenkadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* İzmir Renge göre en çok satan kategoriler dağılımı */
/* Beyaz Renk */
$izmirbeyazrenkkategorisorgu = "CALL `beyazkategori`($izmirid);";
$izmirbeyazrenkkategoriad = [];
$izmirbeyazrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $izmirbeyazrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirbeyazrenkkategoriad, $row["kategori_ad"]);
            array_push($izmirbeyazrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$izmirsiyahrenkkategorisorgu = "CALL `siyahkategori`($izmirid);";
$izmirsiyahrenkkategoriad = [];
$izmirsiyahrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $izmirsiyahrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirsiyahrenkkategoriad, $row["kategori_ad"]);
            array_push($izmirsiyahrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Lacivert Renk */
$izmirlacivertrenkkategorisorgu = "CALL `lacivertkategori`($izmirid);";
$izmirlacivertrenkkategoriad = [];
$izmirlacivertrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $izmirlacivertrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirlacivertrenkkategoriad, $row["kategori_ad"]);
            array_push($izmirlacivertrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$izmirgrirenkkategorisorgu = "CALL `grikategori`($izmirid);";
$izmirgrirenkkategoriad = [];
$izmirgrirenkkategoriadet = [];
if ($result = mysqli_query($baglan, $izmirgrirenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($izmirgrirenkkategoriad, $row["kategori_ad"]);
            array_push($izmirgrirenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* --------------------------------- İZMİR BİTİŞ  ---------------------------------*/


/* --------------------------------- ANKARA BAŞLANGIÇ  ---------------------------------*/

/* Ankara 2021 Satışlar */
$ankara2021satislar = "SELECT * FROM satislar2021 WHERE satislar2021.magaza_id = '$ankaraid';";
$ankara21satislar = [];

if ($result = mysqli_query($baglan, $ankara2021satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ankara21satislar[] = $row['ocak'];
            $ankara21satislar[] = $row['subat'];
            $ankara21satislar[] = $row['mart'];
            $ankara21satislar[] = $row['nisan'];
            $ankara21satislar[] = $row['mayis'];
            $ankara21satislar[] = $row['haziran'];
            $ankara21satislar[] = $row['temmuz'];
            $ankara21satislar[] = $row['agustos'];
            $ankara21satislar[] = $row['eylul'];
            $ankara21satislar[] = $row['ekim'];
            $ankara21satislar[] = $row['kasim'];
            $ankara21satislar[] = $row['aralik'];

        }
    }
}
$ankara21satislartoplami = array_sum($ankara21satislar);
/* Ankara 22 satışlar */
$ankara2022satislar = "SELECT * FROM satislar2022 WHERE satislar2022.magaza_id = '$ankaraid';";
$ankara22satislar = [];
if ($result = mysqli_query($baglan, $ankara2022satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ankara22satislar[] = $row['ocak'];
            $ankara22satislar[] = $row['subat'];
            $ankara22satislar[] = $row['mart'];
            $ankara22satislar[] = $row['nisan'];
            $ankara22satislar[] = $row['mayis'];
            $ankara22satislar[] = $row['haziran'];
            $ankara22satislar[] = $row['temmuz'];
            $ankara22satislar[] = $row['agustos'];
            $ankara22satislar[] = $row['eylul'];
            $ankara22satislar[] = $row['ekim'];
            $ankara22satislar[] = $row['kasim'];
            $ankara22satislar[] = $row['aralik'];

        }
    }
}
$ankara22satislartoplami = array_sum($ankara22satislar);




/* Ankara Satış Değişim Yuzde */
$ankarasatisdegisim = "CALL `satisdegisim`($ankaraid);";
$ankarayuzde;
if ($result = mysqli_query($baglan, $ankarasatisdegisim)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ankarayuzde = $row['Yuzde'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/*  */

/* Ankara En çok satan beş ürün */
$ankaraencoksatanbesurunsorgu = "CALL `encoksatanbesurun`($ankaraid);";
$ankaraencoksatanbesurunad = [];
$ankaraencoksatanbesurunadet = [];
$ankaraencoksatanbesurunfiyat = [];
if ($result = mysqli_query($baglan, $ankaraencoksatanbesurunsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankaraencoksatanbesurunad, $row["urun_ad"]);
            array_push($ankaraencoksatanbesurunadet, $row["toplam_satis_Adet"]);
            array_push($ankaraencoksatanbesurunfiyat, $row["urun_fiyat"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* Ankara En çok satan beş kategori */
$ankaraencoksatanbeskategorisorgu = "CALL `encoksatanbeskategori`($ankaraid);";
$ankaraencoksatanbeskategoriad = [];
$ankaraencoksatanbeskategoriadet = [];
if ($result = mysqli_query($baglan, $ankaraencoksatanbeskategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankaraencoksatanbeskategoriad, $row["kategori_ad"]);
            array_push($ankaraencoksatanbeskategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Ankara En çok satan renkler */
$ankaraencoksatanrenksorgu = "CALL `encoksatanrenk`($ankaraid);";
$ankaraencoksatanrenkad = [];
$ankaraencoksatanrenkadet = [];
if ($result = mysqli_query($baglan, $ankaraencoksatanrenksorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankaraencoksatanrenkad, $row["renk_ad"]);
            array_push($ankaraencoksatanrenkadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Ankara Renge göre en çok satan kategoriler dağılımı */
/* Beyaz Renk */
$ankarabeyazrenkkategorisorgu = "CALL `beyazkategori`($ankaraid);";
$ankarabeyazrenkkategoriad = [];
$ankarabeyazrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $ankarabeyazrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankarabeyazrenkkategoriad, $row["kategori_ad"]);
            array_push($ankarabeyazrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$ankarasiyahrenkkategorisorgu = "CALL `siyahkategori`($ankaraid);";
$ankarasiyahrenkkategoriad = [];
$ankarasiyahrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $ankarasiyahrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankarasiyahrenkkategoriad, $row["kategori_ad"]);
            array_push($ankarasiyahrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Lacivert Renk */
$ankaralacivertrenkkategorisorgu = "CALL `lacivertkategori`($ankaraid);";
$ankaralacivertrenkkategoriad = [];
$ankaralacivertrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $ankaralacivertrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankaralacivertrenkkategoriad, $row["kategori_ad"]);
            array_push($ankaralacivertrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$ankaragrirenkkategorisorgu = "CALL `grikategori`($ankaraid);";
$ankaragrirenkkategoriad = [];
$ankaragrirenkkategoriadet = [];
if ($result = mysqli_query($baglan, $ankaragrirenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($ankaragrirenkkategoriad, $row["kategori_ad"]);
            array_push($ankaragrirenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* --------------------------------- ANKARA BİTİŞ  ---------------------------------*/

/* --------------------------------- BURSA BAŞLANGIÇ  ---------------------------------*/

/* BURSA 2021 Satışlar */
$bursa2021satislar = "SELECT * FROM satislar2021 WHERE satislar2021.magaza_id = '$bursaid';";
$bursa21satislar = [];

if ($result = mysqli_query($baglan, $ankara2021satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $bursa21satislar[] = $row['ocak'];
            $bursa21satislar[] = $row['subat'];
            $bursa21satislar[] = $row['mart'];
            $bursa21satislar[] = $row['nisan'];
            $bursa21satislar[] = $row['mayis'];
            $bursa21satislar[] = $row['haziran'];
            $bursa21satislar[] = $row['temmuz'];
            $bursa21satislar[] = $row['agustos'];
            $bursa21satislar[] = $row['eylul'];
            $bursa21satislar[] = $row['ekim'];
            $bursa21satislar[] = $row['kasim'];
            $bursa21satislar[] = $row['aralik'];

        }
    }
}
$bursa21satislartoplami = array_sum($bursa21satislar);
/* BURSA 22 satışlar */
$bursa2022satislar = "SELECT * FROM satislar2022 WHERE satislar2022.magaza_id = '$bursaid';";
$bursa22satislar = [];
if ($result = mysqli_query($baglan, $bursa2022satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $bursa22satislar[] = $row['ocak'];
            $bursa22satislar[] = $row['subat'];
            $bursa22satislar[] = $row['mart'];
            $bursa22satislar[] = $row['nisan'];
            $bursa22satislar[] = $row['mayis'];
            $bursa22satislar[] = $row['haziran'];
            $bursa22satislar[] = $row['temmuz'];
            $bursa22satislar[] = $row['agustos'];
            $bursa22satislar[] = $row['eylul'];
            $bursa22satislar[] = $row['ekim'];
            $bursa22satislar[] = $row['kasim'];
            $bursa22satislar[] = $row['aralik'];

        }
    }
}
$bursa22satislartoplami = array_sum($bursa22satislar);




/* BURSA Satış Değişim Yuzde */
$bursasatisdegisim = "CALL `satisdegisim`($bursaid);";
$bursayuzde;
if ($result = mysqli_query($baglan, $bursasatisdegisim)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $bursayuzde = $row['Yuzde'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/*  */

/* BURSA En çok satan beş ürün */
$bursasencoksatanbesurunsorgu = "CALL `encoksatanbesurun`($bursaid);";
$bursaencoksatanbesurunad = [];
$bursaencoksatanbesurunadet = [];
$bursaencoksatanbesurunfiyat = [];
if ($result = mysqli_query($baglan, $bursasencoksatanbesurunsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursaencoksatanbesurunad, $row["urun_ad"]);
            array_push($bursaencoksatanbesurunadet, $row["toplam_satis_Adet"]);
            array_push($bursaencoksatanbesurunfiyat, $row["urun_fiyat"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* BURSA En çok satan beş kategori */
$bursaencoksatanbeskategorisorgu = "CALL `encoksatanbeskategori`($bursaid);";
$bursaencoksatanbeskategoriad = [];
$bursaencoksatanbeskategoriadet = [];
if ($result = mysqli_query($baglan, $bursaencoksatanbeskategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursaencoksatanbeskategoriad, $row["kategori_ad"]);
            array_push($bursaencoksatanbeskategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* BURSA En çok satan renkler */
$bursaencoksatanrenksorgu = "CALL `encoksatanrenk`($bursaid);";
$bursaencoksatanrenkad = [];
$bursaencoksatanrenkadet = [];
if ($result = mysqli_query($baglan, $bursaencoksatanrenksorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursaencoksatanrenkad, $row["renk_ad"]);
            array_push($bursaencoksatanrenkadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* BURSA Renge göre en çok satan kategoriler dağılımı */
/* Beyaz Renk */
$bursabeyazrenkkategorisorgu = "CALL `beyazkategori`($bursaid);";
$bursabeyazrenkkategoriad = [];
$bursabeyazrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $bursabeyazrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursabeyazrenkkategoriad, $row["kategori_ad"]);
            array_push($bursabeyazrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$bursasiyahrenkkategorisorgu = "CALL `siyahkategori`($bursaid);";
$bursasiyahrenkkategoriad = [];
$bursasiyahrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $bursasiyahrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursasiyahrenkkategoriad, $row["kategori_ad"]);
            array_push($bursasiyahrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Lacivert Renk */
$bursalacivertrenkkategorisorgu = "CALL `lacivertkategori`($bursaid);";
$bursalacivertrenkkategoriad = [];
$bursalacivertrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $bursalacivertrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursalacivertrenkkategoriad, $row["kategori_ad"]);
            array_push($bursalacivertrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$bursagrirenkkategorisorgu = "CALL `grikategori`($bursaid);";
$bursagrirenkkategoriad = [];
$bursagrirenkkategoriadet = [];
if ($result = mysqli_query($baglan, $bursagrirenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($bursagrirenkkategoriad, $row["kategori_ad"]);
            array_push($bursagrirenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* --------------------------------- BURSA BİTİŞ  ---------------------------------*/

/* --------------------------------- ISTANBUL ASYA (KADIKOY) BAŞLANGIÇ  ---------------------------------*/

/* ISTANBUL ASYA (KADIKOY) 2021 Satışlar */
$kadikoy2021satislar = "SELECT * FROM satislar2021 WHERE satislar2021.magaza_id = '$istanbulasyaid';";
$kadikoy21satislar = [];

if ($result = mysqli_query($baglan, $kadikoy2021satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $kadikoy21satislar[] = $row['ocak'];
            $kadikoy21satislar[] = $row['subat'];
            $kadikoy21satislar[] = $row['mart'];
            $kadikoy21satislar[] = $row['nisan'];
            $kadikoy21satislar[] = $row['mayis'];
            $kadikoy21satislar[] = $row['haziran'];
            $kadikoy21satislar[] = $row['temmuz'];
            $kadikoy21satislar[] = $row['agustos'];
            $kadikoy21satislar[] = $row['eylul'];
            $kadikoy21satislar[] = $row['ekim'];
            $kadikoy21satislar[] = $row['kasim'];
            $kadikoy21satislar[] = $row['aralik'];

        }
    }
}
$kadikoy21satislartoplami = array_sum($kadikoy21satislar);
/* ISTANBUL ASYA (KADIKOY) 22 satışlar */
$kadikoy2022satislar = "SELECT * FROM satislar2022 WHERE satislar2022.magaza_id = '$istanbulasyaid';";
$kadikoy22satislar = [];
if ($result = mysqli_query($baglan, $kadikoy2022satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $kadikoy22satislar[] = $row['ocak'];
            $kadikoy22satislar[] = $row['subat'];
            $kadikoy22satislar[] = $row['mart'];
            $kadikoy22satislar[] = $row['nisan'];
            $kadikoy22satislar[] = $row['mayis'];
            $kadikoy22satislar[] = $row['haziran'];
            $kadikoy22satislar[] = $row['temmuz'];
            $kadikoy22satislar[] = $row['agustos'];
            $kadikoy22satislar[] = $row['eylul'];
            $kadikoy22satislar[] = $row['ekim'];
            $kadikoy22satislar[] = $row['kasim'];
            $kadikoy22satislar[] = $row['aralik'];

        }
    }
}
$kadikoy22satislartoplami = array_sum($kadikoy22satislar);




/* ISTANBUL ASYA (KADIKOY) Satış Değişim Yuzde */
$kadikoysatisdegisim = "CALL `satisdegisim`($istanbulasyaid);";
$kadikoyyuzde;
if ($result = mysqli_query($baglan, $kadikoysatisdegisim)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $kadikoyyuzde = $row['Yuzde'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/*  */

/* ISTANBUL ASYA (KADIKOY) En çok satan beş ürün */
$kadikoyencoksatanbesurunsorgu = "CALL `encoksatanbesurun`($istanbulasyaid);";
$kadikoyencoksatanbesurunad = [];
$kadikoyencoksatanbesurunadet = [];
$kadikoyencoksatanbesurunfiyat = [];
if ($result = mysqli_query($baglan, $kadikoyencoksatanbesurunsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoyencoksatanbesurunad, $row["urun_ad"]);
            array_push($kadikoyencoksatanbesurunadet, $row["toplam_satis_Adet"]);
            array_push($kadikoyencoksatanbesurunfiyat, $row["urun_fiyat"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* ISTANBUL ASYA (KADIKOY) En çok satan beş kategori */
$kadikoyencoksatanbeskategorisorgu = "CALL `encoksatanbeskategori`($istanbulasyaid);";
$kadikoyencoksatanbeskategoriad = [];
$kadikoyencoksatanbeskategoriadet = [];
if ($result = mysqli_query($baglan, $kadikoyencoksatanbeskategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoyencoksatanbeskategoriad, $row["kategori_ad"]);
            array_push($kadikoyencoksatanbeskategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* ISTANBUL ASYA (KADIKOY) En çok satan renkler */
$kadikoyencoksatanrenksorgu = "CALL `encoksatanrenk`($istanbulasyaid);";
$kadikoyencoksatanrenkad = [];
$kadikoyencoksatanrenkadet = [];
if ($result = mysqli_query($baglan, $kadikoyencoksatanrenksorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoyencoksatanrenkad, $row["renk_ad"]);
            array_push($kadikoyencoksatanrenkadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* ISTANBUL ASYA (KADIKOY) Renge göre en çok satan kategoriler dağılımı */
/* Beyaz Renk */
$kadikoybeyazrenkkategorisorgu = "CALL `beyazkategori`($istanbulasyaid);";
$kadikoybeyazrenkkategoriad = [];
$kadikoybeyazrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $kadikoybeyazrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoybeyazrenkkategoriad, $row["kategori_ad"]);
            array_push($kadikoybeyazrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$kadikoysiyahrenkkategorisorgu = "CALL `siyahkategori`($istanbulasyaid);";
$kadikoysiyahrenkkategoriad = [];
$kadikoysiyahrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $kadikoysiyahrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoysiyahrenkkategoriad, $row["kategori_ad"]);
            array_push($kadikoysiyahrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Lacivert Renk */
$kadikoylacivertrenkkategorisorgu = "CALL `lacivertkategori`($istanbulasyaid);";
$kadikoylacivertrenkkategoriad = [];
$kadikoylacivertrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $kadikoylacivertrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoylacivertrenkkategoriad, $row["kategori_ad"]);
            array_push($kadikoylacivertrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$kadikoygrirenkkategorisorgu = "CALL `grikategori`($istanbulasyaid);";
$kadikoygrirenkkategoriad = [];
$kadikoygrirenkkategoriadet = [];
if ($result = mysqli_query($baglan, $kadikoygrirenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($kadikoygrirenkkategoriad, $row["kategori_ad"]);
            array_push($kadikoygrirenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* --------------------------------- ISTANBUL ASYA (KADIKOY) BİTİŞ  ---------------------------------*/

/* --------------------------------- ISTANBUL AVRUPA (BESİKTAS) BAŞLANGIÇ  ---------------------------------*/

/* ISTANBUL ASYA (KADIKOY) 2021 Satışlar */
$besiktas2021satislar = "SELECT * FROM satislar2021 WHERE satislar2021.magaza_id = '$istanbulavrupaid';";
$besiktas21satislar = [];

if ($result = mysqli_query($baglan, $besiktas2021satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $besiktas21satislar[] = $row['ocak'];
            $besiktas21satislar[] = $row['subat'];
            $besiktas21satislar[] = $row['mart'];
            $besiktas21satislar[] = $row['nisan'];
            $besiktas21satislar[] = $row['mayis'];
            $besiktas21satislar[] = $row['haziran'];
            $besiktas21satislar[] = $row['temmuz'];
            $besiktas21satislar[] = $row['agustos'];
            $besiktas21satislar[] = $row['eylul'];
            $besiktas21satislar[] = $row['ekim'];
            $besiktas21satislar[] = $row['kasim'];
            $besiktas21satislar[] = $row['aralik'];

        }
    }
}
$besiktas21satislartoplami = array_sum($besiktas21satislar);
/* ISTANBUL ASYA (KADIKOY) 22 satışlar */
$besiktas2022satislar = "SELECT * FROM satislar2022 WHERE satislar2022.magaza_id = '$istanbulavrupaid';";
$besiktas22satislar = [];
if ($result = mysqli_query($baglan, $besiktas2022satislar)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $besiktas22satislar[] = $row['ocak'];
            $besiktas22satislar[] = $row['subat'];
            $besiktas22satislar[] = $row['mart'];
            $besiktas22satislar[] = $row['nisan'];
            $besiktas22satislar[] = $row['mayis'];
            $besiktas22satislar[] = $row['haziran'];
            $besiktas22satislar[] = $row['temmuz'];
            $besiktas22satislar[] = $row['agustos'];
            $besiktas22satislar[] = $row['eylul'];
            $besiktas22satislar[] = $row['ekim'];
            $besiktas22satislar[] = $row['kasim'];
            $besiktas22satislar[] = $row['aralik'];

        }
    }
}
$besiktas22satislartoplami = array_sum($besiktas22satislar);




/* ISTANBUL ASYA (KADIKOY) Satış Değişim Yuzde */
$besiktassatisdegisim = "CALL `satisdegisim`($istanbulavrupaid);";
$besiktasyuzde;
if ($result = mysqli_query($baglan, $besiktassatisdegisim)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $besiktasyuzde = $row['Yuzde'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/*  */

/* ISTANBUL ASYA (KADIKOY) En çok satan beş ürün */
$besiktasencoksatanbesurunsorgu = "CALL `encoksatanbesurun`($istanbulavrupaid);";
$besiktasencoksatanbesurunad = [];
$besiktasencoksatanbesurunadet = [];
$besiktasencoksatanbesurunfiyat = [];
if ($result = mysqli_query($baglan, $besiktasencoksatanbesurunsorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktasencoksatanbesurunad, $row["urun_ad"]);
            array_push($besiktasencoksatanbesurunadet, $row["toplam_satis_Adet"]);
            array_push($besiktasencoksatanbesurunfiyat, $row["urun_fiyat"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* ISTANBUL ASYA (KADIKOY) En çok satan beş kategori */
$besiktasencoksatanbeskategorisorgu = "CALL `encoksatanbeskategori`($istanbulavrupaid);";
$besiktasencoksatanbeskategoriad = [];
$besiktasencoksatanbeskategoriadet = [];
if ($result = mysqli_query($baglan, $besiktasencoksatanbeskategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktasencoksatanbeskategoriad, $row["kategori_ad"]);
            array_push($besiktasencoksatanbeskategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* ISTANBUL ASYA (KADIKOY) En çok satan renkler */
$besiktasencoksatanrenksorgu = "CALL `encoksatanrenk`($istanbulavrupaid);";
$besiktasencoksatanrenkad = [];
$besiktasencoksatanrenkadet = [];
if ($result = mysqli_query($baglan, $besiktasencoksatanrenksorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktasencoksatanrenkad, $row["renk_ad"]);
            array_push($besiktasencoksatanrenkadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* ISTANBUL ASYA (KADIKOY) Renge göre en çok satan kategoriler dağılımı */
/* Beyaz Renk */
$besiktasbeyazrenkkategorisorgu = "CALL `beyazkategori`($istanbulavrupaid);";
$besiktasbeyazrenkkategoriad = [];
$besiktasbeyazrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $besiktasbeyazrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktasbeyazrenkkategoriad, $row["kategori_ad"]);
            array_push($besiktasbeyazrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$besiktassiyahrenkkategorisorgu = "CALL `siyahkategori`($istanbulavrupaid);";
$besiktassiyahrenkkategoriad = [];
$besiktassiyahrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $besiktassiyahrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktassiyahrenkkategoriad, $row["kategori_ad"]);
            array_push($besiktassiyahrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Lacivert Renk */
$besiktaslacivertrenkkategorisorgu = "CALL `lacivertkategori`($istanbulavrupaid);";
$besiktaslacivertrenkkategoriad = [];
$besiktaslacivertrenkkategoriadet = [];
if ($result = mysqli_query($baglan, $besiktaslacivertrenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktaslacivertrenkkategoriad, $row["kategori_ad"]);
            array_push($besiktaslacivertrenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Siyah Renk */
$besiktasgrirenkkategorisorgu = "CALL `grikategori`($istanbulavrupaid);";
$besiktasgrirenkkategoriad = [];
$besiktasgrirenkkategoriadet = [];
if ($result = mysqli_query($baglan, $besiktasgrirenkkategorisorgu)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($besiktasgrirenkkategoriad, $row["kategori_ad"]);
            array_push($besiktasgrirenkkategoriadet, $row["toplam_satis_Adet"]);
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* --------------------------------- ISTANBUL AVRUPA (BESİKTAS) BİTİŞ  ---------------------------------*/

?>







































<!-- Öneri Merkezi -->
<?php
/* ===================== METRE KARE VERIMLILIGI ===================== */
$metrekare_verimlilikleri = [];
$calisan_basina_satislar = [];
$ortalama_islem_degerleri = [];
/* Konak Metre Kare Verimliliği */
$konakmkvquery = "CALL `metrekare_verimliligi`(1)";
$konakmkv;
if ($result = mysqli_query($baglan, $konakmkvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $metrekare_verimlilikleri['Konak'] = $row['metrekare_verimliligi'];
            $konakmkv = $row['metrekare_verimliligi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kızılay Metre Kare Verimliliği */
$kizilaymkvquery = "CALL `metrekare_verimliligi`(2)";
$kizilaymkv;
if ($result = mysqli_query($baglan, $kizilaymkvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $metrekare_verimlilikleri['Kızılay'] = $row['metrekare_verimliligi'];
            $kizilaymkv = $row['metrekare_verimliligi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kadıköy Metre Kare Verimliliği */
$kadikoymkvquery = "CALL `metrekare_verimliligi`(3)";
$kadikoymkv;
if ($result = mysqli_query($baglan, $kadikoymkvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $metrekare_verimlilikleri['Kadıköy'] = $row['metrekare_verimliligi'];
            $kadikoymkv = $row['metrekare_verimliligi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Nilüfer Metre Kare Verimliliği */
$nilufermkvquery = "CALL `metrekare_verimliligi`(4)";
$nilufermkv;
if ($result = mysqli_query($baglan, $nilufermkvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $metrekare_verimlilikleri['Nilüfer'] = $row['metrekare_verimliligi'];
            $nilufermkv = $row['metrekare_verimliligi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Beşiktaş Metre Kare Verimliliği */
$besiktasmkvquery = "CALL `metrekare_verimliligi`(5)";
$besiktasmkv;
if ($result = mysqli_query($baglan, $besiktasmkvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $metrekare_verimlilikleri['Beşiktaş'] = $row['metrekare_verimliligi'];
            $besiktasmkv = $row['metrekare_verimliligi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);


/* ===================== ortalama islem degeri ===================== */
/* Konak ortalama islem degeri */
$konakatvquery = "CALL `ortalama_islem_degeri_atv`(1)";
$konakatv;
if ($result = mysqli_query($baglan, $konakatvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ortalama_islem_degerleri['Konak'] = $row['Ortalama_Islem_Degeri'];
            $konakatv = $row['Ortalama_Islem_Degeri'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kızılay ortalama islem degeri */
$kizilayatvquery = "CALL `ortalama_islem_degeri_atv`(2)";
$kizilayatv;
if ($result = mysqli_query($baglan, $kizilayatvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ortalama_islem_degerleri['Kızılay'] = $row['Ortalama_Islem_Degeri'];
            $kizilayatv = $row['Ortalama_Islem_Degeri'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kadıköy ortalama islem degeri */
$kadikoyatvquery = "CALL `ortalama_islem_degeri_atv`(3)";
$kadikoyatv;
if ($result = mysqli_query($baglan, $kadikoyatvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ortalama_islem_degerleri['Kadıköy'] = $row['Ortalama_Islem_Degeri'];
            $kadikoyatv = $row['Ortalama_Islem_Degeri'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Nilüfer ortalama islem degeri */
$niluferatvquery = "CALL `ortalama_islem_degeri_atv`(4)";
$niluferatv;
if ($result = mysqli_query($baglan, $niluferatvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ortalama_islem_degerleri['Nilüfer'] = $row['Ortalama_Islem_Degeri'];
            $niluferatv = $row['Ortalama_Islem_Degeri'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Beşiktaş ortalama islem degeri */
$besiktasatvquery = "CALL `ortalama_islem_degeri_atv`(5)";
$besiktasatv;
if ($result = mysqli_query($baglan, $besiktasatvquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $ortalama_islem_degerleri['Beşiktaş'] = $row['Ortalama_Islem_Degeri'];
            $besiktasatv = $row['Ortalama_Islem_Degeri'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

/* ===================== çalışan başına satış ===================== */

/* Konak calısan basina satis */
$konakcbsquery = "CALL `calisan_basina_satis`(1)";
$konakcbs;
if ($result = mysqli_query($baglan, $konakcbsquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $calisan_basina_satislar['Konak'] = $row['Calisan_Basina_Satis'];
            $konakcbs = $row['Calisan_Basina_Satis'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kizilay calsian basina satis */
$kizilaycbsquery = "CALL `calisan_basina_satis`(2)";
$kizilaycbs;
if ($result = mysqli_query($baglan, $kizilaycbsquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $calisan_basina_satislar['Kızılay'] = $row['Calisan_Basina_Satis'];
            $kizilaycbs = $row['Calisan_Basina_Satis'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kadıköy calsian basina satis */
$kadikoycbsquery = "CALL `calisan_basina_satis`(3)";
$kadikoycbs;
if ($result = mysqli_query($baglan, $kadikoycbsquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $calisan_basina_satislar['Kadıköy'] = $row['Calisan_Basina_Satis'];
            $kadikoycbs = $row['Calisan_Basina_Satis'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Nilüfer calsian basina satis */
$nilufercbsquery = "CALL `calisan_basina_satis`(4)";
$nilufercbs;
if ($result = mysqli_query($baglan, $nilufercbsquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $calisan_basina_satislar['Nilüfer'] = $row['Calisan_Basina_Satis'];
            $nilufercbs = $row['Calisan_Basina_Satis'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* Kadıköy calsian basina satis */
$besiktascbsquery = "CALL `calisan_basina_satis`(5)";
$besiktascbs;
if ($result = mysqli_query($baglan, $besiktascbsquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $calisan_basina_satislar['Beşiktaş'] = $row['Calisan_Basina_Satis'];
            $besiktascbs = $row['Calisan_Basina_Satis'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);
/* ---------------------------------------------------------------- */

$personelsayilariquery = "CALL `genel_personel_sayilari`();";
$personelsayilariarray = array();
if ($result = mysqli_query($baglan, $personelsayilariquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $personelsayilariarray[$row['magaza_ad']] = $row['personel_sayisi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);

$siparisayilariquery = "CALL `genel_siparis_sayilari`();";
$siparissayilariarray = array();
if ($result = mysqli_query($baglan, $siparisayilariquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $siparissayilariarray[$row['magaza_ad']] = $row['siparis_sayisi'];
        }
    }
}
mysqli_free_result($result);
mysqli_next_result($baglan);


$magazametrekarequery = "SELECT SUBSTR(magaza.ad,20) as magaza_ad, magaza.metrekare FROM magaza;";
$magazametrekare_array = array();
if ($result = mysqli_query($baglan, $magazametrekarequery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $magazametrekare_array[$row['magaza_ad']] = $row['metrekare'];
        }
    }
}

$genelkategoriurunlerortquery = "CALL `genelkategoriurunler_fiyat_ortalamasi`();";
$genelkategoriurunlerort_array = array();
if ($result = mysqli_query($baglan, $genelkategoriurunlerortquery)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $genelkategoriurunlerort_array[$row['kategori_ad']] = $row['ortalama_urun_fiyati'];
        }
    }
}

$personelverimlilikdataset2 = [];
array_push($personelverimlilikdataset2, $personelsayilariarray['Nilüfer Şubesi']);
array_push($personelverimlilikdataset2, $personelsayilariarray['Beşiktaş Şubesi']);
array_push($personelverimlilikdataset2, $personelsayilariarray['Kızılay Şubesi']);
array_push($personelverimlilikdataset2, $personelsayilariarray['Kadıköy Şubesi']);
array_push($personelverimlilikdataset2, $personelsayilariarray['Konak Şubesi']);

$ortalamaislemdegeridataset2 = [];
array_push($ortalamaislemdegeridataset2, $siparissayilariarray['Nilüfer Şubesi']);
array_push($ortalamaislemdegeridataset2, $siparissayilariarray['Beşiktaş Şubesi']);
array_push($ortalamaislemdegeridataset2, $siparissayilariarray['Kızılay Şubesi']);
array_push($ortalamaislemdegeridataset2, $siparissayilariarray['Kadıköy Şubesi']);
array_push($ortalamaislemdegeridataset2, $siparissayilariarray['Konak Şubesi']);

$magazaverimlilikdataset2 = [];
array_push($magazaverimlilikdataset2, $magazametrekare_array['Kadıköy Şubesi']);
array_push($magazaverimlilikdataset2, $magazametrekare_array['Beşiktaş Şubesi']);
array_push($magazaverimlilikdataset2, $magazametrekare_array['Konak Şubesi']);
array_push($magazaverimlilikdataset2, $magazametrekare_array['Nilüfer Şubesi']);
array_push($magazaverimlilikdataset2, $magazametrekare_array['Kızılay Şubesi']);

$kategoriurunlerdataset2 = [];
array_push($kategoriurunlerdataset2, $genelkategoriurunlerort_array['Dizüstü Bilgisayar']);
array_push($kategoriurunlerdataset2, $genelkategoriurunlerort_array['Cep Telefonu']);
array_push($kategoriurunlerdataset2, $genelkategoriurunlerort_array['Klavye']);
array_push($kategoriurunlerdataset2, $genelkategoriurunlerort_array['Kulaklık']);
array_push($kategoriurunlerdataset2, $genelkategoriurunlerort_array['Mouse']);

/* Index sıfırdan başladıgı ıcın sırayı bulmak ıstedıgımızden dolayı +1 */
arsort($ortalama_islem_degerleri);
arsort($calisan_basina_satislar);
arsort($metrekare_verimlilikleri);

$konakatv_sira = array_search("Konak", array_keys($ortalama_islem_degerleri)) + 1;
$kizilayatv_sira = array_search("Kızılay", array_keys($ortalama_islem_degerleri)) + 1;
$kadikoyatv_sira = array_search("Kadıköy", array_keys($ortalama_islem_degerleri)) + 1;
$niluferatv_sira = array_search("Nilüfer", array_keys($ortalama_islem_degerleri)) + 1;
$besiktasatv_sira = array_search("Beşiktaş", array_keys($ortalama_islem_degerleri)) + 1;

$konakcbs_sira = array_search("Konak", array_keys($calisan_basina_satislar)) + 1;
$kizilaycbs_sira = array_search("Kızılay", array_keys($calisan_basina_satislar)) + 1;
$kadikoycbs_sira = array_search("Kadıköy", array_keys($calisan_basina_satislar)) + 1;
$nilufercbs_sira = array_search("Nilüfer", array_keys($calisan_basina_satislar)) + 1;
$besiktascbs_Sira = array_search("Beşiktaş", array_keys($calisan_basina_satislar)) + 1;

$konakmkv_sira = array_search("Konak", array_keys($metrekare_verimlilikleri)) + 1;
$kizilaymkv_sira = array_search("Kızılay", array_keys($metrekare_verimlilikleri)) + 1;
$kadikoymkv_sira = array_search("Kadıköy", array_keys($metrekare_verimlilikleri)) + 1;
$nilufermkv_sira = array_search("Nilüfer", array_keys($metrekare_verimlilikleri)) + 1;
$besiktasmkv_sira = array_search("Beşiktaş", array_keys($metrekare_verimlilikleri)) + 1;




?>