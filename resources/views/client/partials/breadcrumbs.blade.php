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
        </div>
    </li>
</ul>
