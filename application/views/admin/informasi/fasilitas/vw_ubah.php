<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/informasi/fasilitas'); ?>">Fasilitas</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Fasilitas
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Fasilitas
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">
						<div class="form-group">
							<label for="nama_fasilitas">Nama Fasilitas</label>
							<input name="nama_fasilitas" value="<?= $fasilitas['nama_fasilitas']; ?>" type="text" class="form-control" id="nama_fasilitas" placeholder="Nama Fasilitas">
							<?= form_error('nama_fasilitas', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi Fasilitas</label>
							<input name="deskripsi" value="<?= $fasilitas['deskripsi']; ?>" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Fasilitas">
							<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="gambar">Gambar</label>
							<input name="gambar" type="file" value="<?= set_value('gambar'); ?>" class="form-control" id="gambar" placeholder="Gambar">
							<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('Admin/Informasi/Fasilitas') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Fasilitas</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
