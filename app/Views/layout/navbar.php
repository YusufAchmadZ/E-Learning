 <div class="sidebar">
     <?php if (session()->get('active') == 1) { ?>
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url() ?>/template/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">
                     <?= session()->get('nama') ?>
                 </a>
             </div>
         </div>
     <?php } ?>
     <?php if (session()->get('active') == 2) { ?>
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url() ?>/img_guru/<?= session()->get('gambar') ?>" class="img-circle elevation-10" alt="User Image" style="height: 36px;">
             </div>
             <div class="info">
                 <a href="<?= base_url('guru/g_profil') ?>" class="d-block">
                     <?= session()->get('nama_guru') ?>
                 </a>
             </div>
         </div>
     <?php } ?>
     <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-sidebar">
                     <i class="fas fa-search fa-fw"></i>
                 </button>
             </div>
         </div>
     </div>
     <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <?php if (session()->get('active') == 2) { ?>
                 <?php if (session()->get('kelas') == 7) { ?>
                     <li class="nav-item">
                         <a href="#" class="nav-link" data-toggle="modal" data-target="#modalSiswa7">
                             <i class="nav-icon fas fa-users"></i>
                             <p>
                                 Informasi Siswa
                             </p>
                         </a>
                     </li>
                 <?php } ?>
                 <?php if (session()->get('kelas') == 8) { ?>
                     <li class="nav-item">
                         <a href="#" class="nav-link" data-toggle="modal" data-target="#modalSiswa8">
                             <i class="nav-icon fas fa-users"></i>
                             <p>
                                 Informasi Siswa
                             </p>
                         </a>
                     </li>
                 <?php } ?>
                 <?php if (session()->get('kelas') == 9) { ?>
                     <li class="nav-item">
                         <a href="#" class="nav-link" data-toggle="modal" data-target="#modalSiswa9">
                             <i class="nav-icon fas fa-users"></i>
                             <p>
                                 Informasi Siswa
                             </p>
                         </a>
                     </li>
                 <?php } ?>
             <?php } ?>
             <li class="nav-item menu-close">
                 <a href="#" class="nav-link false">
                     <i class="nav-icon fas fa-mail-bulk"></i>
                     <p>
                         Pesan
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
                 <?php if (session()->get('active') == 2) { ?>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url('pesan/masuk/' . session()->get('id_guru')) ?>" class="nav-link">
                                 <i class="fas fa-envelope-open-text nav-icon"></i>
                                 <p>Masuk</p>
                             </a>
                         </li>
                     </ul>
                 <?php } ?>
                 <?php if (session()->get('active') == 2) { ?>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url('pesan/outbox/' . session()->get('id_guru')) ?>" class="nav-link">
                                 <i class="fas fa-paper-plane nav-icon"></i>
                                 <p>Keluar</p>
                             </a>
                         </li>
                     </ul>
                 <?php } ?>
                 <?php if (session()->get('active') == 1) { ?>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url('pesan/admin/' . session()->get('id')) ?>" class="nav-link">
                                 <i class="fas fa-inbox nav-icon"></i>
                                 <p>Log Pesan</p>
                             </a>
                         </li>
                     </ul>
                 <?php } ?>
             </li>
             <?php if (session()->get('active') == 2) { ?>
                 <li class="nav-item menu-close">
                     <a href="#" class="nav-link false">
                         <i class="nav-icon fas fa-info-circle"></i>
                         <p>
                             Informasi E-learning
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link" data-toggle="modal" data-target="#modal1">
                                 <i class="fas fa-info nav-icon"></i>
                                 <p>Cara Login</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link" data-toggle="modal" data-target="#modal2">
                                 <i class="fas fa-info nav-icon"></i>
                                 <p>Tentang E-learning</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link" data-toggle="modal" data-target="#modal3">
                                 <i class="fas fa-info nav-icon"></i>
                                 <p>Masalah Password</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             <?php } ?>
             <?php if (session()->get('active') == 2) { ?>
                 <li class="nav-item">
                     <a href="<?= base_url('auth/logout_guru') ?>" class="nav-link">
                         <i class="nav-icon fas fa-times"></i>
                         <p>
                             Log Out
                         </p>
                     </a>
                 </li>
             <?php } ?>
             <?php if (session()->get('active') == 1) { ?>
                 <li class="nav-item">
                     <a href="<?= base_url('auth/logout_admin') ?>" class="nav-link">
                         <i class="nav-icon fas fa-times"></i>
                         <p>
                             Log Out
                         </p>
                     </a>
                 </li>
             <?php } ?>
         </ul>
     </nav>
 </div>
 </aside>
 <div class="content-wrapper">
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <?php if (session()->get('active') == 1) { ?>
                             <li class="breadcrumb-item"><a href="<?= base_url('home/index') ?>">Home</a></li>
                         <?php } ?>
                         <?php if (session()->get('active') == 2) { ?>
                             <li class="breadcrumb-item"><a href="<?= base_url('mapel/guru') ?>">Home</a></li>
                         <?php } ?>
                         <li class="breadcrumb-item active" aria-current="page"><a class="m-0"><?= $tittle; ?></a></li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
     <div class="content">
         <div class="container-fluid">
             <div class="row">
                 <aside class="control-sidebar control-sidebar-dark">
                     <div class="p-3">
                         <h5>Title</h5>
                         <p>Sidebar content</p>
                     </div>
                 </aside>