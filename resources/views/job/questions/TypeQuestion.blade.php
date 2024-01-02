@if($type == 'Textarea')

    <div class="job-question-form-questions-question-textatea">

        <label class="job-question-form-questions-question-the-ques">{{$question}}</label>

        <textarea class="job-question-form-questions-question-the-text" name="answer{{$id}}" id="" style="height: 73px;"></textarea>

        <span class="job-question-form-questions-question-num-strings">500</span>

    </div>

@else

    <div class="job-question-form-questions-question-radio">

        <label for="">{{$question}}</label>

        <div>

            <input type="radio" name="answer{{$id}}" value="Yes">
            <label for="">Yes</label>

            <input type="radio" name="answer{{$id}}" value="No">
            <label for="">No</label>

        </div>

    </div>

@endif