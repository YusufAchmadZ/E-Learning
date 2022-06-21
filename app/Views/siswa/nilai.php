<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-info">
                <div class="card-header">
                    <h5><?= $tittle; ?></h5>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Data Berhasil
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="" class="btn btn-sm btn-primary ml-2">Tambah Pelajaran</a>
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Pelajran</th>
                                                    <th>KKM</th>
                                                    <th>Nilai</th>
                                                    <th>Grade</th>
                                                    <th width="200px">Catatan </th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($nilai as $key => $value) { ?>
                                                    <tr role="" class="">
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $value['pelajaran'] ?></td>
                                                        <td><?= $value['kkm']; ?></td>
                                                        <td><?= $value['nilai']; ?></td>
                                                        <td><?= $value['grade']; ?></td>
                                                        <td><?= $value['catatan']; ?></td>
                                                        <td>
                                                            <a href="<?= base_url('siswa/edit_nilai/' . $value['id_nilai']) ?>" class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i> </a>
                                                            <form action="<?= base_url('siswa/delete_nilai/' . $value['id_nilai']) ?>" method="post" class="d-inline">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                                                            </form>
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



<div class="modal fade" id="modalTambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form role="form" action="<?= base_url('siswa/tambah_nilai') ?>" method="post">
                            <div class="row">
                                <div class="form-group">
                                    <label for="">Mata Pelajaran :</label>
                                    <select name="pelajaran" id="pelajaran" class="form-control">
                                        <option value="Bahasa Arab">Bahasa Arab</option>
                                        <option value="Sejarah Kebudayaan Islam">Sejarah Kebudayaan Islam</option>
                                        <option value="Aqidah Ahlak">Aqidah Ahlak</option>
                                        <option value="Fiqih">Fiqih</option>
                                        <option value="Qur'an Hadits">Qur'an Hadits</option>
                                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                                        <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                                        <option value="Pendidikan Jasmani dan Olahraga">Pendidikan Jasmani dan Olahraga</option>
                                        <option value="Ilmu Teknik Komputer">Ilmu Teknik Komputer</option>
                                        <option value="Seni Budaya">Seni Budaya</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="nis" id="nis" value="">
                            <input type="hidden" class="form-control" name="kkm" id="kkm" value="0">
                            <input type="hidden" class="form-control" name="nilai" id="nilai" value="0">
                            <input type="hidden" class="form-control" name="grade" id="grade" value="0">
                            <input type="hidden" class="form-control" name="catatan" id="" value="-">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>