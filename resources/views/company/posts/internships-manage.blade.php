@extends('company.main.header')

@section('content')

    <div class="hello white-div">

        <h1>Hello Mohammed!</h1>

        <button class="blue-button">
            Add New Post
            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
        </button>

    </div>

    <div class="managing">

        <div class="managing-links">

            <a href="{{ route('company.postsJobs') }}" class="managing-link-non-active">JOBS</a>
            <a href="{{ route('company.internships') }}" class="managing-link-active">INTERNSHIPS</a>

        </div>

        <div class="managing-jobs">

            <div class="managing-jobs-no-content">

                <img src="https://static.wuzzuf-data.net/eb0129b39883ddc6323481b51d4a2b8c.svg">

                <p>You haven't posted any posts yet</p>

                <button class="blue-button">
                    Add New Post
                    <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
                </button>


            </div>

    </div>

@endsection