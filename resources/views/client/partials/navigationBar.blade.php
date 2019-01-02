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
