@if ($paginator->hasPages())
    <ul class="uk-pagination uk-flex-center" uk-margin>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="uk-disabled">
                <a href="#">
                    <span class="uk-margin-small-right" uk-pagination-previous></span> Previous
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <span class="uk-margin-small-right" uk-pagination-previous></span> Previous
                </a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="uk-margin-auto-left">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    Next <span class="uk-margin-small-left" uk-pagination-next></span>
                </a>
            </li>
        @else
            <li class="uk-margin-auto-left uk-disabled">
                <a href="#">
                    Next <span class="uk-margin-small-left" uk-pagination-next></span>
                </a>
            </li>
        @endif
    </ul>
@endif
