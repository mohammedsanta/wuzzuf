<div style="
    width: 100%;
">
    
    <form action="" wire:submit.prevent="" method="POST" style="
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
">

        <div class="about-questions box-style-job">

            <h3>Screening Questions</h3>

            <div class="about-questions-note">

                <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" class="about-questions-note-mic">
                    <g fill="none" fill-rule="evenodd"><g><circle fill="#267BFF" opacity="0.3" cx="14" cy="14" r="14"></circle><circle fill="#76ACFF" opacity="0.5" cx="14" cy="14" r="11.375"></circle></g>
                    <path d="M20.23 13.605c.437 0 .772.32.772.74 0 3.435-2.677 6.326-6.229 6.696v1.977h2.806c.437 0 .772.32.772.74s-.335.742-.772.742h-7.156c-.437 0-.772-.321-.772-.741s.335-.741.772-.741h2.806V21.04C9.677 20.671 7 17.78 7 14.346c0-.42.335-.741.772-.741.438 0 .772.32.772.74 0 2.891 2.446 5.239 5.457 5.239 3.011 0 5.457-2.348 5.457-5.238 0-.42.334-.741.772-.741Z" fill="#0055D9" fill-rule="nonzero"></path>
                    <path d="M14.001 3.5c2.368 0 4.298 1.853 4.298 4.126v6.72c0 2.273-1.93 4.126-4.298 4.126-2.368-.025-4.298-1.853-4.298-4.15V7.625C9.703 5.353 11.633 3.5 14 3.5Z" stroke="#0055D9" stroke-width="0.5" fill="#F0F5FF"></path>
                    <path d="M15.313 10.5h3.062v.875h-3.063a.437.437 0 1 1 0-.875ZM13.563 14h4.812v.875h-4.813a.437.437 0 1 1 0-.875ZM14.438 12.25h3.937v.875h-3.938a.437.437 0 1 1 0-.875Z" fill="#0055D9"></path></g>
                </svg>

                <p><strong>NEW!</strong> Screen your applicants faster and add <strong>Voice questions</strong> to start receiving audio answers from potential candidates!</p>

                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" class="about-questions-note-x">
                    <path fill="#00327F" d="M14.238 12L20 17.762 17.763 20 12 14.237 6.238 20 4 17.763 9.764 12 4 6.236l2.236-2.235h.002l5.763 5.762L17.764 4l2.235 2.236v.002L14.238 12z"></path>
                </svg>

            </div>

            <div class="questions">

                @foreach($questionsAdded as $question)

                    <div class="question">

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" class="q-style">
                            <path fill="#001433" d="M10.875 16.25a1.125 1.125 0 110 2.25h-6.75a1.125 1.125 0 110-2.25zm9-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 010-2.25zm0-3.75a1.125 1.125 0 010 2.25H4.125a1.125 1.125 0 110-2.25zm0-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 110-2.25z"></path>
                        </svg>

                        <p class="ques">What makes you the ideal candidate for this position?</p>

                        <div class="question-actions">

                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                            </svg>

                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M19 3.984V6H5V3.984h3.488L9.522 3h4.98l1.034.984H19zm-13.014 15v-12h12.028v12c0 .544-.2 1.016-.602 1.416-.4.4-.874.6-1.419.6H8.007c-.545 0-1.018-.2-1.42-.6-.4-.4-.6-.872-.6-1.416z"></path>
                            </svg>

                        </div>

                    </div>

                @endforeach

            </div>

            
            <div class="about-questions-add">
                
                <div class="preview {{ $preview ? 'preview-appearing' : ''; }}">

                    <div class="preview-top">

                        <h2 class="preview-title">

                            <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#ffffff" d="M12 6c-4.09 0-7.585 2.488-9 6 1.415 3.512 4.91 6 9 6s7.585-2.488 9-6c-1.415-3.512-4.91-6-9-6zm0 10c-2.258 0-4.09-1.792-4.09-4S9.741 8 12 8s4.09 1.792 4.09 4-1.832 4-4.09 4zm0-6.4c-1.358 0-2.455 1.072-2.455 2.4 0 1.328 1.097 2.4 2.455 2.4s2.455-1.072 2.455-2.4c0-1.328-1.097-2.4-2.455-2.4z"></path>
                            </svg>

                            <span>Screening Questions Preview</span>

                        </h2>

                        <button class="preview-top-x" wire:click.prevent="previewAppearing()">
                            <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#ffffff" d="M19.5 6.011L17.989 4.5 12 10.489 6.011 4.5 4.5 6.011 10.489 12 4.5 17.989 6.011 19.5 12 13.511l5.989 5.989 1.511-1.511L13.511 12z"></path>
                            </svg>
                        </button>

                    </div>


                    <div class="preview-show">

                        <div class="preview-show-text">

                            <h3 class="preview-show-text-job-title">Web</h3>

                            <p class="preview-show-text-p">
                                The hiring team at santa also requires that you answer the below questions.
                                Providing excellent answers significantly increases your chances of being selected for an interview.
                            </p>

                        </div>

                        <div class="preview-show-questions">

                            @foreach($questionsAdded as $ques)

                                <div class="preview-show-questions-question">

                                    <p class="preview-show-questions-p">{{ $ques }}</p>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Write your answer here..."></textarea>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

                @if($appearAddQuestion)

                    <div class="about-questions-add-question">


                        <div class="ques-type">

                            <h6 class="ques-type-p">Question type: <span class="try">TRY IT FOR FREE</span></h6>

                        </div>

                        <div class="about-questions-add-buttons">

                            <button class="selected">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" class="svg-selected">
                                    <path fill="#0055D9" d="M10.875 16.25a1.125 1.125 0 110 2.25h-6.75a1.125 1.125 0 110-2.25zm9-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 010-2.25zm0-3.75a1.125 1.125 0 010 2.25H4.125a1.125 1.125 0 110-2.25zm0-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 110-2.25z"></path>
                                </svg>

                                Free text

                            </button>

                            <button class="not-selected">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M5.612 5.652C7.379 3.884 9.509 3 12 3s4.614.877 6.368 2.632C20.123 7.386 21 9.509 21 12c0 2.491-.877 4.614-2.632 6.368C16.614 20.123 14.491 21 12 21c-2.491 0-4.614-.877-6.368-2.632C3.877 16.614 3 14.491 3 12c0-2.491.87-4.607 2.612-6.348zM16.62 8.987c.026-.027.04-.067.04-.12 0-.081-.014-.135-.04-.162l-1.246-.964c-.027-.027-.08-.04-.16-.04-.054 0-.094.013-.121.04l-4.46 5.746a935.15 935.15 0 0 1-1.808-1.728c-.08-.08-.16-.12-.241-.12-.027 0-.08.04-.16.12l-1.046 1.045c-.026.026-.04.08-.04.16 0 .054.014.094.04.12l.08.041a3364.35 3364.35 0 0 1 3.175 3.054c.08.08.147.12.2.12.054 0 .121-.04.202-.12l5.585-7.192z"></path>
                                </svg>

                                Yes/No

                            </button>

                            <button class="not-selected">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M17.34 11.661c.375 0 .662.275.662.635 0 2.944-2.295 5.422-5.34 5.74v1.693h2.405c.376 0 .662.276.662.636s-.286.635-.662.635H8.934c-.375 0-.662-.275-.662-.635s.287-.636.662-.636h2.405v-1.694C8.294 17.718 6 15.24 6 12.296c0-.36.287-.635.662-.635s.662.275.662.635c0 2.478 2.096 4.49 4.677 4.49 2.581 0 4.677-2.012 4.677-4.49 0-.36.287-.635.662-.635zM12 3c2.03 0 3.685 1.588 3.685 3.536v5.76c0 1.949-1.654 3.537-3.684 3.537-2.03-.021-3.684-1.588-3.684-3.558V6.536C8.317 4.588 9.97 3 12 3z"></path>
                                </svg>

                                Voice

                            </button>

                        </div>

                    
                        <div class="the-question">

                            <textarea name="" id="" cols="30" rows="10"></textarea>

                            <p class="the-question-count">300</p>

                        </div>

                        <div class="about-questions-add-actions">

                            <button class="blue-button">Save</button>
                            <button class="gray-button" wire:click="switchAddQuestion()">Cancel</button>

                        </div>

                        
                    </div>

                @endif

                <div class="about-questions-add-question-buttons">

                    @if(!$enough)

                        <button class="black-button {{ $enough ? 'about-questions-add-question-buttons-enough' : 'about-questions-add-question-buttons' ; }}" wire:click="switchAddQuestion()">
                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#ffffff" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                            </svg>
                            Add Question
                        </button>

                    @else

                        <button class="black-button {{ $enough ? 'about-questions-add-question-buttons-enough' : 'about-questions-add-question-buttons' ; }}" wire:click.prevent="">
                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#ffffff" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                            </svg>
                            Add Question
                        </button>

                    @endif
    
                    <button class="gray-button" wire:click.prevent="previewAppearing()">Preview Question</button>

                </div>

            </div>


            <div class="table-questions">

                <div class="table-questions-top">

                    <p class="table-questions-top-title">Suggested Questions:</p>

                    <div class="table-questions-top-filter-question">

                        <button class="gray-button {{ $filter == 'All' ? 'filter-question-selected' : '' ; }}" wire:click="setFilter('All')">All</button>

                        <button class="gray-button {{ $filter == 'FreeText' ? 'filter-question-selected' : '' ; }}" wire:click="setFilter('FreeText')">

                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M10.875 16.25a1.125 1.125 0 110 2.25h-6.75a1.125 1.125 0 110-2.25zm9-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 010-2.25zm0-3.75a1.125 1.125 0 010 2.25H4.125a1.125 1.125 0 110-2.25zm0-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 110-2.25z"></path>
                            </svg>

                            Free Text

                        </button>

                        <button class="gray-button {{ $filter == 'YesNo' ? 'filter-question-selected' : '' ; }}" wire:click="setFilter('YesNo')">

                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M5.612 5.652C7.379 3.884 9.509 3 12 3s4.614.877 6.368 2.632C20.123 7.386 21 9.509 21 12c0 2.491-.877 4.614-2.632 6.368C16.614 20.123 14.491 21 12 21c-2.491 0-4.614-.877-6.368-2.632C3.877 16.614 3 14.491 3 12c0-2.491.87-4.607 2.612-6.348zM16.62 8.987c.026-.027.04-.067.04-.12 0-.081-.014-.135-.04-.162l-1.246-.964c-.027-.027-.08-.04-.16-.04-.054 0-.094.013-.121.04l-4.46 5.746a935.15 935.15 0 0 1-1.808-1.728c-.08-.08-.16-.12-.241-.12-.027 0-.08.04-.16.12l-1.046 1.045c-.026.026-.04.08-.04.16 0 .054.014.094.04.12l.08.041a3364.35 3364.35 0 0 1 3.175 3.054c.08.08.147.12.2.12.054 0 .121-.04.202-.12l5.585-7.192z"></path>
                            </svg>

                            Yes/No
                            
                        </button>

                        <button class="gray-button {{ $filter == 'Voice' ? 'filter-question-selected' : '' ; }}" wire:click="setFilter('Voice')">

                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#4D6182" d="M17.34 11.661c.375 0 .662.275.662.635 0 2.944-2.295 5.422-5.34 5.74v1.693h2.405c.376 0 .662.276.662.636s-.286.635-.662.635H8.934c-.375 0-.662-.275-.662-.635s.287-.636.662-.636h2.405v-1.694C8.294 17.718 6 15.24 6 12.296c0-.36.287-.635.662-.635s.662.275.662.635c0 2.478 2.096 4.49 4.677 4.49 2.581 0 4.677-2.012 4.677-4.49 0-.36.287-.635.662-.635zM12 3c2.03 0 3.685 1.588 3.685 3.536v5.76c0 1.949-1.654 3.537-3.684 3.537-2.03-.021-3.684-1.588-3.684-3.558V6.536C8.317 4.588 9.97 3 12 3z"></path>
                            </svg>
                            
                            Voice

                        </button>

                    </div>

                </div>

                <div class="table-questions-select-question">

                    @foreach($questions as $ques)

                    @if(!$enough)

                        <div class="{{ $enough ? 'table-questions-select-question-ques-enough' : 'table-questions-select-question-ques' ; }}" wire:click="addQuestion(`{{$ques}}`)">

                            @include('company.createJob.text')

                            {{$ques}}

                        </div>

                    @else

                        <div class="{{ $enough ? 'table-questions-select-question-ques-enough' : 'table-questions-select-question-ques' ; }}">

                            @include('company.createJob.text')

                            {{$ques}}

                        </div>

                    @endif

                    @endforeach

                </div>

            </div>


        </div>

        <div class="job-options box-style-job">

            <h3 class="jobo-options-title">Job Options</h3>

            <div class="company-confidential">

                <div class="company-confidential-input">

                    <input type="checkbox" wire:model="KeepCompany">

                    <p>Keep company confidential.</p>

                </div>

                <p class="company-confidential-p">Hide company name, logo, and profile.</p>

            </div>

            <div class="send-email">

                <div class="send-email-input">

                    <input type="checkbox" wire:model="SendNotifications" checked>

                    <p>Send me email notifications when there are good candidates.</p>

                </div>

                <div class="send-email-radio">

                    <input type="radio" wire:model="Daily" checked>
                    <label for="">Daily</label>

                    <input type="radio" wire:model="Weekly">
                    <label for="">Weekly</label>

                </div>

            </div>

            <div class="recipient-email">

                <label class="title">Recipient Email</label>

                <div class="email-editor">

                    <p class="email">test@test.test</p>

                    <button>Change Email Address</button>

                </div>

            </div>

        </div>

        @if($switch)

            <div class="advanced box-style-job">

                <div class="advanced-left">

                    <h3 class="title">Advanced Settings</h3>

                    <p>Used to provide better candidate recommendations or filter applications. Important for technical jobs</p>

                </div>

                <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="switchClicked()">
                    <path fill="#001433" d="M17.355 7.5L12 13.063 6.645 7.5 5 9.213l7 7.287 7-7.287z"></path>
                </svg>

            </div>

        @else

            <div class="advanced box-style-job">

                <div class="advanced-left">

                    <h3 class="title">Advanced Settings</h3>

                    <p>All the below requirements are optional. If you don't need them, skip them. However, It can help us provide you with much better candidate recommendations especially if this job is for a technical position.</p>

                </div>

                <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24" class="svg-clicked"  wire:click="switchClicked()">
                    <path fill="#001433" d="M12 7.5l-7 7.287L6.645 16.5 12 10.937l5.355 5.563L19 14.787z"></path>
                </svg>

                <div class="avanced-selects">

                    <h3 class="avanced-selects-title">Gender</h3>

                    <div class="avanced-selects-container">

                        <div class="{{ $gender == 'NoPreference' ? 'selects-selected' : 'not-selected' }} " wire:click="updateGender('NoPreference')">
                            <p>No Preference</p>
                        </div>

                        <div class="{{ $gender == 'MalesOnly' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateGender('MalesOnly')">
                            <p>Males Only</p>
                        </div>

                        <div class="{{ $gender == 'FemalesOnly' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateGender('FemalesOnly')">
                            <p>Females Only</p>
                        </div>

                        <div class="{{ $gender == 'MalesPreferred' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateGender('MalesPreferred')">
                            <p>Males Preferred</p>
                        </div>

                        <div class="{{ $gender == 'FemalesPreferred' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateGender('FemalesPreferred')">
                            <p>Females Preferred</p>
                        </div>

                    </div>

                </div>

                <div class="avanced-selects">

                    <h3 class="avanced-selects-title">Education Level</h3>

                    <div class="avanced-selects-container">

                        <div class="{{ $EducationLevel == 'NotSpecified' ? 'selects-selected' : 'not-selected' }} " wire:click="updateEducationLevel('NotSpecified')">
                            <p>Not Specified</p>
                        </div>

                        <div class="{{ $EducationLevel == 'HighSchool' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateEducationLevel('HighSchool')">
                            <p>High School (or equivalent)</p>
                        </div>

                        <div class="{{ $EducationLevel == 'FemalesOnly' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateEducationLevel('FemalesOnly')">
                            <p>Diploma</p>
                        </div>

                        <div class="{{ $EducationLevel == 'MalesPreferred' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateEducationLevel('MalesPreferred')">
                            <p>Bachelor's Degree</p>
                        </div>

                        <div class="{{ $EducationLevel == 'MasterDegree' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateEducationLevel('MasterDegree')">
                            <p>Master's Degree</p>
                        </div>

                        <div class="{{ $EducationLevel == 'Doctorate' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateEducationLevel('Doctorate')">
                            <p>Doctorate</p>
                        </div>

                        <div class="{{ $EducationLevel == 'MBA' ? 'selects-selected' : 'not-selected' }} "  wire:click="updateEducationLevel('MBA')">
                            <p>MBA</p>
                        </div>

                    </div>

                </div>

                <div class="advanced-academic">

                    <div class="advanced-academic-input">

                        <input type="checkbox" name="" id="">

                        <p>Keep company confidential.</p>

                    </div>

                    <p class="advanced-academic-p">(i.e. job seeker with excellent and very good grade will be preferred)</p>

                </div>

            </div>

        @endif

        <div class="additional-buttons">

            <button class="transpare-button" wire:click.prevent="">

                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path fill="#4D6182" d="M14.787 19l1.713-1.645L10.937 12 16.5 6.645 14.787 5 7.5 12z"></path>
                </svg>

                back

            </button>

            <div class="right">

                <button class="transpare-button" wire:click.prevent="">Save and post later</button>

                <div class="blue-button" wire:click="save">Post now</div>

            </div>

        </div>

    </form>

</div>
