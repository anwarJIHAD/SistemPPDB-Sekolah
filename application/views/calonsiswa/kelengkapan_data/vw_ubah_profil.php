<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">
    <?php echo $judul; ?>
  </h1>
  <div class="row justify-content-center">
    <div class="col-md-12 ">
      <div class="card">
        <form action="" method="POST"
          class="form-horizontal form-label-left">
						<input type="hidden" name="id_siswa" value="<?= $calonsiswa['id_siswa']; ?>">
          <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_lengkap" value="<?= $calonsiswa['nama_lengkap'];?>">
            <small class="form-text text-muted"></small>
            <?= form_error('nama_lengkap', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="username">Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="username" value="<?= $calonsiswa['username'];?>">
            <small class="form-text text-muted"></small>
            <?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="password">Password <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="password" value="<?= set_value('password'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <a href="<?= base_url('calonsiswa/kelengkapandata/dataprofile') ?>" class="btn btn-danger">Tutup</a>
          <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>