<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-tittle"><?= $tittle; ?>
                        <?= csrf_field(); ?>
                    </h3>
                </div>
                <form role="form" action="<?= base_url('home/update/' . $home['id_home']); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="gambarLama" value="<?= $home['gambar'] ?>">
                        <input type="hidden" name="judul" value="<?= $home['judul'] ?>">
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-1 col-form-label">Sampul :</label>
                            <div class="col-sm-6">
                                <img src="<?= base_url('img_home/' . $home['gambar']); ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-4">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('home/index') ?>" class="btn btn-secondary ">Close</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>