<div>

    <div class="main-p-c university-degrees">

        <h3>University Degrees</h3>

        <div class="university-degrees-container">
            
            @foreach($degrees as $degree)

                <div class="university-degrees-about">

                    <div class="university-degrees-about-buts">

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="edit({{$degree}})">
                            <path fill="#808EA5" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                        </svg>
                        
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="remove({{$degree->id}})">
                            <path fill="#808EA5" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>

                    </div>

                    <h4>{{$degree->DegreeLevel}} in {{$degree->FieldStudy}}</h4>

                    <hr>

                    <p>{{$degree->University}}</p>

                    <p>{{$degree->EndYear}}</p>

                </div>

            @endforeach

            <div class="university-degrees-about">

                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path fill="#808EA5" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                </svg>

                <h4>Bachelor's Degree in IT</h4>

                <hr>

                <p>al mokatam institute</p>

                <p>2023</p>

            </div>

        </div>

        <button class="blue-button" wire:click="UniversityDegreesSwitch">+ Add Degree</button>

    </div>

    @if($UniversityDegreesView)

        <div class="add-degree">

            <div class="add-degree-container">

                <h3>Add Degree</h3>

                <form action="" method="POST" wire:submit.prevent="">

                    <div class="add-degree-input">

                        <label for="">Degree Level *</label>
                        <select wire:model="DegreeLevel" id="">
                            <option value="">Select..</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master's Degree">Master's Degree</option>
                            <option value="MBA">MBA</option>
                            <option value="Doctorate Degree">Doctorate Degree</option>
                            <option value="Vocational">Vocational</option>
                            <option value="Technical Diploma">Technical Diploma</option>
                            <option value="College Diploma">College Diploma</option>
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
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                </select>

                            </div>

                            <div>

                                <label for="">End Year *</label>
                                <select wire:model="EndYear">
                                    <option value="">Select...</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
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
                                
                        <button type="submit" wire:click="submit" class="blue-button ">Save</button>
                        
                        <button class="gray-button" wire:click="UniversityDegreesSwitch">Cancel</button>
                    
                    </div>

                </form>

            </div>

        </div>

    @endif
    
</div>
