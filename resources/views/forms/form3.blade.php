<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Form3</title>
</head>

<body>

    <div class="container my-5">

        {{-- @dump($errors->all()) --}}

        <section style="height: 2000px"></section>

        <section id="form-wrapper">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('form3') }}" method="POST">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Name" />
                    @error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email" />
                    @error('email')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>

                @csrf

                <button class="btn btn-dark w-25">Send</button>
            </form>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        setTimeout(function() {
            $('.alert').fadeOut(1000);
        }, 3000);

        @if ($errors->any())
            $('body, html').animate({
                scrollTop: $('#form-wrapper').offset().top
            }, 1000)
        @endif

    </script>
</body>

</html>
