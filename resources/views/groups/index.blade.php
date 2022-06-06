@extends('layouts.app')
@section('groups')
    @if(count($groups)==0)
        <div class="form-row align-items-center" align="center">
            <p>No hay ningun grupo creado.</p>
            <a class="btn btn-secondary" href="{{route('groups.create')}}">Crear grupo</a>
        </div>
    @else
        @foreach($groups as $group)
            
        @endforeach
    @endif
@endsection