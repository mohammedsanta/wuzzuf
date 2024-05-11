<?php

namespace App\Livewire\Company;

use App\Models\Job;
use Livewire\Component;
use App\Models\JobQuestion;

class CreateJobQuestions extends Component
{

    public $job;
    public $gender = 'NoPreference';
    public $EducationLevel = 'NotSpecified';
    public $note = true;
    public $switch = true;
    public $preview = false;
    public $changeEmail = false;
    public $deleteQuestionAppear = false;
    public $quesWantDelete;
    public $editQuestionButton = false;
    public $indexQuestion;
    
    // questions

    public $filter = 'All';
    public $appearAddQuestion = false;
    public $questionsAdded = [['question' => 'What makes you the ideal candidate for this position?','edit' => false]];
    public $enough = false;
    public $theQuestion;
    
    // for validation

    public $CompanyConfidential = false;
    public $SendEmail = true;
    public $Duration = 'Daily';
    public $AcademicExcellence = false;
    public $Email;

    public function mount()
    {
        $id = explode('/',parse_url(request()->url())['path'])[4];
        $this->job = Job::find($id);
        $this->Email = auth('company')->user()->email;
    }

    public $rules = [
        'CompanyConfidential' => 'sometimes',
        'SendEmail' => 'sometimes',
        'Duration' => 'sometimes',
        'Email' => 'sometimes'
    ];

    public function save()
    {

        $data = $this->validate();
        $data['gender'] = $this->gender;
        $data['EducationLevel'] = $this->EducationLevel;
        $data['AcademicExcellence'] = $this->AcademicExcellence;

        $this->job->additional()->create($data);

        // Create Questions

        foreach($this->questionsAdded as $num => $item) {

            $this->job->question()->create([
                'Question' => $item['question'],
                'Type' => 'Text'
            ]);

        }


        // redirect

        return redirect()->route('job.show',$this->job->id);

    }

    public function switchAddQuestion()
    {
        $this->appearAddQuestion ? $this->appearAddQuestion = false : $this->appearAddQuestion = true;
    }

    public function deleteQuestionAppearSwitch($index = '')
    {
        $this->deleteQuestionAppear ? $this->deleteQuestionAppear = false : $this->deleteQuestionAppear = true;
        $this->quesWantDelete = $index;
    }

    public function deleteQuestion()
    {
        unset($this->questionsAdded[$this->quesWantDelete]);
        $this->deleteQuestionAppearSwitch();
        $this->checkEnough();
    }

    public function appearEditQuestion($index)
    {

        $this->theQuestion = $this->questionsAdded[$index]['question'];

        $this->questionsAdded[$index]['edit'] = true;

    }

    public function saveEditQuestion($index)
    {
        $this->questionsAdded[$index]['question'] = $this->theQuestion;
        $this->questionsAdded[$index]['edit'] = false;
    }

    public function candelEdit($index)
    {
        $this->questionsAdded[$index]['edit'] = false;
    }

    public function addQuestionToTable()
    {
        array_push($this->questionsAdded,['question' => $this->theQuestion,'edit' => false]);
        $this->switchAddQuestion();
        $this->theQuestion = null;
    }

    public function editQuestionFromTable()
    {
        $this->questionsAdded[$this->indexQuestion] = $this->theQuestion;
        $this->switchAddQuestion();
    }

    public function disappearNote()
    {
        $this->note ? $this->note = false : $this->note = true;
    }

    public function switchEmail()
    {
        $this->changeEmail ? $this->changeEmail = false : $this->changeEmail = true;
    }

    public function setFilter($data)
    {
        $this->filter = $data;
    }
    
    public $svg = [
        'text' => '<svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24" class="svg-selected">
        <path fill="#0055D9" d="M10.875 16.25a1.125 1.125 0 110 2.25h-6.75a1.125 1.125 0 110-2.25zm9-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 010-2.25zm0-3.75a1.125 1.125 0 010 2.25H4.125a1.125 1.125 0 110-2.25zm0-3.75a1.125 1.125 0 110 2.25H4.125a1.125 1.125 0 110-2.25z"></path>
        </svg>',
        'right' => '<svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
        <path fill="#4D6182" d="M5.612 5.652C7.379 3.884 9.509 3 12 3s4.614.877 6.368 2.632C20.123 7.386 21 9.509 21 12c0 2.491-.877 4.614-2.632 6.368C16.614 20.123 14.491 21 12 21c-2.491 0-4.614-.877-6.368-2.632C3.877 16.614 3 14.491 3 12c0-2.491.87-4.607 2.612-6.348zM16.62 8.987c.026-.027.04-.067.04-.12 0-.081-.014-.135-.04-.162l-1.246-.964c-.027-.027-.08-.04-.16-.04-.054 0-.094.013-.121.04l-4.46 5.746a935.15 935.15 0 0 1-1.808-1.728c-.08-.08-.16-.12-.241-.12-.027 0-.08.04-.16.12l-1.046 1.045c-.026.026-.04.08-.04.16 0 .054.014.094.04.12l.08.041a3364.35 3364.35 0 0 1 3.175 3.054c.08.08.147.12.2.12.054 0 .121-.04.202-.12l5.585-7.192z"></path>
        </svg>',
        'mic' => '<svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
        <path fill="#4D6182" d="M17.34 11.661c.375 0 .662.275.662.635 0 2.944-2.295 5.422-5.34 5.74v1.693h2.405c.376 0 .662.276.662.636s-.286.635-.662.635H8.934c-.375 0-.662-.275-.662-.635s.287-.636.662-.636h2.405v-1.694C8.294 17.718 6 15.24 6 12.296c0-.36.287-.635.662-.635s.662.275.662.635c0 2.478 2.096 4.49 4.677 4.49 2.581 0 4.677-2.012 4.677-4.49 0-.36.287-.635.662-.635zM12 3c2.03 0 3.685 1.588 3.685 3.536v5.76c0 1.949-1.654 3.537-3.684 3.537-2.03-.021-3.684-1.588-3.684-3.558V6.536C8.317 4.588 9.97 3 12 3z"></path>
        </svg>'
    ];

    public $questions = [
        'What makes you the ideal candidate for this position?',
        'Please introduce yourself in English',
        'Do you have a car?',
        'What are you expecting of this internship? What do you aim to learn?',
        'Why do you want to join our company?',
        'Do you have your own laptop?',
        'Tell us about yourself. What makes you unique from other candidates?',
        'Tell us briefly about yourself. and your working experience.',
        'Are you willing to relocate?',
        'What are your salary expectations?',
        'Are you willing to start immediately?',
        'If hired, what would you need to know to be the most effective in your role?',
        'Have you ever used ------ (add product or tool)?',
        'If we offered you a position, when would you be available to start?',
        'Can you provide us with a sample of your work?',
        'How many years of experience do you have in ------?',
        'What do you know about our company?',
        'Why do you want to join our company?',
        'Describe your current job responsibilities',
        'Rate your English level from 1 to 5',
        'Why are you looking for a new job?',
        'What is the largest team that you’ve managed?',
        'Please edit the following paragraph for spelling and grammar mistakes. (Let’s get a grammatically incorrect paragraph and use it).',
        'How does this position fit in with your long-term goals?',
        'What is your long term career aspiration?',
        'What skills or knowledge would make you better at your current role?',
        'Given the option, what project would you choose: one that matches your current skills and knowledge and requires you leading a team, or one where you’ll work on something less familiar but you’ll be able to collaborate with colleagues?',
        'What do you need to do to achieve your professional goals?',
        'What is the biggest challenge you’ve faced in your current or previous role? How did you overcome this challenge? What was the outcome?',
        'Do you prefer working alone or as part of a team? Why?',
        'Describe the type of work environment in which you are most productive.',
        'How do you prefer to get feedback from your manager: through formal performance reviews or daily/weekly meetings? Why?',
        'What would you say or do to motivate your team during a challenging project?',
        'How would you change an institutional “this is how we always do it” attitude, if you felt there was a better approach?',
        'Please describe your managerial style.',
        'Please describe your personality.',
        'How would you react if a team leader encouraged competition between team members instead of collaboration?',
        'What does your perfect manager look like? Have you ever had a manager who was close to this ideal or fit it exactly?',
        'Give me an example of a time you made a process more efficient. How did you do it?',
        'Have you ever missed an important deadline? What happened? What would you do differently if given the chance?',
        'What would you do if you disagreed with a colleague about how you should approach a project or deal with a problem at work?',
        'Have you ever been assigned with a task you were not familiar with? How did you handle it? Did you ask for help or did you try to find a solution by yourself?',
        'How do you typically manage projects and prioritize tasks?',
        'Tell me about a time someone criticized your work. How did you respond and what did you learn?',
        'How would you resolve a dispute between two colleagues?',
        'Tell me about a time you had a conflict with your supervisor. How did you resolve it?',
    ];

    public function addQuestion($data)
    {
        array_push($this->questionsAdded,['question' => $data,'edit' => false]);
        $this->checkEnough();
    }

    public function checkEnough()
    {
        if(count($this->questionsAdded) == 7) {
            $this->enough = true;
        } else {
            $this->enough = false;
        }
    }

    // end question

    public function previewAppearing()
    {
        $this->preview ? $this->preview = false : $this->preview = true;
    }

    public function switchClicked()
    {
        $this->switch ? $this->switch = false : $this->switch = true;
    }

    public function updateGender($data)
    {
        $this->gender = $data;
    }

    public function updateEducationLevel($data)
    {
        $this->EducationLevel = $data;
    }

    public function render()
    {
        return view('livewire.company.create-job-questions');
    }
}
