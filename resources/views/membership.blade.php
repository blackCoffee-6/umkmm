@extends('layouts.app')

@section('content')

    <div style="padding-top: 7rem" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="p-3" style="background: white;">
                    <h1 class="p-2 text-white text-center w-100" style="background: black">SILVER MEMBER</h1>
                    <p style="font-weight: bold" class="text-center">1. Free cost travel once a month</p>
                    <p style="font-weight: bold" class="text-center">2. Discount every month</p>
                    <p style="font-weight: bold" class="text-center">3. Silver Badge</p>
                    <p style="font-weight: bold" class="text-center">4. Our CS Priority</p>
                    <p style="font-weight: bold" class="text-center">5. Discount on Product</p>
                    <a class="text-decoration-none" href="/" data-toggle="modal" data-target="#modal">
                        <h1 class="p-2 text-white text-center w-100" style="background: black">Buy 1000 Product or 20.00$
                        </h1>
                    </a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3" style="background: white;">
                    <h1 class="p-2 text-white text-center w-100" style="background: black">GOLD MEMBER</h1>
                    <p style="font-weight: bold" class="text-center">1. Free cost travel twice a month</p>
                    <p style="font-weight: bold" class="text-center">2. Discount every month and you get 2 discounts</p>
                    <p style="font-weight: bold" class="text-center">3. Gold Badge</p>
                    <p style="font-weight: bold" class="text-center">4. Our most CS Priority</p>
                    <p style="font-weight: bold" class="text-center">5. Discount on every Product</p>
                    <a class="text-decoration-none" href="/" data-toggle="modal" data-target="#modal">
                        <h1 class="p-2 text-white text-center w-100" style="background: black">Buy 10000 Product or 300.00$
                        </h1>
                    </a>

                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="p-3" style="background: white;">
                <h1 class="p-2 text-white text-center w-100" style="background: black">PLATINUM MEMBER</h1>
                <p style="font-weight: bold" class="text-center">1. Free cost travel five times a month</p>
                <p style="font-weight: bold" class="text-center">2. Discount every month and you get discounts coupon every event and you get 3 discount clothes on every clothes</p>
                <p style="font-weight: bold" class="text-center">3. Platinum Badge</p>
                <p style="font-weight: bold" class="text-center">4. Our very most CS Priority</p>
                <p style="font-weight: bold" class="text-center">5. Discount on every Product</p>
                <p style="font-weight: bold" class="text-center">6. Cashback on every Product</p>
                <p style="font-weight: bold" class="text-center">7. Talk with developer</p>
                <p style="font-weight: bold" class="text-center">8. Recommended clothes only for you </p>
                <a class="text-decoration-none" href="/" data-toggle="modal" data-target="#modal">
                    <h1 class="p-2 text-white text-center w-100" style="background: black">Buy 30000 Product or 5000.00$</h1>
                </a>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
                <img src="/assets/success.png" style="max-height: 120px; max-width: 120px">
                <p class="h6 mt-4">Congratulation! Ready to become our member?</p>
                <button class="btn btn-success rounded mt-3 mx-2" class="close" data-dismiss="modal" aria-label="Close">Purchase</button>
            </div>
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
