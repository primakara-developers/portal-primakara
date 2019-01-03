@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    @include('client.partials.navigationBar')

    @include('client.partials.breadcrumbs')

    <!-- Post Detail -->
    <section class="post-detail">
        <div class="post-detail__heading">
            <h1 class="post-detail__heading__title">{{ $post->post_title }}</h1>
            <span class="post-detail__heading__author-name">{{ $post->user->name }}</span>
            <span class="post-detail__heading__heading-dash"> - </span>
            <span class="post-detail__heading__timestamp">{{ $post->created_at->format('d F Y') }}</span>
        </div>
        <div class="post-detail__body">
            <img class="post-detail__body__cover-image" src="{{ Storage::url('media/'.$post->post_cover) }}">
            <div class="post-detail__body__content">{!! $post->post_content !!}</div>
        </div>
    </section>


    <!-- Share -->
    <section class="share">
        <p class="share__title">Share This Post :</p>
        <div class="share__container">
            <div class="share__buttons">
                @php
                    $textShare = $post->post_title." #PortalPrimakara\n\n".url()->current();
                    $urlFacebook = urlencode(url()->current());
                    $urlWA = urlencode($textShare);
                    $urlLine = urlencode($textShare);
                @endphp
                <a class="share__button share__button--facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ $urlFacebook }}" target="_blank" rel="noopener noreferrer"></a>
                <a class="share__button share__button--whatsapp" href="whatsapp://send?text={{ $urlWA }}" data-action="share/whatsapp/share" target="_blank" rel="noopener noreferrer"></a>
                <a class="share__button share__button--line" href="line://msg/text/{{ $urlLine }}" target="_blank" rel="noopener noreferrer"></a>
                <a class="share__button share__button--copy" href="javascript:void(0)"
                    data-clipboard-text="{{ $post->post_title }} #PortalPrimakara

{{ url()->current() }}">
                </a>
            </div>
            <a href="#" class="share__subscribe">Subscribe</a>
        </div>
    </section>

    <!-- Related Posts -->
    <div class="related-posts">
        <div class="related-posts--container">
            @foreach($randomPosts as $post)
            <div class="related-posts--container__column">
                <a href="{{ route('home.postDetail', ['slugPost' => $post->post_slug]) }}" class="related-posts--container__column__link">
                    <div class="related-posts--container__column__link__images">
                        <div class="related-posts--container__column__link__images__centered">
                            <img src="{{ Storage::url('media/'.$post->post_cover) }}">
                        </div>
                    </div>

                    <div class="related-posts--container__column__link__title">
                        {{ $post->post_title }}
                    </div>

                </a>
                <div class="related-posts--container__column__date">
                    <span class="related-posts--container__column__date__author">{{ $post->user->name }}</span> -
                    <span class="related-posts--container__column__date__detail">{{ $post->created_at->format('d F Y') }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>
<script src="{{ mix('js/copy-to-clipboard.js') }}" defer></script>

@endsection
