@extends('profile.bar')

@section('profile.content')

    <section class="online-presence">

        <div class="main-p-c user-links-container">

            <h3>Your Online Presence</h3>

            <form action="{{ route('update.online.presence.post') }}" method="POST">
                @csrf
                <div class="user-links">

                    <div class="user-links-link">

                        <p class="user-links-link-site">LinkedIn</p>
        
                        <input type="text" name="LinkedIn" value="{{ $links->LinkedIn }}" placeholder="linkedin.com/in/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Facebook</p>

                        <input type="text" name="Facebook" value="{{ $links->Facebook }}" placeholder="facebook.com/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Twitter</p>

                        <input type="text" name="Twitter" value="{{ $links->Twitter }}" placeholder="twitter.com/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Behance</p>

                        <input type="text" name="Behance" value="{{ $links->Behance }}" placeholder="behance.net/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Instagram</p>

                        <input type="text" name="Instagram" value="{{ $links->Instagram }}" placeholder="instagram.com/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">GitHub</p>

                        <input type="text" name="GitHub" value="{{ $links->GitHub }}" placeholder="github.com/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Stack Overflow</p>

                        <input type="text" name="Overflow" value="{{ $links->Overflow }}" placeholder="stackoverflow.com/users/id">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">YouTube</p>

                        <input type="text" name="YouTube" value="{{ $links->YouTube }}" placeholder="youtube.com/username">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Blog</p>

                        <input type="text" name="Blog" value="{{ $links->Blog }}" placeholder="your blog">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Website</p>

                        <input type="text" name="Website" value="{{ $links->Website }}" placeholder="your personal website">

                    </div>

                    <div class="user-links-link">

                        <p class="user-links-link-site">Other</p>

                        <input type="text" name="Other" value="{{ $links->Other }}" placeholder="">

                    </div>


                </div>

                <button class="blue-button">submit</button>

            </form>

        </div>
    
    </section>

@endsection