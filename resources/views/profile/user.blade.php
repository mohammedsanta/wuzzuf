@extends('header.header')

@section('content')

    <section class="profile">

        <div class="user-data">

            <div class="user-data-about">


                
                <div class="user-data-img">
                    <img src="/pic/wuzzuf.jpg" alt="">
                </div>
                
                <div class="user-data-info">
                    
                    <p class="user-data-info-username">Username</p>
                    <p class="user-data-info-field">Backend Developer at Free Lancer</p>
                    <p class="user-data-info-location">Maadi, Cairo, Egypt</p>
                    
                </div>
                
            </div>

            <div class="user-data-info">

                <div class="user-data-info-container">

                    <div class="user-data-info-contact-info">
    
                        <h3 class="user-data-info-contact-info-h3">Contact Info:</h3>
    
                        <div class="user-data-info-contact-info-icon-p">
    
                            <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#001433" d="M15.792 16.902V5.451H8.167v11.451h7.625zm-3.802 3.255c.352 0 .65-.118.894-.353s.366-.523.366-.863c0-.34-.122-.63-.366-.872a1.223 1.223 0 00-.894-.363c-.353 0-.654.118-.905.353a1.16 1.16 0 00-.376.882c0 .353.122.644.366.873.244.228.549.343.915.343zM15.406 3c.366 0 .711.095 1.037.284.325.19.583.441.772.755.19.314.285.654.285 1.02V18.94c0 .366-.095.706-.285 1.02-.19.314-.447.565-.772.755-.326.19-.671.284-1.037.284H8.615a2.153 2.153 0 01-1.83-1.04 1.935 1.935 0 01-.285-1.019V5.06c0-.366.095-.706.285-1.02.19-.314.447-.565.772-.755.326-.19.678-.284 1.058-.284h6.79z"></path>
                            </svg>
    
                            <p class="user-data-info-contact-info-number">01112733081</p>
    
                        </div>
    
                        <div class="user-data-info-contact-info-icon-p">
    
                            <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#001433" d="M19.2 5H4.8c-.99 0-1.791.787-1.791 1.75L3 17.25c0 .962.81 1.75 1.8 1.75h14.4c.99 0 1.8-.788 1.8-1.75V6.75C21 5.787 20.19 5 19.2 5zm0 3.6L12 13.1 4.8 8.6V6.8l7.2 4.5 7.2-4.5v1.8z"></path>
                            </svg>
    
                            <p class="user-data-info-contact-info-email">mohammedsamy238@gmail.com</p>
    
                        </div>
    
                        <div class="user-data-info-contact-info-icon-p">
    
                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#0055D9" d="M5 18.867h14.776V21H5v-2.133zm4.214-2.132v-6.347H5L12.388 3l7.388 7.388H15.56v6.347H9.214z"></path>
                            </svg>
    
                            <p class="user-data-info-contact-info-cv">Upload CV</p>
    
                        </div>
    
                    </div>
    
                    <div class="user-data-info-general-info">

                        <h3 class="user-data-info-general-info-h3">General Info:</h3>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Age:</p>
                            <p class="value">22 years</p>
                        </div>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Experience:</p>
                            <p class="value">Less than 1 year · Experienced (Non-Manager)</p>
                        </div>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Minimum Salary:</p>
                            <p class="value">Confidential</p>
                        </div>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Job Search Status:</p>
                            <p class="value">Actively searching</p>
                        </div>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Nationality:</p>
                            <p class="value">Egypt</p>
                        </div>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Education Level:</p>
                            <p class="value">Bachelor's Degree</p>
                        </div>
    
                        <div class="user-data-info-general-info-title-value">
                            <p class="title">Gender:</p>
                            <p class="value">Male</p>
                        </div>
    
                    </div>

                    <div class="user-data-info-career-interests">

                        <h3 class="user-data-info-career-interests-h3">Career Interests:</h3>

                        <div class="user-data-info-career-interests-keywords">
                            <p class="title">Job Titles and Keywords:</p>
                            <p class="value">Backend Developer · Laravel Developer · Front End Developer · React.js Developer · Node.js Developer · Web Designer · Software Engineer</p>
                        </div>

                        <div class="user-data-info-career-interests-keywords">
                            <p class="title">Job Categories:</p>
                            <p class="value">IT/Software Development · Engineering - Telecom/Technology · Quality</p>
                        </div>

                        <div class="user-data-info-career-interests-keywords">
                            <p class="title">Job Types:</p>
                            <p class="value">Full Time · Part Time · Freelance / Project · Internship · Shift Based · Work From Home · Volunteering · Student Activity</p>
                        </div>

                    </div>

                </div>


            </div>

        </div>

        <div class="user-skills">

            <h3 class="user-skills-h3">Skills and tools:</h3>

            <div class="user-skills-container">

                @for($i=0;$i < 20;$i++)

                <div class="user-sklls-skill">
                    <p>Information Technology (IT)</p>
                </div>

                @endfor

            </div>

        </div>

        <div class="work-experiences">

            <h3 class="work-experiences-h3">Work Experience</h3>

            <div class="work-experiences-experience">

                <div class="work-experiences-experience-img">
                    <img src="https://static.wuzzuf-data.net/17368fc013ebebc488b5977f6222681e.svg" alt="">
                </div>

                <div class="work-experiences-experience-about">

                    <p class="experience-title">Backend Developer <span> Freelance / Project</span></p>
                    <p class="experience-type">Free Lancer</p>
                    <p class="experience-data">November 2021 - Present • 1 yr, 10 months</p>

                </div>
                

            </div>

        </div>

        <div class="education">

            <h3 class="education-h3">Education</h3>

            <div class="education-about">

                <h3 class="education-field">Bachelor's Degree in IT</h3>
                <p class="education-location">al mokatam institute</p>
                <p class="education-graduation">Jan 2023</p>
                
            </div>
    

        </div>


    <div class="profile-data">


        
        <div class="profile-personal-data">
            
            <p>Username: Mohammed Samy</p>
            <p>Email: mohammedsamy@gmail.com</p>
            
        </div>
        
        <div class="profile-img">
            <img src="http://127.0.0.1:8000/storage/companies/name-test_id-1/test.jpg" alt="">
        </div>

    </div>

    @if($profile)
    
        <div class="profile-cv">


            
            <div class="profile-cv-data">
                
                <p>{{$profile->field}}</p>
                <p>{{$profile->degree}}</p>
                
            </div>
            
            <div class="profile-to-cv">
                <a href="{{Storage::Url($profile->cv)}}">CV</a>
            </div>

        </div>

    @else

    <div class="profile-cv-create">

        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="">Field</label>
            <input type="text" name="field" id="">

            <label for="">Degree</label>
            <input type="text" name="degree" id="">

            
            <label for="">CV</label>
            <input type="file" name="cv" id="">

            <label for="">Picture</label>
            <input type="file" name="picture" id="">

            <input type="submit" value="Create">

        </form>

    </div>

    @endif

    </section>

@endsection