<div>
    
    <div class="main-p-c high-school">

    <h3>High School</h3>

    <div class="university-degrees-container">
            
        @foreach($schools as $school)

            <div class="university-degrees-about">

                <div class="university-degrees-about-buts">

                    <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="edit({{$school}})">
                        <path fill="#808EA5" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                    </svg>

                    <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="remove({{$school->id}})">
                        <path fill="#808EA5" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                    </svg>

                </div>

                <h4>{{$school->School}}</h4>

                <hr>

                <p>{{$school->Graduation}}</p>

            </div>

        @endforeach

    </div>

    <button class="blue-button" wire:click="HighSchoolSwitch">+ Add High School</button>

    </div>

    @if($HighSchoolView)

        <div class="add-high-school">

            <div class="add-high-school-container">

                <h3>Add High School</h3>

                <form action="" method="POST" wire:submit.prevent="">

                    <div class="add-high-school-child">

                        <label for="">School Name*</label>
                        <input type="text" wire:model="School" placeholder="e.g., Orouba language School">

                    </div>

                    <div class="add-high-school-child">

                        <label for="">Country *</label>
                        <select wire:model="Country" id="">
                            @foreach(countries() as $country)
                                <option value="{{$country}}">{{$country}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="add-high-school-child">

                        <label for="">Certificate Name *</label>
                        <select wire:model="Certificate" id="">
                            <option value="">Select...</option>
                            <option value="Thanaweya Amma">Thanaweya Amma</option>
                            <option value="International Baccalaureate">International Baccalaureate</option>
                            <option value="IGCSE">IGCSE</option>
                            <option value="American diploma">American diploma</option>
                            <option value="Other">Other</option>
                        </select>

                    </div>

                    <div class="add-high-school-child">

                        <label for="">Language of Study *</label>
                        <select wire:model="LanguageStudy" id="">
                            <option value="">Select...</option>
                            <option value="Arabic">Arabic</option>
                            <option value="English">English</option>
                            <option value="french">french</option>
                            <option value="german">german</option>
                            <option value="italy">italy</option>
                        </select>

                    </div>

                    <div class="add-high-school-child">

                        <label for="">Graduation Year *</label>
                        <select wire:model="GraduationYear" id="">
                            <option value="">Select...</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                        </select>

                    </div>

                    <div class="add-high-school-child">

                        <label for="">Grade *</label>
                        <select wire:model="Grade">
                            <option value="A / Excellent / 85 -100%">A / Excellent / 85 -100%</option>
                            <option value="B / Very Good / 75 - 85%">B / Very Good / 75 - 85%</option>
                            <option value="C / Good / 65 - 75%">C / Good / 65 - 75%</option>
                            <option value="D / Fair / 50 - 65%">D / Fair / 50 - 65%</option>
                        </select>

                    </div>

                    <div class="add-high-school-child">

                        <label for="">Additional Info — Optional</label>
                        <textarea wire:model="Additional" class="text-area-s" cols="30" rows="10"></textarea>
                        <p class="max">You have 250 characters remaining (max 250)</p>

                    </div>

                    <div class="add-high-school-buttons">
                                
                        <button type="submit" wire:click="submit" class="blue-button ">Save</button>
                        
                        <button class="gray-button" wire:click="HighSchoolSwitch">Cancel</button>
                    
                    </div>

                </form>

            </div>

        </div>

    @endif
    
</div>
