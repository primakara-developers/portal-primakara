@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    <section class="navigation-bar">
        <div class="navigation-bar__container">
            <div class="navigation-bar__category">
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
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Akademik</a></li>
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
    			<a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="#">Intermezzo</a>
    			<span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
    		</div>
    	</li>
        <li class="breadcrumbs__breadcrumb-item">
            <div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
                <a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="#">Framework Laravel Milik Pras adalah Framework Terburuk Tahun 2018, Anda Pemakainya?</a>
                <span></span>
            </div>
        </li>
    </ul>

    <!-- Post Detail -->


    <!-- Share -->
    <section class="share">
        <p class="share__title">Share This Post :</p>
        <div class="share__container">
            <div class="share__buttons">
                <a class="share__button share__button--facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//kostpedia.id" target="_blank" rel="noopener noreferrer"></a>
                <a class="share__button share__button--whatsapp" href="whatsapp://send?text=Laravel%20mantap%20%23PortalPrimakara%0A%0Ahttps%3A%2F%2Fkostpedia.id" data-action="share/whatsapp/share" target="_blank" rel="noopener noreferrer"></a>
                <a class="share__button share__button--line" href="line://msg/text/Laravel%20mantap%20%23PortalPrimakara%0A%0Ahttps%3A%2F%2Fkostpedia.id" target="_blank" rel="noopener noreferrer"></a>
                <a class="share__button share__button--copy" href="javascript:void(0)"
                    data-clipboard-text="Laravel mantap #PortalPrimakara

https://kostpedia.id">
                </a>
            </div>
            <a href="#" class="share__subscribe">Subscribe</a>
        </div>
    </section>


    <!-- Related Posts -->


</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.4/dist/clipboard.min.js" integrity="sha256-FiZwavyI2V6+EXO1U+xzLG3IKldpiTFf3153ea9zikQ=" crossorigin="anonymous"></script>
<script>
    new ClipboardJS('.share__button--copy');
</script>

@endsection
