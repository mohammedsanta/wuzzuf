@extends('header.header')


@section('title','Explort Jobs')
@section('profilePicture', count(Auth::user()->profile()->get()) ? Storage::Url(Auth::user()->profile()->get()[0]->picture) : 'pic/wuzzuf.jpg' )
@section('content')

        @auth('company')
            <div class="add-job">
                <a href="{{ route('job.create') }}">Add Job</a>
            </div>
        @endauth


        <div class="explor">

            <h2>Explore New Career Opportunities</h2>

            <div class="explor-jobs">

                @foreach($jobs as $job)
                
                    <div class="explor-box">

                        <div class="explor-jobs-information">
        
                            <div class="explor-jobs-box">
            
                                <div class="explor-jobs-box-right">
            
                                    <div class="jobs-box-about">

                                    <h3 class="jobs-box-about-title">
                                        <a href="{{ route('job.show',$job->id) }}">
                                            {{$job->job}}
                                        </a>
                                    </h3>
                                        <p class="jobs-box-about-company-city">{{$job->company->get()[0]->company}} - New Cairo, Cairo</p>
                
                                    </div>
                
                                    <div class="explor-jobs-box-job-tags">
                
                                        <p class="">Experienced {{$job->jobDetails->get()[0]->ExperienceNeeded}} Yrs of Exp · 

                                            @foreach($job->skills()->get() as $skill)

                                            {{ $skill->name }}

                                            @endforeach
                                            
                                            · in 11 days</p>
                
                                    </div>
            
                                </div>
            
                                <div class="explor-jobs-box-img">
                                    <img src="{{count(Auth::user()->profile()->get()) ? Storage::Url(Auth::user()->profile()->get()[0]->picture) : 'pic/wuzzuf.jpg'}}" alt="">
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

@endsection
