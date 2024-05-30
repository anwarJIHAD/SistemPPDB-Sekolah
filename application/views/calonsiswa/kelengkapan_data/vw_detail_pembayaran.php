<!-- Page Content -->
 <h2 class="h3 mb-2 text-gray-800">
   <?= $judul; ?>
</h2>
<hr>
<!-- DataTables Example -->
<div class="card mb-3">
   
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tbody>
                                     <?php $i = 1; ?>
                        <?php foreach ($pembayaran as $us): ?> 
                            <tr>
                                <td colspan="3"><b>DATA PEMBAYARAN</b></td>
                            </tr>
                            <tr>
                                <td>Nominal</td>
                                <td>
                                    <?= $us['nominal']; ?>
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        Bukti Bayar 
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail float-right"
                            src = " <?= base_url('uploads/') . $us['gambar']; ?>" alt="foto siswa">
                        </div>
                    </div>
                 <?php $i++; ?>
                        <?php endforeach; ?>

            </div>
        </div>

    </div>
</div>
