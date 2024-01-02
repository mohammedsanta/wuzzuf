<div>
   
    <div class="job-questions-create-container">
        <input type="hidden" name="questions" value="{{$questions}}">

        @for($i = 0;$i < $questions;$i++)

            <div class="job-questions-create">

                <div class="job-questions-create-question">

                    <label class="job-questions-create-question-question-label">What is The Question Would You Ask</label>
                    <input class="job-questions-create-question-question" type="text" name="Question{{$i}}">

                    <label class="job-questions-create-question-question-type">Type Of Question</label>
                    <select name="Type{{$i}}" class="job-questions-create-question-select">
                        <option value="">...</option>
                        <option value="Textarea">Text Area</option>
                        <option value="Radio">Yes No Question</option>
                    </select>

                </div>

        </div>

        @endfor

    </div>

    <buttom class="blue-button" wire:click="add">Add Question</buttom>
    <buttom class="gray-button" wire:click="remove">Remove Question</buttom>

</div>
