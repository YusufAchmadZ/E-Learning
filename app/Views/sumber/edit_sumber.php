<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $tittle; ?></h3>
                </div>
                <form role="form" action="<?= base_url('sumber/update_Sumber/' . $sumber['id_sumber']); ?>" method="post" enctype="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Guru </label>
                                    <input value="<?= $sumber['nama_guru'] ?>" type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group"><label for="kode_kelas">Kelas</label>
                                    <select class="form-control" name="kode_kelas">
                                        <option>-- Pilih Kelas --</option>
                                        <option value="k07">Kelas 7</option>
                                        <option value="k08">Kelas 8</option>
                                        <option value="k09">Kelas 9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group"><label for="kode_pelajaran">Pelajaran</label>
                                    <select class="form-control" name="kode_pelajaran">
                                        <option>-- Pilih Mata Pelajaran --</option>
                                        <option value="bar">Bahasa Arab </option>
                                        <option value="ski">Sejarah Kebudayaan Islam </option>
                                        <option value="aak">Aqidah Akhlak </option>
                                        <option value="fkh">Fiqih </option>
                                        <option value="qhs">Qur'an Hadits </option>
                                        <option value="">----------------------------------------------------</option>
                                        <option value="big">Bahasa Inggris </option>
                                        <option value="bia">Bahasa Indonesia </option>
                                        <option value="mtk">Matematika </option>
                                        <option value="pkn">Pendidikan Pancasila dan Kewarganegaraan </option>
                                        <option value="ipa">Ilmu Pengetahuan Alam </option>
                                        <option value="ips">Ilmu Pengetahuan Sosial </option>
                                        <option value="pjo">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="tkj">Teknik Komputer dan Jaringan </option>
                                        <option value="sba">Seni Budaya </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('sumber/s_materi') ?>" class="btn btn-secondary">Tidak</a>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>