<div>

    <div class="job-titles">

        <h3 class="job-titles-h3">What are the job titles that describe what you are looking for?— Add at least 1</h3>

        <h3>Your Jobs</h3>

        <div class="job-titles-jobs">
            
            @foreach($jobs as $job)
            
                <div class="job-titles-jobs-container">
                    <p class="job-titles-jobs-job" wire:click="removeJob($event.target.innerText)">{{$job}}</p>
                </div>
            
            @endforeach
            
        </div>
        
        
        <input type="text" class="job-titles-input" wire:model.live="searchTerm" placeholder="Search Jobs">

        <div class="job-titles-input-search">

            @foreach($jobTitles as $job)

                <p class="job-titles-input-search-p" wire:click="addJob($event.target.innerText)">{{$job->job_title}}</p>

            @endforeach

        </div>

    </div>
    
    <div class="job-titles">

        <h3 class="job-titles-h3">What job categories are you interested in?— Add 1 or more</h3>

        <h3>Your Jobs categories</h3>

        <div class="job-titles-jobs">
            
            @foreach($categories as $category)
            
                <div class="job-titles-jobs-container">
                    <p class="job-titles-jobs-job" wire:click="removeCategory($event.target.innerText)">{{$category}}</p>
                </div>
            
            @endforeach
            
        </div>


        <input type="text" class="job-titles-input" wire:model.live="searchTerm" placeholder="Search Jobs">

        <div class="job-titles-input-search">

            @foreach($jobTitles as $job)

                <p class="job-titles-input-search-p" wire:click="addCategory($event.target.innerText)">{{$job->job_title}}</p>

            @endforeach

        </div>

    </div>

</div>
