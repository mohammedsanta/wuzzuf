@extends('company.main.header')

@section('content')

    <section class="manage-applications">

        <div class="manage-applications-top">

            <div class="manage-applications-top-container">

                <div class="manage-applications-top-left">
    
                    <h3 class="manage-applications-top-left-title">MANAGE JOB CANDIDATES</h3>
    
                    <div class="manage-applications-top-left-about-job">

                        <div class="manage-applications-top-left-about-info">

                            <h3 class="manage-applications-top-left-about-job-title">Web</h3>
        
                            <svg width="26" height="26" preserveAspectRatio="none" viewBox="0 0 24 24" class="manage-applications-top-left-about-job-svg">
                                <path fill="white" d="M17.355 7.5L12 13.063 6.645 7.5 5 9.213l7 7.287 7-7.287z"></path>
                            </svg>
        
                            <p class="manage-applications-top-left-about-job-pending">pending</p>

                        </div>
    
    
                        <div class="manage-applications-top-left-about-job-by">
    
                            <p class="manage-applications-top-left-about-job-by-name">by moh santa</p>
    
                            <div class="manage-applications-top-left-about-job-by-logo">
    
                                MS
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div class="manage-applications-top-buttons">

                    <button class="white-button">Edit</button>
                    <button class="white-button">View</button>
                    <button class="white-button">Clone Job</button>

                </div>

            </div>

        </div>

        <div class="manage-applications-down">

            <div class="manage-applications-down-between">
    
                <div class="manage-application-links-container">
        
                    <div class="manage-application-links box-left-links">
        
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
        
                <div class="manage-applications-two-buttons">
        
                    <div class="first">

                        <div class="first-top">
                            
                            <p>Recommended</p>

                            <p>--</p>

                            <svg width="22" height="22" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#001433" d="M10.943 5.892l.333-.392h-3.65L4 9.718h3.68l3.263-3.826zM8.554 9.718h6.894l-1.874-2.199L12 5.675 9.625 8.46l-1.07 1.257zm-4.51.668l6.854 7.274-3.278-7.274H4.044zm11.611 0H8.347l3.633 8.063.023.051 3.461-7.689.191-.426zm-2.542 7.264l6.842-7.264h-3.573l-3.27 7.264zM20 9.718L16.372 5.5h-3.647l3.596 4.218H20z"></path>
                            </svg>

                        </div>

                        <div class="first-down">

                            <span class="">Handpicked</span>

                            <p>--</p>

                        </div>

                    </div>

                    <div class="section">

                        <div class="section-top">
                            
                            <p>Disqualified</p>

                            <p>--</p>

                            <svg width="14" height="14" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#D82828" d="M14.238 12L20 17.762 17.763 20 12 14.237 6.238 20 4 17.763 9.764 12 4 6.236l2.236-2.235h.002l5.763 5.762L17.764 4l2.235 2.236v.002L14.238 12z"></path>
                            </svg>

                        </div>

                        <div class="section-down">

                            <span class="">Non-matching</span>

                            <p>--</p>

                        </div>

                    </div>

                </div>
    
            </div>
    


            <div class="manage-applications-box">
    
                <div class="manage-applications-box-actions">

                    <div class="manage-applications-box-actions-search">

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" class="manage-applications-box-actions-search-svg">
                            <path fill="#808EA5" d="M15.462 10.615a4.852 4.852 0 0 0-4.847-4.846 4.852 4.852 0 0 0-4.846 4.846 4.852 4.852 0 0 0 4.846 4.847 4.852 4.852 0 0 0 4.847-4.847zm5.538 9c0 .758-.627 1.385-1.385 1.385-.367 0-.724-.151-.973-.411l-3.71-3.7a7.598 7.598 0 0 1-4.317 1.342A7.613 7.613 0 0 1 3 10.615 7.613 7.613 0 0 1 10.615 3a7.613 7.613 0 0 1 7.616 7.615c0 1.536-.465 3.05-1.342 4.316l3.71 3.71c.25.25.401.607.401.974z"></path>
                        </svg>
                        <input type="search" name="" placeholder="Search candidates..">

                    </div>

                    <div class="manage-applications-box-actions-buttons">

                        <button class="gray-button">All</button>
                        <button class="gray-button">Viewed</button>
                        <button class="gray-button">Not Viewed</button>

                    </div>

                    <div class="manage-applications-box-actions-sort">

                        <p>Sort By</p>

                        <select name="" id="">
                            <option value="">Newest</option>
                        </select>

                    </div>

                </div>

                <div class="manage-applications-box-no-content">

                    <img src="https://static.wuzzuf-data.net/ce80618c32f668b11d20bd6df7f22b58.svg" alt="no-moved-applicants">

                    <p class="manage-applications-box-no-content-text">Applicants who are moved to this stage will appear here</p>

                </div>

            </div>

        </div>


    </section>

@endsection