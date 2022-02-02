@extends('layouts.app')

@section('content')

    <div class="container" style="padding-top: 7rem; min-height: 100vh">

        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid rounded-circle" src="{{ asset('assets/gray.png') }}" alt="">
                <h4 class="text-center my-3">{{ $user->name }}</h4>

                <h6 class="text-center p-2 bg-dark text-white rounded-lg">Classic Member</h6>
                <div class="row">
                    <div class="col-6">
                        <h6 class="text-center p-2 bg-dark text-white rounded-lg">Follower 7</h6>
                    </div>
                    <div class="col-6">
                        <h6 class="text-center p-2 bg-dark text-white rounded-lg">Following 51</h6>
                    </div>
                </div>

                <div class="w-100 my-5">
                    <a href="/transactions" class="btn btn-block btn-dark">History Transaction</a>
                    <a href="/wishlist" class="btn btn-block btn-dark">Wishlist</a>
                    <a href="/cart" class="btn btn-block btn-dark">Cart</a>
                </div>
            </div>
            <div class="col-md-9 px-5">
                <form action="/edit-profile" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input placeholder="Name" id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"
                            required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input placeholder="email" id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $user->email }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="" cols="30"
                            rows="5" required autocomplete="address" autofocus>{{ $user->address }}</textarea>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input placeholder="phone" id="phone" type="number"
                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                            value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark btn-block">Edit</button>

                </form>
            </div>
        </div>

    </div>

@endsection
