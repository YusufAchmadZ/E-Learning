<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $tittle; ?></h3>
                    <?= csrf_field(); ?>
                </div>
                <form role="form" action="<?= base_url('siswa/update/' . $siswa['id_siswa']); ?>" method="post" enctype="">
                    <div class="card-body">
                        <?php if (session()->get('active') == 1) { ?>
                            <div class="form-group">
                                <label for="nis">Nis</label>
                                <input value="<?= $siswa['nis'] ?>" type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan Nomor Induk Siswa" required>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nama_siswa">Nama</label>
                                    <input value="<?= $siswa['nama_siswa'] ?>" type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                        </div>
                        <?php if (session()->get('active') == 1) { ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group"><label for="kelas">Kelas</label>
                                        <select class="form-control" name="kelas">
                                            <option selected><?= $siswa['kelas'] ?></option>
                                            <option value="k07">Kelas 7</option>
                                            <option value="k08">Kelas 8</option>
                                            <option value="k09">Kelas 9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><label for="level">Sub Kelas</label>
                                        <select class="form-control" name="level">
                                            <option selected><?= $siswa['level'] ?></option>
                                            <option value="k07a">Kelas 7A</option>
                                            <option value="k07b">Kelas 7B</option>
                                            <option value="k07c">Kelas 7C</option>
                                            <option value="k08a">Kelas 8A</option>
                                            <option value="k08b">Kelas 8B</option>
                                            <option value="k08c">Kelas 8C</option>
                                            <option value="k09a">Kelas 9A</option>
                                            <option value="k09b">Kelas 9B</option>
                                            <option value="k09c">Kelas 9C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="hp_siswa">No Hp</label>
                                    <input value="<?= $siswa['hp_siswa'] ?>" type="text" class="form-control" id="hp_siswa" name="hp_siswa" placeholder="Masukkan Nomor Handphone" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email_siswa">Email</label>
                                    <input value="<?= $siswa['email_siswa'] ?>" type="email" class="form-control" id="email_siswa" name="email_siswa" placeholder="Masukkan Email" required>
                                </div>
                            </div>
                        </div>


                        <div class="card-footer">
                            <a href="<?= base_url('siswa/data/' . $siswa['id_siswa']); ?>" class="btn btn-secondary"> Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>