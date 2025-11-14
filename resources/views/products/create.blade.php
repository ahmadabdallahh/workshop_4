@extends('layouts.app')
@section('content')
    <form method="post" class="border p-4 rounded bg-light" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" id="quantity" name="quantity" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" rows="4" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Product</button>
        <a href="{{ route('index') }}" class="btn btn-outline-success">Back To Home</a>
    </form>
@endsection
