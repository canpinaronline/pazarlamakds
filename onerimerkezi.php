<?php include('header.php');
include('sidebar.php');
include('baglanti.php');
include('veri.php');?>



<main id="main" class="main">

<div class="pagetitle">
  <h1>Öneri Merkezi</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <!-- <div class="card">
        <div class="card-body">
            <h5 class="text-center text-dark card-title">Mağaza Seç</h5>
            <form method="POST" action="islem.php">
              <div class="form-group">

                <?php

                /* echo "<select class='form-control' name='analizOption' id='input-select'>";
                foreach ($magazabilgisi as $magazaId => $magazaAd) {

                  echo "<option value='$magazaAd'>$magazaAd</option>";
                }

                echo "</select>"; */
                ?>
              </div>


              <div class="form-group text-center">

                <button id="analizet" class="mt-2 btn btn-danger btn-block" name="analizet" type="submit">Analiz Et</button>

              </div>
            </form>
          </div>
      </div> -->

    </div>

  </div>

  <div id="row1" class="row">
  <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Ortalama İşlem Değeri</h5>
              <canvas id="ortalamaislemdegeri"></canvas>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Tavsiyeler</h5>
              <p class="text-center text-dark">Ortalama İşlem Değeri = Net Satışlar/Toplam İşlem Sayısı</p>
              <hr>
              <?php
              $sira = 1;
              foreach($ortalama_islem_degerleri as $ilce => $ilcedeger) {
                if($sira >3) {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazası ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-dark rounded-pill bg-warning'>Yüksek fiyatlı ürün satışlarının
                  arttırılması tavsiye edilmektedir.</span>"."</p>";
                } elseif($sira <= 2 ) {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazası ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-success'>Ortalama üstü.</span>"."</p>";
                } 
                else {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazasının ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-secondary'>Nötr</span>"."</p>";
                }
                
                $sira++;
              }
              ?>
            </div>
          </div>
        </div>
  </div><!-- Row Bitiş -->
  <hr>
  <div class="row"> <!-- 2. Row başlangıç -->
  <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Personel Başına Satış</h5>
              <canvas id="personelbasinasatis"></canvas>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Gösterge</h5>
              <p class="text-center text-dark">Personel Başına Satış = Net Satışlar/Personel Sayısı</p>
              <hr>
              <?php
              $sira = 1;
              foreach($calisan_basina_satislar as $ilce => $ilcedeger) {
                if($sira >3) {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>" . "$ilce mağazası ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-danger'>Ortalama Altı</span>" . "</p>";
                  
                } elseif($sira <= 2 ) {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazası ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-success'>Ortalama üstü.</span>"."</p>";
                } 
                else {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazasının ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-secondary'>Nötr</span>"."</p>";
                }
                
                $sira++;
                
                
              }
              echo "<hr>";
              echo "<div class='alert alert-info alert-dismissible fade show'>";
              echo "<p>Personel Sayıları</p>";
              foreach($personelsayilariarray as $ilce => $deger) {
                echo "<p class='d-inline'>".$ilce . " " . $deger."</p> |";
              }
              echo "</div>";
              ?>
            </div>
          </div>
        </div>
  </div><!-- 2. Row Bitiş -->
  <hr>
  <div id="row1" class="row">
  <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Metrekare Verimliliği</h5>
              <canvas id="metrekareverimlilik"></canvas>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Tavsiyeler</h5>
              <p class="text-center text-dark">Metrekare Verimliliği = Net Satışlar / Metrekare</p>
              <hr>
              <?php
              
             
              $sira = 1;
              foreach($metrekare_verimlilikleri as $ilce => $ilcedeger) {
                if($sira >2) {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazası ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-dark rounded-pill bg-warning'>Mağaza yerleşim düzeninde iyileşme yapmanız tavsiye edilmektedir.</span>"."</p>";
                } elseif($sira <= 2 ) {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazası ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-success'>Ortalama üstü.</span>"."</p>";
                } 
                else {
                  echo "<p><span style='font-weight:bold;'>$sira. </span>"."$ilce mağazasının ortalama işlem değeri ".number_format($ilcedeger, 0, ',', '.') ." ₺. <span class='badge text-light rounded-pill bg-secondary'>Nötr</span>"."</p>";
                }
                
                $sira++;
              }
              ?>
            </div>
          </div>
        </div>
  </div><!-- Row Bitiş -->

</section>

</main><!-- End #main -->

<script>
  /* ORTALAMA İŞLEM DEĞERİ */
const ortislemdegeri_array = <?php echo json_encode($ortalama_islem_degerleri) ?>;
const ortislemdegeri_magazalar = Object.keys(ortislemdegeri_array)
const ortislemdegeri_degerler= Object.values(ortislemdegeri_array)
const siparissayilar = <?php echo json_encode($ortalamaislemdegeridataset2) ?>;
console.log(ortislemdegeri_magazalar)
// setup 
const data = {
      labels: ortislemdegeri_magazalar,
      datasets: [{
        label: 'Ortalama İşlem Değeri',
        data: ortislemdegeri_degerler,
        backgroundColor: [
          'rgba(255, 26, 104, 0.7)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      },{
        label: 'İşlem Sayısı',
        data: siparissayilar,
        backgroundColor: [
          'rgba(151, 71, 84, 0.8)'
        ],
        borderColor: [
          'rgba(151, 71, 84, 0.8)'
        ],
        borderWidth: 1
      }
    ]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        indexAxis:'y'
      }
    };

    // render init block
    const ortalamaislemdegeri = new Chart(
      document.getElementById('ortalamaislemdegeri'),
      config
    );

</script>

<script>
  /* ÇALIŞAN BAŞNIA SATIŞLAR */
const personelbasinasatis_array = <?php echo json_encode($calisan_basina_satislar) ?>;
const personelbasinasatis_magazalar = Object.keys(personelbasinasatis_array)
const personelbasinasatis_degerler= Object.values(personelbasinasatis_array)
console.log(ortislemdegeri_magazalar)
// setup 
const personelData = {
      labels: personelbasinasatis_magazalar,
      datasets: [{
        label: 'Personel başına satışlar',
        data: personelbasinasatis_degerler,
        backgroundColor: [
          'rgba(132,94,194,0.7)',
            'RGBA(220,0,0,0.7)',
            'RGBA(255,191,0,0.7)',
            'RGBA(55,146,55,0.7)',
            'RGBA(255,100,100,0.7)',
        ],
        borderColor: [
          'rgba(132,94,194,0.9)',
            'RGBA(220,0,0,0.9)',
            'RGBA(255,191,0,0.9)',
            'RGBA(55,146,55,0.9)',
            'RGBA(255,100,100,0.9)',
        ],
        borderWidth: 1
      }]
    };

    // config 
    const personelConfig = {
      type: 'bar',
      data:personelData,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const personelbasinasatis = new Chart(
      document.getElementById('personelbasinasatis'),
      personelConfig
    );

</script>

<script>
  /* metrekareverimlilik*/
const metrekareverimlilik_array = <?php echo json_encode($metrekare_verimlilikleri) ?>;
const metrekareverimlilik_magazalar = Object.keys(metrekareverimlilik_array)
const metrekareverimlilik_degerler= Object.values(metrekareverimlilik_array)
const magazametrekare = <?php echo json_encode($magazaverimlilikdataset2) ?>;

// setup 
const metrekareData = {
      labels: metrekareverimlilik_magazalar,
      datasets: [{
        label: 'Metrekare Verimliliği',
        data: metrekareverimlilik_degerler,
        backgroundColor: [
          'rgba(255, 26, 104, 0.7)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      },{
        type:'bar',
        label: 'Metrekare',
        data: magazametrekare,
        backgroundColor: [
          'rgba(170, 9, 0, 0.8)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 159, 64, 0.7)',
        ],
        borderColor: [
          'rgba(170, 9, 0, 0.8)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }
    ]
    };

    // config 
    const metrekareConfig = {
      type: 'bar',
      data:metrekareData,
      options: {
        indexAxis:'y'
      }
    };

    // render init block
    const metrekareverimlilik = new Chart(
      document.getElementById('metrekareverimlilik'),
      metrekareConfig
    );

</script>












<?php include('footer.php'); ?>