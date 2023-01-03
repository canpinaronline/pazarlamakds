<?php 

include('header.php');
include('sidebar.php');
include('baglanti.php');
include('veri.php');
?>
 <main id="main" class="main">

<div class="pagetitle text-center pt-2 pb-4">
    <h1>Ön Bakış</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <!-- My cards -->
        <!-- Siparisler -->
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green2-dark">
                <div class="card-statistic-3 p-4">

                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Satışlar</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo number_format($toplamsatis, 0, ',', '.') . "₺"; ?>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Müşteriler -->
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Müşteri Sayısı</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-user"></i></span>
                        </div>
                    </div>

                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              <?= $musterisayisi ?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Çalışan Sayısı</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?php echo $personelsayisi; ?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Satılmış Ürün</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-digital-tachograph"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                               <?= number_format($satilmisurunsayisi, 0, ',', '.');?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-smith-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Toplam Marka Sayısı</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-archive"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?= $markasayisi;?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-smith-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Toplam Ürün Sayısı</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-digital-tachograph"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                
                            <?= $urunsayisi;?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-smith-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Toplam Kategori Sayısı</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-digital-tachograph"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                
                            <?= $kategorisayisi;?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-smith-dark">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center d-flex mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center card-title mb-0">Toplam Büyüklük (m2)</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span style="font-size:35px;"><i class="fa fa-calendar-alt"></i></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?= $metrekaresayisi;?>
                                
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div> <!-- row bitiş -->


</section>

</main><!-- End #main -->
<?php
include('footer.php');
?>