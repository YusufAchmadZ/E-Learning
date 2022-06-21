<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-info">
                <h5 class="card-header"><?= $tittle; ?></h5>
                <?= csrf_field(); ?>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Pertanyaan No.Berhasil
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <form role="form" action="<?= base_url('kuis/update/' . $edit['id_soal']) ?>" method="post">
                        <input hidden class="form-control" id="kode_tugas" name="kode_tugas" value="<?= $edit['kode_tugas']; ?>">
                        <input hidden class="form-control" id="no_soal" name="no_soal" value="<?= $edit['no_soal']; ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="soal">Pertanyaan</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="soal" id="soal" rows="3"><?= $edit['soal'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <label for="">Pilihan : </label>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="a">A</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="a" id="a"><?= $edit['a']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="c">C</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="c" id="c"><?= $edit['c']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="b">B</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="b" id="b"><?= $edit['b']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="d">D</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="d" id="d"><?= $edit['d']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
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
                        <div class="form-group card-footer">
                            <a href="<?= base_url('kuis/detail_kuis/' . $edit['id_soal']) ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Soal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>