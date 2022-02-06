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

        <form action="{{ route('form1') }}" method="post">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            @csrf

            <input type="text" class="form-control" name="name" >

            <button class="btn btn-success w-25 mt-4">Send</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
