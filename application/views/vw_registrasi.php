<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB | MTS Al-Furqon</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=<?= base_url("assets/img/favicon.png") ?> rel="icon">
    <link href=<?= base_url("assets/img/User_V_i_P-Home.png") ?> rel="User_V_i_P-Home">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=<?= base_url("assets/vendor/aos/aos.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/glightbox/css/glightbox.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/swiper/swiper-bundle.min.css") ?> rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=<?= base_url("assets/css/style.css") ?> rel="stylesheet">


</head>

<body>



    <section class="vh-100" style="background-color: #4e73df;">

        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Registrasi</h2>
                            <p class="text-center">Silahkan Buat Akun Anda</p>
                                <?php if ($konfigurasi['setdaftar'] == 'Buka'): ?>
                                    <form action="<?= base_url('Auth/regis'); ?>" method="POST" id="contactForm"
                                        enctype="multipart/form-data">
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="nama_lengkap" id="nama_lengkap"
                                                required="required" type="text" placeholder="Masukkan Nama Lengkap anda..."
                                                value="<?= set_value('nama_lengkap'); ?>" />
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- Phone number input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="no_hp" id="no_hp" required="required"
                                                type="text" placeholder="Masukkan NO HP anda..."
                                                value="<?= set_value('no_hp'); ?>" />
                                            <label for="no_hp">NO HP</label>
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" id="username" required="required"
                                                type="text" placeholder="Masukkan Username anda..."
                                                value="<?= set_value('username'); ?>" />
                                            <label for="username">Username</label>
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- Username input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="password" required="required"
                                                type="password" placeholder="Masukkan Password anda..."
                                                value="<?= set_value('password'); ?>" />
                                            <label for="password">Password</label>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>


                                        <div class="d-grid">

                                            <button type="submit" class="btn btn-primary" name="tambah">Daftar</button>

                                        </div>

                                    </form>
                                <?php else: ?>
                                    <section class="col-sm-12 mb-5">
                                        <div class="page-header">
                                            <h3>MAAF PENDAFTARAN SUDAH DITUTUP</h3>
                                        </div>
                                        <p>Silahkan tunggu pendaftaran dibuka <a href="<?= base_url('Landing'); ?>">Kembali ke
                                                home</a></p>
                                    </section>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vendor JS Files -->
    <script src=<?= base_url("assets/vendor/purecounter/purecounter_vanilla.js") ?>></script>
    <script src=<?= base_url("assets/vendor/aos/aos.js") ?>></script>
    <script src=<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
    <script src=<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>></script>
    <script src=<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>></script>
    <script src=<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>></script>
    <script src=<?= base_url("assets/vendor/waypoints/noframework.waypoints.js") ?>></script>
    <script src=<?= base_url("assets/vendor/php-email-form/validate.js") ?>></script>

    <!-- Template Main JS File -->
    <script src=<?= base_url("assets/js/main.js") ?>></script>

</body>

</html>