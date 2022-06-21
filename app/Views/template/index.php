<html lang="en">

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/summernote/summernote-bs4.min.css">
    <title><?= $tittle; ?></title>
</head>

<body class="">


    <nav class="navbar navbar-expand-lg border navbar-light bg-white mb-3">
        <a href="<?= base_url('home/siswa') ?>" class="brand-link link-black">
            <img src="<?= base_url() ?>/template/dist/img/favicon.ico" alt="MTS Al-Ittihadiyah " class="img-circle elevation-2 ml-3" style="height: 50px;">
        </a>
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?= base_url('home/siswa') ?>" class="nav-link link-black">Home</a>
                </li>
                <?php if (session()->get('kelas') == 7) { ?>
                    <li class="nav-item">
                        <a class="nav-link link-black" href="<?= base_url('kelas/learning_07') ?>">E-learning <span class="sr-only"></span></a>
                    </li>
                <?php } ?>
                <?php if (session()->get('kelas') == 8) { ?>
                    <li class="nav-item">
                        <a class="nav-link link-black" href="<?= base_url('kelas/learning_08') ?>">E-learning <span class="sr-only"></span></a>
                    </li>
                <?php } ?>
                <?php if (session()->get('kelas') == 9) { ?>
                    <li class="nav-item">
                        <a class="nav-link link-black" href="<?= base_url('kelas/learning_09') ?>">E-learning <span class="sr-only"></span></a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="<?= base_url('home/daftar_guru') ?>" class="nav-link link-black">Informasi Guru</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link link-black user-panel d-flex" href="#" id="pengaturan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="image">
                            <img src="<?= base_url() ?>/template/dist/img/siswa.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="dropdown-menu" aria-labelledby="pengaturan">
                            <h6 class="dropdown-header"> <?= session()->get('nama_siswa') ?></h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('user/profil') ?>"><i class="fas fa-user-circle"></i> Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('user/inbox/' . session()->get('id_siswa')) ?>"><i class="fas fa-inbox"></i> Pesan Masuk</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


    <footer class="bg-secondary text-white fixed-bottom">
        <div class="container">
            <div class="float-right d-none d-sm-inline">
                Learning Technology System Arsitecture
            </div>
            <div class="row text-center">
                <strong>Copyright &copy; 2021 - MTS Al-Ittidahiyah </a></strong>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>/template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/template/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        function previewImg() {

            const gambar = document.querySelector('#gambar');
            const gambarLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            gambarLabel.textContent = gambar.files[0].name;


            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(gambar.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>


</body>

</html>