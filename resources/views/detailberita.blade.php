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
       <a href="index.html" class="logo me-auto"><img src="{{url('assets/LandingPage/img/tmkp-logo-nav.png')}}" alt="" class="img-fluid"></a>

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
  <div style="margin-bottom: 80px;">
    
  </div>
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
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6" style="margin-bottom: 0px">
            <div class="section-title">
              <h2 style="color: #009b4c">{{$dataBerita->judul_berita}}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 20px; margin-top: 10px;">
            <p align="center" style="margin-bottom: 5px; font-size: 10pt;">Ditulis Oleh <b>{{$dataBerita->penulis}}</p></b>
            <p align="center" style="font-size: 10pt;">Terbit Pada <b><?php echo date('d M Y H:i',strtotime($dataBerita->tgl_berita)) ?></b></p>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 15px" align="center">
            <img src="{{url('Assets/pic/'.$dataBerita->thumb_gambar)}}" align="center" class="img-fluid img-thumbnail" width="300" style="border-color: #009b4c">
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" align="justify">
            <p><b style="color: #009b4c;">{{$dataBerita->tempat}}, <?php echo date('Y', strtotime($dataBerita->tgl_berita)); ?></b></p>
            <?php echo $dataBerita->isi; ?>
          </div>
      </div>
    </section><!-- End About Us Section -->
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