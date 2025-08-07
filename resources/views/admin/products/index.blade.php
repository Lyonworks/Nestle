@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2>Product</h2>
  <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->brand->name ?? '-' }}</td>
          <td>{{ $product->description }}</td>
          <td>
            @if ($product->image)
              <img src="{{ asset('storage/' . $product->image) }}" height="80">
            @else
              No Image
            @endif
          </td>
          <td>
            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete product?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
