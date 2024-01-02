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
            
            <div class="explor-jobs">

                <h2>Explore New Career Opportunities</h2>

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
                                        <div class="jobs-box-about-title-job-type">
                                            @foreach(explode(',',$job->JobType) as $type)

                                               <span class="job-type">{{$type}}</span> 

                                            @endforeach
                                        </div>
                                    </h3>
                                        <p class="jobs-box-about-company-city">{{$job->company->get()[0]->company}} - <span class="jobs-box-about-company-city-span">{{ count($job->company()->get()[0]->location()->get()) > 0 ? $job->company()->get()[0]->location()->get()[0]->City . ' - ' . $job->company()->get()[0]->location()->get()[0]->Country : 'Location Not Added Yet' }}</span></p>
                
                                    </div>
                
                                    <div class="explor-jobs-box-job-tags">
                
                                        <p class="">Experienced {{$job->jobDetails->get()[0]->ExperienceNeeded}} Yrs of Exp · 

                                            @foreach($job->skills()->get() as $skill)

                                            {{ $skill->name }}

                                            @endforeach
                                            
                                            · {{ $job->created_at }}  in 11 days</p>
                
                                    </div>
            
                                </div>
            
                                <div class="explor-jobs-box-img">
                                    <img src="{{count($job->company()->get()[0]->profile()->get()) ? Storage::Url($job->company()->get()[0]->profile()->get()[0]->picture) : 'pic/wuzzuf.jpg'}}" alt="">
                                </div>
        
                            </div>

                            @livewire('savejob',['job' => $job])

                            <!-- <div class="explor-jobs-share">
        
                                <button color="#4D6182" class="explor-jobs-share-but">
                                    <span>
                                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                            <path fill="#4D6182" d="M17 4c1.1 0 2 .9 2 2v14l-7-3-7 3V6c0-1.1.9-2 2-2zm0 1.6H7a.4.4 0 0 0-.399.4v11.574L12 15.259l5.399 2.315V6A.4.4 0 0 0 17 5.6z"></path>
                                    </svg></span><span>Save</span>
                                </button>

                                <button color="#4D6182" class="explor-jobs-share-but">
                                    <span class="css-zws242 e1fe0kqo0">
                                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                            <path fill="#4D6182" d="M13.5 4.5l7.5 7.124-7.5 6.89V14.39c-2.468 0-4.524.407-6.164 1.218-1.64.813-3.086 2.11-4.336 3.89 1.282-6.53 4.78-10.202 10.5-11.014V4.5zm1.2 2.794v2.231l-1.03.147c-3.692.524-6.327 2.332-7.97 5.49a10.76 10.76 0 0 1 1.103-.63c1.801-.89 4.055-1.342 6.697-1.342h1.2v2.593l4.542-4.173L14.7 7.294z"></path>
                                        </svg></span><span>Share</span>
                                </button>


                                <button color="#4D6182" class="explor-jobs-share-but">
                                    <span class="css-zws242 e1fe0kqo0">
                                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                            <path fill="#4D6182" d="M12 6.966c3.1 0 5.866 1.78 7.216 4.595a8.04 8.04 0 0 1-1.971 2.607l1.153 1.178A9.863 9.863 0 0 0 21 11.561c-1.415-3.668-4.91-6.266-9-6.266-1.04 0-2.037.167-2.978.476l1.35 1.379A8.106 8.106 0 0 1 12 6.966zm-.875.953l1.693 1.729c.467.209.843.593 1.047 1.07l1.694 1.729c.066-.284.115-.585.115-.894.008-2.072-1.645-3.751-3.674-3.751-.303 0-.59.041-.875.117zM3.826 5.186l2.193 2.24A9.793 9.793 0 0 0 3 11.56c1.415 3.668 4.91 6.267 9 6.267a9.422 9.422 0 0 0 3.535-.685L18.333 20l1.153-1.178L4.98 4 3.826 5.186zm6.137 6.267l2.135 2.18a.403.403 0 0 1-.098.017c-1.13 0-2.045-.936-2.045-2.089 0-.041.008-.066.008-.108zM7.18 8.612l1.432 1.462c-.188.46-.295.961-.295 1.487 0 2.072 1.653 3.76 3.682 3.76.515 0 1.006-.108 1.448-.3l.802.818a8.37 8.37 0 0 1-2.25.318c-3.1 0-5.866-1.78-7.216-4.596A8.236 8.236 0 0 1 7.18 8.612z"></path>
                                        </svg></span><span>Hide</span>
                                </button>
        
                            </div> -->
        
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

            <div class="explor-profile-cv">

                <div class="explort-profile-cv-box">

                    <div class="explort-profile-cv-box-top">
                        
                        <div class="explort-profile-cv-box-img">
                            <img src="/pic/wuzzuf.jpg" alt="">
                        </div>
                        
                        <div class="explort-profile-cv-box-about">
                            
                            <p class="explort-profile-cv-box-about-name">Mohammed Samy</p>
                            <p class="explort-profile-cv-box-about-feild">Backend Developer at Free Lancer</p>

                        </div>

                    </div>

                    <p class="explort-profile-cv-box-p1">Online Presence</p>
                    <p class="explort-profile-cv-box-p2">The more the employer know about you the more chances you get</p>

                    <button class="explort-profile-cv-box-add-links">Add Links</button>

                </div>

                <button class="explort-profile-cv-button">Download CV for free</button>

            </div>

        </div>

@endsection
