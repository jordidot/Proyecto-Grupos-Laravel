@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark">
                    <h3 class="mt-2 text-white">Info grupo</h3>
                </div>

                <div class="card-body">

                    <div class="alert alert-danger d-flex align-items-center bg-danger w-50 m-auto text-center" role="alert">
                        <div class="text-white text-center">
                            No tienes ningun grupo
                        </div>
                      </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection