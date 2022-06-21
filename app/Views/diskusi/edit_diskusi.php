<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header"></div>
                <div class="card-body">
                    <form role="form" action="<?= base_url('diskusi/update_posting/' . $postingan['id_posting']); ?>" method="POST">
                        <input type="hidden" class="form-control" name="kode_komentar" id="kode_postingan" value="<?= $postingan['kode_komentar']; ?>">
                        <input type="hidden" class="form-control" name="kode_forum" id="kode_forum" value="<?= $postingan['kode_forum']; ?>">
                        <input type="hidden" class="form-control" name="kode_postingan" id="kode_postingan" value="<?= $postingan['kode_postingan'] ?>">
                        <input type="hidden" class="form-control" name="nig" id="nig" value="<?= $postingan['nig'] ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Postingan :</label>
                                    <textarea name="isi" class="form-control" id="isi" cols="105" rows="8"><?= $postingan['isi']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>