@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    @include('client.partials.navigationBar')


    <!-- Breadcrumbs -->
    <ul class="breadcrumbs">
    	<li class="breadcrumbs__breadcrumb-item">
    		<div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
    			<a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="/">
    				Home
    			</a>
    			<span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
    		</div>
    	</li>
    	<li class="breadcrumbs__breadcrumb-item">
    		<div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
    			<a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="{{ route('home.postList', ['categorySlug' => $post->categories->category_slug ]) }}">{{ $post->categories->category_name }}</a>
    			<span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
    		</div>
    	</li>
        <li class="breadcrumbs__breadcrumb-item">
            <div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
            <a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="{{ url()->current() }}">{{ $post->post_title}}</a>
                <span></span>
            </div>
        </li>
    </ul>

    <!-- Post Detai. -->
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
                    <div class="simple-tooltip">
                        <div class="simple-tooltip__text">Berhasil dicopy!</div>
                    </div>
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

<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.4/dist/clipboard.min.js" integrity="sha256-FiZwavyI2V6+EXO1U+xzLG3IKldpiTFf3153ea9zikQ=" crossorigin="anonymous"></script>
<script>
    var clipboard = new ClipboardJS('.share__button--copy');

    clipboard.on('success', function(e) {
        var buttonCopy = document.querySelector('.share__button--copy');
        var tooltip = buttonCopy.querySelector('.simple-tooltip');
        tooltip.classList.add('simple-tooltip--display');

        setTimeout(() => {
            tooltip.classList.remove('simple-tooltip--display');
        }, 2000);
    });
</script>

@endsection
