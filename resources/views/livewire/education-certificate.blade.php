<div>

    <div class="main-p-c certifications">

        <h3>Certifications</h3>

        <div class="university-degrees-container">
            
            @foreach($certificates as $certificate)

                <div class="university-degrees-about">

                    <div class="university-degrees-about-buts">

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="edit({{$certificate}})">
                            <path fill="#808EA5" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                        </svg>

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" wire:click="remove({{$certificate->id}})">
                            <path fill="#808EA5" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>

                    </div>

                    <h4>{{$certificate->Certificate}} (Score {{$certificate->Result}} out of {{$certificate->Out}})</h4>

                    <hr>

                    <p>{{$certificate->University}}</p>

                    <p>{{$certificate->EndYear}}</p>

                </div>

            @endforeach

        </div>

        <button class="blue-button" wire:click="CertificateSwitch">+ Add Certificate</button>

    </div>

    @if($CertificateView)

        <div class="add-certificate">

            <div class="add-certificate-container">

                <h3>Add Certificate</h3>

                <form action="" method="POST" wire:submit.prevent="">

                    <div class="add-certificate-child">

                        <label for="">Certificate Name*</label>
                        <input type="text" wire:model="Certificate" placeholder="e.g., CISSP, PMP, ...">

                    </div>

                    <div class="add-certificate-date">
                            
                        <label for="">Date Awarded *</label>

                        <div>
                            <select wire:model="AwardedMonth">
                                <option value="">Select...</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>


                            <select wire:model="AwardedYear">
                                <option value="">Select...</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>

                        </div>

                    </div>

                    <div class="add-certificate-child">

                        <label for="">Organization/institution Name</label>
                        <input type="text" wire:model="Organization" placeholder="e.g., AUC">

                    </div>

                    <div class="add-certificate-score">
                            
                        
                        <div>
                            <label for="">Result/score</label>
                            <input type="text" wire:model="Result" placeholder="90">
                        </div>

                        <div>
                            <label for="">Out of</label>
                            <input type="text" wire:model="Out" placeholder="100">
                        </div>

                    </div>

                    <div class="add-certificate-child">
                        <label for="">Result/Score Link</label>
                        <input type="text" wire:model="ScoreLink">
                        <p class="max">If applicable</p>
                    </div>

                    <div class="add-certificate-child">
                        <label for="">Certificate ID/Number</label>
                        <input type="text" wire:model="CertificateID">
                    </div>

                    <div class="add-certificate-child">

                        <label for="">Additional Info</label>
                        <textarea wire:model="Additional" class="text-area-s" cols="30" rows="10" placeholder="Describe what the certificate was about in detail"></textarea>
                        <p class="max">You have 250 characters remaining (max 250)</p>

                    </div>

                    <div class="add-certificate-buttons">
                                
                        <button type="submit" wire:click="submit" class="blue-button ">Save</button>
                        
                        <button class="gray-button" wire:click="CertificateSwitch">Cancel</button>
                    
                    </div>

                </form>

            </div>

        </div>

    @endif

</div>
