<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Siswa</h3>
                    <form action="save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Data Siswa Berhasil
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <form role="form" action="<?= base_url('siswa/save'); ?>" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nis">Nis :</label>
                                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan Nomor Induk Siswa" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nama_siswa">Nama :</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin :</label>
                                    <select class="form-control" name="gender">
                                        <option>Choose ...</option>
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"><label for="kode_kelas">Kelas :</label>
                                    <select class="form-control" name="kode_kelas">
                                        <option>Choose ...</option>
                                        <option value="k07">Kelas 7</option>
                                        <option value="k08">Kelas 8</option>
                                        <option value="k09">Kelas 9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="sub_kelas">Sub Kelas :</label>
                                    <select class="form-control" name="sub_kelas">
                                        <option>Choose ...</option>
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
                        <div class="form-group">
                            <label for="hp_siswa">No Hp :</label>
                            <input type="text" class="form-control" id="hp_siswa" name="hp_siswa" placeholder="Masukkan Nomor Handphone" required>
                        </div>
                        <div class="form-group">
                            <label for="email_siswa">Email :</label>
                            <input type="email" class="form-control" id="email_siswa" name="email_siswa" placeholder="Masukkan Email" required>
                        </div>
                        <div class="card-footer float-right">
                            <a href="<?= base_url('siswa/kelas'); ?>" class="btn btn-secondary">Cancel </a>
                            <button type="submit" class="btn btn-primary">Lanjut</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>