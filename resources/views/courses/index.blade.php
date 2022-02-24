<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        table td,
        table tr {
            vertical-align: middle
        }
    </style>

    <title>Courses</title>
  </head>
  <body>

    @if (session('msg'))
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show">
        {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1>Our Courses</h1>
                <a href="{{ route('courses.create') }}" class="btn btn-primary">Add New</a>
            </div>

            <form class="d-flex align-items-center" action="" method="get" id="filter_form">
                Items Per page
                @if (request()->page)
                <input type="hidden" name="page" value="{{ request()->page }}" />
                @endif

                <select id="items_count" name="items_count" class="mx-2">
                    <option {{ request()->items_count == 5 ? 'selected' : '' }}>5</option>
                    <option {{ request()->items_count == 10 ? 'selected' : '' }}>10</option>
                    <option {{ request()->items_count == 15 ? 'selected' : '' }} >15</option>
                    <option {{ request()->items_count == 20 ? 'selected' : '' }}>20</option>
                    <option {{ request()->items_count == 25 ? 'selected' : '' }}>25</option>
                    <option {{ request()->items_count == 50 ? 'selected' : '' }}>50</option>
                </select>
                {{-- <button class="btn btn-info btn-sm">Filter</button> --}}
            </form>
        </div>

        <form action="" method="get" class="my-4">
            <div class="row">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name" value="{{ request()->name }}" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="Date" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-dark">Search</button>
                </div>

            </div>

        </form>

        <table class="table table-bordered table-striped">
            <tr class="table-info">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>

            @forelse ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->price }}$</td>
                <td><img width="80" src="{{ asset('uploads/'.$course->image) }}" alt=""></td>
                <td>{{ $course->created_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-edit"></i> </a>
                    {{-- <a class="btn btn-danger btn-sm" href="{{ route('courses.destroy', $course->id) }}"> <i class="fas fa-trash"></i> </a> --}}

                    <form class="d-inline" action="{{ route('courses.destroy', $course->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('هل انت متاكد اخوي ؟!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No Data Found</td>
            </tr>
            @endforelse

            {{-- @if ($courses->count() > 0)
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->price }}$</td>
                    <td><img width="80" src="{{ $course->image }}" alt=""></td>
                    <td>{{ $course->created_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">No Data Found</td>
            </tr>
            @endif --}}

        </table>

        {{ $courses->appends($_GET)->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $('#items_count').change(function() {
            $('#filter_form').submit();
        });

        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);
    </script>

  </body>
</html>
