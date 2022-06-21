<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-solid">
                <div class="card-header">
                    <h3 class="card-title"><?= $tittle; ?></h3>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('guru/tambah_guru') ?>" type="button" class="btn btn-sm btn-outline-primary btn-mid-2">
                            <i class="fa fa-plus"> Tambah Data</i>
                        </a>
                        <a href="<?= base_url('guru/tambah_user') ?>" type="button" class="btn btn-sm btn-outline-primary btn-mid-2">
                            Tambah User
                        </a>
                    </div>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>Data Guru Berhasil
                            <strong> <?= session()->getFlashdata('success') ?> </strong>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header p-2">
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
                                                    foreach ($guru1 as $key => $value) { ?>
                                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                            <div class="card bg-light">
                                                                <div class="card-header">
                                                                    <div class="text-left">
                                                                        <?= $value['fullname']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="card-header text-muted border-bottom-0">
                                                                    <h2 class="lead"><b> <?= $value['fullname']; ?> </b></h2>
                                                                </div>
                                                                <div class="card-body pt-0">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-address-card"></i></span> : <?= $value['username']; ?> </li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> : <?= $value['email']; ?> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3 text-center">
                                                                            <img src="<?= base_url('img_guru/' . $value['user_image']) ?>" alt="user-avatar" class="img-circle img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="text-right">
                                                                        <form action="" method="post" class="d-inline">
                                                                            <?= csrf_field(); ?>
                                                                            <input type="hidden" name="_method" value="DELETE">
                                                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash-alt"></i></button>
                                                                        </form>
                                                                        <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> </i></a>
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
                                                                <div class="card-header">
                                                                    <div class="text-left">
                                                                        <?= $value['jabatan']; ?> <?= $value['pelajaran']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="card-header text-muted border-bottom-0">
                                                                    NIP : <?= $value['nig']; ?>
                                                                </div>
                                                                <div class="card-body pt-0">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <h2 class="lead"><b> <?= $value['nama_guru']; ?> </b></h2>
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-badge"></i></span> : <?= $value['gender']; ?> </li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> : <?= $value['no_hp']; ?> </li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> : <?= $value['email']; ?> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3 text-center">
                                                                            <img src="<?= base_url('img_guru/' . $value['gambar']) ?>" alt="user-avatar" class="img-circle img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="text-right">
                                                                        <a href="#" class="btn btn-sm btn-primary">
                                                                            <i class="fas fa-user"></i> View Profile
                                                                        </a>
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
                                                                <div class="card-header">
                                                                    <div class="text-left">
                                                                        <?= $value['jabatan']; ?> <?= $value['pelajaran']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="card-header text-muted border-bottom-0">
                                                                    NIP : <?= $value['nig']; ?>
                                                                </div>
                                                                <div class="card-body pt-0">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <h2 class="lead"><b> <?= $value['nama_guru']; ?> </b></h2>
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-badge"></i></span> : <?= $value['gender']; ?> </li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> : <?= $value['no_hp']; ?> </li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> : <?= $value['email']; ?> </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3 text-center">
                                                                            <img src="<?= base_url('img_guru/' . $value['gambar']) ?>" alt="user-avatar" class="img-circle img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="text-right">
                                                                        <a href="#" class="btn btn-sm btn-primary">
                                                                            <i class="fas fa-user"></i> View Profile
                                                                        </a>
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
        </div>
    </div>
</div>