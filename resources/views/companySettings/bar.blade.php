@extends('header.header')


@section('content')

<div class="profile-container">
    
    <div class="bar">
        
        <div class="bar-pages">
        
            <a class="{{ $_SERVER['REQUEST_URI'] == '/company/settings' ? 'site-viewed' : '' }}" href="{{ route('company.settings') }}">Settings</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/company/location' ? 'site-viewed' : '' }}" href="{{ route('company.location') }}">Location</a>
            <a class="{{ $_SERVER['REQUEST_URI'] == '/company/links' ? 'site-viewed' : '' }}" href="{{ route('company.links') }}">Links</a>
            
        </div>
        
    </div>

    <div class="profile-content">

        @yield('companySettings.content')

    </div>

</div>

@endsection