<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="" method="POST" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label for="ktp_ayah">KTP Ayah <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="ktp_ayah"
                            value="<?= $dokumen['ktp_ayah']; ?>">
                        <small class="form-text text-muted">Foto scan KTP Ayah. ukuran max
                            3MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('ktp_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('calonsiswa/kelengkapandata/datapersyaratan') ?>"
                        class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>