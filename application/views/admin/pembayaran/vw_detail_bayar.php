<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/pembayaran'); ?>">Pembayaran</a>
        </li>
        <li class="breadcrumb-item active">
            Detail Pembayaran
        </li>
    </ol>

    <!-- Page Content -->
    <h2 class="h3 mb-2 text-gray-800">
        <?= $judul; ?>
    </h2>
    <hr>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            Detail Pembayaran
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td colspan="3"><b>DATA PEMBAYARAN</b></td>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($calonsiswa as $us): ?>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>
                                            <?= $us['nama_lengkap']; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <?php $i = 1; ?>
                                <?php foreach ($pembayaran as $us): ?>

                                    <tr>
                                        <td>Nominal</td>
                                        <td>
                                            <?= $us['nominal']; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                                <?php $i = 1; ?>
                                <?php foreach ($pendaftaran as $us): ?>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                            <?= $us['alamat']; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                                <?php $i = 1; ?>
                                <?php foreach ($pembayaran as $us): ?>
                                    <tr>

                                        <td>Status</td>
                                        <td>
                                            <?= $us['status']; ?>
                                        </td>
                                    </tr>


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
                                    src=" <?= base_url('uploads/') . $us['gambar']; ?>" alt="Bukti Pembayaran">
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>