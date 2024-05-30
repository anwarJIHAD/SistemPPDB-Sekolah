<!-- Begin Page Content -->
<div class="container-fluid">
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
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pendaftaran as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['nik']; ?>
                                </td>
                                <td>
                                    <?= $us['alamat']; ?>
                                </td>

                                <td>
                                    <a href="<?= base_url('CalonSiswa/Pendaftaran/CalonSiswa/detail/') . $us['id_pendaftaran']; ?>"
                                        class="badge badge-danger">Detail</a>
                                    <a href="<?= base_url('CalonSiswa/Pendaftaran/CalonSiswa/edit/') . $us['id_pendaftaran']; ?>"
                                        class="badge badge-warning">Edit</a>
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