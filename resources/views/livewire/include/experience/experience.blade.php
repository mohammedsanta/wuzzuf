<div class="add-experience">

    <div class="add-experience-container">

        <h3>Add Experience/Activity</h3>

        <form action="" method="POST" wire:submit.prevent="">

            <div class="add-experience-child">

                <label for="">Experience type*</label>
                <select wire:model="ExperienceType">
                        <option value="">Select...</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Freelance / Project">Freelance / Project</option>
                        <option value="Internship">Internship</option>
                        <option value="Volunteering">Volunteering</option>
                        <option value="Student Activity">Student Activity</option>
                </select>

            </div>

            <div class="add-experience-child">

                <label for="">Job Title*</label>
                <input type="text" wire:model="JobTitle" placeholder="Job Title">

            </div>

            <div class="add-experience-child">

                <label for="">Job Category*</label>
                <select wire:model="JobCategory">
                    <option value="Accounting/Finance">Accounting/Finance</option>
                    <option value="Administration">Administration</option>
                    <option value="Analyst/Research">Analyst/Research</option>
                    <option value="">Banking</option>
                    <option value="">Business Development</option>
                    <option value="">C-Level Executive/GM/Director</option>
                    <option value="">Creative/Design/Art</option>
                    <option value="">Customer Service/Support</option>
                    <option value="">Education/Teaching</option>
                    <option value="">Engineering - Construction/Civil/Architecture</option>
                    <option value="">Engineering - Mechanical/Electrical</option>
                    <option value="">Engineering - Oil & Gas/Energy</option>
                    <option value="">Engineering - Other</option>
                    <option value="">Engineering - Telecom/Technology</option>
                    <option value="">Fashion</option>
                    <option value="">Hospitality/Hotels/Food Services</option>
                    <option value="">Human Resources</option>
                    <option value="">IT/Software Development</option>
                    <option value="">Installation/Maintenance/Repair</option>
                    <option value="">Legal</option>
                    <option value="">Logistics/Supply Chain</option>
                    <option value="">Manufacturing/Production</option>
                    <option value="">Marketing/PR/Advertising</option>
                    <option value="">Media/Journalism/Publishing</option>
                    <option value="">Medical/Healthcare</option>
                    <option value="">Operations/Management</option>
                    <option value="">Other</option>
                    <option value="">Pharmaceutical</option>
                    <option value="">Project/Program Management</option>
                    <option value="">Purchasing/Procurement</option>
                    <option value="">Quality</option>
                    <option value="">R&D/Science</option>
                    <option value="">Sales/Retail</option>
                    <option value="">Sports and Leisure</option>
                    <option value="">Strategy/Consulting</option>
                    <option value="">Tourism/Travel</option>
                    <option value="">Training/Instructor</option>
                    <option value="">Writing/Editorial</option>
                </select>

            </div>

            <div class="add-experience-child">

                <label for="">Company/Organization Name*</label>
                <input type="text" wire:model="CompanyName" placeholder="Company/organization name">

            </div>

            <div class="add-experience-child-start-end">
                    
                
                <div>
                    <label for="">Starting from*</label>
                    <select wire:model="StartingSinceMonth">
                        <option value="">Start Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>

                    <select wire:model="StartingSinceYear">
                        <option value="">Select...</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                </div>

                @if($currentlyWork)

                    <div>
                        <label for="">Ending in*</label>
                        <select wire:model="EndMonth">
                            <option value="">End Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>


                        <select wire:model="EndYear">
                            <option value="">Select...</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>

                @endif

            </div>

            <div class="add-experience-child-currently">

                <input type="checkbox" wire:model="CurrentlyWork" wire:change="currentlyWorkChange">
                <p>I currently work there</p>

            </div>

            <div class="add-experience-child">

                <label for="">Description</label>
                <textarea wire:model="Description" class="text-area-s" cols="30" rows="10" placeholder="Text-area is suitable for collecting long responses"></textarea>
                <p class="max">You have 250 characters remaining (max 250)</p>

            </div>

            <div class="add-experience-child">

                <label for="">Career level</label>
                <select wire:model="Careerlevel">
                    <option value="Student">Student</option>
                    <option value="Entry Level">Entry Level</option>
                    <option value="Experienced (Non-Manager)">Experienced (Non-Manager)</option>
                    <option value="Manager">Manager</option>
                    <option value="Senior Management (e.g. VP, CEO)">Senior Management (e.g. VP, CEO)</option>
                    <option value="Not specified">Not specified</option>
                </select>

            </div>

            <div class="add-experience-child">

                <label for="">Country</label>
                <select wire:model="Country">
                    @foreach(countries() as $country)
                        <option value="{{$country}}">{{$country}}</option>
                    @endforeach
                </select>

            </div>

            <div class="add-experience-child">

                <label for="">Company Size</label>
                <select wire:model="CompanySize">
                    <option value="1-10 employees">1-10 employees</option>
                    <option value="11-50 employees">11-50 employees</option>
                    <option value="51-100 employees">51-100 employees</option>
                    <option value="101-500 employees">101-500 employees</option>
                    <option value="501-1000 employees">501-1000 employees</option>
                    <option value="More than 1000 employees">More than 1000 employees</option>
                </select>

            </div>

            <div class="add-experience-child">

                <label for="">Company industry</label>
                <select wire:model="CompanyIndustry">
                    @foreach(CompanyIndustry() as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>

            </div>

            <div class="add-experience-child">

                <label for="">Company Website</label>
                <input type="text" wire:model="CompanyWebsite" placeholder="Type something...">

            </div>

            <div class="add-experience-child">

                <label for="">Achievements</label>
                <textarea wire:model="Achievements" class="text-area-s" cols="30" rows="10" placeholder="Type something..."></textarea>
                <p class="max">You have 250 characters remaining (max 250)</p>

            </div>

            <div class="add-experience-child">
                
                <div class="add-experience-child-salary">

                    <div>
                        <label for="">Starting Salary</label>
                        <input type="text" wire:model="StartingSalary" placeholder="e.g 4000">
                    </div>

                    <div>
                        <label for="">Ending Salary</label>
                        <input type="text" wire:model="EndingSalary" placeholder="e.g 6000">
                    </div>

                </div>

                @if($EGPChange)

                    <div class="add-experience-child-salary">

                        <div>
                            <label for="">Currency</label>
                            <select wire:model="Currency" id="">
                                <option value="">Select</option>
                                <option value="Egyptian Pound (EGP)">Egyptian Pound (EGP)</option>
                            </select>
                        </div>

                        <div>
                            <label for="">Period</label>
                            <select wire:model="Period" id="">
                                <option value="Per Hour">Per Hour</option>
                                <option value="Per Day">Per Day</option>
                                <option value="Per Week">Per Week</option>
                                <option value="Per Month">Per Month</option>
                                <option value="Per Year">Per Year</option>
                            </select>
                        </div>

                    </div>

                @else

                    <div class="add-experience-child-salary-on-change">

                        <p class="add-experience-child-salary-EGP">EGP/Month</p>
                        <p class="add-experience-child-salary-change" wire:click="EGPChangeSwitch">Change</p>

                    </div>

                @endif

            </div>

            <div class="add-experience-child">

                <label for="">Other salary info</label>
                <textarea wire:model="SalaryInfo" class="text-area-s" cols="30" rows="10" placeholder="salary info"></textarea>
                <p class="max">You have 250 characters remaining (max 250)</p>

            </div>

            <div class="add-experience-child-hide-salary">
                <input type="checkbox" wire:model="HideSalary">
                <p>Hide my salary from companies</p>
            </div>

            <div class="add-experience-buttons">

                <button class="blue-button" wire:click="submit">Save</button>
                <button class="gray-button" wire:click="experienceSwitch">Cancel</button>

            </div>

        </form>

    </div>

</div>