@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('components/add-button.css') }}">
@endsection

@section('content')
<div class="product-list-form">
  <h2 class="product-list-form__heading content__heading">商品一覧</h2>
<x-add-button href="{{ route('products.register') }}" />

@endsection