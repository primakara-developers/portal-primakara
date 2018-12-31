@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    <section class="navigation-bar">
        <div class="navigation-bar__container">
            <!-- <div class="navigation-bar__category">
                <ul class="navigation-bar__category-list clearfix">
                    <li class="navigation-bar__category-list-item"><a href="/information">Information</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/intermezzo">Intermezzo</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tips-and-trick">Tips & Trick</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/hardware">Hardware</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/software">Software</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Tutorials</a></li>
                </ul>
            </div> -->
            <div class="navigation-bar__category navigation-bar__category--collapse">
                <ul class="navigation-bar__category-list clearfix">
                    <li class="navigation-bar__category-list-item"><a href="/information">Information</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/intermezzo">Intermezzo</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tips-and-trick">Tips & Trick</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/hardware">Hardware</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/software">Software</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Tutorials</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Event</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">UKM</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Announcement</a></li>
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


    <!-- Post List Item -->


    <!-- Pagination -->

</main>

@endsection

@section('additional-scripts')

<script id="category-collapse-script">
    var categoryCollapseButton = document.getElementsByClassName('navigation-bar__category-collapse-button')[0];
    categoryCollapseButton.addEventListener('click', function(e) {
        var categoryCollapse = document.getElementsByClassName('navigation-bar__category--collapse')[0];
        if (categoryCollapse.style.height) {
            categoryCollapse.removeAttribute('style');

            categoryCollapseButton.classList.remove('navigation-bar__category-collapse-button--active');
        } else {
            categoryCollapseHeight = categoryCollapse.scrollHeight;
            categoryCollapse.style.height = categoryCollapseHeight + 'px';

            categoryCollapseButton.classList.add('navigation-bar__category-collapse-button--active');
        }
    });
</script>

<script id="search-focus-mobile-script">
    if (window.outerWidth <= 530) {
        var navigationBar = document.getElementsByClassName('navigation-bar')[0];
        var searchInput = document.getElementsByClassName('navigation-bar__search-input')[0];
        searchInput.addEventListener('focus', function(e) {
            navigationBar.classList.add('navigation-bar--search-focus');
        });
        searchInput.addEventListener('blur', function(e) {
            navigationBar.classList.remove('navigation-bar--search-focus');
        });
    }
</script>

@endsection
