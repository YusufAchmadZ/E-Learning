<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card-header">Pesan Kepada @<?= $siswa['nama_siswa'] ?></div>
                            <div class="card-body">

                                <form role="form" action="<?= base_url('pesan/tambah_pesan/' . $siswa['id_siswa']) ?>" method="post">
                                    <div hidden class="form-group">
                                        <input hidden type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis'] ?>">
                                    </div>
                                    <div hidden class="form-group">
                                        <input hidden type="text" class="form-control" id="kode_guru" name="kode_guru" value="<?= session()->get('kode_guru'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pesan">Pesan </label>
                                        <textarea name="pesan_guru" class="form-control" id="" cols="85" rows="5" placeholder="Tuliskan Pesan disini ..."></textarea>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="<?= base_url('pesan/masuk/' . session()->get('id_guru')) ?>" class="btn btn-block btn-secondary"> Kembali</a>
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