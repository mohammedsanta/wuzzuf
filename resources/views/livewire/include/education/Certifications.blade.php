<!-- <div class="main-p-c certifications">

<h3>Certifications</h3>

<button class="blue-button" wire:click="CertificateSwitch">+ Add Certificate</button>

</div>

@if($CertificateView)

    <div class="add-certificate">

        <div class="add-certificate-container">

            <h3>Add Certificate</h3>

            <form action="" method="POST">

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
                            
                    <button type="submit" wire:click="" class="blue-button ">Save</button>
                    
                    <button class="gray-button" wire:click="">Cancel</button>
                
                </div>

            </form>

        </div>

    </div>

@endif -->