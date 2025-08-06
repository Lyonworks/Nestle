@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2>Brands</h2>
  <a href="{{ route('admin.brands.create') }}" class="btn btn-primary mb-3">Add New Brand</a>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Logo</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($brands as $brand)
      <tr>
        <td>{{ $brand->id }}</td>
        <td>{{ $brand->name }}</td>
        <td>{{ $brand->category->name ?? '-' }}</td> {{-- Menampilkan nama kategori --}}
        <td>
          @if ($brand->image)
            <img src="{{ asset('storage/' . $brand->image) }}" height="80">
          @else
            No Logo
          @endif
        </td>
        <td>
          <a href="{{ route('admin.brands.edit', $brand) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('admin.brands.destroy', $brand) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete brand?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
