<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/informasi/prestasi'); ?>">Prestasi</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Prestasi
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Prestasi
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_prestasi" value="<?= $prestasi['id_prestasi']; ?>">
						<div class="form-group">
							<label for="nama_prestasi">Nama Prestasi</label>
							<input name="nama_prestasi" value="<?= $prestasi['nama_prestasi']; ?>" type="text" class="form-control" id="nama_prestasi" placeholder="Nama Prestasi">
							<?= form_error('nama_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi Prestasi</label>
							<input name="deskripsi" value="<?= $prestasi['deskripsi']; ?>" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Prestasi">
							<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="gambar">Gambar</label>
							<input name="gambar" type="file" value="<?= set_value('gambar'); ?>" class="form-control" id="gambar" placeholder="Gambar">
							<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('Admin/Informasi/Prestasi') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Prestasi</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
