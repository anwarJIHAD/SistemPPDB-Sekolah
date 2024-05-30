<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">
    <?php echo $judul; ?>
  </h1>
  <div class="row justify-content-center">
    <div class="col-md-12 ">
      <div class="card">
        <form action="" method="POST" class="form-horizontal form-label-left">
          <div class="card-header">DATA AYAH KANDUNG</div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama_ayah">Nama ayah Kandung <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nama_ayah" required="required" type="text"
                    placeholder="Masukkan Nama Lengkap Ayah anda..." value="<?= $orangtua['nama_ayah']; ?>">
                  <small class="form-text text-muted"></small>
                  <?= form_error('nama_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="nik_ayah">NIK Ayah<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nik_ayah" required="required" type="text"
                    placeholder="Masukkan NIK Ayah anda..." value="<?= $orangtua['nik_ayah']; ?>">
                  <small class="form-text text-muted"></small>
                  <?= form_error('nik_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="tempat_lahir_ayah">Tempat Lahir Ayah <span class="text-danger">*</span></label>
                  <input type="text" class="form-control datepicker" name="tempat_lahir_ayah" required="required"
                    type="text" placeholder="Masukkan Tempat lahir ayah anda..."
                    value="<?= $orangtua['tempat_lahir_ayah']; ?>">
                  <small class="form-text text-muted"></small>
                  <?= form_error('tempat_lahir_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="tgl_lahir_ayah">Tanggal Lahir Ayah <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" name="tgl_lahir_ayah" required="required" type="text"
                    placeholder="Masukkan  tanggal lahir ayah anda..." value="<?= $orangtua['tgl_lahir_ayah']; ?>">
                  <small class="form-text text-muted"></small>
                  <?= form_error('tgl_lahir_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="keterangan_ayah">Keterangan Ayah <span class="text-danger">*</span></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="keterangan_ayah" required="required"
                    type="text" placeholder="Masukkan keterangan ayah anda...">
                    <option>Masih Hidup</option>
                    <option>Meninggal Dunia</option>
                  </select>
                  <small class="form-text text-muted"></small>
                  <?= form_error('keterangan_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="pendidikan_ayah">Pendidikan Ayah <span class="text-danger">*</span></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="pendidikan_ayah" required="required"
                    type="text" placeholder="Masukkan keterangan ayah anda...">
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                    <option>Tidak Sekolah</option>
                  </select>
                  <small class="form-text text-muted"></small>
                  <?= form_error('pendidikan_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="pekerjaan_ayah">Pekerjaan Ayah <span class="text-danger"></span></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="pekerjaan_ayah">
                    <option>Tidak Bekerja</option>
                    <option>Pegawai CPI</option>
                    <option>PNS</option>
                    <option>Nelayan</option>
                    <option>Petani</option>
                    <option>Peternak</option>
                    <option>TNI/POLRI</option>
                    <option>Karyawan Swasta</option>
                    <option>Pedagang Kecil</option>
                    <option>Pedagang Besar</option>
                    <option>Wiraswasta</option>
                    <option>Wirausaha</option>
                    <option>Buruh</option>
                    <option>Pensiunan</option>
                    <option>Lain-lain</option>
                  </select>
                  <small class="form-text text-muted"></small>
                  <?= form_error('pekerjaan_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="golongan_ayah">Golongan<span class="text-danger">(khusus PNS)</span></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="golongan_ayah" required="required"
                    type="text" placeholder="">
                    <option>I/a</option>
                    <option>I/b</option>
                    <option>I/c</option>
                    <option>I/d</option>
                    <option>II/a</option>
                    <option>II/b</option>
                    <option>II/c</option>
                    <option>II/d</option>
                    <option>III/a</option>
                    <option>III/b</option>
                    <option>IIIc</option>
                    <option>III/d</option>
                    <option>IV/a</option>
                    <option>IV/b</option>
                    <option>IV/c</option>
                    <option>IV/d</option>
                  </select>
                  <small class="form-text text-muted"></small>
                  <?= form_error('golongan_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="penghasilan_ayah">Penghasilan Bulanan <span class="text-danger"></span></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="penghasilan_ayah">
                    <option>Kurang dari 500.000</option>
                    <option>500.000 - 999.999</option>
                    <option>1 juta - 1.999.999</option>
                    <option>2 juta - 4.999.999</option>
                    <option>5 juta - 20 juta</option>
                    <option>Lebih dari 20 juta</option>
                  </select>
                  <small class="form-text text-muted"></small>
                  <?= form_error('penghasilan_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="email_ayah">Email Ayah <span class="text-danger">*</span></label>
                  <input type="text" class="form-control datepicker" name="email_ayah" required="required" type="text"
                    placeholder="Masukkan Email ayah anda..." value="<?= $orangtua['email_ayah']; ?>">
                  <small class="form-text text-muted"></small>
                  <?= form_error('email_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="no_hp_ayah">NO HP Ayah <span class="text-danger">*</span></label>
                  <input type="text" class="form-control datepicker" name="no_hp_ayah" required="required" type="text"
                    placeholder="Masukkan No HP Ayah anda..." value="<?= $orangtua['no_hp_ayah']; ?>">
                  <small class="form-text text-muted"></small>
                  <?= form_error('no_hp_ayah', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
              </div>
          </div>
          <div class="card-header">DATA IBU KANDUNG</div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_ibu">Nama Ibu Kandung <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_ibu" required="required" type="text"
                  placeholder="Masukkan Nama Lengkap Ibu anda..." value="<?= $orangtua['nama_ibu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('nama_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="nik_ibu">NIK Ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik_ibu" required="required" type="text"
                  placeholder="Masukkan NIK Ibu anda..." value="<?= $orangtua['nik_ibu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('nik_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="tempat_lahir_ibu">Tempat Lahir Ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control datepicker" name="tempat_lahir_ibu" required="required"
                  type="text" placeholder="Masukkan Tempat lahir Ibu anda..."
                  value="<?= $orangtua['tempat_lahir_ibu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('tempat_lahir_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="tgl_lahir_ibu">Tanggal Lahir Ibu <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tgl_lahir_ibu" required="required" type="text"
                  placeholder="Masukkan  tanggal lahir Ibu anda..." value="<?= $orangtua['tgl_lahir_ibu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('tgl_lahir_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="keterangan_ibu">Keterangan Ibu <span class="text-danger">*</span></label>
                <select class="form-control" id="exampleFormControlSelect1" name="keterangan_ibu" required="required"
                  type="text" placeholder="Masukkan keterangan Ibu anda...">
                  <option>Masih Hidup</option>
                  <option>Meninggal Dunia</option>
                </select>
                <small class="form-text text-muted"></small>
                <?= form_error('keterangan_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="pendidikan_ibu">Pendidikan Ibu <span class="text-danger">*</span></label>
                <select class="form-control" id="exampleFormControlSelect1" name="pendidikan_ibu" required="required"
                  type="text" placeholder="">
                  <option>SD</option>
                  <option>SMP</option>
                  <option>SMA</option>
                  <option>S1</option>
                  <option>S2</option>
                  <option>S3</option>
                  <option>Tidak Sekolah</option>
                </select>
                <small class="form-text text-muted"></small>
                <?= form_error('pendidikan_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="pekerjaan_ibu">Pekerjaan Ibu <span class="text-danger"></span></label>
                <select class="form-control" id="exampleFormControlSelect1" name="pekerjaan_ibu">
                  <option>Tidak Bekerja</option>
                  <option>Pegawai CPI</option>
                  <option>PNS</option>
                  <option>Nelayan</option>
                  <option>Petani</option>
                  <option>Peternak</option>
                  <option>TNI/POLRI</option>
                  <option>Karyawan Swasta</option>
                  <option>Pedagang Kecil</option>
                  <option>Pedagang Besar</option>
                  <option>Wiraswasta</option>
                  <option>Wirausaha</option>
                  <option>Buruh</option>
                  <option>Pensiunan</option>
                  <option>Lain-lain</option>
                </select>
                <small class="form-text text-muted"></small>
                <?= form_error('pekerjaan_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="golongan_Ibu">Golongan<span class="text-danger">(khusus PNS)</span></label>
                <select class="form-control" id="exampleFormControlSelect1" name="golongan_ibu" required="required"
                  type="text" placeholder="">
                  <option>I/a</option>
                  <option>I/b</option>
                  <option>I/c</option>
                  <option>I/d</option>
                  <option>II/a</option>
                  <option>II/b</option>
                  <option>II/c</option>
                  <option>II/d</option>
                  <option>III/a</option>
                  <option>III/b</option>
                  <option>IIIc</option>
                  <option>III/d</option>
                  <option>IV/a</option>
                  <option>IV/b</option>
                  <option>IV/c</option>
                  <option>IV/d</option>
                </select>
                <small class="form-text text-muted"></small>
                <?= form_error('golongan_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="penghasilan_ibu">Penghasilan Bulanan <span class="text-danger"></span></label>
                <select class="form-control" id="exampleFormControlSelect1" name="penghasilan_ibu">
                  <option>Kurang dari 500.000</option>
                  <option>500.000 - 999.999</option>
                  <option>1 juta - 1.999.999</option>
                  <option>2 juta - 4.999.999</option>
                  <option>5 juta - 20 juta</option>
                  <option>Lebih dari 20 juta</option>
                </select>
                <small class="form-text text-muted"></small>
                <?= form_error('penghasilan_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="email_ibu">Email Ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control datepicker" name="email_ibu" required="required" type="text"
                  placeholder="Masukkan Email Ibu anda..." value="<?= $orangtua['email_ibu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('email_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="no_hp_ibu">NO HP Ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control datepicker" name="no_hp_ibu" required="required" type="text"
                  placeholder="Masukkan No HP Ibu anda..." value="<?= $orangtua['no_hp_ibu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('no_hp_ibu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="alamat_ortu">Alamat Jalan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_ortu" required="required" type="text"
                  placeholder="Masukkan alamat orang tua anda..." value="<?= $orangtua['alamat_ortu']; ?>">
                <small class="form-text text-muted"></small>
                <?= form_error('alamat_ortu', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="jml_tanggungan">Jumlah Tanggungan <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="number" class="form-control" name="jml_tanggungan" required="required" type="text"
                    placeholder="" value="<?= $orangtua['jml_tanggungan']; ?>">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Orang</div>
                  </div>
                </div>
                <small class="form-text text-muted"></small>
                <?= form_error('jml_tanggungan', '<small class="form-text text-danger">', '</small>'); ?>
              </div>
            </div>
            <a href="<?= base_url('calonsiswa/kelengkapandata/dataortu') ?>" class="btn btn-danger">Tutup</a>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
        </form>
      </div>
    </div>

  </div>
</div>