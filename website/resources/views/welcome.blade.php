<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nick Vermeylen - Embedded Development</title>
        <link rel="title icon" href="{{asset('img/favicon-16x16.png')}}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: #fff url("{{ asset('img/keyboard90.jpg') }}") no-repeat center center;
                color: rgb(255, 255, 255);
                font-family: 'Raleway', sans-serif;
                font-weight: 800;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .navbar-custom {
                color: rgb(255, 255, 255);
            }
            .position-ref {
                position: relative;
            }

            .navbar-links{
                color: rgb(255, 255, 255);
                font-family: 'Raleway', sans-serif;
                font-size: 18px;
                text-decoration: none;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div id="app">
        <nav class="navbar navbar-custom navbar-fixed-top">
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
                    <a class="navbar-brand brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/favicon.png') }}" class="fluid navbar-brand"/>
                        dont joke
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right navbar-links">
                        <li><a href="{{ url('/projects') }}">Stuff</a></li>
                        <li><a href="{{ url('/about') }}">Personal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    - Nick Vermeylen -
                </div>

                <div class="links">
                    ICT - Embedded Development
                </div>
            </div>
        </div>
    </body>
</html>
