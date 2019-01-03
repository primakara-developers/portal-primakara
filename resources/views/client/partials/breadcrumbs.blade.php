<!-- Breadcrumbs -->
<ul class="breadcrumbs">
    @foreach($links as $name => $url)
    <li class="breadcrumbs__breadcrumb-item">
        <div class="breadcrumbs__breadcrumb-item__breadcrumb-item-container">
            <a class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-link" href="{{ $url }}">
                {{ $name }}
            </a>
            
            @if(!$loop->last)
            <span class="breadcrumbs__breadcrumb-item__breadcrumb-item-container__breadcrumb-item-separator"></span>
            @endif
        </div>
    </li>
    @endforeach
</ul>
