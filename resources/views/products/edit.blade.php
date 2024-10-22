@extends('layouts.app')

@section('main')
    <h5><i class="bi bi-pencil-square"></i>Edit Product</h5>
    <hr>
    <nav class="my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">home</a></li>
            <li class="breadcrumb-item active">Edit Product</a></li>
        </ol>
    </nav>


    <div class="col-md-8">
        <form action="/products/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif" id="name" placeholder="Enter Product Name" value="{{old('name', $product->name)}}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mrp" class="form-label">MRP</label>
                    <input type="text" name="mrp" id="mrp" class="form-control @if($errors->has('mrp')) {{'is-invalid'}} @endif" placeholder="Enter M.R.P" value="{{old('mrp', $product->mrp)}}">
                    @if($errors->has('mrp'))
                    <div class="invalid-feedback">
                        {{$errors->first('mrp')}}
                    </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="price" class="form-label">Selling Price</label>
                    <input type="text" name="price" id="price" class="form-control @if($errors->has('price')) {{'is-invalid'}} @endif" placeholder="Enter Selling Price" value="{{old('price', $product->price)}}">
                    @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{$errors->first('price')}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="describtion" style="resize: none; height: 150px;" class="form-control @if($errors->has('description')) {{'is-invalid'}} @endif" placeholder="Enter Description">{{old('description',  $product->description)}}</textarea>
                    @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{$errors->first('description')}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" class="form-control @if($errors->has('image')) {{'is-invalid'}} @endif" id="image">
                    @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{$errors->first('image')}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save Product</button>
                <button type="reset" class="btn btn-danger">Clear All</button>
          
            </div>
        </form>
    </div>
@endsection

<style>
/* Form Container Styling */
.col-md-8 {
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease-in-out;
}

/* Form Inputs */
.form-control {
    border-radius: 8px;
    padding: 12px;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
}

/* Label Styling */
.form-label {
    font-weight: bold;
    font-size: 1.1rem;
    color: #333;
}

/* Buttons */
.btn {
    font-size: 1.1rem;
    padding: 10px 20px;
    border-radius: 30px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

/* Primary Button (Save Product) */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

/* Danger Button (Clear All) */
.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
    transform: scale(1.05);
}

/* Invalid Feedback Styling */
.invalid-feedback {
    color: #e74c3c;
    font-size: 0.9rem;
}

/* Breadcrumb Styling */
.breadcrumb {
    animation: slideIn 0.8s ease;
    opacity: 0;
    animation-fill-mode: forwards;
}

.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Animations */
@keyframes fadeIn {
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
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .col-md-8 {
        padding: 15px;
    }

    .form-label {
        font-size: 1rem;
    }

    .btn {
        font-size: 1rem;
        padding: 8px 16px;
    }
}

</style>