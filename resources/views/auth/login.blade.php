@extends('layouts.app')

@section('content')

<br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style = "border:none">   
                <div class="card-header bg-white"><h2 class = "text-dark" style = "color:#e21e13; text-align:center; padding-left: 20%;">Are you user?</h2></div>
                
                <div class="card-body bg-white" style = "border:none">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style = "text-align:center">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-6 offset-md-4 " style = "text-align:center">
                                <button type="submit" class="btn btn-primary bg-dark site-btn" style = "border:none; text-align:center; width:100%">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <br />
                                    <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
