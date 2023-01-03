<?php
include('baglanti.php');
include('veri.php');?>

<?php
rsort($metrekare_verimlilikleri);
print_r($metrekare_verimlilikleri);
$test = array_search("57865", $metrekare_verimlilikleri);
echo $test;