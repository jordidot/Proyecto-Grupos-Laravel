@extends('layouts.app')
@section('content')
<div class="container-lg container-sm  mt-4 ">
    <div class="container py-3 rounded-top  bg-dark">
        <h3 class="text-white px-2">{{__('web.edit_profile_title')}}</h3>
    </div>
    <div class="container h-50 shadow py-3 rounded shadow">
        @foreach($users as $user)
        @if($user->id == Auth::User()->id)

        {!!Form::model($user,['url'=>'/profiles/'.Auth::User()->id, 'method'=>'PATCH'])!!}
        <div class="mb-3">
            <label class="form-label" for="actualpassword">{{__('web.actual_password_profile')}}</label>
            {!!Form::password('actualpassword',null,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label class="form-label" for="newpassword">{{__('web.repeat_password_profile')}}</label>
            {!!Form::password('newpassword',null,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <input name="submit" type="submit" class="btn btn-primary" value="{{__('web.modificate_button')}}">
        </div>
        {!!Form::close()!!}

        {!!Form::model($user,['url'=>'/profiles/'.Auth::User()->id, 'method'=>'POST','enctype'=>'multipart/form-data'])!!}
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" for="image_user">{{__('web.image_user_profile')}}</label>
            <input type="file" class="form-control" name="image_user">
        </div>
        <div class="mb-3">
            <input name="submit" type="submit" class="btn btn-outline-primary" value="{{__('web.modificate_button')}}">
        </div>
        <div class="mb-3">
            <div class="image_profile_view">
                    <img src="{{asset($user->image_user)}}" class="rounded-circle shadow-lg" width="200px" height="200px">
                </div>
        </div>

        {!!Form::close()!!}

        {!!Form::model($user,['url'=>'/profiles/'.Auth::User()->id, 'method'=>'PUT'])!!}

        <div class="mb-3">
            <label class="form-label" for="name">{{__('web.user_profile')}}</label>
            {!!Form::text('name',$user->name,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label class="form-label" for="first_name">{{__('web.first_name_profile')}}</label>
            {!!Form::text('first_name',$user->first_name,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label class="form-label" for="last_name">{{__('web.last_name_profile')}}</label>
            {!!Form::text('last_name',$user->last_name,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label class="form-label" for="city">{{__('web.city_profile')}}</label>
            {!!Form::text('city',$user->city,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">{{__('web.email_profile')}}</label>
            {!!Form::text('email',$user->email,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label class="form-label" for="rol">{{__('web.rol')}}</label>
            {!!Form::text('rol',$user->rol,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            
            <input name="submit" type="submit" class="btn btn-primary" value="{{__('web.modificate_button')}}">
        </div>


        {!!Form::close()!!}
        @endif
        @endforeach
    </div>
</div>
@endsection