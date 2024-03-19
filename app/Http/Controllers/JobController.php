<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Job;
use App\Models\User;
use App\Models\Skill;
use App\Models\Company;
use App\Models\JobDetails;
use App\Models\JobQuestion;
use App\Models\UserSavedJob;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateQuestion;
use App\Http\Requests\JobDetailsRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('explore',[
            'jobs' => Job::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function applications()
    {
        return view('applications');
    }

    /**
     * Display a listing of the resource.
     */
    public function archive()
    {
        return view('archive');
    }

    // public function question($id)
    // {
    //     $job = Job::find($id);
    //     return view('job.jobQuestion',[
    //         'job' => $job,
    //         'questions' => $job->question()->get()
    //     ]);
    // }

    public function viewcreateQuestion()
    {
        return view('company.createJob.createQuestionsOfJob');
    }

    public function applicationPost()
    {
        $data = request()->except('_token');

        foreach($data as $key => $answer) {
            $id = substr($key,-1);
            JobQuestion::find($id)->answer()->create(['Answer' => $answer]);
        }

        return redirect('/job');
    }

    /**
     * Display a listing of saved resource.
     */
    public function saved()
    {
        $saves = UserSavedJob::where('user_id',auth()->user()->id)->get();
        $jobs = [];

        foreach($saves as $key => $item) {
            $jobs[$key] = Job::find($item->job_id);
        }

        return view('saved',[
            'jobs' => $jobs,
            'drafts' => $jobs,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function ourjobs()
    {

        $companyId = Auth::guard('company')->user()->id;

        $jobs = Company::find($companyId)->jobs()->get();

        return view('job.ourjobs',[
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // old view
        // return view('job.create-job');
        return view('job.create-job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobRequest $request,JobDetailsRequest $requestJobDetails)
    {
        // create job and his details

        dd(request()->all());

        $companyId = Auth::guard('company')->user()->id;

        $job = $request->validated();
        $job['company_id'] = $companyId;
        $jobDetails = $requestJobDetails->validated();
        
        $createdJob = Company::find($companyId)->job()->create($job);

        $createdJob->jobDetails()->create($jobDetails);
        

        //////////////////////


        // create skill belong to the job

        $skillsData = $requestJobDetails->skills;

        $string = '';
        $skills = [];

        for($i = 0;$i < strlen($skillsData);$i++) {

            if($skillsData[$i] != ',') {
                $string .= $skillsData[$i];
            } else {
                $skills[] = $string;
                $string = '';
            }

        }

        $skillModel = new Skill;

        foreach($skills as $skill) {
            $findSkill = Skill::where('name',$skill)->get();
            
            if(count($findSkill)) {
                $findSkill = $findSkill[0]->id;
                $createdJob->skills()->attach([$findSkill]);

            } else {
                // $skillModel->name = $skill;
                // $createdJob->skills()->save($skillModel);

                
                $nameOfSkill = $skillModel->create(['name' => $skill]);
                $createdJob->skills()->attach([$nameOfSkill->id]);

            }
        }

        if(request('questions') == 'yes') {
            return redirect("job/question/create/$createdJob->id");
        }

        return redirect('/posts/jobs');
    }

    public function questionView($id)
    {
        $job = Job::find($id);
        return view('job.createQuestion',[
            'JobId' => $id
        ]);
    }

    public function questionCreate($id)
    {
        
        $data = request()->except('_token');

        for($i = 0;$data['questions'] > $i;$i++) {

            Job::find($id)->question()->create([
                'Question' => $data["Question$i"],
                'Type' => $data["Type$i"],
            ]);

        }

        return redirect('/job');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::find($id);

        // dd(hasSkill());

        // dd($job->created_at->format('d/m/Y H-i'),date('d/m/Y H-i'));

        return view('job.show',[
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
