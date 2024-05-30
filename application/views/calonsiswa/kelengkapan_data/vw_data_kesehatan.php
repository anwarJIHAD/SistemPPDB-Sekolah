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
                            <th>Berat Badan (KG)</th>
                            <th>Tinggi Badan (CM)</th>
                            <th>Riwayat Kesehatan</th>
                            <th>Golongan Darah</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kesehatan as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['berat_badan']; ?>
                                </td>
                                <td>
                                    <?= $us['tinggi_badan']; ?>
                                </td>
                                <td>
                                    <?= $us['riwayat_penyakit']; ?>
                                </td>
                                <td>
                                    <?= $us['gol_darah']; ?>
                                </td>
                                <td>

                                    <a href="<?= base_url('CalonSiswa/Pendaftaran/Kesehatan/edit/') . $us['id_kesehatan']; ?>"
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