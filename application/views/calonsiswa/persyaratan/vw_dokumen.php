<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (count($dokumen) == 0): ?>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <!-- <a href="<?= base_url('index.php/download/proses_download'); ?>"> Cetak Surat Pernyataan</a> -->
   <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="<?= base_url('CalonSiswa/Persyaratan/dokumen/add'); ?>" method="POST"
                    class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="kk">Kartu keluarga <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="kk"required="required" placeholder="Masukkan scan kk anda...">
                        <small class="form-text text-muted">Foto scan kartu keluarga. ukuran max
                            3MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('kk', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="ijazah">Ijazah <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="ijazah"required="required" placeholder="Masukkan scan ijazah anda...">
                        <small class="form-text text-muted">Foto scan SHUN atau Surat Keterangan
                            Lulus dari SMP/MTs telah dilegalisir. Ukuran max 3MB, format:
                            JPG,JPEG,PNG</small>
                        <?= form_error('ijazah', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="akte">Akta Kelahiran <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="akte"required="required" placeholder="Masukkan scan akte anda...">
                        <small class="form-text text-muted">Foto scan Akta Kelahiran. ukuran max
                            3MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('akte', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kip">Kartu Indonesia Pintar (KIP) <span class="text-danger"></span></label>
                        <input class="form-control" type="file" name="kip" placeholder="Masukkan scan kip anda...">
                        <small class="form-text text-muted">Foto scan KIP. ukuran max 1MB. , format:
                            JPG,JPEG,PNG</small>
                        <?= form_error('kip', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="ktp_ayah">KTP Ayah <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="ktp_ayah"required="required" placeholder="Masukkan scan ktp ayah anda...">
                        <small class="form-text text-muted">Foto scan  ktp ayah. ukuran max
                            3MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('ktp_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                     <div class="form-group">
                        <label for="ktp_ibu"> KTP Ibu <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="ktp_ibu"required="required" placeholder="Masukkan scan ktp_ibu anda...">
                        <small class="form-text text-muted">Foto scan  ktp ibu. ukuran max
                            3MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('ktp_ibu', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pas_foto">Pas Foto 3x4 <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="pas_foto" required="required"placeholder="Masukkan scan pas foto anda...">
                        <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran
                            max 1MB. , format: JPG,JPEG,PNG</small>
                        <?= form_error('pas_foto', '<small class="form-text text-danger">', '</small>'); ?>
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
      <p>Kembali ke <a href="<?= base_url('calonsiswa/home'); ?>">Dashboard</a></p>
      </section>
    <?php endif; ?>
</div>