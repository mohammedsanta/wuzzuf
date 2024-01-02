@extends('companySettings.bar')

@section('companySettings.content')

    <section class="profile-general-info">

        <div class="profile-general-info-photo">

            <div class="profile-general-info-photo-conatiner">

                <div class="profile-general-info-img">
                    <img src="/pic/wuzzuf.jpg" alt="">
                </div>
        
                <div class="profile-general-info-img-process">

                    
                    <h3 class="profile-general-info-img-process-h3">Company Photo</h3>
                    
                    <p class="profile-general-info-img-process-size">You can upload a .jpg, .png, or .gif photo with max size of 5MB.</p>
                    
                    <div class="profile-general-info-img-process-buttons">

                        @livewire('company-settings')
                        
                    </div>
                
                    
                </div>
            
            </div>

            <form action="{{ route('company.profile.post',auth()->user()->id) }}" method="POST">
            
        </div>

        <div class="your-personal-info">

            <h3 class="your-personal-info-h3">Company Info</h3>

            <div class="your-personal-info-name">

                <div class="your-personal-info-personal">
    
                    <label for="">First Name</label>
    
                    <input type="text" name="FirstName" value="">
    
                </div>
    
                <div class="your-personal-info-personal">
    
                    <label for="">Last Name</label>
    
                    <input type="text" name="LastName" value="">
    
                </div>

            </div>

            <div class="your-personal-info-personal">
    
                <label for="">Company name</label>

                <input type="text" name="CompanyName" value="{{ $company->company }}">

            </div>

            <div class="your-personal-info-personal">
    
                <label for="">Field</label>

                <input type="text" name="Field" value="{{ $profile->field ?? '' }}">

            </div>

            <div class="your-personal-info-birthdate">

                <h4>Creation Date</h4>

                <!-- <div class="your-personal-info-birthdate-container">
                    
                    <input type="date" name="Birthday" value="">
                
                </div> -->

            </div>

            <!-- <div class="nationality">
    
                <h4>Nationality</h4>

                <select name="Nationality" id="">
    

                        <option value=""></option>


                </select>
    
            </div> -->


        </div>

        <div class="your-location">

            <h4>Company Profile</h4>

            <div class="input-select">

                <label for="">Industry</label>

                <input type="text" name="Industry" value="{{ $profile->Industry ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">Company Size</label>

                <input type="text" name="CompanySize" value="{{ $profile->CompanySize ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">Company About</label>

                <textarea name="CompanyAbout" id="" cols="30" rows="10" class="text-area-s">{{ $profile->CompanyAbout ?? '' }}</textarea>

            </div>

        </div>

        <div class="your-contact-info">

            <h4>
                Your Contact Info
                <span>
                    — Hint: Companies will be contacting you on this number
                </span>
            </h4>

            <div class="input-select">

                <label for="">Mobile Number</label>

                <input class="input-background" type="text" name="MobileNumber" value="{{ $profile->MobileNumber ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">Alternative Number</label>

                <!-- <input class="input-background" type="text" name="AlternativeNumber" value=""> -->

            </div>

        </div>

            @csrf
            <button type="submit" class="profile-general-info-button">Save Changes</button>
        </form>


    </section>

@endsection