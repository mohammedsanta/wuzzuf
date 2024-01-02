@extends('profile.bar')

@section('profile.content')

    <section class="achievements">

        <div class="main-p-c additional-info">

            <div class="additional-info-title">

                <h3>Achievements</h3>

                <p>Sports, patents, publications, books, awards, etc.</p>

            </div>

            <form action="{{ route('update.achievements.post') }}" method="POST">
                @csrf
                <div class="additional-info-add">
                    
                    <p>Add Achievements</p>
                    
                    <textarea name="Achievements" id="" cols="30" rows="10">{{ $achievements->Achievements }}</textarea>
                    
                </div>

                <p class="additional-info-limit">You have 1000 characters remaining (max 1000)</p>
    
                <button class="blue-button">Save Changes</button>

            </form>            

        </div>

    </section>

@endsection