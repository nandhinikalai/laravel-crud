@extends('layouts.app')
@section('main')

<div class="d-flex justify-content-between align-items-center mb-3 header-container">
    <h5 class="text-primary"><i class="bi bi-journal-richtext"></i> Product Details</h5>
    <a href="products/create" class="btn btn-primary custom-btn"><i class="bi bi-plus-circle"></i> Add Product</a>
</div>

<div class="col-md-12 table-responsive mt-3 table-container">
    <table class="table table-hover table-bordered custom-table">
        <thead class="bg-light">
            <tr>
                <th>SI NO</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>MRP</th>
                <th>Selling Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            @php
            $index = ($products->currentPage() - 1) * $products->perPage() + $loop->iteration;
            @endphp
            <tr class="table-row">
                <td>{{ $index }}</td>
                <td>
                    <img src="products/{{ $product->image }}" class="product-image" alt="product">
                </td>
                <td><a href="products/show/{{$product->id}}/" class="text-decoration-none">{{ $product->name }}</a></td>
                <td>Rs.{{ $product->mrp }}</td>
                <td>Rs.{{ $product->price }}</td>
                <td>
                    <a href="products/edit/{{$product->id}}/" class="btn btn-sm btn-dark custom-action-btn"><i class="bi bi-pencil-square"></i></a>
                    <a href="products/delete/{{$product->id}}/" onclick="return confirm('Are You Sure You Want to Delete this Product?')" class="btn btn-sm btn-danger custom-action-btn"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination-wrapper pagination-animated">
        {{ $products->links() }}
    </div>
</div>

@endsection
