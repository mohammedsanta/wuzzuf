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

            <div class="managing-jobs-draft-jobs">

                <span class="managing-jobs-draft-jobs-title">

                    draft jobs (1)
                
                    <svg width="12" height="12" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#4D6182" d="M17.355 7.5L12 13.063 6.645 7.5 5 9.213l7 7.287 7-7.287z"></path>
                    </svg>
                    
                </span>

                <div class="managing-jobs-draft-jobs-boxs">

                    @foreach($data['drafts'] as $item)

                        <div class="box">

                            <div class="box-about-job">

                                <p class="box-about-job-title">web</p>

                                <div class="box-about-job-info">

                                    <p class="information">Alexandria, Egypt · Remote · Full Time · Part Time · Freelance / Project · 1 Vacancy</p>

                                    <p class="date-created">Created 2 minutes ago by You</p>

                                </div>

                            </div>

                            <div class="box-actions">

                                <div class="action">

                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#667893" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                                    </svg>

                                    <p>Edit</p>

                                </div>

                                <div class="action">

                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#667893" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                    </svg>

                                    <p>Activate</p>

                                </div>

                                <div class="action">

                                    <p>Clone</p>

                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#667893" d="M15.257 4.5H6.894c-.767 0-1.394.623-1.394 1.385v9.692h1.394V5.885h8.363V4.5zm1.85 2.538H9.44c-.766 0-1.394.624-1.394 1.385v9.692c0 .762.628 1.385 1.394 1.385h7.666c.767 0 1.394-.623 1.394-1.385V8.423c0-.761-.627-1.385-1.394-1.385zm0 11.077H9.44V8.423h7.666v9.692z"></path>
                                    </svg>

                                </div>

                                <div class="action">

                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#667893" d="M19 3.984V6H5V3.984h3.488L9.522 3h4.98l1.034.984H19zm-13.014 15v-12h12.028v12c0 .544-.2 1.016-.602 1.416-.4.4-.874.6-1.419.6H8.007c-.545 0-1.018-.2-1.42-.6-.4-.4-.6-.872-.6-1.416z"></path>
                                    </svg>

                                    <p>Delete</p>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <button class="managing-jobs-draft-jobs-show-more">Show More Draft Jobs</button>

            </div>

            <!-- <div class="managing-jobs-between"></div> -->

            <div class="managing-jobs-boxs">

                @foreach($data['jobs'] as $item)

                <div class="box">

                    <div class="box-right">

                        <div class="title-type">{{$item->job}}<span>{{$item->JobType}}</span></div>
                        <div class="location">{{auth()->user('company')->location()->get()[0]->Country}} , {{auth()->user('company')->location()->get()[0]->City}} · 1 Vacancy</div>
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

                            <a href="{{ route('manage.application.view') }}" class="inbox">

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
                                <div class="link-down"><span>Ok</span></div>

                            </a>

                            <a href="" class="shortlisted">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M7.955 15.596l-.004.004L5.3 12.89l.985-1.006 1.67 1.707L13.05 8.4l.988 1.007L7.96 15.6l-.005-.004zm4.565-2.01L17.67 8.4l.999 1.007-6.15 6.193-.207-.21-1.714-1.726 1-1.006.922.929z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Shortlisted</span></div>

                            </a>

                            <a href="" class="--">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M5.655 15.596l-.004.004L3 12.89l.985-1.006 1.67 1.707L10.75 8.4l.988 1.006v.001L5.66 15.6l-.005-.004zm9.196-2.01L20 8.4 21 9.407 14.85 15.6l-.207-.21-1.714-1.726 1-1.006.922.929zm-4.631 0L15.37 8.4l.999 1.007-6.15 6.193-.207-.21-1.714-1.726 1-1.006.922.929z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>type text</span></div>

                            </a>

                            <a href="" class="hired">

                                <div class="link-top">
                                    <span>--</span>
                                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#001433" d="M12 16.806l3.637 2.2a.874.874 0 0 0 1.306-.947l-.964-4.137 3.217-2.787c.587-.509.272-1.473-.5-1.534l-4.233-.36-1.657-3.909c-.298-.71-1.314-.71-1.612 0l-1.657 3.9-4.233.36c-.772.062-1.087 1.026-.5 1.534l3.217 2.787-.964 4.137a.874.874 0 0 0 1.306.947L12 16.806z"></path>
                                    </svg>
                                </div>
                                <div class="link-down"><span>Hired</span></div>

                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

@endsection