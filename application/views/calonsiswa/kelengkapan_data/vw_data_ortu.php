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
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($orangtua as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['nama_ayah']; ?>
                                </td>
                                <td>
                                    <?= $us['nama_ibu']; ?>
                                    </td>
                                    <td>
                                    <?= $us['alamat_ortu']; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('CalonSiswa/Pendaftaran/Ortu/detail/').$us['id_ortu'];?>" class="badge badge-danger">Detail</a>
                                    <a href="<?= base_url('CalonSiswa/Pendaftaran/Ortu/edit/').$us['id_ortu'];?>" class="badge badge-warning">Edit</a>
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