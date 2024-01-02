<!-- <div class="main-p-c high-school">

    <h3>High School</h3>

    <button class="blue-button" wire:click="HighSchoolSwitch">+ Add High School</button>

</div>

@if($HighSchoolView)

    <div class="add-high-school">

        <div class="add-high-school-container">

            <h3>Add High School</h3>

            <form action="" method="POST">

                <div class="add-high-school-child">

                    <label for="">School Name*</label>
                    <input type="text" wire:model="School" placeholder="e.g., Orouba language School">

                </div>

                <div class="add-high-school-child">

                    <label for="">Country</label>
                    <select wire:model="Country" id="">
                        @foreach(countries() as $country)
                            <option value="{{$country}}">{{$country}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="add-high-school-child">

                    <label for="">Certificate wire:model *</label>
                    <select wire:model="Certificate" id="">
                        <option value="">Thanaweya Amma</option>
                        <option value="">International Baccalaureate</option>
                        <option value="">IGCSE</option>
                        <option value="">American diploma</option>
                        <option value="">Other</option>
                    </select>

                </div>

                <div class="add-high-school-child">

                    <label for="">Language of Study *</label>
                    <select wire:model="LanguageStudy" id="">
                        <option value="">Arabic</option>
                        <option value="">English</option>
                        <option value="">french</option>
                        <option value="">german</option>
                        <option value="">italy</option>
                    </select>

                </div>

                <div class="add-high-school-child">

                    <label for="">Graduation Year *</label>
                    <select wire:model="GraduationYear" id="">
                        <option value="">2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
                        <option value="">2027</option>
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
                            
                    <button type="submit" wire:click="" class="blue-button ">Save</button>
                    
                    <button class="gray-button" wire:click="">Cancel</button>
                
                </div>

            </form>

        </div>

    </div>

@endif -->