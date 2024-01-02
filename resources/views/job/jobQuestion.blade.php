@extends('header.header')


@section('content')

    <section class="job-question">

        <div class="job-question-container">

            <div class="job-question-tip">
                <h5>Tip</h5>
                <p>Your answers reflect your vital skills and experience. Providing excellent answers sets you apart from the competition.</p>
            </div>

            <form action="{{ route('job.application.post') }}" method="POST" class="job-question-form">
                @csrf
                <div class="job-question-form-top-header">

                    <p class="job-question-form-top-header-p">Application Form</p>

                    <a href="" class="job-question-form-top-header-view-job">View job details</a>

                </div>

                <div class="job-question-form-container">

                    <div class="job-question-form-job-about">

                        <div class="job-question-form-job-about-title-p">
                            
                            <h3 class="job-question-form-job-about-title">{{ $job->job }}</h3>
                            
                            <p class="job-question-form-job-about-p">The hiring team at Bydotpy requires you to answer the below questions.</p>

                        </div>

                        <div class="job-question-form-job-about-img">
                            <img src="{{ Storage::Url($job->company()->get()[0]->profile()->get()[0]->picture) }}" alt="">
                        </div>

                    </div>

                    <div class="job-question-form-questions">

                        @foreach($questions as $key => $question)
                            {{$key}}
                            @include('job.questions.TypeQuestion',[
                                'type' => $question->Type,
                                'question' => $question->Question,
                                'id' => $question->id
                                ])

                        @endforeach

                    </div>

                    <p class="job-question-form-p">Draft application saved Sun, December 10 2023 6:21 PM</p>

                </div>

                <div class="job-question-form-buttons">

                    <button class="job-question-form-buttons-cancel gray-button">
                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#4D6182" d="M14.787 19l1.713-1.645L10.937 12 16.5 6.645 14.787 5 7.5 12z"></path>
                        </svg>    
                        Cancel
                    </button>

                    <div class="job-question-form-buttons-submit-save">

                        <button class="gray-button">Save and Apply later</button>
                        
                        <button class="blue-button">Submit application</button>

                    </div>
                    
                </div>
                
            </form>

        </div>

    </section>

@endsection