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
                        <table align="center">
                            <tr>
                                <td><label for="name">{{__('web.user_profile')}}</label></td>
                                <td>{!!Form::text('name',$user->name,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="actualpassword">{{__('web.actual_password_profile')}}</label></td>
                                <td>{!!Form::password('actualpassword',null,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="newpassword">{{__('web.repeat_password_profile')}}</label></td>
                                <td>{!!Form::password('newpassword',null,[])!!}</td>
                            </tr>
                            <tr>
                                <td><label for="first_name">{{__('web.first_name_profile')}}</label></td>
                                <td>{!!Form::text('first_name',$user->first_name,[])!!}</td>
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