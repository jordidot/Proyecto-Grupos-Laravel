@extends('layouts.app')
@section('content')
<div class="container-lg container-sm  mt-4 ">
    <div class="container py-3 rounded-top  bg-dark">
        <h3 class="text-white px-2">Editar Concierto</h3>
    </div>
    <div class="container h-50 shadow py-3 rounded shadow">
        @foreach($groups as $group)
        {!!Form::model($group,['url'=>'/groups/'.$group->id, 'method'=>'POST','enctype'=>'multipart/form-data'])!!}
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" for="image_group">{{__('web.image_group')}}</label>
            <input type="file" class="form-control" name="image_group">
        </div>
        <div class="mb-3">
            <input name="submit" type="submit" class="btn btn-outline-primary" value="{{__('web.modificate_button')}}">
        </div>
        <div class="mb-3">
            <div class="image_profile_view">
                    <img src="{{asset($group->image_group)}}" class="rounded-circle shadow-lg" width="200px" height="200px">
                </div>
        </div>

        {!!Form::close()!!}

        {!!Form::model($group,['url'=>'/groups/'.$group->id, 'method'=>'PUT'])!!}

        <div class="mb-3">
            <label class="form-label" for="title">{{__('web.name_group')}}</label>
            {!!Form::text('tile',$group->title,['class'=>'form-control'])!!}
        </div>
        @foreach($groupes as $group)
        <div class="mb-3">
            <label class="form-label" for="descriptiones">{{__('web.description_group_es')}}</label>
            {!!Form::text('descriptiones',$group->description ,['class'=>'form-control'])!!}
        </div>
        @endforeach
        @foreach($groupca as $group)
        <div class="mb-3">
            <label class="form-label" for="descriptionca">{{__('web.description_group_ca')}}</label>
            {!!Form::text('descriptionca',$group->description ,['class'=>'form-control'])!!}
        </div>
        @endforeach
        @foreach($groupen as $group)
        <div class="mb-3">
            <label class="form-label" for="descriptionen">{{__('web.description_group_en')}}</label>
            {!!Form::text('descriptionen',$group->description ,['class'=>'form-control'])!!}
        </div>
        @endforeach
        <div class="mb-3">
            <input name="submit" type="submit" class="btn btn-primary" value="{{__('web.modificate_button')}}">
        </div>


        {!!Form::close()!!}
        
        @endforeach

    </div>
</div>
@endsection