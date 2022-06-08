@extends('layouts.pageDetalles.conciertotrans')

@section('header')
{{-- Banner --}}
@foreach($groups as $group)
<header class="banner-group" style="background-image: url(
        {{asset($group->banner_group)}}
    );">

    {{-- Imagen del grupo --}}
    <div class="img-group">
        <img src="{{asset($group->image_group)}}" alt="">
    </div>
    {{-- Imagen del grupo --}}
</header>
@endforeach
@endsection

@section('content')
@foreach($groups as $group)
<div class="info-group">
    <div class="title-group">
        <h2>{{$group->title}}</h2>
    </div>
    <div class="count-follow">
        <p class="fw-bold">{{__('web.followerss')}} {{count($groupsfavorites)}}</p>
    </div>
    <div class="desc-group">
        <p>{{$group->description}}
        </p>
    </div>
    <div class="btn-follow-concert">
        @if(Auth::User())
        @if(count($groupsfavorites)==0)
        @foreach ($groups as $group)
        @include('sections.grupos.followsSure')
        @endforeach
        @else
        @foreach ($groups as $group)
        @include('sections.grupos.follows')
        @endforeach
        @endif
        @endif
    </div>
</div>
@endforeach
<div class="conciertos-relacionados">
    <div class="title-section">
        <h3>{{__('web.title_concerts')}}</h3>
    </div>
    <div class="container-flex-concerts">

        <!-- Items -->
        @foreach($concerts as $concert)
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
                        <span class="fw-bold">{{__('web.ubication_title')}}:</span>
                        {{$concert->city}}
                    </p>
                    <p>
                        <span class="fw-bold">{{__('web.date_title')}}:</span>
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
@endsection