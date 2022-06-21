<div class="container">

    <div class="card bg-light card-info mb-3">
        <div class="card-header">
            <?= $tittle; ?>
        </div>
        <div class="card-body">
            <h5 class="card-tittle"></h5>
            <table id="example" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                <thead>
                    <?php $i = 1;
                    foreach ($data as $key => $value) { ?>
                        <tr>
                            <th class="" width="174px">Nis :</th>
                            <td class=""><?= $value['nis'] ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">Nama :</th>
                            <td class=""><?= $value['nama_siswa'] ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">Jenis Kelamin :</th>
                            <td class=""><?= $value['gender'] ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">No Hp :</th>
                            <td class=""><?= $value['hp_siswa'] ?></td>
                        </tr>
                        <tr>
                            <th class="" width="174px">Email :</th>
                            <td class=""><?= $value['email_siswa'] ?></td>
                        </tr>
                </thead>
            </table>
            <div class="card-footer float-right">
                <a href="<?= base_url('siswa/v_edit/' . $value['id_siswa']) ?>" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="<?= base_url('siswa/delete/' . $value['id_siswa']) ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        <?php } ?>
        </div>
    </div>
</div>