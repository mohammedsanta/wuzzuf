<div class="add-language">

    <div class="add-language-container">

        <h3 class="add-language-h3">Add Language</h3>

        <form action="" method="POST">

            <div class="add-language-lang">

                <label for="">Language *</label>
                <select id="" wire:model="Language">
                    <option ></option>
                    <option value="Arabic">Arabic</option>
                    <option value="English">English</option>
                    <option value="German">German</option>
                </select>
            </div>

            <div class="add-language-proficiency">     

                <div class="add-language-proficiency-child">

                    <label for="">Reading:</label>
                    <input type="hidden" wire:model="Reading">

                    @include('livewire.include.language.reading')

                    {{$Reading}}

                    
                </div>

                <div class="add-language-proficiency-child">

                    <label for="">Writing:</label>
                    <input type="hidden"  wire:model="Writing">

                    @include('livewire.include.language.writing')

                    {{$Writing}}

                </div>

                <div class="add-language-proficiency-child">

                    <label for="">Listening:</label>
                    <input type="hidden"  wire:model="Listening">

                    @include('livewire.include.language.listening')

                    {{$Listening}}

                </div>

                <div class="add-language-proficiency-child">

                    <label for="">Speaking:</label>
                    <input type="hidden"  wire:model="Speaking">

                    @include('livewire.include.language.speaking')

                    {{$Speaking}}

                </div>

            </div>

            <label for="">Add Justification</label>
            <textarea wire:model="Justification" class="text-area-s" cols="30" rows="10">{{ $Justification }}</textarea>

            <p class="max">You have 250 characters remaining (max 250)</p>

        </form>

        <div class="add-language-buttons">

            <button class="blue-button" wire:click="update">Save</button>
            <button class="gray-button" wire:click="langEditSwitch">Cancel</button>

        </div>

    </div>


</div>