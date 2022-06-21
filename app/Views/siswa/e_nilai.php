<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <?= csrf_field(); ?>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#modalNilai">
                        Public Nilai
                    </button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>KKM</th>
                                <th>Nilai</th>
                                <th>Grade</th>
                                <th>Catatan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <?php $i = 1;
                        foreach ($edit as $key => $value) { ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $value['pelajaran'] ?></td>
                                    <td><?= $value['kkm'] ?></td>
                                    <td><?= $value['nilai'] ?></td>
                                    <td><?= $value['grade'] ?></td>
                                    <td><?= $value['catatan'] ?></td>
                                    <td>
                                        <form action="<?= base_url('siswa/delete_nilai/' . $value['id_nilai']) ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fas fa-trash"></i></button>
                                        </form>
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

<!-- Modal -->
<div class="modal fade" id="modalNilai">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Public Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" action="<?= base_url('siswa/tambah_nilai'); ?>" method="post">
                <div class="modal-body">
                    <label for="kode_nilai">Nama Siswa</label>
                    <select class="form-control" id="nis" name="nis">
                        <option selected value="<?= $public['nis'] ?>"><?= $public['nama_siswa'] ?></option>
                    </select>
                    <div class="form-group">
                        <label for="kode_nilai">Nis</label>
                        <select class="form-control" id="kode_nilai" name="kode_nilai">
                            <option selected value="k07<?= $public['nis'] ?>"><?= $public['nis'] ?></option>
                        </select>
                    </div>
                    <span class="text-danger">*Public nilai membuat daftar nilai ini akan dapat dilihat oleh siswa tersebut</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Public</button>
                </div>
            </form>
        </div>
    </div>
</div>