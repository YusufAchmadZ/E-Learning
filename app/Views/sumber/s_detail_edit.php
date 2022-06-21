<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                    <?= csrf_field(); ?>
                </div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('sumber/update_data/' . $detail['id_data']); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="dataLama" value="<?= $detail['data']; ?>">
                        <div class="form-group">
                            <label for="judul" class="col-sm-2">Judul </label>
                            <input value="<?= $detail['judul']; ?>" type="text" class="form-control col-sm-12" id="judul" name="judul">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="kode_sumber">Materi</label>
                                    <input value="<?= $detail['kode_sumber']; ?>" class="form-control " name="kode_sumber" id="kode_sumber" readonly>

                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kode_sumber'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="bab_sumber">Bab</label>
                                    <input value="<?= $detail['bab_sumber']; ?>" class="form-control" type="text" id="bab_sumber" name="bab_sumber">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('bab_sumber'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="tahun">Tanggal</label>
                                    <input value="<?= $detail['tahun']; ?>" class="form-control" type="date" id="tahun" name="tahun">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="data" class="col-sm-1 col-form-label">Materi :</label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('file_sumber/' . $detail['data']); ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('data')) ? 'is-invalid' : ''; ?>" id="data" name="data" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('data'); ?>
                                    </div>
                                    <label class="custom-file-label" for="data">Maksimal 18 MB ..</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('sumber/s_materi'); ?>" class="btn btn-secondary"> Tidak</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>