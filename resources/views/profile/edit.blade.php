@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 align="center" class="mt-2">{{__('web.edit_profile_title')}}</h3>
                </div>

                <div class="card-body">
                @foreach($users as $user)
                @if($user->id == Auth::User()->id)
                {!!Form::model($user,['url'=>'/profiles/'.Auth::User()->id, 'method'=>'PUT'])!!}
                    <table align="right">
                        <tr>
                            <td><label for="actualpassword">{{__('web.actual_password_profile')}}</label></td>
                            <td>{!!Form::password('actualpassword',null,[])!!}</td>
                        </tr>
                        <tr>
                            <td><label for="newpassword">{{__('web.repeat_password_profile')}}</label></td>
                            <td>{!!Form::password('newpassword',null,[])!!}</td>
                        </tr>
                        <tr>
                                <td><label for="submit">{{__('web.modificate_title')}}</label></td>
                                <td><input name="submit" type="submit" value="{{__('web.modificate_button')}}"></td>
                            </tr>
                    </table>
                {!!Form::close()!!}
                @endif

                @if($user->id == Auth::User()->id)
                {!!Form::model($user,['url'=>'/profiles/'.Auth::User()->id, 'method'=>'PUT'])!!}
                        <table align="left">
                            <tr>
                                <td><label for="name">{{__('web.user_profile')}}</label></td>
                                <td>{!!Form::text('name',$user->name,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="first_name">{{__('web.first_name_profile')}}</label></td>
                                <td>{!!Form::text('first_name',$user->first_name,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="last_name">{{__('web.last_name_profile')}}</label></td>
                                <td>{!!Form::text('last_name',$user->last_name,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="city">{{__('web.city_profile')}}</label></td>
                                <td>{!!Form::text('city',$user->city,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="email">{{__('web.email_profile')}}</label></td>
                                <td>{!!Form::text('email',$user->email,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="rol">{{__('web.rol')}}</label></td>
                                <td>{!!Form::text('rol',$user->rol,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="image_user">{{__('web.image_user_profile')}}</label></td>
                                <td>{!!Form::file('image_user',null,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="submit">{{__('web.modificate_title')}}</label></td>
                                <td><input name="submit" type="submit" value="{{__('web.modificate_button')}}"></td>
                            </tr>
                        </table>
                    {!!Form::close()!!}
                @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection