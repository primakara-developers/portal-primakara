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

            <a href="/post-list" class="information-section__tag--next">
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

                <a href="{{ $post->post_slug }}" class="information-section__column__box">
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
