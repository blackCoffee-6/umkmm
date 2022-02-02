@extends('layouts.app')

@section('content')

    <?php
    use App\Cart;
    use App\Wishlist;
    ?>

    <div style="min-height: 100vh" class="container">
        <div class="form-row" style="padding-top: 7rem">
            <div class="col-md-5">
                <img class="img img-fluid rounded-lg shadow-sm" src="{{ asset("/assets/$product->image") }}" alt="">
            </div>
            <div class="col-md-7">
                <h1 style="font-weight: 700">{{ $product->name }}</h1>
                <p class="w-50 my-3">{{ $product->description }}</p>
                <h4 class="my-3" style="font-weight: 600">$ {{ $product->price }}</h4>
                <div class="form-row w-50">
                    @guest
                        <div class="col-9">
                            <a href="{{ route('login') }}" class="btn btn-dark btn-block">Buy</a>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('login') }}" class="btn btn-light btn-outline-danger btn-block"><i
                                    class="bi bi-suit-heart"></i></a>
                        </div>
                    @else
                        <?php
                        $carts = Cart::where('user_id', Auth::user()->id)->get();
                        $wishlists = Wishlist::where('user_id', Auth::user()->id)->get();
                        $checkcart = 'false';
                        $checkwishlist = 'false';
                        ?>
                        @foreach ($carts as $cart)
                            @if ($cart->product_id == $product->id)
                                <?php $checkcart = 'true'; ?>
                            @endif
                        @endforeach
                        @foreach ($wishlists as $wishlist)
                            @if ($wishlist->product_id == $product->id)
                                <?php $checkwishlist = 'true'; ?>
                            @endif
                        @endforeach
                        <div class="col-9">
                            <form action="/add-cart/{{ $product->id }}" method="post">
                                @csrf
                                @if ($checkcart == 'true')
                                    <button type="submit" class="btn btn-dark btn-block" disabled>Already in Cart</button>
                                @else
                                    <button type="submit" class="btn btn-dark btn-block">Buy</button>
                                @endif
                            </form>
                        </div>
                        <div class="col-3">
                            @if ($checkwishlist == 'true')
                                <form action="/wishlist-status/remove/{{ $product->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-light btn-outline-danger btn-block"><i
                                            class="bi bi-suit-heart-fill"></i></button>
                                </form>
                            @else
                                <form action="/wishlist-status/add/{{ $product->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-light btn-outline-danger btn-block"><i
                                            class="bi bi-suit-heart"></i></button>
                                </form>
                            @endif
                        </div>
                    @endguest
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
