<?php include('header.php');
include('sidebar.php');
include('baglanti.php');
include('veri.php'); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kampanyalar</h1>
    <?php
    if (isset($_SESSION['kampanyabilgi']) && $_SESSION['statu'] == "1") {
      echo "<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>";
      echo "<p class='alert alert-success bg-success text-light border-0 alert-dismissible fade show'>";
      echo $_SESSION['kampanyabilgi'];
      echo '</p>';
      echo "</div>";
      unset($_SESSION['kampanyabilgi']);
      unset($_SESSION['statu']);
    } else if (isset($_SESSION['kampanyabilgi']) && $_SESSION['statu'] == "0") {
      echo "<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>";
      echo "<p class='alert alert-danger'>";
      echo $_SESSION['kampanyabilgi'];
      echo '</p>';
      echo "</div>";
      unset($_SESSION['kampanyabilgi']);
      unset($_SESSION['statu']);
    }
    ?>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row"> <!-- 3. Satır -->
      <div class="col-7">
        <div class="card"> <!-- Card Başlangıç -->
          <div class="card-body">
            <h5 class="text-center text-dark card-title">Kampanya Ekle</h5>
            <form method="POST" action="islem.php" class="row g-3">
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Kampanya Tipi</label>
                <input required type="text" name="kampanyatip" class="form-control" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Kampanya Adı</label>
                <input required type="text" name="kampanyaadi" class="form-control" id="inputEmail4">
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label">İndirim Yüzdesi</label>
                <input required type="text" name="indirimyuzde" class="form-control" id="inputPassword4">
              </div>
              <div class="text-center">
                <button name="kampanyaekle" type="submit" class="btn btn-success">Kampanya Ekle</button>
              </div>
            </form><!-- Vertical Form -->
          </div>
          <hr>
          <div class="card-body">
            <h5 class="text-center text-dark card-title">Kampanya Sil</h5>
            <form method="POST" action="islem.php">
              <div class="form-group">

                <?php

                echo "<select class='form-control' name='kampanyaOption' id='input-select'>";
                foreach ($kampanyalar as $kampanya) {

                  echo "<option value='$kampanya'>$kampanya</option>";
                }

                echo "</select>";
                ?>
              </div>


              <div class="form-group text-center">

                <button class="mt-2 btn btn-danger btn-block" name="kampanyasil" type="submit">Kampanya Sil</button>

              </div>
            </form>
          </div>
        </div><!-- Card Bitiş -->
      </div>
      <div class="col-5">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center text-dark card-title">Mevcut Kampanyalar</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Kampanya Tip</th>
                  <th scope="col">Kampanya Açıklama</th>
                  <th scope="col">İndirim (%)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($say = 0; $say < count($kampanyatip); $say++) {
                  echo "<tr>";
                  echo "<th scope='row'>" . ($say + 1) . "</td>";
                  echo "<td>" . $kampanyatip[$say] . "</td>";
                  echo "<td>" . $kampanyatipaciklama[$say] . "</td>";
                  echo "<td>" . $kampanyaindirim[$say] . "</td>";
                  echo "</tr>";

                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div><!-- 3. Satır Bitiş -->




  </section>

</main><!-- End #main -->


















<?php include('footer.php'); ?>