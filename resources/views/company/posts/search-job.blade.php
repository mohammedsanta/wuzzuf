@extends('company.main.header')


@section('content')

    <section class="search-job">

        <div class="search-job-top"></div>

        <div class="search-job-top-search-container">

            <h1 class="search-job-title">Jobs in WUZZUF</h1>
    
            <div class="search-job-search">
    
                <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path fill="#4D6182" d="M15.462 10.615a4.852 4.852 0 0 0-4.847-4.846 4.852 4.852 0 0 0-4.846 4.846 4.852 4.852 0 0 0 4.846 4.847 4.852 4.852 0 0 0 4.847-4.847zm5.538 9c0 .758-.627 1.385-1.385 1.385-.367 0-.724-.151-.973-.411l-3.71-3.7a7.598 7.598 0 0 1-4.317 1.342A7.613 7.613 0 0 1 3 10.615 7.613 7.613 0 0 1 10.615 3a7.613 7.613 0 0 1 7.616 7.615c0 1.536-.465 3.05-1.342 4.316l3.71 3.71c.25.25.401.607.401.974z"></path>
                </svg>
    
                <input type="text" name="">
    
                <button class="blue-button">Search</button>
    
    
    
            </div>
            
        </div>


        <div class="search-job-content">

            <div class="search-job-filters">

                <div class="search-job-filters-top">
                    
                    <h4 class="search-job-filter-title">Filters</h4>
                    
                    <p class="search-job-filter-count">0 filters selected</p>
                    
                </div>

                <div class="search-job-filters-filter-first">

                    <h4 class="search-job-filters-filter-first-title">Quick Filters <span>New</span></h4>

                    <div class="search-job-filters-filter-box">

                        <input type="checkbox" name="" id="">

                        <label for="">Work from home</label>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>Country</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>City</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>Area</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>Career Level</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>Years of experience</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>Job Category</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="search-job-filters-filter">

                    <div class="search-job-filters-filter-title">

                        <h4>Job Type</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

                <div class="">

                    <div class="search-job-filters-filter-title">

                        <h4>Date Posted</h4>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                        </svg>

                    </div>

                </div>

            </div>

            <div class="search-job-boxs">

                @for($i = 0;$i < 10;$i++)

                    <div class="search-job-boxs-box">

                        <div class="search-job-boxs-box-container">

                            <h3 class="search-job-boxs-box-title">Electrical Engineer</h3>
        
                            <div class="search-job-boxs-box-company-address">
                            
                                <a href="">Halwani Bros</a> <span>- 10th of Ramadan City, Cairo, Egypt</span>

                            </div>
        
                            <div class="search-job-boxs-box-time-posted">22 minutes ago</div>
        
                            <div class="search-job-boxs-box-job-type">
        
                                <p>full time</p>
        
                            </div>
        
                            <div class="search-job-boxs-box-job-tages-data">
        
                                <p class="search-job-boxs-box-job-tages-data-experience">Experienced · 3+ Yrs of Exp · Engineering - </p>
        
                                <div class="search-job-boxs-box-job-tages-data-tags">
        
                                    <a href="">Engineering</a>
                                    <a href="">Electrical Engineering</a>

                                    <!-- <p></p>
                                    <p></p> -->
        
                                </div>
        
                            </div>

                        </div>

                        <div class="search-job-boxs-img">
        
                            <img src="/pic/wuzzuf.jpg" alt="">
        
                        </div>

                    </div>

                @endfor

            </div>

        </div>

    </section>

@endsection