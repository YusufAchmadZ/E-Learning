<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?> </h5>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Materi Berhasil
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <?php if (session()->get('active') == 2) { ?>
                        <div class="d-grid gap-4 d-md-flex  mb-1  ">
                            <a href="<?= base_url('materi/tambah_materi') ?>" class="btn btn-primary btn-sm ">Tambah Materi</a>
                        </div>
                    <?php } ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertemuan</th>
                                <th>Judul</th>
                                <th>Download</th>
                                <?php if (session()->get('active') == 2) { ?>
                                    <th>Opsi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($materi as $key => $value) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['forum'] ?></td>
                                    <td><?= $value['judul']; ?></td>
                                    <td><a href="<?= base_url('materi/v_file/' . $value['id_data_materi']) ?>" class="btn btn-secondary btn-sm"><i class="fa fa-file-download"></i></a></td>
                                    <?php if (session()->get('active') == 2) { ?>
                                        <td>
                                            <form action="<?= base_url('materi/' . $value['id_data_materi']) ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="<?= base_url('materi/edit_materi/' . $value['id_data_materi']) ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>