<div>

    <div class="main-p-c update-skills">

        <h3 class="update-skills-h3">What skills, tools, technologies and fields of expertise do you have <span class="special-font">?— Add up to 30</span></h3>

        <div class="update-skills-container">

            <!--  -->

            @foreach($skills as $skill)

                <div class="skill">

                    <div class="skill-remove" wire:click="remove({{$skill->id}})">
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#808EA5" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                    </div>
                    
                    <div class="skill-edit" wire:click="editViewSwitch({{$skill->id}})">
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#808EA5" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                        </svg>
                    </div>

                    <p class="skill-title">{{ $skill->skill }}</p>

                    <hr>

                </div>

            @endforeach

            @if($editView)

                <div class="add-skill ">

                    <div class="add-skill-container">

                        <h3>Update Skill</h3>

                        <form method="POST" wire:submit.prevent="submit">

                            @csrf
                            <label for="">Skill Name</label>
                            <input type="text" wire:model="skill">

                            @error('editName')
                                {{$message}}
                            @enderror

                            <label for="">Proficiency</label>
                            <input type="hidden">

                            <div class="add-skill-starts">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>

                            </div>

                            @error('editName')
                                {{$message}}
                            @enderror

                            <label for="">Interest</label>
                            <input type="hidden">

                            <div class="add-skill-starts">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>

                            </div>

                            @error('editName')
                                {{$message}}
                            @enderror

                            <label for="">Experience</label>
                            <select wire:model="YearsExperience">
                                <option value="1" {{ $YearsExperience == 1 ? 'selected' : '' }} >1</option>
                                <option value="2" {{ $YearsExperience == 2 ? 'selected' : '' }} >2</option>
                                <option value="3" {{ $YearsExperience == 3 ? 'selected' : '' }} >3</option>
                            </select>

                            @error('EditExperience')
                                {{$message}}
                            @enderror

                            
                            <label for="">Add Justification</label>
                            <textarea wire:model="Justification" class="text-area-s" cols="30" rows="10">{{ $Justification }}</textarea>
                            
                        </form>
                        
                        <div class="add-skill-buttons">
                            
                            <button type="submit" class="blue-button" wire:click="update">Save</button>
                            
                            <button class="gray-button" wire:click="editViewSwitch('')">Cancel</button>
                        
                        </div>


                    </div>

                </div>

            @endif

            <!--  -->

            <button class="blue-button" wire:click="skillSwitch">+ Add Skill</button>

            
            <div class="skill-tap">

                <div class="add-skill {{ $addSkillView ? '' : 'hidden-add-skill' }}">

                    <div class="add-skill-container">

                        <h3>Add Skill</h3>

                        <form method="POST" wire:submite.prevent="submit">

                            @csrf

                            <label for="">Skill Name</label>
                            <input type="text" wire:model.defer="skill">

                                @error('skill')
                                    {{$message}}
                                @enderror

                            <label for="">Proficiency</label>
                            <input type="hidden" wire:model.defer="proficiency">

                            <div class="add-skill-starts">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>

                            </div>

                            @error('Proficiency')
                                {{ $message }}
                            @enderror
                
                            <label for="">Interest</label>
                            <input type="hidden" wire:model.defer="interest">

                            <div class="add-skill-starts">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>
                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                                </svg>

                            </div>

                            @error('Interest')
                                {{ $message }}
                            @enderror


                            <label for="">Experience</label>
                            <select wire:model.defer="YearsExperience" id="">
                                <option value="1"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>

                            @error('YearsExperience')
                                {{ $message }}
                            @enderror

                            
                            <label for="">Add Justification</label>
                            <textarea wire:model.defer="Justification" class="text-area-s" cols="30" rows="10"></textarea>

                            
                            
                        </form>
                        
                        <div class="add-skill-buttons">
                            
                            <button type="submit" wire:click="submit" class="blue-button {{ strlen($skillCount) > 0 ? '' : '' }}">Save</button>
                            
                            <button class="gray-button" wire:click="skillSwitch">Cancel</button>
                        
                        </div>


                    </div>

                </div>

                <!--  -->


            </div>

    </div>

</div>

<!-- 
<div class="add-skill {{ $addSkillView ? '' : 'hidden-edit-skill' }}">

    <div class="add-skill-container">

        <h3>Add Skill</h3>

        <form action="{{ route('update.skills.post') }}" method="POST" wire:submite.prevent="">

            @csrf

            <label for="">Skill Name</label>
            <input type="text" wire:model.live="skillCount" name="skill" value="">



            <label for="">Proficiency</label>
            <input type="hidden" name="Proficiency">

            <div class="add-skill-starts">

                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>

            </div>


            <label for="">Interest</label>
            <input type="hidden" name="Interest">

            <div class="add-skill-starts">

                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>
                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path d="M12 17.163l5.562 3.337-1.476-6.29L21 9.978l-6.471-.546L12 3.5 9.471 9.432 3 9.978l4.914 4.232-1.476 6.29z"></path>
                </svg>

            </div>


            <label for="">Experience</label>
            <select name="YearsExperience" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            
            <label for="">Add Justification</label>
            <textarea name="" class="text-area-s" cols="30" rows="10"></textarea>

            
        </form>

        <div class="add-skill-buttons">

            <button type="submit" class="blue-button {{ strlen($skillCount) > 0 ? '' : 'x' }}">Save</button>
            
            <button class="gray-button" wire:click="skillSwitch">Cancel</button>
        
        </div>


    </div>

</div> -->