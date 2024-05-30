<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB | MIM 01 PEKANBARU</title>
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
  <link href=<?= base_url("assets/css/style2.css") ?> rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.9.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h2 class="logo"><a style="position:absolute;" class="logo"><a href="#hero"><img
              src="assets\img\Logo MTs Al-Furqon.png" alt="" style="width:50px; margin-right: 30px">MIM 01 PEKANBARU</a>
      </h2>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src=<?= base_url("assets/img/logo.png") ?> alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#visimisi">Visi Misi</a></li>
          <li><a class="nav-link scrollto " href="#ekskul">Ekskul</a></li>
          <li><a class="nav-link scrollto" href="#fasilitas">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="#prestasi">Prestasi</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="Auth">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>SELAMAT DATANG <span>MIM 01 PEKANBARU</span></h1>
      <h2 style="font-size:20px;text-align:justify">Website ini merupakan website resmi Pendaftaran Peserta Didik Baru
        MIM 01 Pekanbaru. Untuk melakukan pendaftaran silahkan klik menu daftar atau jika sudah mendaftar
        silahkan cetak bukti pendaftarannya melalui menu print.Untuk informasi lebih lanjut bisa menghubungi Panitia
        PPDB melalui No.Tlp/HP berikut 081365471584</h2>


      <div class="d-flex">
        <a href="<?= base_url('Auth/regis/'); ?>" class="btn-get-started scrollto">Daftar</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
          data-aos-delay="100" style="text-align: justify;font-size:16px;">
          <h3> - Syarat-Syarat Pendaftaran</h3>
          <P><br>1. Mengisi Formulir Pendaftaran di Website MI Muhammadiyah 01 Pekanbaru
            <br>2. Scan Asli Kartu Keluarga
            <br>3. Scan Asli Ijazah/SKL
            <br>4. Scan Asli Akte Kelahiran
            <br>5. Scan Asli Kartu Indonesia Pintar(Jika Ada)
            <br>6. Scan Asli KTP Orang Tua / Wali Murid
            <br>7. Scan Asli Pas Foto 3X4
            <br>8. Scan Bukti Permbayaran
          </P>
          <h3> - Rincian Pembayaran </h3>
          <P>
            <br>Uang Pendaftaran Sebesar Rp.100.000,00
            <br>Dapat ditransfer pada NoRek:000201043229502 A/N: Muji Rahayu
          </P>
          <h3> - Jadwal Penerimaan Siswa Baru TA
            <?php $i = 1; ?>
            <?php foreach ($konfigurasi as $us): ?>

              <?= $us['tahun_ajaran']; ?>
              <?= $us['gelombang']; ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </h3>

          <?php $i = 1; ?>
          <?php foreach ($konfigurasi as $us): ?>
            <p>
              1. Pendaftaran :
              <?= strftime('%d %B %Y', strtotime($us['tgl_buka'])); ?> S/d
              <?= strftime('%d %B %Y', strtotime($us['tgl_tutup'])); ?>
              </h4>
              <?php $i++; ?>
            <?php endforeach; ?>
          </p>
          <?php $i = 1; ?>
          <?php foreach ($pengumuman as $us): ?>
            <p>
              2. Pengumuman :
              <?= strftime('%d %B %Y', strtotime($us['tgl_buka'])); ?> S/d
              <?= strftime('%d %B %Y', strtotime($us['tgl_tutup'])); ?>
              </h4>
              <?php $i++; ?>
            <?php endforeach; ?>
          </p>
        </div>
      </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>

        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" style="margin-top:50px">
            <img src="assets/img/cakaplah_sknfq_11322.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100" style="text-align: justify;font-size:14px;">
            <h3>Sejarah</h3>
            <p>

              MI Muhammadiyah 01 Pekanbaru berdiri pada tanggal 23 Juni 2008 yang diprakasai oleh Pimpinan Cabang
              Muhammadiyah Rumbai. Diawal tahun berdirinya, MI Muhammadiyah 01 Pekanbaru masih menumpang di ruangan pada
              TK Aisyiyah Bustanul Atfal (ABA) XII Rumbai. Dengan jumlah murid enam orang dan guru dua orang. Dihari
              pertama jumlah murid yang sedikit timbul kegamangan diantara para pengurus, namum setelah mengadakan rapat
              dan kembali menguatkan tekad serta bersama sama membaca Basmalla, maka kegiatan belajar mengajar di MI
              Muhammadiyah 01 Pekanbaru tetap dilanjutkan seperti kata pepatah di Bumi Lancang Kuning ini” Sekali layar
              berkembang, pantang surut kebelakang”. Seminggu setelah kemudian mendaftar seorang murid lagi, sehingga
              akhirnya pada tahun pertama jumlah murid MI Muhammadiyah 01 Pekanbaru berjumlah tujuh orang dan dikenal
              dengan “ setengah laskar pelangi”. </p>
            <p>
              Pada tahun 2009, gedung MI Muhamamdiyah 01 resmi berdiri, meskipun masih satu lantai. Jumlah siswa yang
              mendaftar pun meningkat. Dikelas satu 12 orang, sedangkan dikelas dua bertambah tiga orang sehingga
              berjumlah 10 orang siswa. Sejak tahun kedua dan sampai tahun 2019 ini, animo masyarakat terhadap MI
              Muhammadiyah 01 Pekanbaru sangatlah tinggi. Ini bisa dilihat dari perubahan jumlah siswa yang awalnya 7
              siswa sekarang berjumlah 305 siswa.</P>
            <p>Semakin banyak siswa maka guru yang diperlukanjuga banyak. Keadaan guru dan karyawan di Madrasah
              Ibtidaiyah Muhammadiyah 01 Pekanbaru pada tahun 2019 berjumlah 27 orang, yang terdiri dari 1 Kepala
              Madrasah, 23 Orang guru ,1 Kepala Tata usaha dan 2 orang Jenitor/ karyawan kebersihan </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= VisiMisi ======= -->
    <section id="visimisi" class="visimisi section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi Misi</h2>
          <h3>Visi</h3>
          <p class="visiMisi">“Berprestasi, Berakhlaktul Kharimah, Peduli dan Berbudaya Lingkungan”</p>
          <h3>Misi</h3>
          <P class="visiMisi" style="margin-top:-10px;">
            <br>1. Melaksanakan KBM yang Efektif dan Menyenangkan
            <br>2. Meningkatkan patriotisme dan profesionalisme guru
            <br>3. Menjadikan orang tua murid menjadi mitra kependidikan
            <br>4. Menanamkan nilai – nilai agama dengan pendekatan model dan tauladan
            <br>5. Menyeimbangkan antara pendidikan umum dan pendidikan agama
          </P>

        </div>
      </div>
    </section><!-- End visimisi Section -->

    <!-- ======= ekskul Section ======= -->
    <section id="ekskul" class="ekskul">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Ekstrakurikuler</h2>
          <h3>Ekstrakurikuler <span>MIM 01 Pekanbaru</span></h3>
        </div>

        <div class="row">

          <?php $i = 1; ?>
          <?php foreach ($ekskul as $us): ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <span class="border border-white">
                <div class="member">
                  <div class="member-img">
                    <img src=" <?= base_url('uploads/') . $us['gambar']; ?>" class="img-fluid" alt="">
                  </div>
                  <h4>
                    <?= $us['nama_ekskul']; ?>
                  </h4>
                  <p style="font-size:14px;text-align:justify">
                    <?= $us['deskripsi']; ?>
                  </p>
              </span>


            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>

        <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nasyid</h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Seni Tari</h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>xyz</h4>
              </div>
            </div>
          </div> -->

      </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="fasilitas" class="fasilitas section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fasilitas</h2>
          <h3>Fasilitas <span>MIM 01 Pekanbaru</span></h3>
        </div>

        <div class="row">

          <?php $i = 1; ?>
          <?php foreach ($fasilitas as $us): ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <span class="border border-white">
                <div class="member">
                  <div class="member-img">
                    <img src=" <?= base_url('uploads/') . $us['gambar']; ?>" class="img-fluid" alt="">

                  </div>
                  <div class="member-info">
                    <h4>
                      <?= $us['nama_fasilitas']; ?>
                    </h4>
                    <p style="font-size:14px;text-align:justify">
                      <?= $us['deskripsi']; ?>
                    </p>
              </span>
            </div>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>



      <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>Ruang Kelas</h4>

              </div>
            </div>
          </div> -->

      </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="prestasi" class="prestasi section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Prestasi</h2>
          <h3>Prestasi <span>MIM 01 Pekanbaru</span></h3>
        </div>

        <div class="row">

          <?php $i = 1; ?>
          <?php foreach ($prestasi as $us): ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <span class="border border-white">
                  <div class="member-img">
                    <img src=" <?= base_url('uploads/') . $us['gambar']; ?>" class="img-fluid" alt="">

                  </div>
                  <div class="member-info">
                    <h4>
                      <?= $us['nama_prestasi']; ?>
                    </h4>
                    <p style="font-size:14px;text-align:justify">
                      <?= $us['deskripsi']; ?>
                    </p>
                </span>
              </div>
            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>

      </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Kontak Kami</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Umbansari Atas, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau 28265</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>mi01pekanbaru08@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telephone</h3>
              <p>081365471584</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        </div>

      </div>


  </main><!-- End #main -->

  <footer id="footer">


    <div class="container py-4">
      <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted">Copyright &copy; PPDB | MIM 01 PEKANBARU</div>

      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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