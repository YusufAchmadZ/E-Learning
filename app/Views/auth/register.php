<?= $this->extend('auth/template/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5 ">
                <div class="card-body p-0 ">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="register-box">
                                    <p class="login-box-msg">Tambah Data Guru</p>
                                    <?php

                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                <?php foreach ($errors as $error) : ?>
                                                    <li><?= esc($error) ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if (session()->getFlashdata('pesan')) {
                                        echo '<div class="alert alert-success" role="alert">';
                                        echo session()->getFlashdata('pesan');
                                        echo '</div>';
                                    } ?>
                                    <?php
                                    echo form_open('auth/save_guru');
                                    ?>
                                    <div class="input-group mb-3" hidden>
                                        <select class="form-control" name="gambar">
                                            <option selected>default.jpg</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nig" class="form-control" placeholder="Nomor Induk Guru">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-id-card"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nama_guru" class="form-control" placeholder="Nama Lengkap">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="kode_guru">
                                            <option selected disabled>Pilih Mata Pelajaran :</option>
                                            <option value="1">Kelas 07 -- Bahasa Arab </option>
                                            <option value="2">Kelas 07 -- Sejarah Kebudayaan Islam </option>
                                            <option value="3">Kelas 07 -- Aqidah Akhlak </option>
                                            <option value="4">Kelas 07 -- Fikih </option>
                                            <option value="5">Kelas 07 -- Qur'an Hadits</option>
                                            <option value="6">Kelas 07 -- Bahasa Indonesia </option>
                                            <option value="7">Kelas 07 -- Bahasa Inggris </option>
                                            <option value="8">Kelas 07 -- Matematika</option>
                                            <option value="9">Kelas 07 -- Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                            <option value="10">Kelas 07 -- Ilmu Pengetahuan Alam</option>
                                            <option value="11">Kelas 07 -- Ilmu Pengetahuan Sosial</option>
                                            <option value="12">Kelas 07 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="13">Kelas 07 -- Teknik Ilmu Komputer</option>
                                            <option value="14">Kelas 07 -- Seni dan Budaya</option>
                                            <option value=""> ------------------------------------------------</option>
                                            <option value="21">Kelas 08 -- Bahasa Arab </option>
                                            <option value="22">Kelas 08 -- Sejarah Kebudayaan Islam </option>
                                            <option value="23">Kelas 08 -- Aqidah Akhlak </option>
                                            <option value="42">Kelas 08 -- Fikih </option>
                                            <option value="25">Kelas 08 -- Qur'an Hadits</option>
                                            <option value="26">Kelas 08 -- Bahasa Indonesia </option>
                                            <option value="27">Kelas 08 -- Bahasa Inggris </option>
                                            <option value="28">Kelas 08 -- Matematika</option>
                                            <option value="29">Kelas 08 -- Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                            <option value="30">Kelas 08 -- Ilmu Pengetahuan Alam</option>
                                            <option value="31">Kelas 08 -- Ilmu Pengetahuan Sosial</option>
                                            <option value="32">Kelas 08 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="33">Kelas 08 -- Teknik Ilmu Komputer</option>
                                            <option value="34">Kelas 08 -- Seni dan Budaya</option>
                                            <option value=""> -------------------------------------------------</option>
                                            <option value="41">Kelas 09 -- Bahasa Arab </option>
                                            <option value="42">Kelas 09 -- Sejarah Kebudayaan Islam </option>
                                            <option value="43">Kelas 09 -- Aqidah Akhlak </option>
                                            <option value="44">Kelas 09 -- Fikih </option>
                                            <option value="45">Kelas 09 -- Qur'an Hadits</option>
                                            <option value="46">Kelas 09 -- Bahasa Indonesia </option>
                                            <option value="47">Kelas 09 -- Bahasa Inggris </option>
                                            <option value="48">Kelas 09 -- Matematika</option>
                                            <option value="49">Kelas 09 -- Pendidikan Jasmani Olahraga dan Kesehatan</option>
                                            <option value="50">Kelas 09 -- Ilmu Pengetahuan Alam</option>
                                            <option value="51">Kelas 09 -- Ilmu Pengetahuan Sosial</option>
                                            <option value="52">Kelas 09 -- Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="53">Kelas 09 -- Teknik Ilmu Komputer</option>
                                            <option value="54">Kelas 09 -- Seni dan Budaya</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-book-open"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="kelas">
                                            <option selected disabled>Kelas :</option>
                                            <option value="7">Kelas 07 </option>
                                            <option value="8">Kelas 08 </option>
                                            <option value="9">Kelas 09 </option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-book-open"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="repassword" class="form-control" placeholder="Retype password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icheck-primary">
                                            <a href="<?= base_url('home/index') ?>" class="btn btn-secondary btn-block">Kembali</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<?= $this->endSection() ?>