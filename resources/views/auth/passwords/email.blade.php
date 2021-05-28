@extends('layouts.app')

@section('content')

<br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style = "border:none">
                <div class="card-header bg-white"><h2 class = "text-dark" style = "color:#e21e13; text-align:center; padding-left: 10%;">Reset password</h2></div>

                <div class="card-body" style = "border:none">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0" style = "text-align:center">
                            <div class="col-md-6 offset-md-4 " style = "text-align:center">
                                <button type="submit " class="btn btn-primary bg-dark" style = "border:none;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br></br>
@endsection
