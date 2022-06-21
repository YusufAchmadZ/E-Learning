<?= $this->extend('auth/template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card o-hidden  border-0 shadow-lg my-5 ">
                <div class="card-body ">
                    <div class="card-header bg-dark">
                        <div class="text-center">
                            <h1 class="h4 text-success-900 mb-1">INFORMASI ONLINE LEARNING </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 ">
                            <div class="card mt-3 ml-4">
                                <div class="p-4">
                                    <h5 class="text-tittle text-center bg-success">MTS AL-Ittidahiyah</h5>
                                    <p class="login-box-msg"> Guna Mengupayakan pemberian layanan Online Learning yang optimal selama masa Pandemi Corona. <br>
                                        <br> Silahkan klik tombol di samping ini sesuai dengan "Kebutuhan" anda saat ini
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="p-4">
                                <div class="text-center">
                                    <a href="<?= base_url('auth/login'); ?>" class="btn btn-app  btn-block"><i class="fas fa-user-graduate"></i> Siswa</a>
                                    <a href="<?= base_url('auth/login_guru') ?>" class="btn btn-app  btn-block"><i class="fas fa-chalkboard-teacher"></i> Guru</a>
                                    <a href="<?= base_url('auth/login_admin') ?>" class="btn btn-app  btn-block"><i class="fas fa-user-cog"> </i>Admin</a>
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