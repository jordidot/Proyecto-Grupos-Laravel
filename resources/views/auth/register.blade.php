@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
<<<<<<< HEAD
            <div class="card shadow">
                <div class="card-header bg-primary p-3 text-white fw-medium fs-4">{{ __('Register') }}</div>
=======
            <div class="card">
                <div class="card-header">{{ __('web.register') }}</div>
>>>>>>> main

                <div class="card-body py-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

<<<<<<< HEAD
                        <div class="form-group row mb-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
=======
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('web.user_name') }}:</label>
>>>>>>> main

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
=======
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('web.user') }}</label>
>>>>>>> main

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
=======
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('web.password') }}</label>
>>>>>>> main

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group row mb-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Selecione un rol:</label>
=======
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('web.rol')}}</label>
>>>>>>> main

                            <div class="col-md-6">
                                <select class="selectpicker form-control" name="rol">
                                    <option selected value="1"></option>
                                    <option value="0">{{__('web.title_groups_singular')}}</option>
                                  </select>
                                  
                                  
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
<<<<<<< HEAD
                                <button type="submit" class="btn btn-outline-primary w-100">
                                    {{ __('Register') }}
=======
                                <button type="submit" class="btn btn-primary">
                                    {{__('web.register') }}
>>>>>>> main
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
