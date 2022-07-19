<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>


    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Mr Handyman</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('home_page/assets/favicon.ico')}}"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('home_page/css/styles.css')}}" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-light " >
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="/MasterFive/public/home_page/assets/logo.png" alt="logo" style="width:40px;"
                 class="rounded-pill">
        </a>


        <div class="navbar">
            <a href="{{route('welcome')}}" ><button class="btn1">For Customers</button> </a>
            <a href="{{route('master')}}" ><button class="btn2">For Profesionals</button> </a>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin')}}">Admin</a></li>


                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif



                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register.master') }}">{{ __('Register master') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf



                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('jobs.index')}}">Job list</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('jobs.create')}}">New job</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>

</nav>




@yield('content')

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Mr Handyman 2022</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('home_page/js/scripts.js')}}"></script>
</body>
</html>



