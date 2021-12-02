@extends('layouts.main')

@section('container')
    <h1>My History Transaction</h1>

    <div id="accordion">
        @foreach ($transactions as $transaction)
            <div class="card">
                <div class="card card-header" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $transaction->id }}">
                    <div class="d-flex justify-content-between" id="header_content">
                        {{ $transaction->created_at }}
                        <i class="icon bi bi-chevron-down"></i>
                    </div>
                </div>
                @foreach ($transactionDetails as $transactionDetail)
                    @if ($transaction->id === $transactionDetail->transaction_id)
                        <div class="collapse" id="collapse{{ $transaction->id }}">
                            <div class="card m-3">
                                <div class="row g-0 p-3">
                                    <div class="col-md-3 align-self-center">
                                        <img src={{ asset('storage/' . $transactionDetail->product->image_url) }}
                                            class="cimg-fluid rounded-start" alt="Image" style="height: 12em;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body ms-4">
                                            <h5 class="card-title">{{ $transactionDetail->product->name }}
                                                <small class="text-muted">
                                                    (IDR. {{ number_format($transactionDetail->product->price) }})
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
                                                    {{ number_format($transactionDetail->quantity * $transactionDetail->product->price) }}
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="me-5 my-2 text-end">
                    <p class="fs-6 fw-bold mb-1"> Total Price IDR
                        {{ number_format($transaction->sub_total_per_transaction) }}
                </div>
            </div>
        @endforeach
    </div>

    <script>
        /* For make the icon animation */
        const headers = document.getElementsByClassName('card card-header');
        const icons = document.getElementsByClassName('icon');

        for (let i = 0; i < headers.length; i++) {
            headers[i].addEventListener('click', () => {
                if (icons[i].classList.contains('bi-chevron-down')) {
                    icons[i].classList.remove('bi-chevron-down');
                    icons[i].classList.add('bi-chevron-up');
                } else if (icons[i].classList.contains('bi-chevron-up')) {
                    icons[i].classList.remove('bi-chevron-up');
                    icons[i].classList.add('bi-chevron-down');
                }
            });
        }
    </script>
@endsection
