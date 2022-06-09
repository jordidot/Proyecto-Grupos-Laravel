

    @extends('layouts.app')

    @section('content')

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark">
                        <h3 class="mt-2 text-white">Gestion de generos</h3>
                    </div>
    
                    <div class="card-body">
    
                        
                        <form action="{{route('generos.store')}}" method="POST"  class="px-2 py-3">
                            @csrf
                            
                            <div class="mb-4">
                                <label class="form-label">Nombre del Genero</label>
                                <input required type="text" name="titlegenero" placeholder="Titulo genero" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Selecione un color</label>
                                <input type="color" name="colorgenero"  class="form-control" required>
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