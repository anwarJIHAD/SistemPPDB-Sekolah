<!-- Begin Page Content -->
<div class="container-fluid">
  <?php if (count($kesehatan) == 0): ?>
    <h1 class="h3 mb-4 text-gray-800">
      <?php echo $judul; ?>
    </h1>
    <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>
    <div class="row justify-content-center">
      <div class="col-md-12 ">
        <div class="card">
          <form action="<?= base_url('CalonSiswa/Pendaftaran/Kesehatan/add'); ?>" method="POST"
            class="form-horizontal form-label-left">
            <div class="form-group">
              <label for="berat_badan">Berat Badan <span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="number" class="form-control" name="berat_badan" required="required" type="text"
                  placeholder="Masukkan berat badan anda..." value="<?= set_value('berat_badan'); ?>">
                <div class="input-group-prepend">
                  <div class="input-group-text">Kg</div>
                </div>
              </div>
              <small class="form-text text-muted"></small>
              <?= form_error('berat_badan', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="tinggi_badan">Tinggi Badan <span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="number" class="form-control" name="tinggi_badan" required="required" type="text"
                  placeholder="Masukkan tinggi badan anda..." value="<?= set_value('tinggi_badan'); ?>">
                <div class="input-group-prepend">
                  <div class="input-group-text">CM</div>
                </div>
              </div>
              <small class="form-text text-muted"></small>
              <?= form_error('tinggi_badan', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="gol_darah">Golongan Darah <span class="text-danger">*</span></label>
              <select class="form-control" id="exampleFormControlSelect1" name="gol_darah">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
              <small class="form-text text-muted"></small>
              <?= form_error('gol_darah', '<small class="form-text text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="riwayat_penyakit">Riwayat Penyakit <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="riwayat_penyakit" required="required" type="text"
                placeholder="Masukkan riwayat penyakit Anda..." value="<?= set_value('riwayat_penyakit'); ?>">
              <small class="form-text text-muted"></small>
              <?= form_error('riwayat_penyakit', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim</button>
          </form>
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