<div>

    <section>

        <div class="update-experience main-p-c">

            <h3 class="update-experience-h3">How many years of experience do you have?</h3>

            <select wire:model="experience" id="" class="update-experience-count" wire:change="updateExperience">
                <option value="">No experience</option>
                <option value="Less than 1 year">Less than 1 year</option>
                @for($i=1;$i <= 15;$i++)

                    <option value="{{$i}} years">{{$i}} years</option>

                @endfor
                <option value="More than 15 years">More than 15 years</option>
            </select>

            @if(session('success'))
                {{session('success')}}
            @endif

        </div>

        <div class="update-work-experiences main-p-c">

            <h3 class="update-work-experience-h3">Work experiences/Activities? <span> — Hint: Start with your current or most recent work experience</span></h3>

            <div class="update-work-experiences-work-container">

                @foreach($works as $work)

                    <div class="work">

                        <div class="work-edit">

                            <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="setValues({{$work}})">
                                <path fill="#4D6182" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                            </svg>

                        </div>

                        <div class="work-img">
                            <img src="/pic/company.png" alt="">
                        </div>

                        <div class="work-data-container">

                            <div class="work-title-name">

                                <p class="title">{{$work->JobTitle}}</p>

                                <p class="name">{{$work->ExperienceType}}</p>

                            </div>

                            <p class="work-job">{{$work->ExperienceType}}</p>

                            <div class="work-date">
                                {{$work->created_at}}
                            </div>

                        </div>

                    </div>

                @endforeach

                <div class="work">

                    <div class="work-edit">

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="experienceSwitch('data')">
                            <path fill="#4D6182" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                        </svg>

                    </div>

                    <div class="work-img">
                        <img src="/pic/wuzzuf.jpg" alt="">
                    </div>

                    <div class="work-data-container">

                        <div class="work-title-name">

                            <p class="title">Backend Developer</p>

                            <p class="name">Freelance / Project</p>

                        </div>

                        <p class="work-job">Free Lancer</p>

                        <div class="work-date">
                            {{date("Y-m-d H:i:s");}}
                        </div>

                    </div>


                </div>

                <button class="blue-button" wire:click="experienceSwitch">+ Add Experience/Activity</button>

            </div>

        </div>

    </section>

    @if($experienceView)
        @include('livewire.include.experience.experience')
    @endif

</div>

