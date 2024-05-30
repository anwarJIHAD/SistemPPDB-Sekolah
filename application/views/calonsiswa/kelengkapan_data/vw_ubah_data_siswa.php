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
            <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin" >
              <option value="Laki-Laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('jenis_kelamin', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="nik">NIK <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nik"required="required" type="text" placeholder="Masukkan NIK Anda..." value="<?= $pendaftaran['nik']; ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('nik', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="tempat_lahir"required="required" type="text" placeholder="Masukkan tempat lahir anda..." value="<?= $pendaftaran['tempat_lahir']; ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="tanggal_lahir"required="required" type="text" placeholder="Masukkan tanggal lahir anda..." value="<?= $pendaftaran['tgl_lahir']; ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
           <div class="form-group">
            <label for="cita-cita">Cita-Cita <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="cita-cita"required="required" type="text" placeholder="Masukkan Cita-Cita anda..." value="<?= $pendaftaran['cita-cita']; ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('cita-cita', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
           <div class="form-group">
            <label for="anak">Anak ke: <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="anak" required="required" type="text" placeholder="" value="<?= $pendaftaran['anak']; ?>">
              <?= form_error('anak', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
             <div class="form-group">
            <label for="saudara">Jumlah Saudara <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="number" class="form-control" name="saudara" required="required" type="text" placeholder="Masukkan Jumlah Saudara  anda..." value="<?= $pendaftaran['saudara']; ?>">
              <div class="input-group-prepend">
                <div class="input-group-text">Orang</div>
              </div>
            </div>
            <small class="form-text text-muted"></small>
            <?= form_error('saudara', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
            <div class="form-group">
              <label for="alamat">Alamat Jalan <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="alamat"required="required" type="text" placeholder="Masukkan alamat anda..." value="<?= $pendaftaran['alamat']; ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="tempat_tinggal">Tempat Tinggal <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="tempat_tinggal"required="required" type="text" placeholder="Masukkan tempat tinggal anda...">
              <option value="Orang Tua">Bersama Orang Tua</option>
              <option value="Wali">Wali</option>
              <option value="Kos">Kos</option>
              <option value="Panti Asuhan">Panti Asuhan</option>
              <option value="Asrama">Asrama</option>
              <option value="Lainnya">Lainnya</option>
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('tempat_tinggal', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
              <label for="transportasi">Moda Transportasi <span class="text-danger">*</span></label>
                <select class="form-control" id="exampleFormControlSelect1" name="transportasi"required="required" type="text" placeholder="Masukkan transportasi anda...">
                    <option value="Jalan Kaki">Jalan Kaki</option>
                      <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                        <option value="Ojek">Ojek</option>
                 
               </select>
            <small class="form-text text-muted"></small>
            <?= form_error('transportasi', '<small class="form-text text-danger">', '</small>'); ?>
             </div>
              <div class="form-group">
            <label for="waktu">Waktu Tempuh <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="number" class="form-control" name="waktu" required="required" type="text" placeholder="Masukkan waktu tempuh anda..." value="<?= $pendaftaran['waktu']; ?>">
              <div class="input-group-prepend">
                <div class="input-group-text">Menit</div>
              </div>
            </div>
            <small class="form-text text-muted"></small>
            <?= form_error('waktu', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
             <div class="form-group">
            <label for="jarak">Jarak Rumah Ke Madrasah <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="jarak" >
              <option value="Kurang dari 5 KM">Kurang dari 5 KM</option>
              <option value="lebih dari 5 KM">lebih dari 5 KM</option>
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('jarak', '<small class="form-text text-danger">', '</small>'); ?>
          </div>
           <div class="form-group">
            <label for="pernah_tk">Pernah TK <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="pernah_tk" >
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('pernah_tk', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="biaya">Yang Membiayai Sekolah <span class="text-danger">*</span></label>
              <select class="form-control" id="exampleFormControlSelect1" name="biaya" >
                <option value="Orang Tua">Orang Tua</option>
                <option value="Wali">Wali</option>
                <option value="Saudara">Saudara</option>
              </select>
              <small class="form-text text-muted"></small>
            <?= form_error('biaya', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
             <div class="form-group">
            <label for="kebutuhan_khusus">Kebutuhan Khusus <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="kebutuhan_khusus" >
              <option value="-">-</option>
              <option value="Tuna Netra">Tuna Netra</option>
                <option value="Tuna Rungu">Tuna Rungu</option>
                <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
                <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
                <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
                <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
                <option value="Down Syndrome">Down Syndrome</option>
                <option value="Autis">Autis</option>
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('kebutuhan_khusus', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
            <label for="disabilitas">Kebutuhan Disabilitas <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="disabilitas" >
              <option value="-">-</option>
              <option value="Kebutuhan fisik">Kebutuhan fisik</option>
                <option value="Kebutuhan sensorik">Kebutuhan sensorik</option>
                <option value="Kebutuhan kognitif">Kebutuhan kognitif</option>
                <option value="Kebutuhan komunikasi">Kebutuhan komunikasi</option>
                <option value="Kebutuhan sosial dan emosional">Kebutuhan sosial dan emosional</option>
                <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
                <option value="Kebutuhan pendidikan inklusif">Kebutuhan pendidikan inklusif</option>
                <option value="Kebutuhan pekerjaan dan karier">Kebutuhan pekerjaan dan karier</option>
                <option value="Kebutuhan aksesibilitas lingkungan">Kebutuhan aksesibilitas lingkungan</option>
                
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('disabilitas', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
          <a href="<?= base_url('calonsiswa/kelengkapandata/datasiswa') ?>" class="btn btn-danger">Tutup</a>
          <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>
