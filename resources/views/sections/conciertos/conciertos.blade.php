<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conciertos</title>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/762a7ec47b.js" crossorigin="anonymous"></script>
    <!-- FontAwesome -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/stylejordi.css')}}">
    <!-- Styles -->
</head>
<body>

    <!-- Navbar -->
    <div class="navbar-container" style="background: #000 !important;">
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
                        <a href="{{route('home')}}">{{__('web.title_home')}}</a>
                        <a class="menu-item-actived" href="{{route('conciertos')}}">{{__('web.title_concerts')}}</a>
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
                                        <img style="border-radius:300px; width:50px;heigth:50px;" src="{{asset(Auth::User()->image_user)}}">
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
                    <h3>Identificate</h3>
                </div>
                <div class="btn-close close-modal-register">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="content-info-register">
                <div class="title-info">
                    <h3>Como deseas identificarte?</h3>
                </div>
                <div class="btn-group">
                    <a href="">Login</a>
                    <a href="">Registro</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pop-Up -->

    <!-- Modal filter -->
    <div class="modal-filter">
        <div class="modal-filter-content">
            
        </div>
    </div>
    <!-- Modal filter -->
    
    <main role="main" class="main-container">
        <section class="all-concerts">
            <div class="title-view-all">
                <div class="title-section">
                    <h2>Todos los Conciertos</h2>
                </div>
                <div class="view-all">
                    <p>
                        <a class="btn-filter filter-actived" href="">ACS</a>
                        /
                        <a class="btn-filter" href="">DES</a>
                    </p>
                    
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
                                <div class="details-content">
                                    <p>
                                        <span class="fw-bold">Ubicacion:</span>
                                        {{$concert->name}}
                                    </p>
                                    <p>
                                        <span class="fw-bold">Fecha:</span>
                                        {{$concert->date}}
                                    </p>
                                </div>
                                <div class="desc-content">
                                    <p>
                                        {{substr($concert->description, 0, 150).'...'}}
                                    </p>
                                </div>
                                <div class="btn-content">
                                    <a href="{{route('conciertosdetails',['id'=> $concert-> id ])}}">Ver mas</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
               


            </div>
        </section>
        <div class="paginator">
            <ul>
                
                <li class="pagintator-arrow">
                    <a  href="">
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                </li>
                <li class="paginator-actived">
                    <a href="">1</a>
                </li>
                <li>
                    <a href="">2</a>
                </li>
                <li>
                    <a href="">3</a>
                </li>
                <li>
                    <a href="">4</a>
                </li>
                <li class="pagintator-arrow">
                    <a href="">
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </li>

            </ul>
        </div>
    </main>







    <!-- Scripts -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- Scripts -->
</body>
</html>