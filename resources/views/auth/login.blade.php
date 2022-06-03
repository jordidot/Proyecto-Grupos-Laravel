@extends('layouts.login')

@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <button class="btn btn-primary me-1 pe-1 activao">{{__('web.title_home')}}</button>
                </a>
                <a href="{{route('login')}}" class="btn btn-primary activao">
                    {{__('web.login')}}
                </a>
                @if (Route::has('register'))
                    <a href="{{route('register')}}" class="btn btn-primary noactivao">
                        {{__('web.register')}}
                    </a>
                @endif
              </div>
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white;">{{ __('web.user') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      
                      <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white;">{{ __('web.password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-6 offset-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                          </button>

                          @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                      </div>
                  </div>
              </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="{{asset('images/concierto.jpg')}}"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
@endsection
