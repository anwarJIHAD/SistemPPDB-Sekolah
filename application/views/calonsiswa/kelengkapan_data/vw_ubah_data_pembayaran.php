<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="" method="POST"
                    class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label for="nominal">Nominal Pembayaran <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nominal" value="<?= $pembayaran['nominal']; ?>">
                        <small class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Bukti Bayar <span class="text-danger">*</span></label>
                        <input class="form-control" class="form-control" type="file" name="gambar"
                            value="<?= $pembayaran['gambar'];?>">
                        <small class="form-text text-muted">Foto scan bukti pembayaran. ukuran max
                            2MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('gambar', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('calonsiswa/kelengkapandata/datapembayaran') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>

    </div>
</div>