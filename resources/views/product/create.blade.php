@extends('layouts.aap')

@section('content')

<div class="container mt-5">
    <h1>product</h1>

<form action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- @if(isset($product))
        @method('PUT')
    @endif --}}

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $product->title ?? '') }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="sub_title" class="form-label">Sub Title</label>
        <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" name="sub_title" value="{{ old('sub_title', $product->sub_title ?? '') }}">
        @error('sub_title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="sku_number" class="form-label">SKU Number</label>
        <input type="text" class="form-control @error('sku_number') is-invalid @enderror" id="sku_number" name="sku_number" value="{{ old('sku_number', $product->sku_number ?? '') }}">
        @error('sku_number')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="short_description" class="form-label">Short Description</label>
        <textarea class="form-control textarea @error('short_description') is-invalid @enderror" id="short_description" name="short_description">{{ old('short_description', $product->short_description ?? '') }}</textarea>
        @error('short_description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="long_description" class="form-label">Long Description</label>
        <textarea class="form-control textarea @error('long_description') is-invalid @enderror" id="long_description" name="long_description">{{ old('long_description', $product->long_description ?? '') }}</textarea>
        @error('long_description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="qty" class="form-label">Quantity</label>
        <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{ old('qty', $product->qty ?? '') }}">
        @error('qty')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price ?? '') }}">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category_name" class="form-label">Category Name</label>
        <select class="form-control @error('category_name') is-invalid @enderror" id="category_name" name="category_name">
            <option value="">Select Category</option>
            <option value="battery" {{ old('category_name', $product->category_name ?? '') == 'battery' ? 'selected' : '' }}>Battery</option>
            <option value="electric scooter" {{ old('category_name', $product->category_name ?? '') == 'electric scooter' ? 'selected' : '' }}>Electric Scooter</option>
        </select>
        @error('category_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    @for ($i = 1; $i <= 6; $i++)
        <div class="mb-3">
            <label for="f_{{ $i }}" class="form-label">Feature {{ $i }}</label>
            <input type="text" class="form-control @error('f_{{ $i }}') is-invalid @enderror" id="f_{{ $i }}" name="f_{{ $i }}" value="{{ old("f_$i", $product["f_$i"] ?? '') }}">
            @error("f_$i")
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    @endfor

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>

        <!-- Input field for uploading an image -->
        <input type="file"
               class="form-control @error('image') is-invalid @enderror"
               id="image"
               name="image">

        <!-- Validation error message -->
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <!-- Display existing image if available -->
        @if (!empty($product) && $product->image)
            <div class="mt-3">
                <img src="{{ asset('storage/'.$product->image) }}"
                     alt="{{ $product->title ?? 'Product Image' }}"
                     width="100"
                     class="img-thumbnail">
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="product_images" class="form-label">Product Images</label>
        <input type="file" id="product_images" name="product_images[]" class="form-control @error('product_images.*') is-invalid @enderror" multiple onchange="previewImages(event)">

        <!-- Preview selected product_images -->
        <div id="product_images-preview" class="mt-3 d-flex flex-wrap"></div>

        <!-- Show existing product_images if available -->
        @if(isset($product) && $product->product_images)
            <div class="mt-3 d-flex flex-wrap">
                @foreach(explode(',', $product->product_images) as $product_image)
                    <div class="me-2 mb-2">
                        <img src="{{ asset('storage/' . $product_image) }}" class="img-thumbnail" style="width: 100px; height: 100px;">
                    </div>
                @endforeach
            </div>
        @endif

        @error('product_images.*')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <script>
    function previewImages(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('product_images-preview');
        previewContainer.innerHTML = ''; // Clear existing previews

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail');
                img.style.width = '100px';
                img.style.height = '100px';
                img.style.marginRight = '10px';
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }
    </script>


    <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Create' }}</button>
</form>
</div>


@endsection
