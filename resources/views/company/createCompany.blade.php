<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/company.css" />

    </head>
    
    <body>

        <div class="login-page">

        <h2 class="login-page-logo"><a href="/">WUZZUF</a></h2>

            <div class="login-box">

                <p class="login-box-sign-up">Looking for a job? <a href="{{ route('auth.create') }}">Sign up as a job seeker</a></p>

                <hr>

                <h1 class="login-box-create-h1">Create a Company Account to Start Hiring Now</h1>

                <p class="login-box-position">Start posting jobs, No credit card needed.</p>

                <h3 class="login-box-title">Sign Up and Start Applying For Jobs</h3>

                <form action="{{route('company.store')}}" method="POST" class="login-box-form" enctype="multipart/form-data">
                    @csrf()

                    <label for="">Company name</label>    
                    <input type="text" name="company" id="">

                    @error('company')
                        {{$message}}
                    @enderror

                    <div class="f-l-name">

                        <div class="f-l-f">
                            <label for="">First Name</label>    
                            <input type="text" name="FirstName" id="">
                        </div>
                        
                        @error('FirstName')
                            {{$message}}
                        @enderror

                        <div class="f-l-l">
                            <label for="">Last Name</label>    
                            <input type="text" name="LastName" id="">
                        </div>
                        
                        @error('LastName')
                            {{$message}}
                        @enderror

                    </div>

                    <label for="">Location</label>    
                    <input type="text" name="location" id="">
                    
                    @error('location')
                        {{$message}}
                    @enderror

                    <label for="">Number</label>    
                    <input type="tel" name="number" id="">
                    
                    @error('number')
                        {{$message}}
                    @enderror

                    <label for="">Email</label>    
                    <input type="email" name="email" id="">

                    @error('email')
                        {{$message}}
                    @enderror

                    <label for="">Password</label>
                    <input type="password" name="password" id="">

                    @error('password')
                        {{$message}}
                    @enderror

                    <input type="submit" value="Create Company Account">

                </form>


                <div class="login-box-join">

                    <p class="login-box-join-title">Already on WUZZUF? <a href="{{route('company.index')}}" class="login-box-join-link">sign in</a></p>

                </div>
                
            </div>
                
        </div>

    </body>
</html>
