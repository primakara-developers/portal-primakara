<div class="pagination">
    <div class="pagination__block">
        @foreach($elements as $element)
            @if(is_array($element))
                @foreach($element as $page => $url)
                    @php
                        if($page == 1){
                            $specialClass = "pagination__block__number pagination__block__number--only";
                        }
                    @endphp

                    @if($page == $paginator->currentPage())
                        <a class="{{ $specialClass }} pagination__block__number pagination__block__number--active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="{{ $specialClass }} pagination__block__number">{{ $page }}</a>
                    @endif
                @endforeach
            @endif

            @if(is_string($element))
                <a class="pagination__block__number"><span class="pagination__block__number--dots">...</span></a>
            @endif
        @endforeach
    </div>
</div>
