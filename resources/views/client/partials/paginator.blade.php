<div class="column-pagination">
    <div class="column-pagination__block">
        @foreach($elements as $element)
            @if(is_array($element))
                @foreach($element as $page => $url)
                    @php
                        if($page == 1){
                            $specialClass = "column-pagination__block__number column-pagination__block__number--only";
                        }
                    @endphp

                    @if($page == $paginator->currentPage())
                        <a class="{{ $specialClass }} column-pagination__block__number column-pagination__block__number--active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="{{ $specialClass }} column-pagination__block__number">{{ $page }}</a>
                    @endif
                @endforeach
            @endif

            @if(is_string($element))
                <a class="column-pagination__block__number"><span class="column-pagination__block__number--dots">...</span></a>
            @endif
        @endforeach
    </div>
</div>
