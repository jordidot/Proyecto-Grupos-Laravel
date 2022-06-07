@extends('layouts.app')


@section('content')
    <div class="container-lg container-sm  mt-4">
        <div class="container py-3 rounded-top  bg-dark">
            <h3 class="text-white px-2">Añadir Comentario</h3>
        </div>
        <div class="container h-50 shadow py-3 rounded">
            
            <form action="{{route('savecomm')}}" method="POST" class="px-2">
                @csrf
                
                <div class="mb-0 ">
                    <input type="text" name="idConcert" value="{{$id}}" class="form-control" hidden>
                </div>
                <div class="mb-4">
                    <label class="form-label">Añadir comentario</label>
                    <textarea name="addComm" class="form-control" rows="5"></textarea>
                </div>

               <div class="mb-5">
                    <button type="submit" class="btn btn-outline-primary px-3">Añadir comentario</button>
               </div>
            </form>
        </div>
    </div>
   
@endsection