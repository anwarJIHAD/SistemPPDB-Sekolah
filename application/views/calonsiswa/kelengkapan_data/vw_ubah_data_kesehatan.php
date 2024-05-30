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
                   <div class="form-group">
                      <label for="berat_badan">Berat Badan <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="berat_badan" value="<?= $kesehatan ['berat_badan'];?>">
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
                        <input type="number" class="form-control" name="tinggi_badan"
                          value="<?= $kesehatan ['tinggi_badan'];?>">
                        <div class="input-group-prepend">
                          <div class="input-group-text">CM</div>
                        </div>
                      </div>
                      <small class="form-text text-muted"></small>
                      <?= form_error('tinggi_badan', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                     <div class="form-group">
            <label for="gol_darah">Golongan Darah <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="gol_darah" >
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
            <input type="text" class="form-control" name="riwayat_penyakit"required="required" type="text" placeholder="Masukkan riwayat penyakit Anda..." value="<?= $kesehatan['riwayat_penyakit']; ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('riwayat_penyakit', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
                    

                    <a href="<?= base_url('calonsiswa/kelengkapandata/dataperiodik') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>

    </div>
</div>