@extends('layouts.app')

@section('content')
<style>
    .header {
        margin-top: 10px;
        text-align: center;
        background: url('assets/jakarta2.jpg');
        color: white;
        font-size: 30px;
    }
</style>

    <div class="container py-5">
        <div class="w-100"
            style="display: flex; justify-content: center; align-items: center; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url(assets/jakarta2.jpg); background-repeat: no-repeat; background-size: cover; min-height:30rem;">
        </div>

        <div class="content mt-4">
            <h1>About Basics</h1>
            <p>Basics Group is a family of brands and businesses, making it possible for customers around the world to express themselves through fashion and design, and to choose a more sustainable lifestyle. We create value for people and society in general by delivering our customer offering and by developing with a focus on sustainable and profitable growth.</p>
        </div>
        
        <div class="content mt-4">
            <h1>Location</h1>
            <p>Jl. Raya Kb. Jeruk No.27, RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
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
