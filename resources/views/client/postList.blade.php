@extends('layouts.clientLayout')

@section('additional-title', $categoryName.' - ')

@section('content')

<main>
    @include('client.partials.navigationBar')

    @include('client.partials.breadcrumbs')

    <!-- Post List Item -->
    <div class="post">
        <div class="post__heading">
            <h1 class="post__heading__title">{{ $categoryName }}</h1>
        </div>
        <div class="post__list">
            @if(!is_null($posts))
                @foreach ($posts as $post)
                    <div class="post__list__item">
                        <a href="{{ route('home.postDetail', ['slugPost' => $post->post_slug]) }}" class="post__list__item__left">
                            <img class="post__list__item__image" src="{{ Storage::url('media/'.$post->post_cover) }}">
                        </a>
                        <div class="post__list__item__right">
                            <a href="{{ route('home.postDetail', ['slugPost' => $post->post_slug]) }}" class="post__list__item__hoverable">
                                <h3 class="post__list__item__title">
                                    {{ $post->post_title }}
                                </h3>
                                <p class="post__list__item__preview">{{ strip_tags($post->post_content) }}</p>
                            </a>
                            <span class="post__list__item__writter">{{ $post->user->name }}</span>
                            <span> - </span>
                            <span class="post__list__item__timestamp">{{ $post->created_at->format('d M Y') }}</span>
                            <br />
                            <a href="{{ route('home.postList', ['categorySlug' => $post->categories->category_slug]) }}" class="post__list__item__badge">{{ $post->categories->category_name }}</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    @if(!is_null($posts))
        {{ $posts->links('client.partials.pagination', ['categorySlug' => $categorySlug]) }}
    @endif
</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>

@endsection
