<div>
    
    <div class="languages-container main-p-c">

        <h3 class="languages-h3">What languages do you know? <span class="special-font">— You can add more than one</span> </h3>

        <div class="languages">

            @foreach($languages as $language)

                <div class="language">

                    <p class="language-the-language">{{$language->Language}}</p>

                    <div class="language-about">

                        <p class="language-skill">Reading</p>

                        <p class="language-proficiency">{{ $language->Reading }}</p>

                    </div>

                    <div class="language-about">

                        <p class="language-skill">Writing</p>

                        <p class="language-proficiency">{{ $language->Writing }}</p>

                    </div>

                    <div class="language-about">

                        <p class="language-skill">Listening</p>

                        <p class="language-proficiency">{{ $language->Listening }}</p>

                    </div>

                    <div class="language-about">

                        <p class="language-skill">Speaking</p>

                        <p class="language-proficiency">{{ $language->Speaking }}</p>

                    </div>

                    <div class="language-action">

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="langSwitchEdit({{$language}})">
                            <path fill="#000" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                        </svg>

                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="remove({{$language}})">
                            <path fill="#000" d="M12 3c-4.977 0-9 4.023-9 9s4.023 9 9 9 9-4.023 9-9-4.023-9-9-9zm4.5 12.231L15.231 16.5 12 13.269 8.769 16.5 7.5 15.231 10.731 12 7.5 8.769 8.769 7.5 12 10.731 15.231 7.5 16.5 8.769 13.269 12l3.231 3.231z"></path>
                        </svg>

                    </div>

                </div>

            @endforeach


            <!-- <div class="language">

                <p class="language-the-language">German</p>

                <div class="language-about">

                    <p class="language-skill">Reading</p>

                    <p class="language-proficiency">Intermediate</p>

                </div>

                <div class="language-about">

                    <p class="language-skill">Writing</p>

                    <p class="language-proficiency">Intermediate</p>

                </div>

                <div class="language-about">

                    <p class="language-skill">Listening</p>

                    <p class="language-proficiency">Intermediate</p>

                </div>

                <div class="language-about">

                    <p class="language-skill">Speaking</p>

                    <p class="language-proficiency">Intermediate</p>

                </div>

                <div class="language-action">

                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#000" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                    </svg>

                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#000" d="M12 3c-4.977 0-9 4.023-9 9s4.023 9 9 9 9-4.023 9-9-4.023-9-9-9zm4.5 12.231L15.231 16.5 12 13.269 8.769 16.5 7.5 15.231 10.731 12 7.5 8.769 8.769 7.5 12 10.731 15.231 7.5 16.5 8.769 13.269 12l3.231 3.231z"></path>
                    </svg>

                </div>

            </div> -->

        </div>

        <button class="blue-button" wire:click="langSwitch">+ Add Language</button>

    </div>

    @if($langView)

        @include('livewire.include.language.addLanguage')

    @endif

    @if($langEditView)

        @include('livewire.include.language.editLanguage')

    @endif

</div>
