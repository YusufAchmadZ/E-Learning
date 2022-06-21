<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('sumber/save_detail'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul" class="col-sm-2">Judul </label>
                            <input type="text" class="form-control col-sm-12" id="judul" name="judul" placeholder="Masukkan Judul Materi">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="kode_sumber">Materi</label>
                                    <select class="form-control " name="kode_sumber" id="kode_sumber">
                                        <option>Mata Pelajaran ...</option>
                                        <option value="bar07">Kelas 7 -- Bahasa Arab </option>
                                        <option value="ski07">Kelas 7 -- Sejarah Kebudayaan Islam </option>
                                        <option value="aak07">Kelas 7 -- Aqidah Akhlak </option>
                                        <option value="fkh07">Kelas 7 -- Fiqih </option>
                                        <option value="qhs07">Kelas 7 -- Qur'an Hadits </option>
                                        <option value="big07">Kelas 7 -- Bahasa Inggris </option>
                                        <option value="bia07">Kelas 7 -- Bahasa Indonesia </option>
                                        <option value="mtk07">Kelas 7 -- Matematika </option>
                                        <option value="pkn07">Kelas 7 -- Pendidikan Pancasila dan Kewarganegaraan </option>
                                        <option value="ipa07">Kelas 7 -- Ilmu Pengetahuan Alam </option>
                                        <option value="ips07">Kelas 7 -- Ilmu Pengetahuan Sosial </option>
                                        <option value="pjo07">Kelas 7 -- Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="tik07">Kelas 7 -- Teknik Komputer dan Jaringan </option>
                                        <option value="sba07">Kelas 7 -- Seni Budaya </option>
                                        <option value="">__________________ Kelas 8 ___________________</option>
                                        <option value="bar08">Kelas 8 -- Bahasa Arab </option>
                                        <option value="ski08">Kelas 8 -- Sejarah Kebudayaan Islam </option>
                                        <option value="aak08">Kelas 8 -- Aqidah Akhlak </option>
                                        <option value="fkh08">Kelas 8 -- Fiqih </option>
                                        <option value="qhs08">Kelas 8 -- Qur'an Hadits </option>
                                        <option value="big08">Kelas 8 -- Bahasa Inggris </option>
                                        <option value="bia08">Kelas 8 -- Bahasa Indonesia </option>
                                        <option value="mtk08">Kelas 8 -- Matematika </option>
                                        <option value="pkn08">Kelas 8 -- Pendidikan Pancasila dan Kewarganegaraan </option>
                                        <option value="ipa08">Kelas 8 -- Ilmu Pengetahuan Alam </option>
                                        <option value="ips08">Kelas 8 -- Ilmu Pengetahuan Sosial </option>
                                        <option value="pjo08">Kelas 8 -- Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="tik08">Kelas 8 -- Teknik Komputer dan Jaringan </option>
                                        <option value="sba08">Kelas 8 -- Seni Budaya </option>
                                        <option value="">__________________ Kelas 9 ___________________</option>
                                        <option value="bar09">Kelas 9 -- Bahasa Arab </option>
                                        <option value="ski09">Kelas 9 -- Sejarah Kebudayaan Islam </option>
                                        <option value="aak09">Kelas 9 -- Aqidah Akhlak </option>
                                        <option value="fkh09">Kelas 9 -- Fiqih </option>
                                        <option value="qhs09">Kelas 9 -- Qur'an Hadits </option>
                                        <option value="big09">Kelas 9 -- Bahasa Inggris </option>
                                        <option value="bia09">Kelas 9 -- Bahasa Indonesia </option>
                                        <option value="mtk09">Kelas 9 -- Matematika </option>
                                        <option value="pkn09">Kelas 9 -- Pendidikan Pancasila dan Kewarganegaraan </option>
                                        <option value="ipa09">Kelas 9 -- Ilmu Pengetahuan Alam </option>
                                        <option value="ips09">Kelas 9 -- Ilmu Pengetahuan Sosial </option>
                                        <option value="pjo09">Kelas 9 -- Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="tik09">Kelas 9 -- Teknik Komputer dan Jaringan </option>
                                        <option value="sba09">Kelas 9 -- Seni Budaya </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kode_sumber'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="bab_sumber">Bab</label>
                                    <select class="form-control" name="bab_sumber">
                                        <option>Bab ...</option>
                                        <option value="1">Bab - 1</option>
                                        <option value="2">Bab - 2</option>
                                        <option value="3">Bab - 3</option>
                                        <option value="4">Bab - 4</option>
                                        <option value="5">Bab - 5</option>
                                        <option value="6">Bab - 6</option>
                                        <option value="7">Bab - 7</option>
                                        <option value="8">Bab - 8</option>
                                        <option value="9">Bab - 9</option>
                                        <option value="10">Bab - 10</option>
                                        <option value="11">Bab - 11</option>
                                        <option value="12">Bab - 12</option>
                                        <option value="13">Bab - 13</option>
                                        <option value="14">Bab - 14</option>
                                        <option value="15">Bab - 15</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('bab_sumber'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="tahun">Tanggal</label>
                                    <input class="form-control" type="date" id="tahun" name="tahun">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="data" class="col-sm-1 col-form-label">Materi :</label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('file_sumber/file.png'); ?>" class="img-thumbnail img-preview">
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
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>