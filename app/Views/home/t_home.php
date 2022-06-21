<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-bod">
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="gambar" class="col-sm-1 col-form-label">Foto :</label>
                                <div class="col-sm-2">
                                    <img src="<?= base_url('img_home/' . $home['gambar']); ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar'); ?>
                                        </div>
                                        <label class="custom-file-label" for="gambar">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>