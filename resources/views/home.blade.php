@extends('layouts.app')

@section('content')
    <style>
        .background-top {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 15px;
        }

        .flexbox {
            display: flex;
            height: 300px;
        }

        .img-exc {
            opacity: 1;
            display: block;
            max-width: 500px;
            max-height: 500px;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            height: 50%;
            background-repeat: no-repeat;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .centered {
            position: absolute;
            top: 120%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>

    <div class="w-100 background-top" style="background-image: url({{ asset('background/background1.jpg') }})">
        <div class="container py-5">
            {{-- Title --}}
            <h4 style="font-weight: 400" class="text-center pt-5">With an outstanding style, only for you</h4>
            <h1 style="font-weight: 900" class="display-4 text-center">Exclusively designed for you</h1>

            {{-- Header --}}
            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/header_1.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/header_2.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/headers_4.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container py-5" style="margin-top: 9%">
        {{-- Best Deals --}}
        <h1 class="h3 text-center">Best Deals</h1>
        <div class="container mb-5">
            <div class="form-row">
                @foreach ($products as $item)
                    <div class="col-md-3">
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none">
                            <div class="w-100 rounded-lg"
                                style="min-height: 25rem; background: white;  display: flex; justify-content: center; align-items: center;">
                                <img style="" class="img img-fluid p-2 rounded-lg"
                                    src="{{ asset("assets/$item->image") }}" alt="">
                            </div>
                            <div class="my-2 p-1">
                                <h5 class="text-dark" style="font-weight: bold">{{ $item->name }}</h5>
                                <h6 style="color: rgb(255, 111, 0)">$ {{ $item->price }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-2">
                <a href="/products" class="btn btn-dark" style="width: 200px">View All</a>
            </div>
        </div>

        {{-- Be Exclusive --}}
        <div class="row">
            <div class="col-md-6 p-5 rounded-left" style="background-color: rgb(255, 255, 255)">
                <h3 class="text-muted mt-5" style="font-weight: bold">Exclusive Collection 2021</h3>
                <h1 style="font-weight: bold">Be Exclusive</h1>
                <h6>
                    The best everyday option in a Super Saver range within a reasonable price.
                    It is our responsibility to keep you 100 percent stylish.
                    Be smart & trendy with us
                </h6>
                <div class="row">
                    <div class="col-md-6">
                        <a href="/exclusive" class="btn btn-dark my-5 btn-block">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 rounded-right"
                style="background-image: url({{ asset('assets/header_2.jpeg') }}); background-size:cover; background-repeat: no-repeat; min-height:30rem;">
            </div>
        </div>

        {{-- Check Out New Arrival --}}
        <h1 class="h3 text-center mt-5">Check Out New Arrival</h1>
        <div class="container mt-5 mb-5">
            <div class="form-row">
                @foreach ($products as $item)
                    <div class="col-md-3">
                        <a href="/detail/{{ $item->slug }}">
                            <div class="w-100 rounded-lg"
                                style="background: white; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url({{ asset("assets/$item->image") }}); background-repeat: no-repeat; background-size: cover; min-height:30rem;">
                                <div class="p-3 w-100" style="position: absolute; bottom: 0px;">
                                    <h5 class="text-white" style="font-weight: bold">{{ $item->name }}</h5>
                                    <p class="text-truncate" style="color: rgb(184, 183, 183)">{{ $item->description }}
                                    </p>
                                    <h6 style="color: rgb(255, 126, 28)">$ {{ $item->price }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Shop By Category --}}
        <h1 class="h4 text-center mt-2">Shop By Category</h1>
        <ul class="nav nav_pills nav-pills  mb-3 d-flex justify-content-center mt-2" id="pills-tab" role="tablist">
            <?php $count1 = 0; ?>
            @foreach ($categories as $category)
                <?php $count1++; ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link @if ($count1 == 1) active @endif" id="pills-{{ $category->id }}shop-tab"
                        data-toggle="pill" href="#pills-{{ $category->id }}shop" role="tab"
                        aria-controls="pills-{{ $category->id }}shop" aria-selected="true">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <?php $count2 = 0; ?>
            @foreach ($categories as $category)
                <?php $count2++; ?>
                <div class="tab-pane fade @if ($count2 == 1) show active @endif" id="pills-{{ $category->id }}shop" role="tabpanel"
                    aria-labelledby="pills-{{ $category->id }}shop-tab">
                    <div class="form-row">
                        @foreach ($items as $item)
                            <?php $image = $item->product->image; ?>
                            @if ($item->category_id == $category->id)
                                <div class="col-md-3">
                                    <a class="text-decoration-none" href="/detail/{{ $item->product->slug }}">
                                        <div class="w-100 rounded-lg"
                                            style="min-height: 25rem; background: white;  display: flex; justify-content: center; align-items: center;">
                                            <img style="" class="img img-fluid p-2 rounded-lg"
                                                src="{{ asset("assets/$image") }}" alt="{{ $image }}">
                                        </div>
                                        <div class="my-2 p-1">
                                            <h5 class="text-dark" style="font-weight: bold">
                                                {{ $item->product->name }}</h5>
                                            <h6 style="color: rgb(255, 111, 0)">$ {{ $item->product->price }}</h6>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3 text-center">
            <a href="/products" class="btn btn-dark" style="width: 200px">View All</a>
        </div>

        {{-- Best Seller --}}
        <h1 class="h4 text-center mt-5">Best Seller</h1>
        <div class="container my-5">
            <div class="form-row">
                @foreach ($products as $item)
                    <div class="col-md-3">
                        <a class="text-decoration-none" href="/detail/{{ $item->slug }}">
                            <div class="w-100 rounded-lg"
                                style="min-height: 25rem; background: white;  display: flex; justify-content: center; align-items: center;">
                                <img style="" class="img img-fluid p-2 rounded-lg"
                                    src="{{ asset("assets/$item->image") }}" alt="">
                            </div>
                            <div class="my-2 p-1">
                                <h5 class="text-dark" style="font-weight: bold">{{ $item->name }}</h5>
                                <h6 style="color: rgb(255, 111, 0)">$ {{ $item->price }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Store --}}

        <div class="w-100"
            style="display: flex; justify-content: center; align-items: center; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url(assets/jakarta2.jpg); background-repeat: no-repeat; background-size: cover; min-height:30rem;">
            <div class="text-white">
                <p>Visit our outlets in</p>
                <h1>Jakarta</h1>
                <a href="" class="text-decoration-none text-white">See address -></a>
            </div>
        </div>
    </div>
    {{-- Footer --}}
    <footer class="pt-5 mt-3 w-100" style="background:white">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="d-block mb-2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                        <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                        <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                        <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                        <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                        <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                    </svg>
                    <small class="d-block mb-3 text-muted">&copy; 2020</small>
                </div> --}}
                <div class="col-md-3">
                    <h5>Company Info</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">About Us</a></li>
                        <li><a class="text-muted" href="#">Affliate</a></li>
                        <li><a class="text-muted" href="#">Fashion Blogger</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Help & Support</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Shipping Info</a></li>
                        <li><a class="text-muted" href="#">Refunds</a></li>
                        <li><a class="text-muted" href="#">How to Order</a></li>
                        <li><a class="text-muted" href="#">How to Track</a></li>
                        <li><a class="text-muted" href="#">Size Guides</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Customer Care</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Contact Us</a></li>
                        <li><a class="text-muted" href="#">Payment Methods</a></li>
                        <li><a class="text-muted" href="#">Bonus Point</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p style="font-weight: bold">Signup For The Latest News</p>
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Email"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">-></button>
                            </div>
                        </div>
                    </form>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#"><i class="mr-2 bi bi-envelope"></i>basics@gmail.com</a>
                        </li>
                        <li><a class="text-muted" href="#"><i class="mr-2 bi bi-telephone"></i>+6281231234123</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="" style="font-size: 1.65rem" class="mx-3 text-decoration-none text-dark"><i
                        class="bi bi-facebook"></i></a>
                <a href="" style="font-size: 1.65rem" class="mx-3 text-decoration-none text-dark"><i
                        class="bi bi-instagram"></i></a>
                <a href="" style="font-size: 1.65rem" class="mx-3 text-decoration-none text-dark"><i
                        class="bi bi-youtube"></i></a>
                <a href="" style="font-size: 1.65rem" class="mx-3 text-decoration-none text-dark"><i
                        class="bi bi-twitter"></i></a>
            </div>
            <hr>
            <p class="text-center">Al Right Reserved.</p>
        </div>
    </footer>

@endsection
