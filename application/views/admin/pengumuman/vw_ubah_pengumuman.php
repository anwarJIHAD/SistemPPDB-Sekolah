<div class="container-fluid">
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/pengumuman/'); ?>">Pengumuman</a>
        </li>
        <li class="breadcrumb-item active">
            Setting
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id_pengumuman" value="<?= $pengumuman['id_pengumuman']; ?>">
               <div class="form-group">
                        <label for="tgl_buka">Tanggal Buka <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="tgl_buka" value="<?= $pengumuman['tgl_buka'];?>">                        <small class="form-text text-muted">Tanggal lahir Ayah sesuai dokumen resmi yang
                    </small>
                        <?= form_error('tgl_buka', '<small class="form-text text-danger">', '</small>'); ?>
                      </div>

                      <div class="form-group">
                        <label for="tgl_tutup">Tanggal Tutup <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="tgl_tutup" value="<?= $pengumuman['tgl_tutup'];?>">                        <small class="form-text text-muted">Tanggal lahir Ayah sesuai dokumen resmi yang
                          berlaku.</small>
                        <?= form_error('tgl_tutup', '<small class="form-text text-danger">', '</small>'); ?>
                      </div>

                        
                    <a href="<?= base_url('admin/pengumuman/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
