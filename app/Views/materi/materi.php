<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('materi/save_materi'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">Pertemuan :</label>
                                    <select class="form-control" name="kode_forum" id="kode_forum">
                                        <option disabled>Perte ...</option>
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
                                        <option value="p26"> 26 </option>
                                        <option value="p27"> 27 </option>
                                        <option value="p28"> 28 </option>
                                        <option value="p29"> 29 </option>
                                        <option value="p29"> 29 </option>
                                        <option value="p30"> 30 </option>
                                        <option value="p31"> 31 </option>
                                        <option value="p32"> 32 </option>
                                        <option value="p33"> 33 </option>
                                        <option value="p34"> 34 </option>
                                        <option value="p35"> 35 </option>
                                        <option value="p36"> 36 </option>
                                        <option value="p37"> 37 </option>
                                        <option value="p38"> 38 </option>
                                        <option value="p39"> 39 </option>
                                        <option value="p40"> 40 </option>
                                        <option value="p41"> 41 </option>
                                        <option value="p42"> 42 </option>
                                        <option value="p43"> 43 </option>
                                        <option value="p44"> 44 </option>
                                        <option value="p45"> 45 </option>
                                        <option value="p46"> 46 </option>
                                        <option value="p47"> 47 </option>
                                        <option value="p48"> 48 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="judul">Judul Materi :</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul materi" required>
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Pelajaran :</label>
                            <select class="form-control" id="kode_data" name="kode_data">
                                <option disabled>Pilih Pelajar ...</option>
                                <?php if (session()->get('kode_guru') == 1) { ?>
                                    <option value="bia07">Bahasa Indonesia </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 2) { ?>
                                    <option value="ski07">Sejarah Kebudayaan Islam </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 3) { ?>
                                    <option value="mtk07">Matematika </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 4) { ?>
                                    <option value="pkn07">Pendidikan Pancasila dan Kewarganegaraan</option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 5) { ?>
                                    <option value="bar07">Bahasa Arab </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 6) { ?>
                                    <option value="fkh07">Fikih </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 7) { ?>
                                    <option value="aak07">Aqidah Akhlak</option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 8) { ?>
                                    <option value="qhs07">Qur'an Hadits </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 9) { ?>
                                    <option value="big07"> big07 - Bahasa Inggris </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 10) { ?>
                                    <option value="ipa07">Ilmu Pengetahuan Alam </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 11) { ?>
                                    <option value="ips07">Ilmu Pengetahuan Sosial </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 12) { ?>
                                    <option value="pjo07">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 13) { ?>
                                    <option value="tik07">Teknologi Informasi dan Komunikasi</option>
                                <?php } ?>
                                <?php if (session()->get('kode_guru') == 14) { ?>
                                    <option value="sba07">Seni dan Budaya </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="data" class="col-sm-1 col-form-label">Materi :</label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('file_materi/file.png'); ?>" class="img-thumbnail img-preview">
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