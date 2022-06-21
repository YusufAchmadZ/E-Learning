<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->get('active') == 2) { ?>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#modalTambah">
                    Tambah Forum Diskusi
                </button>
            <?php } ?>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>Data Berhasil
                    <strong> <?= session()->getFlashdata('success') ?> </strong>
                </div>
            <?php endif; ?>
            <div class="card card-info">
                <div class="card-header"></div>
                <div class="card-body">
                    <?php $i = 1;
                    foreach ($posting as $key => $value) { ?>
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?= base_url('img_guru/' . $value['gambar']) ?>" alt="user image">
                                <?php if (session()->get('active') == 2) { ?>
                                    <span class="float-right">
                                        <form action="<?= base_url('diskusi/delete_postingan/' . $value['id_posting']) ?>" method="POST" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="link-black text-sm" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fa fa-times"></i></button>
                                        </form>
                                    </span>
                                <?php } ?>
                                <span class="username">
                                    <?= session()->get('nama_guru') ?> <?= $value['forum'] ?>
                                    <?php if (session()->get('active') == 2) { ?>
                                        <a href="<?= base_url('diskusi/v_edit/' . $value['id_posting']) ?>" class="link-black text-sm"> <i class="fa fa-pen"></i></a>
                                    <?php } ?>
                                </span>
                                <span class="description"><?= $value['date']; ?></span>
                            </div>
                            <p>
                                <?= $value['isi']; ?>
                            </p>
                            <div class="card-footer">
                                <p>
                                    <span class="float-right">
                                        <a href="<?= base_url('diskusi/d_diskusi/' . $value['id_posting']) ?>" class="link-black text-sm">
                                            <i class="far fa-comments mr-1"></i> Masuk Diskusi
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Tambah Diskusi -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Postingan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('diskusi/tambah_posting'); ?>" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Pertemuan :</label>
                                <select class="form-control" name="kode_forum" id="kode_forum">
                                    <option disabled>Pertemuan</option>
                                    <option value="p1"> 1 </option>
                                    <option value="p2"> 2 </option>
                                    <option value="p3"> 3 </option>
                                    <option value="p4"> 4 </option>
                                    <option value="p5"> 5 </option>
                                    <option value="p6"> 6 </option>
                                    <option value="p7"> 7 </option>
                                    <option value="p8"> 8 </option>
                                    <option value="p9"> 9 </option>
                                    <option value="p10"> 10 </option>
                                    <option value="p11"> 11 </option>
                                    <option value="p12"> 12 </option>
                                    <option value="p13"> 13 </option>
                                    <option value="p14"> 14 </option>
                                    <option value="p15"> 15 </option>
                                    <option value="p16"> 16 </option>
                                    <option value="p17"> 17 </option>
                                    <option value="p18"> 18 </option>
                                    <option value="p19"> 19 </option>
                                    <option value="p20"> 20 </option>
                                    <option value="p21"> 21 </option>
                                    <option value="p22"> 22 </option>
                                    <option value="p23"> 23 </option>
                                    <option value="p24"> 24 </option>
                                    <option value="p25"> 25 </option>
                                    <option value="p26"> 26 </option>
                                    <option value="p27"> 27 </option>
                                    <option value="p28"> 28 </option>
                                    <option value="p29"> 29 </option>
                                    <option value="p29"> 29 </option>
                                    <option value="p30"> 30 </option>
                                    <option value="p31"> 31 </option>
                                    <option value="p32"> 32 </option>
                                    <option value="p33"> 33 </option>
                                    <option value="p34"> 34 </option>
                                    <option value="p35"> 35 </option>
                                    <option value="p36"> 36 </option>
                                    <option value="p37"> 37 </option>
                                    <option value="p38"> 38 </option>
                                    <option value="p39"> 39 </option>
                                    <option value="p40"> 40 </option>
                                    <option value="p41"> 41 </option>
                                    <option value="p42"> 42 </option>
                                    <option value="p43"> 43 </option>
                                    <option value="p44"> 44 </option>
                                    <option value="p45"> 45 </option>
                                    <option value="p46"> 46 </option>
                                    <option value="p47"> 47 </option>
                                    <option value="p48"> 48 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Postingan :</label>
                                <textarea name="isi" class="form-control" id="isi" cols="105" rows="8" placeholder="Maksimal 1000 Karakter ...."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input hidden type="text" class="form-control" name="kode_postingan" id="kode_postingan" value="<?= session()->get('kode_guru') ?>c">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select hidden class="form-control" id="kode_komentar" name="kode_komentar">
                                    <?php if (session()->get('kode_guru') == 1) { ?>
                                        <option value="cbia07"> bia07 - Bahasa Indonesia </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 2) { ?>
                                        <option value="cski07"> ski07 - Sejarah Kebudayaan Islam </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 3) { ?>
                                        <option value="cmtk07"> mtk07 - Matematika </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 4) { ?>
                                        <option value="cpkn07"> pkn07 - Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 5) { ?>
                                        <option value="cbar07"> bar07 - Bahasa Arab </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 6) { ?>
                                        <option value="cfkh07"> fkh07 - Fikih </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 7) { ?>
                                        <option value="caak07"> aak07 - Aqidah Akhlak</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 8) { ?>
                                        <option value="cqhs07"> qhs07 - Qur'an Hadits </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 9) { ?>
                                        <option value="cbig07"> big07 - Bahasa Inggris </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 10) { ?>
                                        <option value="cipa07"> ipa07 - Ilmu Pengetahuan Alam </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 11) { ?>
                                        <option value="cips07"> ips07 - Ilmu Pengetahuan Sosial </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 12) { ?>
                                        <option value="cpjo07"> pjo07 - Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 13) { ?>
                                        <option value="ctik07"> tik07 - Teknologi Informasi dan Komunikasi</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 14) { ?>
                                        <option value="csba07"> sba07 - Seni dan Budaya </option>
                                    <?php } ?>
                                    <!-- KODE KHUSUS KELAS 8 -->
                                    <?php if (session()->get('kode_guru') == 21) { ?>
                                        <option value="cbia08"> bia08 - Bahasa Indonesia </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 22) { ?>
                                        <option value="cski08"> ski08 - Sejarah Kebudayaan Islam </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 23) { ?>
                                        <option value="cmtk08"> mtk08 - Matematika </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 24) { ?>
                                        <option value="cpkn08"> pkn08 - Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 25) { ?>
                                        <option value="cbar08"> bar08 - Bahasa Arab </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 26) { ?>
                                        <option value="cfkh08"> fkh08 - Fikih </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 27) { ?>
                                        <option value="caak08"> aak08 - Aqidah Akhlak</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 28) { ?>
                                        <option value="cqhs08"> qhs08 - Qur'an Hadits </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 29) { ?>
                                        <option value="cbig08"> big08 - Bahasa Inggris </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 30) { ?>
                                        <option value="cipa08"> ipa08 - Ilmu Pengetahuan Alam </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 31) { ?>
                                        <option value="cips08"> ips08 - Ilmu Pengetahuan Sosial </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 32) { ?>
                                        <option value="cpjo08"> pjo08 - Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 33) { ?>
                                        <option value="ctik08"> tik08 - Teknologi Informasi dan Komunikasi</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 34) { ?>
                                        <option value="csba08"> sba08 - Seni dan Budaya </option>
                                    <?php } ?>
                                    <!-- KODE KHUSUS KELAS 9 -->
                                    <?php if (session()->get('kode_guru') == 41) { ?>
                                        <option value="cbia09"> bia09 - Bahasa Indonesia </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 42) { ?>
                                        <option value="cski09"> ski09 - Sejarah Kebudayaan Islam </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 43) { ?>
                                        <option value="cmtk09"> mtk09 - Matematika </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 44) { ?>
                                        <option value="cpkn09"> pkn09 - Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 45) { ?>
                                        <option value="cbar09"> bar09 - Bahasa Arab </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 46) { ?>
                                        <option value="cfkh09"> fkh09 - Fikih </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 47) { ?>
                                        <option value="caak09"> aak09 - Aqidah Akhlak</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 48) { ?>
                                        <option value="cqhs09"> qhs09 - Qur'an Hadits </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 49) { ?>
                                        <option value="cbig09"> big09 - Bahasa Inggris </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 50) { ?>
                                        <option value="cipa09"> ipa09 - Ilmu Pengetahuan Alam </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 51) { ?>
                                        <option value="cips09"> ips09 - Ilmu Pengetahuan Sosial </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 52) { ?>
                                        <option value="cpjo09"> pjo09 - Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 53) { ?>
                                        <option value="ctik09"> tik09 - Teknologi Informasi dan Komunikasi</option>
                                    <?php } ?>
                                    <?php if (session()->get('kode_guru') == 54) { ?>
                                        <option value="csba09"> sba09 - Seni dan Budaya </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <input hidden type="text" class="form-control" name="nig" id="nig" value="<?= session()->get('nig') ?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select hidden class="form-control" name="level" id="level">
                                    <?php if (session()->get('kelas') == 7) { ?>
                                        <option value="3"> Kelas 7b </option>
                                    <?php } ?>
                                    <?php if (session()->get('kelas') == 8) { ?>
                                        <option value="3"> Kelas 8c </option>
                                    <?php } ?>
                                    <?php if (session()->get('kelas') == 9) { ?>
                                        <option value="3"> Kelas 9c </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>