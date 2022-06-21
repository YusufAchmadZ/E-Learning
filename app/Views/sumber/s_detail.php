<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> <?= session()->getFlashdata('success') ?> </strong>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $tittle; ?></h3>
                </div>
                <div class="card-body">
                    <?php if (session()->get('active') == 1) { ?>
                        <div class="d-grid gap-4 d-md-flex  mb-1 ">
                            <a href="<?= base_url('sumber/tambah_materi') ?>" class="btn btn-primary btn-sm  ">Tambah Sumber Materi</a>
                        </div>
                    <?php } ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Bab</th>
                                <th>Tahun</th>
                                <?php if (session()->get('active') == 1) { ?>
                                    <th>Opsi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($s_detail as $key => $value) { ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['judul']; ?></td>
                                    <td><?= $value['bab_sumber']; ?></td>
                                    <td><?= $value['tahun']; ?></td>
                                    <?php if (session()->get('active') == 1) { ?>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="<?= base_url('sumber/edit_data/' . $value['id_data']) ?>">
                                                <i class="fas fa-edit">
                                                </i>
                                            </a>
                                            <form action="<?= base_url('sumber/delete/' . $value['id_data']) ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    <?php } ?>
                                </tr>
                                <tr class="expandable-body d-none">
                                    <td colspan="5">
                                        <p style="display: none;">
                                            <embed src="<?= base_url('file_sumber/' . $value['data']) ?>" type="application/pdf" width="980" height="900">
                                        </p>
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