<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Pertemuan</th>
                                <th>Diskusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($posting as $key => $value) { ?>
                                <tr class="text-center">
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['forum'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('diskusi/diskusi/' . $value['id_posting']) ?>" class="btn btn-outline-info"><i class="fas fa-comments"></i></a>
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