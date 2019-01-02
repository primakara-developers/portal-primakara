@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    <section class="navigation-bar">
        <div class="navigation-bar__container">
            <div class="navigation-bar__category">
                <ul class="navigation-bar__category-list clearfix">
                    @foreach ($allCategory as $category)
                <li class="navigation-bar__category-list-item"><a href="{{ route('home.postList', ['categoryName' => $category->category_slug]) }}">{{ $category->category_name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="navigation-bar__category-collapse-button-container">
                <a href="javascript:void(0)" class="navigation-bar__category-collapse-button">
                    <span class="navigation-bar__collapse-button-icon">
                        <div class="navigation-bar__collapse-button-icon__middle"></div>
                    </span>
                    <span class="navigation-bar__collapse-button-text">Pilih Kategori</span>
                </a>
            </div>
            <div class="navigation-bar__search">
                <form action="">
                    <div class="navigation-bar__search-content">
                        <input type="text" name="search" placeholder="Search" class="navigation-bar__search-input">
                    </div>
                </form>
            </div>
        </div>
    </section>


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
            <a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="{{ route('home.postList', ['categoryName' => $categoryName]) }}">{{ $categoryName }}</a>
    			<span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
    		</div>
    	</li>
    </ul>

    <!-- Post List Item -->
    <div class="post">
        <div class="post__heading">
            <h1 class="post__heading__title">{{ $categoryName }}</h1>
        </div>
        <div class="post__list">
            @foreach ($posts as $post)
                <div class="post__list__item">
                    <a href="" class="post__list__item__left">
                        <img class="post__list__item__image" src="{{ Storage::url('media/'.$post->post_cover) }}">
                    </a>
                    <div class="post__list__item__right">
                        <a href="" class="post__list__item__hoverable">
                            <h3 class="post__list__item__title">
                                {{ $post->post_title }}
                            </h3>
                            <p class="post__list__item__preview">{{ strip_tags($post->post_content) }}</p>
                        </a>
                        <span class="post__list__item__writter">{{ $post->user->name }}</span>
                        <span> - </span>
                        <span class="post__list__item__timestamp">{{ $post->created_at->format('d M Y') }}</span>
                        <br />
                        <a href="" class="post__list__item__badge">{{ $post->categories->category_name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Pagination -->
    <div class="column-pagination">
        <div class="column-pagination__block">

            {{ $posts->links() }}
            
            {{-- <a href="#" class="column-pagination__block__number column-pagination__block__number--only">1</a>
            <a href="#" class="column-pagination__block__number column-pagination__block__number--active">2</a>
            <a href="#" class="column-pagination__block__number">3</a>
            <a href="#" class="column-pagination__block__number">4</a>
            <a href="#" class="column-pagination__block__number">5</a>
            <a href="#" class="column-pagination__block__number">6</a>
            <a href="#" class="column-pagination__block__number"><span class="column-pagination__block__number--dots">...</span></a> --}}
        </div>
    </div>

</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>

@endsection
