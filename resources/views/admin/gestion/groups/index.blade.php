@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2">Gestion de grupos</h3>
                </div>

                <div class="card-body">
                    
                    @if (count($users) > 0)
                    @foreach ($users as $user)
                        {{ $user->name}}
                        {{ $user->city}}
                    @endforeach
                        @else
                        No se ha encontrado ningun grupo
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection