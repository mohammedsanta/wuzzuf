@extends('header.header')


@section('content')

    <section class="job-question">

        <div class="job-question-container">

            <div class="job-question-tip">
                <h5>Tip</h5>
                <p>Your answers reflect your vital skills and experience. Providing excellent answers sets you apart from the competition.</p>
            </div>

            <form action="{{ route('job.question.create.post',['id' => $JobId]) }}" method="POST" class="job-question-form">

                @csrf
                                
                <div class="job-question-form-top-header">

                    <p class="job-question-form-top-header-p">Application Form</p>

                    <a href="" class="job-question-form-top-header-view-job">View job details</a>

                </div>

                <div class="job-question-form-container">

                    <div class="job-question-form-job-about">

                        <div class="job-question-form-job-about-title-p">
                            
                            <h3 class="job-question-form-job-about-title">Backend Developer "Node.Js"</h3>
                            
                            <p class="job-question-form-job-about-p">The hiring team at Bydotpy requires you to answer the below questions.</p>

                        </div>

                        <div class="job-question-form-job-about-img">
                            <img src="/pic/wuzzuf.jpg" alt="">
                        </div>

                    </div>

                    @livewire('CreateQuestions')

                    <p class="job-question-form-p">Draft application saved Sun, December 10 2023 6:21 PM</p>


                </div>

                <button class="blue-button job-question-create-submit">Create</button>
                
            </form>

        </div>

    </section>

@endsection