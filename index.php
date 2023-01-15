<?php
require_once("./config/config.php");
require_once("./views/template/header.php");
?>
<section id="hero" class="px-3 px-lg-0 mb-5">
    <div class="container">
        <div class="row justify-content-between  align-items-end mt-5">
            <div class="col-lg-5 order-2 order-lg-1 text-center text-lg-start">
                <h1>Satu Data Kesehatan</h1>
                <p>Suatu sistem kesehatan yang saling berkaitan satu sama lain dan terintegrasi❤️‍🩹.</p>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 mb-3 mb-lg-0">
                <img class="img-fluid" width="550" src="<?= base_url('public/assets/images/undraw_medicine_b-1-ol.svg') ?>" alt="doctor.jpg">
            </div>
        </div>
    </div>
</section>
<hr>
<section id="menu" class="px-3 px-lg-0">
    <div class="container">
        <h4 class="mb-4">Menu</h4>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card border border-1">
                    <div class="card-body">
                        <a href="http://informasipasien.elektro-pnb.id">
                            <h5>Informasi Data Pasien</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border border-1">
                    <div class="card-body">
                        <a href="http://rekammedis.elektro-pnb.id">
                            <h5>Rekam Medis Kesehatan Poli</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border border-1">
                    <div class="card-body">
                        <a href="http://suratsehat.elektro-pnb.id">
                            <h5>Surat Keterangan Sehat</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border border-1">
                    <div class="card-body">
                        <a href="#">
                            <h5>Emergency Pasien</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer">
    <div class="bg-primary py-2 d-flex justify-content-center">
        <small class="text-white">Satu Data Kesehatan ❤️</small>
    </div>
</section>
<?php
require_once("./views/template/footer.php");
?>