<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-secondary">
                <div class="card-header">
                    <h5 class="card-tittle text-center">Daftar Materi</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Pertemuan</th>
                                <th>Judul</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($materi as $key => $value) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['forum'] ?></td>
                                    <td><?= $value['judul']; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('materi/file/' . $value['id_data_materi']) ?>" class="btn btn-outline-info"><i class="fas fa-download"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>