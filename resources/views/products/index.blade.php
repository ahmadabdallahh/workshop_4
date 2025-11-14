<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    {{-- NOTE: Show Page --}}


    <div class="container mt-4">
        <a href="{{ route('create') }}" class="btn btn-outline-primary mb-3">Add New Product</a>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>${{ number_format($product['price'], 2) }}</td>
                            <td>{{ $product['created_at'] ? \Carbon\Carbon::parse($product['created_at'])->format('d/m/Y H:i') : '-' }}</td>
                            <td>{{ $product['updated_at'] ? \Carbon\Carbon::parse($product['updated_at'])->format('d/m/Y H:i') : '-' }}</td>
                            <td>
                                <a href="{{ route('show' , $product["id"])   }}" class="btn btn-sm btn-info me-1">Show</a>

                                <a href="{{ route('edit', $product['id']) }}"
                                    class="btn btn-sm btn-warning me-1">Update</a>

                                <form action="{{ route('destroy', $product['id']) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
