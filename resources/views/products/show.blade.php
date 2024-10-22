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
/* Custom card styling */
.card {
    border: 1px solid #ddd;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    overflow: hidden;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

/* Image styling with animation */
.card img {
    width: 100%;
    height: auto;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    opacity: 0;
    animation: fadeIn 1s forwards;
}

/* Body text styling */
.card-body {
    padding: 20px;
    background-color: #f9f9f9;
    animation: slideIn 0.5s ease-in-out;
}

/* Title and price animations */
.card-title, .fw-bold {
    opacity: 0;
    animation: fadeInUp 0.7s forwards;
}

.text-secondary {
    color: #6c757d !important;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* MRP and Selling Price styling */
.fw-bold small.text-danger {
    font-size: 1.2rem;
}

.fw-bold small.text-success {
    font-size: 1.3rem;
    color: #28a745;
}

</style>