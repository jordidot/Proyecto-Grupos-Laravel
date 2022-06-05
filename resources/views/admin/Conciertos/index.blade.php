@extends('layouts.app')


@section('content')
    <div class="container mt-4">
        <div class="container py-3 rounded-top  bg-dark">
            <h3 class="text-white px-2">Gestion de Conciertos</h3>
        </div>
        <div class="container h-50 shadow py-3 rounded">



          {{-- {{print_r($conciertos)}} --}}
          @if (count($conciertos) > 0)
             {{-- Table --}}
             <a href="{{route('conciertos.create')}}" class="btn btn-success mb-2">Crear Concierto</a>
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Horario</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Invitados</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($conciertos as $concierto)
                    <tr>
                      <td>{{$concierto->title}}</td>
                      <td>{{$concierto->schedule}}</td>
                      <td>{{$concierto->date}}</td>
                      <td>Thornton</td>
                      <td>
                          {{-- <a href="" class=" py-1 btn btn-primary"><i class="fas fa-eye"></i></a> --}}
                          
                            <form action="{{route('conciertos.edit',['concierto' => $concierto->id])}}" method="PUT">
                              <a href="{{route('conciertos.edit',['concierto' => $concierto->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            </form>
      
                      </td>
                    </tr>
                @endforeach
               
              </tbody>
            </table>
          @else
          <p class="px-2">No hay ningun concierto</p>
          <div class="row">
            <div class="col-6">
              <a href="" class="btn btn-success">Crear Concierto</a>
            </div>

          </div>
          @endif
        </div>
    </div>
   
@endsection