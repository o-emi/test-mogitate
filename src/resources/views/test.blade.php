<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>コンポーネントテスト</title>
    <!-- 必要に応じてCSSを読み込み -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('components/add-button.css') }}">
    <link rel="stylesheet" href="{{ asset('components/search-button.css') }}">
    <link rel="stylesheet" href="{{ asset('components/product-card.css') }}">
    <link rel="stylesheet" href="{{ asset('components/product-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('components/pagination.css') }}">

</head>
<body>
    <h1>コンポーネント確認ページ</h1>

<!-- コンポーネント呼び出し -->
<x-add-button />
<x-search-button />
<x-product-card
    name="バナナ"
    price="1200"
    image="fruits-img/banana.png" />
<x-product-card
    name="オレンジ"
    price="2500"
    image="fruits-img/orange.png" />

<!-- フォーム -->
<x-product-filter type="basic" />
<!-- プルダウン式 -->
<x-product-filter type="select" />
<!-- タグ式 -->
<x-product-filter type="tag" />
<x-pagination :paginator="$products" />

</body>
</html>
