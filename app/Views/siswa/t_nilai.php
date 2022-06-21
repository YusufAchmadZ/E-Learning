<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>Pelajaran Berhasil
                        <strong> <?= session()->getFlashdata('success') ?> </strong>
                    </div>
                <?php endif; ?>
                <?= csrf_field(); ?>
                <div class="card-body">
                    <form role="form" action="<?= base_url('siswa/tambah_nilai'); ?>" method="post">
                        <div hidden class="form-group">
                            <select class="form-control" id="kode_nilai" name="kode_nilai" id="kode_nilai">
                                <option selected value="<?= $score['kode_nilai'] ?>"><?= $score['kode_nilai'] ?></option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="pelajaran">Mata Pelajaran :</label>
                                    <select name="pelajaran" id="pelajaran" class="custom-select">
                                        <option selected>Choose ...</option>
                                        <?php if (session()->get('kode_guru') == 1) { ?>
                                            <option value="Bahasa Indonesia">Bahasa Indonesia </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 2) { ?>
                                            <option value="Sejarah Kebudayaan Islam">Sejarah Kebudayaan Islam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 3) { ?>
                                            <option value="Matematika">Matematika </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 4) { ?>
                                            <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 5) { ?>
                                            <option value="Bahasa Arab">Bahasa Arab </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 6) { ?>
                                            <option value="Fikih">Fikih </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 7) { ?>
                                            <option value="Aqidah Akhlak">Aqidah Akhlak</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 8) { ?>
                                            <option value="Qur'an Hadits">Qur'an Hadits </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 9) { ?>
                                            <option value="Bahasa Inggris">Bahasa Inggris </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 10) { ?>
                                            <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 11) { ?>
                                            <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 12) { ?>
                                            <option value="Pendidikan Jasmani Olahraga dan Kesehatan">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 13) { ?>
                                            <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 14) { ?>
                                            <option value="Seni dan Budaya">Seni dan Budaya </option>
                                        <?php } ?>
                                        <!-- Kelas 8 -->
                                        <?php if (session()->get('kode_guru') == 21) { ?>
                                            <option value="Bahasa Indonesia">Bahasa Indonesia </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 22) { ?>
                                            <option value="Sejarah Kebudayaan Islam">Sejarah Kebudayaan Islam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 23) { ?>
                                            <option value="Matematika">Matematika </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 24) { ?>
                                            <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 25) { ?>
                                            <option value="Bahasa Arab">Bahasa Arab </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 26) { ?>
                                            <option value="Fikih">Fikih </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 27) { ?>
                                            <option value="Aqidah Akhlak">Aqidah Akhlak</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 28) { ?>
                                            <option value="Qur'an Hadits">Qur'an Hadits </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 29) { ?>
                                            <option value="Bahasa Inggris">Bahasa Inggris </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 30) { ?>
                                            <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 31) { ?>
                                            <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 32) { ?>
                                            <option value="Pendidikan Jasmani Olahraga dan Kesehatan">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 33) { ?>
                                            <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 34) { ?>
                                            <option value="Seni dan Budaya">Seni dan Budaya </option>
                                        <?php } ?>
                                        <!-- Kelas 9 -->
                                        <?php if (session()->get('kode_guru') == 41) { ?>
                                            <option value="Bahasa Indonesia">Bahasa Indonesia </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 42) { ?>
                                            <option value="Sejarah Kebudayaan Islam">Sejarah Kebudayaan Islam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 43) { ?>
                                            <option value="Matematika">Matematika </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 44) { ?>
                                            <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 45) { ?>
                                            <option value="Bahasa Arab">Bahasa Arab </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 46) { ?>
                                            <option value="Fikih">Fikih </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 47) { ?>
                                            <option value="Aqidah Akhlak">Aqidah Akhlak</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 48) { ?>
                                            <option value="Qur'an Hadits">Qur'an Hadits </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 49) { ?>
                                            <option value="Bahasa Inggris"> Bahasa Inggris </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 50) { ?>
                                            <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 51) { ?>
                                            <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 52) { ?>
                                            <option value="Pendidikan Jasmani Olahraga dan Kesehatan">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 53) { ?>
                                            <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 54) { ?>
                                            <option value="Seni dan Budaya">Seni dan Budaya </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="kode_guru">Kode Mata Pelajaran</label>
                                    <select class="form-control" id="kode_guru" name="kode_guru">
                                        <option selected>Mata Pelajaran ... </option>
                                        <?php if (session()->get('kode_guru') == 1) { ?>
                                            <option value="1">Bahasa Indonesia </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 2) { ?>
                                            <option value="2">Sejarah Kebudayaan Islam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 3) { ?>
                                            <option value="3">Matematika </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 4) { ?>
                                            <option value="4">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 5) { ?>
                                            <option value="5">Bahasa Arab </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 6) { ?>
                                            <option value="6">Fikih </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 7) { ?>
                                            <option value="7">Aqidah Akhlak</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 8) { ?>
                                            <option value="8">Qur'an Hadits </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 9) { ?>
                                            <option value="9"> big07 - Bahasa Inggris </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 10) { ?>
                                            <option value="10">Ilmu Pengetahuan Alam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 11) { ?>
                                            <option value="11">Ilmu Pengetahuan Sosial </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 12) { ?>
                                            <option value="12">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 13) { ?>
                                            <option value="13">Teknologi Informasi dan Komunikasi</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 14) { ?>
                                            <option value="14">Seni dan Budaya </option>
                                        <?php } ?>
                                        <!-- Kelas 8 -->
                                        <?php if (session()->get('kode_guru') == 21) { ?>
                                            <option value="21">Bahasa Indonesia </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 22) { ?>
                                            <option value="22">Sejarah Kebudayaan Islam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 23) { ?>
                                            <option value="23">Matematika </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 24) { ?>
                                            <option value="24">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 25) { ?>
                                            <option value="25">Bahasa Arab </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 26) { ?>
                                            <option value="26">Fikih </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 27) { ?>
                                            <option value="27">Aqidah Akhlak</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 28) { ?>
                                            <option value="28">Qur'an Hadits </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 29) { ?>
                                            <option value="29"> big07 - Bahasa Inggris </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 30) { ?>
                                            <option value="30">Ilmu Pengetahuan Alam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 31) { ?>
                                            <option value="31">Ilmu Pengetahuan Sosial </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 32) { ?>
                                            <option value="32">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 33) { ?>
                                            <option value="33">Teknologi Informasi dan Komunikasi</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 34) { ?>
                                            <option value="34">Seni dan Budaya </option>
                                        <?php } ?>
                                        <!-- Kelas 9 -->
                                        <?php if (session()->get('kode_guru') == 41) { ?>
                                            <option value="41">Bahasa Indonesia </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 42) { ?>
                                            <option value="42">Sejarah Kebudayaan Islam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 43) { ?>
                                            <option value="43">Matematika </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 44) { ?>
                                            <option value="44">Pendidikan Pancasila dan Kewarganegaraan</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 45) { ?>
                                            <option value="45">Bahasa Arab </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 46) { ?>
                                            <option value="46">Fikih </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 47) { ?>
                                            <option value="47">Aqidah Akhlak</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 48) { ?>
                                            <option value="48">Qur'an Hadits </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 49) { ?>
                                            <option value="49"> big07 - Bahasa Inggris </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 50) { ?>
                                            <option value="50">Ilmu Pengetahuan Alam </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 51) { ?>
                                            <option value="51">Ilmu Pengetahuan Sosial </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 52) { ?>
                                            <option value="52">Pendidikan Jasmani Olahraga dan Kesehatan </option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 53) { ?>
                                            <option value="53">Teknologi Informasi dan Komunikasi</option>
                                        <?php } ?>
                                        <?php if (session()->get('kode_guru') == 54) { ?>
                                            <option value="54">Seni dan Budaya </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="kkm">KKM :</label>
                                    <input type="select multiple" class="form-control" id="kkm" name="kkm">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="nilai">Nilai :</label>
                                    <input type="text" class="form-control" id="nilai" name="nilai">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="grade">Grade :</label>
                                    <select class="form-control" name="grade" id="grade">
                                        <option selected>Choose ..</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="catatan">Catatan :</label>
                                    <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="4" placeholder="-"></textarea>
                                </div>
                            </div>
                        </div>
                        <span>Peringatan :</span>
                        <span class="text-danger">
                            <lu>
                                <li>Nilai hanya bisa ditambahkan 1x.</li>
                                <li>Jika menambah Nilai lebih 1x, Nilai akan bertumpuk.</li>
                                <li>Jika ingin merubah/menghapus nilai, harap hubungin admin.</li>
                            </lu>
                        </span>
                        <div class="card-footer float-right">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>