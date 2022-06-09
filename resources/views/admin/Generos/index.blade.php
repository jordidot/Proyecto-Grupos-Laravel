

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
    
                        @if (count($generos) != 0)
                        
                        <div class="mt-1 mb-2">
                            <a class="btn btn-success px-5 " href="{{route('generos.create')}}">Crear Genero</a>
                        </div>

                        <table class="table table-striped text-center">
                            <thead>
                              <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($generos as $genero)
                                  <tr>
                                    <td >
                                        <button class="btn text-white" style="background: {{$genero->color}} !important;">{{$genero->name}}</button>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center flex-wrap">
                                           <div class="me-3">
                                            <a href="{{route('generos.edit', ['genero' => $genero -> id ])}}" class="btn btn-outline-warning">Editar</a>
                                           </div>
                                        
                                            <div>
                                                {!!Form::open(['method'=>'DELETE', 'url'=>'/generos/'.$genero -> id])!!}
                                            <input class="btn btn-outline-danger" type="submit" value="{{__('web.eliminate')}}">
                                          {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                    </td>
                                  </tr>
                    
                              @endforeach
                              
                             
                            </tbody>
                          </table>
                            @else
                                    <div class="container w-100 ">
                                        <div class="alert bg-danger shadow text-white text-center fw-bold  m-auto px-3 mt-3" role="alert">
                                            No se encuentra ningun dato disponible
                                        </div>
    
                                        <div class="mt-5">
                                            <a class="btn btn-success px-5  d-block m-auto" href="{{route('generos.create')}}">Crear Genero</a>
                                        </div>
                                    </div>
                                    
                        @endif
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection