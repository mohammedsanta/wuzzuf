<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/login.css" />

    </head>
    
    <body>

        <div class="login-page">

            <h2 class="login-page-logo"><a href="/">WUZZUF</a></h2>

            <div class="login-box">
                
                <h3 class="login-box-title">Company</h3>

                <form action="{{ route('company.login') }}" method="POST" class="login-box-form">
                    @csrf()
                    <label for="">Email</label>    
                    <input type="email" name="email">

                    @error('email')

                        {{$message}}

                    @enderror

                    <label for="">Password</label>
                    <input type="password" name="password">

                    @error('password')

                        {{$message}}

                    @enderror

                    <input type="submit" value="Sign in">

                </form>

                <a href="" class="login-papge-forget">forget password?</a>

                <hr class="login-box-hr">

                <div class="login-box-join">

                    <p class="login-box-join-title">New to WUZZUF? <a href="{{route('auth.create')}}" class="login-box-join-link">Join now</a></p>

                </div>
                
            </div>
                
        </div>

    </body>
</html>
