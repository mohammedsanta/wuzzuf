<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/create-job.css" />

    </head>
    
    <body>

        <div class="login-page">

        <h2 class="login-page-logo"><a href="/">WUZZUF</a></h2>

            <div class="login-box">

                <form action="{{route('job.store')}}" method="POST" class="login-box-form">
                    @csrf()

                    <label for="">Job</label>    
                    <input type="text" name="job" id="">

                    @error('job')
                        {{$message}}
                    @enderror

                    <label for="">Job Type</label>    
                    <select name="JobType">
                        <option value="full">Full-Time</option>
                        <option value="part">Part-Time</option>
                    </select>
                    
                    @error('JobType')
                        {{$message}}
                    @enderror

                    <label for="">Skills</label>    
                    <input type="text" name="skills" id="">

                    @error('ExperienceNeeded')
                        {{$message}}
                    @enderror

                    <label for="">Experience Needed</label>    
                    <input type="text" name="ExperienceNeeded" id="">

                    @error('ExperienceNeeded')
                        {{$message}}
                    @enderror

                    <label for="">Career Level</label>    
                    <input type="text" name="CareerLevel" id="">

                    @error('CareerLevel')
                        {{$message}}
                    @enderror

                    <label for="">Education Level</label>    
                    <input type="text" name="EducationLevel" id="">

                    @error('EducationLevel')
                        {{$message}}
                    @enderror

                    <label for="">Salary</label>    
                    <input type="text" name="Salary" id="">

                    @error('Salary')
                        {{$message}}
                    @enderror

                    <label for="">Job Categories</label>    
                    <input type="text" name="JobCategories" id="">

                    @error('JobCategories')
                        {{$message}}
                    @enderror

                    <label for="">Job Description</label>
                    <textarea name="descriptions" id="" cols="30" rows="10"></textarea>

                    @error('descriptions')
                        {{$message}}
                    @enderror

                    <label for="">Job Requirements</label>
                    <textarea name="requirements" id="" cols="30" rows="10"></textarea>

                    @error('requirements')
                        {{$message}}
                    @enderror

                    <input type="submit" value="Create Hire">

                </form>
                
            </div>
                
        </div>

    </body>
</html>
