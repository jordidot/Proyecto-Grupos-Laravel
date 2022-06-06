@extends('layouts.app')
@section('groups')
<div class="container mt-4">
    <div class="container py-3 rounded-top  bg-dark">
        <h3 class="text-white px-2">{{__('web.groups_gestion')}}</h3>
    </div>
    <div class="container h-50 shadow py-3 rounded">
        @if(count($groups)!= 0)
        <a href="{{route('conciertos.create')}}" class="btn btn-success mb-2">Crear Concierto</a>
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
                        <a href="" class=" py-1 btn btn-primary"><i class="fas fa-eye"></i></a>

                        <form action="{{route('groups.edit',['group' => $group->id])}}" method="PUT">
                            <a href="{{route('groups.edit',['group' => $group->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        @else
        <p class="px-2">{{__('web.nothing')}}</p>
        <div class="row">
            <div class="col-6">
                <a href="{{route('conciertos.create')}}" class="btn btn-success">{{__('web.create_button')}}</a>
            </div>

        </div>
        @endif
    </div>
</div>
@endsection