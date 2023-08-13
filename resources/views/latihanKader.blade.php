<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HMI Denpasar - TMKP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/LandingPage/img/tmkp-logo-copy.png')}}" rel="icon">
  <link href="{{url('assets/LandingPage/img/tmkp-logo-copy.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/LandingPage/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/LandingPage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/LandingPage/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/LandingPage/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/LandingPage/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/LandingPage/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('assets/LandingPage/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/LandingPage/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background: #009b4c;">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto"><img src="assets/LandingPage/img/tmkp-logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="/"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="/#about">Tentang TMKP</a></li>
              <li><a class="nav-link scrollto" href="/#services">Pengurus TMKP</a></li>
              <li><a class="nav-link scrollto" href="/#portfolio">Foto & Video</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/berita">Berita TMKP</a></li>
          <li><a class="nav-link scrollto" href="/panduanHmi">Panduan HMI</a></li>
          <li><a class="nav-link scrollto" href="/latihanKader">Latihan Kader (LK1)</a></li>
          @if(empty(auth()->user()))
          <li><a class="getstarted" href="/login">Login</a></li>
          @else
          <li><a class="getstarted" href="/home">Dashboard</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
    
  </section>
  <!-- <section id="hero" class="d-flex align-items-center" style="background: #009b4c;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1 style="font-size: 35px;">HIMPUNAN MAHASISWA ISLAM KOMISARIAT TMKP</h1>
          <h2>Teknik, MIPA, Kelautan & Perikanan</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Daftar Sekarang</a>
            <a href="#" class="glightbox btn-watch-video"><span>Hubungi Kami</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/tmkp-logo-copy.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section> -->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> --><!-- End Cliens Section -->
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-title">
              <h2 style="color: #009b4c">Latihan Kader 1</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <?php
        if($setPage != 2)
        {
        ?>
        <div class="row content">
          <div class="col-sm-12" align="center">
            <img src="{{url('Assets/pic/lk1.jpeg')}}" align="center" class="img-fluid img-thumbnail border border-success" width="900" style="border-color: #009b4c">
          </div>
          <div class="col-sm-12 pt-5" align="justify">
            <p>
              Latihan Kader 1 merupakan kegiatan Himpunan Mahasiswa Islam dalam rangka "Pengkaderan" Kader Baru. Kegiatan Latihan Kader 1
              dipusatkan pada kegiatan diskusi yang terdiri dari
            </p>
            <div class="ml-10">
              <ul style="list-style-type:circle; margin-left: 20px">
                <li>Sejarah Peradaban Islam dan HMI</li>
                <li>Mission HMI</li>
                <li>Kepemimpinan dan Manajemen Organisasi</li>
                <li>Konstitusi HMI</li>
                <li>Pengantar Filsafat dan NDP (Nilai Dasar Perjuangan)</li>
                <li>Ke-Kohatian</li>
                <li>Teknik Persidangan</li>
              </ul>
            </div>
              <p>Selain diskusi, terdapat kegiatan-kegiatan lain seperti Coffee Break, Games, Refreshing, dan kegiatan lain yang seru untuk diikuti.</p>
            </p>
            <div class="row pt-4">
              <div class="col-sm-12 col-md-12 col-lg-4">
                <p><b>Keuntungan Masuk HMI</b></p>
                <div class="ml-10">
                  <ul style="list-style-type:circle; margin-left: 20px">
                    <li>Relasi</li>
                    <li>Ilmu yang bermanfaat</li>
                    <li>Mengasah Softskill & Hardskill</li>
                    <li>Jodoh Jika Beruntung</li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <p><b>Fasilitas</b></p>
                <div class="ml-10">
                  <ul style="list-style-type:circle; margin-left: 20px">
                    <li>Diskusi/Forum</li>
                    <li>Coffee Break</li>
                    <li>Konsumsi Selama Kegiatan</li>
                    <li>Penginapan</li>
                    <li>Sertifikat</li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <p><b>Persyaratan</b></p>
                <div class="ml-10">
                  <ul style="list-style-type:circle; margin-left: 20px">
                    <li>Beragama Islam</li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 pt-4 pb-4" align="center">
                <p><b>Kegiatan LK 1 TMKP Akan Dilangsungkan Pada</b></p>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 pt-4 pb-4" align="center">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="pl-5 pr-10" width="50" height="50" viewBox="0 0 24 24">
                    <path fill="#009b4c" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/>
                    <path fill="#009b4c" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"/>
                  </svg>
                  <p>08 s/d 10 September 2023</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 pt-4 pb-4" align="center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                  <path fill="#009b4c" d="m12 17l1-2V9.858c1.721-.447 3-2 3-3.858c0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2zM10 6c0-1.103.897-2 2-2s2 .897 2 2s-.897 2-2 2s-2-.897-2-2z"/>
                  <path fill="#009b4c" d="m16.267 10.563l-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z"/>
                </svg>
                <p>Villa Lake View, Bedugul, Tabanan, Bali</p>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        else{
          ?>
          <div class="row">
              <div class="col-sm-12 col-md-12 pb-4 text-center col-lg-12 mt-4 bg-success">
                <p class="text-center pt-4 text-light">
                  Terima Kasih Sudah Mendaftar! Untuk Mendapatkan Informasi Lebih Lanjut, Silahkan Join Grup Berikut! 
                </p>
                <a class="text-center text-light" href="https://chat.whatsapp.com/DihvYwTs3eC2jXrPDHlUaS">
                  <u>https://chat.whatsapp.com/DihvYwTs3eC2jXrPDHlUaS</u>
                </a>
              </div>
            </div>
            <?php
        }
        ?>
      </div>
    </section><!-- End About Us Section -->
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-title">
              <h4 style="color: #009b4c"><b>Segera Daftarkan Dirimu Dan Jadilah Bagian Dari HMI</b></h4>
              <hr>
            </div>
          </div>
          <div class="col-sm-12">
            <?php
              if($setPage == 0)
              {
                ?>
                <div class="row">
                  <div class="col-sm-12 col-md-12 pb-4 text-center col-lg-12 mt-4 bg-danger">
                    <p class="text-center pt-4 text-light">
                      Pendaftaran Belum Dibuka. Nantikan Informasi Lebih Lanjut Di Sosial Media Kami! 
                    </p>
                    <!-- <a class="text-center text-light" href="#">
                      <u>Link Whatsapp</u>
                    </a> -->
                  </div>
                </div>
                <?php
              }
              elseif($setPage == 1)
              {
            ?>
            <form action="/submitLatihanKader" method="POST">
              @csrf
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="nama_peserta" class="form-control" id="name" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                  <div class="form-group">
                    <label for="name">Nomor HP (WhatsApp)</label>
                    <input type="text" name="telp_peserta" class="form-control" id="no_telp" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name">Alamat</label>
                    <textarea class='form-control' name="alamat_peserta"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                  <div class="form-group">
                    <label for="name">Asal Universitas</label>
                    <input type="text" name="asal_univ" class="form-control" id="universitas" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                  <div class="form-group">
                    <label for="name">Angkatan</label>
                    <input type="text" name="asal_prodi" class="form-control" id="prodi" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name">Fakultas</label>
                    <select class="form-control" name="asal_fakultas">
                      <option value="">-- Pilih Fakultas --</option>
                      <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
                      <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                      <option value="Fakultas Hukum">Fakultas Hukum</option>
                      <option value="Fakultas Teknik">Fakultas Teknik</option>
                      <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                      <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                      <option value="Fakultas Peternakan">Fakultas Peternakan</option>
                      <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                      <option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
                      <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
                      <option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
                      <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                      <option value="Fakultas Kelautan dan Perikanan">Fakultas Kelautan dan Perikanan</option>
                      <option value="">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name">Fakultas (Jika Tidak Ada Di Pilihan)</label>
                    <input type="text" name="asal_fakultas_text" class="form-control" id="fakultas">
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name">Motivasi Mengikuti LK1</label>
                    <textarea class='form-control' name="harapan"></textarea>
                  </div>
                </div>
                <div class="text-center mt-5"><button type="submit" class="btn btn-success">Daftar Sekarang Juga!</button></div>
              </div>
            </form>
            <?php
              }
                ?>
          </div>
        </div>
      </div>
    </div>
    <div class="pb-5"></div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer"  style="background: #009b4c">

   <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('assets/LandingPage/vendor/aos/aos.js')}}"></script>
  <script src="{{url('assets/LandingPage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/LandingPage/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/LandingPage/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/LandingPage/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/LandingPage/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{url('assets/LandingPage/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/LandingPage/js/main.js')}}"></script>

</body>

</html>