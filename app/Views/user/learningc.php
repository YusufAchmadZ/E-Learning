<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-danger">
                    <h5 class="card-tittle text-center">Daftar Mata Pelajaran </h5>
                </div>
                <div id="accordion">
                    <?php $i = 1;
                    foreach ($kelasc as $key => $value) { ?>
                        <div class="card mt-1">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-toggle="collapse" data-card-widget="maximize" data-target="#learningc" aria-expanded="false" aria-controls="learningc">
                                        <?= $value['pelajaran']; ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="learningc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-lightblue"><a href="<?= base_url('user/materi/' . $value['id_materi']) ?>"><i class="fas fa-file-alt"></i></a></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Materi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-pink"><a href="<?= base_url('user/daftar_kuis/' . $value['id_kuis']) ?>"><i class="fas fa-question-circle"></i></a></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Kuis</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="info-box">
                                            <?php if (session()->get('level') == 1) { ?>
                                                <span class="info-box-icon bg-maroon mr-1"><a href="<?= base_url('user/foruma/' . $value['id_diskusi']) ?>"><i class="fas fa-comments"></i></a></span>
                                            <?php } ?>
                                            <?php if (session()->get('level') == 2) { ?>
                                                <span class="info-box-icon bg-maroon mr-1"><a href="<?= base_url('user/forumb/' . $value['id_diskusi']) ?>"><i class="fas fa-comments"></i></a></span>
                                            <?php } ?>
                                            <?php if (session()->get('level') == 3) { ?>
                                                <span class="info-box-icon bg-maroon mr-1"><a href="<?= base_url('user/forumc/' . $value['id_diskusi']) ?>"><i class="fas fa-comments"></i></a></span>
                                            <?php } ?>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Diskusi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-tittle text-center mt-5 mb-5">Tata Tertib Learning</h4>
                                <div class="card-body bg-info">
                                    1. Awali kegiatan Learning dengan membaca doa terlebih dahulu <br>
                                    2. Pastikan jadwal learning anda benar dan tepat <br>
                                    3. Unduh terlebih dahulu materi dan pelajari dulu sebelum memulai kuis atau diskusi <br>
                                    4. Kerjakan kuis jika ada dan tersedia dengan baik dan benar <br>
                                    5. Awali diskusi dengan salam dan sopan <br>
                                    6. Minimal 3x Menjawab dalam proses diskusi, agar dihitung hadir dalam pertemuan <br>
                                    7. Jika ada yang kurang di paham tentang proses learning silahkan hubungi Guru terkait <br>
                                    8. Jika waktu learning, Guru belum Upload materi silahkan hubungi guru terkait memlalui fitur chat pada Profil Guru <br>
                                    9. Fitur chat ke guru direkomendasikan hanya untuk ketua kelas agar lebih tertib <br>
                                    10. Jika ada yang perlu ditanyakan tetbang hal lain, silahkan hubungi pihak sekolah melalui wali kelas <br>
                                    11. Akhiri semua kegiatan dengan membaca Alhamdu'lillah
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>