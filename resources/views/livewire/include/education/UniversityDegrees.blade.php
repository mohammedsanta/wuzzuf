<!-- <div class="main-p-c university-degrees">

    <h3>University Degrees</h3>

    <div class="university-degrees-about">

        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
            <path fill="#808EA5" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
        </svg>

        <h4>Bachelor's Degree in IT</h4>

        <hr>

        <p>al mokatam institute</p>

        <p>2023</p>

    </div>

    <button class="blue-button" wire:click="UniversityDegreesSwitch">+ Add Degree</button>

</div>

@if($UniversityDegreesView)

    <div class="add-degree">

        <div class="add-degree-container">

            <h3>Add Degree</h3>

            <form action="" method="POST">

                <div class="add-degree-input">

                    <label for="">Degree Level *</label>
                    <select wire:model="DegreeLevel" id="">
                        <option value="">Bachelor's Degree</option>
                        <option value="">Master's Degree</option>
                        <option value="">MBA</option>
                        <option value="">Doctorate Degree</option>
                        <option value="">Vocational</option>
                        <option value="">Technical Diploma</option>
                        <option value="">College Diploma</option>
                    </select>

                </div>

                <div class="add-degree-input">

                    <label for="">Country</label>
                    <select wire:model="Country" id="">
                        @foreach(countries() as $country)
                            <option value="{{$country}}">{{$country}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="add-degree-input">

                    <label for="">University/Institution</label>
                    <input type="text" wire:model="University" placeholder="e.g.,Ain Shams University, National Institute of Technology, ...">

                </div>

                <div class="add-degree-input">

                    <label for="">Field(s) of Study *</label>
                    <input type="text" wire:model="FieldStudy" placeholder="e.g., Finance, Political Science, ...">

                </div>

                <div class="add-degree-start-end-year">

                    <div class="add-degree-start-end-year-container">
                        
                        <div>

                            <label for="">Start Year</label>
                            <select wire:model="StartYear">
                                <option value="">Select...</option>
                            </select>

                        </div>

                        <div>

                            <label for="">End Year *</label>
                            <select wire:model="EndYear">
                                <option value="">Select...</option>
                            </select>

                        </div>

                    </div>


                    <p class="max">If you're still studying, add your expected graduation year.</p>

                </div>

                <div class="add-degree-input">

                    <label for="">Grade *</label>
                    <select wire:model="Grade">
                        <option value="A / Excellent / 85 -100%">A / Excellent / 85 -100%</option>
                        <option value="B / Very Good / 75 - 85%">B / Very Good / 75 - 85%</option>
                        <option value="C / Good / 65 - 75%">C / Good / 65 - 75%</option>
                        <option value="D / Fair / 50 - 65%">D / Fair / 50 - 65%</option>
                    </select>

                </div>

                <div class="add-degree-input">

                    <label for="">Studied Subjects</label>
                    <textarea wire:model="StudiedSubjects" class="text-area-s" cols="30" rows="10"></textarea>
                    <p class="max">You have 250 characters remaining (max 250)</p>

                </div>

                <div class="add-degree-input">

                    <label for="">Additional Info — Optional</label>
                    <textarea wire:model="Additional" class="text-area-s" cols="30" rows="10"></textarea>
                    <p class="max">You have 250 characters remaining (max 250)</p>

                </div>

                <div class="add-degree-buttons">
                            
                    <button type="submit" wire:click="" class="blue-button ">Save</button>
                    
                    <button class="gray-button" wire:click="">Cancel</button>
                
                </div>

            </form>

        </div>

    </div>

@endif -->