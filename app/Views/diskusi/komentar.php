<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-secondary"></div>
                <div class="card-body">
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="<?= base_url() ?>/template/dist/img/avatar5.png" alt="user image">
                            <span class="username">
                                <?= $guru['nis'] ?> - <?= $guru['nama_siswa'] ?>
                            </span>
                            <span class="description"><?= $guru['date'] ?> </span>
                        </div>
                        <p>
                            <?= $guru['isi_komen']; ?>
                        </p>
                    </div>
                </div>
                <div class="card-header bg-secondary"></div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('diskusi/tambah_komen') ?>" method="POST">
                        <input hidden type="text" class="form-control" name="kode_postingan" id="kode_postingan" value="<?= $guru['kode_postingan']; ?>">
                        <input hidden type="text" class="form-control" name="nig" id="nig" value="<?= session()->get('nig') ?>">
                        <input hidden type="text" class="form-control" name="kode_balas" id="kode_balas" value="<?= $guru['kode_postingan'] ?><?= $guru['id_komentar'] ?>">
                        <div class="row">
                            <div class="form-group">
                                <label for="">Tulis Komentar :</label>
                                <textarea class="form-control" name="isi_komen" id="isi_komen" cols="140" rows="5" placeholder="Maksimum 3000 kata ...."></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4"></div>
                                <div class="col-4">
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