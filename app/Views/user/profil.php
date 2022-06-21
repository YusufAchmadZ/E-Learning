<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>


<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 mt-5">
                <img src="<?= base_url() ?>/template/dist/img/siswa.png" class=" img-circle elevation-2" alt="User Image" style="width: 230px; height: 230px;">
            </div>
            <div class="col-8">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Data Berhasil
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <table id="example" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                    <thead>

                        <tr>
                            <th class="" width="174px">Nomor Induk Siswa :</th>
                            <td class=""> <?= session()->get('nis') ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">Nama :</th>
                            <td class=""> <?= session()->get('nama_siswa') ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">No Hp :</th>
                            <td class=""><?= session()->get('hp_siswa') ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">Kelas :</th>
                            <td class=""><?php if (session()->get('kelas') == 7) {
                                                echo 'Kelas 7';
                                            } else if (session()->get('kelas') == 8) {
                                                echo 'Kelas 08';
                                            } else if (session()->get('kelas') == 9) {
                                                echo 'Kelas 09';
                                            } ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="" width="174px">Email :</th>
                            <td class=""><?= session()->get('email_siswa') ?></td>
                        </tr>

                        <tr>
                            <th class="" width="174px">Nilai :</th>
                            <td class="">
                                <a href="<?= base_url('user/nilai/' . session()->get('id_siswa')) ?>" class="btn btn-sm btn-info">
                                    <i class=""> Lihat</i>
                                </a>
                            </td>
                        </tr>
                    </thead>
                </table>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12"> <a href="<?= base_url('user/e_siswa/' . session()->get('id_siswa')) ?>" class="btn btn-warning">
                                <i class=""> Edit Profil</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>