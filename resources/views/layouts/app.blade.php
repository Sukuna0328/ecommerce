<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=".style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<style>
    .icon-hover-primary:hover {
        border-color: #3b71ca !important;
        background-color: white !important;
    }

    .icon-hover-primary:hover i {
        color: #3b71ca !important;
    }

    .icon-hover-danger:hover {
        border-color: #dc4c64 !important;
        background-color: white !important;
    }

    .icon-hover-danger:hover i {
        color: #dc4c64 !important;
    }
</style>

{{-- <ul class="nav navbar-nav navbar-right"></ul> --}}

<style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        display: none;
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: goldenrod;
        overflow-x: hidden;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 100px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
</style>

<body>

    <!-- Center elements -->

    <!-- Right elements -->
    <div class="col-lg-5 col-md-12 col-12">
        <div class="input-group float-center">
            <div class="form-outline">
            </div>
        </div>
    </div>
    <!-- Right elements -->
    </div>
    </div>
    </div>
    <!-- Jumbotron -->

    <!-- Heading -->
    <div class="bg-primary">
        <div class="container py-4">
            <!-- Breadcrumb -->
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</body>

<body>
    <nav class="d-flex">
        {{-- <h6 class="mb-0">
               <a href="{{ route('customer') }}" class="text-white">Customer profile</a>
               <span class="text-white-50 mx-2"> > </span> --}}
        <h6 class="mb-0">
            <a href="{{ route('home') }}" class="text-white">Home</a>
            <span class="text-white-50 mx-2" class="glyphicon glyphicon-user"></span>
        </h6>
    </nav>
</body>

<!-- Breadcrumb -->
</div>
</div>
<!-- Heading -->



<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a><img src="https://img.freepik.com/premium-vector/creative-initial-letter-jg-logo-icon-design-template-elements_555601-343.jpg?w=100"
                style="margin-bottom: 50px; size: 10%;" alt=""></a>

        <a href="{{ route('admin') }}"><span class="glyphicon glyphicon-user"></span>Dashboard</a>
        <a href="{{ route('product') }}"><span class="glyphicon glyphicon-tags" data-bs-toggle="modal"
                data-bs-target="#myModal"></span>Product</a>
        <a href="{{ route('cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span>Order</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span
                class="glyphicon glyphicon-log-out"></span>Logout</a>
    </div>
</body>





<main class="py-4">
    @yield('content')




    </body>

</html>
