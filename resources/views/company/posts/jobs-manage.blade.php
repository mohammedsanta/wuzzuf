@extends('company.main.header')

@section('content')

    <div class="hello white-div">

        <h1>Hello Mohammed!</h1>

        <a href="{{ route('company.postJob') }}">
            <button class="blue-button">
                Add New Post
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
            </button>
        </a>

    </div>

    <div class="managing">

        <div class="managing-links">

            <a href="{{ route('company.postsJobs') }}" class="managing-link-active">JOBS</a>
            <a href="{{ route('company.internships') }}" class="managing-link-non-active">INTERNSHIPS</a>

        </div>

        <div class="managing-jobs">

            <!-- <div class="managing-jobs-no-content">

                <img src="https://static.wuzzuf-data.net/eb0129b39883ddc6323481b51d4a2b8c.svg">

                <p>You haven't posted any posts yet</p>

                <a href="{{ route('company.postJob') }}">
                    <button class="blue-button">
                        Add New Post
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
                    </button>
                </a>
            
            </div> -->

            <div class="managing-jobs-search-bar">

                <div class="managing-jobs-search-bar-box">
                    <input type="search" name="" placeholder="Search by job title">
                    <svg width="12" height="12" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#808EA5" d="M15.462 10.615a4.852 4.852 0 0 0-4.847-4.846 4.852 4.852 0 0 0-4.846 4.846 4.852 4.852 0 0 0 4.846 4.847 4.852 4.852 0 0 0 4.847-4.847zm5.538 9c0 .758-.627 1.385-1.385 1.385-.367 0-.724-.151-.973-.411l-3.71-3.7a7.598 7.598 0 0 1-4.317 1.342A7.613 7.613 0 0 1 3 10.615 7.613 7.613 0 0 1 10.615 3a7.613 7.613 0 0 1 7.616 7.615c0 1.536-.465 3.05-1.342 4.316l3.71 3.71c.25.25.401.607.401.974z"></path>
                    </svg>
                </div>

            </div>

            <div class="managing-jobs-between"></div>

            <div class="managing-jobs-boxs">

                @foreach(['','',''] as $item)

                <div class="box">

                    <div class="box-right">

                        <div class="title-type">web <span>Part Time</span></div>
                        <div class="location">Aswan , Egypt · 1 Vacancy</div>
                        <div class="created">Created 16 minutes ago by You</div>
                        <div class="views-applicants">0 Job Views · 0 Total Applicants</div>

                    </div>

                    <div class="box-edit">
                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                        </svg>

                        <div class="box-edit-show">

                            <a href="">Edit</a>
                            <a href="">Preview</a>
                            <a href="">Clone</a>
                            <a href="" class="delete">Delete</a>

                        </div>

                    </div>


                    <div class="box-left">

                        <div class="box-left-links">

                            <a href="" class="inbox">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M17.833 4.5H6.158c-.925 0-1.65.742-1.65 1.667L4.5 17.833A1.66 1.66 0 0 0 6.158 19.5h11.675c.917 0 1.667-.75 1.667-1.667V6.167c0-.925-.75-1.667-1.667-1.667zm0 10H14.5c0 1.383-1.125 2.5-2.5 2.5a2.502 2.502 0 0 1-2.5-2.5H6.158V6.167h11.675V14.5z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Inbox</span></div>

                            </a>

                            <a href="" class="ok">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M10.255 15.596l-.004.004L7.6 12.89l.985-1.006 1.67 1.707L15.35 8.4l.988 1.007L10.26 15.6l-.005-.004z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Inbox</span></div>

                            </a>

                            <a href="" class="shortlisted">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M7.955 15.596l-.004.004L5.3 12.89l.985-1.006 1.67 1.707L13.05 8.4l.988 1.007L7.96 15.6l-.005-.004zm4.565-2.01L17.67 8.4l.999 1.007-6.15 6.193-.207-.21-1.714-1.726 1-1.006.922.929z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Inbox</span></div>

                            </a>

                            <a href="" class="--">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M5.655 15.596l-.004.004L3 12.89l.985-1.006 1.67 1.707L10.75 8.4l.988 1.006v.001L5.66 15.6l-.005-.004zm9.196-2.01L20 8.4 21 9.407 14.85 15.6l-.207-.21-1.714-1.726 1-1.006.922.929zm-4.631 0L15.37 8.4l.999 1.007-6.15 6.193-.207-.21-1.714-1.726 1-1.006.922.929z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Inbox</span></div>

                            </a>

                            <a href="" class="hired">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M12 16.806l3.637 2.2a.874.874 0 0 0 1.306-.947l-.964-4.137 3.217-2.787c.587-.509.272-1.473-.5-1.534l-4.233-.36-1.657-3.909c-.298-.71-1.314-.71-1.612 0l-1.657 3.9-4.233.36c-.772.062-1.087 1.026-.5 1.534l3.217 2.787-.964 4.137a.874.874 0 0 0 1.306.947L12 16.806z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Inbox</span></div>

                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

@endsection