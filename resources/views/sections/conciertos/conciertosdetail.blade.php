@extends('layouts.pageDetalles.conciertotrans')

@section('header')
<header class="container-info-concert" style=" background-image: url(../images/banner-header.jpg);">
    <div class="content-info">
        <div class="horario-ubicacion">
            <h3>23/04/32 - Palau Sant Jordi</h3>
        </div>
        <div class="title-concierto">
            <h2>Entradas para el concierto festival colors</h2>
        </div>
    </div>
</header>
@endsection

@section('content')
{{-- <pre>
    {{print_r($concert)}}
</pre>  --}}

<br>
    
{{-- <div class="cartel-artistas-invitados">
    <div class="title-section">
        <h3>Cartel</h3>
    </div>
    <div class="content-cartel-flex">
        <!-- Item -->
        <div class="card-cartel">
            <div class="card-img">
                <img src="./assets/images/estopa.jpg" alt="">
            </div>
            <div class="card-body">
                <div class="card-title">
                    <h2>Estopa</h2>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="card-cartel">
            <div class="card-img">
                <img src="./assets/images/estopa.jpg" alt="">
            </div>
            <div class="card-body">
                <div class="card-title">
                    <h2>Estopa</h2>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="card-cartel">
            <div class="card-img">
                <img src="./assets/images/estopa.jpg" alt="">
            </div>
            <div class="card-body">
                <div class="card-title">
                    <h2>Estopa</h2>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="info-concierto">
    <div class="title-section">
        <h3>Info</h3>
    </div>
    <div class="card-content">
        {{-- <div class="likes-concert">
            <p><span class="fw-bold">Me gusta:</span> 400</p>
        </div> --}}
        <div class="horarios-concert">
            <p><span class="fw-bold">Horarios:</span> 23/04/32 a las 22:00h </p>
        </div>
        <div class="ubicacion-concert">
            <p><span class="fw-bold">Ubicacion:</span> Palau Sant Jordi</p>
        </div>
        <div class="desc-concert">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim molestiae repudiandae numquam nisi
                cumque fugiat quis facere harum ab asperiores, molestias neque saepe fugit architecto
                exercitationem adipisci error aspernatur sint vitae accusamus! Ullam, error quos! Non tempora
                accusamus blanditiis repudiandae.</p>
        </div>
    </div>
    {{-- <div class="btn-follow-concert">
        <a href="">
            <i class="fas fa-heart"></i>
            Me Gusta
        </a>
    </div> --}}
</div>

<div class="conciertos-relacionados">
    <div class="title-section">
        <h3>Conciertos Relacionados</h3>
    </div>
    <div class="container-flex-concerts">

        <!-- Items -->
        <div class="items-concerts">
            <div class="card-image">
                <img src="./assets/images/adam-whitlock-I9j8Rk-JYFM-unsplash.jpg" alt="">
            </div>
            <div class="content-card">
                <div class="title-content">
                    <h3>
                        Festival Don pinturas
                    </h3>
                </div>
                <div class="details-content">
                    <p>
                        <span class="fw-bold">Ubicacion:</span>
                        Madrid - Santiago Bernabeú
                    </p>
                    <p>
                        <span class="fw-bold">Fecha:</span>
                        26/02/2020
                    </p>
                </div>
                <div class="desc-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et vestibulum libero.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos
                    </p>
                </div>
                <div class="btn-content">
                    <a href="#">Ver mas</a>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="container-comentarios">
    <div class="container-primary-flex">
        <div class="title-section">
            <h3>Commentarios</h3>
        </div>
        @if (Auth::User())
        @if (Auth::User()-> is_group == 0 )
            @foreach ($concert as $concerto)
                <div class="btn-add-comment">
                    <a href="{{route('commentConcert', ['id' => $concerto->id])}}" id="addComm">Añadir Comentario</a>
                </div>
            @endforeach
        @endif    
        @endif
        
    </div>

    <div class="container-comentarios-flex">
        <!-- Item -->
        <div class="item-comentario">
            <!-- Image and first name y last name user -->
            <div class="info-user-comment">
                <div class="img-user">
                    <img src="./assets/images/adam-whitlock-I9j8Rk-JYFM-unsplash.jpg" width="45" height="45"
                        style="border-radius: 50%;">
                </div>
                <div class="names-user">
                    <p>Julian Gonzalez</p>
                </div>
            </div>
            <!-- Image and first name y last name user -->

            <!-- Date update comment -->
            <div class="date-comm">
                <p><i style="color:#720029;" class="fas fa-clock"></i> 26/02/2020</p>
            </div>
            <!-- Date update comment -->
            <!-- comment -->
            <div class="content-comment">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui veritatis voluptate omnis
                    cumque sapiente aut saepe quis! Veritatis, mollitia natus.
                </p>
            </div>
            <!-- comment -->

        </div>

        <!-- Item -->
        <div class="item-comentario">
            <!-- Image and first name y last name user -->
            <div class="info-user-comment">
                <div class="img-user">
                    <img src="./assets/images/adam-whitlock-I9j8Rk-JYFM-unsplash.jpg" width="45" height="45"
                        style="border-radius: 50%;">
                </div>
                <div class="names-user">
                    <p>Julian Gonzalez</p>
                </div>
            </div>
            <!-- Image and first name y last name user -->

            <!-- Date update comment -->
            <div class="date-comm">
                <p><i style="color:#720029;" class="fas fa-clock"></i> 26/02/2020</p>
            </div>
            <!-- Date update comment -->
            <!-- comment -->
            <div class="content-comment">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui veritatis voluptate omnis
                    cumque sapiente aut saepe quis! Veritatis, mollitia natus.
                </p>
            </div>
            <!-- comment -->

        </div>
        


    </div>


</div>

@endsection

