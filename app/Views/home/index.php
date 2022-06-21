<div class="container">
    <div class="col">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>Data Berhasil
                <strong> <?= session()->getFlashdata('success') ?> </strong>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <p>Guru</p>
                    </div>
                    <div class="icon note-icon-align-justify">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="" class="small-box-footer" data-toggle="modal" data-target="#modalGuru">Detail </a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <p>Siswa</p>
                    </div>
                    <div class="icon note-icon-align-justify">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="" class="small-box-footer" data-toggle="modal" data-target="#modalSiswa">Detail </a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Informasi</p>
                    </div>
                    <div class="icon note-icon-align-justify">
                        <i class="fas fa-info"></i>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalInfo">Detail </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-row card-default bg-white">
                    <div class="card-header bg-secondary mb-2">
                        <h3 class="card-title">
                            Mata Pelajaran
                        </h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('kelas/kelasa') ?>">
                            <div class="info-box mb-3 bg-green">
                                <span class="info-box-icon"><i class="fas fa-book-open" style="color:white"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kelas 7</span>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('kelas/kelasb') ?>">
                            <div class="info-box mb-3 bg-yellow">
                                <span class="info-box-icon"><i class="fas fa-book-open" style="color:white"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kelas 8</span>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('kelas/kelasc') ?>">
                            <div class="info-box mb-3 bg-red">
                                <span class="info-box-icon"><i class="fas fa-book-open" style="color:white"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kelas 9</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <div class="d-grid gap-4 d-md-flex justify-content-md">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#modalEdit">
                                    Edit Sampul
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
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
                                        <img class="d-block w-100" style="height: 285px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="First slide">
                                    </div>
                                <?php } ?>
                                <?php $i = 1;
                                foreach ($index2 as $key => $value) { ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" style="height: 285px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="Second slide">
                                    </div>
                                <?php } ?>
                                <?php $i = 1;
                                foreach ($index3 as $key => $value) { ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" style="height: 285px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="Third slide">
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
            </div>

        </div>
    </div>
</div>




<!-- Modal Detail -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php $i = 1;
                    foreach ($detail as $key => $value) { ?>
                        <tbody>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['judul']; ?></td>
                                <td><?= $value['gambar']; ?></td>
                                <td> <a href="<?= base_url('home/edit_home/' . $value['id_home']) ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> </i></a></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Edit Informasi -->
<div class="modal fade" id="modalInfo">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $tittle_info; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <?php $i = 1;
                            foreach ($d_info as $key => $info) { ?>
                                <tbody>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $info['judul'] ?></td>
                                        <td><?= $info['keterangan'] ?></td>
                                        <td> <a href="<?= base_url('home/edit_info/' . $info['id_info']) ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> </i></a></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Guru -->
<div class="modal fade" id="modalGuru">
    <div class="modal-dialog modal-xl modal-static" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-header p-2">
                    <div class=" float-right">
                        <a href="<?= base_url('auth/register_guru') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
                    </div>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#kelasa" data-toggle="tab">Kelas 7</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kelasb" data-toggle="tab">Kelas 8</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kelasc" data-toggle="tab">Kelas 9</a></li>
                    </ul>
                </div>
                <?= $validation->listErrors(); ?>
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
                                                        <div class="text-right">
                                                            <form action="<?= base_url('guru/' . $value['id_guru']) ?>" method="post" class="d-inline">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash-alt"></i></button>
                                                            </form>
                                                            <a href="<?= base_url('guru/v_edit/' . $value['id_guru']) ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> </i></a>
                                                        </div>
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
                                                        <div class="text-right">
                                                            <form action="<?= base_url('guru/' . $value['id_guru']) ?>" method="post" class="d-inline">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash-alt"></i></button>
                                                            </form>
                                                            <a href="<?= base_url('guru/v_edit/' . $value['id_guru']) ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> </i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
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
                                                        <div class="text-right">
                                                            <form action="<?= base_url('guru/' . $value['id_guru']) ?>" method="post" class="d-inline">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash-alt"></i></button>
                                                            </form>
                                                            <a href="<?= base_url('guru/v_edit/' . $value['id_guru']) ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> </i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Siswa -->
<div class="modal fade" id="modalSiswa">
    <div class="modal-dialog modal-xl modal-static" role=" document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class=" float-right">
                            <a href="<?= base_url('auth/register') ?>" class="btn btn-primary btn-sm">Tambah Siswa</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kelas as $key => $value) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value['nama_kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('siswa/d_kelas/' . $value['id_kelas']); ?>" class="btn btn-info btn-sm">Masuk</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>