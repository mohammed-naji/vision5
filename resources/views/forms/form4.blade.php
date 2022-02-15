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

        <h1>Review Form + Upload File</h1>

        @include('forms.error')

        <form action="{{ route('form4') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}"  />
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{ old('phone') }}" />
            </div>

            <div class="mb-3">
                <label>Your CV</label>
                <input type="file" name="cv" class="form-control" />
            </div>

            <button class="btn btn-info btn-lg">Send</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
