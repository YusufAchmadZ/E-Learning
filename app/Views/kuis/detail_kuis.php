<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-info">
                <h5 class="card-header text-center"><?= $tittle; ?></h5>
                <div class="card-body">
                    <?php if (session()->get('active') == 2) { ?>
                        <div class="d-grid gap-4 d-md-flex mb-3">
                            <a href="<?= base_url('kuis/tambah_soal/' . $tambah['id_tugas']) ?>" class="btn btn-primary">Tambah Data</a>
                        </div>
                    <?php } ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Kunci</th>
                                <?php if (session()->get('active') == 2) { ?>
                                    <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($dkuis as $key => $value) { ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td><?= $value['no_soal'] ?></td>
                                    <td><?= $value['soal'] ?></td>

                                    <td><?= $value['jawaban'] ?></td>
                                    <?php if (session()->get('active') == 2) { ?>
                                        <td>
                                            <a href="<?= base_url('kuis/edit_soal/' . $value['id_soal']) ?>" class="btn btn-sm btn-outline-warning mb-1"><i class="fa fa-edit"></i></a>
                                            <form action="<?= base_url('kuis/delete/' . $value['id_soal']) ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    <?php } ?>
                                </tr>
                                <tr class="expandable-body d-none">
                                    <td colspan="4">
                                        <button class="btn btn-sm btn-outline-secondary">A</button> : <?= $value['a'] ?><br>
                                        <button class="btn btn-sm btn-outline-secondary">B</button> : <?= $value['b'] ?><br>
                                        <button class="btn btn-sm btn-outline-secondary">C</button> : <?= $value['c'] ?><br>
                                        <button class="btn btn-sm btn-outline-secondary">D</button> : <?= $value['d'] ?><br>
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


<!-- Modal -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('kuis/tambah') ?>" method="post">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="">Mata Pelajaran :</label>
                                <select class="form-control" id="kode_soal" name="kode_soal">
                                    <option>Choose ...</option>
                                    <option value="sbar07">Bahasa Arab </option>
                                    <option value="sski07">Sejarah Kebudayaan Islam </option>
                                    <option value="saak07">Aqidah Akhlak</option>
                                    <option value="sfqh07">Fikih </option>
                                    <option value="sqhs07">Qur'an Hadits </option>
                                    <option value="sbia07">Bahasa Indonesia </option>
                                    <option value="sbig07">Bahasa Inggris </option>
                                    <option value="smtk07">Matematika </option>
                                    <option value="spjo07">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                    <option value="sipa07">Ilmu Pengetahuan Alam </option>
                                    <option value="sips07">Ilmu Pengetahuan Sosial </option>
                                    <option value="spkn07">Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <option value="stik07">Teknologi Informasi dan Komunikasi</option>
                                    <option value="ssba07">Seni dan Budaya </option>
                                    <option> ------------------------------- KELAS 8 ------------------------------- </option>
                                    <option value="sbar08">Bahasa Arab </option>
                                    <option value="sski08">Sejarah Kebudayaan Islam </option>
                                    <option value="saak08">Aqidah Akhlak</option>
                                    <option value="sfqh08">Fikih </option>
                                    <option value="sqhs08">Qur'an Hadits </option>
                                    <option value="sbia08">Bahasa Indonesia </option>
                                    <option value="sbig08">Bahasa Inggris </option>
                                    <option value="smtk08">Matematika </option>
                                    <option value="spjo08">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                    <option value="sipa08">Ilmu Pengetahuan Alam </option>
                                    <option value="sips08">Ilmu Pengetahuan Sosial </option>
                                    <option value="spkn08">Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <option value="stik08">Teknologi Informasi dan Komunikasi</option>
                                    <option value="ssba08">Seni dan Budaya </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="">Pertemuan :</label>
                                <select class="form-control" id="kode_forum" name="kode_forum">
                                    <option>Choose ...</option>
                                    <option value="p1">Pertemuan 1</option>
                                    <option value="p2">Pertemuan 2</option>
                                    <option value="p3">Pertemuan 3</option>
                                    <option value="p4">Pertemuan 4</option>
                                    <option value="p5">Pertemuan 5</option>
                                    <option value="p6">Pertemuan 6</option>
                                    <option value="p7">Pertemuan 7</option>
                                    <option value="p8">Pertemuan 8</option>
                                    <option value="p9">Pertemuan 9</option>
                                    <option value="p10">Pertemuan 10</option>
                                    <option value="p11">Pertemuan 11</option>
                                    <option value="p12">Pertemuan 12</option>
                                    <option value="p13">Pertemuan 13</option>
                                    <option value="p14">Pertemuan 14</option>
                                    <option value="p15">Pertemuan 15</option>
                                    <option value="p16">Pertemuan 16</option>
                                    <option value="p17">Pertemuan 17</option>
                                    <option value="p18">Pertemuan 18</option>
                                    <option value="p19">Pertemuan 19</option>
                                    <option value="p20">Pertemuan 20</option>
                                    <option value="p21">Pertemuan 21</option>
                                    <option value="p22">Pertemuan 22</option>
                                    <option value="p23">Pertemuan 23</option>
                                    <option value="p24">Pertemuan 24</option>
                                    <option value="p25">Pertemuan 25</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="">Soal :</label>
                                <select class="form-control" id="no_soal" name="no_soal">
                                    <option>Choose ...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="soal">Pertanyaan :</label>
                            <div class="form-group">
                                <textarea class="form-control" name="soal" id="soal" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="a"> A</label>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="a" id="a"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="c">C</label>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="c" id="c"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="b">B</label>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="b" id="b"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="d">D</label>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="d" id="d"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="a">Jawaban :</label>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="jawaban" id="jawaban"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>