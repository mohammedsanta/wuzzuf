<!-- <div class="main-p-c training-courses">

<h3>Training and Courses</h3>

<button class="blue-button" wire:click="TrainingSwitch">+ Add Training</button>

</div>

@if($TrainingView)

    <div class="add-training">

        <div class="add-training-container">

            <h3>Add Training</h3>

            <form action="" method="POST">

                <div class="add-training-child">

                    <label for="">Training Topic*</label>
                    <input type="text" wire:model="Training" placeholder="e.g., Marketing, Java, ...">

                </div>

                <div class="add-training-child">

                    <label for="">Organization/Institution Name*</label>
                    <input type="text" wire:model="Organization" placeholder="e.g., AUC, E3langi, ...">

                </div>

                <div class="add-training-date">
                        
                    <div>

                        <label for="">Month *</label>
                        <select wire:model="Month">
                            <option value="">Select...</option>
                        </select>
        
                    </div>

                    <div>

                        <label for="">Year *</label>
                        <select name="Year">
                            <option value="">Select...</option>
                        </select>

                    </div>

                </div>

                <div class="add-training-child">

                    <label for="">Additional Info</label>
                    <textarea wire:model="Additional" class="text-area-s" cols="30" rows="10" placeholder="Describe what the training was about in detail"></textarea>
                    <p class="max">You have 250 characters remaining (max 250)</p>

                </div>

                <div class="add-training-buttons">
                            
                    <button type="submit" wire:click="" class="blue-button ">Save</button>
                    
                    <button class="gray-button" wire:click="">Cancel</button>
                
                </div>

            </form>

        </div>

    </div>

@endif -->