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


    <!-- Post List Item -->
    <div class="post">
        <div class="post__heading">
            <h1 class="post__heading__title">Intemezzo</h1>
        </div>
        <div class="post__list">
            <div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div>
            <div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div><div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div><div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div><div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div><div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div><div class="post__list__item">
                <a href="" class="post__list__item__left">
                    <img class="post__list__item__image" src="{{ asset('images/no1.jpg') }}">
                </a>
                <div class="post__list__item__right">
                    <a href="" class="post__list__item__hoverable">
                        <h3 class="post__list__item__title">
                            UKM Dance Primakara Adakan Lari Marathon Keliling Dunia
                        </h3>
                        <p class="post__list__item__preview">Happy Sunday From Software Expand in this week's edition of Feedback Loop, we talk about the future of Windows Phone Whether they bla b</p>
                    </a>
                    <span class="post__list__item__writter">Susano'o</span>
                    <span> - </span>
                    <span class="post__list__item__timestamp">29 February 2019</span>
                    <br />
                    <a href="" class="post__list__item__badge">INTERMEZZO</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Pagination -->
    <div class="column-pagination">
        <div class="column-pagination__block">
            <a href="#" class="column-pagination__block__number column-pagination__block__number--only">1</a>
            <a href="#" class="column-pagination__block__number column-pagination__block__number--active">2</a>
            <a href="#" class="column-pagination__block__number">3</a>
            <a href="#" class="column-pagination__block__number">4</a>
            <a href="#" class="column-pagination__block__number">5</a>
            <a href="#" class="column-pagination__block__number">6</a>
            <a href="#" class="column-pagination__block__number"><span class="column-pagination__block__number--dots">...</span></a>
        </div>
    </div>

</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>

@endsection
