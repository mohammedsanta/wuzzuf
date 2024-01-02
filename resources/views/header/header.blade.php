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
        <link rel="stylesheet" href="/css/career.css" />
        <link rel="stylesheet" href="/css/ourjobs.css" />
        <link rel="stylesheet" href="/css/show-job.css" />
        <link rel="stylesheet" href="/css/uploadCv.css" />
        <link rel="stylesheet" href="/css/experience.css" />
        <link rel="stylesheet" href="/css/updateSkills.css" />
        <link rel="stylesheet" href="/css/educationUpdate.css" />
        <link rel="stylesheet" href="/css/onlinePresence.css" />
        <link rel="stylesheet" href="/css/achievements.css" />
        <link rel="stylesheet" href="/css/settingsAccount.css" />
        <link rel="stylesheet" href="/css/companyProfile.css" />
        <link rel="stylesheet" href="/css/companySettings.css" />
        <link rel="stylesheet" href="/css/applications.css" />
        <link rel="stylesheet" href="/css/archive.css" />
        <link rel="stylesheet" href="/css/jobQuestion.css" />
        <link rel="stylesheet" href="/css/saved.css" />
        
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body class="antialiased">

        <div id="app">

            @if(session('success'))
                <p class="success">
                    {{session('success')}}
                </p>
            @endif

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

                        <div>
                            <a href="{{ route('job.index') }}" class=" {{ path('/job') ? 'page' : '' }}">Explore</a>
                        </div>

                        <div>
                            <a href="{{ route('job.saved') }}" class="save-container {{ path('/job/saved') ? 'page' : '' }}">Saved <span class="save-count">{{ saveCount() }}</span> </a>
                        </div>

                        <div>
                            <a href="{{ route('job.applications') }}" class=" {{ path('/job/applications') ? 'page' : '' }}">Application</a>
                        </div>
        
                    </div>

                </div>



                <div class="header-search-profile">

                    @livewire('header-search')

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

                    @livewire('header-search')

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

        <script src="/js/main.js"></script>

    </body>

</html>
