<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Your Cart</h1>
        @foreach($cartItems as $item)
            <div class="row mb-2">
                <div class="col-md-8">{{ $item->product->name }}</div>
                <div class="col-md-2">{{ $item->quantity }}</div>
                <div class="col-md-2">${{ $item->quantity * $item->product->price }}</div>
            </div>
        @endforeach
        <a href="/checkout" class="btn btn-primary">Proceed to Checkout</a>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
