@extends('layouts.app')

@section('content')

    <div style="padding-top: 7rem; min-height: 100vh" class="container">
        <h3 class="text-center">SHOP FOR EXCLUSIVE</h3>
        <div class="row my-5">
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
                        <a href="/" class="btn btn-dark my-5 btn-block">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 rounded-right"
                style="background-image: url({{ asset('assets/header_2.jpeg') }}); background-size:cover; background-repeat: no-repeat; min-height:30rem;">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6 p-5 rounded-left" style="background-color: rgb(255, 255, 255)">
                <h3 class="text-muted mt-5" style="font-weight: bold">Exclusive Collection 2021</h3>
                <h1 style="font-weight: bold">Summer Collection</h1>
                <h6>
                    The best everyday option in a Super Saver range within a reasonable price.
                    It is our responsibility to keep you 100 percent stylish.
                    Be smart & trendy with us
                </h6>
                <div class="row">
                    <div class="col-md-6">
                        <a href="/" class="btn btn-dark my-5 btn-block">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 rounded-right"
                style="background-image: url({{ asset('assets/headers_4.jpg') }}); background-size:cover; background-repeat: no-repeat; min-height:30rem;">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6 p-5 rounded-left" style="background-color: rgb(255, 255, 255)">
                <h3 class="text-muted mt-5" style="font-weight: bold">Exclusive Collection 2021</h3>
                <h1 style="font-weight: bold">Rainy Collection</h1>
                <h6>
                    The best everyday option in a Super Saver range within a reasonable price.
                    It is our responsibility to keep you 100 percent stylish.
                    Be smart & trendy with us
                </h6>
                <div class="row">
                    <div class="col-md-6">
                        <a href="/" class="btn btn-dark my-5 btn-block">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 rounded-right"
                style="background-image: url({{ asset('assets/header_1.jpeg') }}); background-size:cover; background-repeat: no-repeat; min-height:30rem;">
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="pt-5 mt-3 w-100" style="background:white">
        <div class="container">
            <div class="row">

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
