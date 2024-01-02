<div>
    
    <button class="change" wire:click="butPhoto">Change</button>

    <div class="change-photo-container {{ $photo ? '' : 'change-photo-container-hide' ; }} ">

        <div class="change-photo">

            <div class="change-photo-x" wire:click="butPhoto">x</div>
    
            <div class="change-photo-img">
                <img src="{{ $profile ? Storage::Url($profile->picture) : '/pic/wuzzuf.jpg' }}" alt="">
            </div>
    
            <form action="{{ route('company.profile.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="picture">
                <button type="submit" class="blue-button">Change</button>
            </form>
    
        </div>

    </div>

    <button class="delete">Delete</button>

</div>
