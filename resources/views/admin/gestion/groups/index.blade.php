@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2">{{__('web.edit_profile_title')}}</h3>
                </div>

                <div class="card-body">
                    
                    @if (count($userGroup) > 0)
                    @foreach ($userGroup as $grupos)
                        {{ $grupos->name}}
                        {{ $grupos-> cityName}}
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