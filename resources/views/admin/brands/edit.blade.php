@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2>Edit Brand</h2>
  <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
      <label for="name" class="form-label">Brand Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}" required>
    </div>

    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select name="category_id" id="category_id" class="form-control" required>
        <option value="">-- Select Category --</option>
        @foreach($category as $category)
          <option value="{{ $category->id }}" {{ $brand->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Logo</label>
      <input type="file" name="image" id="image" class="form-control">
      @if($brand->image)
        <img src="{{ asset('storage/' . $brand->image) }}" height="50" class="mt-2">
      @endif
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
