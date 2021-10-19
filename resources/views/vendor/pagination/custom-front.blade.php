
@if ($paginator->hasPages())
    <ul class="nd ny ro r_ ic">
       
        @if ($paginator->onFirstPage())
            <li class="ia disabled">
                <span class="nd bu we nj nw _ uj nr la">Prev</span>
            </li>
        @else
            <li class="ia">
                <a href="{{ $paginator->previousPageUrl() }}" class="nd bu we nj nw _ uj nr lo yf xu pt hz">Prev</a>
            </li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                {{-- <li class="disabled"><span>{{ $element }}</span></li> --}}
                <li class="ia disabled">
                    <a href="#" class="nd bu we nj nw _ uw nr lo yf xu pt hz la" style="outline: none; box-shadow: none;">{{ $element }}</a>
                </li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- <li class="active my-active"><span>{{ $page }}</span></li> --}}
                        <li class="ia">
                            <span class="nd bu we nj nw _ uj nr la" style="outline: none; box-shadow: none;">{{ $page }}</span>
                        </li>
                    @else
                        {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                        <li class="ia">
                            <a href="{{ $url }}" class="nd bu we nj nw _ uw nr lo yf xu pt hz" style="outline: none; box-shadow: none;">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li> --}}
            <li class="ia">
                <a href="{{ $paginator->nextPageUrl() }}" class="nd bu we nj nw _ uj nr lo yf xu pt hz" style="outline: none; box-shadow: none;">Next</a>
            </li>
        @else
            {{-- <li class="disabled"><span>Next →</span></li> --}}
            <li class="ia disabled">
                <span href="0#" class="nd bu we nj nw _ uj nr la" style="outline: none; box-shadow: none;">Next</span>
            </li>
        @endif
    </ul>
@endif 