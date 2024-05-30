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
                            <th>Asal Sekolah</th>
                            <th>NISN</th>
                            <th>NPSN </th>
                            <th>Status Sekolah</th>
                            <th>Nomor Ijazah</th>
                            <th>Tanggal Ijazah</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pendidikan as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['asal_sekolah']; ?>
                                </td>
                                <td>
                                    <?= $us['nisn']; ?>
                                </td>
                                <td>
                                    <?= $us['npsn']; ?>
                                </td>
                                <td>
                                    <?= $us['status_sekolah']; ?>
                                </td>
                                <td>
                                    <?= $us['no_ijazah']; ?>
                                </td>
                                <td>
                                    <?= $us['tgl_ijazah']; ?>
                                </td>

                                <td>

                                    <a href="<?= base_url('CalonSiswa/Pendaftaran/Pendidikan/edit/') . $us['id_pendidikan']; ?>"
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