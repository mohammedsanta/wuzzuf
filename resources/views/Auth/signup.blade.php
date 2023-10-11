<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/signup.css" />

    </head>
    
    <body>

        <div class="login-page">

        <h2 class="login-page-logo"><a href="/">WUZZUF</a></h2>

            <div class="login-box">
                
                <h3 class="login-box-title">Sign Up and Start Applying For Jobs</h3>

                <form action="{{route('auth.store')}}" method="POST" class="login-box-form">
                    @csrf()
                    <div class="f-l-name">

                        <div class="f-l-f">
                            <label for="">First Name</label>    
                            <input type="text" name="FirstName" id="">
                        </div>

                        <div class="f-l-l">
                            <label for="">Last Name</label>    
                            <input type="text" name="LastName" id="">
                        </div>

                    </div>

                    <label for="">Email</label>    
                    <input type="email" name="email" id="">

                    <label for="">Password</label>
                    <input type="password" name="password" id="">

                    <input type="submit" value="Sign in">

                </form>

                <a href="" class="login-papge-forget">forget password?</a>

                <hr class="login-box-hr">

                <div class="login-box-join">

                    <p class="login-box-join-title">Already on WUZZUF? <a href="{{route('auth.index')}}" class="login-box-join-link">sign in</a></p>

                </div>
                
            </div>
                
        </div>

    </body>
</html>
