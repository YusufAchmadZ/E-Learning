<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="<?= base_url('img_guru/' . $status['gambar']) ?>" alt="user image">
                            <span class="username">
                                <?= $status['nama_guru'] ?>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description"><?= $status['date']; ?> </span>
                        </div>
                        <p>
                            <?= $status['isi']; ?>
                        </p>
                        <p>
                        <div class="card-footer">
                            <span class="float-right">
                                <a href="" class="link-black text-sm" data-toggle="modal" data-target="#modalKomen">
                                    <i class="far fa-comment mr-1"></i> Komentar
                                </a>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-cols-sm-1">
        <div class="col-sm">
            <?php $i = 1;
            foreach ($komen as $key => $value) { ?>
                <div class="card card-success">
                    <div class="card-body">
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?= base_url() ?>/template/dist/img/avatar5.png" alt="user image">
                                <span class="username">
                                    <?= $value['nis'] ?> - <?= $value['nama_siswa'] ?>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description"><?= $value['date'] ?> </span>
                            </div>
                            <p>
                                <?= $value['isi_komen']; ?>
                            </p>
                            <p>
                                <span class="float-right">
                                    <?php if (session()->get('active') == 2) { ?>
                                        <a href="" class="link-black text-sm" data-toggle="modal" data-target="#modalBalas">
                                            <i class="far fa-comments mr-1"></i> Balas
                                        </a>
                                    <?php } ?>
                                    <?php if (session()->get('active') == 3) { ?>
                                        <a href="" class="link-black text-sm" data-toggle="modal" data-target="#modalKomen">
                                            <i class="far fa-comment mr-1"></i> Komentar
                                        </a>
                                    <?php } ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <?php $i = 1;
        foreach ($guru as $key => $guru) { ?>
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?= base_url('img_guru/' . $guru['gambar']) ?>" alt="user image">
                                <span class="username">
                                    <?= $guru['nama_guru'] ?>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description"><?= $guru['date'] ?> </span>
                            </div>
                            <p>
                                <?= $guru['isi_komen']; ?>
                            </p>
                            <p>
                                <span class="float-right">
                                    <?php if (session()->get('active') == 2) { ?>
                                        <a href="" class="link-black text-sm" data-toggle="modal" data-target="#modalBalas">
                                            <i class="far fa-comments mr-1"></i> Balas
                                        </a>
                                    <?php } ?>
                                    <?php if (session()->get('active') == 3) { ?>
                                        <a href="<?= base_url('diskusi/komen_siswa/' . $guru['id_komentar']) ?>" class="link-black text-sm">
                                            <i class="far fa-comment mr-1"></i> Komentar
                                        </a>
                                    <?php } ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="row-cols-sm-1">
        <div class="col-sm">
            <?php $i = 1;
            foreach ($balas as $key => $balas) { ?>
                <div class="card ">
                    <div class="card-body">
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?= base_url() ?>/template/dist/img/avatar5.png" alt="user image">
                                <span class="username">
                                    <?= $balas['nis'] ?> - <?= $balas['nama_siswa'] ?>
                                </span>
                                <span class="description"><?= $balas['date'] ?> </span>
                            </div>
                            <p>
                                <?= $balas['isi_balas']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalKomen">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Balas Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('diskusi/tambah_komen_siswa') ?>" method="POST">
                    <input hidden type="text" class="form-control" name="kode_postingan" id="kode_postingan" value="<?= $status['kode_postingan']; ?>">
                    <input hidden type="text" class="form-control" name="nis" id="nis" value="<?= session()->get('nis') ?>">
                    <div class="form-group">
                        <label for="">Tulis Komentar :</label>
                        <textarea name="isi_komen" id="isi_komen" cols="105" rows="5" placeholder="Maksimum 3000 kata ...."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>