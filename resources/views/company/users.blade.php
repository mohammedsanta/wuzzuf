@extends('company.main.header')

@section('content')

    <section class="company-users">

        <div class="users-title white-div">

            <h1>Manage Users</h1>

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

        <div class="users-user-settings white-div">

            <p class="users-user-settings-text">Here you can create and manage accounts for your HR and hiring team so that they can help you post jobs and screen job candidates.</p>

            <div class="users-user-settings-tab">

                <div class="users-user-settings-tab-tabs">

                    <a href="#" menu_id="active_users" class="tab active-tab">Active Users (0)</a>
                    <a href="#" menu_id="invited_users" class="tab">Invited Users (1)</a>
                    <a href="#" menu_id="deactivated_users" class="tab">Deactivated Users (0)</a>

                </div>


                <span class="filters" style="padding-left: 165px;">
                    <b>Filter Activity: </b>
                    <select id="date_filter">
                        <option selected="" value="all">All period</option>
                        <option value="current">Current plan</option>
                    </select>
                </span>
            </div>

            <table class="users-user-settings-table" cellpadding="0" cellspacing="0" border="0" class="company_table">
                <thead>
                    <tr>
                        <th style="border: none!important;"></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Creation</th>
                        <th>Last Login</th>
                        <th>Search Activity</th>
                        <th>Unlocked Profiles</th>

                        <th style="border: none!important;">
                            Action                    </th>

                        <th style="border: none!important;"></th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr class="table-footer">
                        <td class="bottom_left_bg" style="border-bottom-left-radius: 10px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="bottom_right_bg" style="border-bottom-right-radius: 10px;"></td>
                    </tr>
                </tfoot>
            </table>

            <table class="users-user-settings-table" cellpadding="0" cellspacing="0" border="0" width="100%" style="float: none; clear: both;">
                <thead>
                    <tr>
                        <th style="border: none!important;;"></th>
                        <th style="width: 130px;">First Name</th>
                        <th style="width: 130px;">Last Name</th>
                        <th style="width: 280px;">Title</th>
                        <th style="width: 130px;">Type</th>

                        <th style="border: none!important;">

                        </th>
                        <th style="border: none!important;"></th>
                    </tr>
                </thead>
                <tbody class="table-content">
                        <tr class="light_bg">
                            <td style="border: none;"></td>
                            <td>santa</td>
                            <td>santa</td>
                            <td></td>
                            <td class="manage_subusers">Account Owner</td>
                            <td style="border: none;"><a href="">send reminder</a></td>
                            <td style="border: none;"></td>
                        </tr>
                </tbody>
                <tfoot>
                    <tr class="table-footer" style="overflow: hidden;">
                        <td width="16" style="border-bottom-left-radius: 10px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="16" style="border-bottom-right-radius: 10px;"></td>
                    </tr>
                </tfoot>
            </table>
            
            <!--  -->

            <table class="users-user-settings-table" cellpadding="0" cellspacing="0" border="0" width="100%" style="float: none; clear: both;">
                <thead>
                    <tr>
                        <th style="border: none!important;;"></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Deactivated by</th>

                        <th style="border: none!important;">
                            Action                    </th>

                        <th style="border: none!important;"></th>
                    </tr>
                </thead>
                <tbody class="table-content">
                    
                </tbody>
                <tfoot>
                    <tr class="table-footer" style="overflow: hidden;">
                        <td width="16" style="border-bottom-left-radius: 10px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="16" style="border-bottom-right-radius: 10px;"></td>
                    </tr>
                </tfoot>
            </table>

            <div class="users-user-settings-buttons">

                <a href="{{ route('company.subAccount') }}" class="blue">Add User</a>

                <a href="">Change Account Owner</a>

                <button class="blue">Save Changes</button>

            </div>

        </div>

    </section>

@endsection