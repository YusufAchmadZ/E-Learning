<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle"></h5>
                    <?= csrf_field(); ?>
                </div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('materi/update_materi/' . $materi['id_data_materi']); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="dataLama" value="<?= $materi['data']; ?>">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">Pertemuan :</label>
                                    <select class="form-control" name="kode_forum" id="kode_forum">
                                        <option disabled><?= $materi['kode_forum'] ?></option>
                                        <option value="p1"> 1 </option>
                                        <option value="p2"> 2 </option>
                                        <option value="p3"> 3 </option>
                                        <option value="p4"> 4 </option>
                                        <option value="p5"> 5 </option>
                                        <option value="p6"> 6 </option>
                                        <option value="p7"> 7 </option>
                                        <option value="p8"> 8 </option>
                                        <option value="p9"> 9 </option>
                                        <option value="p10"> 10 </option>
                                        <option value="p11"> 11 </option>
                                        <option value="p12"> 12 </option>
                                        <option value="p13"> 13 </option>
                                        <option value="p14"> 14 </option>
                                        <option value="p15"> 15 </option>
                                        <option value="p16"> 16 </option>
                                        <option value="p17"> 17 </option>
                                        <option value="p18"> 18 </option>
                                        <option value="p19"> 19 </option>
                                        <option value="p20"> 20 </option>
                                        <option value="p21"> 21 </option>
                                        <option value="p22"> 22 </option>
                                        <option value="p23"> 23 </option>
                                        <option value="p24"> 24 </option>
                                        <option value="p25"> 25 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="judul">Judul Materi :</label>
                                    <input type="text" value="<?= $materi['judul']; ?>" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul materi" required>
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Pelajaran :</label>
                            <input type="text" value="<?= $materi['kode_data']; ?>" class="form-control" id="kode_data" name="kode_data" readonly>

                        </div>
                        <div class="form-group row">
                            <label for="data" class="col-sm-1 col-form-label">Materi :</label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('file_materi/' . $materi['data']); ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('data')) ? 'is-invalid' : ''; ?>" id="data" name="data" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('data'); ?>
                                    </div>
                                    <label class="custom-file-label" for="data">Maks 5000 kb</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>