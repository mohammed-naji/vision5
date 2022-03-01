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
        <h1>Welcome <span class="text-danger"> {{ $std->name }} </span>, Register your subjects</h1>

        <form action="{{ route('register_subjects_submit') }}" method="POST">
            @csrf

            @foreach ($subjects as $subject)
                <label><input type="checkbox" name="subjects[]" {{ in_array($subject->id , $std_sub) ? 'checked' : '' }} value="{{ $subject->id }}" /> {{ $subject->name }}</label> <br>
            @endforeach

            <br>
            <button class="btn btn-info">Register</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
