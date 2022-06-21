<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#pesanMasuk" data-toggle="tab">Pesan Masuk</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#pesanKeluar" data-toggle="tab">Pesan Keluar</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="pesanMasuk">
                                        <div class="card-body p-0">
                                            <table class="table table-bordered table-hover">
                                                <?php $i = 1;
                                                foreach ($send as $key => $value) { ?>
                                                    <tbody>
                                                        <tr data-widget="expandable-table" aria-expanded="false">
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $value['nama_guru'] ?></td>
                                                            <td><?= $value['date'] ?></td>
                                                        </tr>
                                                        <tr class="expandable-body d-none">
                                                            <td colspan="5">
                                                                <p style="display: none;" class="mt-2">
                                                                    <?= $value['pesan_guru'] ?>
                                                                </p>
                                                                <p class="float-right">
                                                                    <a href="<?= base_url('home/pesan/' . $value['id_guru']) ?>" class="btn btn-primary btn-sm">Balas </a>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pesanKeluar">
                                        <div class="card-body p-0">
                                            <table class="table table-bordered table-hover">
                                                <?php $i = 1;
                                                foreach ($inbox as $key => $value) { ?>
                                                    <tbody>
                                                        <tr data-widget="expandable-table" aria-expanded="false">
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $value['nama_guru'] ?></td>
                                                            <td><?= $value['date'] ?></td>
                                                        </tr>
                                                        <tr class="expandable-body d-none">
                                                            <td colspan="5">
                                                                <p style="display: none;">
                                                                    <?= $value['pesan'] ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
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