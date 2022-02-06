<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>Hello, world!</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('site1home') }}">Site 1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site1home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site1about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site1services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site1contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placehold.it/1600x600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1600x600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1600x600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <table class="table table-bordered table-striped table-hover">
                    <tr class="table-dark">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Job</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Mohammed</td>
                        <td>moh@gmail.com</td>
                        <td>0592418889</td>
                        <td>Male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </section>

        <section class="about py-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>{{ $about_title }}</h2>
                        <p>{{ $about_body }}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://placekitten.com/500/500" alt="">
                    </div>
                </div>

            </div>
        </section>

        <section class="video my-5 text-center">
            <div class="container">
                <iframe width="700" height="515" src="https://www.youtube.com/embed/xtltkjLXUN8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <footer>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-5">
                    <form action="">
                        <input class="form-control mb-3" type="text" placeholder="Name">
                        <input class="form-control mb-3" type="text" placeholder="Subject">
                        <textarea class="form-control mb-3" rows="5" placeholder="Message"></textarea>
                        <div class="text-end"><button class="btn btn-dark w-25">Send</button></div>
                    </form>
                </div>
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54422.5085978233!2d34.4424448!3d31.512985599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd819df36dd1df%3A0x4756ba0a2b9e1754!2sPALESTINE!5e0!3m2!1sen!2s!4v1643847746765!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="copright bg-dark py-4 text-center text-white">
            <p class="m-0">All Copyright reserved to <a href="#">Mohammed Naji</a> <i class="far fa-copyright"></i> {{ date('Y') }} </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
