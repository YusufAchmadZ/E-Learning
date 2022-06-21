<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-warning">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <?= csrf_field(); ?>
                <div class="card-body">
                    <form role="form" action="<?= base_url('siswa/tambah_data') ?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"><label for="nis">Siswa</label>
                                    <select class="form-control" name="nis">
                                        <?php $i = 1;
                                        foreach ($data as $key => $value) { ?>
                                            <option value="<?= $value['nis'] ?>"><?= $value['nis'] ?> - <?= $value['nama_siswa'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="kode_nilai">Kode Nilai</label>
                                    <select class="form-control" name="kode_nilai">
                                        <?php $i = 1;
                                        foreach ($data as $key => $value) { ?>
                                            <option value="<?= $value['kode_kelas'] ?><?= $value['nis'] ?>"><?= $value['sub_kelas'] ?> - <?= $value['nama_siswa'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer float-right">
                            <a href="<?= base_url('siswa/tambah_siswa') ?>" class="btn btn-secondary mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>