<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>add-buttonテスト</title>
    {{-- 必要に応じてCSSを読み込み --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('components/add-button.css') }}">
    <link rel="stylesheet" href="{{ asset('components/search-button.css') }}">
    <link rel="stylesheet" href="{{ asset('components/product-card.css') }}">
</head>
<body>
    <h1>コンポーネント確認ページ</h1>

    {{-- コンポーネント呼び出し --}}
    <x-add-button />
    <x-search-button />
    <x-product-card />
    <x-product-card name="商品A" price="1200" />
    <x-product-card name="商品B" price="2500" />
</html>
