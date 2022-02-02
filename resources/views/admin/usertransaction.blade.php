@extends('layouts.app')

@section('content')

    <div class="container" style="padding-top: 7rem; min-height: 100vh">
        <h1 class="text-center mb-5">History Transaction of "{{ $user->name }}"</h1>
        @forelse ($transactions as $transaction)
            <div class="p-3 w-100 bg-white border border-dark rounded-lg mb-4">
                <div class="text-right">
                    <p>Date: {{ $transaction->date }}</p>
                </div>

                <?php $total = 0; ?>
                @foreach ($details as $detail)
                    @if ($detail['transaction_id'] == $transaction->id)
                        <?php $total += $detail['product_price'] * $detail['quantity']; ?>
                        <div class="row w-100">
                            <div class="col-3">
                                <h6>{{ $detail['product_name'] }}</h6>
                            </div>
                            <div class="col-3">
                                <h6>Quantity: {{ $detail['quantity'] }}</h6>
                            </div>
                            <div class="col-3">
                                <h6>$ {{ $detail['product_price'] }}</h6>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="text-right">
                    <p>Total: $ {{ $total }}</p>
                </div>
            </div>
            @empty
            <h3 class="text-center">No transaction records for user {{ $user->name }}</h3>
        @endforelse
    </div>

@endsection
