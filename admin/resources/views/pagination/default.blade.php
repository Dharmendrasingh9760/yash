@if ($paginator->hasPages())
    <!-- Showing X to Y of Z results -->
    <div class="text-center">
        Showing 
        @if ($paginator->count() > 0)
            {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} 
            of {{ $paginator->total() }} results
        @else
            0 to 0 of 0 results
        @endif
    </div>

    <!-- Pagination Links -->
    <ul class="pagination justify-content-center">
        
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">&laquo; Previous</span>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
            </li>
        @endif

        {{-- Page Number Links --}}
        @foreach ($elements[0] as $page => $url)
            {{-- Only show the pages within a range of 2 pages before and after the current page --}}
            @if ($page >= ($paginator->currentPage() - 2) && $page <= ($paginator->currentPage() + 2))
                <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                    <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                </li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">Next &raquo;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Next &raquo;</span>
            </li>
        @endif
    </ul>
@endif
