<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container my-5">
        <h1>First Form Example</h1>

        <form action="{{ route('form1') }}" method="POST">

            @csrf

            <input class="form-control" placeholder="Name" name="name" />
            <input class="form-control" placeholder="Email" name="email" />
            <input class="form-control" placeholder="Email" name="email1" />
            <input class="form-control" placeholder="Email" name="email2" />
            <input class="form-control" placeholder="Email" name="email3" />
            <input type="radio" name="test" value="test" />

            <button class="btn btn-success mt-3">Send</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
