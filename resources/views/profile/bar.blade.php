@extends('header.header')


@section('content')

<div class="profile-container">
    
    <div class="bar">
        
        <div class="bar-pages">
            
            <a class="site-viewed" href="">General Info</a>
            <a href="">test</a>
            <a href="">test</a>
            <a href="">test</a>
            <a href="">test</a>
            
        </div>
        
    </div>

    <div class="profile-content">

        @yield('profile.content')

    </div>

</div>

@endsection