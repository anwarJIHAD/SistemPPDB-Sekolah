<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/pengguna'); ?>">Data Pengguna</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Pengguna
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Ubah Pengguna
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pengguna" value="<?= $pengguna['id_pengguna']; ?>">
                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <input name="nama_pengguna" value="<?= $pengguna['nama_pengguna']; ?>" type="text"
                                class="form-control" id="nama_pengguna" placeholder="Nama pengguna">
                            <?= form_error('nama_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="hp_pengguna">HP Pengguna</label>
                            <input name="hp_pengguna" value="<?= $pengguna['hp_pengguna']; ?>" type="text"
                                class="form-control" id="hp_pengguna" placeholder="hp_pengguna pengguna">
                            <?= form_error('hp_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" value="<?= $pengguna['username']; ?>" type="text"
                                class="form-control" id="username" placeholder="username pengguna">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                       <div class="form-group">
							<label for="password">Password</label>
							<input name="password" type="text" value="<?= set_value('password'); ?>" class="form-control" id="password"
                            placeholder="password pengguna">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                       
                       

                        <a href="<?= base_url('Admin/pengguna') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah pengguna</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>