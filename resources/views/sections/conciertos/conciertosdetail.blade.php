@extends('layouts.pageDetalles.conciertotrans')

@section('header')
    
        <header class="container-info-concert" 
            style=" background-image: url( 
        @foreach ($concert as $concerto)
            {{asset($concerto->image)}}
        @endforeach
        );">
            <div class="content-info">
                <div class="horario-ubicacion">
                    <h3>
                        @foreach ($concert as $concerto)
                            {{$concerto->date}} 
                        @endforeach
                        - 
                        @foreach ($nameCityConcert as $city)
                            {{$city->name}}
                        @endforeach
                    </h3>
                </div>
                <div class="title-concierto">
                    @foreach ($concert as $concerto)
                        <h2>Entradas para el concierto {{$concerto->title}}</h2>
                    @endforeach
                </div>
            </div>
        </header>
  
@endsection

@section('content')
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
        <h3>{{__('web.information_title')}}</h3>
    </div>
    <div class="card-content">
        @if(count($concertsfavorites)==0)
            <div class="likes-concert">
                <p><span class="fw-bold">{{__('web.like')}}:</span>0</p>
            </div>
        @else
            <div class="likes-concert">
                <p><span class="fw-bold">{{__('web.like')}}:</span>{{count($concertsfavorites)}}</p>
            </div>
        @endif
        <div class="horarios-concert">
            @foreach ($concert as $concerto)
                <p><span class="fw-bold">Horarios:</span> {{$concerto->date}} a las {{$concerto->schedule}}h</p> 
            @endforeach
        </div>
        <div class="ubicacion-concert">
            @foreach ($nameCityConcert as $city)
                <p><span class="fw-bold">Ubicacion:</span>  {{$city->name}}</p> 
            @endforeach
            
        </div>
        <div class="desc-concert">
            @foreach ($concert as $concerto)
                <p>{{$concerto->description}}</p> 
            @endforeach
        </div>
    </div>
    <div class="btn-follow-concert">
        @if(Auth::User())
        @if(count($concertsfavorites)==0)
            @foreach ($concert as $concerto)
                @include('sections.conciertos.followsSure')
            @endforeach
        @else 
            @foreach ($concert as $concerto)
                @include('sections.conciertos.follows')
            @endforeach
        @endif
        @endif
        
    </div>
</div>

<div class="conciertos-relacionados">
    <div class="title-section">
        <h3>{{__('web.related_concerts')}}</h3>
    </div>
    <div class="container-flex-concerts">
        @foreach ($concertRelation as $concert)
             <!-- Items -->
            <div class="items-concerts">
                <div class="card-image">
                    <img src="{{asset($concert->image)}}" alt="">
                </div>
                <div class="content-card">
                    <div class="title-content">
                        <h3>
                            {{$concert->title}}
                        </h3>
                    </div>
                    <div class="details-content">
                        <p>
                            <span class="fw-bold">{{__('web.schedule_title')}}:</span>
                            {{$concert->date}}
                        </p>
                    </div>
                    <div class="desc-content">
                        <p>
                            {{$concert->description}}
                        </p>
                    </div>
                    <div class="btn-content">
                        <a href="{{route('conciertosdetails', ['id'=>$concert->id])}}">{{__('web.see_more_button')}}</a>
                    </div>
                </div>
            </div>
        @endforeach
       
        
    </div>
</div>


<div class="container-comentarios">
    <div class="container-primary-flex">
        <div class="title-section">
            <h3>{{__('web.comments_title')}}</h3>
        </div>
        @if (Auth::User())
        @if (Auth::User()-> is_group == 0 )
            
                <div class="btn-add-comment">
                    <a href="{{route('commentConcert', ['id' => $id])}}" id="addComm">{{__('web.add_comment_button')}}</a>
                </div>
        @endif    
        @endif
        
    </div>

    <div class="container-comentarios-flex">
        @if(count($comentarios) == 0)
            <p>No hay comentarios para este concierto</p>
            @else
            @foreach ($comentarios as $comentario)
                <!-- Item -->
                <div class="item-comentario">
                    <!-- Image and first name y last name user -->
                    <div class="info-user-comment">
                        <div class="img-user">
                            <img src="{{asset($comentario->image_user)}}" width="45" height="45"
                                style="border-radius: 50%;">
                        </div>
                        <div class="names-user">
                            <p>{{$comentario->first_name}} {{$comentario->last_name}}</p>
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
                            {{$comentario->comment}}
                        </p>
                    </div>
                    <!-- comment -->

                </div>
            @endforeach
            
        @endif
        
        


    </div>


</div>

@endsection

