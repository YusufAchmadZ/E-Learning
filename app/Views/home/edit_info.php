<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-warning">
                <div class="card-header">
                    <h5 class="card-tittle"><?= $tittle; ?></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form role="form" action="<?= base_url('home/update_info/' . $info['id_info']); ?>" method="post">
                                <div class="form-group">
                                    <label for="">Judul :</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $info['judul'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan :</label>
                                    <div class="col-sm-12">
                                        <textarea name="keterangan" id="keterangan" cols="145" rows="5"><?= $info['keterangan']; ?></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= base_url('home/index') ?>" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>