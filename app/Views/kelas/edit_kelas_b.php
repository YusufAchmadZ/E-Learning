<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $tittle; ?></h3>
                    <?= csrf_field(); ?>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?= base_url('kelas/update_b/' . $kelasb['id_mapel']); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group"><label for="kode_kelas">Kelas</label>
                                    <select class="form-control" name="kode_kelas">
                                        <option value="k08">Kelas 8</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Pelajaran</label>
                                    <select class="form-control" id="kode_pelajaran" name="kode_pelajaran">
                                        <option>-- Pilih Mata Pelajaran --</option>
                                        <option value="bar">Bahasa Arab </option>
                                        <option value="ski">Sejarah Kebudayaan Islam </option>
                                        <option value="aak">Aqidah Akhlak </option>
                                        <option value="fqh">Fikih </option>
                                        <option value="qhs">Qur'an Hadits</option>
                                        <option value="bia">Bahasa Indonesia </option>
                                        <option value="big">Bahasa Inggris </option>
                                        <option value="mtk">Matematika</option>
                                        <option value="pjo">Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                        <option value="ipa">Ilmu Pengetahuan Alam</option>
                                        <option value="ips">Ilmu Pengetahuan Sosial</option>
                                        <option value="pkn">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <option value="tkj">Teknik Komputer dan Jaringan</option>
                                        <option value="sba">Seni dan Budaya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Kode Mata Pelajaran</label>
                                    <select class="form-control" id="kode_mapel" name="kode_mapel">
                                        <option>-- Pilih Kode --</option>
                                        <option value="k08bar">Kelas 8 --Bahasa Arab </option>
                                        <option value="k08ski">Kelas 8 -- Sejarah Kebudayaan Islam </option>
                                        <option value="k08aak">Kelas 8 -- Aqidah Akhlak</option>
                                        <option value="k08fqh">Kelas 8 -- Fikih </option>
                                        <option value="k08qhs">Kelas 8 -- Qur'an Hadits </option>

                                        <option value="k08bia">Kelas 8 -- Bahasa Indonesia </option>
                                        <option value="k08big">Kelas 8 -- Bahasa Inggris </option>
                                        <option value="k08mtk">Kelas 8 -- Matematika </option>
                                        <option value="k08pjo">Kelas 8 -- Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="k08ipa">Kelas 8 -- Ilmu Pengetahuan Alam </option>
                                        <option value="k08ips">Kelas 8 -- Ilmu Pengetahuan Sosial </option>
                                        <option value="k08pkn">Kelas 8 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <option value="k08tkj">Kelas 8 -- Teknik Komputer dan Jaringan</option>
                                        <option value="k08sba">Kelas 8 -- Seni dan Budaya </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('kelas/kelasb/') ?>" class="btn btn-secondary ">Tidak</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>