@extends('profile.bar')
@extends('profile.countries')


@section('profile.content')

    <section class="profile-general-info">

        
        <div class="profile-general-info-photo">

            <div class="profile-general-info-photo-conatiner">

                <div class="profile-general-info-img">
                    <img src="/pic/wuzzuf.jpg" alt="">
                </div>
        
                <div class="profile-general-info-img-process">

                    
                    <h3 class="profile-general-info-img-process-h3">Profile Photo</h3>
                    
                    <p class="profile-general-info-img-process-size">You can upload a .jpg, .png, or .gif photo with max size of 5MB.</p>
                    
                    <div class="profile-general-info-img-process-buttons">
                        
                        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="picture" class="change">

                            @error('picture')
                                {{$message}}
                            @enderror
                            <button class="change">Change</button>

                        </form>

                        <button class="delete">Delete</button>
                        
                    </div>
                
                    
                </div>
            
            </div>
            
        </div>
        
        <form action="{{ route('profile.update',auth()->user()->id) }}" method="POST">


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
                    
                    <input type="date" name="Birthday" value="{{ $info->Birthday ?? '' }}">
                
                </div>

                @error('Birthday')
                    {{ $message }}
                @enderror

            </div>


            <div class="gender">

                <h4>Gender</h4>

                <div class="gender-container">
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="Gender" value="male" {{ $info->Gender ?? '' == 'male' ? 'checked' : '' }} >
                        
                        <p>Male</p>
                        
                    </div>

                    @error('Gender')
                    {{ $message }}
                    @enderror
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="Gender" value="femail" {{ $info->Gender ?? '' == 'female' ? 'checked' : '' }} >
                        
                        <p>Female</p>
                        
                    </div>

                    @error('Gender')
                    {{ $message }}
                    @enderror
                    
                </div>
            
            </div>

            <div class="nationality">
    
                <h4>Nationality</h4>

                <select name="Nationality" id="">
    
                    @foreach($companies as $compamy)

                        <option value="{{$compamy}}" {{ $info->Nationality ?? ''  == $compamy ? 'selected' : '' }} >{{$compamy}}</option>

                    @endforeach

                </select>

                @error('Nationality')
                    {{ $message }}
                @enderror
    
            </div>

            <div class="gender">

                <h4>Marital Status</h4>

                <div class="gender-container">
                    
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="MaritalStatus" value="Unspecified" id="" {{ $info->MaritalStatus ?? '' == 'Unspecified' ? 'checked' : '' }}>
                        
                        <p>Unspecified</p>
                        
                    </div>

                    @error('MaritalStatus')
                    {{ $message }}
                    @enderror
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="MaritalStatus" value="Single" id="" {{ $info->MaritalStatus ?? '' == 'Single' ? 'checked' : '' }}>
                        
                        <p>Single</p>
                        
                    </div>

                    @error('MaritalStatus')
                    {{ $message }}
                    @enderror

                    <div class="gender-type">
                        
                        <input type="radio" name="MaritalStatus" value="Married" id="" {{ $info->MaritalStatus ?? '' == 'Married' ? 'checked' : '' }}>
                        
                        <p>Married</p>
                        
                    </div>

                    @error('MaritalStatus')
                    {{ $message }}
                    @enderror
                    
                </div>

            </div>

            <div class="nationality">
    
                <h4>Number of Dependents</h4>

                <select name="NumberDependents">

                    @for($i = 1;$i <= 20;$i++)

                        <option value="{{$i}}" {{ $info->NumberDependents ?? '' == $i ? 'selected' : '' }} >{{$i}}</option>

                    @endfor

                </select>

                @error('NumberDependents')
                    {{ $message }}
                @enderror

            </div>

            
            <div class="nationality">
    
                <h4>Military Status</h4>

                <select name="MilitaryStatus">

                    <option value="Not Applicable" {{ $info->MilitaryStatus ?? '' == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
                    <option value="Exempted" {{ $info->MilitaryStatus ?? '' == 'Exempted' ? 'selected' : '' }}>Exempted</option>
                    <option value="Completed" {{ $info->MilitaryStatus ?? '' == 'Completed' ? 'selected' : '' }}>Completed</option>
                    <option value="Postponed" {{ $info->MilitaryStatus ?? '' == 'Postponed' ? 'selected' : '' }}>Postponed</option>

                </select>

                @error('MilitaryStatus')
                    {{ $message }}
                @enderror

            </div>

            <div class="gender">

                <h4>Do you have a driving license?</h4>

                <div class="gender-container">
                    
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="License" value="Yes" {{ $info->License ?? '' == 'Yes' ? 'checked' : '' }}>
                        
                        <p>Yes</p>
                        
                    </div>

                    @error('License')
                        {{ $message }}
                    @enderror
                    
                    <div class="gender-type">
                        
                        <input type="radio" name="License" value="No" {{ $info->License ?? '' == 'No' ? 'checked' : '' }}>
                        
                        <p>No</p>
                        
                    </div>

                    @error('License')
                        {{ $message }}
                    @enderror
                    
                </div>

            </div>


        </div>

        <div class="your-location">

            <h4>Your Location</h4>

            <div class="input-select">

                <label for="">Country</label>

                <input type="text" name="Country" value="{{ $location->Country ?? '' }}">

            </div>

            @error('Country')
                {{ $message }}
            @enderror

            <div class="input-select">

                <label for="">City</label>

                <input type="text" name="City" value="{{ $location->City ?? '' }}">

            </div>

            @error('City')
                {{ $message }}
            @enderror

            <div class="input-select">

                <label for="">Area</label>

                <input type="text" name="Area" value="{{ $location->Area ?? '' }}">

            </div>

            @error('Area')
                {{ $message }}
            @enderror

            <div class="input-select">

                <label for="">Your Postal Code</label>

                <input class="input-background" type="text" name="PostalCode" value="{{ $location->PostalCode ?? '' }}">

            </div>

            @error('PostalCode')
                {{ $message }}
            @enderror

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

            @error('MobileNumber')
                {{ $message }}
            @enderror

            <div class="input-select">

                <label for="">Alternative Number</label>

                <input class="input-background" type="text" name="AlternativeNumber" value="{{ $location->AlternativeNumber ?? '' }}">

            </div>

            @error('AlternativeNumber')
                {{ $message }}
            @enderror

        </div>

            @csrf
            <button type="submit" class="profile-general-info-button">Save Changes</button>
        </form>


    </section>

@endsection