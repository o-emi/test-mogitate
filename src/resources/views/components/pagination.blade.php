@props(['paginator'])

@if ($paginator->hasPages())
    <nav class="pagination-wrapper">
        {{ $paginator->links() }}
    </nav>
@endif