<!-- Begin Page Content -->
<div class="container-fluid">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        
        <li class="breadcrumb-item active">
            Belum Lengkap
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
                            <th>Nama Siswa</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($calonsiswa) > 0): ?>
                            <?php $i = 1; ?>
                            <?php foreach ($calonsiswa as $us): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <?= $us['nama_lengkap']; ?>
                                    </td>
                                    <td>
                                        <img src=" <?= base_url('uploads/') . $us['pas_foto']; ?>" width="20%" />
                                    </td>
                                    <td>
                                        <?= $us['alamat']; ?>
                                    </td>
                                    <td>
                                        <?= $us['status']; ?>
                                    </td>
                                    <td><a href="<?= base_url('Admin/Siswa/detail/') . $us['id_siswa']; ?>" title="Detail"><i class="fas fa-eye"></i></a>
                                                <a href="<?= base_url('Admin/Kelulusan_Edit/verifikasi_tolak/') . $us['id_siswa']; ?>"
                                            title="Verifikasi"><i class="fas fa-edit"></i></a>
                                    </td>

                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->