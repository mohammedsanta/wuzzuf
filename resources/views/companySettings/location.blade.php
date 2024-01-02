@extends('companySettings.bar')

@section('companySettings.content')

    <section class="profile-general-info">

        

        
        <div class="profile-general-info-photo">

        <form action="{{ route('company.location.post') }}" method="POST">

            <div class="your-location">

                <h4>Company Location</h4>

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

            @csrf
            <button type="submit" class="profile-general-info-button">Save Changes</button>
        </form>


    </section>

@endsection