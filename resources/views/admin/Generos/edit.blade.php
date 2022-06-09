

    @extends('layouts.app')

    @section('content')

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark">
                        <h3 class="mt-2 text-white">Editar Genero</h3>
                    </div>
    
                    <div class="card-body">
                        <form action="{{route('generos.update',['genero' => $id ])}}" method="POST"  class="px-2 py-3">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label class="form-label">Nombre del Genero</label>
                                <input required type="text" value="{{$genero->name}}" name="titlegenero"  class="form-control">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Selecione un color</label>
                                <input type="color" name="colorgenero" value="{{$genero->color}}"  class="form-control" required>
                            </div>

                            <div class="mb-2">
                                    <button type="submit" class="btn btn-outline-primary px-5">Subir concierto</button>
                            </div>
                        </form>                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection