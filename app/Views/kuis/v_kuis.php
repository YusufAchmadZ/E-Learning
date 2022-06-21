<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-secondary">
                <div class="card-header">
                    <h5 class="card-tittle" style="text-align: center; ">
                        <?= $tittleKuis; ?>
                    </h5>
                </div>
                <div class="card-body ml-2">
                    <form role="form" action="<?= base_url('kuis/proses') ?>" method="post">
                        <?php $i = 1;
                        foreach ($kuis as $key => $value) { ?>
                            <div class="post">
                                <input hidden type="" name="id[]" value="<?= $value['id_soal']; ?>">
                                <input hidden type="" name="jumlah" value="<?= $jumlah['soal'] ?>">
                                <tr>
                                    <td>
                                        <h5 style=""><?= $i++; ?>.
                                    </td>
                                    <td>
                                        <?= $value['soal'] ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $value['id_soal']; ?>" id="exampleRadios1" value="a">
                                            <label class="form-check-label" for="exampleRadios1">
                                                A. <?= $value['a'] ?>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $value['id_soal']; ?>" id="exampleRadios2" value="b">
                                            <label class="form-check-label" for="exampleRadios2">
                                                B. <?= $value['b'] ?>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $value['id_soal']; ?>" id="exampleRadios3" value="c">
                                            <label class="form-check-label" for="exampleRadios3">
                                                C. <?= $value['c'] ?>
                                            </label>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $value['id_soal']; ?>" id="exampleRadios4" value="d">
                                            <label class="form-check-label" for="exampleRadios4">
                                                D. <?= $value['d'] ?>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                        <?php } ?>
                        <div class="card-footer mt-3">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-block btn-primary">Jawab</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>