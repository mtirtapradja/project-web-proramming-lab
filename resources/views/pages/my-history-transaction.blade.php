@extends('layouts.main')

@section('container')
    <h1>My History Page</h1>
    @foreach ($transactions as $transaction)
        <h1>
            transaction_id = {{ $transaction->id }}
        </h1>
        
        @foreach ($transactionDetails as $transactionDetail)
        <br>
                @if($transaction->id === $transactionDetail->transaction_id)
                    pro_name = {{ $transactionDetail->product->name }} - {{ $transactionDetail->quantity }}
                @endif
            
        @endforeach
        <br>
        <br>
        <br>

    @endforeach
@endsection
