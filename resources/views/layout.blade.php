<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield ('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" style="color:#00FFFF" href="{{route('index')}}">Best Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if (\Auth::check ())
                    <li class="nav-item active">
                        <a class="nav-link" style="color:#FFB6C1" href="{{route('home')}}">Администрирование
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endif
                <li class="nav-item active">
                    <a class="nav-link" style="color:#FFB6C1" href="{{route('index')}}">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#FFB6C1" href="{{route('about')}}">О нас</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color:#FFB6C1" href="{{route('contacts')}}">Контакты</a>
                </li>
                @if (\Auth::check ())
                    <li class="nav-item">
                        <a class="nav-link" style="color:#FFB6C1"
                           href="{{route('admin_all')}}">Администрирование</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" style="color:#FFB6C1"
                       href="{{route('login')}}">@if (\Auth::check ()){{\Auth::user()->name}}
                        @else Вход @endif</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->


    @yield('content')



    <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            @yield ('search')

            @yield('categories')

            @yield('autors')

            @yield('advertising')


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Alexandr Shvorobey 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
