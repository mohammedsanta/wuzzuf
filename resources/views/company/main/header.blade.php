<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/company/main.css">
    <link rel="stylesheet" href="/css/company/header.css">
    <link rel="stylesheet" href="/css/company/dashboard.css">
    <link rel="stylesheet" href="/css/company/manage-posts.css">
    <link rel="stylesheet" href="/css/company/post-job.css">
    <link rel="stylesheet" href="/css/company/users.css">
    <link rel="stylesheet" href="/css/company/sub-account.css">
    <link rel="stylesheet" href="/css/company/search-job.css">

    <!-- candidates -->
    <link rel="stylesheet" href="/css/company/candidates/search-cvs.css">
    <link rel="stylesheet" href="/css/company/candidates/unlocked.css">
    <link rel="stylesheet" href="/css/company/candidates/folders.css">
    <link rel="stylesheet" href="/css/company/candidates/job-invitations.css">

    <!-- company page -->
    <link rel="stylesheet" href="/css/company/company-profile.css">
    


    <title>Document</title>
</head>
<body>
    
    <div class="main-company">

        <header>

            <div class="header-container">

                <div class="header-logo">
                    <!-- <img src="/" alt=""> -->
                    <h1>Wuzzuf</h1>
                </div>
    
                <div class="header-pages">
    
                    <div class="page {{ path('/dashboard') ? 'page-avtive' : ''}}">
                        <a href="{{ route('company.dashboard') }}">DASHBOARD</a>
                    </div>
    
                    <div class="page-menu">
                        POSTS
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M17.355 7.5L12 13.063 6.645 7.5 5 9.213l7 7.287 7-7.287z"></path>
                        </svg>

                        <div class="page-menu-pages">

                            <a href="{{ route('company.postsJobs') }}">Manage Jobs</a>
                            <a href="{{ route('company.internships') }}">Manage Internships</a>
                            <a href="{{ route('company.searchJob') }}">Search All Jobs</a>
                            <a href="{{ route('company.postJob') }}">Add New Job</a>
                            <a href="{{ route('company.postInternship') }}">Add new Internship</a>

                        </div>

                    </div>
    
                    <div class="page-menu">
                        CANDIDATES
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M17.355 7.5L12 13.063 6.645 7.5 5 9.213l7 7.287 7-7.287z"></path>
                        </svg>

                        <div class="page-menu-pages">

                            <a href="{{ route('company.searchCvs') }}">Search Cvs</a>
                            <a href="{{ route('company.unblockCandidates') }}">Unblocked Candidates</a>
                            <a href="{{ route('company.folders') }}">Folders</a>
                            <a href="{{ route('company.jobInvitations') }}">Track Invitation</a>
                            <a href="{{ route('company.badges') }}">WUZZUF Badge Holders</a>

                        </div>

                    </div>
    
                    <div class="page {{ path('/company/users') ? 'page-avtive' : ''}}">
                        <a href="{{ route('company.users') }}">USERS</a>
                    </div>
    
                </div>
    
                <div class="header-search">
    
                    <input type="search" name="" placeholder="Search Job Seekers CVs ..">
                    <button>
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#000" d="M15.462 10.615a4.852 4.852 0 0 0-4.847-4.846 4.852 4.852 0 0 0-4.846 4.846 4.852 4.852 0 0 0 4.846 4.847 4.852 4.852 0 0 0 4.847-4.847zm5.538 9c0 .758-.627 1.385-1.385 1.385-.367 0-.724-.151-.973-.411l-3.71-3.7a7.598 7.598 0 0 1-4.317 1.342A7.613 7.613 0 0 1 3 10.615 7.613 7.613 0 0 1 10.615 3a7.613 7.613 0 0 1 7.616 7.615c0 1.536-.465 3.05-1.342 4.316l3.71 3.71c.25.25.401.607.401.974z"></path>
                        </svg>
                    </button>
    
                </div>
    
                <div class="header-user-menu">
                    mohammed ...

                    <!-- <div class="user-menu">

                        <div class="user-menu-user-data">

                            <div class="user-menu-user-data-pic">
                                <div class="user-menu-user-data-pic-name">Santa</div>
                            </div>

                            <div class="user-menu-user-data-some-data">

                                <p class="user-menu-user-data-some-data-full-name">mohammed samy</p>
                                <p class="user-menu-user-data-some-data-first-name">mohammed</p>
                                <p class="user-menu-user-data-some-data-email">mohammed@gmail.com</p>

                            </div>
                            
                        </div>

                        <div class="user-menu-hr"></div>

                        <div class="user-menu-page">

                            <div class="user-menu-page-container">

                                <a href="">Plans & Pricing</a>

                            </div>

                        </div>

                        <div class="user-menu-hr"></div>

                        <div class="user-menu-page">

                            <p class="user-menu-page-title">Company</p>

                            <div class="user-menu-page-container">

                                <a href="">View Company Page</a>
                                <a href="">Edit Company Page</a>

                            </div>

                        </div>

                        <div class="user-menu-hr"></div>

                        <div class="user-menu-page">

                            <p class="user-menu-page-title">Account</p>

                            <div class="user-menu-page-container">

                                <a href="">Manage Users</a>
                                <a href="">Contact Info</a>
                                <a href="">Account Settings</a>
                                <a href="">Contact Us</a>

                            </div>

                        </div>

                        <div class="user-menu-hr"></div>

                        <div class="user-menu-page">

                            <p class="user-menu-page-title">Employer Resources</p>

                            <div class="user-menu-page-container">

                                <a href="">Job Description</a>

                            </div>

                        </div>

                        <div class="user-menu-hr"></div>

                        <div class="user-menu-page">

                            <div class="user-menu-page-container">

                                <a href="">Logout</a>

                            </div>

                        </div>

                    </div> -->

                </div>

            </div>

        </header>

        <div class="email-alert">

            <div>Confirm your email address c35f391e8e@emailaoa.pro to publish your job posts. Resend confirmation email or Change email address.</div>

        </div>

        <div class="main-company-content">

            @yield('content')

        </div>

    </div>

</body>
</html>