<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card-header">Pesan ke guru : @<?= $pesan['nama_guru'] ?></div>
                            <div class="card-body">

                                <form role="form" action="<?= base_url('home/tambah_pesan/' . $pesan['id_guru']) ?>" method="post">
                                    <div class="form-group">
                                        <input hidden type="text" class="form-control" id="nis" name="nis" value="<?= session()->get('nis') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input hidden type="text" class="form-control" id="kode_guru" name="kode_guru" value="<?= $pesan['kode_guru'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pesan">Pesan </label>
                                        <textarea name="pesan" class="form-control" id="" cols="85" rows="5" placeholder="Tuliskan Pesan dengan Baik dan Sopan"></textarea>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="<?= base_url('home/daftar_guru') ?>" class="btn btn-block btn-secondary"> Kembali</a>
                                            </div>
                                            <div class="col-4"></div>
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-block btn-primary">Kirim Pesan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>