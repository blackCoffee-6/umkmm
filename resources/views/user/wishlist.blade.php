@extends('layouts.app')

@section('content')

    <div style="padding-top: 7rem; min-height: 100vh" class="container">
        <h2 class="text-center">Wishlist</h2>
        @forelse ($wishlists as $wishlist)
            <div class="p-3 w-100 my-3 bg-white border border-dark rounded-lg">
                <div class="row">
                    <div class="col-3">
                        <?php $image = $wishlist->product->image; ?>
                        <img class="img img-fluid" src="{{ asset("assets/$image") }}" alt="">
                    </div>
                    <div class="col-8">
                        <h3 class="text-dark">{{ $wishlist->product->name }}</h3>
                        <h4 class="text-dark">Quantity: {{ $wishlist->quantity }}</h4>
                        <h4 class="text-dark">$ {{ $wishlist->product->price }}</h4>
                    </div>
                </div>
                <div class="text-right">
                    <div class="btn-group">
                        <a class="btn btn-dark" href="/delete-wishlist/{{ $wishlist->id }}">Delete</a>
                    </div>
                </div>
            </div>
        @empty
            <h1 class="text-center display-4 my-3">Your Wishlist is Empty</h1>
        @endforelse

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
