<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lavarl 11</title>
    @vite(['resources/sass/app.scss','resources/js/app.js']);
    <style>
        .hero {
            background-image: url('{{ asset('images/carcover.jpeg') }}');
            background-size: cover;
            background-position: center;
            color: black;
            padding: 100px 0;
        }
    </style>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-primary" href="#"  >Rent A Car</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="btn btn-primary"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                     class="btn btn-primary"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                          class="btn btn-primary"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero text-center">
        <div class="container text-primary">
            <h1>Rent Your Dream Car</h1>
        </div>
    </div>

    <!-- Car Listings Section -->
        <h2 class="text-center text-primary">Available Cars</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Car Model 1</h5>
                        <p class="card-text">$50/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/img2.jpg')}}" class="card-img-top" alt="Car 2">
                    <div class="card-body">
                        <h5 class="card-title">Car Model 2</h5>
                        <p class="card-text">$70/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/img3.jpeg')}}" class="card-img-top" alt="Car 3">
                    <div class="card-body">
                        <h5 class="card-title">Car Model 3</h5>
                        <p class="card-text">$90/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/img4.jpg')}}" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Car Model 4</h5>
                        <p class="card-text">$50/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/img5.jpg')}}" class="card-img-top" alt="Car 2">
                    <div class="card-body">
                        <h5 class="card-title">Car Model 6</h5>
                        <p class="card-text">$70/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/img6.jpeg')}}" class="card-img-top" alt="Car 3">
                    <div class="card-body">
                        <h5 class="card-title">Car Model 6</h5>
                        <p class="card-text">$90/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <div class="container">
            <p class="mb-0">© 2024 Rent A Car. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>