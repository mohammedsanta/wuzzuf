<div>
    
    <label for="">Skills</label>    

    <div class="skills-input">

        <input type="text" wire:model.live="name" placeholder="Search Skills">

        @if(strlen($name))

            <p wire:click="addNewSkill()">add</p>

        @endif

    </div>

    <div class="search-skills">
    
        <div class="search-skills-found">

            @foreach($lists as $list)

                <div wire:click='addSkill($event.target.innerText)'>{{$list->name}}</div>

            @endforeach

        </div>

        <p>Skills Added</p>

        <div class="search-skills-added">

            @foreach($added as $item)

                <div wire:click="removeSkill($event.target.innerText)">{{$item}}</div>

            @endforeach

        </div>

    </div>

    <input type="hidden" name="skills" value="{{ implode(',',$added) }}">

</div>
