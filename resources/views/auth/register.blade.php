@extends('layout')
@section('title')Registration @endsection

@section('main_content')
<div class="container mb-5 my-container">
    <h1 class="title">Registration</h1>   
    <div class="form-registration">
        <form method="POST" action="{{ route('register') }}" class="bordered col-5">

            @csrf

            <div class="row mb-3">
                <div class="col">
                    <label for="firstname" class="form-label">{{ __('Firstname') }}</label>                               
                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="col">
                    <label for="lastname" class="form-label">{{ __('Lastname') }}</label>
                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name">
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-outline mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row mb-3">
                <div class="col form-outline mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col form-outline mb-3">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control  @error('birthday') is-invalid @enderror" id="birthday" name="birthday" required autocomplete="birthday" value="{{(new DateTime())->format('Y-m-d')}}">
                    @error('birthday')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col form-outline mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input class="form-control  @error('phone') is-invalid @enderror" id="phone" data-mask="00/00/0000" name="phone" required autocomplete="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <label for="country" class="form-label">Country</label>
            <select class="form-select mb-3  @error('country') is-invalid @enderror" aria-label="Default select example" id="country" name="country" required autocomplete="country" value="{{ old('country') }}">            
                @foreach(App\Utils\Utils::getCountries() as $country)
                    <option value="{{$country}}">{{$country}}</option>
                @endforeach
            </select>
            @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="role" class="form-label">Role</label>
            <select class="form-select mb-3  @error('role') is-invalid @enderror" aria-label="Default select example" id="role" name="role" required autocomplete="role" value="{{ old('role') }}">          
                    <option value="listener" selected>Listener</option>
                    <option value="announcer">Announcer</option>
            </select>
            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                

            <div class="col">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
