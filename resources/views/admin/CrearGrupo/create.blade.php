@extends('layouts.app')

@section('content')


<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark">
                    <h3 class="mt-2 text-white">Crear grupo</h3>
                </div>

                <div class="card-body">
                    
                    <form action="{{route('groups.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label class="form-label">First name</label>
                            <input type="text" class="form-control shadow-sm" name="firstName" placeholder="Josef">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input type="text" class="form-control shadow-sm" name="lastName" placeholder="Smith">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ciudades</label>
                            <select class="form-control" name="selectCity">

                               @if (count($municiopios) > 0)
                                   
                                @foreach ($municiopios as $municipio)
                                    @if ($municipio->id === 1)
                                        <option selected value="{{$municipio->id}}">{{$municipio->name}}</option>
                                    @else
                                    <option value="{{$municipio->id}}">{{$municipio->name}}</option>
                                    @endif
                                @endforeach
                                   
                               @endif
                                                          
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Imagen de perfil</label>
                            <input class="form-control" type="file" name="imgProfile">
                        </div>

                        <div class="mb-3 mt-5">
                            <button type="submit" class="d-block w-100  mr-auto btn btn-dark fs-1">Crear Grupo</button>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection