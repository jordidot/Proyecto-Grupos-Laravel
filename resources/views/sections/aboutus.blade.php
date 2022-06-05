<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('web.title_header')}} - {{__('web.title_about_us')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/iconomusica.png')}}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/762a7ec47b.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}?v=echo time();">
</head>
<body>
    <header class="header-container-aboutus">
        <div class="title-header-aboutus">
        <h2>{{__('web.title_about_us')}}</h2>
        </div>
        <div class="title-header-aboutus-2">
        <a style="text-decoration:none;color:white;" href="{{route('home')}}"><h2>/</h2></a>
        </div>
        <div class="title-header-aboutus-3">
        <h2>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget tincidunt velit, sed varius augue. Nulla consectetur, risus ut interdum suscipit, risus augue eleifend neque, ac consectetur urna ligula nec metus. Ut malesuada, lacus vel eleifend consequat, erat tellus gravida libero, at eleifend dui orci in orci. Sed sed risus ligula. Praesent ac dui dapibus, fringilla purus a, cursus velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </h2>
        </div>
    </header>
    <section class="container container2">
        <div class="title-container">
            <h2>{{__('web.developers_title')}}</h2>
        </div>
        <div class="container-aboutus-profile">
            @foreach($users as $user)
            @if(($user->is_admin) == 1)
            <div class="item-profiles">
                <div class="image-profile">
                    <img src="{{asset('images/estopa.jpg')}}">
                </div>
                <div class="content-profile">
                    <div class="title-profile">
                        <p>
                            {{$user->first_name}} 
                            {{$user->last_name}}
                        </p>
                    </div>
                    <div class="rol-profile">
                        <p>
                            {{$user->rol}}
                        </p>
                    </div>
                    <div class="description-profile">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla turpis, imperdiet ac orci vitae, vulputate fermentum eros. Nulla eu orci tellus.
                        </p>
                    </div>
                    <div class="rs-profile">
                        <a href=""><img src="{{asset('images/redessociales.png')}}"></a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
</body>
</html>