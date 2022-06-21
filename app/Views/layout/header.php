<nav class="main-header navbar navbar-expand navbar-success navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?php if (session()->get('active') == 1) { ?>
                <a href="<?= base_url('home/index') ?>" class="nav-link">Home</a>
            <?php } ?>
            <?php if (session()->get('active') == 2) { ?>
                <a href="<?= base_url('mapel/guru') ?>" class="nav-link">Home</a>
            <?php } ?>
        </li>
    </ul>


    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-light-green elevation-4">

    <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/template/dist/img/favicon.ico" alt="MTS Al-Ittihadiyah " class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MTS Al-Ittihadiyah</span>
    </a>