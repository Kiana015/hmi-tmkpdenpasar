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
        <div class="row content">
            <div class="col-sm-12" align="center">
                Gambarnya minta yaa wkwkwkwkwkwk
            </div>
            <div class="col-sm-12 pt-5" align="justify">
                Latihan Kader 1 
            </div>
        </div>
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
              if($setPage == 1)
              {
            ?>
            <form action="/submitLatihanKader" method="POST">
              @csrf
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                  <div class="form-group">
                    <label for="name">Nama Kamu</label>
                    <input type="text" name="nama_peserta" class="form-control" id="name" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                  <div class="form-group">
                    <label for="name">Nomor Telepon (Usahakan Sudah Terdaftar WhatsApp yaa!!)</label>
                    <input type="text" name="telp_peserta" class="form-control" id="no_telp" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name">Alamat Kamu</label>
                    <textarea class='form-control' name="alamat_peserta"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                  <div class="form-group">
                    <label for="name">Asal Universitas</label>
                    <input type="text" name="asal_univ" class="form-control" id="universitas" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                  <div class="form-group">
                    <label for="name">Fakultas</label>
                    <input type="text" name="asal_fakultas" class="form-control" id="fakultas" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                  <div class="form-group">
                    <label for="name">Program Studi</label>
                    <input type="text" name="asal_prodi" class="form-control" id="prodi" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name">Apa Harapanmu Untuk LK1 Mu?</label>
                    <textarea class='form-control' name="harapan"></textarea>
                  </div>
                </div>
                <div class="text-center mt-5"><button type="submit" class="btn btn-success">Daftar Sekarang Juga!</button></div>
              </div>
            </form>
            <?php
              }
              else
              {
                ?>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12 mt-4 bg-success">
                    <p class="text-center pt-4 pb-2 text-light">Terima Kasih Sudah Mendaftar! Kami Akan Memberitahukan Informasi Berikutnya</p>
                  </div>
                </div>
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