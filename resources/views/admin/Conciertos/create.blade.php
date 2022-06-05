@extends('layouts.app')


@section('content')
    <div class="container-lg container-sm  mt-4">
        <div class="container py-3 rounded-top  bg-dark">
            <h3 class="text-white px-2">Crear Conciertos</h3>
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
            
            <form action="{{route('conciertos.store')}}" method="POST" enctype="multipart/form-data" class="px-2">
                @csrf
                
                <div class="mb-4">
                    <label class="form-label">Titulo del concierto</label>
                    <input type="text" name="titleConcierto_es" placeholder="Titulo castellano" class="form-control">
                </div>
                <div class="mb-4">
                    <label class="form-label">Titulo del concierto(Catalan)</label>
                    <input type="text" name="titleConcierto_ca" placeholder="Titulo catalan" class="form-control">
                </div>
                <div class="mb-4">
                    <label class="form-label">Titulo del concierto(Ingles)</label>
                    <input type="text" name="titleConcierto_en" placeholder="Titulo ingles" class="form-control">
                </div>

                <div class="mb-4">
                    <label class="form-label">Descripcion del concierto</label>
                    <textarea name="descconcierto_es" class="form-control bg-light text-primary fw-600" rows="5"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Descripcion del concierto(Catalan)</label>
                    <textarea name="descconcierto_ca" class="form-control" rows="5"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Descripcion del concierto(Ingles)</label>
                    <textarea name="descconcierto_en" class="form-control" rows="5"></textarea>
                </div>

                
                <div class="mb-4">
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

                <div class="mb-4">
                    <label class="form-label">Fecha</label>
                    <input type="date" name="fechaConcierto" placeholder="Titulo" class="form-control">
                </div>

                <div class="mb-4">
                    <label class="form-label">Horario</label>
                    <input type="time" name="horarioConcierto" placeholder="Titulo" class="form-control">
                </div>

                <div class="mb-5">
                    <label class="form-label">Imagen del concierto</label>
                    <input type="file" name="imagenConcierto" placeholder="Titulo" class="form-control">
                </div>


                 <div class="mb-4">
                    <h3 class="mb-4">Seleccionar grupos inivitados:</h3>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Default checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


               <div class="mb-5">
                    <button type="submit" class="btn btn-outline-success px-3">Subir concierto</button>
               </div>

               

               



            </form>

            
         


        </div>
    </div>
   
@endsection