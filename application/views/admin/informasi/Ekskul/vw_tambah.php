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
            Tambah Ekskul
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Ekskul
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama_ekskul">Nama Ekskul</label>
							<input name="nama_ekskul" type="text" value="<?= set_value('nama_ekskul'); ?>" class="form-control" id="nama_ekskul" placeholder="Nama Ekskul">
							<?= form_error('nama_ekskul', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="deskripsi">Isi Ekskul</label>
							<input name="deskripsi" type="text" value="<?= set_value('deskripsi'); ?>" class="form-control" id="deskripsi" placeholder="Deskripsi Ekskul">
							<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="gambar">Gambar</label>
							<input name="gambar" type="file" value="<?= set_value('gambar'); ?>" class="form-control" id="gambar" placeholder="Gambar">
							<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Ekskul</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>