<div>

    <div class="job">

        <div class="job-info">

            <div class="job-info-about">

                <div>

                    <h1 class="job-title">{{$job->job}}</h1>
                    
                    <div class="jobs-box-about-title-job-type">

                        @foreach(explode(',',$job->JobType) as $type)

                            <span class="job-type">{{$type}}</span> 

                        @endforeach

                    </div>
                    
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

                <button class="apply" wire:click="apply({{$job}})">Apply For Job</button>

                @if(isSaved($job->id))

                    <button class="save" wire:click="unSave({{$job}})">
                    <span>
                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M7 4c-1.1 0-2 .9-2 2v14l7-3 7 3V6c0-1.1-.9-2-2-2H7z"></path></svg>
                        </span>
                    </button>

                @else

                    <button class="save" wire:click="save({{$job}})">
                        <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M17 4c1.1 0 2 .9 2 2v14l-7-3-7 3V6c0-1.1.9-2 2-2zm0 1.6H7a.4.4 0 0 0-.399.4v11.574L12 15.259l5.399 2.315V6A.4.4 0 0 0 17 5.6z"></path>
                        </svg>
                    </button>

                @endif

                <button class="share">Share</button>

            </div>

    </div>

    </div>

</div>
