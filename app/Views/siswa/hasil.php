<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-info text-center">
                    <h4 class="text-tittle"><?= $tittle; ?></h4>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th width="30px"> No</th>
                                <th>Nama Siswa</th>
                                <th width="50px">Kelas</th>
                                <th width="40px">Nilai</th>
                                <th width="150px">Date</th>
                            </tr>
                        </thead>
                        <?php $i = 1;
                        foreach ($hasil as $key => $value) { ?>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['nama_siswa'] ?></td>
                                    <td><?= $value['kelas'] ?></td>
                                    <td><?= $value['nilai'] ?></td>
                                    <td><?= $value['date'] ?></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>