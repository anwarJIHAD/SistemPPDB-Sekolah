<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/siswa'); ?>">Siswa</a>
        </li>
        <li class="breadcrumb-item active">
            Detail Siswa
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
            Detail Siswa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <tbody>

                                <tr>
                                    <td colspan="3"><b>DATA SISWA</b></td>
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
                                <?php foreach ($pendaftaran as $us): ?>

                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <?= $us['jenis_kelamin']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td>
                                            <?= $us['nik']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>
                                            <?= $us['tempat_lahir']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                            <?= strftime('%d %B %Y', strtotime($us['tgl_lahir'])); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                            <?= $us['alamat']; ?>
                                        </td>
                                    <tr>
                                        <td>Tempat Tinggal</td>
                                        <td>
                                            <?= $us['tempat_tinggal']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moda Transportasi</td>
                                        <td>
                                            <?= $us['transportasi']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cita-Cita</td>
                                        <td>
                                            <?= $us['cita-cita']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Waktu</td>
                                        <td>
                                            <?= $us['waktu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jarak</td>
                                        <td>
                                            <?= $us['Jarak']; ?>
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
                                    <tr>
                                        <td>Pernah TK</td>
                                        <td>
                                            <?= $us['pernah_tk']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anak Ke</td>
                                        <td>
                                            <?= $us['anak']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Yang Membiayai</td>
                                        <td>
                                            <?= $us['biaya']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Saudara</td>
                                        <td>
                                            <?= $us['saudara']; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"><b>DATA ORANGTUA </b></td>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($orangtua as $us): ?>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>
                                            <?= $us['nama_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NIK Ayah</td>
                                        <td>
                                            <?= $us['nik_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir Ayah</td>
                                        <td>
                                            <?= $us['tempat_lahir_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir Ayah </td>
                                        <td>
                                            <?= strftime('%d %B %Y', strtotime($us['tgl_lahir_ayah'])); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ayah</td>
                                        <td>
                                            <?= $us['pekerjaan_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Penghasilan Ayah</td>
                                        <td>
                                            <?= $us['penghasilan_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan Ayah</td>
                                        <td>
                                            <?= $us['keterangan_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Ayah</td>
                                        <td>
                                            <?= $us['pendidikan_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Golongan Ayah</td>
                                        <td>
                                            <?= $us['golongan_ayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email Ayah</td>
                                        <td>
                                            <?= $us['email_ayah']; ?>
                                        </td>
                                    </tr>
                                    <td>No HP Ayah</td>
                                    <td>
                                        <?= $us['no_hp_ayah']; ?>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>
                                            <?= $us['nama_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir Ibu</td>
                                        <td>
                                            <?= $us['tempat_lahir_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir Ibu </td>
                                        <td>
                                            <?= strftime('%d %B %Y', strtotime($us['tgl_lahir_ibu'])); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ibu</td>
                                        <td>
                                            <?= $us['pekerjaan_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Penghasilan Ibu</td>
                                        <td>
                                            <?= $us['penghasilan_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan Ibu</td>
                                        <td>
                                            <?= $us['keterangan_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Ibu</td>
                                        <td>
                                            <?= $us['pendidikan_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Golongan Ibu</td>
                                        <td>
                                            <?= $us['golongan_ibu']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email Ibu</td>
                                        <td>
                                            <?= $us['email_ibu']; ?>
                                        </td>
                                    </tr>
                                    <td>No HP Ibu</td>
                                    <td>
                                        <?= $us['no_hp_ibu']; ?>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Orang Tua</td>
                                        <td>
                                            <?= $us['alamat_ortu']; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"><b>DATA PENDIDIKAN SEBELUMNYA</b></td>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($pendidikan as $us): ?>
                                    <tr>
                                        <td>Asal Sekolah</td>
                                        <td>
                                            <?= $us['asal_sekolah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td>
                                            <?= $us['nisn']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NPSN </td>
                                        <td>
                                            <?= $us['npsn']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Sekolah</td>
                                        <td>
                                            <?= $us['status_sekolah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Ijazah</td>
                                        <td>
                                            <?= $us['no_ijazah']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Tanggal Ijazah</td>
                                        <td>
                                            <?= $us['tgl_ijazah']; ?>
                                                </td>
                                            </tr>
                
                                        <?php $i++; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"><b>DATA KESEHATAN SISWA</b></td>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($kesehatan as $us): ?>
                                    <tr>
                                        <td>Berat Badan</td>
                                        <td>
                                            <?= $us['berat_badan']; ?> KG
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tinggi Badan</td>
                                        <td>
                                            <?= $us['tinggi_badan']; ?> CM
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Riwayat Penyakit </td>
                                        <td>
                                            <?= $us['riwayat_penyakit']; ?> KM
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <td>
                                            <?= $us['gol_darah']; ?>
                                        </td>
                                    </tr>
                
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                                <tr>
                                    <td colspan="3"><b>DATA PEMBAYARAN SISWA</b></td>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($pembayaran as $us): ?>
                                    <tr>
                                        <td>Nominal</td>
                                        <td>
                                            <?= $us['nominal']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <?= $us['status']; ?>
                                        </td>
                                    </tr>

                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <?php $i = 1; ?>
                <?php foreach ($dokumen as $us): ?>
                    <div class="col-md-4">
                        <tr>
                            <td colspan="3"><b>BERKAS PERSYARATAN</b></td>
                        </tr>

                        <div class="card">
                            <div class="card-header">
                                Akte
                            </div>
                            <div class="card-body">
                                <img class="img-fluid img-thumbnail float-right"
                                    src=" <?= base_url('uploads/') . $us['akte']; ?>" alt="foto akte">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Ijazah
                            </div>
                            <div class="card-body">
                                <img class="img-fluid img-thumbnail float-right"
                                    src=" <?= base_url('uploads/') . $us['ijazah']; ?>" alt="foto ijazah">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                KK
                            </div>
                            <div class="card-body">
                                <img class="img-fluid img-thumbnail float-right"
                                    src=" <?= base_url('uploads/') . $us['kk']; ?>" alt="foto kartu_keluarga">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                KIP
                            </div>
                            <div class="card-body">
                                <img class="img-fluid img-thumbnail float-right"
                                    src=" <?= base_url('uploads/') . $us['kip']; ?>" alt=" foto kip">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                KTP Ayah
                            </div>
                            <div class="card-body">
                                <img class="img-fluid img-thumbnail float-right"
                                    src=" <?= base_url('uploads/') . $us['ktp_ayah']; ?>" alt="KTP Ayah">
                            </div>
                        </div>
                          <div class="card">
                            <div class="card-header">
                                KTP Ibu
                            </div>
                            <div class="card-body">
                                <img class="img-fluid img-thumbnail float-right"
                                    src=" <?= base_url('uploads/') . $us['ktp_ibu']; ?>"
                                        alt="KTP ibu">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    Pas Foto 3X4
                                </div>
                                <div class="card-body">
                                    <img class="img-fluid img-thumbnail float-right"
                                        src=" <?= base_url('uploads/') . $us['pas_foto']; ?>" alt=" pas foto 3x4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endforeach; ?>