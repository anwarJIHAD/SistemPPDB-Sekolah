<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Siswa
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama_lengkap">Nama Lengkap</label>
							<input name="nama_lengkap" type="text" value="<?= set_value('nama_lengkap'); ?>" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
							<?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="no_hp">No HP</label>
							<input name="no_hp" type="text" value="<?= set_value('no_hp'); ?>" class="form-control" id="no_hp" placeholder="No HP">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="username">Username</label>
							<input name="username" type="text" value="<?= set_value('username'); ?>" class="form-control" id="username" placeholder="Kajur">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
<div class="form-group">
							<label for="password">Password</label>
							<input name="password" type="password" value="<?= set_value('password'); ?>" class="form-control" id="password" placeholder="Kajur">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Siswa</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>