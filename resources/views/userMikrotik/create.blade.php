@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post" action="{{route('usermikrotiks.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="host" class="col-md-4 col-form-label text-md-right">{{ __('Nombre host') }}</label>
                            <div class="col-md-6">
                                <input id="host" type="text" class="form-control @error('host') is-invalid @enderror" name="host" value="{{ old('host') }}" required autocomplete="host" autofocus>

                                @error('host')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             <div class="form-group row">
                            <label for="user_host" class="col-md-4 col-form-label text-md-right">{{ __('usuario host') }}</label>

                            <div class="col-md-6">
                                <input id="user_host" type="text" class="form-control @error('user_host') is-invalid @enderror" name="user_host" value="{{ old('user_host') }}" required autocomplete="user_host" autofocus>

                                @error('user_host')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
