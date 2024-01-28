@extends('company.main.header')



@section('content')

    <section class="sub-account">

    <div class="users-title white-div">

        <h1>Add User</h1>

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

        <div class="sub-account-box white-div">

            <ul class="sub-account-from">
                <li>
                    <label>First Name: </label>
                    <div class="left"></div>
                    <input type="text" name="firstname" value="" id="first_name" class="sub-account-from-input">
                    <div class="right"></div>
                    <span class="required_star">*</span>
                </li>
                <li>
                    <label>Last name: </label>
                    <div class="left"></div>
                    <input type="text" name="lastname" value="" id="last_name" class="sub-account-from-input">
                    <div class="right"></div>
                    <span class="required_star">*</span>
                </li>
                <li>
                    <label>Email: </label>
                    <div class="left"></div>
                    <input type="text" name="email" value="" id="mail" class="sub-account-from-input">
                    <div class="right"></div>
                    <span class="required_star">*</span>
                </li>
                <li>
                    <label>Job Title: </label>
                    <div class="left"></div>
                    <input type="text" name="job_title" value="" id="job_title" placeholder="e.g. CEO, HR Manager, Recruitment Specialist, etc..." class="sub-account-from-input gray_text">
                    <div class="right"></div>
                    <span class="required_star">*</span>
                </li>
                <li>
                    <label>Type: </label>
                    <div class="left"></div>

                    <!-- <ul class="frm_select_items frm_hide">
                        <li first_char="u" name="user" c_name="User" opt_val="3" class="active_select_item li_active ">User</li>
                        <li first_char="a" name="admin" c_name="Admin" opt_val="2" class="">Admin</li>
                    </ul> -->

                    <select name="user_type" class="sub-account-from-select">
                        <option value="3">User</option>
                        <option value="2">Admin</option>
                    </select>
                    <div class="right"></div>


                <li class="sub-account-from-buttons" style="margin-left: 202px;">
                    <input type="submit" name="submit" value="Send Invitation" class="subuser-btn send">
                    <input type="button" value="Cancel" class="subuser-btn cancel">

                </li>
            </ul>

        </div>


    </section>

@endsection