@extends('header.header')


@section('content')

        <div class="job-container">

        <div class="jobs">

            <div class="job-fixed" id="job-fixed"> 

                <div class="job-fixed-info">


                    <div class="job-fixed-info-about-img">
                        <img src="{{Storage::url($job->company()->get()[0]->profile()->get()[0]->picture)}}" alt="">
                    </div>

                    <div class="job-fixed-info-data">

                        <h1 class="job-fixed-title">Mide-Level Back-End</h1>
                                        
                        <p class="job-fixed-company-belongs-to-location">{{ $job->company()->get()[0]->company }} - {{ $job->company()->get()[0]->location }}</p>
                                        
                    </div>



                        <div class="job-buttons job-fixed-buttons">

                            <button class="apply">Apply For Job</button>
                            <button class="save">Save</button>
                            <button class="share">Share</button>

                        </div>

                    </div>

                </div>

            </div>


            <div class="job">

                <div class="job-info">

                    <div class="job-info-about">

                        <div>

                            <h1 class="job-title">Mide-Level Back-End</h1>
                            
                            <p class="job-type">job type</p>
                            
                            <p class="job-company-belongs-to-location">{{ $job->company()->get()[0]->company }} - {{ $job->company()->get()[0]->location }}</p>
                            
                            <p class="posted">{{ $job->created_at }}</p>
                            
                        </div>

                        <div class="job-info-about-img">
                            <img src="{{Storage::url($job->company()->get()[0]->profile()->get()[0]->picture)}}" alt="">
                        </div>

                    </div>


                    <div class="job-data-application">

                        <div class="count-of-apply">

                            <p class="count">57</p>
                            <p class="positions">Applicants for 2 open positions</p>

                        </div>

                        <div class="job-about-applies">

                            <div class="view">
                                <p class="count">10</p>
                                <p class="type">Viewed</p>
                            </div>
                            <div class="hr-height"></div>
                            <div class="consideration">
                                <p class="count">2</p>
                                <p class="type">In Consideration</p>
                            </div>
                            <div class="hr-height"></div>
                            <div class="not-selected">
                                <p class="count">1</p>
                                <p class="type">Not Selected</p>
                            </div>

                        </div>

                    </div>

                    <div class="hr"></div>

                    <div class="job-buttons">

                        <button class="apply">Apply For Job</button>
                        <button class="save">Save</button>
                        <button class="share">Share</button>

                    </div>

                </div>

            </div>
    
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
