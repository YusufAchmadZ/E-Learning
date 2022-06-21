<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-gradient-info">
                    <h5 class=" text-center card-tittle">Forum <?= $tittle; ?></h5>
                </div>
                <div class="card-body">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pelajaran</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($kuiss as $key => $value) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $value['pelajaran'] ?></td>
                                    <td> <?= $value['date'] ?></td>
                                    <td>
                                        <a href="<?= base_url('user/pertanyaan/' . $value['id_tugas']) ?>" class="btn btn-outline-info"> Masuk</a>
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