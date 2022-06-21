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
                <form role="form" action="<?= base_url('kelas/update_a/' . $kelasa['id_mapel']); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group"><label for="kode_kelas">Kelas</label>
                                    <select class="form-control" name="kode_kelas">
                                        <option value="k07">Kelas 7</option>
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
                                        <option value="k07bar">Kelas 7 --Bahasa Arab </option>
                                        <option value="k07ski">Kelas 7 -- Sejarah Kebudayaan Islam </option>
                                        <option value="k07aak">Kelas 7 -- Aqidah Akhlak</option>
                                        <option value="k07fqh">Kelas 7 -- Fikih </option>
                                        <option value="k07qhs">Kelas 7 -- Qur'an Hadits </option>

                                        <option value="k07bia">Kelas 7 -- Bahasa Indonesia </option>
                                        <option value="k07big">Kelas 7 -- Bahasa Inggris </option>
                                        <option value="k07mtk">Kelas 7 -- Matematika </option>
                                        <option value="k07pjo">Kelas 7 -- Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="k07ipa">Kelas 7 -- Ilmu Pengetahuan Alam </option>
                                        <option value="k07ips">Kelas 7 -- Ilmu Pengetahuan Sosial </option>
                                        <option value="k07pkn">Kelas 7 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <option value="k07tkj">Kelas 7 -- Teknik Komputer dan Jaringan</option>
                                        <option value="k07sba">Kelas 7 -- Seni dan Budaya </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('kelas/kelasa/') ?>" class="btn btn-secondary ">Tidak</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>