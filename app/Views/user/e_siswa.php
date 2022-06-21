<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $tittle; ?></h3>
                    <?= csrf_field(); ?>
                </div>
                <form role="form" action="<?= base_url('siswa/update_user/' . $siswa['id_siswa']); ?>" method="post" enctype="">
                    <div class="card-body">
                        <?php if (session()->get('active') == 1) { ?>
                            <div class="form-group">
                                <label for="nis">Nis</label>
                                <select class="form-control" id="nis" name="nis">
                                    <option selected value="<?= $siswa['nis'] ?>"><?= $siswa['nis'] ?></option>
                                </select>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-12">
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
                                        <select class="form-control" name="kelas" id="kelas">
                                            <option selected value="<?= $siswa['kelas'] ?>"><?= $siswa['kelas'] ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><label for="level">Sub Kelas</label>
                                        <select class="form-control" name="level" id="level">
                                            <option selected value="<?= $siswa['level'] ?>"><?= $siswa['level'] ?></option>
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
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Re-Password</label>
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Masukkan Ulang Password">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-3">
                                    <a href="<?= base_url('user/profil') ?>" class="btn btn-secondary btn-block"> Cancel</a>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-3"></div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>