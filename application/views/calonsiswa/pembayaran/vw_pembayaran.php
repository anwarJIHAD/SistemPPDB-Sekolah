<div class="container-fluid">
    <?php if (count($pembayaran) == 0): ?>

    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
   <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="<?= base_url('CalonSiswa/Pembayaran/Bayar/add'); ?>" method="POST"
                    class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label for="nominal">Nominal Pembayaran <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nominal" required="required" type="text" placeholder="Masukkan nominal ..." value="<?= set_value('nominal'); ?>">
                        <small class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Bukti Bayar <span class="text-danger">*</span></label>
                        <input class="form-control" class="form-control" type="file" name="gambar" required="required"  placeholder="Masukkan scan bukti bayar anda..."
                            value="<?= set_value('gambar'); ?>">
                        <small class="form-text text-muted">Foto scan bukti pembayaran. ukuran max
                            2MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('gambar', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim</button>
                  </form>
            </div>
        </div>

    </div>
    <?php else: ?>
    <section class="col-sm-12 mb-5">
     <h1 class="h3 mb-2 text-gray-800">
    <?php echo $judul1; ?>
  </h1>
      <p>Kembali ke <a href="<?=base_url('calonsiswa/home');?>">Dashboard</a></p>
    </section>
    <?php endif; ?>
</div>
