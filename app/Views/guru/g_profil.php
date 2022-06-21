<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>Data Guru Berhasil
                            <strong> <?= session()->getFlashdata('success') ?> </strong>
                        </div>
                    <?php endif; ?>
                    <div class="card-header">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle mt-2" src="<?= base_url() ?>/img_guru/<?= session()->get('gambar') ?>" alt="User profile picture">
                        </div>
                    </div>
                    <div class="card-body box-profile">
                        <div class="card-body">
                            <p class="text-muted">
                                <i class="far fa-user mr-1"></i> | <?= session()->get('nama_guru') ?>
                            </p>
                            <hr>
                            <p class="text-muted">
                                <i class="fas fa-id-card mr-1"></i> | <?= session()->get('nig') ?>
                            </p>
                            <hr>
                            <p class="text-muted">
                                <i class="fas fa-phone mr-1"></i> | <?= session()->get('no_hp') ?>
                            </p>
                            <hr>
                            <p class="text-muted">
                                <i class="fas fa-envelope-square mr-1"></i> | <?= session()->get('email') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-4">
                    <a href="<?= base_url('mapel/guru') ?>" class="btn btn-secondary btn-block"><b>Kembali</b></a>
                </div>
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="<?= base_url('guru/v_edit/' . session()->get('id_guru')) ?>" class="btn btn-warning btn-block"><b>Edit Profil</b></a>
                </div>
            </div>
        </div>
    </div>
</div>