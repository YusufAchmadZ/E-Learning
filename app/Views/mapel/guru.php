<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>Data Berhasil
                    <strong> <?= session()->getFlashdata('success') ?> </strong>
                </div>
            <?php endif; ?>
            <!-- Mapel Kelas 07 -->
            <!-- Bahasa Indonesia -->
            <?php if (session()->get('kode_guru') == 1) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $bia07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $bia07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $bia07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $bia07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $bia07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $bia07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Sejarah Kebudayaan Islam -->
            <?php if (session()->get('kode_guru') == 2) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ski07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ski07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ski07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ski07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ski07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ski07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 3) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $mtk07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $mtk07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $mtk07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $mtk07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $mtk07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $mtk07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 4) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $pkn07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $pkn07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $pkn07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $pkn07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $pkn07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $pkn07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 5) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $bar07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $bar07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $bar07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $bar07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $bar07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $bar07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 6) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $fkh07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $fkh07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $fkh07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $fkh07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $fkh07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $fkh07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 7) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $aak07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $aak07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $aak07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $aak07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $aak07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $aak07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 8) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $qhs07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $qhs07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $qhs07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $qhs07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $qhs07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $qhs07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 9) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $big07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $big07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $big07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $big07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $big07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $big07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 10) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ipa07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ipa07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ipa07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ipa07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ipa07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ipa07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 11) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ips07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ips07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ips07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ips07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ips07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ips07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 12) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $pjo07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $pjo07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $pjo07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $pjo07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $pjo07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $pjo07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 13) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $tik07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $tik07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $tik07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $tik07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $tik07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $tik07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 14) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $sba07['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $sba07['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $sba07['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $sba07['id_diskusi']) ?>">7<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $sba07['id_diskusi']) ?>">7<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $sba07['id_diskusi']) ?>">7<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <!-- Mapel Kelas 08 -->
            <!-- Bahasa Indonesia -->
            <?php if (session()->get('kode_guru') == 21) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $bia08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $bia08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $bia08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $bia08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $bia08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $bia08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Sejarah Kebudayaan Islam -->
            <?php if (session()->get('kode_guru') == 22) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ski08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ski08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ski08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ski08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ski08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ski08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 23) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $mtk08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $mtk08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $mtk08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $mtk08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $mtk08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $mtk08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 24) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $pkn08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $pkn08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $pkn08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $pkn08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $pkn08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $pkn08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 25) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $bar08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $bar08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $bar08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $bar08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $bar08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $bar08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 26) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $fkh08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $fkh08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $fkh08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $fkh08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $fkh08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $fkh08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 27) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $aak08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $aak08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $aak08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $aak08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $aak08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $aak08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 28) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $qhs08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $qhs08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $qhs08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $qhs08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $qhs08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $qhs08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 29) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $big08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $big08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $big08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $big08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $big08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $big08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 30) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ipa08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ipa08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ipa08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ipa08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ipa08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ipa08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 31) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ips08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ips08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ips08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ips08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ips08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ips08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 32) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $pjo08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $pjo08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $pjo08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $pjo08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $pjo08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $pjo08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 33) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $tik08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $tik08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $tik08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $tik08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $tik08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $tik08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 34) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $sba08['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $sba08['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $sba08['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $sba08['id_diskusi']) ?>">8<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $sba08['id_diskusi']) ?>">8<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $sba08['id_diskusi']) ?>">8<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <!-- Mapel Kelas 09 -->
            <!-- Bahasa Indonesia -->
            <?php if (session()->get('kode_guru') == 41) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $bia09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $bia09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $bia09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $bia09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $bia09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $bia09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Sejarah Kebudayaan Islam -->
            <?php if (session()->get('kode_guru') == 42) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ski09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ski09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ski09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ski09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ski09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ski09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 43) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $mtk09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $mtk09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $mtk09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $mtk09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $mtk09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $mtk09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 44) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $pkn09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $pkn09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $pkn09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $pkn09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $pkn09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $pkn09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 45) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $bar09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $bar09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $bar09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $bar09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $bar09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $bar09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 46) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $fkh09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $fkh09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $fkh09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $fkh09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $fkh09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $fkh09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 47) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $aak09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $aak09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $aak09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $aak09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $aak09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $aak09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 48) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $qhs09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $qhs09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $qhs09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $qhs09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $qhs09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $qhs09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 49) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $big09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $big09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $big09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $big09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $big09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $big09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 50) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ipa09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ipa09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ipa09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ipa09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ipa09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ipa09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 51) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $ips09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $ips09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $ips09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $ips09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $ips09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $ips09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 52) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $pjo09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $pjo09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $pjo09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $pjo09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $pjo09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $pjo09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 53) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $tik09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $tik09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $tik09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $tik09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $tik09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $tik09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (session()->get('kode_guru') == 54) { ?>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-dark elevation-1"><a href="<?= base_url('sumber/s_detail/' . $sba09['id_sumber']) ?>"><i class="fas fa-book"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sumber</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('materi/v_materi/' . $sba09['id_materi']) ?>"><i class="fas fa-book-open"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Materi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('kuis/kuis/' . $sba09['id_kuis']) ?>"><i class="fas fa-question"></i></a></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kuis</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>
                                <div class="info-box-content text-center">
                                    <div class="info-box-heaader text-cyan">Diskusi Kelas :</div>
                                    <span class="info-box-text">
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusia/' . $sba09['id_diskusi']) ?>">9<sup>a</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusib/' . $sba09['id_diskusi']) ?>">9<sup>b</sup></a>
                                        <a class="btn btn-outline-info" href="<?= base_url('diskusi/v_diskusic/' . $sba09['id_diskusi']) ?>">9<sup>c</sup></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php $i = 1;
                            foreach ($gambar1 as $key => $value) { ?>
                                <div class="carousel-item active">
                                    <img class="d-block w-100" style="height: 375px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="First slide">
                                </div>
                            <?php } ?>
                            <?php $i = 1;
                            foreach ($gambar2 as $key => $value) { ?>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="height: 375px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="Second slide">
                                </div>
                            <?php } ?>
                            <?php $i = 1;
                            foreach ($gambar3 as $key => $value) { ?>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="height: 375px;" src="<?= base_url('img_home/' . $value['gambar']) ?>" alt="Third slide">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal 1 -->
<?php
foreach ($more1 as $key => $more1) { ?>
    <div class="modal fade" id="modal1">
        <div class="modal-dialog modal-xl text-center" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $more1['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <?= $more1['keterangan'] ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<?php
foreach ($more2 as $key => $more2) { ?>
    <div class="modal fade" id="modal2">
        <div class="modal-dialog modal-xl text-center" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $more2['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <?= $more2['keterangan'] ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
foreach ($more3 as $key => $more3) { ?>
    <div class="modal fade" id="modal3">
        <div class="modal-dialog modal-xl text-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $more3['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mt-2 mb-2">
                    <?= $more3['keterangan'] ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="modalSiswa7">
    <div class="modal-dialog modal-xl modal-static" role=" document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kelas7 as $key => $value) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value['nama_kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('siswa/d_kelas/' . $value['id_kelas']); ?>" class="btn btn-info">Masuk</a>
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

<div class="modal fade" id="modalSiswa8">
    <div class="modal-dialog modal-xl modal-static" role=" document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kelas8 as $key => $value) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value['nama_kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('siswa/d_kelas/' . $value['id_kelas']); ?>" class="btn btn-info">Masuk</a>
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

<div class="modal fade" id="modalSiswa9">
    <div class="modal-dialog modal-xl modal-static" role=" document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kelas9 as $key => $value) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value['nama_kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('siswa/d_kelas/' . $value['id_kelas']); ?>" class="btn btn-info">Masuk</a>
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