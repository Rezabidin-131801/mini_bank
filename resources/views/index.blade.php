<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['email'])) { ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MINK - Home</title>
    
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.ico">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
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
              
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item @@services__active">
                      <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                  <!--/search-right-->
                  <div class="search mr-3">
                      <input class="search_box" type="checkbox" id="search_box">
                      <label class="fa fa-search" for="search_box"></label>
                      <div class="search_form">
                          <form action="error.php" method="GET">
                              <input type="text" placeholder="Search"><input type="submit" value="search">
                          </form>
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
                          <input type="checkbox" id="checkbox">
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
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
  <!-- <div class="Dashboard1">
      <h1>Halo Username, Selamat Datang</h1>
      <div class="saldouser">                              
        Saldo <input type="password" value="10.000.000" id="myInput">
        <input type="checkbox" onclick="showPass()"> Show Password
      </div>
  </div> -->
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Halo <?php echo $_SESSION['name']; ?>, Selamat Datang </h5>
                                        <div class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2">                              
                                            Sisa saldo anda adalah Rp 10.0000.000
                                        </div>
                                        <!-- <p class="mt-md-4 mt-3">MINK (Mini Bank) adalah bank swasta yang didirikan pada tahun 2022.
                                            Menyediakan segala layanan perbankan untuk memuaskan para pelanggan.
                                        </p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in </a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">About Us</a> -->
                                    </div>
                                    <!-- <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card1.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <!-- <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Transfer kemanapun</h5>
                                        <p class="mt-md-4 mt-3"> MINK memudahkan kalian untuk melakukan transfer kemanapun dan kapanpun.</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in</a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">About Us</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card2.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Kustomisasi akunmu </h5>
                                        <p class="mt-md-4 mt-3">Log in ke akun anda untuk mengubah username maupun pin</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in</a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">About Us</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card3.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Layanan Servis </h5>
                                        <p class="mt-md-4 mt-3">Melalui Layanan MINK Call 357681, pengguna diberi 
                                            kemudahan mendapatkan informasi, melakukan transaksi dan memperoleh solusi 
                                            digital atas setiap permasalahan.
                                        </p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in</a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">Read More</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card4.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div> -->
        </div>
    </div>
</section>
<!-- /main-slider -->
<?php }
else { ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MINK - Home</title>
    
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.ico">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
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
              
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item @@services__active">
                      <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="signform.php">Login/Signup</a>
                  </li>
                  <!--/search-right-->
                  <div class="search mr-3">
                      <input class="search_box" type="checkbox" id="search_box">
                      <label class="fa fa-search" for="search_box"></label>
                      <div class="search_form">
                          <form action="error.php" method="GET">
                              <input type="text" placeholder="Search"><input type="submit" value="search">
                          </form>
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
                          <input type="checkbox" id="checkbox">
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
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Pilihan tepat untuk kebutuhan perbankanmu </h5>
                                        <p class="mt-md-4 mt-3">MINK (Mini Bank) adalah bank swasta yang didirikan pada tahun 2022.
                                            Menyediakan segala layanan perbankan untuk memuaskan para pelanggan.
                                        </p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in </a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">About Us</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card1.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Transfer kemanapun</h5>
                                        <p class="mt-md-4 mt-3"> MINK memudahkan kalian untuk melakukan transfer kemanapun dan kapanpun.</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in</a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">About Us</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card2.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Kustomisasi akunmu </h5>
                                        <p class="mt-md-4 mt-3">Log in ke akun anda untuk mengubah username maupun pin</p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in</a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">About Us</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card3.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 banner-info-bg">
                                        <h5>Layanan Servis </h5>
                                        <p class="mt-md-4 mt-3">Melalui Layanan MINK Call 357681, pengguna diberi 
                                            kemudahan mendapatkan informasi, melakukan transaksi dan memperoleh solusi 
                                            digital atas setiap permasalahan.
                                        </p>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="signform.php">Sign in</a>
                                        <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.php">Read More</a>
                                    </div>
                                    <div class="col-lg-5 col-md-8 img offset-lg-1 mt-lg-0 mt-4">
                                        <img src="assets/images/card4.png" alt="img"
                                            class="img-fluid radius-image-curve" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<?php } ?>

<!-- home page block1 -->
<section id="about" class="home-services pt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span><img src="assets/images/logo.png" style="height:38px;"></span>
                        </div>
                        <div class="info">
                            <p>Lebih dari</p>
                            <h4><a href="">300.000</a></h4>
                            <h5>Nasabah<br><br></h5>
                        </div>
                    </div>
                    <p class="mt-4">Jika Anda mencari layanan perbankan berkualitas tinggi dan dapat diandalkan. MINK adalah pilihan terbaik.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="info">
                            <p>Rating</p>
                            <h4><a href="">10/10</a></h4>
                            <h5>Dari 3 banking platform reviews</h5>
                        </div>
                    </div>
                    <p class="mt-4">Meski belum lama berdiri, MINK telah mendapat rating 10/10 dari 3 banking platform reviews.<br><br></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fa fa-line-chart"></span>
                        </div>
                        <div class="info">
                            <p>Upto</p>
                            <h4><a href="">8,2%</a></h4>
                            <h5>Kenaikan total kredit MINK </h5>
                        </div>
                    </div>
                    <p class="mt-4">Secara keseluruhan, total kredit MINK naik 8,2% YoY menjadi Rp 637 triliun di Desember 2021.<br><br></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page block1 -->
<!-- about page about section -->
<!-- <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self">
                    <h3 class="title-left mx-0">Our bank founded in 2015 to introduce the new level of financial
                        services. We are still dedicated to the success of our clients.</h3>
                    <p class="mt-md-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                        dolor sit, amet elit. Dolor ipsum non velit, culpa! Vivamus a et ut justo, init in dolor et.</p>
                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="about.php"> Learn More</a>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative">
                        <img src="assets/images/about.jpg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- //about page about section -->
<!-- /mobile section --->
<section class="w3l-mobile-content-6 py-5">
    <div class="mobile-info py-lg-5 py-md-4 py-2">
        <!-- /mobile-info-->
        <div class="container">
            <h6 class="title-small text-center">Fitur dan Keunggulan</h6>
            <h3 class="title-big mb-5 text-center">Pilihan Bank Terbaik</h3>
            <div class="row mobile-info-inn mx-lg-0">
                <div class="col-lg-4 mobile-right text-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-10 mobile-right-info">
                            <h6><a href="">Aplikasi Berbasis Web </a></h6>
                            <p>Akses instan ke akun Anda di perangkat apa pun menggunakan browser.</p>
                        </div>
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-mobile"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-10 mobile-right-info">
                            <h6><a href="">Program Keluarga </a></h6>
                            <p>Bank kami memiliki program khusus dengan manfaat untuk anggota keluarga.</p>
                        </div>
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-10 mobile-right-info">
                            <h6><a href="">Mudah Ditemukan </a></h6>
                            <p>Kami memiliki kantor di pusat Kota Surakarta.</p>
                        </div>
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-globe"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mobile-left px-lg-5">
                    <img src="assets/images/mobile.png" class="img-fluid radius-image" alt="">
                </div>
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-user"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="">Profil Pribadi </a></h6>
                            <p>Daftarkan profil pribadi Anda secara online untuk mulai menggunakan layanan kami. </p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-cogs"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="">Pengaturan Akun yang Mudah </a></h6>
                            <p>Klien terdaftar dapat mengedit pengaturan akun dalam 2 klik.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-support"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="">Bantuan 24/7</a></h6>
                            <p>Tim dukungan selalu siap membantu Anda menyelesaikan masalah perbankan apa pun</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="text-center">
                <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#book"> View more advanced features</a>
            </div> -->
        </div>
        <!-- //mobile-info-->
    </div>
</section>
<!-- //mobile section --->
<!-- /bottom-grids-->
<!-- <section class="w3l-bottom-grids-6 py-5" id="advantages">
    <div class="container py-lg-5 py-md-4 py-2">
        <h6 class="title-small text-center">Our Services</h6>
        <h3 class="title-big mb-md-5 mb-4 text-center">Advantages and Details</h3>
        <div class="grids-area-hny main-cont-wthree-fea row pt-3">
            <div class="col-lg-3 ceo-text mb-lg-0 mb-4">
                <div class="">
                    <span class="fa fa-quote-left"></span>
                    <p>Vivamus a et ut justo, init in. Ut eurt leo non. Duis sed dolor et amet. Sed blandit at mi vel
                        set hendrerit. Sed nisl justo, init id purus vitae, nibh sed et</p>
                    <div class="author align-items-center mt-4 mb-1">
                        <div class="img-circle">
                            <img src="assets/images/team2.jpg" class="mr-3 img-fluid" alt="...">
                        </div>
                        <div class="author-info">
                            <a href="#author">Maxwell ker</a> <br> <span class="meta-value">Sep 28, 2020 </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grids-feature">
                <div class="area-box">
                    <span class="fa fa-laptop"></span>
                    <h4><a href="#feature" class="title-head">Detailed Statistics</a></h4>
                    <p>Vivamus a et ut justo, init in. Ut eurt leo non. Duis sed dolor et.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box">
                    <span class="fa fa-envelope-open-o"></span>
                    <h4><a href="#feature" class="title-head">Email Newsletter </a></h4>
                    <p>Vivamus a et ut justo, init in. Ut eurt leo non. Duis sed dolor et.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box">
                    <span class="fa fa-line-chart"></span>
                    <h4><a href="#feature" class="title-head">FInancial Goals</a></h4>
                    <p>Vivamus a et ut justo, init in. Ut eu leo non. Duis sed dolor et.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- //bottom-grids-->
<!-- section -->
<!-- <section class="w3l-statistics" id="statistical">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3 py-2">
            <h6 class="title-small text-center">Banking statistics.</h6>
            <h3 class="title-big mb-md-5 mb-4 text-center">Statistical information</h3>
            <div class="row">
                <div class="col-lg-4 align-self w3l-progressblock pr-lg-4">
                    <p class="mb-4">Our financial services deeply rely on certain banking procedures that have been
                        perfected over
                        the years and helped us get prestigious awards.</p>
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Financial consulting <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Online Bank cards <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Online reporting <span class="">90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4">
                        <h6 class="progress-tittle">Online banking <span class="">75%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2 mb-0">
                        <h6 class="progress-tittle">24/7 support <span class="">95%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 align-self">
                    <div class="position-relative">
                        <div class="progress-circles">
                            <div class="circle1">
                                <div id="progress" data-dimension="170" data-text="65%" data-fontsize="30"
                                    data-percent="65" data-fgcolor="#1d0d44" data-bgcolor="#eee" data-width="15"
                                    data-bordersize="5" data-animationstep="2"></div>
                                <h4>Economy</h4>
                            </div>
                            <div class="circle1">
                                <div id="progress1" data-dimension="170" data-text="75%" data-fontsize="30"
                                    data-percent="75" data-fgcolor="#1d0d44" data-bgcolor="#eee" data-width="15"
                                    data-bordersize="5" data-animationstep="2"></div>
                                <h4>Stability</h4>
                            </div>
                            <div class="circle1">
                                <div id="progress2" data-dimension="170" data-text="90%" data-fontsize="30"
                                    data-percent="90" data-fgcolor="#1d0d44" data-bgcolor="#eee" data-width="15"
                                    data-bordersize="5" data-animationstep="2"></div>
                                <h4>Cashback</h4>
                            </div>
                            <div class="circle1">
                                <div id="progress3" data-dimension="170" data-text="100%" data-fontsize="30"
                                    data-percent="100" data-fgcolor="#1d0d44" data-bgcolor="#eee" data-width="15"
                                    data-bordersize="5" data-animationstep="2"></div>
                                <h4>Guarantee</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4">
                    <img src="assets/images/stats.jpg" alt="" class="radius-image img-fluid">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- // about section -->
 <!-- forms -->
 <section class="w3l-forms-9 py-5">
     <div class="container py-lg-3">
         <div class="row align-items-center">
             <div class="main-midd col-lg-7 text-lg-right">
                 <h4 class="title-big">Buat akunmu sekarang!</h4>
             </div>
             <div class="col-lg-5 mt-lg-0 mt-4">
                 <a class="btn btn-style btn-dark" href="signform.php"> Buka rekening</a>
             </div>
         </div>
     </div>
 </section>
 <!-- //forms -->
<div class="w3l-ordercard py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <h3 class="title-big mb-5 text-center">Membuat rekening baru</h3>
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
                <div class="work-grids">
                    <div class="icon">
                        <span class="fa fa-sign-in"></span>
                    </div>
                    <div class="content">
                        <h4 class="title">Registrasi online</h4>
                        <p class="desc"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                <div class="work-grids">
                    <div class="icon">
                        <span class="fa fa-file-text-o"></span>
                    </div>
                    <div class="content">
                        <h4 class="title">Lengkapi form</h4>
                        <p class="desc"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                <div class="work-grids">
                    <div class="icon">
                        <span class="fa fa-pencil"></span>
                    </div>
                    <div class="content">
                        <h4 class="title">Persetujuan</h4>
                        <p class="desc"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                <div class="work-grids">
                    <div class="icon">
                        <span class="fa fa-credit-card"></span>
                    </div>
                    <div class="content">
                        <h4 class="title">Dapatkan kartu ATM</h4>
                        <p class="desc"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  News section -->
<!-- <div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center">Latest blog posts</h3>
            <div class="row mt-lg-5 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/blog1.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog-single">7 Banking services that can save retirees money</a></h4>
                            <p class="date"><span class="fa fa-calendar mr-2"></span> September 17, 2020</p>
                            <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/blog2.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog-single">8 Ways to Drive Adoption of Your Banking App</a></h4>
                            <p class="date"><span class="fa fa-calendar mr-2"></span> September 17, 2020</p>
                            <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/blog3.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog-single">How is it progressing and what will 2020 bring?</a></h4>
                            <p class="date"><span class="fa fa-calendar mr-2"></span> September 17, 2020</p>
                            <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="#blog">View all blog posts</a>
            </div>
        </div>
    </section>
</div> -->
<!--  //News section -->
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

<script src="assets/js/theme-change.js"></script> <!-- //light and dark mode switch js -->

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
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<!-- <script>
  $(document).ready(function () {
    $("#owl-demo2").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script> -->
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->

<script>

function showPass() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>

</html>