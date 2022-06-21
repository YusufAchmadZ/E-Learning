<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-tittle"><?= $tittle; ?>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('guru/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nig">NIP</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nig')) ? 'is-invalid' : ''; ?>" id="nig" name="nig" placeholder="Masukkan Nomor Induk Guru" autofocus value="<?= old('nig'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nig'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="nama_guru">Nama</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_guru')) ? 'is-invalid' : ''; ?>" id="nama_guru" name="nama_guru" placeholder="Masukkan Nama" value="<?= old('nama_guru'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_guru'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group"><label for="gender">Jenis Kelamin :</label>
                                        <select class="form-control" name="gender">
                                            <option></option>
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group"><label for="jabatan">Jabatan</label>
                                        <select class="form-control" name="jabatan">
                                            <option value="Guru">Guru</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="">Mata Pelajaran</label>
                                        <select class="form-control" id="kode_mapel" name="kode_mapel">
                                            <option>Pilih Mata Pelajaran --</option>
                                            <option value="k07bar">Kelas 07 -- Bahasa Arab </option>
                                            <option value="k07ski">Kelas 07 -- Sejarah Kebudayaan Islam </option>
                                            <option value="k07aak">Kelas 07 -- Aqidah Akhlak </option>
                                            <option value="k07fkh">Kelas 07 -- Fikih </option>
                                            <option value="k07qhs">Kelas 07 -- Qur'an Hadits</option>
                                            <option value="k07bia">Kelas 07 -- Bahasa Indonesia </option>
                                            <option value="k07big">Kelas 07 -- Bahasa Inggris </option>
                                            <option value="k07mtk">Kelas 07 -- Matematika</option>
                                            <option value="k07pjo">Kelas 07 -- Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                            <option value="k07ipa">Kelas 07 -- Ilmu Pengetahuan Alam</option>
                                            <option value="k07ips">Kelas 07 -- Ilmu Pengetahuan Sosial</option>
                                            <option value="k07pkn">Kelas 07 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="k07tik">Kelas 07 -- Teknik Ilmu Komputer</option>
                                            <option value="k07sba">Kelas 07 -- Seni dan Budaya</option>
                                            <option value=""> ------------------------------------------------</option>
                                            <option value="k08bar">Kelas 08 -- Bahasa Arab </option>
                                            <option value="k08ski">Kelas 08 -- Sejarah Kebudayaan Islam </option>
                                            <option value="k08aak">Kelas 08 -- Aqidah Akhlak </option>
                                            <option value="k08fkh">Kelas 08 -- Fikih </option>
                                            <option value="k08qhs">Kelas 08 -- Qur'an Hadits</option>
                                            <option value="k08bia">Kelas 08 -- Bahasa Indonesia </option>
                                            <option value="k08big">Kelas 08 -- Bahasa Inggris </option>
                                            <option value="k08mtk">Kelas 08 -- Matematika</option>
                                            <option value="k08pjo">Kelas 08 -- Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                            <option value="k08ipa">Kelas 08 -- Ilmu Pengetahuan Alam</option>
                                            <option value="k08ips">Kelas 08 -- Ilmu Pengetahuan Sosial</option>
                                            <option value="k08pkn">Kelas 08 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="k08tik">Kelas 08 -- Teknik Ilmu Komputer</option>
                                            <option value="k08sba">Kelas 08 -- Seni dan Budaya</option>
                                            <option value=""> -------------------------------------------------</option>
                                            <option value="k09bar">Kelas 09 -- Bahasa Arab </option>
                                            <option value="k09ski">Kelas 09 -- Sejarah Kebudayaan Islam </option>
                                            <option value="k09aak">Kelas 09 -- Aqidah Akhlak </option>
                                            <option value="k09fkh">Kelas 09 -- Fikih </option>
                                            <option value="k09qhs">Kelas 09 -- Qur'an Hadits</option>
                                            <option value="k09bia">Kelas 09 -- Bahasa Indonesia </option>
                                            <option value="k09big">Kelas 09 -- Bahasa Inggris </option>
                                            <option value="k09mtk">Kelas 09 -- Matematika</option>
                                            <option value="k09pjo">Kelas 09 -- Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                            <option value="k09ipa">Kelas 09 -- Ilmu Pengetahuan Alam</option>
                                            <option value="k09ips">Kelas 09 -- Ilmu Pengetahuan Sosial</option>
                                            <option value="k09pkn">Kelas 09 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="k09tik">Kelas 09 -- Teknik Ilmu Komputer</option>
                                            <option value="k09sba">Kelas 09 -- Seni dan Budaya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="no_hp">No Hp</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone" value="<?= old('no_hp'); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= old('email'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gambar" class="col-sm-1 col-form-label">Foto :</label>
                                <div class="col-sm-2">
                                    <img src="<?= base_url('img_guru/default.jpg'); ?>" class="img-thumbnail img-preview">
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
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('guru/v_guru'); ?>" class="btn btn-secondary"> Tidak</a>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>