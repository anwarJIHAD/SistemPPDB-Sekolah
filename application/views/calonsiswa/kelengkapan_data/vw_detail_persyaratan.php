<!-- Page Content -->
<h2>Detail Berkas Persyaratan</h2>
<hr>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
            <div class="col-md-4">
                <?php $i = 1; ?>
                        <?php foreach ($dokumen as $us): ?>
                            <tr>
                                <td colspan="3"><b>BERKAS PERSYARATAN</b></td>
                            </tr>
                <div class="card">
                    <div class="card-header">
                        Akte
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right"
                            src = " <?= base_url('uploads/') . $us['akte'];?>" alt="foto akte">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Ijazah
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right"
                            src = " <?= base_url('uploads/') . $us['ijazah'];?>" alt="foto ijazah">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        KK
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right"
                            src = " <?= base_url('uploads/') . $us['kk'];?>"
                            alt="foto kartu_keluarga">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        KIP
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right"
                            src = " <?= base_url('uploads/') . $us['kip'];?>" alt=" foto kip">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Surat Pernyataan
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right" 
                        src = " <?= base_url('uploads/') . $us['pernyataan'];?>"
                            alt="surat pernyataan">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Pas Foto 3X4
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right"
                         src = " <?= base_url('uploads/') . $us['pas_foto'];?>"
                            alt=" pas foto 3x4">
                    </div>
                </div>
                            <?php $i++; ?>
                            <?php endforeach; ?>
        </div>
        </div>

    </div>
</div>

</div>