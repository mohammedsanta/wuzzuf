<div>
    
    <section class="education-container">

        <div class="main-p-c education-update">

            <h3 class="your-career-h3">What is your current career level?</h3>

            <div class="your-career-careers">

                <div class="your-career-careers-c {{ $CareerLevel == 'Bachelors Degree' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCareerLevel('Bachelors Degree')">
                    <p>Bachelor's Degree</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Masters Degree' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCareerLevel('Masters Degree')">
                    <p>Master's Degree</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Doctorate Degree' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCareerLevel('Doctorate Degree')">
                    <p>Doctorate Degree</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'High School' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCareerLevel('High School')">
                    <p>High School</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Vocational' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCareerLevel('Vocational')">
                    <p>Vocational</p>
                </div>

                <div class="your-career-careers-c {{ $CareerLevel == 'Diploma' ? 'your-career-careers-c-select' : ''; }}" wire:click="updateCareerLevel('Diploma')">
                    <p>Diploma</p>
                </div>

            </div>

        </div>

        @livewire('education-degrees')

        @livewire('education-high-school')

        @livewire('education-certificate')

        @livewire('education-training')

    </section>

</div>
