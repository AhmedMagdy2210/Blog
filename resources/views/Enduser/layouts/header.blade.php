<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>My blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->


    <link rel="shortcut icon" href="{{ asset('EndUserAssets/assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('EndUserAssets/assets/images/apple-touch-icon.png') }}">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/assets/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap core assets/css -->
    <link href="{{ asset('EndUserAssets/assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core assets/css -->
    <link href="{{ asset('EndUserAssets/assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('EndUserAssets/assets/css/style.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('EndUserAssets/assets/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('EndUserAssets/assets/css/colors.css')}}" rel="stylesheet">

    <!-- Version Tech assets/css for this template -->
    <link href="{{ asset('EndUserAssets/assets/css/version/tech.css')}}" rel="stylesheet">


</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('blog.index') }}"><img src="{{ asset('EndUserAssets/assets/images/version/tech-logo.png')}}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog.index') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
