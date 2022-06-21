<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col mt-5">
            <div class="card card-secondary mt-5">
                <div class="card-header">
                    <h5 class="card-tittle"></h5>
                </div>
                <div class="card-body">
                    <embed src="<?= base_url('file_materi/' . $file['data']) ?>" type="application/pdf" width="1000" height="700">
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>