@extends('header.header')

@section('content')

    <section class="profile">

        @if(session('success'))
            <p class="create-done">{{session('success')}}</p>
        @endif

        <h1 class="profile-title">Company Profile</h1>

        <div class="profile-data">


            
            <div class="profile-personal-data">
                
                <p>Username: Mohammed Samy</p>
                <p>Email: mohammedsamy@gmail.com</p>
                
            </div>
            
            <div class="profile-img">
                {{ $profile ? '' : 'Complete Your Profile' }}
                <img src="{{ $profile ? Storage::Url($profile->picture) : '' }}" alt="">
            </div>
        
        </div>

        @if($profile)
    
            <div class="profile-cv">


                
                <div class="profile-cv-data">
                    
                    <p>{{$profile->field}}</p>
                    <p>{{$profile->degree}}</p>
                    
                </div>

            </div>

        @else

            <div class="profile-cv-create">

                <form action="{{ route('profile.storeCompany') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="">Field</label>
                    <input type="text" name="field" id="">

                    @error('field')
                        {{$message}}
                    @enderror
                    
                    <label for="">CV</label>
                    <input type="file" name="cv" id="">

                    @error('cv')
                        {{$message}}
                    @enderror

                    <label for="">Picture</label>
                    <input type="file" name="picture" id="">

                    @error('picture')
                        {{$message}}
                    @enderror

                    <input type="submit" value="Create">

                </form>

            </div>

        @endif

    </section>

@endsection