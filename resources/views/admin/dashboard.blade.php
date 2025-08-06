<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="{{ asset('storage/images/favicon.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4 text-center">Welcome to Admin Panel</h1>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Brands</h5>
                        <p class="card-text">Create, edit, or delete brand data.</p>
                        <a href="{{ route('admin.brands.index') }}" class="btn btn-primary">Go to Brands</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Products</h5>
                        <p class="card-text">Create, edit, or delete product data.</p>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Go to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
