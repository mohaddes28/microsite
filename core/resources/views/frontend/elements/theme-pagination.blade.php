@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled px-1">
                <a href="#" aria-label="Previous">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </li>
        @else
            <li class="disabled px-1">
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="px-1 active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="px-1"><a class="px-1" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </li>
        @else
            <li>
                <a href="#" aria-label="Next">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
