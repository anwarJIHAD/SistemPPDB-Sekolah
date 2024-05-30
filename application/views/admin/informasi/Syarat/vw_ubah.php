<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/informasi/syarat'); ?>">Syarat Daftar</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Syarat Daftar
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Ubah Syarat Daftar
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_syarat" value="<?= $syarat['id_syarat']; ?>">
                        <div class="form-group">
                            <label for="syarat">Isi Persyaratan</label>
                            <textarea class="form-control" rows="5" class="form-control" name="syarat" value="<?= $syarat['syarat']; ?>" id="syarat" placeholder="Isi Persyaratan"></textarea>
                            <?= form_error('syarat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bayar">Isi Pembayaran</label>
                            <textarea class="form-control" rows="5" class="form-control" name="bayar"value="<?= $syarat['bayar']; ?>" 
                                id="bayar" placeholder="Isi Pembayaran"></textarea>
                            <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                        
                        <a href="<?= base_url('Admin/Informasi/Ekskul') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Persyaratan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>