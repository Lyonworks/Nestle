@extends('layouts.app')
@section('content')
<div class="container mt-4">
  <h2>Product</h2>
  <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-3">Create New Product</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Name</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->brand->name ?? '-' }}</td>
          <td>{{ $product->name }}</td>
          <td><img src="{{ asset('storage/' . $product->image) }}" width="80"></td>
          <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
