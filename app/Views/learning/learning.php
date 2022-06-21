<div class="container">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $tittle; ?></h3>
                        <div class="d-grid gap-4 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('sumber/s_materi'); ?>" class="btn btn-outline-info "><i class="fa fa-book-reader"> Sumber</i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pelajaran</th>
                                            <th>Kuis</th>
                                            <th>Materi</th>
                                            <th>Diskusi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($learninga as $key => $value) { ?>
                                            <tr data-widget="table" aria-expanded="false">
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['pelajaran']; ?></td>
                                                <td> <a href="<?= base_url('kelas/v_kuis/' . $value['id_kuis']) ?>" class="btn btn-outline-info ">
                                                        <i class="fa fa-question-circle"></i>
                                                    </a></td>
                                                <td>
                                                    <a href="<?= base_url('materi/v_materi/' . $value['id_materi']) ?>" class="btn btn-outline-info"><i class="fa fa-book-open"></i></a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('diskusi/v_diskusi') ?>" class="btn  btn-outline-info"><i class="fa fa-comments"></i></a>
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#modalHapusA" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                                                    <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
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
        <div class="row">
            <div class="col-12 mt-3 text-center">
                <p class="lead">
                    <a href="contact-us.html">MTS AL-Ittihadiyah</a>,
                    Learning Technology System Arsitektur<br>
                </p>
            </div>
        </div>
    </section>
</div>