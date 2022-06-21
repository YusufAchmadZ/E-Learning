<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-warning card-outline">
                    <h4 class="card-header bg-white text-center">Pesan Keluar</h4>
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#siswa" data-toggle="tab">Siswa</a></li>
                            <li class="nav-item"><a class="nav-link" href="#admin" data-toggle="tab">Admin</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="siswa">
                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <?php $i = 1;
                                    foreach ($keluar as $key => $value) { ?>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nama_siswa'] ?></td>
                                                <td><?= $value['date'] ?></td>
                                            </tr>
                                            <tr class="expandable-body d-none">
                                                <td colspan="5">
                                                    <p style="display: none;" class="mt-2">
                                                        <?= $value['pesan_guru'] ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="admin">
                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <?php $i = 1;
                                    foreach ($admin as $key => $value) { ?>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nama'] ?></td>
                                                <td><?= $value['date'] ?></td>
                                            </tr>
                                            <tr class="expandable-body d-none">
                                                <td colspan="5">
                                                    <p style="display: none;">
                                                        <?= $value['pesan_guru'] ?>
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