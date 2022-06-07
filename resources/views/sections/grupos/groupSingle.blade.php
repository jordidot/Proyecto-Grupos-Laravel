@extends('layouts.pageDetalles.conciertotrans')

    @section('header')
        {{-- Banner --}}
        <header class="banner-group" style="background-image: url(./assets/images/adam-whitlock-I9j8Rk-JYFM-unsplash.jpg);">

            {{-- Imagen del grupo --}}
                <div class="img-group">
                    <img src="./assets/images/42afc0fa-5d65-445d-a29c-7b49810c59cc_297801_CUSTOM.jpg" alt="">
                </div>
            {{-- Imagen del grupo --}}
        </header>
    @endsection

    @section('content')
        <div class="info-group">
            <div class="title-group">
                <h2>Estopa</h2>
            </div>
            <div class="count-follow">
                <p class="fw-bold">400 SEGUIDORES</p>
            </div>
            <div class="desc-group">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et vestibulum libero. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos
                </p>
            </div>
            <div class="btn-follow-concert">
                <a href="">
                    <i class="fas fa-heart"></i>
                    Me Gusta
                </a>
            </div>
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
    @endsection