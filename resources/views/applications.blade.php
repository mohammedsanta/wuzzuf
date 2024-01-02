@extends('header.header')

@section('content')

    <section class="applications">

        @include('header.applicationsHeader')

        <div class="application-container">

            @if(false)

                <div class="applications-have-not">

                    <img class="applications-container-have-not-img" src="/pic/applications.svg" alt="">
                    
                    <h3 class="applications-container-have-not-h3">You haven't applied to any jobs yet !</h3>
                    
                    <p class="applications-container-have-not-p">Start exploring jobs now and find your next opportunity</p>

                    <button class="blue-button applications-container-have-not-button">Explor jobs</button>

                </div>

            @else

                <div class="applications-apps">

                    <div class="applications-app">

                        <div class="applications-app-img">
                            <img src="/pic/wuzzuf.jpg" alt="">
                        </div>

                        <div class="applications-app-info">

                            <h3 class="applications-app-info-title">Senior Backend Developer PHP / Laravel</h3>

                            <div class="applications-app-info-address">
                                <p class="applications-app-info-address-p">
                                    Sulfah Maadi ,cairo
                                </p>
                            </div>

                            <div class="applications-app-info-applied">
                                
                                <p class="applications-app-info-applied-p">Applied</p>

                                <p class="applications-app-info-applied-time">69 hours</p>

                            </div>

                            <div class="applications-app-before"></div>

                        </div>

                        <div class="applications-app-data">

                            <p class="applications-app-data-title">Senior Backend Developer PHP / Laravel</p>

                            <div class="applications-app-data-address">
                                <p class="applications-app-data-address-p">
                                    <a href="" class="applications-app-data-address-p-company-name">Sulfah</a>
                                    Maadi ,cairo
                                </p>
                            </div>

                            <p class="applications-app-data-posted">Posted 12 days ago</p>

                            <div class="applications-app-data-details">

                                <div class="applications-app-data-details-container">

                                    <p class="applications-app-data-details-num">93</p>
                                    
                                    <p class="applications-app-data-details-applicants">Applicants 2 vacancies</p>

                                </div>

                                <div class="applications-app-data-details-info">

                                    <div>

                                        <p class="applications-app-data-details-info-num">69</p>
                                        <p class="applications-app-data-details-info-viewd">Viewed</p>

                                    </div>

                                    <div>

                                        <p class="applications-app-data-details-info-num">69</p>
                                        <p class="applications-app-data-details-info-consideration">In Consideration</p>

                                    </div>

                                    <div>

                                        <p class="applications-app-data-details-info-num">69</p>
                                        <p class="applications-app-data-details-info-not-selected">Not Selected</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @endif

        </div>        


    </section>

@endsection