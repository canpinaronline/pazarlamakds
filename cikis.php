<?php 
 session_start();
 include('baglanti.php');

session_destroy();
header('Location: giris.php'); 

?>