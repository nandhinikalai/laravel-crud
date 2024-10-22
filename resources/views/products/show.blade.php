@extends('layouts.app')
@section('main')

<h5><i class="bi bi-bookmark-check-fill"></i>Product Details</h5>
<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">home</a></li>
        <li class="breadcrumb-item active">View Product</a></li>
    </ol>
</nav>

<div class="card">
    <img src="/products/{{ $product->image }}" alt="{{ $product->name }}" class="card-ima-top">
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $product->name }}</h5>
        <p class="card-text text-secondary">{{ $product->description }}</p>

        <p class="fw-bold">M.R.P <small class="text-danger text-decoration-line-through">{{ $product->mrp }}</small>
        </p>
        <p class="fw-bold">Selling Price <small class="text-success">{{ $product->price }}</small></p>
    </div>

</div>




@endsection

<style>

</style>