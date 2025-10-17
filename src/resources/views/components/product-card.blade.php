  <div class="card">
    <div class="product-img">
      <img src="{{ $image }}" alt="{{ $name }}" />
    </div>
    <div class="text-box">
      <h2>{{ $name }}</h2>
      <p class="price">¥{{ number_format($price) }}</p>
    </div>
  </div>