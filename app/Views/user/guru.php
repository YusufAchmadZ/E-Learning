<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Pesan Sudah
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#kelasa" data-toggle="tab">Kelas 7</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kelasb" data-toggle="tab">Kelas 8</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kelasc" data-toggle="tab">Kelas 9</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="kelasa">
                        <section class="content">
                            <div class="card card-solid">
                                <div class="card-body pb 0">
                                    <div class="row d-flex align-items-stretch">
                                        <?php $i = 1;
                                        foreach ($gurua as $key => $value) { ?>
                                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                <div class="card bg-light">
                                                    <div class="card-header text-muted text-left border-bottom-0">
                                                        <?= $value['pelajaran'] ?>
                                                    </div>
                                                    <div class="card-body pt-0 text-left">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <h2 class="lead"><b><?= $value['nama_guru'] ?></b></h2>
                                                                <p class="text-muted text-sm"><b>NIG: </b> <?= $value['nig'] ?> </p>
                                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <?= $value['email'] ?></li>
                                                                    <li class="small"><span class="fa-li"><i class="fas fa-phone"></i></span> <?= $value['no_hp'] ?></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-5 text-center">
                                                                <img src="<?= base_url('img_guru/' . $value['gambar']) ?>" alt="user-avatar" class="img-circle img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <?php if (session()->get('kelas') == 7) { ?>
                                                            <div class="text-right">
                                                                <a href="<?= base_url('home/pesan/' . $value['id_guru']) ?>" class="btn btn-lg btn-outline-primary"><i class="fa fa-envelope"> </i></a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="kelasb">
                        <section class="content">
                            <div class="card card-solid">
                                <div class="card-body pb 0">
                                    <div class="row d-flex align-items-stretch">
                                        <?php $i = 1;
                                        foreach ($gurub as $key => $value) { ?>
                                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                <div class="card bg-light">
                                                    <div class="card-header text-muted text-left border-bottom-0">
                                                        <?= $value['pelajaran'] ?>
                                                    </div>
                                                    <div class="card-body pt-0 text-left">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <h2 class="lead"><b><?= $value['nama_guru'] ?></b></h2>
                                                                <p class="text-muted text-sm"><b>NIG: </b> <?= $value['nig'] ?> </p>
                                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <?= $value['email'] ?></li>
                                                                    <li class="small"><span class="fa-li"><i class="fas fa-phone"></i></span> <?= $value['no_hp'] ?></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-5 text-center">
                                                                <img src="<?= base_url('img_guru/' . $value['gambar']) ?>" alt="user-avatar" class="img-circle img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <?php if (session()->get('kelas') == 8) { ?>
                                                            <div class="text-right">
                                                                <a href="#" class="btn btn-lg btn-outline-primary "><i class="fa fa-envelope"> </i></a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane" id="kelasc">
                        <section class="content">
                            <div class="card card-solid">
                                <div class="card-body pb 0">
                                    <div class="row d-flex align-items-stretch">
                                        <?php $i = 1;
                                        foreach ($guruc as $key => $value) { ?>
                                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                <div class="card bg-light">
                                                    <div class="card-header text-muted text-left border-bottom-0">
                                                        <?= $value['pelajaran'] ?>
                                                    </div>
                                                    <div class="card-body pt-0 text-left">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <h2 class="lead"><b><?= $value['nama_guru'] ?></b></h2>
                                                                <p class="text-muted text-sm"><b>NIG: </b> <?= $value['nig'] ?> </p>
                                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <?= $value['email'] ?></li>
                                                                    <li class="small"><span class="fa-li"><i class="fas fa-phone"></i></span> <?= $value['no_hp'] ?></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-5 text-center">
                                                                <img src="<?= base_url('img_guru/' . $value['gambar']) ?>" alt="user-avatar" class="img-circle img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <?php if (session()->get('kelas') == 9) { ?>
                                                            <div class="text-right">
                                                                <a href="#" class="btn btn-lg btn-outline-primary "><i class="fa fa-envelope"> </i></a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>