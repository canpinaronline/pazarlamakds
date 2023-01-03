<?php
include('header.php');
include('sidebar.php');
include('baglanti.php');
include('veri.php'); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h2 class="text-center mb-2">Rastgele Teknoloji Konak Şubesi</h2>
  </div><!-- End Page Title -->

  <section class="section">
    <!-- Grafik Başlangıç -->
    <div class="container">

      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">Kadıköy Mağazası Satışlar</h5>
              <canvas id="kadikoysatisgrafik"></canvas>
              <select id="func" onchange="changegraph()">
                <option value="kadikoy22satislar">2022</option>
                <option value="kadikoy21satislar">2021</option>
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
                                            if ($kadikoyyuzde > 0) {
                                              echo "<span class='badge bg-success'>" . "Geçen Yıla Göre Büyüme oranı '$kadikoyyuzde'." . "</span>";
                                            } else {
                                              echo "<span class='badge bg-danger'>" . "Küçülme oranı '$kadikoyyuzde'." . "</span>";
                                            }
                                            ?>
              </div>
              <div id="hesaplaform" class="row">

                <div class="col-12">
                  <label for="inputNanme4" class="form-label mt-2">Büyüme Tahmini (%)</label>
                  <input id="buyumeOrani" type="text" required placeholder='<?= $kadikoyyuzde ?>' ; class="form-control"
                    id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label mt-2">Dolar Kuru Beklentiniz ($)</label>
                  <input id="dolarBeklenti" required type="text" class="form-control" id="inputAddress"
                    placeholder='<?= $dovizdeger[1] ?>' ;>
                </div>
                <div class="text-center">
                  <button onclick="hesapla()" class="mt-2 btn-block btn btn-warning rounded-pill">Hesapla</button>
                </div>
                </form><!-- Vertical Form -->
              </div>
            </div>
          </div>
        </div>

      </div> <!-- Row Bitiş -->
      <hr>
      <div class="row"> <!-- 2. Satır -->
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">En çok satan 5 ürün</h5>
              <canvas id="encoksatanbesurun"></canvas>
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
                                            for ($say = 0; $say < count($kadikoyencoksatanbesurunad); $say++) {
                                              echo "<tr>";
                                              echo "<th scope='row'>" . ($say + 1) . "</td>";
                                              echo "<td>" . $kadikoyencoksatanbesurunad[$say] . "</td>";
                                              echo "<td>" . $kadikoyencoksatanbesurunfiyat[$say] . "₺" . "</td>";
                                              echo "</tr>";

                                            }
                                            ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div><!-- 2. Satır Bitiş -->
      <hr>
      <div class="row"> <!-- 3. Satır -->
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">En çok satan 5 kategori</h5>
              <canvas id="encoksatanbeskategori"></canvas>
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
                                            for ($say = 0; $say < count($kadikoyencoksatanbeskategoriad); $say++) {
                                              echo "<tr>";
                                              echo "<th scope='row'>" . ($say + 1) . "</td>";
                                              echo "<td>" . $kadikoyencoksatanbeskategoriad[$say] . "</td>";
                                              echo "<td>" . $kadikoyencoksatanbeskategoriadet[$say] . "</td>";
                                              echo "</tr>";

                                            }
                                            ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div><!-- 3. Satır Bitiş -->
      <hr>
      <div class="row"> <!-- 4. Satır -->
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center text-dark card-title">En çok satan renkler</h5>
              <canvas id="encoksatanrenk"></canvas>
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
                                            for ($say = 0; $say < count($kadikoyencoksatanrenkad); $say++) {
                                              echo "<tr id='myRow'>";
                                              echo "<th scope='row'>" . ($say + 1) . "</td>";
                                              echo "<td>" . $kadikoyencoksatanrenkad[$say] . "</td>";
                                              echo "<td>" . $kadikoyencoksatanrenkadet[$say] . "</td>";
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

      </div><!-- 4. Satır Bitiş -->

    </div> <!-- Container Bitiş -->

    <!-- Grafik Bitiş -->
  </section>

</main><!-- End #main -->





<script> /*  <!-- Satışlar Grafiği Başlangıç -->  */
  const aylar = ['Ocak', "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"];
  const dovizort21 = <?php echo $dovizdeger[0] ?>;
  const dovizort22 = <?php echo $dovizdeger[1] ?>;
  const kadikoy21satislar = <?php echo json_encode($kadikoy21satislar); ?>;
  const kadikoy22satislar = <?php echo json_encode($kadikoy22satislar); ?>;
  const kadikoy21satislardolar = kadikoy21satislar.map(x => Math.round(x / dovizort21));
  const kadikoy22satislardolar = kadikoy22satislar.map(x => Math.round(x / dovizort22));
  const kadikoy22satislartoplami = <?php echo $kadikoy22satislartoplami ?>;
  let yeniHesaplananSatislar = [];
  let dolarBazliYeniHesaplanan = [];




  // Convert array multi dimensional array & structure.
  // Loop through with map func.
  const financialsNumbers = aylar.map((ay, index) => {
    let dayObject = {};
    dayObject.ay = ay; //refers parameter.
    dayObject.financials = {};
    dayObject.financials.kadikoy21satislar = kadikoy21satislar[index];
    dayObject.financials.kadikoy22satislar = kadikoy22satislar[index];

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
      label: 'Kadıköy 2022 Satış (TL)',
      data: financialsNumbers,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      parsing: {
        xAxisKey: 'ay',
        yAxisKey: 'financials.kadikoy22satislar'
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
  const kadikoysatisgrafik = new Chart(
    document.getElementById('kadikoysatisgrafik'),
    config
  );

  /* Option Box yıl değiştir. */
  function changegraph() {
    const fon = document.getElementById('func').value;
    /* Eğer kullanıcı simülasyon yaptıktan sonra tekrar optionbox kullanırsa. */
    if (kadikoysatisgrafik.data.datasets.length > 1) {
        kadikoysatisgrafik.data.datasets = kadikoysatisgrafik.data.datasets.slice(0, -1);
        kadikoysatisgrafik.update();
    }
    kadikoysatisgrafik.data.datasets[0].data = financialsNumbers;
    kadikoysatisgrafik.data.datasets[0].parsing.yAxisKey = `financials.${fon}`;
    if (kadikoysatisgrafik.data.datasets[0].parsing.yAxisKey == 'financials.kadikoy21satislar') {
        kadikoysatisgrafik.data.datasets[0].label = 'Kadıköy 2021 Yılı Satış (TL)';
    } else {
        kadikoysatisgrafik.data.datasets[0].label = 'Kadıköy 2022 Yılı Satış (TL)';
    }

    kadikoysatisgrafik.update();

  }

  /* 2022 Yılına Ait Ayların 2022 Toplamı içindeki dağılmı */
  const aylarYuzdePaylari = [];
  function payHesapla(payHesaplanan, toplamDeger, sira) {
    for (let i = 0; i < payHesaplanan.length; i++) {
      aylarYuzdePaylari.push((parseFloat(payHesaplanan[sira] / toplamDeger).toFixed(2)));
      sira = sira + 1;
    }
  }
  payHesapla(kadikoy22satislar, kadikoy22satislartoplami, 0)

  /* Hesapla Fonksiyonu */
  function hesapla() {
    const buyumeOrani = parseFloat(document.getElementById('buyumeOrani').value);
    const dolarBeklenti = parseFloat(document.getElementById('dolarBeklenti').value);
    const deger = parseFloat(izmir22satislartoplami) * parseFloat(buyumeOrani) / 100;
    const sonuc = kadikoy22satislartoplami + deger;


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
      kadikoysatisgrafik.data.datasets[0].data = yeniDataSet;
      /* Y eksenine bu degerleri yapistirdim. */
      kadikoysatisgrafik.data.datasets[0].parsing.yAxisKey = 'satis.beklenen';
      /* Grafik ismini güncelle. */
      kadikoysatisgrafik.data.datasets[0].label = '2023 Yılı Beklentisi';
      /* Grafiğin rengini değiştir. */
      kadikoysatisgrafik.data.datasets[0].backgroundColor = 'rgba(255,26,104,0.2)'
      kadikoysatisgrafik.data.datasets[0].borderColor = 'rgba(255,26,104,1)'


      /* dolar veri seti tanımlıyoruz. */
      dolarDataSeti = {
        label: `2023 Yılı Dolar Bazlı Satış Beklenti:${dolarBeklenti}TL`,
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
      kadikoysatisgrafik.data.datasets.push(dolarDataSeti)




      /* Grafiği güncelle */
      kadikoysatisgrafik.update();



    }

    yeniGrafik(aylarYuzdePaylari, sonuc, 0);

  }



</script> <!-- Satışlar Grafiği Bitiş -->

<script> /* Ürün Grafik */

  const kadikoyencoksatanbesurunad = <?php echo json_encode($kadikoyencoksatanbesurunad); ?>;
  const kadikoyencoksatanbesurunadet = <?php echo json_encode($kadikoyencoksatanbesurunadet); ?>;
  const kadikoyencoksatanbesurunfiyat = <?php echo json_encode($kadikoyencoksatanbesurunfiyat); ?>;

  const kadikoyEnCokSatanUrunMap = kadikoyencoksatanbesurunad.map((urun, index) => {
    let urunObject = {};
    urunObject.urun = urun; //refers parameter.
    urunObject.adet = {};
    urunObject.adet.kadikoy = kadikoyencoksatanbesurunadet[index];


    return urunObject;
  })

  const enCokSatanBesUrunDataSet = {
    //labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [{
      label: 'En Çok Satan 5 Ürün',
      data: kadikoyEnCokSatanUrunMap,
      backgroundColor: [
        'rgba(255, 26, 104, 0.5)',
        "rgba(40, 240, 134, 0.5)",
        'rgba(190, 240, 40, 0.5)',
        'rgba(150, 40, 240, 0.5)',
        'rgba(240, 127, 40, 0.5)'
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
        yAxisKey: 'adet.kadikoy'
      }
    }]
  };

  // config 
  const enCokSatanBesUrunConfig = {
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
  const encoksatanbesurun = new Chart(
    document.getElementById('encoksatanbesurun'),
    enCokSatanBesUrunConfig
  );



</script>

<script> /* Kategori Grafik */

  const kadikoyencoksatanbeskategoriad = <?php echo json_encode($kadikoyencoksatanbeskategoriad); ?>;
  const kadikoyencoksatanbeskategoriadet = <?php echo json_encode($kadikoyencoksatanbeskategoriadet); ?>;


  const kadikoyEnCokSatanKategoriMap = kadikoyencoksatanbeskategoriad.map((kategori, index) => {
    let kategoriObject = {};
    kategoriObject.kategori = kategori; //refers parameter.
    kategoriObject.adet = {};
    kategoriObject.adet.kadikoy = kadikoyencoksatanbeskategoriadet[index];


    return kategoriObject;
  })

  const enCokSatanBesKategoriDataSet = {
    //labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [{
      label: 'En Çok Satan 5 Kategori',
      data: kadikoyEnCokSatanKategoriMap,
      backgroundColor: [
        'rgba(255, 26, 104, 0.5)',
        "rgba(40, 240, 134, 0.5)",
        'rgba(190, 240, 40, 0.5)',
        'rgba(150, 40, 240, 0.5)',
        'rgba(240, 127, 40, 0.5)'
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
        yAxisKey: 'adet.kadikoy'
      }
    }]
  };

  // config 
  const enCokSatanBesKategoriConfig = {
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
  const encoksatanbeskategori = new Chart(
    document.getElementById('encoksatanbeskategori'),
    enCokSatanBesKategoriConfig
  );



</script>
<script> /* Renk Grafik */

  const kadikoyencoksatanrenkad = <?php echo json_encode($kadikoyencoksatanrenkad); ?>;
  const kadikoyencoksatanrenkadet = <?php echo json_encode($kadikoyencoksatanrenkadet); ?>;
  const kadikoybeyazrenkkategoriad = <?php echo json_encode($kadikoybeyazrenkkategoriad); ?>;
  const kadikoybeyazrenkkategoriadet = <?php echo json_encode($kadikoybeyazrenkkategoriadet); ?>;
  const kadikoysiyahrenkkategoriad = <?php echo json_encode($kadikoysiyahrenkkategoriad); ?>;
  const kadikoysiyahrenkkategoriadet = <?php echo json_encode($kadikoysiyahrenkkategoriadet); ?>;
  const kadikoylacivertrenkkategoriad = <?php echo json_encode($kadikoylacivertrenkkategoriad); ?>;
  const kadikoylacivertrenkkategoriadet = <?php echo json_encode($kadikoylacivertrenkkategoriadet); ?>;
  const kadikoygrirenkkategoriad = <?php echo json_encode($kadikoygrirenkkategoriad); ?>;
  const kadikoygrirenkkategoriadet = <?php echo json_encode($kadikoygrirenkkategoriadet); ?>;


  const kadikoyEnCokSatanRenkMap = kadikoyencoksatanrenkad.map((renk, index) => {
    let renkObject = {};
    renkObject.renk = renk; //refers parameter.
    renkObject.adet = {};
    renkObject.adet.kadikoy = kadikoyencoksatanrenkadet[index];


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
const defaultBg = ['rgba(160, 153, 163, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(27, 1, 81, 1)',
        'rgba(245, 240, 255, 1)',
        'rgba(240, 127, 40, 0.5)']

const defaultBorder = ['rgba(160, 153, 163, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(27, 1, 81, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(240, 127, 40, 1)']        

  const enCokSatanRenkDataSet = {
    labels: kadikoyencoksatanrenkad,
    datasets: [{
      label: 'En Çok Satan Renkler',
      data: kadikoyencoksatanrenkadet,
      backgroundColor: [
        'rgba(160, 153, 163, 1)',
        'rgba(0, 0, 0, 1)',
        'rgba(27, 1, 81, 1)',
        'rgba(245, 240, 255, 1)',
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
  const enCokSatanRenkConfig = {
    type: 'pie',
    data: enCokSatanRenkDataSet,
    options: {
      legend: {
        display: false
      }
    }
  };

  // render init block
  const encoksatanrenk = new Chart(
    document.getElementById('encoksatanrenk'),
    enCokSatanRenkConfig
  );


  function changeColor() {
    const secilenRenk = document.getElementById('colorchange').value;
    console.log(secilenRenk)
    if (secilenRenk === "Beyaz") {
      encoksatanrenk.config._config.data.labels = kadikoybeyazrenkkategoriad;
      encoksatanrenk.config._config.data.datasets[0].data = kadikoybeyazrenkkategoriadet;
      encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
      encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
      encoksatanrenk.config._config.data.datasets[0].label = "Beyaz renkte en çok satan 5 kategori";
    } else if (secilenRenk === "Siyah") {
      encoksatanrenk.config._config.data.labels = kadikoysiyahrenkkategoriad;
      encoksatanrenk.config._config.data.datasets[0].data = kadikoysiyahrenkkategoriadet;
      encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
      encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
      encoksatanrenk.config._config.data.datasets[0].label = "Siyah renkte en çok satan 5 kategori";
    } else if (secilenRenk === "Lacivert") {

      encoksatanrenk.config._config.data.labels = kadikoylacivertrenkkategoriad;
      encoksatanrenk.config._config.data.datasets[0].data = kadikoylacivertrenkkategoriadet;
      encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
      encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
      encoksatanrenk.config._config.data.datasets[0].label = "Lacivert renkte en çok satan 5 kategori";
    } else if (secilenRenk === "Gri") {
      encoksatanrenk.config._config.data.labels = kadikoygrirenkkategoriad;
      encoksatanrenk.config._config.data.datasets[0].data = kadikoygrirenkkategoriadet;
      encoksatanrenk.config._config.data.datasets[0].backgroundColor = renkBg;
      encoksatanrenk.config._config.data.datasets[0].borderColor = renkBorder;
      encoksatanrenk.config._config.data.datasets[0].label = "Gri renkte en çok satan 5 kategori";
    } else {
      encoksatanrenk.config._config.data.labels = kadikoyencoksatanrenkad;
      encoksatanrenk.config._config.data.datasets[0].data = kadikoyencoksatanrenkadet;
      encoksatanrenk.config._config.data.datasets[0].backgroundColor = defaultBg;
      encoksatanrenk.config._config.data.datasets[0].borderColor = defaultBorder;
      encoksatanrenk.config._config.data.datasets[0].label = "En Çok Satan Renkler";
    }
    /*  console.log(encoksatanrenk.config._config.data.datasets)*/
    encoksatanrenk.update()

  }






</script>

<?php include('footer.php'); ?>