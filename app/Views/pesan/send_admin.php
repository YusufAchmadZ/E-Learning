<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card-header">Pesan Kepada @<?= $guru['nama_guru'] ?></div>
                            <div class="card-body">

                                <form role="form" action="<?= base_url('pesan/tambah_pesan_guru/' . $guru['id_guru']) ?>" method="post">
                                    <div hidden class="form-group">
                                        <input type="text" class="form-control" id="kode_guru" name="kode_guru" value="<?= $guru['kode_guru'] ?>">
                                    </div>
                                    <div hidden class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= session()->get('email'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pesan">Pesan </label>
                                        <textarea name="pesan_admin" class="form-control" id="" cols="85" rows="5" placeholder="Tuliskan Pesan disini ..."></textarea>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="<?= base_url('pesan/admin/' . session()->get('id')) ?>" class="btn btn-block btn-secondary"> Kembali</a>
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