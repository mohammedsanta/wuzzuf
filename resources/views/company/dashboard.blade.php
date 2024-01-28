@extends('company.main.header')

@section('content')

    <div class="hello white-div">

        <h1>Hello Mohammed!</h1>

        <button class="blue-button">
            Add New Post
            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
        </button>

    </div>

    <div class="dashboard-content">

        <div class="dashboard-container">

            <div class="posts">

                <h2>Your Assistant</h2>

                <div class="hr"></div>

                <div class="posts-no-content">

                    <img src="https://static.wuzzuf-data.net/7dc5dbc30e742e2fc4c48693197a10a3.svg">

                    <h3>Your Job Assistant</h3>

                    <p>Once you add your jobs and receive candidates, your assistant will highlight the most potential candidates for you to check.</p>

                    <div class="no-content-buttons">

                        <button class="blue-button">
                            Add New Post
                            <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 9l6 6 6-6z"></path></svg>
                        </button>

                        <p>Or</p>

                        <button class="gray-button">
                            View All Posts
                        </button>

                    </div>


                </div>

            </div>

            <div class="invite">

                <div class="invite-title">

                    <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#000" d="M20.908 4.064a.279.279 0 0 0-.29-.04L3.155 11.816a.259.259 0 0 0-.156.232c-.001.1.058.19.15.234l4.942 2.33c.09.043.199.033.28-.025l4.804-3.45-3.771 3.727a.253.253 0 0 0-.076.2l.376 4.697a.26.26 0 0 0 .184.226.274.274 0 0 0 .288-.077l2.623-2.919 3.242 1.488c.07.033.152.034.224.004a.262.262 0 0 0 .149-.16l4.573-13.987a.252.252 0 0 0-.08-.272z"></path>
                    </svg>

                    <p>Invite to Apply - Accepted Invitations</p>

                    <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#4D6182" d="M12 19.5a7.3 7.3 0 003.772-1.033 7.272 7.272 0 002.695-2.695A7.3 7.3 0 0019.5 12a7.3 7.3 0 00-1.033-3.772 7.272 7.272 0 00-2.695-2.695A7.3 7.3 0 0012 4.5a7.3 7.3 0 00-3.772 1.033 7.272 7.272 0 00-2.695 2.695A7.3 7.3 0 004.5 12a7.3 7.3 0 001.033 3.772 7.272 7.272 0 002.695 2.695A7.3 7.3 0 0012 19.5zM12 3c1.644 0 3.166.411 4.565 1.233a8.53 8.53 0 013.202 3.202A8.851 8.851 0 0121 12a8.851 8.851 0 01-1.233 4.565 8.53 8.53 0 01-3.202 3.202A8.851 8.851 0 0112 21a8.851 8.851 0 01-4.565-1.233 8.691 8.691 0 01-3.202-3.224A8.812 8.812 0 013 12c0-1.63.411-3.144 1.233-4.543a8.858 8.858 0 013.224-3.224A8.812 8.812 0 0112 3zm-.887 13.522v-5.409h1.774v5.409h-1.774zm0-7.226V7.478h1.774v1.818h-1.774z"></path>
                    </svg>

                </div>

                <div class="invite-no-content">

                    <img src="https://static.wuzzuf-data.net/d4d0cac262402a861836c55ed2d6ac9b.svg">

                    <h3>Invite candidates to apply to your jobs</h3>

                    <p>And you'll see those who accepted your invitations here.</p>

                    <button class="blue-button">Search our CVs database</button>

                </div>

            </div>

        </div>

        <aside>

            <div class="complete-company-profile">

                <div class="complete-company-profile-title">

                    <p>Complete Company Profile</p>

                    <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd">
                        <path d="M36 18.316C36 28.083 27.941 36 18 36S0 28.083 0 18.316C0 8.549 8.059.632 18 .632s18 7.917 18 17.684" fill="#F0F5FF"></path><g transform="translate(.632)" fill-rule="nonzero"><path fill="#B0D0FF" d="M12.97 10.203V31.034h7.33V9.161l-7.33-2.083zM20.865 11.978v19.056h3.947V14.096z"></path><ellipse fill="#B0D0FF" cx="28.195" cy="25.045" rx="1.692" ry="2.178"></ellipse><path d="M28.947 30.526v-2.725a2.59 2.59 0 0 0 1.58-2.538c0-1.45-.945-2.631-2.106-2.631s-2.105 1.18-2.105 2.631a2.59 2.59 0 0 0 1.579 2.538v2.725h-2.632V14.211c0-.2-.112-.382-.29-.472l-3.92-1.959V8.947a.526.526 0 0 0-.382-.506l-6.987-1.996V.526A.526.526 0 0 0 13.158 0H2.632a.526.526 0 0 0-.527.526v30H0v1.053h31.579v-1.053h-2.632Zm-1.579-5.263c0-.856.483-1.579 1.053-1.579s1.053.723 1.053 1.58c.017.503-.173.992-.527 1.352v-.827h-1.052v.827a1.839 1.839 0 0 1-.527-1.353Zm-24.21 4.21h4.737v-1.052H3.158v-2.105h4.737v-1.053H3.158v-2.105h4.737v-1.053H3.158V20h4.737v-1.053H3.158v-2.105h4.737V15.79H3.158v-2.105h4.737v-1.052H3.158v-2.106h4.737V9.474H3.158V7.368h4.737V6.316H3.158V4.21h4.737V3.158H3.158V1.053h9.474v29.473H3.158v-1.052Zm10.526 0h3.684v-1.052h-3.684v-2.105h3.684v-1.053h-3.684v-2.105h3.684v-1.053h-3.684V20h3.684v-1.053h-3.684v-2.105h3.684V15.79h-3.684v-2.105h3.684v-1.052h-3.684v-2.106h3.684V9.474h-3.684V7.54L20 9.344v21.182h-6.316v-1.052Zm7.369 1.053v-1.052h1.579V28.42h-1.58v-2.105h1.58v-1.053h-1.58v-2.105h1.58v-1.053h-1.58V20h1.58v-1.053h-1.58v-2.105h1.58V15.79h-1.58v-2.832l3.159 1.579v15.99h-3.158Z" fill="#0053CC"></path></g></g>
                    </svg>

                </div>

                <p class="complete-company-profile-complete-steps">0% Complete — 3 Steps to go</p>

                <div class="complete-company-profile-precentage"></div>

                <div class="complete-company-profile-adding">

                    <div class="add">

                        <input type="checkbox" name="" class="add-check">
                        <p class="add-p">Add Company Main Info</p>
                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#00327F" d="M12 19l7-7-7-7-1.237 1.237 4.884 4.904H5v1.718h10.647l-4.884 4.904z"></path>
                        </svg>

                    </div>

                    <div class="add">

                        <input type="checkbox" name="" class="add-check">
                        <p class="add-p">Add Company Website</p>
                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#00327F" d="M12 19l7-7-7-7-1.237 1.237 4.884 4.904H5v1.718h10.647l-4.884 4.904z"></path>
                        </svg>

                    </div>

                    <div class="add">

                        <input type="checkbox" name="" class="add-check">
                        <p class="add-p">Add Company Logo</p>
                        <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#00327F" d="M12 19l7-7-7-7-1.237 1.237 4.884 4.904H5v1.718h10.647l-4.884 4.904z"></path>
                        </svg>

                    </div>

                </div>

            </div>

            <div class="cover-photo">

                <div class="top">

                    <a href="">

                        <svg width="12" height="12" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#F5F6F7" d="M5 18.867h14.776V21H5v-2.133zm4.214-2.132v-6.347H5L12.388 3l7.388 7.388H15.56v6.347H9.214z"></path>
                        </svg>

                        Upload Cover Photo

                    </a>

                    
                    <div class="photo-box">
    
                        <div class="box">
    
                            <svg width="20" height="20" preserveAspectRatio="none" viewBox="0 0 24 24">
                                <path fill="#808EA5" d="M10.658 13.93c0-.44.113-.851.338-1.235.225-.384.529-.686.91-.905a2.46 2.46 0 011.248-.33c.45 0 .87.113 1.258.339.388.225.697.527.929.905.231.378.347.786.347 1.225 0 .439-.112.844-.338 1.216a2.466 2.466 0 01-.929.887c-.394.22-.816.33-1.267.33-.45 0-.866-.11-1.248-.33a2.507 2.507 0 01-.91-.887 2.304 2.304 0 01-.338-1.216zm2.496 3.784c.714 0 1.37-.167 1.971-.503a3.781 3.781 0 001.427-1.38c.35-.585.525-1.222.525-1.911 0-.689-.175-1.326-.525-1.91a3.85 3.85 0 00-1.427-1.39 3.902 3.902 0 00-1.961-.513c-.707 0-1.361.171-1.962.512a3.78 3.78 0 00-1.933 3.31c0 .695.172 1.332.516 1.911.344.58.814 1.036 1.408 1.371a3.924 3.924 0 001.961.503zm-5.462-6.857V8.571h2.347V6.286H15.5l1.426 1.536h2.496c.426 0 .795.152 1.108.457.313.305.469.664.469 1.079V18.5a1.4 1.4 0 01-.47 1.06 1.568 1.568 0 01-1.107.439h-12.5c-.426 0-.795-.146-1.108-.439a1.4 1.4 0 01-.469-1.06v-7.644h2.346zM5.346 6.286V4h1.577v2.286h2.346v1.536H6.923v2.285H5.346V7.822H3V6.286h2.346z"></path>
                            </svg>
    
                            <p class="box-p">Add Logo</p>
    
                        </div>
    
                    </div>
                    
                </div>

                <div class="cover-photo-container">


                    <a href="" class="company-name">Company Name</a>

                    <div class="view-company-page">

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M12 6c-4.09 0-7.585 2.488-9 6 1.415 3.512 4.91 6 9 6s7.585-2.488 9-6c-1.415-3.512-4.91-6-9-6zm0 10c-2.258 0-4.09-1.792-4.09-4S9.741 8 12 8s4.09 1.792 4.09 4-1.832 4-4.09 4zm0-6.4c-1.358 0-2.455 1.072-2.455 2.4 0 1.328 1.097 2.4 2.455 2.4s2.455-1.072 2.455-2.4c0-1.328-1.097-2.4-2.455-2.4z"></path>
                        </svg>

                        <a href="">View Company Page</a>
                        
                    </div>

                    <div class="edit-company-page">

                        <svg width="16" height="16" preserveAspectRatio="none" viewBox="0 0 24 24">
                            <path fill="#0055D9" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                        </svg>

                        <a href="">Edit Company Page</a>

                    </div>

                    <a class="button green-button">Upgrade Your Hiring Plan</a>

                </div>

            </div>

            <div class="team-activity">

                <h4>Team Activity</h4>

                <p>Your team members activity on different job posts will appear here</p>

                <button class="button blue-button">

                    <svg width="12" height="12" preserveAspectRatio="none" viewBox="0 0 24 24">
                        <path fill="#000" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                    </svg>
                
                    Add Team Member

                </button>

            </div>

        </aside>

    </div>

@endsection