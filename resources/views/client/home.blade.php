@extends('layouts.clientLayout')

@section('content')

<!-- Header -->
<!-- <header id="site-header">
  <div class="container">
    <div class="container-navbar">
      <div class="row">
        <div class="col-6">
          <div class="logo-primdev">
              <a href="#"><img src="images/primdev.jpg" alt=""></a>
          </div>
        </div>
        <div class="col-6">
          <div class="menu-primdev">
              <a href="" class="menu-primdev-link"><span class="menu-primdev-button">HOME</span></a>
              <a href="" class="menu-primdev-link"><span class="menu-primdev-button">STORY</span></a>
              <a href="" class="menu-primdev-link"><span class="menu-primdev-button">ABOUT</span></a>
              <a href="" class="menu-primdev-link active"><span class="menu-primdev-button">EVENT</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header> -->
<header class="site-header">
    <div class="site-header__container">
        <img src="{{ asset('images/primdev-trans.png') }}" alt="Logo Primakara Developers" class="site-header__logo">
        <nav class="site-header__menu-desktop">
            <a href="" class="site-header__menu-desktop-item">Home</a>
            <a href="" class="site-header__menu-desktop-item">Story</a>
            <a href="" class="site-header__menu-desktop-item">About</a>
            <a href="" class="site-header__menu-desktop-item site-header__menu-desktop-item--with-background">Event</a>
        </nav>
    </div>
</header>
<!-- Header -->

<!--Main -->
<main>

    <!-- Banner -->
    <section class="banner" style="background-image: url('{{ asset('images/workshop-photos.jpg') }}');">
        <div class="banner__content">
            <h1 class="banner__title">Portal Primakara</h1>
            <h2 class="banner__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        </div>
        <a href="javascript:void(0)" class="banner__scroll-to-bottom-button">
            <img src="{{ asset('images/icons/downwards-pointer.svg') }}" class="banner__scroll-to-bottom-image">
        </a>
    </section>
<!-- Banner -->


<!-- Content-->
    <section id="headnews">
      <div class="container-fluid">
        <div class="main-content">
          <div class="col-4">
            <a href="single_page.php" class="link-text-decoration">
              <div class="box-big box-content-main">

                  <img src="images/no1.jpg" class="image-box">

                  <div class="box-gradient gradient-color-1"></div>

                  <div class="box-content">

                      <h1 class="box-big-content">
                         Primakara Gelar Startup Expo besar
                         di Tahun 1862 Sebelum Masehi
                      </h1>

                  </div>

                  <div class="title-box">
                    <p class="title-content-box"> KEGIATAN </p>
                  </div>

              </div>
            </a>

            <a href="single_page.php" class="link-text-decoration">

              <div class="box-mini box-content-main">

                <img src="images/no2.jpg" class="image-box">

                <div class="box-gradient gradient-color-2"></div>
                <?php // XXX:  ?>
                <div class="box-content">
                  <h1 class="box-mini-content">
                     Yuk Simak Informasi Berguna Cara Membuat Website Company Profile Ala Pornhub
                  </h1>
                </div>
                <div class="title-box">
                  <p class="title-content-box"> WEBSITE </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-4">
            <a href="single_page.php" class="link-text-decoration">
              <div class="box-mini box-content-main">
                <img src="images/no3.jpg" class="image-box">
                <div class="box-gradient gradient-color-3"></div>
                <div class="box-content">
                  <h1 class="box-mini-content">
                      Memory SSD Untuk Programmer?
                      Apakah Membantu Mempercepat Project Agar Cepat Selesai?
                  </h1>
                </div>
                <div class="title-box">
                  <p class="title-content-box"> HARDWARE </p>
                </div>
              </div>
            </a>

            <a href="single_page.php" class="link-text-decoration">
              <div class="box-mini box-content-main">
                <img src="images/no4.jpg" class="image-box">
                <div class="box-gradient gradient-color-4"></div>
                <div class="box-content">
                  <h1 class="box-mini-content">
                     Pras, CTO Laravel.org Mengakui Framework Miliknya Tidak Berguna
                  </h1>
                </div>
                <div class="title-box">
                  <p class="title-content-box"> FRAMEWORK </p>
                </div>
              </div>
            </a>
            <a href="single_page.php" class="link-text-decoration">
              <div class="box-mini box-content-main">
                <img src="images/no5.jpg" class="image-box">
                <div class="box-gradient gradient-color-5"></div>
                  <div class="box-content">
                    <h1 class="box-mini-content">
                       Dr. Boyke, 150 Orang Tiap Detiknya Mengidap Penyakit Wibu, Karena Asupan Anime
                       Yang Berlebih
                    </h1>
                  </div>
                  <div class="title-box">
                    <p class="title-content-box"> KESEHATAN </p>
                  </div>
              </div>
            </a>
          </div>

          <div class="col-4">
            <a href="single_page.php" class="link-text-decoration">
              <div class="box-mini box-content-main">
                <img src="images/no6.jpg" class="image-box">
                <div class="box-gradient gradient-color-6"></div>
                <div class="box-content">
                  <h1 class="box-mini-content">
                     Yaw, Konglomerat Asal Bali Membeli Stiker Mobil Lamborghini
                     Gallardo di Las Vegas
                  </h1>
                </div>
                <div class="title-box">
                  <p class="title-content-box"> INTERMEZZO </p>
                </div>
              </div>
            </a>
            <a href="single_page.php" class="link-text-decoration">
              <div class="box-big box-content-main">
                <img src="images/no7.jpg" class="image-box">
                <div class="box-gradient gradient-color-7"></div>
                <div class="box-content">
                  <h1 class="box-big-content">
                    8 Cara Membuat Website Dengan Mudah Tanpa Framework!
                  </h1>
                </div>
                <div class="title-box">
                  <p class="title-content-box"> ANDROID </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->

    <!-- Information -->
    <div class="information-section blok">

                <div class="information-section__tag">
                    <span class="information-section__tag--title">INFORMASI TERUPDATE</span>
                    <a href="#" class="information-section__tag--next">
                      <span class="information-section__tag--remove">Selengkapnya</span>
                      <div class="information-section__tag--box">
                        <span class="information-section__tag--box--arrow"></span>
                        <span class="information-section__tag--box--arrow information-section__tag--box--second-arrow"></span>
                      </div>
                    </a>
                    <div class="information-section__tag--border"></div>
                </div>

                <div class="information-section__coloum">

                      <div class="information-section__coloum__images">
                        <a href="#">
                          <img src="images/no1.jpg" alt="">
                        </a>
                      </div>


                      <div class="information-section__coloum__title">
                        <a href="#">
                            Membangun Ekosistem Digital,
                            STMIK dan STIKOM Bergabung
                        </a>
                      </div>

                      <div class="information-section__coloum__detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-section__coloum__date">
                          <span class="information-section__coloum__date__author">Nadim</span>
                          -
                          <span class="information-section__coloum__date__detail">29 February 2018</span>
                      </div>

                </div>

                <div class="information-section__coloum ">
                      <div class="information-section__coloum__images">
                        <a href="#">
                          <img src="images/no1.jpg" alt="">
                        </a>
                      </div>
                      <div class="information-section__coloum__title">
                      <a href="#">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </a>
                      </div>
                      <div class="information-section__coloum__detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-section__coloum__date">
                          <span class="information-section__coloum__date__author">Nadim</span>
                          -
                          <span class="information-section__coloum__date__detail">29 February 2018</span>
                      </div>

                </div>

                <div class="information-section__coloum ">
                      <div class="information-section__coloum__images">
                        <a href="#">
                          <img src="images/no1.jpg" alt="">
                        </a>
                      </div>
                      <div class="information-section__coloum__title">
                      <a href="#">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </a>
                      </div>
                      <div class="information-section__coloum__detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-section__coloum__date">
                          <span class="information-section__coloum__date__author">Nadim</span>
                          -
                          <span class="information-section__coloum__date__detail">29 February 2018</span>
                      </div>

                </div>

                <div class="information-section__coloum ">
                    <div class="information-section__coloum__images">
                        <a href="#">
                          <img src="images/no1.jpg" alt="">
                        </a>
                      </div>
                      <div class="information-section__coloum__title">
                      <a href="#">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </a>
                      </div>
                      <div class="information-section__coloum__detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-section__coloum__date">
                          <span class="information-section__coloum__date__author">Nadim</span>
                          -
                          <span class="information-section__coloum__date__detail">29 February 2018</span>
                      </div>

                </div>


    </div>
    <!-- end of information -->


    {{-- Subscription --}}
    <div class="subscription" style="background-image: url('{{ asset('images/bg-bg.jpeg') }}');">
      <div class="subscription__content">
        <div class="subscription__content__gradient"></div>
        <div class="subscription__content__title">
          Dapatkan informasi kegiatan kami dan tips serta trik seputar dunia teknologi dan informasi lainnya
        </div>
        <div class="subscription__content__btn-wrapper">
          <a href="#" class="subscription__content__btn-wrapper__btn">SUBSCRIBE</a>
        </div>
      </div>
    </div>
    {{-- end of Subscription --}}

    {{-- ukm --}}
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="ukm-control">
                <div class="ukm-title">UNIT KEGIATAN MAHASISWA</div>
                <div class="ukm-detail">STMIK PRIMAKARA</div>
                <div class="col-6">

                    <div class="ukm-content">
                     <a href="#">
                        <div class="ukm-content-title">HIPMI PRIMAKARA</div>
                        <img src="images/no4.jpg" alt="" class="ukm-images">
                        <div class="gradient-primdev box-primdev"></div>
                      </a>
                    </div>

                    <div class="ukm-content">
                      <a href="#">
                        <div class="ukm-content-title">PRIMAKARA DEVELOPERS</div>
                        <img src="images/no4.jpg" alt="" class="ukm-images">
                        <div class="gradient-primdev box-primdev"></div>
                      </a>
                    </div>

                    <div class="ukm-content">
                      <a href="#">
                        <div class="ukm-content-title">E-SPORT</div>
                        <img src="images/no4.jpg" alt="" class="ukm-images">
                        <div class="gradient-primdev box-primdev"></div>
                      </a>
                    </div>

                    <div class="ukm-content">
                      <a href="#">
                        <div class="ukm-content-title">ENGLISH CLUB</div>
                        <img src="images/no4.jpg" alt="" class="ukm-images">
                        <div class="gradient-primdev box-primdev"></div>
                      </a>
                    </div>

                </div>
                <div class="col-6">
                    <div class="ukm-content">
                        <a href="#">
                          <div class="ukm-content-title">MAPALA</div>
                          <img src="images/no4.jpg" alt="" class="ukm-images">
                          <div class="gradient-primdev box-primdev"></div>
                        </a>
                      </div>

                      <div class="ukm-content">
                        <a href="#">
                          <div class="ukm-content-title">PHOTOGRAPHY</div>
                          <img src="images/no4.jpg" alt="" class="ukm-images">
                          <div class="gradient-primdev box-primdev"></div>
                        </a>
                      </div>

                    <div class="ukm-content">
                      <a href="#">
                        <div class="ukm-content-title">AIR SOFT</div>
                        <img src="images/no4.jpg" alt="" class="ukm-images">
                        <div class="gradient-primdev box-primdev"></div>
                      </a>
                    </div>

                    <div class="ukm-content">
                      <a href="#">
                        <div class="ukm-content-title">DANCE</div>
                        <img src="images/no4.jpg" alt="" class="ukm-images">
                        <div class="gradient-primdev box-primdev"></div>
                      </a>
                    </div>

                </div>
            </div>
        </div>

    </div> --}}
</main>
<!-- Main -->


    <!-- footer -->
<footer>
    <div class="container footer-container">
      <div class="border-footer"></div>
      <div class="container-navbar">
        <div class="row">
            <div class="footer-control">

                <div class="information-section__coloum">
                  <img src="images/primakara.jpg" alt="" class="footer-logo-kedua">
                  <img src="images/primdev.jpg" alt="" class="footer-logo-pertama">
                </div>

                <div class="col-1 line"></div>

                <div class="col-2">
                    <div class="footer-center">
                        <div class="footer-center-title">INFORMASI</div>
                        <div class="footer-center-list"><a href="#">About</a></div>
                        <div class="footer-center-list"><a href="#">Story</a></div>
                        <div class="footer-center-list"><a href="#">Event</a></div>
                        <div class="footer-center-list"><a href="#">Etcetera</a></div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="footer-right">
                        <div class="footer-right-title">SUMMARY</div>

                        <div class="footer-right-detail">
                            Newspaper Tech Demo is your tech news website. We
                            provide you with the lastest breaking news and videos
                            straight from the technology industry provide you with
                            the lastest breaking.
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </div>

    <!-- footer-bottom -->
    <div class="container">
        <div class="row">
            <div class="footer-bottom-control">
                <div class="col-12">
                  <div class="footer-bottom-copyright">
                      &copy;2018 - Team Primakara Developers, All Right Reserved
                  </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->

@endsection

@section('additional-scripts')

<script>
    var scrollToBottom = document.getElementsByClassName('banner__scroll-to-bottom-button')[0];
    var headline = document.getElementsByClassName('headline')[0];
    scrollToBottom.addEventListener('click', function(e) {
        headline.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
</script>

@endsection
