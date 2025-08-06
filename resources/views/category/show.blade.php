<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $category->name }} - Nestlé</title>
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
    <h1 class="text-center mb-5">{{ $category->name }}</h1>
    <div class="row g-4">
      @forelse ($category->brands as $brand)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="category-card position-relative overflow-hidden">
            <a href="{{ route('brands.show', $brand->slug) }}" class="d-block text-decoration-none">
              <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" class="img-fluid rounded-circle mx-auto d-block" style="width: 150px; height: 150px; object-fit: cover;">
            </a>
          </div>
        </div>
      @empty
        <p class="text-muted text-center">No brands available in this category.</p>
      @endforelse
    </div>
  </main>

  <!-- Footer -->
  <footer class="site-footer border-top mt-5">
    <div class="container text-center">
      <p>© {{ date('Y') }} Nestlé. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
