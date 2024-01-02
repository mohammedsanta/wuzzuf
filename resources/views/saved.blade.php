@extends('header.header')


@section('title','Explort Jobs')
@section('profilePicture', count(Auth::user()->profile()->get()) ? Storage::Url(Auth::user()->profile()->get()[0]->picture) : 'pic/wuzzuf.jpg' )
@section('content')

        @auth('company')
            <div class="add-job">
                <a href="{{ route('job.create') }}">Add Job</a>
            </div>
        @endauth


        <section class="saved">

            <div class="saved-drafts">
                
                <h2 class="saved-drafts-h2">1 Saved Draft Applications</h2>

                <p class="saved-drafts-p">Complete your draft applications below before they expire or get closed.</p>

                
                @foreach($drafts as $job)

                    <div class="saved-drafts-draft">

                        <div class="saved-drafts-draft-text">

                            <div class="saved-drafts-draft-text-icon">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                                </svg>

                            </div>

                            <div class="saved-drafts-draft-text-texts">

                                <p class="saved-drafts-draft-text-header">Saved Draft Application</p>
        
                                <p class="saved-drafts-draft-text-p">Your application for the job below is incomplete.</p>

                            </div>


                        </div>

                        <div class="save-jobs box">

                            <div class="save-jobs-information">
            
                                <div class="draft-jobs-box">
                
                                    <div class="save-jobs-box-right">
                
                                        <div class="save-jobs-box-about">

                                            <h3 class="save-jobs-box-about-title">
                                                <a href="{{ route('job.show',$job->id) }}">
                                                    {{$job->job}}
                                                </a>
                                                <div class="save-jobs-box-about-title-job-type">
                                                    @foreach(explode(',',$job->JobType) as $type)

                                                    <span class="job-type">{{$type}}</span> 

                                                    @endforeach
                                                </div>
                                            </h3>

                                            <p class="jobs-box-about-company-city">{{$job->company->get()[0]->company}} - <span class="jobs-box-about-company-city-span">{{ count($job->company()->get()[0]->location()->get()) > 0 ? $job->company()->get()[0]->location()->get()[0]->City . ' - ' . $job->company()->get()[0]->location()->get()[0]->Country : 'Location Not Added Yet' }}</span></p>
                    
                                        </div>
                    
                                        <div class="save-jobs-box-job-tags">
                    
                                            <p>Experienced {{$job->jobDetails->get()[0]->ExperienceNeeded}} Yrs of Exp · 

                                                @foreach($job->skills()->get() as $skill)

                                                {{ $skill->name }}

                                                @endforeach
                                                
                                                · {{ $job->created_at }}  in 11 days
                                            </p>
                    
                                        </div>
                
                                    </div>
                
                                    <div class="save-jobs-box-img">
                                        <img src="{{count($job->company()->get()[0]->profile()->get()) ? Storage::Url($job->company()->get()[0]->profile()->get()[0]->picture) : 'pic/wuzzuf.jpg'}}" alt="">
                                    </div>
            
                                </div>
            
                                <div class="save-jobs-buttons">

                                    <button class="blue-button">Complete Application</button>

                                    <button class="save-jobs-buttons-delete">Delete</button>

                                </div>
            
                            </div>
                            
                        </div>

                    </div>

                @endforeach



            </div>

            <!--  -->

            <div class="saves-jobs">

                <h2>Active Saved Jobs</h2>

                @foreach($jobs as $job)
                
                    <div class="save-jobs box">

                        <div class="save-jobs-information">
        
                            <div class="save-jobs-box">
            
                                <div class="save-jobs-box-right">
            
                                    <div class="save-jobs-box-about">

                                        <h3 class="save-jobs-box-about-title">
                                            <a href="{{ route('job.show',$job->id) }}">
                                                {{$job->job}}
                                            </a>
                                            <div class="save-jobs-box-about-title-job-type">
                                                @foreach(explode(',',$job->JobType) as $type)

                                                <span class="job-type">{{$type}}</span> 

                                                @endforeach
                                            </div>
                                        </h3>

                                        <p class="jobs-box-about-company-city">{{$job->company->get()[0]->company}} - <span class="jobs-box-about-company-city-span">{{ count($job->company()->get()[0]->location()->get()) > 0 ? $job->company()->get()[0]->location()->get()[0]->City . ' - ' . $job->company()->get()[0]->location()->get()[0]->Country : 'Location Not Added Yet' }}</span></p>
                
                                    </div>
                
                                    <div class="save-jobs-box-job-tags">
                
                                        <p>Experienced {{$job->jobDetails->get()[0]->ExperienceNeeded}} Yrs of Exp · 

                                            @foreach($job->skills()->get() as $skill)

                                            {{ $skill->name }}

                                            @endforeach
                                            
                                            · {{ $job->created_at }}  in 11 days
                                        </p>
                
                                    </div>
            
                                </div>
            
                                <div class="save-jobs-box-img">
                                    <img src="{{count($job->company()->get()[0]->profile()->get()) ? Storage::Url($job->company()->get()[0]->profile()->get()[0]->picture) : 'pic/wuzzuf.jpg'}}" alt="">
                                </div>
        
                            </div>
        
                            @livewire('savejob',['job' => $job])
        
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

        </section>

@endsection
