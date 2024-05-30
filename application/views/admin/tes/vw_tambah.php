<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/tes'); ?>">Tes</a>
        </li>
        <li class="breadcrumb-item active">
            Verifikasi
        </li>
    </ol>

    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="" method="POST" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label for="nilai">Nilai Tes <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="nilai" required="required" type="text"
                            placeholder="Masukkan nilai tes..." value="<?= set_value('nilai'); ?>">
                        <small class="form-text text-muted"></small>
                        <?= form_error('nilai', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Berkas Pendaftaran <span class="text-danger">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status"
                            value="<?= set_value('status'); ?>">
                            <option>Belum Diverifikasi</option>
                            <option>Lulus</option>
                            <option>Tidak Lulus</option>
                        </select>
                        <small class="form-text text-muted"></small>
                        <?= form_error('status', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>