@extends('layout')
@section('title')Login @endsection

@section('main_content')
<div class="container mb-5 my-container">
    <h1 class="title">Login</h1>    
    <div class="form-login">
        <form method="POST" action="{{ route('login') }}" class="bordered col-4">
            @csrf

            <div class="row mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>
            <div class="text-center">
                <p>Not a member? <a href="{{route('register')}}">Register</a></p>    
            </div>

                <div class="col text-center">  
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
        </form>
        
    </div>
</div>
@endsection
