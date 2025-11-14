@extends('layouts.app')
@section('content')

    <body>
        <div class="container ">
            <form method="post" class="border p-4 rounded bg-light" action="{{ route('update', $productItem['id']) }}">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" id="name" name="name" class="form-control" required
                        value={{ $productItem['name'] }}>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" required
                        value={{ $productItem['price'] }}>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" id="quantity" name="quantity" step="0.01" class="form-control" required
                        value={{ $productItem['quantity'] }}>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" rows="4" class="form-control">{{ $productItem['description'] }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Product</button>
                <a href="{{ route('index') }}" class="btn btn-outline-success">Back To Home</a>
            </form>
        </div>

    </body>

    </html>
@endsection
