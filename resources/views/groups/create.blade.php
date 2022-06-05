<style>
    .form_create_group{
        text-align:center;
        font-size:20px;
        border:1px solid black;
        box-shadow: 3px 3px gray;
    }
    .form_create_group label{
        margin:20px;
        width:400px; 
        height:50px;
        
    }
    .form_create_group input{
        margin:10px;
        width:400px; 
        height:50px;
        
    }
</style>
@extends('layouts.app')
@section('create_group')
    {!!Form::open(['url'=>'/groups'])!!}
    <table align="center" class="form_create_group">
        <tr>
            <td></td>
            <th >{!!Form::label('title', 'Nombre del grupo',[])!!}</th>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td >{!!Form::text('title', null,[])!!}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <th >{!!Form::label('image_group', 'Imagen del grupo',[])!!}</th>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td ><input type="file" name="image_group"></td>
            <td></td>
        </tr>
        <tr>
            <th>{!!Form::label('descriptiones', 'Descripción del grupo(Castellano)',[])!!}</th>
            <th>{!!Form::label('descriptionca', 'Descripción del grupo(Catalan)',[])!!}</th>
            <th>{!!Form::label('descriptionen', 'Descripción del grupo(Ingles)',[])!!}</th>
        </tr>
        <tr>
            <td>{!!Form::textarea('descriptiones',null,['placeholder'=>'Aquí la descripción...'])!!}</td>
            <td>{!!Form::textarea('descriptionca',null,['placeholder'=>'Aquí la descripció...'])!!}</td>
            <td>{!!Form::textarea('descriptionen',null,['placeholder'=>'Here the description...'])!!}</td>
        </tr>
        <tr>
            <td></td>
            <td>{!!Form::submit('Crear grupo', ['class'=>'btn btn-secondary'])!!}</td>
            <td></td>
        </tr>
    </table>
    {!!Form::close()!!}

@endsection