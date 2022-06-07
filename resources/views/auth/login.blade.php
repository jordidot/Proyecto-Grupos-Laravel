@extends('layouts.login')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4 content_login" style="text-align:center;margin:100px 0 0 0;">
            <div class="mb-4">
                <a class="btn btn-outline-primary" href="{{ url('/') }}">{{__('web.title_home')}}</a>
            </div>
            <div class="mb-4">
                <a href="{{route('login')}}" class="btn btn-primary">{{__('web.login')}}</a>
                @if (Route::has('register'))
                <a href="{{route('register')}}" class="btn btn-primary">
                    {{__('web.register')}}
                </a>
                @endif
            </div>
            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label" for="email" style="color:white;">{{ __('web.user') }}</label>
                    </div>
                    <div class="mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="text-align:center;">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label" style="color:white;">{{ __('web.password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="text-align:center;">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <div class="mb-4">
                        <label for="remember" class="form-label btn btn-outline-primary">{{ __('web.record_me') }}</label>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">{{ __('web.login') }}</button>
                    </div>
                    <div class="mb-4">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('web.forgot_your_passwoord') }}</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <div class="image col-8">
        </div>
    </div>
</div>
@endsection