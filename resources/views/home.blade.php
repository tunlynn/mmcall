@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (!$phoneaccount)
                    {{ 'Something went wrong while fetching your data. Please contact our support ' }} <a
                        href="https://m.me/443192478884918" target="_blank">@MMCall</a>
                @else
                    <h1 class="mb-4">Welcome {{ auth()->user()->name }},</h1>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h4>{{ __('Phone Information') }}</h4>

                                </div>

                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <li class="list-group-item border-0 ps-0 text-dark fw-semibold pb-1 text-sm">
                                            <span class="text-secondary">Account ID:</span> &nbsp;
                                            {{ $phoneaccount->username }}
                                        </li>
                                        <li class="list-group-item border-0 ps-0 text-dark fw-semibold pb-1 text-sm">
                                            <span class="text-secondary">Password:</span> &nbsp;
                                            {{ $phoneaccount->password }}
                                        </li>
                                        <li class="list-group-item border-0 ps-0 text-dark fw-semibold pb-1 text-sm">
                                            <span class="text-secondary">Account Domain:</span> &nbsp;
                                            {{ env('MBILLING_DOMAIN') }}
                                        </li>
                                        {{-- <li class="list-group-item border-0 ps-0 text-dark fw-semibold pb-1 text-sm">
                                            <span class="text-secondary">Balance:</span>
                                            &nbsp;{{ sprintf('%.1f', $credit) }}
                                            minute{{ $credit >= 2 ? 's' : '' }}
                                        </li> --}}
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h4>Remaining Minutes</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="fw-bold py-2">{{ sprintf('%.1f', $credit) }}
                                        minute{{ $credit >= 2 ? 's' : '' }}</h3>


                                    <a class="btn btn-dark" href="https://m.me/443192478884918"
                                        target="_blank">Top Up via Facebook Messenger</a>

                                    <p class="my-0">Our team will assist you with the refilling process.</p>
                                </div>

                            </div>
                        </div>



                    </div>

                    <div>
                        <a class="btn btn-outline-dark" href={{ url('/how-to-use') }}>Check How To Use</a>
                    </div>
                @endif



            </div>
        </div>
    </div>
@endsection
