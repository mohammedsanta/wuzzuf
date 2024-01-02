@extends('header.header')


@section('content')

<div class="profile-container">
    
    <div class="bar">
        
        <div class="bar-pages">
        
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/general-info' ? 'site-viewed' : '' }}" href="{{ route('profile.general-info') }}">General Info</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/career-interests' ? 'site-viewed' : '' }}" href="{{ route('update.profile.career') }}">Career Interests</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/upload/cv' ? 'site-viewed' : '' }}" href="{{ route('update.profile.cv') }}">Upload CV</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/experience' ? 'site-viewed' : '' }}" href="{{ route('update.experience') }}">Experience</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/skills' ? 'site-viewed' : '' }}" href="{{ route('update.skills') }}">Skills</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/education' ? 'site-viewed' : '' }}" href="{{ route('update.education') }}">Education</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/online-presence' ? 'site-viewed' : '' }}" href="{{ route('update.online.presence') }}">Online Presence</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/profile/update/additional-info' ? 'site-viewed' : '' }}" href="{{ route('update.achievements') }}">Achievements</a>
            
        </div>
        
    </div>

    <div class="profile-content">

        @yield('profile.content')

    </div>

</div>

@endsection