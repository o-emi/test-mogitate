@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('components/add-button.css') }}">
@endsection

@section('content')
<div class="product-list-form">
  <h2 class="product-list-form__heading content__heading">商品一覧</h2>
  <x-add-button href="{{ route('products.register') }}" />
  <div class="product-list-form__inner">
    <form action="/products/search" method="GET">
      @csrf
      <div class="product-list-form">
        <input type="text" name="keyword" placeholder="商品名で検索" class="search-input">
      <button type="submit" class="search-button">検索</button>
    </form>
  </div>
  <x-product-filter>


@endsection