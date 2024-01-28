@extends('company.main.header')

@section('content')

    <section class="search-cv">

        <div class="search-cv-top">

            <div class="top-title-tips">

                <h2 class="title">Search Candidates CVs</h2>

                <div class="tips">
                
                    <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#ffffff" d="M12 3c-4.968 0-9 4.032-9 9s4.032 9 9 9 9-4.032 9-9-4.032-9-9-9zm.9 13.5h-1.8v-5.4h1.8v5.4zm0-7.2h-1.8V7.5h1.8v1.8z"></path>
                    </svg>
                    
                    <p>Tips for better search</p>
            
                </div>

            </div>



        </div>

        <div class="top-search">

            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                <path fill="#808EA5" d="M15.462 10.615a4.852 4.852 0 0 0-4.847-4.846 4.852 4.852 0 0 0-4.846 4.846 4.852 4.852 0 0 0 4.846 4.847 4.852 4.852 0 0 0 4.847-4.847zm5.538 9c0 .758-.627 1.385-1.385 1.385-.367 0-.724-.151-.973-.411l-3.71-3.7a7.598 7.598 0 0 1-4.317 1.342A7.613 7.613 0 0 1 3 10.615 7.613 7.613 0 0 1 10.615 3a7.613 7.613 0 0 1 7.616 7.615c0 1.536-.465 3.05-1.342 4.316l3.71 3.71c.25.25.401.607.401.974z"></path>
            </svg>

            <input type="text" name="">

            <button class="blue-button">Search</button>

        </div>

        <div class="search-cv-tips">

            <div class="search-cv-tips-above">
    
                <p class="search-cv-tips-above-title">Tips For Better Search</p>
                
                <p class="search-cv-tips-above-hide">Hide Tips</p>
                
            </div>
            
            
            <p class="search-cv-tips-the-tip">
                Use OR to find profiles that might have one of several words.
                Example: Marketing Manager OR Marketing Director.
            </p>

            <div class="search-cv-tips-switch">

                <svg width="32" height="32" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path fill="#001433" d="M14.787 19l1.713-1.645L10.937 12 16.5 6.645 14.787 5 7.5 12z"></path>
                </svg>

                <svg width="32" height="32" preserveAspectRatio="none" viewBox="0 0 24 24">
                    <path fill="#001433" d="M9.213 5L7.5 6.645 13.063 12 7.5 17.355 9.213 19l7.287-7z"></path>
                </svg>

            </div>

        </div>

        <div class="search-cv-recent-session">

            <p class="search-cv-recent-session-p">RECENT SESSIONS</p>

            <div class="search-cv-recent-session-boxs">

                <div class="box">

                    <p class="searched">searched</p>

                    <div class="time">14 jan 2024</div>

                </div>

            </div>


        </div>




    </section>

@endsection