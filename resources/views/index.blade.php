<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css" />

    </head>
    <body class="antialiased">

        <div class="welcome">

            <header>

                <div class="left">

                    <div class="left-logo">
                        <h1>Wuzzuf</h1>
                    </div>

                    <p class="left-jobs">Browse Jobs</p>


                </div>

                <div class="auth">

                    <a href="{{ route('auth.index') }}" class="auth-login">Login</a>

                    <div class="auth-buttons">

                        <button class="auth-join"><a href="{{ route('auth.create') }}">Join Now</a></button>
                        <button class="auth-emp"><a href="{{ route('company.create') }}">Employer?</a></button>

                    </div>

                    <p>list</p>

                </div>


            </header>

            <div class="search">

                <h1>Find the Best Jobs in Egypt</h1>

                <p>Searching for vacancies & career opportunities? WUZZUF helps you in your job search in Egypt</p>

                <div class="input-sub">

                    <input type="search" name="" placeholder="Search Jobs">
                    
                    <button>Search jobs</button>

                </div>


            </div>

        </div>

    </body>
</html>
