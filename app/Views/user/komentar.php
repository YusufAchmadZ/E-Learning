<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-success"></div>
                <div class="card-body">
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="<?= base_url() ?>/template/dist/img/avatar5.png" alt="user image">
                            <span class="username">
                                <?= $siswa['nig'] ?> - <?= $siswa['nama_guru'] ?>
                            </span>
                            <span class="description"><?= $siswa['date'] ?> </span>
                        </div>
                        <p>
                            <?= $siswa['isi_komen']; ?>
                        </p>
                    </div>
                </div>
                <div class="card-header bg-success"></div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('diskusi/tambah_balas') ?>" method="POST">
                        <input hidden type="text" class="form-control" name="nis" id="nis" value="<?= session()->get('nis') ?>">
                        <input hidden type="text" class="form-control" name="kode_balas" id="kode_balas" value="<?= $siswa['kode_balas'] ?>">
                        <div class="row">
                            <div class="form-group">
                                <label for="">Tulis Komentar :</label>
                                <textarea class="form-control" name="isi_balas" id="isi_balas" cols="145" rows="5" placeholder="Maksimum 3000 kata ...."></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>