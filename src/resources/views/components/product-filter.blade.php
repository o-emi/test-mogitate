@props(['type' => 'basic'])

<link rel="stylesheet" href="{{ asset('css/components/product-filter.css') }}">

<!-- 基本フォームタイプ -->
@if ($type === 'basic')
<div class="filter-basic">
    <form class="filter-basic-form" action="{{ route('products.index') }}" method="GET">
        <input class="filter-input" type="text" name="price" placeholder="価格で並び替え">
    </form>
</div>

<!-- プルダウンタイプ -->
@elseif ($type === 'select')
<div class="filter-select-wrapper">
    <form action="{{ route('products.index') }}" method="GET" class="filter-select-form">
      <select name="sort" onchange="this.form.submit()">
          <option value="" selected disabled hidden>価格で並び替え</option>
          <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>高い順に表示</option>
          <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>安い順に表示</option>
      </select>
    </form>
</div>

<!-- タグタイプ -->
@elseif ($type === 'tag')
<div class="filter-tags">
    @if(request('sort') === 'price_desc')
        <a href="{{ route('products.index') }}" class="tag active">
            高い順に表示
            <span class="tag-close">&times;</span>
        </a>
    @elseif(request('sort') === 'price_asc')
        <a href="{{ route('products.index') }}" class="tag active">
            安い順に表示
            <span class="tag-close">&times;</span>
        </a>
    @endif
</div>

@endif



