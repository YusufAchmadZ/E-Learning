<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="card card-info">
        <div class="card-header">
            <h5 class="card-tittle text-center">Daftar Nilai</h5>
        </div>
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table id="example1" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajran</th>
                            <th>KKM</th>
                            <th>Nilai</th>
                            <th>Grade</th>
                            <th width="200px">Catatan </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($nilai as $key => $value) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $value['pelajaran']; ?></td>
                                <td><?= $value['kkm']; ?></td>
                                <td><?= $value['nilai']; ?></td>
                                <td><?= $value['grade']; ?></td>
                                <td><?= $value['catatan']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>