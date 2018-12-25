@extends('layouts.clientLayout')

@section('content')

<!-- Header -->
<header id="site-header">
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
</header>
<!-- Header -->

<!--Main -->
<main>

    <!-- Banner -->
  <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="primdev-title">PRIMAKARA DEVELOPERS</div>
                <div class="primdev-sub-title">Proudly Present</div>
            </div>
        </div>
        <div class="gradient"></div>
        <div class="parallax1"></div>
        <a href="javascript:void(0)" class="primdev-scroll-button">
            <img src="images/icons/downwards-pointer.svg" alt="">
        </a>
  </div>
    <!-- Banner -->

    {{-- Headline --}}
    <section class="headline">
      <div class="headline__list">
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Primakara gelar start up expo besar di tahun 1862 sebelum masehi
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Kegiatan</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            yuk simak informasi berguna cara membuat website ala pornhub
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Website</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Memory SSD untuk programmer? apakah membantu mempercepat projek agar cepat selesai?
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Hardware</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Prass, CTO Laravel.org mengakui framework miliknya tak berguna.
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Framework</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            dr. Boyke, 150 orang tiap detiknya mengidap penyakit wibu. karena asupan anime yang berlebih.
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Kesehatan</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Yaw, Konglomerat asal bali membeli sticker lamborghini Galardo di Las Vegas
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            8 cara membuat website tanpa framework
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
      </div>
    </section>
    {{-- Headline --}}

    <!-- Information -->
    <div class="information-section">

                <div class="information-section__tag">
                  
                    <span class="information-section__tag--title">INFORMASI TERUPDATE</span>

                    <a href="#" class="information-section__tag--next">
                      <span class="information-section__tag--next--remove">Selengkapnya</span>
                      <div class="information-section__tag--next--box">
                        <span class="information-section__tag--next--box--arrow"></span>
                        <span class="information-section__tag--next--box--arrow information-section__tag--next--box--second-arrow"></span>
                      </div>
                    </a>
                    
                    <div class="information-section__tag--border"></div>

                </div>

                <div class="information-section__column">

                    <a href="#" class="information-section__column__box">
                      <div class="information-section__column__box__images">
                        
                          <img src="images/no1.jpg" alt="">
                        
                      </div>
                    
                    
                      <div class="information-section__column__box__title">
                        
                            Membangun Ekosistem Digital,
                            STMIK dan STIKOM Bergabung
                        
                      </div>

                      <div class="information-section__column__box__detail">
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
                    </a>
                    
                      
                      <div class="information-section__column__date">
                          <span class="information-section__column__date__author">Nadim</span>
                          -
                          <span class="information-section__column__date__detail">29 February 2018</span>
                      </div>
                  
                </div>

                <div class="information-section__column ">

                    <a href="#" class="information-section__column__box">
                      <div class="information-section__column__box__images">
                        
                          <img src="images/no1.jpg" alt="">
                        
                      </div>
                    
                    
                      <div class="information-section__column__box__title">
                        
                            Membangun Ekosistem Digital,
                            STMIK dan STIKOM Bergabung
                        
                      </div>

                      <div class="information-section__column__box__detail">
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
                    </a>

                      
                      <div class="information-section__column__date">
                          <span class="information-section__column__date__author">Nadim</span>
                          -
                          <span class="information-section__column__date__detail">29 February 2018</span>
                      </div>
                    
                </div>

                <div class="information-section__column ">

                    <a href="#" class="information-section__column__box">
                      <div class="information-section__column__box__images">
                        
                          <img src="images/no1.jpg" alt="">
                        
                      </div>
                    
                    
                      <div class="information-section__column__box__title">
                        
                            Membangun Ekosistem Digital,
                            STMIK dan STIKOM Bergabung
                        
                      </div>

                      <div class="information-section__column__box__detail">
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
                    </a>

                      
                      <div class="information-section__column__date">
                          <span class="information-section__column__date__author">Nadim</span>
                          -
                          <span class="information-section__column__date__detail">29 February 2018</span>
                      </div>
                    
                </div>

                <div class="information-section__column ">

                    <a href="#" class="information-section__column__box">
                      <div class="information-section__column__box__images">
                        
                          <img src="images/no1.jpg" alt="">
                        
                      </div>
                    
                    
                      <div class="information-section__column__box__title">
                        
                            Membangun Ekosistem Digital,
                            STMIK dan STIKOM Bergabung
                        
                      </div>

                      <div class="information-section__column__box__detail">
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
                    </a>

                      
                      <div class="information-section__column__date">
                          <span class="information-section__column__date__author">Nadim</span>
                          -
                          <span class="information-section__column__date__detail">29 February 2018</span>
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
    var scrollToBottom = document.getElementsByClassName('primdev-scroll-button')[0];
    var headNews = document.getElementById('headnews');
    scrollToBottom.addEventListener('click', function(e) {
        headNews.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
</script>

@endsection
