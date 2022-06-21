<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Data
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <div class="d-grid gap-2 mt-3 d-md-flex justify-content-md ml-4">
                    <a href="<?= base_url('siswa/tambah_siswa'); ?>" class="btn btn-primary">
                        Tambah Data Siswa
                    </a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Kelas</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($kelas as $key => $value) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['nama_kelas']; ?></td>
                                    <td><a href="<?= base_url('siswa/d_kelas/' . $value['id_kelas']); ?>" class="btn btn-info">Masuk</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>