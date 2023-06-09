<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('web.title_header')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/iconomusica.png')}}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/762a7ec47b.js" crossorigin="anonymous"></script>
    <!-- FontAwesome -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Styles -->

</head>

<body>


    <!-- Navbar -->
    <div class="navbar-container">
        <!-- NavBar Desktop -->
        <div class="row-navbar-desktop">

            <div class="col-logo-menu">
                <div class="logo-navbar-desktop">
                    <img width="50" src="{{asset('images/concierto.png')}}" alt="Logotype">
                </div>

                <div class="menu-navbar-desktop">
                    <a class="menu-item-actived" href="">Inicio</a>
                    <a href="">{{__('web.title_concerts')}}</a>
                    <a href="">{{__('web.title_groups')}}</a>
                    <a href="">{{__('web.title_about_us')}}</a>
                </div>
            </div>

            <div class="col-search-btn-login-register">
                <div class="search-navbar-desktop">
                    <form action=".index.php">
                        <div class="form-icon">
                            <input type="text" name="search-concert" placeholder="{{__('web.found_concert')}}...">
                            <button type="submit"> <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="button-login-register">
                    <a href="#" class="openpopup">
                        <i class="fas fa-user-circle"></i>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </a>
                </div>
            </div>

        </div>
        <!-- End NavBar Desktop -->
        <!-- NavBar Mobile -->
        <div class="row-navbar-mobile">
            <div class="logo-navbar-mobile">
                <img width="50" src="{{asset('images/concierto.png')}}" alt="Logotype">
            </div>
            <div class="menu-navbar-mobile">
                    <div class="search">
                        <div class="form-icon">
                            <input type="text" name="search-concert" placeholder="{{__('web.found_concert')}}...">
                            <button type="submit"> <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                <div class="list-links">
                    <a href="">{{__('web.title_home')}}</a>
                    <a href="">{{__('web.title_concerts')}}</a>
                    <a href="">{{__('web.title_groups')}}</a>
                    <a href="">{{__('web.title_about_us')}}</a>
                </div>

                <div class="button-login-register">
                    <a href="#" class="openpopup">
                        <i class="fas fa-user-circle"></i>
                        {{__('web.login')}}/{{__('web.register')}}
                    </a>
                </div>
                
            </div>

            <div class="icon-open-menu">
                <img src="{{asset('images/Menu.svg')}}" alt="">
            </div>
        </div>
        <!-- End NavBar Mobile -->
    </div>

    <!-- Pop-Up -->
    <div id="popup" class="contenedor-popup">
        <div class="content-popup">
            <div class="content-head">
                <div class="head-title">
                    <h3>{{__('web.identificate')}}</h3>
                </div>
                <div class="btn-close close-modal-register">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="content-info-register">
                <div class="title-info">
                    <h3>{{__('web.register_option')}}</h3>
                </div>
                <div class="btn-group">
                    <a href="{{route('login')}}">{{__('web.login')}}</a>
                    <a href="{{route('register')}}">{{__('web.register')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pop-Up -->

    <!-- Header -->
    <header class="header-container">
        <div class="conatiner-content-header">
            <div class="conatiner-info-hader">
                <div class="info-title">
                    <h2>
                    {{__('web.title_image_home')}}
                    </h2>
                </div>
                <div class="info-desc">
                    <p>
                    {{__('web.description_image_home')}}
                    </p>
                </div>
                <div class="header-btn-info">
                    <a href="">{{__('web.button_image_buy')}}</a>
                    <a href="">{{__('web.button_image_booking')}}</a>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="main-container">

        <!-- Conciertos -->
        <section class="all-concerts">
            <div class="title-view-all">
                <div class="title-section">
                    <h2>{{__('web.title_concerts')}}</h2>
                </div>
                <div class="view-all">
                    <h4>
                        <a href="">
                        {{__('web.see_all_button')}}
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </h4>
                </div>
            </div>
            <div class="container-flex-concerts">
                <!-- Items -->
                @if(count($concerts)==0)
                <p>No hay ningún dato que mostrar.</p>
                @else
                    @foreach($concerts as $concert)
                        <div class="items-concerts">
                            <div class="card-image">
                                <img src="" alt="">
                            </div>
                            <div class="content-card">
                                <div class="title-content">
                                    <h3>
                                        {{$concert->title}}
                                    </h3>
                                </div>
                                <div class="desc-content">
                                    <p>
                                        {{$concert->description}}
                                    </p>
                                </div>
                                <div class="btn-content">
                                    <a href="#">{{__('web.see_more_button')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>

        <!-- Cta unete -->
        <section class="cta">
            <div class="cta-content">
                <div class="cta-title">
                    <h2>{{__('web.title_join_up')}}</h2>
                </div>
                <div class="cta-desc">
                    <p>
                    {{__('web.description_join_up')}}
                    </p>
                </div>
                <div class="cta-btn">
                    <a href="">{{__('web.register')}}</a>
                </div>
            </div>
        </section>

        <!-- Artisas -->
        <section class="section-all-artist">
            <div class="section-head">
                <div class="title-section">
                    <h2>{{__('web.title_groups')}}</h2>
                </div>
                <div class="btn-view">
                    <a href="">
                    {{__('web.see_all_button')}}
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="container-artist-flex">
                <!-- Items -->
                @if(count($groups)==0)
                    <p>No se puede mostrar ningún dato.</p>
                @else
                @foreach($groups as $group)
                <div class="items-artist">
                            <div class="content-img">
                                <img src="" alt="">
                            </div>
                            <div class="content-body">
                                <div class="title">
                                    <h3>
                                        {{$group->title}}
                                        <i class="fas fa-check-circle text-color-verify"></i>
                                    </h3>
                                </div>
                                <div class="total-followers">
                                    <p>
                                        {{__('web.followers')}} @foreach($groupsfavorites as $groupfavorite){{$groupfavorite->id}}@endforeach
                                    </p>
                                </div>
                                <div class="desc">
                                    <p>
                                        {{$group->description}}
                                    </p>
                                </div>
                                <div class="btn-view-more">
                                    <a href="">{{__('web.see_more_button')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
    </main>
    <!-- Scripts -->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>