@props(['paginator'])

@if ($paginator->hasPages())
<div class="pagination-wrapper">
<!-- 前のページ -->
    @if ($paginator->onFirstPage())
        <span class="page-item disabled">&laquo;</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="page-item">&laquo;</a>
    @endif

    <!-- ページ番号 -->
    @foreach(range(1, $paginator->lastPage()) as $page)
        @if($page == $paginator->currentPage())
            <span class="page-item active">{{ $page }}</span>
        @else
            <a href="{{ $paginator->url($page) }}" class="page-item">{{ $page }}</a>
        @endif
    @endforeach

    <!-- 次のページ -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="page-item">&raquo;</a>
    @else
        <span class="page-item disabled">&raquo;</span>
    @endif
</div>
@endif
