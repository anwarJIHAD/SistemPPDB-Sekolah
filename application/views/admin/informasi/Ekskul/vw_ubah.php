<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/informasi/ekskul'); ?>">Ekskul</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Ekskul
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Ekskul
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_ekskul" value="<?= $ekskul['id_ekskul']; ?>">
						<div class="form-group">
							<label for="nama_ekskul">Judul</label>
							<input name="nama_ekskul" value="<?= $ekskul['nama_ekskul']; ?>" type="text" class="form-control" id="nama_ekskul" placeholder="Nama Ekskul">
							<?= form_error('nama_ekskul', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="deskripsi">Isi Ekskul</label>
							<input name="deskripsi" value="<?= $ekskul['deskripsi']; ?>" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Ekskul">
							<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="gambar">Gambar</label>
							<input name="gambar" type="file" value="<?= set_value('gambar'); ?>" class="form-control" id="gambar" placeholder="Gambar">
							<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('Admin/Informasi/Ekskul') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Ekskul</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
