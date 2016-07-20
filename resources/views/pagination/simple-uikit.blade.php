<ul class="uk-pagination">
  <!-- Previous Page Link -->
  @if ($paginator->onFirstPage())
    <li class="uk-pagination-previous uk-disabled"><span>&laquo; Previous</span></li>
  @else
    <li class="uk-pagination-previous"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
    </li>
  @endif

<!-- Next Page Link -->
  @if ($paginator->hasMorePages())
    <li class="uk-pagination-next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a></li>
  @else
    <li class="uk-pagination-next uk-disabled"><span>Next &raquo;</span></li>
  @endif
</ul>
