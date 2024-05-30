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
                            <th style="width:100px;">Nama File</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dokumen as $us): ?>
                            <tr>
                                <td>
                                    KK
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['kk']; ?>" width="150px" /> </td>
                                <td>
                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_kk/') . $us['Id_dokumen']; ?>"
                                        class="badge badge-warning">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ijazah
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['ijazah']; ?>" width="150px" /> </td>
                                <td>

                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_ijazah/') . $us['Id_dokumen']; ?>"
                                        class="badge badge-warning">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Akte
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['akte']; ?>" width="150px" /> </td>
                                <td>
                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_akte/') . $us['Id_dokumen']; ?>"
                                        class="badge badge-warning">Edit</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    KIP
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['kip']; ?>" width="150px" /> </td>
                                <td>
                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_kip/') . $us['Id_dokumen']; ?>"
                                        class="badge badge-warning">Edit</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    KTP Ayah
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['ktp_ayah']; ?>" width="150px" /> </td>
                                <td>

                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_ktp_ayah/') . $us['Id_dokumen']; ?>"
                                        class="badge badge-warning">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    KTP Ibu
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['ktp_ibu']; ?>" width="150px" /> </td>
                                <td>

                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_ktp_ibu/') . $us['Id_dokumen']; ?>"
                                        class="badge badge-warning">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Pas Foto
                                </td>
                                <td><img src=" <?= base_url('uploads/') . $us['pas_foto']; ?>" width="150px" /> </td>
                                <td>
                                    <a href="<?= base_url('CalonSiswa/Persyaratan/Dokumen/edit_pas_foto/') . $us['Id_dokumen']; ?>"
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