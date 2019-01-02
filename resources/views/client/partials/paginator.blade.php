 @if($paginator->hasPages())
 <div class="column-pagination">
    <div class="column-pagination__block">
        @foreach($elements as $element)
            @if(is_array($element))
                @foreach($element as $page => $url)
                    @if($page == 1)
                        <a href="#" class="column-pagination__block__number column-pagination__block__number--only">1</a>
                    @elseif($page == $paginator->currentPage())
                        <a href="#" class="column-pagination__block__number column-pagination__block__number--active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="column-pagination__block__number">{{ $page }}</a>
                    @endif
                @endforeach
            @endif

            @if(is_string($element))
                <a href="#" class="column-pagination__block__number"><span class="column-pagination__block__number--dots">...</span></a>
            @endif
        @endforeach
    </div>
</div>
@endif