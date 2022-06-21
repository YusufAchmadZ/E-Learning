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
                <form role="form" action="<?= base_url('kelas/update_c/' . $kelasc['id_mapel']); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group"><label for="kode_kelas">Kelas</label>
                                    <select class="form-control" name="kode_kelas">
                                        <option value="k09">Kelas 9</option>
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
                                        <option value="k09bar">Kelas 9 --Bahasa Arab </option>
                                        <option value="k09ski">Kelas 9 -- Sejarah Kebudayaan Islam </option>
                                        <option value="k09aak">Kelas 9 -- Aqidah Akhlak</option>
                                        <option value="k09fqh">Kelas 9 -- Fikih </option>
                                        <option value="k09qhs">Kelas 9 -- Qur'an Hadits </option>

                                        <option value="k09bia">Kelas 9 -- Bahasa Indonesia </option>
                                        <option value="k09big">Kelas 9 -- Bahasa Inggris </option>
                                        <option value="k09mtk">Kelas 9 -- Matematika </option>
                                        <option value="k09pjo">Kelas 9 -- Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <option value="k09ipa">Kelas 9 -- Ilmu Pengetahuan Alam </option>
                                        <option value="k09ips">Kelas 9 -- Ilmu Pengetahuan Sosial </option>
                                        <option value="k09pkn">Kelas 9 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <option value="k09tkj">Kelas 9 -- Teknik Komputer dan Jaringan</option>
                                        <option value="k09sba">Kelas 9 -- Seni dan Budaya </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('kelas/kelasc/') ?>" class="btn btn-secondary ">Tidak</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>