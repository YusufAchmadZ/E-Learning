<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $pilihan = $_POST['pilihan'];
                        $id_soal = $_POSTt['id'];
                        $jumlah = $_POST['jumlah'];

                        $score = 0;
                        $benar = 0;
                        $salah = 0;
                        $kosong = 0;

                        for ($i = 0; $i < $jumlah; $i++) {
                            $nomor = $id_soal[$i];

                            if (empty($pilihan[$nomor])) {
                                $kosong++;
                            } else {
                                $jawaban = $pilihan[$nomor];

                                $kuis = "id_soal = '$nomor' AND jawaban = '$jawaban'";
                                $cek = ($kuis);

                                if ($cek) {
                                    $benar++;
                                } else {
                                    $salah++;
                                }
                            }
                            $jumlah_soal = ($kuis);
                            $score = 100 / $jumlah_soal * $benar;
                            $hasil = number_format($score, 1);
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>