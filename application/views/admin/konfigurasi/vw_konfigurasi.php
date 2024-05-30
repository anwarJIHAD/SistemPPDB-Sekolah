<!-- Begin Page Content -->
<div class="container-fluid">
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        
        <li class="breadcrumb-item active">
            Pendaftaran
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800">
        <?= $judul; ?>
    </h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gelombang</th>
                            <th>Tahun Ajaran</th>
                            <th>Tanggal Buka</th>
                            <th>Tanggal Tutup</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($konfigurasi as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                 <td>
                                    <?= $us['gelombang']; ?>
                                </td>
                                 <td>
                                    <?= $us['tahun_ajaran']; ?>
                                </td>
                                <td>
                                    <?= strftime('%d %B %Y', strtotime($us['tgl_buka'])); ?>
                                </td>
                                <td>
                                    <?= strftime('%d %B %Y', strtotime($us['tgl_tutup'])); ?>
                                </td>
                                <td>
                                    <?= $us['setdaftar']; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('Admin/Konfigurasi/edit/') . $us['id_konfigurasi']; ?>"
                                        title="Setting"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                </td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->