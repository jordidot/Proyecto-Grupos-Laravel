@extends('layouts.app')
@section('groups')
<div class="container mt-4">
    <div class="container py-3 rounded-top  bg-dark">
        <h3 class="text-white px-2">{{__('web.groups_gestion')}}</h3>
    </div>
    <div class="container h-50 shadow py-3 rounded">
        @if(count($groups)== 0)
        <p class="px-2">{{__('web.nothing')}}</p>
        <div class="row">
            <div class="col-6">
                <a href="{{route('groups.create')}}" class="btn btn-success">{{__('web.create_button')}}</a>
            </div>

        </div>
        @else
        <a href="{{route('groups.create')}}" class="btn btn-success mb-2">{{__('web.create_group')}}</a>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">{{__('web.title_general')}}</th>
                    <th scope="col">{{__('web.description_general')}}</th>
                    <th scope="col"></th>
                    <th scope="col">{{__('web.actions_general')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groups as $group)
                <tr>
                    <td>{{$group->title}}</td>
                    <td>{{$group->description}}</td>
                    <td><img style="width:100px;height:100px;" src="{{asset($group->image_group)}}" alt="Imagen grupo"></td>
                    <td>
                        <form action="{{route('groups.edit',['group' => $group->id])}}" method="PUT">
                            <a href="{{route('groups.edit',['group' => $group->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </form>
                        {!!Form::open(['method'=>'DELETE', 'url'=>'/groups/'.$group->id])!!}
                            <input class="btn btn-outline-primary" type="submit" value="{{__('web.eliminate')}}">
                        {!!Form::close()!!}
                        
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection