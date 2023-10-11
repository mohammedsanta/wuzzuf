@extends('profile.bar')
@extends('profile.countries')


@section('profile.content')

    <section class="profile-general-info">

        
        <form action="{{ route('profile.update',auth()->user()->id) }}" method="POST">

        
        <div class="profile-general-info-photo">

            <div class="profile-general-info-photo-conatiner">

                <div class="profile-general-info-img">
                    <img src="/pic/wuzzuf.jpg" alt="">
                </div>
        
                <div class="profile-general-info-img-process">

                    
                    <h3 class="profile-general-info-img-process-h3">Profile Photo</h3>
                    
                    <p class="profile-general-info-img-process-size">You can upload a .jpg, .png, or .gif photo with max size of 5MB.</p>
                    
                    <div class="profile-general-info-img-process-buttons">
                        
                        <button class="change">Change</button>
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                        
                    </div>
                
                    
                </div>
            
            </div>


            
        </div>

        <div class="immediate-hiring">

            <p class="immediate-hiring-title">Are you available for immediate hiring?</p>

            <p class="immediate-hiring-p">Let companies know you can start immediately by adding the Immediate start badge to your profile.</p>

        </div>

        <div class="your-personal-info">

            

            <h3 class="your-personal-info-h3">Your Personal Info</h3>

            <div class="your-personal-info-name">

                <div class="your-personal-info-personal">
    
                    <label for="">First Name</label>
    
                    <input type="text" name="FirstName" value="{{ $user->FirstName }}">
    
                </div>
    
                <div class="your-personal-info-personal">
    
                    <label for="">Last Name</label>
    
                    <input type="text" name="LastName" value="{{ $user->LastName }}">
    
                </div>

            </div>

            <div class="your-personal-info-birthdate">

                <h4>Birthday</h4>

                <div class="your-personal-info-birthdate-container">
                    
                    <input type="date" name="Birthday" value="{{ $info->Birthday }}">
                
                </div>

            </div>


            <div class="gender">

                <h4>Gender</h4>

                <div class="gender-container">
                    
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="Gender" value="male" {{ $info->Gender == 'male' ? 'checked' : '' }}>
                        
                        <p>Male</p>
                        
                    </div>
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="Gender" value="femail" {{ $info->Gender == 'female' ? 'checked' : '' }} >
                        
                        <p>Female</p>
                        
                    </div>
                    
                </div>
            
            </div>

            <div class="nationality">
    
                <h4>Nationality</h4>

                <select name="Nationality" id="">
    
                    @foreach($companies as $compamy)

                        <option value="{{$compamy}}" {{ $compamy == $info->Nationality ? 'selected' : '' }} >{{$compamy}}</option>

                    @endforeach

                </select>
    
            </div>

            <div class="gender">

                <h4>Marital Status</h4>

                <div class="gender-container">
                    
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="MaritalStatus" value="Unspecified" id="" {{ $info->MaritalStatus == 'Unspecified' ? 'checked' : '' }}>
                        
                        <p>Unspecified</p>
                        
                    </div>
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="MaritalStatus" value="Single" id="" {{ $info->MaritalStatus == 'Single' ? 'checked' : '' }}>
                        
                        <p>Single</p>
                        
                    </div>

                    <div class="gender-type">
                        
                        <input type="radio" name="MaritalStatus" value="Married" id="" {{ $info->MaritalStatus == 'Married' ? 'checked' : '' }}>
                        
                        <p>Married</p>
                        
                    </div>
                    
                </div>

            </div>

            <div class="nationality">
    
                <h4>Number of Dependents</h4>

                <select name="NumberDependents">

                    @for($i = 1;$i <= 20;$i++)

                        <option value="{{$i}}" {{ $i == $info->NumberDependents ? 'selected' : '' }} >{{$i}}</option>

                    @endfor

                </select>

            </div>

            
            <div class="nationality">
    
                <h4>Military Status</h4>

                <select name="MilitaryStatus">

                    <option value="Not Applicable" {{ 'Not Applicable' == $info->MilitaryStatus ? 'selected' : '' }}>Not Applicable</option>
                    <option value="Exempted" {{ 'Exempted' == $info->MilitaryStatus ? 'selected' : '' }}>Exempted</option>
                    <option value="Completed" {{ 'Completed' == $info->MilitaryStatus ? 'selected' : '' }}>Completed</option>
                    <option value="Postponed" {{ 'Postponed' == $info->MilitaryStatus ? 'selected' : '' }}>Postponed</option>

                </select>

            </div>

            <div class="gender">

                <h4>Do you have a driving license?</h4>

                <div class="gender-container">
                    
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="License" value="Yes" {{ $info->License == 'Yes' ? 'checked' : '' }}>
                        
                        <p>Yes</p>
                        
                    </div>
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="License" value="No" {{ $info->License == 'No' ? 'checked' : '' }}>
                        
                        <p>No</p>
                        
                    </div>
                    
                </div>

            </div>


        </div>

        <div class="your-location">

            <h4>Your Location</h4>

            <div class="input-select">

                <label for="">Country</label>

                <input type="text" name="Country" value="{{ $location->Country ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">City</label>

                <input type="text" name="City" value="{{ $location->City ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">Area</label>

                <input type="text" name="Area" value="{{ $location->Area ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">Your Postal Code</label>

                <input class="input-background" type="text" name="PostalCode" value="{{ $location->PostalCode ?? '' }}">

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

                <input class="input-background" type="text" name="MobileNumber" value="{{ $location->MobileNumber ?? '' }}">

            </div>

            <div class="input-select">

                <label for="">Alternative Number</label>

                <input class="input-background" type="text" name="AlternativeNumber" value="{{ $location->AlternativeNumber ?? '' }}">

            </div>

        </div>

            @csrf
            <button type="submit" class="profile-general-info-button">Save Changes</button>
        </form>


    </section>

@endsection