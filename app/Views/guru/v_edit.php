<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Profil Guru</h3>
                    <?= csrf_field(); ?>
                </div>
                <form role="form" action="<?= base_url('guru/update/' . $guru['id_guru']); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="gambarLama" value="<?= $guru['gambar'] ?>">
                        <?php if (session()->get('active') == 2) { ?>
                            <div class="form-group">
                                <label for="nig">NIP</label>
                                <select class="form-control" id="nig" name="nig">
                                    <option selected value="<?= $guru['nig'] ?>"><?= $guru['nig']; ?> </option>
                                </select>
                            </div>
                        <?php } ?>
                        <?php if (session()->get('active') == 2) { ?>
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="kode_guru">Kode Mata Pelajaran</label>
                                        <select class="form-control" id="kode_guru" name="kode_guru">
                                            <option selected value="<?= $guru['kode_guru'] ?>">Mata Pelajaran ... </option>
                                            <?php if (session()->get('kode_guru') == 1) { ?>
                                                <option value="1">Bahasa Indonesia </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 2) { ?>
                                                <option value="2">Sejarah Kebudayaan Islam </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 3) { ?>
                                                <option value="3">Matematika </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 4) { ?>
                                                <option value="4">Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 5) { ?>
                                                <option value="5">Bahasa Arab </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 6) { ?>
                                                <option value="6">Fikih </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 7) { ?>
                                                <option value="7">Aqidah Akhlak</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 8) { ?>
                                                <option value="8">Qur'an Hadits </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 9) { ?>
                                                <option value="9"> big07 - Bahasa Inggris </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 10) { ?>
                                                <option value="10">Ilmu Pengetahuan Alam </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 11) { ?>
                                                <option value="11">Ilmu Pengetahuan Sosial </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 12) { ?>
                                                <option value="12">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 13) { ?>
                                                <option value="13">Teknologi Informasi dan Komunikasi</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 14) { ?>
                                                <option value="14">Seni dan Budaya </option>
                                            <?php } ?>
                                            <!-- Kelas 8 -->
                                            <?php if (session()->get('kode_guru') == 21) { ?>
                                                <option value="21">Bahasa Indonesia </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 22) { ?>
                                                <option value="22">Sejarah Kebudayaan Islam </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 23) { ?>
                                                <option value="23">Matematika </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 24) { ?>
                                                <option value="24">Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 25) { ?>
                                                <option value="25">Bahasa Arab </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 26) { ?>
                                                <option value="26">Fikih </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 27) { ?>
                                                <option value="27">Aqidah Akhlak</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 28) { ?>
                                                <option value="28">Qur'an Hadits </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 29) { ?>
                                                <option value="29"> big07 - Bahasa Inggris </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 30) { ?>
                                                <option value="30">Ilmu Pengetahuan Alam </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 31) { ?>
                                                <option value="31">Ilmu Pengetahuan Sosial </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 32) { ?>
                                                <option value="32">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 33) { ?>
                                                <option value="33">Teknologi Informasi dan Komunikasi</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 34) { ?>
                                                <option value="34">Seni dan Budaya </option>
                                            <?php } ?>
                                            <!-- Kelas 9 -->
                                            <?php if (session()->get('kode_guru') == 41) { ?>
                                                <option value="41">Bahasa Indonesia </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 42) { ?>
                                                <option value="42">Sejarah Kebudayaan Islam </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 43) { ?>
                                                <option value="43">Matematika </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 44) { ?>
                                                <option value="44">Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 45) { ?>
                                                <option value="45">Bahasa Arab </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 46) { ?>
                                                <option value="46">Fikih </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 47) { ?>
                                                <option value="47">Aqidah Akhlak</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 48) { ?>
                                                <option value="48">Qur'an Hadits </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 49) { ?>
                                                <option value="49"> big07 - Bahasa Inggris </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 50) { ?>
                                                <option value="50">Ilmu Pengetahuan Alam </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 51) { ?>
                                                <option value="51">Ilmu Pengetahuan Sosial </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 52) { ?>
                                                <option value="52">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 53) { ?>
                                                <option value="53">Teknologi Informasi dan Komunikasi</option>
                                            <?php } ?>
                                            <?php if (session()->get('kode_guru') == 54) { ?>
                                                <option value="54">Seni dan Budaya </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama_guru">Nama</label>
                                    <input value="<?= $guru['nama_guru'] ?>" type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="no_hp">Handphone</label>
                                    <input value="<?= $guru['no_hp'] ?>" type="text" class="form-control" id="no_ho" name="no_hp" placeholder="Masukkan Nomor Handphone" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value="<?= $guru['email'] ?>" type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                                </div>
                            </div>
                            <?php if (session()->get('active') == 2) { ?>
                                <div class="col-sm-4">
                                    <div class="form-group"><label for="kelas">Kelas</label>
                                        <select class="form-control" name="kelas" id="kelas">
                                            <option selected value="<?= $guru['kelas'] ?>">Pilih Kelas ..</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-1 col-form-label">Foto :</label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('img_guru/' . $guru['gambar']); ?>" class="img-thumbnail img-preview">
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
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Re-Password</label>
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Masukkan Ulang Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-4">
                                <?php if (session()->get('active') == 1) { ?>
                                    <a href="<?= base_url('home/index'); ?>" class="btn btn-secondary btn-block">Kembali</a>
                                <?php } ?>
                                <?php if (session()->get('active') == 2) { ?>
                                    <a href="<?= base_url('guru/g_profil'); ?>" class="btn btn-secondary btn-block">Kembali</a>
                                <?php } ?>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>