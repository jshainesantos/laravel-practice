<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="bg-secondary">
<div class="container create-product mt-5 pt-5">

    @if (Session::has('success'))
        <div>
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif

    <div class="card p-4 shadow bg-light">

        <div class="back-button">
            <div class="d-flex float-end">
                <a href="{{ route('products.create') }}" class="btn btn-outline-dark">Store a new product</a>
            </div>
        </div>

        <div class="container">
            <h1 class="text-center mb-5 mt-1">List of products 📦</h1>
                <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products->isNotEmpty())
                        @foreach ($products as  $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if ( $product->image != "")
                                <img width="70" src="{{ asset('uploads/products/' . $product->image)}}" alt="">
                                @endif    
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>PHP {{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                            <td>
                                <a href="" class="btn material-icons text-secondary">edit</a>
                                <a href="" class="btn material-icons text-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            <hr>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
