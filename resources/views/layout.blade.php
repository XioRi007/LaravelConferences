<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Webpage description goes here" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="{{url('js/jquery.maskedinput.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        <title>@yield('title')</title>
    </head>    
    <body>       
        <nav class="navbar navbar-expand-lg navbar-dark my-navbar sticky-top">
            <div class="container">
                <a class="navbar-brand" href="/conferences">LaravelConference</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('conferences.create')}}">Create</a>
                        </li>
                    </ul>
                </div>
                @auth
                
                <form method="POST" action="logout">
                    @csrf
                    <a href="{{route('logout')}}"
                                        onclick="event.preventDefault(); 
                                        this.closest('form').submit();" 
                                        class="btn btn-success">
                                        {{ __('Log Out') }}
                    </a>
                </form>
                @else 
                <a class="btn btn-success" href="{{route('login')}}">Login</a>
                @endif

            </div>
        </nav>
        @yield('main_content')
        <footer
                class="text-center text-lg-start text-white"
                style="background-color: #1c2331"
                >
            <section class="pt-1">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">LaravelConference</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p>
                    Test task for practicing PHP and MVC.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p><i class="fas fa-envelope mr-3"></i> maria.barnash@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 380-00-000-00-00</p>
                </div>
                </div>
            </div>
            </section>
            <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
                >
            © 2022 Copyright:
            <a class="text-white" href="https://github.com/XioRi007" target="_blank"
                >Mariia Barnash</a
                >
            </div>
        </footer>
        <script type='text/javascript' src="{{url('js/app.js')}}"></script>
        <script src="{{ url('js/share.js') }}"></script>
        
    </body>
</html>



