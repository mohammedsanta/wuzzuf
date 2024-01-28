@extends('company.main.header')

@section('content')

    <section class="job-invitations">

        <div class="job-invitations-page-name white-div">

            <h1>Track Invitations</h1>

        </div>

        <div class="users-email white-div">

            <div>
                <p>
                    A confirmation email has been sent to f29aa436cd@emailaoa.pro. Click on the confirmation link in the email to verify your email.
                    Your company account verification process starts with your email verification.
                    If you didn't receive this email, click here to resend activation email or click here to 
                    <a href="">change your email.</a>
                </p>
            </div>

        </div>

        <div class="job-invitations-content white-div">

            <div class="job-invitations-content-inputs">

                <div class="search">
                    <img src="https://wuzzuf.net/images/search.svg">
                    <input type="search" name="" placeholder="All Candidates">
                </div>


                <select name="" id="">
                    <option value="">All Jobs</option>
                </select>

                <select name="" id="">
                    <option value="">Sent</option>
                    <option value="">Seen</option>
                    <option value="">Declined</option>
                    <option value="">Accepted</option>
                </select>

                <button>Recharge Credit</button>

            </div>

            <div class="job-invitations-content-counts">

                <div class="sent">

                    <p class="number">0</p>
                    <p class="title">Sent Invitations</p>

                </div>

                <div class="seen">

                    <p class="number">0</p>
                    <p class="title">Seen Invitations</p>

                </div>

                <div class="accepted">

                    <p class="number">0</p>
                    <p class="title">Accepted Invitations</p>

                </div>

                <div class="declined">

                    <p class="number">0</p>
                    <p class="title">Declined Invitations</p>

                </div>

            </div>

            <div class="job-invitations-content-table-row head">

                <div class="table-cell candidate">
                    Candidate Name
                </div>
                <div class="table-cell job-title">Job Title</div>
                <div class="table-cell date">Invitation Date</div>
                <div class="table-cell invited-by">Invited by</div>
                <div class="table-cell status">Status</div>
                
            </div>

        </div>

    </section>

@endsection