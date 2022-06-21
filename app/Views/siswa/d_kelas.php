<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><?= $tittle; ?></h5>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>Data Siswa Berhasil
                            <strong> <?= session()->getFlashdata('success') ?> </strong>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#kelasa" data-toggle="tab">Kelas A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#kelasb" data-toggle="tab">Kelas B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#kelasc" data-toggle="tab">Kelas C</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kelasa">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($kelasa as $key => $value) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nis']; ?></td>
                                                <td>
                                                    <?= $value['nama_siswa']; ?>
                                                </td>
                                                <td>
                                                    <?= $value['nama_kelas'] ?>
                                                </td>
                                                <td>
                                                    <?php if (session()->get('active') == 2) { ?>
                                                        <a href="<?= base_url('siswa/t_nilai/' . $value['id_siswa']) ?>" class="btn btn-sm btn-success">Tambah Nilai</a>
                                                    <?php } ?>
                                                    <?php if (session()->get('active') == 1) { ?>
                                                        <a href="<?= base_url('siswa/edit_nilai/' . $value['id_siswa']) ?>" class="btn btn-sm btn-info">Lihat Nilai</a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="kelasb">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($kelasb as $key => $value) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nis']; ?></td>
                                                <td>
                                                    <?= $value['nama_siswa']; ?>
                                                </td>
                                                <td>
                                                    <?= $value['nama_kelas'] ?>
                                                </td>
                                                <td>
                                                    <?php if (session()->get('active') == 2) { ?>
                                                        <a href="<?= base_url('siswa/t_nilai/' . $value['id_siswa']) ?>" class="btn btn-sm btn-success">Tambah Nilai</a>
                                                    <?php } ?>
                                                    <?php if (session()->get('active') == 1) { ?>
                                                        <a href="<?= base_url('siswa/edit_nilai/' . $value['id_siswa']) ?>" class="btn btn-sm btn-info">Lihat Nilai</a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="kelasc">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($kelasc as $key => $value) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nis']; ?></td>
                                                <td>
                                                    <?= $value['nama_siswa']; ?>
                                                </td>
                                                <td>
                                                    <?= $value['nama_kelas'] ?>
                                                </td>
                                                <td>
                                                    <?php if (session()->get('active') == 2) { ?>
                                                        <a href="<?= base_url('siswa/t_nilai/' . $value['id_siswa']) ?>" class="btn btn-sm btn-success">Tambah Nilai</a>
                                                    <?php } ?>
                                                    <?php if (session()->get('active') == 1) { ?>
                                                        <a href="<?= base_url('siswa/edit_nilai/' . $value['id_siswa']) ?>" class="btn btn-sm btn-info">Lihat Nilai</a>
                                                    <?php } ?>
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