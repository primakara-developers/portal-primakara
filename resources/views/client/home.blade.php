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
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
        <span class="headline__list__item">
          <a href="?single=yes" class="headline__list__item__gradient"></a>
          <a href="?single=yes" class="headline__list__item__title">
            Woow dlskjs sfdlfjalks akjsafajsdf asdaosdiwpnlk asljdasdkja asdjakjdakdjasd adjalkjdakdjakld
          </a>
          <img src="{{ asset('images/no1.jpg') }}" alt="" class="headline__list__item__cover">
          <a href="?category=andoid" class="headline__list__item__badge">Android</a>
        </span>
      </div>
    </section>
    {{-- Headline --}}

    <!-- Information -->
    <div class="container-fluid">
        <div class="row">
            <div class="information-control">

                <div class="information-tag">
                    <span class="information-tag-title">INFORMASI</span>
                    <a href="#" class="information-next">Selengkapnya<span class="arrow-next"></span></a>
                    <div class="information-border-bottom"></div>
                </div>

                <div class="col-3 info-mar">
                    <a href="#">
                      <div class="information-images">
                          <img src="images/no1.jpg" alt="">
                      </div>
                    </a>
                    <a href="#">
                      <div class="information-title">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </div>
                    </a>
                      <div class="information-detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-date">
                          <span class="information-author">Nadim</span>
                          -
                          <span class="information-detail-date">29 February 2018</span>
                      </div>
                  
                </div>

                <div class="col-3 info-mar">
                    <a href="#">
                      <div class="information-images">
                          <img src="images/no1.jpg" alt="">
                      </div>
                    </a>
                    <a href="#">
                      <div class="information-title">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </div>
                    </a>
                      <div class="information-detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-date">
                          <span class="information-author">Nadim</span>
                          -
                          <span class="information-detail-date">29 February 2018</span>
                      </div>
                    
                </div>

                <div class="col-3 info-mar">
                    <a href="#">
                      <div class="information-images">
                          <img src="images/no1.jpg" alt="">
                      </div>
                    </a>
                    <a href="#">
                      <div class="information-title">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </div>
                    </a>
                      <div class="information-detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-date">
                          <span class="information-author">Nadim</span>
                          -
                          <span class="information-detail-date">29 February 2018</span>
                      </div>
                    
                </div>

                <div class="information">
                    <a href="#">
                      <div class="information-images">
                          <img src="images/no1.jpg" alt="">
                      </div>
                    </a>
                    <a href="#">
                      <div class="information-title">
                          Membangun Ekosistem Digital,
                          STMIK dan STIKOM Bergabung
                      </div>
                    </a>
                      <div class="information-detail">
                          Happy Sunday from software Expand
                          In this Week's edition of Feedback
                          Loop, we talk about the future of
                          Windows Phone, whether they look
                          like shit
                      </div>
                      <div class="information-date">
                          <span class="information-author">Nadim</span>
                          -
                          <span class="information-detail-date">29 February 2018</span>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Quote -->
      <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="quote-control">
                    <div class="kutipan-control">
                      <div class="kutipan-control-content">
                        Dapatkan informasi kegiatan kami dan tips serta trik seputar dunia teknologi dan kampus
                      </div>
                    </div>
                    <a href="#"><div class="kutipan-hover">SUBSCRIBE</div></a>
                  </div>
                </div>
            </div>
            <div class="gradient"></div>
            <div class="parallax2"></div>
      </div>
    <!-- Quote -->

    <!-- ukm -->
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

                <div class="col-3">
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
    function link(url) {
      location.replace = url
      console.log('tai')
    }
</script>

@endsection
