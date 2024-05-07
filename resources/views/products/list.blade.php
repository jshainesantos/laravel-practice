<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create a Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container create-product mt-5 pt-5">

    <div>
        @if (Session::has('success'))
        <div>
            <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
    </div>

  <div class="card p-4 shadow bg-light">

    <div class="back-button">
        <div class="d-flex float-end">
            <a href="{{ route('products.create') }}" class="btn btn-outline-dark">Store a new product</a>
        </div>
    </div>

    <h1>List of products 📦</h1>
    <hr>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
