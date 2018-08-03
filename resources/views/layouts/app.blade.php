<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AEGIS.COM</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/bootstrap.min.css')}}">
    <style>
        body{
            background-image: url('{{asset('resources/assets/Pattern2.png')}}');
            font-family: "Courier New";
        }
        .footer{
            border-top: 2px solid #f5f5f5;
            background-color: white;
            text-align: center;
            position: fixed;
            color: #5e5e5e;
            padding: 10px;
            width: 100%;
            bottom: 0;
            right: 0;
            left: 0;
        }
        .navbar{
            transition: 0.5s;
            background-color: white;
            border-bottom: 2px solid #f5f5f5;
        }
        .navbar-default .navbar-nav > li > a:hover{
            background-color: #f5f5f5;
            transition: 0.5s;
        }
        #box{
            width: 150px;
            transition: .75s ease-out;
        }
        #box:focus{
            width: 200px;
            transition: .75s ease-in;
        }
        .btn{
            background-color: #154360;
            transition: 0.25s;
            color: #f5f5f5;
        }
        .btn:hover{
            border: 1px solid #154360;
            background-color: white;
            transition: 0.25s;
            color: #154360;
        }
        .btn:focus{
            color: white;
        }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/product') }}">
                        <b>AEGIS.COM</b>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="KEYWORD..."
                            id="box">
                        </div>
                        <button class="btn">SEARCH</button>
                    </form>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}">HOME</a></li>
                            <li><a href="{{ url('') }}"><img src="{{asset('resources/assets/cart1.png')}}" width="16px" height="auto"> CART</a></li>
                            <li><a href="{{ url('/login') }}">LOGIN</a></li>
                            <li><a href="{{ url('/register') }}">REGISTER</a></li>
                        @else
                            <li><a href="{{ url('/') }}">HOME</a></li>
                            <li><a href="{{ url('') }}"><img src="{{asset('resources/assets/cart1.png')}}" width="16px" height="auto"> CART</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('') }}">EDIT PROFILE</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            LOGOUT
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>