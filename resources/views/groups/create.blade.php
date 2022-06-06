@extends('layouts.app')
@section('create_group')
<div class="container-lg container-sm  mt-4 ">
    <div class="container py-3 rounded-top  bg-dark">
        <h3 class="text-white px-2">Editar Concierto</h3>
    </div>
    <div class="container h-50 shadow py-3 rounded shadow">
        {!!Form::open(['url'=>'/groups', 'enctype'=>'multipart/form-data'])!!}
        @method('POST')
        <div class="mb-3">
            {!!Form::label('title', 'Nombre del grupo',['class'=>'form-label'])!!}
            {!!Form::text('title', null,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            {!!Form::label('image_group', 'Imagen del grupo',['class'=>'form-label'])!!}
            <input type="file" class="form-control" name="image_group">
        </div>

        <div class="mb-3">
            {!!Form::label('descriptiones', 'Descripción del grupo(Castellano)',['class'=>'form-label'])!!}
            {!!Form::textarea('descriptiones',null,['placeholder'=>'Aquí la descripción...', 'class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            {!!Form::label('descriptionca', 'Descripción del grupo(Catalan)',['class'=>'form-label'])!!}
            {!!Form::textarea('descriptionca',null,['placeholder'=>'Aquí la descripció...', 'class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            {!!Form::label('descriptionen', 'Descripción del grupo(Ingles)',['class'=>'form-label'])!!}
            {!!Form::textarea('descriptionen',null,['placeholder'=>'Here the description...', 'class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            {!!Form::submit('Crear grupo', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
</div>
@endsection