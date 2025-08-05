<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brands in {{ $category->name }}</title>

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
    <h2 class="mb-4">Brands in {{ $category->name }}</h2>

    <div class="row g-4">
      @forelse ($brands as $brand)
        <div class="col-md-4 col-sm-6">
          <div class="card h-100">
            <img src="{{ asset('storage/' . $brand->image) }}" class="card-img-top" alt="{{ $brand->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $brand->name }}</h5>
              <p class="card-text">{{ $brand->description }}</p>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12">
          <p class="text-muted">No brands found in this category.</p>
        </div>
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
