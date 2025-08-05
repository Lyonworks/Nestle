@extends('layouts.app') {{-- Jika pakai layout --}}
@section('content')

<div class="container">
  <h2 class="mb-4">Brands in {{ $category->name }}</h2>

  <div class="row">
    @forelse ($brands as $brand)
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('storage/' . $brand->image) }}" class="card-img-top" alt="{{ $brand->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $brand->name }}</h5>
            <p class="card-text">{{ $brand->description }}</p>
          </div>
        </div>
      </div>
    @empty
      <p>No brands found in this category.</p>
    @endforelse
  </div>
</div>

@endsection
