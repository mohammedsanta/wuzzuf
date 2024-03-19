<div>
    
    <form action="{{ route('company.storeJob') }}" wire:submit="save" method="POST">
        @csrf()

        <!-- just for test -->
        <input type="hidden" name="EducationLevel" value="EducationLevel">

        <h1 class="title">Post New Job</h1>

        <button class="clone-previous-post">

            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                <path fill="#0055D9" d="M15.257 4.5H6.894c-.767 0-1.394.623-1.394 1.385v9.692h1.394V5.885h8.363V4.5zm1.85 2.538H9.44c-.766 0-1.394.624-1.394 1.385v9.692c0 .762.628 1.385 1.394 1.385h7.666c.767 0 1.394-.623 1.394-1.385V8.423c0-.761-.627-1.385-1.394-1.385zm0 11.077H9.44V8.423h7.666v9.692z"></path>
            </svg>

            Clone a previous post

            <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                <path fill="#0055D9" d="M17.355 7.5L12 13.063 6.645 7.5 5 9.213l7 7.287 7-7.287z"></path>
            </svg>

        </button>

        <div class="steps">

            <div class="job-info">

                <p class="job-info-number">1</p>
                <p class="job-info-title">Job Info</p>

            </div>

            <div class="application-form">

                <p class="application-form-number">2</p>
                <p class="application-form-title">Application Form</p>

            </div>

        </div>

        <div class="box-post-type box-style-job">

            <h2 class="post-type-title">Post Type</h2>

            <div class="post-types">

                <div class="box-select {{ $selected == 'Job' ? 'job-type-selected' : '' }} " wire:click="updatePostType('Job')">
                    <p>Job</p>
                </div>

                <div class="box-select {{ $selected == 'Internships' ? 'job-type-selected' : '' }} "  wire:click="updatePostType('Internships')">
                    <p>Internships</p>
                </div>

            </div>

        </div>

        <div class="box-job-details box-style-job">

                <h2 class="post-type-title">Job Details</h2>


                <div class="input">

                    <label for="">Job Title</label>
                    <input type="text" wire:model="job">

                    @error('job')
                        {{$message}}
                    @enderror

                </div>

                <div class="job-category">

                    <label for="">Job Category<span>max. 3</span></label>

                    <select wire:model="JobCategories">

                        <option value="Accounting/Finance">Accounting/Finance</option>
                        <option value="Administration">Administration</option>
                        <option value="Banking">Banking</option>
                        <option value="R&D/Science">R&D/Science</option>
                        <option value="Engineering - Construction/Civil/Architecture">Engineering - Construction/Civil/Architecture</option>
                        <option value="Business Development">Business Development</option>
                        <option value="Creative/Design/Art">Creative/Design/Art</option>
                        <option value="Customer Service/Support">Customer Service/Support</option>
                        <option value="Writing/Editorial">Writing/Editorial</option>
                        <option value="Hospitality/Hotels/Food Services">Hospitality/Hotels/Food Services</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Installation/Maintenance/Repair">Installation/Maintenance/Repair</option>
                        <option value="IT/Software Development">IT/Software Development</option>
                        <option value="Legal">Legal</option>
                        <option value="Logistics/Supply Chain">Logistics/Supply Chain</option>
                        <option value="Operations/Management">Operations/Management</option>
                        <option value="Manufacturing/Production">Manufacturing/Production</option>
                        <option value="Marketing/PR/Advertising">Marketing/PR/Advertising</option>
                        <option value="Medical/Healthcare">Medical/Healthcare</option>
                        <option value="Other">Other</option>
                        <option value="Project/Program Management">Project/Program Management</option>
                        <option value="Quality">Quality</option>
                        <option value="Analyst/Research">Analyst/Research</option>
                        <option value="Sales/Retail">Sales/Retail</option>
                        <option value="Media/Journalism/Publishing">Media/Journalism/Publishing</option>
                        <option value="Sports and Leisure">Sports and Leisure</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Pharmaceutical">Pharmaceutical</option>
                        <option value="Tourism/Travel">Tourism/Travel</option>
                        <option value="Purchasing/Procurement">Purchasing/Procurement</option>
                        <option value="Strategy/Consulting">Strategy/Consulting</option>
                        <option value="C-Level Executive/GM/Director">C-Level Executive/GM/Director</option>
                        <option value="Engineering - Telecom/Technology">Engineering - Telecom/Technology</option>
                        <option value="Engineering - Mechanical/Electrical">Engineering - Mechanical/Electrical</option>
                        <option value="Engineering - Oil & Gas/Energy">Engineering - Oil & Gas/Energy</option>
                        <option value="Engineering - Other">Engineering - Other</option>
                        <option value="Education/Teaching">Education/Teaching</option>
                        <option value="Training/Instructor">Training/Instructor</option>
                        <option value="test">test</option>

                    </select>

                    @error('JobCategories')
                        {{$message}}
                    @enderror

                </div>

                <div class="types-job">

                    <label for="">Job Type <span>max 3</span></label>

                    <div class="types-job-typs">

                        <button class="{{ $FullTime == 'selected' ? 'type-true' : 'type' }}" wire:click="FullTimeB('FullTime')" wire:click.prevent="">

                            <p>Full Time</p>

                            @if($FullTime == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif


                        </button>

                        <button class="{{ $PartTime == 'selected' ? 'type-true' : 'type' }}" wire:click="PartTimeB('PartTime')" wire:click.prevent="">

                            <p>Part Time</p>

                            @if($PartTime == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif

                        </button>

                        <button class="{{ $Freelance == 'selected' ? 'type-true' : 'type' }}" wire:click="FreelanceB('Freelance')" wire:click.prevent="">

                            <p>Freelance / Project</p>

                            @if($Freelance == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif

                        </button>

                        <button class="{{ $ShiftBased == 'selected' ? 'type-true' : 'type' }}" wire:click="ShiftBasedB('Shift Based')" wire:click.prevent="">

                            <p>Shift Based</p>

                            @if($ShiftBased == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif

                        </button>

                        <button class="{{ $Volunteering == 'selected' ? 'type-true' : 'type' }}" wire:click="VolunteeringB('Volunteering')" wire:click.prevent="">

                            <p>Volunteering</p>

                            @if($Volunteering == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif

                        </button>

                    </div>

                    @error('JobType')
                        {{$message}}
                    @enderror

                </div>

                <div class="types-job">

                    <label for="">Workplace <span>max 3</span></label>

                    <div class="types-job-typs">

                        <input type="hidden" wire:model="Workplace" value="FullTime">


                        <button class="{{ $OnSite == 'selected' ? 'type-true' : 'type' }}" wire:click="OnSiteB('OnSite')" wire:click.prevent="">

                            <p>On Site</p>

                            @if($OnSite == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif


                        </button>

                        <button class="{{ $Remote == 'selected' ? 'type-true' : 'type' }}" wire:click="RemoteB('Remote')" wire:click.prevent="">

                            <p>Remote</p>

                            @if($Remote == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif

                        </button>

                        <button class="{{ $Hybrid == 'selected' ? 'type-true' : 'type' }}" wire:click="HybridB('Hybrid')" wire:click.prevent="">

                            <p>Hybrid</p>

                            @if($Hybrid == 'selected')

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#0055D9" d="M18.933 7.438a.456.456 0 01.067.187.456.456 0 01-.067.188l-8.38 10c-.135.125-.236.187-.303.187-.112 0-.224-.052-.337-.156l-4.745-4.25-.1-.094A.456.456 0 015 13.312c0-.02.022-.072.067-.156l.068-.062a63.944 63.944 0 011.48-1.438c.135-.125.225-.187.27-.187.09 0 .202.062.336.187l2.692 2.438 6.731-8.031c.045-.042.112-.063.202-.063.067 0 .146.02.236.063l1.85 1.375z"></path>
                                </svg>

                            @else

                                <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                </svg>

                            @endif

                        </button>

                    </div>

                    @error('WorkPlace')
                        {{$message}}
                    @enderror

                </div>

                <div class="location line">

                    <h2>Location</h2>

                    <div class="select">

                        <label for="">Country</label>

                        <select wire:model="contry">

                            @foreach(countries() as $country)

                                <option value="{{$country}}">{{$country}}</option>

                            @endforeach

                        </select>

                        @error('contry')
                        {{$message}}
                        @enderror

                    </div>

                    <div class="select">

                        <label for="">City</label>

                        <select wire:model="City" id="">

                            @foreach(countries() as $country)

                                <option value="{{$country}}">{{$country}}</option>

                            @endforeach

                        </select>

                        @error('City')
                        {{$message}}
                        @enderror

                    </div>

                </div>

                <div class="career">

                    <h2 class="career-level-title">Career Level</h2>

                    <div class="career-levels">

                        <div class="box-select2 {{ $CareerLevel == 'Experienced' ? 'CareerLevelSelected' : 'no' }}" wire:click="CareerLevelUpdate('Experienced')">
                            <p class="box-select2-title">Experienced</p>
                            <p class="box-select2-words">Non-Manager</p>
                        </div>

                        <div class="box-select2 {{ $CareerLevel == 'Manager' ? 'CareerLevelSelected' : '' }}" wire:click="CareerLevelUpdate('Manager')">
                            <p class="box-select2-title">Manager</p>
                            <p class="box-select2-words"></p>
                        </div>

                        <div class="box-select2 {{ $CareerLevel == 'Senior Management' ? 'CareerLevelSelected' : '' }}" wire:click="CareerLevelUpdate('Senior Management')">
                            <p class="box-select2-title">Senior Management</p>
                            <p class="box-select2-words">CEO, GM, Director, Head</p>
                        </div>

                        <div class="box-select2 {{ $CareerLevel == 'Entry Level' ? 'CareerLevelSelected' : '' }}" wire:click="CareerLevelUpdate('Entry Level')">
                            <p class="box-select2-title">Entry Level</p>
                            <p class="box-select2-words">Junior Level / Fresh Grad</p>
                        </div>

                        <div class="box-select2 {{ $CareerLevel == 'Student' ? 'CareerLevelSelected' : '' }}" wire:click="CareerLevelUpdate('Student')">
                            <p class="box-select2-title">Student</p>
                            <p class="box-select2-words">Undergrad / Postgrad</p>
                        </div>

                    </div>

                    @error('minExperience')
                        {{$message}}
                    @enderror

                </div>

                <div class="experience">

                    <h2 class="experience-title">Years of Experience</h2>

                    <div class="experience-container">
                        
                        <div>

                            <select wire:model="minExperience">
                                <option value="">Min</option>
                                <option value="No Min">No Min</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>

                        </div>

                        @error('minExperience')
                            {{$message}}
                        @enderror

                        <div class="experience-p">to</div>

                        <div>

                            <select wire:model="maxExperience">
                                <option value="">Max</option>
                                <option value="No Max">No Max</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>

                        </div>

                        @error('maxExperience')
                            {{$message}}
                        @enderror

                    </div>

                </div>

                <div class="salary-range">

                    <h2 class="the-title">Salary</h2>

                    <div class="salary-range-container">
                        
                        <div>

                            <input class="main-input" type="text" placeholder="e.g. 8,000" wire:model="minSalary" value="">

                            @error('minSalary')
                                {{$message}}
                            @enderror

                        </div>

                        <div class="salary-range-p">to</div>

                        <div>

                            <input class="main-input" type="text" placeholder="e.g. 12,000" wire:model="maxSalary">

                            @error('maxSalary')
                                {{$message}}
                            @enderror

                        </div>

                        <p class="salary-range-change">EGP/Per Month <button>Change</button> </p>

                    </div>

                    <div class="salary-range-hide">

                        <div class="salary-range-hide-input">

                            <input type="checkbox" wire:model="hideSalary">
                            <label for="">Hide salary in job post (will only be used for recommendations)</label>
                            
                        </div>

                        <p class="salary-range-hide-p">Showing salary attracts more candidates</p>

                    </div>

                    <div class="salary-range-additional-salary">

                        <p class="the-title">Additional Salary Details <span class="salary-range-additional-salary-span">optional</span> </p>

                        <textarea wire:model="AdditionalSalary" id="" cols="30" rows="10" placeholder="e.g. Commissions and bonuses"></textarea>

                        <p class="count">200</p>

                        @error('AdditionalSalary')
                            {{$message}}
                        @enderror

                    </div>

                </div>

                <div class="number">

                    <p class="the-title">Number of Vacancies</p>

                    <div class="number-container">

                        <button>
                            <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M19 13H5v-2h14z"></path>
                            </svg>
                        </button>


                        <input type="text" wire:model="NumberVacancies">

                        <button>
                            <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                            </svg>
                        </button>

                        @error('NumberVacancies')
                            {{$message}}
                        @enderror


                    </div>

                </div>


        </div>

        <div class="box-about-job box-style-job">

            <h2 class="box-about-job-title">About The Job</h2>

            <div class="box-about-job-descripption">

                <p class="the-title">Job Description</p>
                <input type="text" wire:model="descriptions">

                @error('descriptions')
                    {{$message}}
                @enderror


            </div>

            <div class="box-about-job-requirements">

                <p class="the-title">Job Requirements</p>
                <input type="text" wire:model="requirements">

                @error('requirements')
                    {{$message}}
                @enderror


            </div>

            <div class="box-about-job-keywords">

                <p class="the-title">Keywords</p>

                <p class="box-about-job-keywords-p">Enter keywords including any related job titles, technologies, or keywords the candidate should have in his CV.</p>

                <input class="main-input" type="text" placeholder="Select..." wire:model="Keywords">

            </div>

        </div>

        <div class="post-job-buttons">

            <button class="blue-button">Save and Continue</button>

            <button class="transpare-button">Save and Post Later</button>

        </div>

        </form>

</div>
