@extends('header.header')

@section('content')

    <section class="company-profile">

        <div class="company-profile-top main-p-c">

            <div class="company-profile-top-container">
                
                <div class="company-profile-top-cover">

                </div>

                <div class="company-profile-top-about">

                    <div class="company-profile-top-about-img">
                        <img src="{{ $profile ? Storage::Url($profile->picture) : '/pic/wuzzuf.jpg' }}" alt="">
                    </div>

                    <div class="company-profile-top-about-data">

                        <h4 class="company-profile-top-company-name">{{ $company->company }}</h4>

                        <div class="company-profile-top-about-data-p">
                            <p class="company-profile-top-about-field">{{ $profile->Industry }} {{ $location->Country }} {{ $location->City }}</p>
                            <p class="company-profile-top-about-count-employees">{{ $profile->CompanySize }}</p>
                        </div>

                        <div class="company-profile-top-about-links">

                            <div class="company-profile-top-about-links-site">

                                <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                                    <path fill="#4D6182" d="M23 11.979c0 1.458-.268 2.834-.804 4.127a10.945 10.945 0 01-2.209 3.41 11.323 11.323 0 01-3.291 2.38 10.643 10.643 0 01-4.214 1.05c-.064.008-.125.011-.182.011H12c-1.515 0-2.941-.29-4.278-.868a11.166 11.166 0 01-3.495-2.359 11.2 11.2 0 01-2.359-3.484A10.57 10.57 0 011 11.979c0-1.516.29-2.938.868-4.267a11.2 11.2 0 012.36-3.485 11.166 11.166 0 013.494-2.359A10.646 10.646 0 0112 1h.3c.057 0 .118.004.182.01a10.643 10.643 0 014.213 1.05c1.259.609 2.356 1.402 3.292 2.382.937.979 1.673 2.115 2.209 3.409.536 1.294.804 2.67.804 4.128zm-2.037 3.538a9.56 9.56 0 00.665-3.538c0-.658-.065-1.298-.193-1.92a9.973 9.973 0 00-.536-1.769l.257.708c-.043.014-.311.086-.804.214-.493.13-1.269.258-2.327.386.043.386.079.776.108 1.17a17.82 17.82 0 01-.021 2.734c-.044.5-.094.985-.151 1.457.83.1 1.487.204 1.973.311.486.107.829.19 1.029.247zm-13.83-3.538c0 .5.021.986.064 1.458.043.471.1.936.171 1.393a55.502 55.502 0 011.812-.107c.65-.028 1.355-.05 2.112-.064v-4.76a50.906 50.906 0 01-4.01-.15c-.042.357-.078.721-.107 1.093-.028.372-.042.75-.042 1.137zm5.532-9.52v6.089a77.14 77.14 0 002.047-.065 49.705 49.705 0 001.727-.107 15.925 15.925 0 00-.633-2.155 9.48 9.48 0 00-.868-1.769 6.099 6.099 0 00-1.073-1.286c-.385-.343-.786-.58-1.2-.708zm-1.373.02c-.414.13-.814.369-1.2.719s-.74.779-1.062 1.286a10.074 10.074 0 00-.868 1.759 15.207 15.207 0 00-.643 2.133c.528.043 1.107.079 1.736.107.63.029 1.308.05 2.037.065V2.48zm0 13.552c-.7.014-1.35.032-1.95.054-.601.021-1.159.053-1.673.096.171.686.386 1.326.643 1.92.257.593.543 1.118.858 1.575.314.458.65.84 1.007 1.148a3.33 3.33 0 001.115.654V16.03zm1.373 5.468a3.137 3.137 0 001.125-.633 5.74 5.74 0 001.019-1.147c.314-.457.597-.986.847-1.586.25-.6.461-1.251.632-1.952-.5-.043-1.054-.075-1.661-.096-.608-.022-1.262-.04-1.962-.054V21.5zm0-6.84c.757.014 1.461.036 2.112.064.65.029 1.247.065 1.79.107.072-.457.129-.922.172-1.393a16.105 16.105 0 00.021-2.595 29.396 29.396 0 00-.107-1.115c-.543.057-1.147.1-1.812.129-.665.028-1.39.043-2.176.043v4.76zm7.976-6.926a9.463 9.463 0 00-1.994-2.702 9.73 9.73 0 00-2.809-1.865c.443.629.836 1.376 1.18 2.24.343.865.614 1.812.814 2.842.858-.1 1.516-.204 1.973-.311.458-.108.736-.175.836-.204zM8.72 2.95c-.6.215-1.165.483-1.694.804a9.715 9.715 0 00-1.48 1.105c-.457.414-.875.868-1.254 1.361a9.184 9.184 0 00-.975 1.576c.186.057.514.129.986.215.472.085 1.1.171 1.887.257.243-1.1.586-2.101 1.03-3.002.442-.9.943-1.672 1.5-2.316zM2.823 9.084c-.143.457-.254.929-.333 1.415a9.25 9.25 0 00-.118 1.48c0 .614.054 1.211.161 1.79.107.579.268 1.133.483 1.662.214-.043.571-.111 1.072-.204.5-.093 1.15-.182 1.951-.268-.086-.472-.15-.958-.193-1.458a17.82 17.82 0 01-.064-1.522c0-.4.01-.801.032-1.201.021-.4.06-.786.118-1.158-.93-.1-1.648-.204-2.155-.311a12.013 12.013 0 01-.954-.225zm.793 7.612c.286.5.611.968.976 1.404a9.942 9.942 0 002.573 2.188 8.285 8.285 0 001.554.718 9.493 9.493 0 01-1.383-2.059c-.407-.8-.74-1.686-.997-2.659-.672.072-1.23.147-1.672.226-.443.078-.794.139-1.051.182zm12.222 4.095a9.76 9.76 0 002.573-1.65 9.408 9.408 0 001.93-2.38 13.542 13.542 0 00-.965-.204 30.88 30.88 0 00-1.672-.247c-.2.9-.461 1.73-.783 2.487a10.89 10.89 0 01-1.083 1.994z"></path>
                                </svg>

                                <a href="">{{ $links->Website }}</a>

                            </div>

                            <div class="company-profile-top-about-links-social">
                            
                                <a href="https://{{ $links->Facebook }}">
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#4D6182" d="M16.261 4.113v2.525l-1.498.004c-1.175 0-1.401.558-1.401 1.374v1.806h2.798l-.363 2.826h-2.435V20h-2.919v-7.352H8V9.822h2.443V7.74C10.443 5.319 11.918 4 14.08 4c1.03 0 1.92.078 2.181.113z"></path>
                                    </svg>
                                </a>

                                <a href="https://{{ $links->LinkedIn }}">
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#4D6182" d="M20 20h-3.288v-5.6c0-1.535-.583-2.392-1.798-2.392-1.322 0-2.012.892-2.012 2.393V20H9.733V9.333h3.169v1.437s.952-1.763 3.216-1.763c2.262 0 3.882 1.382 3.882 4.24V20zM5.954 7.937A1.961 1.961 0 014 5.968C4 4.881 4.874 4 5.954 4a1.96 1.96 0 011.953 1.968 1.96 1.96 0 01-1.953 1.969zM4.318 20H7.62V9.333H4.318V20z"></path>
                                    </svg>
                                </a>

                                <a href="https://{{ $links->Instagram }}">
                                    <svg width="24" height="24" preserveAspectRatio="none" viewBox="0 0 24 24">
                                        <path fill="#4D6182" d="M12.282 1.999h.264l.903.002c1.446.004 1.836.02 2.674.058 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.903 4.903 0 011.153 1.772c.247.636.417 1.363.465 2.427.012.267.022.488.03.713l.006.194c.014.46.02.988.023 1.971v.45l.001.249v1.342l-.001.45c-.004 1.615-.019 2.002-.059 2.878-.048 1.064-.218 1.791-.465 2.427a4.903 4.903 0 01-1.153 1.772 4.903 4.903 0 01-1.772 1.153c-.636.247-1.363.417-2.427.465-.876.04-1.263.055-2.878.059h-.45l-.249.001h-1.341l-.45-.001a72.07 72.07 0 01-1.972-.023l-.194-.006a68.623 68.623 0 01-.713-.03c-1.064-.048-1.791-.218-2.427-.465a4.903 4.903 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427a49.599 49.599 0 01-.058-2.674l-.002-.903V11.718v-.265l.002-.903a49.6 49.6 0 01.058-2.674c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.524c.636-.247 1.363-.416 2.427-.465a49.6 49.6 0 012.674-.058l.903-.002H12zM12 6.864a5.135 5.135 0 100 10.271 5.135 5.135 0 000-10.271zm0 1.802a3.334 3.334 0 110 6.667 3.334 3.334 0 010-6.667zm5.338-3.205a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z"></path>
                                    </svg>
                                </a>

                            </div>

                        </div>

                    </div>
                    
                </div>
                
                <div class="company-profile-top-category">

                    <a href="" class="company-profile-top-category-f">Company Profile</a>
                    <a href=""  class="company-profile-top-category-s">Jobs</a>

                </div>

            </div>

        </div>

        <div class="company-profile-bottom">

            <div class="company-profile-bottom-contianer">

                <div class="company-profile-bottom-profile main-p-c">

                    <h3>Company Profile</h3>

                    <div class="company-profile-bottom-profile-data">

                        <div>

                            <p class="company-profile-p"><span class="company-profile-span">Location:</span> {{ $location->City }}, {{ $location->Country }}</p>
                            
                            <p class="company-profile-p"><span class="company-profile-span">Industry:</span> {{ $profile->Industry }}</p>

                        </div>

                        <div>
                            
                            <p class="company-profile-p"><span class="company-profile-span">Founded:</span> 2014</p>
                            
                            <p class="company-profile-p"><span class="company-profile-span">Specialities:</span> Computer Software . Information Technology Services . Management Consulting</p>

                        </div>

                    </div>

                    <div class="company-profile-bottom-profile-some-data">

                        <p class="company-profile-p"><span class="company-profile-span">Company Size:</span>{{ $profile->CompanySize }}</p>
                        
                        <p class="company-profile-bottom-profile-about">{{ $profile->CompanyAbout }}</p>

                    </div>

                </div>

                <div class="company-profile-bottom-jobs main-p-c">

                    <h4>Open vacancies at InnovaDigits</h4>

                    <div class="company-profile-bottom-jobs-container">

                        @foreach($jobs as $job)

                        <div class="company-profile-bottom-jobs-container-job">

                            <p class="company-profile-bottom-jobs-container-job-title">{{ $job->job }} <span>{{ count($job->company()->get()[0]->location()->get()) > 0 ? $job->company()->get()[0]->location()->get()[0]->City . ' - ' . $job->company()->get()[0]->location()->get()[0]->Country : 'Location Not Added Yet' }}</span></p>

                            <div class="company-profile-bottom-jobs-container-job-type">

                                <p>Full time</p>
                                <p>Work from home</p>

                            </div>


                            <div class="company-profile-bottom-jobs-containerjob-tags">
                                <a href="https://wuzzuf.net/a/AWS-Jobs-in-Egypt" class="css-hhob9c">AWS · </a>
                                <a href="https://wuzzuf.net/a/Computer-Science-Jobs-in-Egypt" class="css-hhob9c">Computer Science · </a>
                                <a href="https://wuzzuf.net/a/Design-Jobs-in-Egypt" class="css-hhob9c">Design · </a>
                                <a href="https://wuzzuf.net/a/Information-Technology-IT-Jobs-in-Egypt" class="css-hhob9c">Information Technology (IT) · </a>
                                <a href="https://wuzzuf.net/a/Java-Jobs-in-Egypt" class="css-hhob9c">Java · </a>
                                <a href="https://wuzzuf.net/a/MySQL-Jobs-in-Egypt" class="css-hhob9c">MySQL · </a>
                                <a href="https://wuzzuf.net/a/PHP-Jobs-in-Egypt" class="css-hhob9c">PHP · </a>
                                <a href="https://wuzzuf.net/a/Programming-Jobs-in-Egypt" class="css-hhob9c">Programming · </a>
                                <a href="https://wuzzuf.net/a/Python-Jobs-in-Egypt" class="css-hhob9c">Python · </a>
                                <a href="https://wuzzuf.net/a/Software-Jobs-in-Egypt" class="css-hhob9c">Software · </a>
                                <a href="https://wuzzuf.net/a/Software-Development-Jobs-in-Egypt" class="css-hhob9c">Software Development · </a>
                                <a href="https://wuzzuf.net/a/Software-Engineering-Jobs-in-Egypt" class="css-hhob9c">Software Engineering · </a>
                                <span class="company-profile-bottom-jobs-containerjob-tags-date-create">5 days ago</span>
                            </div>

                            

                        </div>

                        @endforeach

                    </div>

                </div>

            </div>


            <div class="company-profile-bottom-explore main-p-c">

                <h4>Explore jobs tailored to you!</h4>

                <p>Explore more jobs recommended for you and tailored to your career interests.</p>

                <button>Explore jobs</button>

            </div>


        </div>
    
    </section>

@endsection