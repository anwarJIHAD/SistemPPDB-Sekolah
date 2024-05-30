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
                            <?php foreach ($pendaftaran as $us): ?>
                                <tr>
                                    <td colspan="3"><b>DATA CALON SISWA</b></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>
                                        <?= $us['jenis_kelamin']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>
                                        <?= $us['tempat_lahir']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir </td>
                                    <td>
                                        <?= strftime('%d %B %Y', strtotime($us['tgl_lahir'])); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Tinggal</td>
                                    <td>
                                        <?= $us['tempat_tinggal']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <?= $us['alamat']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Anak Ke-</td>
                                    <td>
                                        <?= $us['anak']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Saudara</td>
                                    <td>
                                        <?= $us['saudara']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cita-Cita</td>
                                        <td>
                                        <?= $us['cita-cita']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Transportasi Sekolah</td>
                                    <td>
                                        <?= $us['transportasi']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Waktu Tempuh </td>
                                    <td>
                                        <?= $us['waktu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Jarak Rumah Ke Madrasah </td>
                                    <td>
                                        <?= $us['Jarak']; ?>
                                    </td>
                                </tr>
                                    <tr>
                                        <td>Pernah TK</td>
                                        <td>
                                        <?= $us['pernah_tk']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Yang Membiayai Sekolah</td>
                                    <td>
                                        <?= $us['biaya']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kebutuhan Khusus</td>
                                    <td>
                                        <?= $us['kebutuhan_khusus']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kebutuhan Disabilitas</td>
                                    <td>
                                        <?= $us['disabilitas']; ?>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>