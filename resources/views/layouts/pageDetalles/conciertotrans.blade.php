<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('web.title_header')}} - {{__('web.title_home')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/iconomusica.png')}}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/762a7ec47b.js" crossorigin="anonymous"></script>
    <!-- FontAwesome -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}?v=echo time();">
    <link rel="stylesheet" href="{{asset('/css/stylejordi.css')}}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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
                    <a href="{{route('groups.all')}}">{{__('web.title_groups')}}</a>
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

    @yield('header')

    <main role="main" class="main-container">
        @yield('content')
    </main>

     <!-- Scripts -->
     <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>