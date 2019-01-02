@extends('layouts.clientLayout')

@section('content')

<!--Main -->
<main>
    <!-- Banner -->
    <section class="banner" style="background-image: url('{{ asset('images/workshop-photos.jpg') }}');">
        <div class="banner__content">
            <h1 class="banner__title">Primakara Student Information Site</h1>
            <h3 class="banner__subtitle">Together, we can change anything better</h3>
        </div>
        <a href="javascript:void(0)" class="banner__scroll-to-bottom-button">
            <img src="{{ asset('images/icons/downwards-pointer.svg') }}" class="banner__scroll-to-bottom-image">
        </a>
    </section>
    <!-- Banner -->

    {{-- Headline --}}
    @if(count($headlines) >= 7)

    <section class="headline">
      <div class="headline__list">
          @foreach ($headlines as $headline)
            <span class="headline__list__item">
                <a href="#" class="headline__list__item__gradient"></a>
                <a href="#" class="headline__list__item__title">{{ $headline->post_title }}</a>
                <img src="{{ Storage::url('media/'.$headline->post_cover) }}" alt="" class="headline__list__item__cover">
                <a href="/post-list" class="headline__list__item__badge">{{ $headline->categories->category_name }}</a>
            </span>
          @endforeach
      </div>
    </section>
    @endif
    {{-- Headline --}}

    <!-- Information -->
    <div class="information-section">
        <div class="information-section__tag">

            <span class="information-section__tag--title">INFORMASI TERUPDATE</span>

            <a href="{{ route('home.postList', ['categoryName' => 'informasi']) }}" class="information-section__tag--next">
                <span class="information-section__tag--next--remove">Selengkapnya</span>
                <div class="information-section__tag--next--box">
                <span class="information-section__tag--next--box--arrow"></span>
                <span class="information-section__tag--next--box--arrow information-section__tag--next--box--second-arrow"></span>
                </div>
            </a>

            <div class="information-section__tag--border"></div>

        </div>

        @foreach ($posts as $post)
            <div class="information-section__column">

                <a href="#" class="information-section__column__box">
                    <div class="information-section__column__box__images">
                        <img src="{{ Storage::url('media/'.$post->post_cover) }}" alt="">
                    </div>


                    <div class="information-section__column__box__title">
                            {{ $post->post_title }}
                    </div>

                    <div class="information-section__column__box__detail">
                        {{ strip_tags($post->post_content) }}
                    </div>
                </a>

                <div class="information-section__column__date">
                    <span class="information-section__column__date__author">{{ $post->user->name }}</span>
                    -
                    <span class="information-section__column__date__detail">{{ $post->created_at->format('d M Y') }}</span>
                </div>
            </div>
        @endforeach
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


    <!-- ukm -->
  <div class="ukm">
      <div class="ukm__container">
          <div class="ukm__container__title">UNIT KEGIATAN MAHASISWA</div>
          <div class="ukm__container__detail">STMIK PRIMAKARA</div>

            <div class="ukm__container__content">
              
              <div class="ukm__container__content__box">
                <a href="#" class="ukm__container__content__box__link">
                  
                  <div class="ukm__container__content__box__link__logo">
                    
                    <img src="images/logo-gradient.svg" class="ukm__container__content__box__link__logo__main">
                    <img src="images/no4.jpg" class="ukm__container__content__box__link__logo__img">
                    <div class="ukm__container__content__box__link__logo__gradient ukm__container__content__box__link__logo__primdev"></div>
                    <!-- <div class="ukm__container__content__box__link__logo__gradient-white ukm__container__content__box__link__logo__primdev"></div>
                    <div class="ukm__container__content__box__link__logo__gradient-black ukm__container__content__box__link__logo__primdev"></div> -->

                  </div>

                  <div class="ukm__container__content__box__link__title">
                    PRIMAKARA DEVELOPERS
                  </div>

                </a>
              </div>
            
            </div>

            <div class="ukm__container__content">
              
              <div class="ukm__container__content__box">
                <a href="#" class="ukm__container__content__box__link">
                  
                  <div class="ukm__container__content__box__link__logo">

                    <img src="images/logo-gradient.svg" class="ukm__container__content__box__link__logo__main">
                    <img src="images/no4.jpg" class="ukm__container__content__box__link__logo__img">
                    <div class="ukm__container__content__box__link__logo__gradient ukm__container__content__box__link__logo__primdev"></div>

                  </div>

                  <div class="ukm__container__content__box__link__title">
                    PRIMAKARA DEVELOPERS
                  </div>

                </a>
              </div>
            
            </div>

            <div class="ukm__container__content">
              
              <div class="ukm__container__content__box">
                <a href="#" class="ukm__container__content__box__link">
                  
                  <div class="ukm__container__content__box__link__logo">

                    <img src="images/logo-gradient.svg" class="ukm__container__content__box__link__logo__main">
                    <img src="images/no4.jpg" class="ukm__container__content__box__link__logo__img">
                    <div class="ukm__container__content__box__link__logo__gradient ukm__container__content__box__link__logo__primdev"></div>

                  </div>

                  <div class="ukm__container__content__box__link__title">
                    PRIMAKARA DEVELOPERS
                  </div>

                </a>
              </div>
            
            </div>

            <div class="ukm__container__content">
              
              <div class="ukm__container__content__box">
                <a href="#" class="ukm__container__content__box__link">
                  
                  <div class="ukm__container__content__box__link__logo">

                    <img src="images/logo-gradient.svg" class="ukm__container__content__box__link__logo__main">
                    <img src="images/no4.jpg" class="ukm__container__content__box__link__logo__img">
                    <div class="ukm__container__content__box__link__logo__gradient ukm__container__content__box__link__logo__primdev"></div>

                  </div>

                  <div class="ukm__container__content__box__link__title">
                    PRIMAKARA DEVELOPERS
                  </div>

                </a>
              </div>
            
            </div>

            <div class="ukm__container__content">
              
              <div class="ukm__container__content__box">
                <a href="#" class="ukm__container__content__box__link">
                  
                  <div class="ukm__container__content__box__link__logo">

                    <img src="images/logo-gradient.svg" class="ukm__container__content__box__link__logo__main">
                    <img src="images/no4.jpg" class="ukm__container__content__box__link__logo__img">
                    <div class="ukm__container__content__box__link__logo__gradient ukm__container__content__box__link__logo__primdev"></div>

                  </div>

                  <div class="ukm__container__content__box__link__title">
                    PRIMAKARA DEVELOPERS
                  </div>

                </a>
              </div>
            
            </div>

            <div class="ukm__container__content">
              
              <div class="ukm__container__content__box">
                <a href="#" class="ukm__container__content__box__link">
                  
                  <div class="ukm__container__content__box__link__logo">

                    <img src="images/logo-gradient.svg" class="ukm__container__content__box__link__logo__main">
                    <img src="images/no4.jpg" class="ukm__container__content__box__link__logo__img">
                    <div class="ukm__container__content__box__link__logo__gradient ukm__container__content__box__link__logo__primdev"></div>

                  </div>

                  <div class="ukm__container__content__box__link__title">
                    PRIMAKARA DEVELOPERS
                  </div>

                </a>
              </div>
            
            </div>

      </div>
  </div>
</main>
<!-- Main -->


    <!-- footer section -->
<footer>
    <!-- footer top -->
    <div class="footer">
      <div class="footer__border"></div>
      <div class="footer__container">
          <div class="footer__container__logo">
            <img src="images/primakara.jpg" alt="" class="footer__container__logo__first">
            <img src="images/primdev.jpg" alt="" class="footer__container__logo__second">
          </div>
          <div class="footer__container__information">
            <div class="footer__container__information__title">INFORMASI</div>
            <div class="footer__container__information__list"><a href="#">About</a></div>
            <div class="footer__container__information__list"><a href="#">Story</a></div>
            <div class="footer__container__information__list"><a href="#">Event</a></div>
            <div class="footer__container__information__list"><a href="#">Etcetera</a></div>
          </div>
          <div class="footer__container__about">
              <div class="footer__container__about__detail">
                  <div class="footer__container__about__detail__title">SUMMARY</div>
                  <div class="footer__container__about__detail__list">
                      Newspaper Tech Demo is your tech news website. We
                      provide you with the lastest breaking news and videos
                      straight from the technology industry provide you with
                      the lastest breaking.
                  </div>
              </div>
          </div>
      </div>
    </div>

    <!-- footer-bottom -->
    <div class="footer-bottom">
      <div class="footer-bottom__container">
        <div class="footer-bottom__container__copyright">
            &copy;2019 - Team Primakara Developers, All Right Reserved
        </div>
      </div>
    </div>
</footer>
    <!-- footer end section-->

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
