@extends('companySettings.bar')

@section('companySettings.content')

    <section class="online-presence">

        <div class="main-p-c user-links-container">

            <h3>Your Online Presence</h3>

            <form action="{{ route('company.links.post') }}" method="POST">

                <div class="user-links">
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">LinkedIn</p>
        
                        <input type="text" name="LinkedIn" placeholder="linkedin.com/in/username" value="{{ $links->LinkedIn }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Facebook</p>
    
                        <input type="text" name="Facebook" placeholder="facebook.com/username" value="{{ $links->Facebook }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Twitter</p>
    
                        <input type="text" name="Twitter" placeholder="twitter.com/username" value="{{ $links->Twitter }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Behance</p>
    
                        <input type="text" name="Behance" placeholder="behance.net/username" value="{{ $links->Behance }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Instagram</p>
    
                        <input type="text" name="Instagram" placeholder="instagram.com/username" value="{{ $links->Instagram }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">GitHub</p>
    
                        <input type="text" name="GitHub" placeholder="github.com/username" value="{{ $links->GitHub }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Stack Overflow</p>
    
                        <input type="text" name="StackOverflow" placeholder="stackoverflow.com/users/id" value="{{ $links->StackOverflow }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">YouTube</p>
    
                        <input type="text" name="YouTube" placeholder="youtube.com/username" value="{{ $links->YouTube }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Blog</p>
    
                        <input type="text" name="Blog" placeholder="your blog" value="{{ $links->Blog }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Website</p>
    
                        <input type="text" name="Website" placeholder="your personal website" value="{{ $links->Website }}">
    
                    </div>
    
                    <div class="user-links-link">
    
                        <p class="user-links-link-site">Other</p>
    
                        <input type="text" name="Other" placeholder="" value="{{ $links->Other }}">
    
                    </div>
    
    
                </div>
                
                @csrf
                <button type="submit" class="profile-general-info-button">Save Changes</button>

            </form>

        </div>
    
    </section>

@endsection