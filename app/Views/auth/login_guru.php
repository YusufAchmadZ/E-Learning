<?= $this->extend('auth/template/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5 ">
                <div class="card-body p-0 ">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="register-box">
                                    <p class="login-box-msg">Login Guru</p>
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
                                    echo form_open('auth/cek_guru');
                                    ?>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nig" class="form-control" placeholder="Masukkan Nomor Induk Guru">
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
                                        <div class="col-12">
                                            <div class="icheck-primary">
                                                <p>* Jika tidak bisa login hubungin Admin</p>
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