@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2>Add Brand</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Brand Name</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select name="category_id" id="category_id" class="form-select" required>
        <option value="">-- Select Category --</option>
        @foreach ($category as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Logo</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary ms-2">Back</a>
  </form>
</div>
@endsection
