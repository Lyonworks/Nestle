<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $brand->name }} - Nestlé</title>
    <link rel="icon" href="{{ asset('storage/images/favicon.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>
<body>
<!-- Header -->
<header class="site-header mb-4">
    <div class="container d-flex align-items-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('storage/images/logo.svg') }}" alt="Nestlé Logo" height="80">
        </a>
    </div>
</header>

<!-- Main Content -->
<main class="container py-5">
    <h1 class="text-center mb-5">{{ $brand->name }}</h1>
    <div class="row g-4">
        @forelse ($brand->products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top fade-in-img" style="height: 200px; object-fit: contain; background-color: #fff;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted text-center">No products available for this brand.</p>
        @endforelse
    </div>
</main>

<!-- Footer -->
<footer class="site-footer border-top mt-5">
    <div class="container text-center">
        <p>© {{ date('Y') }} Nestlé. All rights reserved.</p>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.fade-in-img').forEach(function(img) {
            setTimeout(function() {
                img.classList.add('visible');
            }, 100);
        });
    });
</script>
</body>
</html>
