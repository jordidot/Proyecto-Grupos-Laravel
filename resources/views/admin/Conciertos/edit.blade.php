@extends('layouts.app')

@section('content')
@foreach($concierto as $concert)
<div class="container-lg container-sm  mt-4">
    <div class="container py-3 rounded-top  bg-dark">
        <h3 class="text-white px-2">Editar Concierto</h3>
    </div>
    <div class="container h-50 shadow py-3 rounded">

        @if ($errors->any())
        <div class="alert alert-danger bg-danger px-2">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-white">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        {!!Form::model($concierto,['url'=>'/conciertos/'.$concert->id, 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
        @method('PUT')
            @csrf
            @foreach($concierto as $concert)
            <div class="mb-5">
                <label class="form-label">Imagen del concierto</label>
                <input type="file" name="imagenConcierto" placeholder="Titulo" class="form-control">

                <div class="mt-5">
                    <p>Imagen Actual</p>
                    <img src="{{asset($concert->image)}}" width="200" alt="">
                </div>
            </div>
            <div class="mb-5">
                <input type="submit" class="btn btn-primary" value="{{__('web.modificate_button')}}">
            </div>
            @endforeach
        {!!Form::close()!!}
        {!!Form::model($concierto,['url'=>'/conciertos/'.$concert->id, 'method'=>'PUT'])!!}
            @foreach ($conciertoes as $conciertocastellano)
            <div class="mb-4">
                <label class="form-label">Titulo del concierto(Castellano)</label>
                <input type="text" name="titleConcierto_es" placeholder="Titulo castellano" value="{{$conciertocastellano->title}}" class="form-control">
            </div>

            <div class="mb-4">
                <label class="form-label">Descripcion del concierto(Castellano)</label>
                <textarea name="descconcierto_es" class="form-control bg-light text-primary fw-600" rows="5">{{$conciertocastellano->description}}</textarea>
            </div>
            @endforeach

            @foreach ($concierto_ca as $conciertocatalan)
            <div class="mb-4">
                <label class="form-label">Titulo del concierto(Catalan)</label>
                <input type="text" name="titleConcierto_ca" value="{{$conciertocatalan->title}}" placeholder="Titulo catalan" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label">Descripcion del concierto(Catalan)</label>
                <textarea name="descconcierto_ca" class="form-control" rows="5">{{$conciertocatalan->description}}</textarea>
            </div>
            @endforeach

            @foreach ($concierto_en as $conciertoingles)
            <div class="mb-4">
                <label class="form-label">Titulo del concierto(Ingles)</label>
                <input type="text" name="titleConcierto_en" value="{{$conciertoingles->title}}" placeholder="Titulo ingles" class="form-control">
            </div>

            <div class="mb-4">
                <label class="form-label">Descripcion del concierto(Ingles)</label>
                <textarea name="descconcierto_en" class="form-control" rows="5">{{$conciertoingles->description}}</textarea>
            </div>
            @endforeach

            @foreach ($concierto as $concert)
            <div class="mb-4">
                <label class="form-label">Ciudades</label>
                <select class="form-control" name="selectCity">
                    @if (count($municiopios) > 0)
                    @foreach ($municiopios as $municipio)
                    @if ($municipio->id == $concert->city)
                    <option selected value="{{$municipio->id}}">{{$municipio->name}}</option>
                    @else
                    <option value="{{$municipio->id}}">{{$municipio->name}}</option>
                    @endif
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-4">
                <label class="form-label">Fecha</label>
                <input type="date" name="fechaConcierto" value="{{$concert->date}}" class="form-control">
            </div>

            <div class="mb-4">
                <label class="form-label">Horario</label>
                <input type="time" name="horarioConcierto" value="{{$concert->schedule}}" class="form-control">
            </div>
            <div class="mb-5">
                <input type="submit" class="btn btn-primary"  value="{{__('web.modificate_button')}}" name="modificar">
            </div>
            @endforeach
            {!!Form::close()!!}
    </div>
</div>
@endforeach
@endsection