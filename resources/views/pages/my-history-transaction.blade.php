@extends('layouts.main')

@section('container')
    <h1>My History Transaction</h1>
    
    @foreach ($transactions as $transaction)
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{ $transaction->created_at }}
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            
            @foreach ($transactionDetails as $transactionDetail)
              @if($transaction->id === $transactionDetail->transaction_id)
                  <div class="card-body">
                    <div class="card mb-3" style="width: 100%;">
                      <div class="row g-0 p-3">
                          <div class="col-md-3 align-self-center">
                              {{-- <img src={{ asset('storage/' . $cart->product->image_url) }} class="cimg-fluid rounded-start"
                                  alt="Image" style="height: 12em;"> --}}
                          </div>
                          <div class="col-md-9">
                              <div class="card-body ms-4">
                                  <h5 class="card-title">{{ $transactionDetail->product->name }}
                                    <small class="text-muted">
                                      (IDR. {{ $transactionDetail->product->price }})
                                    </small>
                                  </h5>
                                  <br>
                                  <p class="d-flex justify-content-between">
                                      <small class="text-muted">
                                        x{{ $transactionDetail->quantity }} pcs
                                      </small>
                                  </p>
                                  <p class="d-flex justify-content-end">
                                      <small class="text-muted">
                                          IDR. 
                                      </small>
                                  </p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              @endif
            @endforeach

          </div>         
        </div>
      </div>
    @endforeach

@endsection
