@extends('layouts.app')

@section('content')

    <div class="container" style="min-height: 100vh; padding-top: 5rem;">
        {{-- Shop By Category --}}
        <h1 class=" text-center mb-4">Catalogs</h1>
        <ul class="nav nav_pills nav-pills  mb-3 d-flex justify-content-center mt-2" id="pills-tab" role="tablist">
            <?php $count1 = 0; ?>
            @foreach ($categories as $category)
                <?php $count1++; ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link @if ($count1 == 1) active @endif" id="pills-{{ $category->id }}shop-tab" data-toggle="pill"
                        href="#pills-{{ $category->id }}shop" role="tab" aria-controls="pills-{{ $category->id }}shop"
                        aria-selected="true">{{ $category->name }}</a>
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
                                <div class="col-md-3 mb-3">
                                    <a href="/detail/{{ $item->product->slug }}">
                                        <div class="w-100 rounded-lg"
                                            style="background: white; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url({{ asset("assets/$image") }}); background-repeat: no-repeat; background-size: cover; min-height:30rem;">
                                            <div class="p-3 w-100" style="position: absolute; bottom: 0px;">
                                                <h5 class="text-white" style="font-weight: bold">{{ $item->product->name }}
                                                </h5>
                                                <p class="text-truncate" style="color: rgb(184, 183, 183)">
                                                    {{ $item->product->description }}
                                                </p>
                                                <h6 style="color: rgb(255, 126, 28)">$ {{ $item->product->price }}</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
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
