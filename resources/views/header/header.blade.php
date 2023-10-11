<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/header.css" />
        <link rel="stylesheet" href="/css/bar.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/explore.css" />
        <link rel="stylesheet" href="/css/profile.css" />
        <link rel="stylesheet" href="/css/profile-general-info.css" />
        <link rel="stylesheet" href="/css/ourjobs.css" />
        <link rel="stylesheet" href="/css/show-job.css" />


    </head>
    <body class="antialiased">

        <div id="app">


            <div class="main-app">
                @yield('content')
            </div>

            <div class="main-header">

                @auth('web')


                <div class="header-logo-pages">

                    <div class="header-logo">
                        <a href="{{ route('job.index') }}">
                            <h1>Wuzzuf</h1>
                        </a>
                    </div>
        
                    <div class="header-pages">
        
                        <a href="{{ route('job.index') }}" class="on-page">Explore</a>
                        <a href="">Saved</a>
                        <a href="">Application</a>
        
                    </div>

                </div>



                <div class="header-search-profile">

                    <div class="header-search">

                        <input type="search" name="" id="">

                        <button>search logo</button>

                    </div>

                    <div class="header-porfile" onclick="appearProfileButtons()">

                        <img src="{{profilePicture()}}" alt="" class="header-porfile-img">

                    </div>
                    @include('header.buttons-profile')

                </div>

                @else

                <div class="header-logo-pages">

                    <div class="header-logo">
                        <a href="{{ route('job.index') }}">
                            <h1>Wuzzuf</h1>
                        </a>
                    </div>

                    <div class="header-pages">

                        <a href="{{ route('job.index') }}" class="on-page">Explore</a>
                        <a href="{{ route('job.ourjobs') }}">Our Jobs</a>

                    </div>

                </div>


                <div class="header-search-profile">

                    <div class="header-search">

                        <input type="search" name="" id="">

                        <button>search logo</button>

                    </div>



                    <div class="header-search-profile-logout">
                        


                    </div>

                    
                    <div class="header-porfile" onclick="appearProfileButtons()">

                        <img src="{{profilePicture()}}" alt="" class="header-porfile-img">

                    </div>
                    @include('header.buttons-profile')
                </div>



                @endauth
            </div>

        </div>


        <script data-main = "libs/main" src = "/js/main.js"></script>
    </body>

</html>
