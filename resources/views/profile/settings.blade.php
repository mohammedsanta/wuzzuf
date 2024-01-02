@extends('header.header')

@section('content')

    <section class="settings-account">

        <div class="settings-account-profile-settings main-p-c">

            <h4>Public Profile Settings</h4>

            <p class="settings-account-profile-settings-p">Activating your public profile enables you to share it with friends and potential employers.</p>

            <p class="settings-account-profile-settings-p">It's a great way to show the world your skills and experience.</p>

            <div class="settings-account-profile-settings-profile">

                <input type="checkbox" name="" id="">

                <div class="settings-account-profile-settings-profile-text">

                    <p>Make my profile public. (Recommended)</p>
                    <p class="sm-g-font">By activating this option, you can share your profile with those not on WUZZUF and get more exposure.</p>

                </div>
                
            </div>

            <div class="settings-account-profile-settings-your-link">

                <p>Your url is: wuzzuf.net/me/Mohammed-Samy-ad05fc2579</p>

                <button class="blue-button">Change</button>

            </div>

            
        </div>

        
        <div class="settings-account-change-password main-p-c">

            <h4>Change Password</h4>

            <p class="settings-account-change-password-p">To change your account password, enter your current password, then enter your new password and confirm it.</p>

            <div class="settings-account-change-password-current">

                <label for="">Current Password</label>

                <input class="main-input" type="text" name="" id="">

            </div>
            
            <div class="settings-account-change-password-new">

                <div>

                    <label for="">New Password</label>

                    <input class="main-input" type="text" name="" id="">

                </div>
                
                <div>

                    <label for="">Confirm Password</label>

                    <input class="main-input" type="text" name="" id="">

                </div>

            </div>


            <button class="blue-button">Update Password</button>

            
        </div>

        <div class="settings-account-change-email main-p-c">

            <h4>Change Password</h4>

            <p class="settings-account-change-email-p">You are already registered with the following email: <span class="settings-account-change-email-p-span">mohammedsamy238@gmail.com</span></p>
            <p class="settings-account-change-email-p">If you would like to sign-in and receive emails on a different address, write this new email here:</p>

            <div class="settings-account-change-email-inputs">

                <div>

                    <label for="">New Email</label>
    
                    <input class="main-input" type="text" name="" id="">

                </div>

                <div>

                    <label for="">Confirm New Email</label>

                    <input class="main-input" type="text" name="" id="">

                </div>


            </div>


            <button class="blue-button">Update My Email</button>


        </div>

        <div class="settings-account-subscriptions main-p-c">

            <h4>My Subscriptions</h4>

            <div class="settings-account-subscriptions-receive-new-jobs-container">

                
                <div class="settings-account-subscriptions-receive-new-jobs">
                    
                    <input type="checkbox" name="" id="">
                    
                    <p>Receive new jobs newsletter</p>
                    
                </div>
                
                <select name="" id="">
                    <option value="">Weekly</option>
                    <option value="">Monthly</option>
                </select>
            
            </div>

            <p>You will receive emails containing the latest jobs which match your preferences. You will get it weekly or monthly depending on your job search status.</p>

            <div class="settings-account-subscriptions-check">
    
                <input type="checkbox" name="" id="">
    
                <p>Receive notification emails for jobs similar to your recent applications</p>
    
            </div>

            <div class="settings-account-subscriptions-check">
    
                <input type="checkbox" name="" id="">

                <p>Receive profile alerts and offers</p>

            </div>

            <p>We will email you when employers view your CV or job applications and tips regarding your profile.</p>

            <button class="blue-button">Update Subscriptions</button>

        </div>

        <div class="settings-account-delete main-p-c">

            <h4>Delete Account</h4>

            <p>If you are deleting your profile just because you do not want employers to see your profile, you can just hide your profile through the above section.</p>

            <button>Delete My Account</button>

        </div>

    </section>

@endsection