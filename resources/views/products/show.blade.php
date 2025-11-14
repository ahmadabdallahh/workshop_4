<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>
    <style>
        .product-card {
            max-width: 400px;
            margin: 2rem auto;
            padding: 1.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            font-family: Arial, Helvetica, sans-serif;
        }

        .product-title {
            font-size: 1.5rem;
            color: #1f2937;
            margin-bottom: 1rem;
            text-align: center;
        }

        .product-field {
            margin: 0.5rem 0;
            color: #374151;
        }

        .product-field strong {
            color: #111827;
        }
    </style>
</head>

<body>


    <div class="product-card">
        <h2 class="product-title">Product Content</h2>

        <p class="product-field"><strong>Name:</strong> {{ $productItem['name'] }}</p>
        <p class="product-field"><strong>Description:</strong> {{ $productItem['description'] }}</p>
        <p class="product-field"><strong>Price:</strong> ${{ number_format($productItem['price'], 2) }}</p>
        <p class="product-field"><strong>Quantity:</strong> {{ $productItem['quantity'] }}</p>
    </div>

</body>

</html>
