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
  <div class="card p-4 shadow bg-light">
    <h1>Store a product 📦</h1>
    <hr>
    <form action="{{ route('products.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="mb-3">
          <label for="" class="form-label h5">Name</label>
          <input value="{{ old('name') }}" type="text" class="@error('name') is-invalid @enderror form-control" placeholder="Name" name="name">
          @error('name')
            <p class="invalid-feedback" >{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label h5">Price</label>
          <input value="{{ old('price') }}" class="@error('price') is-invalid @enderror form-control" placeholder="Price" name="price">
          @error('price')
            <p class="invalid-feedback" >{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label h5">Description</label>
          <textarea class="form-control" rows="3" placeholder="Description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
          <label for="" class="form-label h5">Image</label>
          <input type="file" class="form-control" name="image">
        </div>
        <button class="btn btn-primary h5">Submit</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
