@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-1 shadow-sm">
            <div class="card-body text-center p-5">
                <h2 class="mb-4">{{ __('Verify Your Email') }}</h2>

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="text-muted">
                    {{ __('Please check your email for a verification link to complete the registration.') }}
                    <br><br>{{ __('Didn’t receive the email?') }}
                </p>

                <form method="POST" action="{{ route('verification.resend') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('Request another link') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
