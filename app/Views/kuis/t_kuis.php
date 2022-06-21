<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="text-center card-header">
                    <?= $tittle; ?>
                </div>
                <form role="form" action="<?= base_url('kuis/tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>Soal Berhasil
                            <strong> <?= session()->getFlashdata('success') ?> </strong>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <div hidden hidden class="form-group">
                            <label for="">Mata Pelajaran :</label>
                            <input type="text" class="form-control" id="kode_tugas" name="kode_tugas" value="<?= $tambah['kode_tugas'] ?>"> </input>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="">No Soal</label>
                                    <select class="form-control" id="no_soal" name="no_soal">
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
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label for="jawaban">Jawaban</label>
                                <div class="form-group">
                                    <select class="form-control" name="jawaban" id="jawaban">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                        <option value="d">D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <label for="soal">Pertanyaan</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="soal" id="soal" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-6">
                                <label for="a"> A</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="a" id="a" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="c">C</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="c" id="c" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-6">
                                <label for="b">B</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="b" id="b" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="d">D</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="d" id="d" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group card-footer float-right">
                            <a href="<?= base_url('kuis/detail_kuis/' . $tambah['id_kuis']) ?>" type="button" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>