<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nestlé</title>
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
    <div class="row g-4">
      @foreach ($category as $category)
        <div class="col-md-4 col-sm-6">
          <div class="category-card position-relative overflow-hidden">
            <a href="{{ url('/category/' . $category->slug) }}" class="d-block text-decoration-none">
              <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="category-image w-100">
              <div class="category-name py-3">
                <h5 class="mb-0 fw-bold">
                  {{ $category->name }}
                  <span class="arrow-icon ms-2">→</span>
                </h5>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </main>

  <!-- Footer -->
  <footer class="site-footer border-top">
    <div class="container text-center">
      <p>© {{ date('Y') }} Nestlé. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
