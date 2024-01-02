@extends('header.header')

@section('content')

        <div class="job-container">

            <div class="jobs">

                <div class="job-fixed" id="job-fixed"> 

                    <div class="job-fixed-info">


                        <div class="job-fixed-info-about-img">
                            <img src="{{ Storage::url($job->company()->get()[0]->profile()->get()[0]->picture) }}" alt="">
                        </div>

                        <div class="job-fixed-info-data">

                            <h1 class="job-fixed-title">Mide-Level Back-End</h1>
                                            
                            <p class="job-fixed-company-belongs-to-location">{{ $job->company()->get()[0]->company }} - {{ $job->company()->get()[0]->location }}</p>
                                            
                        </div>

                        <div class="job-buttons job-fixed-buttons">

                            <button class="apply">Apply For Job</button>
                            <button class="save">
                                <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M17 4c1.1 0 2 .9 2 2v14l-7-3-7 3V6c0-1.1.9-2 2-2zm0 1.6H7a.4.4 0 0 0-.399.4v11.574L12 15.259l5.399 2.315V6A.4.4 0 0 0 17 5.6z"></path>
                                </svg>
                            </button>
                            <button class="share">Share</button>

                        </div>

                    </div>

                </div>

            </div>


            @livewire('applyjob',['job' => $job])
    
            <div class="job-skills">
    
                <div class="job-skills-info">

                    <div class="job-skills-skill">
                        <p class="job-skills-skill-title">Experience Needed: </p>

                        <div class="job-skills-skill-is-have">

                            {{hasSkill()}}

                            <p>{{$job->jobDetails->get()[0]->ExperienceNeeded}}</p>
                        </div>

                    </div>

                    <div class="job-skills-skill">
                        <p class="job-skills-skill-title">CareerLevel: </p>

                        <div class="job-skills-skill-is-have">

                            {{hasSkill()}}

                            <p>{{$job->jobDetails->get()[0]->CareerLevel}}</p>
                            
                        </div>

                    </div>

                    <div class="job-skills-skill">
                        <p class="job-skills-skill-title">EducationLevel: </p>

                        <div class="job-skills-skill-is-have">

                            {{hasSkill()}}

                            <p>{{$job->jobDetails->get()[0]->EducationLevel}}</p>

                        </div>

                    </div>

                    <div class="job-skills-skill">
                        <p class="job-skills-skill-title">Salary: </p>

                        <div class="job-skills-skill-is-have">

                            <p>{{$job->jobDetails->get()[0]->Salary}}</p>

                        </div>
                    
                    </div>

                    <div class="job-skills-skill">
                        <p class="job-skills-skill-title">JobCategories: </p>

                        <div class="job-skills-skill-is-have">

                            {{hasSkill()}}
                            
                            <p>{{$job->jobDetails->get()[0]->JobCategories}}</p>

                        </div>

                    </div>

                </div>

                <div class="job-skills-skills-and-tools">

                    <p class="job-skills-skills-and-tools-title">Skill And Tools</p>

                    <div class="job-skills-skills-and-tools-tags">

                        @foreach($job->skills()->get() as $skill)

                        <div class="the-tag">

                            {{hasSkill()}}

                            <p>{{$skill->name}}</p>
                        </div>

                        @endforeach
                        
                    </div>

                </div>
    
            </div>

            <div class="job-descriptions">

                <p class="title">Job description</p>


                <p class="description">
                    
                <ul>

                    
                    @foreach(explode(',',$job->descriptions) as $description)

                        <li>
                            {{$description}}
                        </li>

                    @endforeach
                    

                </ul>

                </p>

            </div>

            <div class="job-requirements">

                <p class="title">Job Requirements</p>

                <p class="requirement">

                    <ul>

                        @foreach(explode(',',$job->requirements) as $requirement)

                            <li>
                                {{$requirement}}
                            </li>

                        @endforeach

                    </ul>

                </p>

            </div>

        </div>


@endsection
