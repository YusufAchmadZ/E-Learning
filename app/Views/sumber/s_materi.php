<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> <?= session()->getFlashdata('success') ?> </strong>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><?= $tittle; ?></h3>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="<?= base_url('sumber/tambah_materi') ?>" class="btn btn-primary btn-sm me-md-2 mb-2"><i class="">Tambah Data Materi</i> </a>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#kelasa" data-toggle="tab">Kelas 7</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#kelasb" data-toggle="tab">Kelas 8</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#kelasc" data-toggle="tab">Kelas 9</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="kelasa">
                                                <div class="col-sm-12">
                                                    <table id="example" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering no: activate to sort column descending">No</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Pelajaran: activate to sort column ascending">Nama Pelajaran</th>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($sumbera as $key => $value) { ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?= $i++; ?></td>
                                                                    <td><?= $value['pelajaran']; ?></td>
                                                                    <td>
                                                                        <a class="btn btn-primary btn-sm" href="<?= base_url('sumber/s_detail/' . $value['id_sumber']) ?>">
                                                                            <i class="fas fa-folder">
                                                                            </i>
                                                                            Masuk
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="kelasb">
                                                <div class="col-sm-12">
                                                    <table id="example" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering no: activate to sort column descending">No</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Pelajaran: activate to sort column ascending">Nama Pelajaran</th>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($sumberb as $key => $value) { ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?= $i++; ?></td>
                                                                    <td><?= $value['pelajaran']; ?></td>
                                                                    <td>
                                                                        <a class="btn btn-primary btn-sm" href="<?= base_url('sumber/s_detail/' . $value['id_sumber']) ?>">
                                                                            <i class="fas fa-folder">
                                                                            </i>
                                                                            Masuk
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="kelasc">
                                                <div class="col-sm-12">
                                                    <table id="example" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering no: activate to sort column descending">No</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Pelajaran: activate to sort column ascending">Nama Pelajaran</th>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($sumberc as $key => $value) { ?>
                                                                <tr role="row" class="odd">
                                                                    <td><?= $i++; ?></td>
                                                                    <td><?= $value['pelajaran']; ?></td>
                                                                    <td>
                                                                        <a class="btn btn-primary btn-sm" href="<?= base_url('sumber/s_detail/' . $value['id_sumber']) ?>">
                                                                            <i class="fas fa-folder">
                                                                            </i>
                                                                            Masuk
                                                                        </a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>