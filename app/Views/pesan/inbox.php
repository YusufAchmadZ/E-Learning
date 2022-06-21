<div class="container ">
    <div class="row">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <h4 class="card-header  text-center">Pesan Masuk</h4>
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
                                    foreach ($inbox as $key => $value) { ?>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nama_siswa'] ?></td>
                                                <td><?= $value['date'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('pesan/kirim_siswa/' . $value['id_siswa']) ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-reply"></i></a>
                                                    <form action="<?= base_url('pesan/delete_guru/' . $value['id_pesan']) ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="expandable-body d-none">
                                                <td colspan="5">
                                                    <p style="display: none;" class="mt-2">
                                                        <?= $value['pesan'] ?>
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
                                    foreach ($outbox as $key => $value) { ?>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?= $i++; ?></td>
                                                <td><?= $value['nama'] ?></td>
                                                <td><?= $value['date'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('pesan/kirim_admin/' . $value['id']) ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-reply"></i></a>
                                                    <form action="<?= base_url('pesan/delete_admin/' . $value['id_pesan_admin']) ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr class="expandable-body d-none">
                                                <td colspan="5">
                                                    <p style="display: none;">
                                                        <?= $value['pesan_admin'] ?>
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