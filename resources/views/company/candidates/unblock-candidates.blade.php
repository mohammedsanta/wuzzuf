@extends('company.main.header')

@section('content')

    <section class="unlocked">

        <div class="unlocked-page-name white-div">

            <h1>Unlocked Candidates</h1>

        </div>

        <div class="unblock-content white-div">

            <div class="title-shows">

                <div class="title-shows-yello-title">
                    <p>You have unlocked 0 in TOTAL and 0 out of 0 CV Unlocks in current hiring plan since 18 Jan 2024</p>
                </div>

                <div class="title-shows-select">

                    <label for="">Show</label>

                    <select class="applicant-type-dropdown">
                        <option>All Candidates</option>
                        <option id="applicants">Job Applicants</option>
                        <option id="search">Search Candidates</option>
                    </select>

                </div>

            </div>

            <div class="unblock-content-search">

                <label for="">Search Unlocked Candidates:</label>

                <div class="unblock-content-search-container">
                    <input type="search" name="" placeholder="Search by name, mobile, email, previous job titles and employers...">
                    <button>Search</button>
                </div>


            </div>

        </div>
    
    </section>

@endsection