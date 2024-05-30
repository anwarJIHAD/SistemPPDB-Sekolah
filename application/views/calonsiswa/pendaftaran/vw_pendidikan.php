<div class="container-fluid">
    <?php if (count($pendidikan) == 0): ?>
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">

                    <form action="<?= base_url('CalonSiswa/Pendaftaran/Pendidikan/add'); ?>" method="POST"
                        class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="asal_sekolah" required="required" type="text"
                                placeholder="Masukkan asal sekolah Anda..." value="<?= set_value('asal_sekolah'); ?>">
                            <small class="form-text text-muted"></small>
                            <?= form_error('asal_sekolah', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nisn" required="required" type="text"
                                placeholder="Masukkan tempat lahir anda..." value="<?= set_value('nisn'); ?>">
                            <small class="form-text text-muted"></small>
                            <?= form_error('nisn', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="npsn">NPSN <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="npsn" required="required" type="text"
                                placeholder="Masukkan tempat lahir anda..." value="<?= set_value('npsn'); ?>">
                                <small class="form-text text-muted"></small>
                                <?= form_error('npsn', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                             <div class="form-group">
                            <label for="status_sekolah">Status Sekolah <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="status_sekolah"
                                required="required" type="text" placeholder="Masukkan tempat tinggal anda...">
                                <option value="Negeri"> Negeri</option>
                                <option value="Swasta">Swasta</option>
                                <option value="Akreditasi">Akreditasi</option>
                                
                            </select>
                            <small class="form-text text-muted"></small>
                            <?= form_error('status_sekolah', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="no_ijazah">Nomor Ijazah <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="no_ijazah" required="required" type="text"
                                placeholder="Masukkan tempat lahir anda..." value="<?= set_value('no_ijazah'); ?>">
                                <small class="form-text text-muted"></small>
                                <?= form_error('no_ijazah', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="tgl_ijazah">Tanggal Ijazah <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="tgl_ijazah" required="required" type="text"
                                        placeholder="Masukkan tanggal lahir anda..." value="<?= set_value('tgl_ijazah'); ?>">
                            <small class="form-text text-muted"></small>
                            <?= form_error('tgl_ijazah', '<small class="form-text text-danger">', '</small>'); ?>
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