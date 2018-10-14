@extends('layouts.authLayout')
@section('additional-styles')
<style>
    body {
        background-image: url(/images/bege.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .card.primdev-card {
        border: none;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0px 0px 4px -1px;
    }
    .form-control.primdev-form {
        padding: 0 20px;
        box-shadow: 0 0 1px 0;
        border-radius: 22px;
        border: none;
    }
    .form-control.primdev-form:focus {
        outline: none;
        border: none;
        box-shadow: 0 0 3px 0 #80bdff;
    }
    .btn.primdev-button {
        padding: 6px 35px;
        border-radius: 22px;
    }
    .form-check-input.primdev-checkbox {
        display: none;
        
    }
    .form-check-label {
        padding-left: 25px;
    }
    .form-check-label.primdev-checkbox::before {
        content: "";
        display: inline-block;
        height: 20px;
        width: 20px;
        position: absolute;
        border-radius: 5px;
        border: 1px solid #333;
        left: 0;

    }
    .form-check-input.primdev-checkbox:checked + .form-check-label.primdev-checkbox::before {
        background-image: url('/images/check.svg');
        background-repeat: no-repeat;
        background-size: cover;
        /* background-color: #80bdff; */
    }
</style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 px-lg-5">
            <div class="card primdev-card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-12 col-form-label text-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-12">
                                <input placeholder="type your email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} primdev-form" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-12 col-form-label text-left">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input placeholder="type your password"  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} primdev-form" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-check pl-0">
                                    <input class="form-check-input primdev-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label primdev-checkbox btn" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn bg-primary text-white primdev-button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
    </div>
</div>
@endsection
