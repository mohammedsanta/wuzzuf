<div>
    <section class="cv main-p-c">

        @if(!count(auth()->user()->cv()->get()))

            <img src="/pic/cv.svg" alt="">

            <form action="{{ route('update.profile.cv.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="blue-button" name="cv">
                <input type="submit" class="blue-button" value="Upload Your CV">

            </form>

            <div class="cv-validation">

                <p class="cv-validation-p1">Drag and drop files here or click here to</p>
                <p class="cv-validation-p2">Supported files: <b>.docx</b>, <b>.doc</b> or <b>.pdf</b>, with maximum size of 5MB</span></p>

            </div>

        @else

        <div class="cv-uploaded">You last updated your CV on Sunday, November 26, 2023.
            <a href="{{Storage::Url(auth()->user()->cv()->get()[0]->cv)}}" class="cv-uploaded-preview">Preview CV</a>|
            <p class="cv-uploaded-delete" wire:click="delete"> Delete!</p>
        </div>

        @endif

    </section>
</div>
