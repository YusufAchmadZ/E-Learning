<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title"><?= $tittle; ?></h1>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>Data Berhasil
                            <strong> <?= session()->getFlashdata('success') ?> </strong>
                        </div>
                    <?php endif; ?>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 550px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelajaran</th>
                                <th>Sumber</th>
                                <th>Kuis</th>
                                <th>Materi</th>
                                <th class="text-center">Diskusi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($kelasa as $key => $value) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['pelajaran']; ?></td>
                                    <td>
                                        <a href="<?= base_url('sumber/s_detail/' . $value['id_sumber']) ?>" class="btn btn-outline-info"><i class="fa fa-book"></i></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('kuis/kuis/' . $value['id_kuis']) ?>" class="btn btn-outline-info"><i class="fa fa-question-circle"></i></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('materi/v_materi/' . $value['id_materi']) ?>" class="btn btn-outline-info"><i class="fa fa-book-open"></i></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('diskusi/v_diskusia/' . $value['id_diskusi']) ?>" class="btn  btn-outline-info"><i class="fa fa-comments"> A</i></a>
                                        <a href="<?= base_url('diskusi/v_diskusib/' . $value['id_diskusi']) ?>" class="btn  btn-outline-info"><i class="fa fa-comments"> B</i></a>
                                        <a href="<?= base_url('diskusi/v_diskusic/' . $value['id_diskusi']) ?>" class="btn  btn-outline-info"><i class="fa fa-comments"> C</i></a>
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