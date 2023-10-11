@extends('header.header')


@section('content')

        <div class="our-jobs-title">
            <h1>Our jobs</h1>
        </div>


        <div class="explor">

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

            </div>

        </div>

@endsection
