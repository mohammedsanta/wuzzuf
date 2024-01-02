<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Explore</title>

        <link rel="stylesheet" href="/css/explore.css" />

    </head>
    <body class="antialiased">

        <div class="main-header">

            <div class="header-logo-pages">

                <div class="header-logo">
                    <h1>Wuzzuf</h1>
                </div>
    
                <div class="header-pages">
    
                    <a href="" class="on-page">Explore</a>
                    <a href="">Saved</a>
                    <a href="">Application</a>
    
                </div>

            </div>


            <div class="header-search-profile">

                <div class="header-search">

                    <input type="search" name="" id="">

                    <button>search logo</button>

                </div>

                <div class="header-porfile">

                    <img src="/pic/wuzzuf.jpg" alt="">

                </div>

            </div>

        </div>

        <div class="explor">

            <h2>Explore New Career Opportunities</h2>

            <div class="explor-jobs">

                @foreach($jobs as $job)
                
                    <div class="explor-box">

                        <div class="explor-jobs-information">
        
                            <div class="explor-jobs-box">
            
                                <div class="explor-jobs-box-right">
            
                                    <div class="jobs-box-about">

                                    <h3 class="jobs-box-about-title">{{$job->job}}</h3>
                                    
                                    <p class="jobs-box-about-company-city">{{$job->company->get()[0]->company}} - New Cairo, Cairo</p>
                
                                    </div>
                
                                    <div class="explor-jobs-box-job-tags">
                
                                        <p class="">Experienced {{$job->jobDetails->get()[0]->ExperienceNeeded}} Yrs of Exp · MongoDB · Node.js · CSS · JavaScript · HTML · Express.js · Computer Science · Information Technology (IT) · Software Development · front-end· in 11 days</p>
                
                                    </div>
            
                                </div>
            
                                <div class="explor-jobs-box-img">
                                    <img src="{{Storage::url($job->company->picture)}}" alt="">
                                </div>
        
                            </div>
        
                            <div class="explor-jobs-share">
        
                                <p>save</p>
                                <p>share</p>
                                <p>hide</p>
        
                            </div>
        
                        </div>
                        
                    </div>

                @endforeach

                <!--  -->

                <div class="explor-box">

<div class="explor-jobs-information">

    <div class="explor-jobs-box">

        <div class="explor-jobs-box-right">

            <div class="jobs-box-about">

                <h3 class="jobs-box-about-title">Senior Backend Node.js Developer - Mongo DB</h3>
                <p class="jobs-box-about-company-city">QARA - New Cairo, Cairo</p>

            </div>

            <div class="explor-jobs-box-job-tags">

                <p class="">Experienced (Non-Manager) · 4+ Yrs of Exp · MongoDB · Node.js · CSS · JavaScript · HTML · Express.js · Computer Science · Information Technology (IT) · Software Development · front-end· in 11 days</p>

            </div>

        </div>

        <div class="explor-jobs-box-img">
            <img src="/pic/wuzzuf.jpg" alt="">
        </div>

    </div>

    <div class="explor-jobs-share">

        <p>save</p>
        <p>share</p>
        <p>hide</p>

    </div>

</div>

</div>

            </div>

        </div>

    </body>
</html>
