<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Add Product</title>
  </head>
  <body>

    <div class="container my-5">
        <h1>Add Product</h1>
        <form action="{{ route('one_to_many_submit') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" class="form-control mb-3" />
            <input type="text" name="price" placeholder="Price" class="form-control mb-3" />
            <button class="btn btn-success">Add</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
