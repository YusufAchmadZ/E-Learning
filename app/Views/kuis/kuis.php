<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-gradient-info">
                    <h5 class=" text-center card-tittle">Forum <?= $tittle; ?></h5>
                </div>
                <div class="card-body">
                    <?php if (session()->get('active') == 2) { ?>
                        <div class="d-grid gap-4 d-md-flex mb-3">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalKuis">Tambah Data</a>
                        </div>
                    <?php } ?>
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="750px">Pelajaran</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($kuiss as $key => $value) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $value['pelajaran'] ?></td>
                                    <td>
                                        <a href="<?= base_url('kuis/detail_kuis/' . $value['id_tugas']) ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"> Detail</i></a>
                                        <a href="<?= base_url('siswa/hasil/' . $value['id_tugas']) ?>" class="btn btn-sm btn-dark btn-sm"><i class="fas fa-clipboard-list"> Hasil</i></a>
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


<div class="modal fade" id="modalKuis">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pertemuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" action="<?= base_url('kuis/tambah_kuis/' . $tambah['kode_soal']) ?>" method="POST">
                <div class="modal-body">
                    <input hidden type="text" name="kode_soal" id="kode_soal" class="form-control" value="<?= $tambah['kode_soal'] ?>">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="kode_tugas">Pertemua : </label>
                                <select class="form-control" name="kode_tugas" id="kode_tugas">
                                    <option value="<?= $tambah['kode_soal'] ?>1">Pertemuan 1</option>
                                    <option value="<?= $tambah['kode_soal'] ?>2">Pertemuan 2</option>
                                    <option value="<?= $tambah['kode_soal'] ?>3">Pertemuan 3</option>
                                    <option value="<?= $tambah['kode_soal'] ?>4">Pertemuan 4</option>
                                    <option value="<?= $tambah['kode_soal'] ?>5">Pertemuan 5</option>
                                    <option value="<?= $tambah['kode_soal'] ?>6">Pertemuan 6</option>
                                    <option value="<?= $tambah['kode_soal'] ?>7">Pertemuan 7</option>
                                    <option value="<?= $tambah['kode_soal'] ?>8">Pertemuan 8</option>
                                    <option value="<?= $tambah['kode_soal'] ?>9">Pertemuan 9</option>
                                    <option value="<?= $tambah['kode_soal'] ?>10">Pertemuan 10</option>
                                    <option value="<?= $tambah['kode_soal'] ?>11">Pertemuan 11</option>
                                    <option value="<?= $tambah['kode_soal'] ?>12">Pertemuan 12</option>
                                    <option value="<?= $tambah['kode_soal'] ?>13">Pertemuan 13</option>
                                    <option value="<?= $tambah['kode_soal'] ?>14">Pertemuan 14</option>
                                    <option value="<?= $tambah['kode_soal'] ?>15">Pertemuan 15</option>
                                    <option value="<?= $tambah['kode_soal'] ?>16">Pertemuan 16</option>
                                    <option value="<?= $tambah['kode_soal'] ?>17">Pertemuan 17</option>
                                    <option value="<?= $tambah['kode_soal'] ?>18">Pertemuan 18</option>
                                    <option value="<?= $tambah['kode_soal'] ?>19">Pertemuan 19</option>
                                    <option value="<?= $tambah['kode_soal'] ?>20">Pertemuan 20</option>
                                    <option value="<?= $tambah['kode_soal'] ?>21">Pertemuan 21</option>
                                    <option value="<?= $tambah['kode_soal'] ?>22">Pertemuan 22</option>
                                    <option value="<?= $tambah['kode_soal'] ?>23">Pertemuan 23</option>
                                    <option value="<?= $tambah['kode_soal'] ?>24">Pertemuan 24</option>
                                    <option value="<?= $tambah['kode_soal'] ?>25">Pertemuan 25</option>
                                    <option value="<?= $tambah['kode_soal'] ?>26">Pertemuan 26</option>
                                    <option value="<?= $tambah['kode_soal'] ?>27">Pertemuan 27</option>
                                    <option value="<?= $tambah['kode_soal'] ?>28">Pertemuan 28</option>
                                    <option value="<?= $tambah['kode_soal'] ?>29">Pertemuan 29</option>
                                    <option value="<?= $tambah['kode_soal'] ?>30">Pertemuan 30</option>
                                    <option value="<?= $tambah['kode_soal'] ?>31">Pertemuan 31</option>
                                    <option value="<?= $tambah['kode_soal'] ?>32">Pertemuan 32</option>
                                    <option value="<?= $tambah['kode_soal'] ?>33">Pertemuan 33</option>
                                    <option value="<?= $tambah['kode_soal'] ?>34">Pertemuan 34</option>
                                    <option value="<?= $tambah['kode_soal'] ?>35">Pertemuan 35</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>