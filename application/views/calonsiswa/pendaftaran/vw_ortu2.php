<div class="container-fluid" >
  <?php if (count($orangtua) == 0): ?>

 
  <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>
  <div class="row justify-content-center">
    <div class="col-md-12 ">
      <div class="card">
           <form action="<?= base_url('CalonSiswa/Pendaftaran/Ortu/add'); ?>" method="POST"
                class="form-horizontal form-label-left">
     <div class="card-header">DATA IBU KANDUNG</div>
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_ibu">Nama Ibu Kandung <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nama_ibu" required="required" type="text" placeholder="Masukkan Nama Lengkap ibu anda..." value="<?= set_value('nama_ibu'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('nama_ibu', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="nik_ibu">NIK Ibu<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nik_ibu" required="required" type="text"
                placeholder="Masukkan Nama Lengkap Ibu anda..." value="<?= set_value('nik_ibu'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('nik_ibu', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="tempat_lahir_ibu">Tempat Lahir Ibu <span class="text-danger">*</span></label>
            <input type="text" class="form-control datepicker" name="tempat_lahir_ibu" required="required" type="text"
                placeholder="Masukkan Tempat lahir ibu anda..." value="<?= set_value('tempat_lahir_ibu'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('tempat_lahir_ibu', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="tgl_lahir_ibu">Tanggal Lahir Ibu <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="tgl_lahir_ibu" required="required" type="text"
                placeholder="Masukkan  tanggal lahir ibu anda..." value="<?= set_value('tgl_lahir_ibu'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('tgl_lahir_ibu', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="keterangan_ibu">Keterangan ibu <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="keterangan_ibu" required="required"
                type="text" placeholder="Masukkan keterangan ibu anda...">
                <option>Masih Hidup</option>
                <option>Meninggal Dunia</option>
            </select>
            <small class="form-text text-muted"></small>
            <?= form_error('keterangan_ayah', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="pendidikan_ibu">Pendidikan Ibu <span class="text-danger">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="pendidikan_ibu" required="required"
                type="text" placeholder="Masukkan keterangan ibu anda...">
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
        <div class="form-group">
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
        <div class="form-group">
            <label for="golongan_ibu">Golongan<span class="text-danger">(khusus PNS)</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="golongan_ibu" required="required" type="text"
                placeholder="Masukkan keterangan ibu anda...">
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
        <div class="form-group">
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
        <div class="form-group">
            <label for="email_ayah">Email Ibu <span class="text-danger">*</span></label>
            <input type="text" class="form-control datepicker" name="email_ayah" required="required" type="text"
                placeholder="Masukkan Tempat lahir ayah anda..." value="<?= set_value('email_ayah'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('email_ayah', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="no_hp_ibu">NO HP Ibu <span class="text-danger">*</span></label>
            <input type="text" class="form-control datepicker" name="no_hp_ibu" required="required" type="text"
                placeholder="Masukkan Tempat lahir ibu anda..." value="<?= set_value('no_hp_ibu'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('no_hp_ibu', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
            <div class="form-group">
                <label for="alamat_ortu">Alamat Jalan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_ortu" required="required" type="text"
                    placeholder="Masukkan alamat orang tua anda..." value="<?= set_value('alamat_ortu'); ?>">
            <small class="form-text text-muted"></small>
            <?= form_error('alamat_ortu', '<small class="form-text text-danger">', '</small>'); ?>
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
      <p>Kembali ke <a href="<?=base_url('calonsiswa/home');?>">Dashboard</a></p>
    </section>
    <?php endif; ?>
</div>
