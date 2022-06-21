<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<section id="news" class="news bg-white">
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> <?= session()->getFlashdata('success') ?> </strong>
        </div>
    <?php endif; ?>
    <div class="container">
        <h5 class="card-tittle text-center">NEWS</h5>
        <div class="card-body bg-white">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <?php $i = 1;
                    foreach ($index1 as $key => $value) { ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100 rounded-0" style="height: 420px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="First slide">
                        </div>
                    <?php } ?>
                    <?php $i = 1;
                    foreach ($index2 as $key => $value) { ?>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded-0" style="height: 420px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="Second slide">
                        </div>
                    <?php } ?>
                    <?php $i = 1;
                    foreach ($index3 as $key => $value) { ?>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded-0" style="height: 420px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="Third slide">
                        </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="informasi" class="informasi bg-olive mt-5 border">
    <div class="container">
        <div class="row mt-2">
            <div class="col text-center">
                <h2>ABOUT LEARNING</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <div class="card mt-5 bg-secondary text-white">
                    <div class="image">
                        <img src="<?= base_url() ?>/login.jpg" class=" img-circle elevation-2 mt-3 ml-3" alt="User Image" style="height: 100px;">
                    </div>
                    <div id="accordion">
                        <div class="card card-white mt-3">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-toggle="collapse" data-card-widget="maximize" data-target="#bahasaIndonesia" aria-expanded="false" aria-controls="bahasaIndonesia">
                                        HOW TO LOGIN
                                    </button>
                                </h5>
                            </div>
                            <div id="bahasaIndonesia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body bg-info">
                                    <?php $i = 1;
                                    foreach ($info1 as $key => $value) { ?>
                                        <p class="card-text"><?= $value['keterangan']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Panduan masuk ke e-leaning</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-5 bg-secondary text-white">
                    <div class="image">
                        <img src="<?= base_url() ?>/book.png" class=" img-circle elevation-2 mt-3 ml-3" alt="User Image" style="height: 100px;">
                    </div>
                    <div id="accordion">
                        <div class="card card-white mt-3">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-toggle="collapse" data-card-widget="maximize" data-target="#bahasaIndonesia" aria-expanded="false" aria-controls="bahasaIndonesia">
                                        TUTORIAL E-LEARNING
                                    </button>
                                </h5>
                            </div>
                            <div id="bahasaIndonesia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body bg-info">
                                    <?php $i = 1;
                                    foreach ($info2 as $key => $value) { ?>
                                        <p class="card-text"><?= $value['keterangan']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Panduan belajar Online untuk siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-5 bg-secondary text-white">
                    <div class="image">
                        <img src="<?= base_url() ?>/user.jpg" class=" img-circle elevation-2 mt-3 ml-3" alt="User Image" style="height: 100px;">
                        <div id="accordion">
                            <div class="card card-white mt-3">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn collapsed" data-toggle="collapse" data-card-widget="maximize" data-target="#bahasaIndonesia" aria-expanded="false" aria-controls="bahasaIndonesia">
                                            USER PROBLEMS
                                        </button>
                                    </h5>
                                </div>
                                <div id="bahasaIndonesia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body bg-info">
                                        <?php $i = 1;
                                        foreach ($info3 as $key => $value) { ?>
                                            <p class="card-text"><?= $value['keterangan']; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Panduan masalah seputar akun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kontak" class="kontak">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h2>ABOUT US</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card text-dark bg-white mb-3 text-center">
                    <div class="card-header">
                        <h5 class="card-title">MEDIA SOSIAL</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <a href="">
                                    <img src="<?= base_url() ?>/facebook.svg" class=" img-circle elevation-2 " alt="User Image" style="height: 75px;">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="">
                                    <img src="<?= base_url() ?>/instagram.png" class=" img-circle elevation-2 " alt="User Image" style="height: 75px;">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="">
                                    <img src="<?= base_url() ?>/twitter.svg" class=" img-circle elevation-2 " alt="User Image" style="height: 75px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <ul class="list-group mb-5">
                    <li class="list-group-item">
                        <h1>CONTACT US</h1>
                    </li>
                    <li class="list-group-item"> <i class="fas fa-map-marker-alt"> - Parigi Mekar, Kec. Ciseeng, Bogor, Jawa Barat 16120, Jawa Barat </i></li>
                    <li class="list-group-item"> <i class="fas fa-envelope"> - yusufachmad009@gmail.com</i> </li>
                    <li class="list-group-item"> <i class="fas fa-phone"> - 0896-3879-9197</i></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>