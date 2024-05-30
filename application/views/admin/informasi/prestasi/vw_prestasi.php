<!-- Begin Page Content -->
                <div class="container-fluid">
                     <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
      
        <li class="breadcrumb-item active">
            Prestasi
        </li>
    </ol>
                <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <?= $this->session->flashdata('message');?>
                        <div class="card-header py-3">
                        <a href=<?=base_url('Admin/Informasi/Prestasi/tambah');?> class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prestasi</th>
                                            <th>Deskripsi</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($prestasi as $us) : ?>
                                        <tr>
                                            <td><?=$i;?></td>
                                            <td><?= $us['nama_prestasi'];?></td>
                                            <td><?= $us['deskripsi'];?></td>
                                            <td><img src = " <?= base_url('uploads/') . $us['gambar'];?>" width = "50"/>  </td>
                                            <td>
                                                <a href="<?= base_url('Admin/Informasi/Prestasi/hapus/').$us['id_prestasi'];?>" class="badge badge-danger">Hapus</a>
                                                <a href="<?= base_url('Admin/Informasi/Prestasi/edit/').$us['id_prestasi'];?>" class="badge badge-warning">Edit</a>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach; ?>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->