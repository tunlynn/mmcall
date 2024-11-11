@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Your Information') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (!$phoneaccount)
                            {{"Something went wrong while fetching your data. Please contact our support "}} <a href="https://m.me/443192478884918" target="_blank">@MMCall</a>
                            
                        @else
                            <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm"><span
                                    class="text-secondary">Name:</span> &nbsp; {{ auth()->user()->name }}</li>
                            <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                    class="text-secondary">Account ID:</span> &nbsp; {{ $phoneaccount->username }}</li>
                            <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                    class="text-secondary">Password:</span> &nbsp; {{ $phoneaccount->password }}
                            </li>
                            <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                    class="text-secondary">Account Domain:</span> &nbsp; {{ env('MBILLING_DOMAIN') }}</li>
                            <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                    class="text-secondary">Balance:</span> &nbsp; {{ sprintf('%.1f', $credit) }} minute{{ $credit >= 2 ? 's' : '' }}</li>
                        @endif
                    </div>
                </div>
                <div class="mt-4">
                    <a href={{ url('/how-to-use') }}>How To Use</a>
                </div>
                

                <div class="mt-4">
                    <h2>Refill Your Credit Balance</h2>
                    <p>If you would like to refill your credit balance, please contact us via Facebook Messenger:</p>
                    <p>
                        <strong>Messenger Account Link:</strong> 
                        <a href="https://m.me/443192478884918" target="_blank">@MMCall</a>
                    </p>
                    <p>Our team will assist you with the refilling process.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
