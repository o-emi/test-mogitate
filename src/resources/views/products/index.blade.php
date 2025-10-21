@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('components/add-button.css') }}">
<link rel="stylesheet" href="{{ asset('components/search-button.css') }}">
<link rel="stylesheet" href="{{ asset('components/product-filter.css') }}">
<link rel="stylesheet" href="{{ asset('components/product-card.css') }}">
<link rel="stylesheet" href="{{ asset('components/pagination.css') }}">
@endsection

@section('content')
<h2>商品一覧</h2>

<!-- +商品を追加ボタン -->
<x-add-button href="{{ route('products.register') }}" />

<!-- 検索・並び替え -->
<x-product-filter type="basic" /> <!-- 商品名検索 -->
<x-product-filter type="select" /> <!-- プルダウン並び替え -->
<x-product-filter type="tag" /> <!-- 並び替えタグ表示 -->

<!-- 商品カード -->
<div class="product-list">
    @foreach($products as $product)
        <x-product-card
            :image="$product->image"
            :name="$product->name"
            :price="$product->price"
        />
    @endforeach
</div>

<!-- ページネーション -->
<x-pagination :paginator="$products" />
@endsection