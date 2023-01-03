<?php include('header.php');
include('sidebar.php');
include('baglanti.php');
include('veri.php'); ?>



<main id="main" class="main">

    <div class="pagetitle">
        <h3 class="text-center mb-3 mt-2">Rastgele Teknoloji Genel Mağaza Bilgiler</h3>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="container"> <!-- Container Başlangıç -->

        <div class="row"> <!-- Simülasyon Row Başlangıç -->
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Genel Mağaza Satışları</h5>
              <canvas id="genelsatisgrafik"></canvas>
              <select id="func" onchange="changegraph()">
                <option value="genel2022satislar">2022</option>
                <option value="genel2021satislar">2021</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Simülasyon</h5>
              <div class="text-center">
                <?php
                                            if ($genelyuzde > 0) {
                                              echo "<span class='badge bg-success'>" . "Geçen Yıla Göre Büyüme oranı '$genelyuzde'." . "</span>";
                                            } else {
                                              echo "<span class='badge bg-danger'>" . "Küçülme oranı '$genelyuzde'." . "</span>";
                                            }
                                            ?>
              </div>
              <div id="hesaplaform" class="row">

                <div class="col-12">
                  <label for="inputNanme4" class="form-label mt-2">Büyüme Tahmini (%)</label>
                  <input id="buyumeOrani" type="text" required placeholder='<?= $genelyuzde ?>' ; class="form-control"
                    id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label mt-2">Dolar Kuru Beklentiniz ($)</label>
                  <input id="dolarBeklenti" required type="text" class="form-control" id="inputAddress"
                    placeholder='<?= $dovizdeger[1] ?>' ;>
                </div>
                <div class="text-center">
                  <button onclick="hesapla()" class="text-light mt-2 btn-block btn btn-primary rounded-pill"><i class="fa fa-calculator m-1"></i>Hesapla</button>
                  <button onclick="temizle()" class="mt-2 btn-block btn btn-danger rounded-pill"><i class="fa fa-refresh m-1"></i>Grafiği Temizle</button>
                </div>
                </form><!-- Vertical Form -->
              </div>
            </div>
          </div>
        </div>

      </div> <!-- Simülasyon Row Bitiş -->

<hr>

            <div class="row"> <!-- Ürün Row Başlangıç -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-dark card-title">En çok satan 5 ürün</h5>
                            <canvas id="genelencoksatanbesurun"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-dark card-title">En çok satan 5 Ürünün Fiyatları</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Ürün Ad</th>
                                        <th scope="col">Fiyat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($say = 0; $say < count($genelencoksatanbesurunad); $say++) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . ($say + 1) . "</td>";
                                        echo "<td>" . $genelencoksatanbesurunad[$say] . "</td>";
                                        echo "<td>" . $genelencoksatanbesurunfiyat[$say] . "₺" . "</td>";
                                        echo "</tr>";

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- Ürün Row  Bitiş -->
            <hr>
            <!-- Kategori Row Başlangıç -->
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-dark card-title">En çok satan 5 kategori</h5>
                            <canvas id="genelencoksatanbeskategori"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-dark card-title">En çok satan 5 kategori satış adeti</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kategori Ad</th>
                                        <th scope="col">Satış Adeti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($say = 0; $say < count($genelencoksatanbeskategoriad); $say++) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . ($say + 1) . "</td>";
                                        echo "<td>" . $genelencoksatanbeskategoriad[$say] . "</td>";
                                        echo "<td>" . $genelencoksatanbeskategoriadet[$say] . "</td>";
                                        echo "</tr>";

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Kategori Row Bitiş -->
            <hr>
            <!-- Renk Row Başlangıç  -->
            <div class="row"> 
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 id="renkbaslik" class="text-center text-dark card-title">En çok satan renkler</h5>
                            <canvas id="genelencoksatanrenk"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-dark card-title">En çok satan renkler satış adeti</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Renk Ad</th>
                                        <th scope="col">Satış Adeti</th>
                                    </tr>
                                </thead>
                                <tbody id="tabloeleman">
                                    <?php
                  for ($say = 0; $say < count($genelencoksatanbesrenkad); $say++) {
                      echo "<tr id='myRow'>";
                      echo "<th scope='row'>" . ($say + 1) . "</td>";
                      echo "<td>" . $genelencoksatanbesrenkad[$say] . "</td>";
                      echo "<td>" . $genelencoksatanbesrenkadet[$say] . "</td>";
                      echo "</tr>";

                  }
                  ?>
                                </tbody>
                            </table>
                            <select class="form-select" id="colorchange" onchange="changeColor()">
                                <option value="Default">Renk Seç</option>
                                <option value="Beyaz">Beyaz</option>
                                <option value="Siyah">Siyah</option>
                                <option value="Lacivert">Lacivert</option>
                                <option value="Gri">Gri</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div><!-- Renk Row Bitiş -->





            <div> <!-- Container Bitiş -->


    </section>

</main><!-- End #main -->

<script> /*  <!-- Satışlar Grafiği Başlangıç -->  */
  const aylar = ['Ocak', "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"];
  const dovizort21 = <?php echo $dovizdeger[0] ?>;
  const dovizort22 = <?php echo $dovizdeger[1] ?>;
  const genel2021satislar = <?php echo json_encode($genel2021satislar); ?>;
  const genel2022satislar = <?php echo json_encode($genel2022satislar); ?>;
  const genel2021satislardolar = genel2021satislar.map(x => Math.round(x / dovizort21));
  const genel2022satislardolar = genel2022satislar.map(x => Math.round(x / dovizort22));
  const genel2022satislartoplami = <?php echo $genel2022satislartoplami ?>;
  let yeniHesaplananSatislar = [];
  let dolarBazliYeniHesaplanan = [];




  // Convert array multi dimensional array & structure.
  // Loop through with map func.
  const financialsNumbers = aylar.map((ay, index) => {
    let dayObject = {};
    dayObject.ay = ay; //refers parameter.
    dayObject.financials = {};
    dayObject.financials.genel2021satislar = genel2021satislar[index];
    dayObject.financials.genel2022satislar = genel2022satislar[index];

    return dayObject;
  })



  /* financialsNumbers = [
      {day: 'Mon', financials: { cost:9, sales:10, profit: 21}},
      {day: 'Tue', financials: { cost:9, sales:10, profit: 21}},
      {day: 'Wed', financials: { cost:9, sales:10, profit: 21}},
  ] */


  // setup 
  const data = {
    //labels: days,
    datasets: [{
      label: 'Tüm Mağazalar 2022 Satış (TL)',
      data: financialsNumbers,
      backgroundColor: 'rgba(54, 162, 235, 0.6)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      parsing: {
        xAxisKey: 'ay',
        yAxisKey: 'financials.genel2022satislar'
      }
    }]
  };

  // config 
  const config = {
    type: 'bar',
    data,
    options: {

      scales: {
        y: {
          beginAtZero: true,
        }
      }
    }
  };

  // render init block
  const genelsatisgrafik = new Chart(
    document.getElementById('genelsatisgrafik'),
    config
  );

  /* Option Box yıl değiştir. */
  function changegraph() {
    const fon = document.getElementById('func').value;
    /* Eğer kullanıcı simülasyon yaptıktan sonra tekrar optionbox kullanırsa. */
    if (genelsatisgrafik.data.datasets.length > 1) {
      genelsatisgrafik.data.datasets = genelsatisgrafik.data.datasets.slice(0, -1);
      genelsatisgrafik.update();
    }
    genelsatisgrafik.data.datasets[0].data = financialsNumbers;
    genelsatisgrafik.data.datasets[0].parsing.yAxisKey = `financials.${fon}`;
    if (genelsatisgrafik.data.datasets[0].parsing.yAxisKey == 'financials.genel2021satislar') {
        genelsatisgrafik.data.datasets[0].label = 'Tüm Mağazalar 2021 Yılı Satış (TL)';
    } else {
        genelsatisgrafik.data.datasets[0].label = 'Tüm Mağazalar 2022 Yılı Satış (TL)';
    }

    genelsatisgrafik.update();

  }

  /* 2022 Yılına Ait Ayların 2022 Toplamı içindeki dağılmı */
  const aylarYuzdePaylari = [];
  function payHesapla(payHesaplanan, toplamDeger, sira) {
    for (let i = 0; i < payHesaplanan.length; i++) {
      aylarYuzdePaylari.push((parseFloat(payHesaplanan[sira] / toplamDeger).toFixed(2)));
      sira = sira + 1;
    }
  }
  payHesapla(genel2022satislar, genel2022satislartoplami, 0)

  /* Hesapla Fonksiyonu */
  function hesapla() {
    const buyumeOrani = parseFloat(document.getElementById('buyumeOrani').value);
    const dolarBeklenti = parseFloat(document.getElementById('dolarBeklenti').value);
    const deger = parseFloat(genel2022satislartoplami) * parseFloat(buyumeOrani) / 100;
    const sonuc = genel2022satislartoplami + deger;


    /* Hesaplaya tıkladıktan sonra yeniGrafik callBack fonksiyonu çalışacak. */
    /* Yeni Grafik Oluşturmak için Yazdığım Fonksiyon yuzdePayi: aylarYuzdePaylari, 
    hesaplananToplamSonuc, izmir22satislartoplami, sira:0 */
    let yeniGrafik = (yuzdePayi, hesaplananToplamSonuc, sira) => {
      for (let i = 0; i < yuzdePayi.length; i++) {
        yeniHesaplananSatislar.push(parseInt((hesaplananToplamSonuc * yuzdePayi[sira]).toFixed(0)));
        sira = sira + 1;
      }

      /* Dolar Bazli Yen' Hesaplanan Satışlar */


      dolarBazliYeniHesaplanan = yeniHesaplananSatislar.map(x => parseInt((x / dolarBeklenti).toFixed(0)));

      const yeniDolarVeriSet = aylar.map((ay, index) => {
        let dayObject = {};
        dayObject.ay = ay; //refers parameter.
        dayObject.dolar = {};
        dayObject.dolar.beklenen = dolarBazliYeniHesaplanan[index];
        return dayObject;
      })

      console.log(yeniDolarVeriSet);
      /* Yeni verisetini sözlük olarak oluşturdum. */
      const yeniDataSet = aylar.map((ay, index) => {
        let dayObject = {};
        dayObject.ay = ay; //refers parameter.
        dayObject.satis = {};
        dayObject.satis.beklenen = yeniHesaplananSatislar[index];

        return dayObject;
      })

      /* Grafikteki verisetini yeni hesapladığım veri seti olarak girdim. */
      genelsatisgrafik.data.datasets[0].data = yeniDataSet;
      /* Y eksenine bu degerleri yapistirdim. */
      genelsatisgrafik.data.datasets[0].parsing.yAxisKey = 'satis.beklenen';
      /* Grafik ismini güncelle. */
      genelsatisgrafik.data.datasets[0].label = '2023 Yılı Beklentisi';
      /* Grafiğin rengini değiştir. */
      genelsatisgrafik.data.datasets[0].backgroundColor = 'rgba(255,26,104,0.2)'
      genelsatisgrafik.data.datasets[0].borderColor = 'rgba(255,26,104,1)'


      /* dolar veri seti tanımlıyoruz. */
      dolarDataSeti = {
        label: `2023 Dolar Bazlı Satış Beklenti: 1$=${dolarBeklenti}TL`,
        data: yeniDolarVeriSet,
        backgroundColor: 'rgba(21,55,89,0.2)',
        borderColor: 'rgba(21,55,89,1)',
        borderWidth: 1,
        parsing: {
          xAxisKey: 'ay',
          yAxisKey: 'dolar.beklenen'
        },

      }
      /* Datasetine dolar verisetini ekle */
      genelsatisgrafik.data.datasets.push(dolarDataSeti)




      /* Grafiği güncelle */
      genelsatisgrafik.update();



    }
    /* Eğer hesaplanmış grafik varsa tl bazlı onu bosaltıyoruz ki hesaplaya tekrar bastıgımızda yeni tl bazlı grafik olusturalım.*/
    if(yeniHesaplananSatislar.length>0) {
        yeniHesaplananSatislar = [];
        
        yeniGrafik(aylarYuzdePaylari, sonuc, 0);
    } else {
        yeniGrafik(aylarYuzdePaylari, sonuc, 0);
    }
    

  }

  function temizle() {
    this.location.reload();
  }
  </script>

<script> /* Ürün Grafik */

    const genelencoksatanbesurunad = <?php echo json_encode($genelencoksatanbesurunad); ?>;
    const genelencoksatanbesurunadet = <?php echo json_encode($genelencoksatanbesurunadet); ?>;
    const genelencoksatanbesurunfiyat = <?php echo json_encode($genelencoksatanbesurunfiyat); ?>;
    console.log(genelencoksatanbesurunad);
    console.log(genelencoksatanbesurunadet);
    console.log(genelencoksatanbesurunfiyat);


    const genelEnCokSatanUrunMap = genelencoksatanbesurunad.map((urun, index) => {
        let urunObject = {};
        urunObject.urun = urun; //refers parameter.
        urunObject.adet = {};
        urunObject.adet.genel = genelencoksatanbesurunadet[index];


        return urunObject;
    })

    const enCokSatanBesUrunDataSet = {
        //labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'En Çok Satan 5 Ürün',
            data: genelEnCokSatanUrunMap,
            backgroundColor: [
                'rgba(255, 26, 104, 0.7)',
                "rgba(40, 240, 134, 0.7)",
                'rgba(190, 240, 40, 0.7)',
                'rgba(150, 40, 240, 0.7)',
                'rgba(240, 127, 40, 0.7)'
            ],
            borderColor: [
                'rgba(255, 26, 104, 1)',
                "rgba(40, 240, 134, 1)",
                'rgba(190, 240, 40, 1)',
                'rgba(150, 40, 240, 1)',
                'rgba(240, 127, 40, 1)'
            ],
            borderWidth: 1,
            parsing: {
                xAxisKey: 'urun',
                yAxisKey: 'adet.genel'
            }
        },]
    };

    // config 
    const genelenCokSatanBesUrunConfig = {
        type: 'bar',
        data: enCokSatanBesUrunDataSet,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // render init block
    const genelencoksatanbesurun = new Chart(
        document.getElementById('genelencoksatanbesurun'),
        genelenCokSatanBesUrunConfig
    );


</script>

<script> /* Kategori Grafik */

    const genelencoksatanbeskategoriad = <?php echo json_encode($genelencoksatanbeskategoriad); ?>;
    const genelencoksatanbeskategoriadet = <?php echo json_encode($genelencoksatanbeskategoriadet); ?>;
    const genelencoksatankategoriort = <?php echo json_encode($kategoriurunlerdataset2); ?>; 


    const genelEnCokSatanKategoriMap = genelencoksatanbeskategoriad.map((kategori, index) => {
        let kategoriObject = {};
        kategoriObject.kategori = kategori; //refers parameter.
        kategoriObject.adet = {};
        kategoriObject.adet.genel = genelencoksatanbeskategoriadet[index];


        return kategoriObject;
    })

    const enCokSatanBesKategoriDataSet = {
        //labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'En Çok Satan 5 Kategori',
            data: genelEnCokSatanKategoriMap,
            backgroundColor: [
                'rgba(255, 26, 104, 0.7)',
                "rgba(40, 240, 134, 0.7)",
                'rgba(190, 240, 40, 0.7)',
                'rgba(150, 40, 240, 0.7)',
                'rgba(240, 127, 40, 0.7)'
            ],
            borderColor: [
                'rgba(255, 26, 104, 1)',
                "rgba(40, 240, 134, 1)",
                'rgba(190, 240, 40, 1)',
                'rgba(150, 40, 240, 1)',
                'rgba(240, 127, 40, 1)'
            ],
            borderWidth: 1,
            parsing: {
                xAxisKey: 'kategori',
                yAxisKey: 'adet.genel'
            }
        },{
            type:'line',
            label: 'Ortalama Satış Fiyatı',
            data: genelencoksatankategoriort,
            backgroundColor: [
                'rgba(255, 26, 104, 1)',
                "rgba(40, 240, 134, 1)",
                'rgba(190, 240, 40, 1)',
                'rgba(150, 40, 240, 1)',
                'rgba(240, 127, 40, 1)'
            ],
            borderColor: [
                'rgba(135, 0, 0, 1)'
            ],
            borderWidth: 2,
            pointStyle:'rect',
            pointRadius:7
            
        }
    ]
    };

    // config 
    const genelenCokSatanBesKategoriConfig = {
        type: 'bar',
        data: enCokSatanBesKategoriDataSet,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // render init block
    const genelencoksatanbeskategori = new Chart(
        document.getElementById('genelencoksatanbeskategori'),
        genelenCokSatanBesKategoriConfig
    );


</script>
<script> /* Renk Grafik */

    const genelencoksatanbesrenkad = <?php echo json_encode($genelencoksatanbesrenkad); ?>;
    const genelencoksatanbesrenkadet = <?php echo json_encode($genelencoksatanbesrenkadet); ?>;
    const genelbeyazrenkkategoriad = <?php echo json_encode($genelbeyazrenkkategoriad); ?>;
    const genelbeyazrenkkategoriadet = <?php echo json_encode($genelbeyazrenkkategoriadet); ?>;
    const genelsiyahrenkkategoriad = <?php echo json_encode($genelsiyahrenkkategoriad); ?>;
    const genelsiyahrenkkategoriadet = <?php echo json_encode($genelsiyahrenkkategoriadet); ?>;
    const genelgrirenkkategoriad = <?php echo json_encode($genelgrirenkkategoriad); ?>;
    const genelgrirenkkategoriadet = <?php echo json_encode($genelgrirenkkategoriadet); ?>;
    const genellacivertrenkkategoriad = <?php echo json_encode($genellacivertrenkkategoriad); ?>;
    const genellacivertrenkkategoriadet = <?php echo json_encode($genellacivertrenkkategoriadet); ?>;



    const genelEnCokSatanRenkMap = genelencoksatanbesrenkad.map((renk, index) => {
        let renkObject = {};
        renkObject.renk = renk; //refers parameter.
        renkObject.adet = {};
        renkObject.adet.genel = genelencoksatanbesrenkadet[index];


        return renkObject;
    })

    const renkBg = [
        'rgba(255, 26, 104, 0.5)',
        "rgba(40, 240, 134, 0.5)",
        'rgba(190, 240, 40, 0.5)',
        'rgba(150, 40, 240, 0.5)',
        'rgba(240, 127, 40, 0.5)'
    ]
    const renkBorder = [
        'rgba(255, 26, 104, 1)',
        "rgba(40, 240, 134, 1)",
        'rgba(190, 240, 40, 1)',
        'rgba(150, 40, 240, 1)',
        'rgba(240, 127, 40, 1)'
    ]
    const defaultBg = [
        'rgba(160, 153, 163, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(245, 240, 255, 1)',
        'rgba(27, 1, 81, 1)',
        'rgba(240, 127, 40, 0.5)']

    const defaultBorder = [
        'rgba(160, 153, 163, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(27, 1, 81, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(240, 127, 40, 1)']

    const enCokSatanRenkDataSet = {
        labels: genelencoksatanbesrenkad,
        datasets: [{
            label: 'En Çok Satan Renkler',
            data: genelencoksatanbesrenkadet,
            backgroundColor: [
                'rgba(160, 153, 163, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(245, 240, 255, 1)',
                'rgba(27, 1, 81, 1)',
                'rgba(240, 127, 40, 0.5)'
            ],
            borderColor: [
                'rgba(160, 153, 163, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(27, 1, 81, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(240, 127, 40, 1)'
            ],
            borderWidth: 1,

        }]
    };

    // config 
    const genelenCokSatanRenkConfig = {
        type: 'pie',
        data: enCokSatanRenkDataSet,
        options: {
          
        },
        /* plugins: [ChartDataLabels] */
    };

    // render init block
    const encoksatanrenk = new Chart(
        document.getElementById('genelencoksatanrenk'),
        genelenCokSatanRenkConfig
    );


    function changeColor() {
        const secilenRenk = document.getElementById('colorchange').value;
        console.log(secilenRenk)
        if (secilenRenk === "Beyaz") {
            encoksatanrenk.config._config.data.labels = genelbeyazrenkkategoriad;
            encoksatanrenk.config._config.data.datasets[0].data = genelbeyazrenkkategoriadet;
            encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
            encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
            encoksatanrenk.config._config.data.datasets[0].label = "Beyaz renkte en çok satan 5 kategori";
        } else if (secilenRenk === "Siyah") {
            encoksatanrenk.config._config.data.labels = genelsiyahrenkkategoriad;
            encoksatanrenk.config._config.data.datasets[0].data = genelsiyahrenkkategoriadet;
            encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
            encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
            encoksatanrenk.config._config.data.datasets[0].label = "Siyah renkte en çok satan 5 kategori";
        } else if (secilenRenk === "Lacivert") {

            encoksatanrenk.config._config.data.labels = genelgrirenkkategoriad;
            encoksatanrenk.config._config.data.datasets[0].data = genelgrirenkkategoriadet;
            encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
            encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
            encoksatanrenk.config._config.data.datasets[0].label = "Lacivert renkte en çok satan 5 kategori";
        } else if (secilenRenk === "Gri") {
            encoksatanrenk.config._config.data.labels = genellacivertrenkkategoriad;
            encoksatanrenk.config._config.data.datasets[0].data = genellacivertrenkkategoriadet;
            encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
            encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
            encoksatanrenk.config._config.data.datasets[0].label = "Gri renkte en çok satan 5 kategori";
        } else {
            encoksatanrenk.config._config.data.labels = genelencoksatanbesrenkad;
            encoksatanrenk.config._config.data.datasets[0].data = genelencoksatanbesrenkadet;
            encoksatanrenk.config._config.data.datasets[0].backgroundColor = defaultBg;
            encoksatanrenk.config._config.data.datasets[0].borderColor = defaultBorder;
            encoksatanrenk.config._config.data.datasets[0].label = "En Çok Satan Renkler";
        }
        /*  console.log(encoksatanrenk.config._config.data.datasets)*/
        encoksatanrenk.update()

    }


</script>


<?php include('footer.php'); ?>