<?= $this->extend('auth/template/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card o-hidden border-0 shadow-lg my-5 ">
                <div class="card-body p-0 ">
                    <div class="card-header bg-primary">
                        <div class="text-center">
                            <h1 class="h4 text-success-900 mb-1">Login Siswa</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mt-3 ml-4">
                                <div class="p-4">
                                    <h5 class="text-tittle text-center bg-info">INFORMASI</h5>
                                    <ul>
                                        <li>Harus sudah terdaftar dari pihak sekolah</li>
                                        <li>NIS dan Password dapat diperoleh dari sekolah</li>
                                        <li>Jika tidak bisa login hubungi wali kelas</li>
                                        <li>Lupa Password hubungi wali kelas</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-5">
                                <div class="register-box">
                                    <?php
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                <?php foreach ($errors as $error) : ?>
                                                    <li><?= esc($error) ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if (session()->getFlashdata('pesan')) {
                                        echo '<div class="alert alert-success" role="alert">';
                                        echo session()->getFlashdata('pesan');
                                        echo '</div>';
                                    } ?>
                                    <?php
                                    echo form_open('auth/cek_login');
                                    ?>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nis" class="form-control" placeholder="Masukkan Nomor Induk Siswa">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-id-card"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="<?= base_url('auth/index') ?>" class="btn btn-secondary btn-block">Kembali</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection() ?>