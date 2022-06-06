<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('web.title_header')}} - {{__('web.title_home')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/iconomusica.png')}}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/762a7ec47b.js" crossorigin="anonymous"></script>
    <!-- FontAwesome -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}?v=echo time();">
    <link rel="stylesheet" href="{{asset('/css/stylejordi.css')}}">
    <!-- Styles -->

</head>
<body>

 


    <!-- Navbar -->
    <div class="navbar-container">
    <div class="lol">
                    @guest
                    <a href="{{url('/es')}}">ES</a>/<a href="{{url('/ca')}}">CA</a>/<a href="{{url('/en')}}">EN</a>
                    @else
                    <a href="{{url('/es')}}">ES</a>/<a href="{{url('/ca')}}">CA</a>/<a href="{{url('/en')}}">EN</a>
                    @endif
                </div>
        <!-- NavBar Desktop -->
        <div class="row-navbar-desktop">

            <div class="col-logo-menu">
                <div class="logo-navbar-desktop">
                    <img width="50" src="{{asset('images/concierto.png')}}" alt="Logotype">
                </div>

                <div class="menu-navbar-desktop">
                    <a class="menu-item-actived" href="{{route('home')}}">{{__('web.title_home')}}</a>
                    <a href="{{route('conciertos')}}">{{__('web.title_concerts')}}</a>
                    <a href="">{{__('web.title_groups')}}</a>
                    <a href="{{route('aboutus')}}">{{__('web.title_about_us')}}</a>
                </div>
            </div>

            <div class="col-search-btn-login-register">
                <div class="search-navbar-desktop">
                    <form action="{{route('search')}}" method="POST">
                        @csrf
                        <div class="form-icon">
                            <input type="text" name="searchconcert" placeholder="{{__('web.found_concert')}}...">
                            <button type="submit"> <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                
                @guest
                <div class="button-login-register">
                    <a href="#" class="openpopup" style="font-size: 11px;">
                        <i class="fas fa-user-circle"></i>
                            {{__('web.login')}}/{{__('web.register')}}
                    </a>
                </div>
                @else
                    <div class="info-user" style="margin-left: 10px;">

                        <div class="profile-user">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('profiles.edit',['profile'=>Auth::User()->id])}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(is_null(Auth::User()->image_user))
                                    <i class="fas fa-user-circle" style="color: white; font-size:30px;"></i>
                                @else
                                    <img style="border-radius:300px; width:50px;height:50px;" src="{{asset(Auth::User()->image_user)}}">
                                @endif
                            </a>
                        </div>
                    </div>
                @endif


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

                @guest
                <div class="button-login-register">
                    <a href="#" class="openpopup" style="font-size: 11px;">
                        <i class="fas fa-user-circle"></i>
                            {{__('web.login')}}/{{__('web.register')}}
                    </a>
                </div>
                @else
                    <div class="info-user" style="margin-left: 10px;">

                        <div class="profile-user">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('profiles.edit',['profile'=>Auth::User()->id])}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(is_null(Auth::User()-> image_user))
                                        <i class="fas fa-user-circle" style="color: white; font-size:30px;"></i>
                                @else
                                    
                                        <img style="border-radius:50px; width:40px;" src="{{asset(Auth::User()-> image_user)}}">
                                    
                                @endif
                            </a>
                        </div>
                    </div>
                @endif
                
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
                                <img src="{{$concert->image}}" alt="">
                            </div>
                            <div class="content-card">
                                <div class="title-content">
                                    <h3>
                                        {{$concert->title}}
                                    </h3>
                                </div>
                                <div class="desc-content">
                                    <p>
                                        {{substr($concert->description, 0, 150).'...'}}
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
                                <img src="{{asset($group->image_group)}}">
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