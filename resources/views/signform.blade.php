<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>MINK</title>

    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="logo.ico">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css" />
  </head>
  <body>
    <!--header-->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="index.php">
            <span><img src="assets/images/logo.png" alt="Your logo" title="Your logo" style="height:35px; padding-right: 5px; padding-bottom: 8px;" /></span> 
            MINK
        </a></h1>  

          <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item @@home__active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item @@services__active">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Login/Signup</a>
              </li>
              <!--/search-right-->
              <div class="search mr-3">
                <input class="search_box" type="checkbox" id="search_box" />
                <label class="fa fa-search" for="search_box"></label>
                <div class="search_form">
                  <form action="error.php" method="GET"><input type="text" placeholder="Search" /><input type="submit" value="search" /></form>
                </div>
              </div>
              <!--//search-right-->
            </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!--/header-->
    <div class="inner-banner"></div>
    <section class="w3l-breadcrumb">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Log In / Sign Up</li>
        </ul>
      </div>
    </section>
    <div class="w3l-contact-info py-5" id="contact">
      <div class="container py-lg-5 py-md-4">
        <div class="title text-center">
          <h3 class="title-big">Log In</h3>
          <p class="mt-2 mx-lg-5">Masuk menggunakan akun Anda.</p>
        </div>
        <!-- <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="align-self mt-lg-0 mt-md-5 mt-4">
                <div class="contact-infos">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-map-marker"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Address info</h3>
                            <p>Bank Card, 343 banking lane, #2214 cravel street, NY.</p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-phone"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Call us on</h3>
                            <p><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-envelope"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Email us</h3>
                            <p> <a href="mailto:info@support.com">info@support.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row mt-5">
          <!-- <div class="col-lg-6 map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen=""></iframe>
            </div> -->
          <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4">
            <form action="login.php" method="post" class="signin-form">
              <div class="form-input">
                <input type="email" name="email" id="w3lSender" placeholder="Email Anda" required="" />
              </div>
              <div class="form-input">
                <input type="password" name="password" id="w3lPassword" placeholder="Password Anda" required="" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-style btn-primary">Log In</button>
              </div>
              <div class="text-left">
                <p class="mt-2 mx-lg-5">Tidak mempunyai akun? <a href="signform2.php">Klik disini.</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <section class="w3l-footer-29-main">
      <div class="footer-29 py-5">
        <div class="container py-lg-4">
          <div class="row footer-top-29">
            <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pr-lg-5">
              <div class="footer-logo mb-4">
                <a class="navbar-brand" href="#index.php"><img src="assets/images/logo.png" alt="Your logo" title="Your logo" style="height:35px;"/> MINK</a>
              </div>
              <p>Kami adalah lembaga keuangan terkemuka yang menyediakan layanan perbankan berskala nasional berkualitas tinggi. Kesuksesan kami
                terwujud berkat dukungan dari pelanggan setia kami. Kami menyediakan layanan yang dapat diandalkan untuk Anda.</p>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-5 col-5 footer-list-29 footer-2 mt-md-0 mt-5">
    
              <ul>
                <h6 class="footer-title-29">Quick Links</h6>
                <li><a href="about.php">About Us</a></li>
                <!-- <li><a href="#blog"> Blog posts</a></li>
                <li><a href="#pricing"> Pricing plans</a></li> -->
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-7 col-7 footer-list-29 footer-3 mt-lg-0 mt-5">
              <h6 class="footer-title-29">Kantor Pusat</h6>
              <p class="mb-3"> Mini Bank, Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah - 57126.</p>
              <p class="mb-2"> <span class="fa fa-phone"></span> <a href="tel:+62 877 3461 4227">+62 877 3461 4227</a></p>
              <p class="mb-2"><span class="fa fa-envelope-o"></span> <a href="mailto:minibank.id@mail.com">minibank.id@gmail.com</a></p>
              <p><span class="fa fa-support"></span> <a href="mailto:minibank.id@support.com">minibank.id@support.com</a></p>
            </div>
            <div class="col-lg-3 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
              <h6 class="footer-title-29">Berita Terbaru</h6>
              <div class="post1">
                <a href="https://finansial.bisnis.com/read/20220425/90/1526762/ketua-ojk-ekonomi-digital-indonesia-bakal-jadi-nomor-1-di-asia-tenggara" class="post-title">Ketua OJK: Ekonomi Digital Indonesia Bakal Jadi Nomor 1 di Asia Tenggara</a>
                <p class="small">April 25, 2022</p>
              </div>
              <div class="post1 mt-4">
                <a href="https://finansial.bisnis.com/read/20220421/90/1525520/bank-diprediksi-selektif-salurkan-kredit-intip-sektor-andalan-dan-yang-dihindari" class="post-title">Bank Diprediksi Selektif Salurkan Kredit, Intip Sektor Andalan dan yang Dihindari</a>
                <p class="small">April 21, 2022</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- copyright -->
      <section class="w3l-copyright text-center">
        <div class="container">
          <p class="copy-footer-29">© 2022 Mini Bank. All rights reserved.</p>
        </div>
    <!-- //footer -->

    <!--  javascripts file here -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/theme-change.js"></script>
    <!-- //light and dark mode switch js -->

    <script src="assets/js/circles.js"></script>

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>
    <!-- //stats number counter -->

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
            },
            480: {
              items: 1,
            },
            667: {
              items: 1,
            },
            1000: {
              items: 1,
            },
          },
        });
      });
    </script>
    <!-- //script -->
    <!-- owl carousel -->

    <!-- script for tesimonials carousel slider -->
    <script>
      $(document).ready(function () {
        $('#owl-demo2').owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            1000: {
              items: 1,
              nav: false,
              loop: false,
            },
          },
        });
      });
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        });
      });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
      $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
          $('#site-header').addClass('nav-fixed');
        } else {
          $('#site-header').removeClass('nav-fixed');
        }
      });

      //Main navigation Active Class Add Remove
      $('.navbar-toggler').on('click', function () {
        $('header').toggleClass('active');
      });
      $(document).on('ready', function () {
        if ($(window).width() > 991) {
          $('header').removeClass('active');
        }
        $(window).on('resize', function () {
          if ($(window).width() > 991) {
            $('header').removeClass('active');
          }
        });
      });
    </script>
    <!--//MENU-JS-->

    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap js -->
  </body>
</html>
