<div class="container-fluid">
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/konfigurasi/'); ?>">Pendaftaran</a>
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
<input type="hidden" name="id_konfigurasi" value="<?= $konfigurasi['id_konfigurasi']; ?>">
                    <div class="form-group">
                        <label for="gelombang">Gelombang <span class="text-danger">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="gelombang"value="<?= $konfigurasi['gelombang'];?>">
                            <option>Gelombang 1</option>
                            <option>Gelombang 2</option>
                            <option>Gelombang 3</option>
                        </select>
                        <small class="form-text text-muted"></small>
                        <?= form_error('status', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                     <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input name="tahun_ajaran" value="<?= $konfigurasi['tahun_ajaran']; ?>" type="text"
                                class="form-control" id="tahun_ajaran" placeholder="tahun Ajaran">
                            <?= form_error('tahun_ajaran', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    <div class="form-group">
                        <label for="tgl_buka">Tanggal Buka <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="tgl_buka" value="<?= $konfigurasi['tgl_buka'];?>">                        <small class="form-text text-muted">Tanggal lahir Ayah sesuai dokumen resmi yang
                    </small>
                        <?= form_error('tgl_buka', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="tgl_tutup">Tanggal Tutup <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="tgl_tutup" value="<?= $konfigurasi['tgl_tutup'];?>">                        <small class="form-text text-muted">Tanggal lahir Ayah sesuai dokumen resmi yang
                          berlaku.</small>
                        <?= form_error('tgl_tutup', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="setdaftar">Status Pendaftaran <span class="text-danger">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="setdaftar"value="<?= $konfigurasi['setdaftar'];?>">
                            <option>Buka</option>
                            <option>Tutup</option>
                        </select>
                        <small class="form-text text-muted"></small>
                        <?= form_error('status', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('admin/konfigurasi/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>