<div>
    
<section class="career">
        
        <div class="your-career">

            <h3 class="your-career-h3">What is your current career level?</h3>

            <div class="your-career-careers">

                <div class="your-career-careers-c {{ $CareerLevel == 'Student' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCarrerLevel('Student')">
                    <p>Student</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Entry Level' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCarrerLevel('Entry Level')">
                    <p>Entry Level</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Experienced' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCarrerLevel('Experienced')">
                    <p>Experienced</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Manager' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCarrerLevel('Manager')">
                    <p>Manager</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Senior Management' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCarrerLevel('Senior Management')">
                    <p>Senior Management</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Not specified' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCarrerLevel('Not specified')">
                    <p>Not specified</p>
                </div>

            </div>
            
            <input type="hidden" wire:model="CareerLevel">
            @error('careerLevel')
                {{$message}}
            @enderror

        </div>

        <div class="types-job">

            <h3 class="types-job-h3">What type(s) of job are you open to?</h3>

            <div class="types-job-typs">

                <button class="types-job-types-type {{ in_array('Full Time',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Full Time')">

                    <p>Full Time</p>

                    @if(!in_array('Full Time',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Full Time',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Part Time',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Part Time')">

                    <p>Part Time</p>

                    @if(!in_array('Part Time',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Part Time',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Freelance / Project',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Freelance / Project')">

                    <p>Freelance / Project</p>

                    @if(!in_array('Freelance / Project',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Freelance / Project',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Internship',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Internship')">

                    <p>Internship</p>

                    @if(!in_array('Internship',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Internship',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Shift Based',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Shift Based')">

                    <p>Shift Based</p>

                    @if(!in_array('Shift Based',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Shift Based',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Work From Home',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Work From Home')">

                    <p>Work From Home</p>

                    @if(!in_array('Work From Home',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Work From Home',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Volunteering',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Volunteering')">

                    <p>Volunteering</p>

                    @if(!in_array('Volunteering',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Volunteering',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

                <button class="types-job-types-type {{ in_array('Student Activity',$TypesJobsYouOpen) ? 'types-job-types-type-true' : ''; }}" wire:click="typesJobOpen('Student Activity')">

                    <p class="">Student Activity</p>

                    @if(!in_array('Student Activity',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                        </svg>

                    @endif

                    @if(in_array('Student Activity',$TypesJobsYouOpen))

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                        </svg>

                    @endif

                </button>

            </div>

            <input type="hidden" wire:model="CareerLevel">

            @error('TypesJobsYouOpen')
                    {{$message}}
            @enderror

        </div>

        @livewire('update-career')

        <!--  -->

        <div class="minimum-salary main-p-c">

            <h3>What is the minimum salary you would accept? <span>— Add a net salary (i.e., final amount you want after taxes and insurance)</span></h3>

            <div class="minimum-salary-s">

                <input type="text" wire:model="MinimumSalary">

                <p>EGP / Month</p>

            </div>

            <div class="minimum-salary-range">Estimated range: 15,000 to 25,000 EGP/Month</div>

                <div class="hide-minimum">

                    <div class="hide-minimum-check">
                        
                        <input type="checkbox" value="HideMinimum" wire:model="HideMinimum" {{ $HideMinimum ? 'checked' : '' }}>

                        <label for="">Hide my minimum salary from companies.</label>

                    </div>


                    <p>We'll only use your minimum salary to recommend jobs for you.</p>

                </div>

                @error('minimumSalary')
                    {{$message}}
                @enderror
            </div>
            


            <div class="country-work main-p-c">

            <h3>Where would you like to work? <span>— You can add up to 5 countries or cities</span> </h3>

            <div class="country-work-countries">

                <select wire:model="Country" id="">

                    @foreach(countries() as $key => $country)

                        <option value="{{$country}}">{{$country}}</option>
                        
                    @endforeach

                </select>


                <button>Add</button>

            </div>

        </div>

        <!--  -->

        <div class="current-job main-p-c">

            <h3>What is your current job search status?</h3>

            <select wire:model="CurrentJobSearchStatus" id="">
                <option value=""></option>
                <option value="I am happy where I am but don't mind finding good opportunities">I am happy where I am but don't mind finding good opportunities</option>
                <option value="I am only interested in very specific opportunities">I am only interested in very specific opportunities</option>
                <option value="I am not looking for a job">I am not looking for a job</option>
                <option value="I am available for immediate hiring">I am available for immediate hiring</option>
            </select>

            @error('CurrentJobSearchStatus')
                {{$message}}
            @enderror

            <div class="current-job-companies-find">

                <input type="checkbox" value="ProfilePublic" wire:model="CompaniesFindMe" {{ $CompaniesFindMe ? 'checked' : '' }}>
                

                <div class="current-job-companies-find-text">

                    <h1>Let companies find me on WUZZUF. (Recommended)</h1>

                    <p>By activating this option, you will increase your chances of getting headhunted by companies searching our database.</p>

                </div>

            </div>

            <div class="current-job-my-profile">

                <input type="checkbox" value="ProfilePublic" wire:model="ProfilePublic" {{ $ProfilePublic ? 'checked' : '' }}>

                <div class="current-job-my-profile-text">

                    <h1>By activating this option, you will increase your chances of getting headhunted by companies searching our database.</h1>

                    <p>By activating this option, you can share your profile to those not on WUZZUF and get more exposure.</p>

                </div>

            </div>

        </div>

        <button class="blue-button" wire:click="submit">Save Changes</button>

    </section>

</div>
