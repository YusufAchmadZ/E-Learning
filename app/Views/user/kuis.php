<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col ">
            <div class="card-header bg-warning">
                <h5 class="card-tittle text-center"><?= $tittleKuis; ?></h5>
            </div>
            <div class="card-body bg-white">
                <form action="<?= base_url('user/proses') ?>" method="post">
                    <input hidden type="text" name="id_tugas" value="<?= $id_tugas; ?>">
                    <input hidden type="text" name="nis" id="nis" value="<?= session()->get('nis'); ?>">
                    <input hidden type="text" name="kode_tugas" id="kode_tugas" value="<?= $jumlah['kode_tugas'] ?>">
                    <?php
                    $jumlah = $jumlah;
                    $i = 1;
                    foreach ($kuis as $key => $value) { ?>
                        <input type="hidden" name="id[]" value="<?= $value['id_soal']; ?>">
                        <div class="card-header bg-light">
                            <h5 class="card-tittle text-center"><?= $i++; ?>. <?= $value['soal']; ?></h5>
                        </div>
                        <table id="example" class=" table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="" width="10px">A</th>
                                    <td class="">
                                        <input type="radio" name="pilihan<?= $value['id_soal']; ?>" value="a"> <?= $value['a']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="" width="10px">B</th>
                                    <td class="">
                                        <input type="radio" name="pilihan<?= $value['id_soal']; ?>" value="b"> <?= $value['b']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="" width="10px">C</th>
                                    <td class="">
                                        <input type="radio" name="pilihan<?= $value['id_soal']; ?>" value="c"> <?= $value['c']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="" width="10px">D</th>
                                    <td class="">
                                        <input type="radio" name="pilihan<?= $value['id_soal']; ?>" value="d"> <?= $value['d']; ?>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    <?php } ?>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-block btn-primary" name="submit" value="proses" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>