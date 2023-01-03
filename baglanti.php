<?php

$host = "localhost";
$kullanici_adi = "root";
$password = "";
$veritabani = "rastgeleteknoloji";

$baglan = mysqli_connect($host, $kullanici_adi, $password, $veritabani);
mysqli_set_charset($baglan, 'UTF8');

if(!$baglan) {
    echo "Veritabanına bağlanamadı.";
} else {
    
}
