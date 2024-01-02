<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\UserSkill;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddSkillRequest;
use App\Http\Requests\UserLinksRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NumLocationRequest;
use App\Http\Requests\PersonalInfoRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $profile = UserProfile::find(1);

        return view('profile.user',[
            'profile' => $profile
        ]);
    }

    public function updateGeneralinfoView()
    {
        $user = User::find(auth()->user()->id);

        // dd($user);

        return view('profile.updateGeneralinfo',[
            'user' => $user,
            'info' => $user->userPersonalInfo()->get()[0] ?? '' ,
            'location' => $user->userNumLocation()->get()[0] ?? '',
            'companies' => $this->companies()
        ]);
    }

    public function uploadCv()
    {
        return view('profile.uploadCv');
    }

    public function createCV(request $request)
    {
        $cv = $request->file('cv')->store('cv/'.auth()->user()->id.'/');
        
        // dd($cv);

        auth()->user()->cv()->create([
            'cv' => $cv
        ]);

        return back()->with(['success' => 'CV Has Been Uploaded']);
    }

    public function experience()
    {
        return view('profile.experience');
    }

    public function skills()
    {
        // $skills = ['PHP','Information Technology (IT)','OOP','MVC','AJAX','Back-End Development','Web Development','Laravel','Laravel Framework','PHP Web Development','MySQL'];

        return view('profile.skills');
    }

    public function addSkill(AddSkillRequest $request)
    {

        Auth()->user()->skill()->create($request->except('_token'));

        return back()->with(['success' => 'Add Successfully']);

    }

    public function updateSkill(AddSkillRequest $request)
    {
        $skill = UserSkill::where('user_id',Auth()->user()->id)->where('skill',request('skill'))->get();
        dd('a7a');
        $skill->update($request->validated());

        return back()->with(['success' => 'update Successfully']);
    }

    public function education()
    {
        return view('profile.education');
    }

    public function onlinePresence()
    {
        return view('profile.onlinePresence',[
            'links' => count(auth()->user()->userLink()->get()) ? auth()->user()->userLink()->get()[0] : auth()->user() ,
        ]);
    }

    public function createOnlinePresence(UserLinksRequest $request)
    {
        if(count(auth()->user()->userLink()->get())) {
            auth()->user()->userLink()->update($request->validated());
        } else {
            auth()->user()->userLink()->create($request->validated());
        }
        return back();
    }

    public function achievements()
    {
        return view('profile.achievements',[
            'achievements' => count(auth()->user()->userAchievements()->get()) ? auth()->user()->userAchievements()->get()[0] : auth()->user(), 
        ]);
    }

    public function PostAchievements()
    {
        // dd(request('Achievements'));
        if(count(auth()->user()->userAchievements()->get())) {
            auth()->user()->userAchievements()->update(['Achievements' => request('Achievements')]);
        } else {
            auth()->user()->userAchievements()->create(['Achievements' => request('Achievements')]);
        }
        return back();
    }

    public function settings()
    {
        return view('profile.settings');
    }

    /**
     * Display a listing of the resource.
     */
    public function indexCompany()
    {
        $id = Auth('company')->user()->id;
        $profile = CompanyProfile::find($id);

        return view('profile.company',[
            'profile' => $profile
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function career()
    {
        return view('profile.updateCareer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth()->user();

        $profile = $request->validate([
            // 'field' => ['sometime'],
            // 'degree' => ['sometime'],
            // 'cv' => ['sometime'],
            'picture' => ['required'],
        ]);
        // $profile['cv'] = $request->file('cv')->store('/cv/' . 'userId-' . $userId);
        // dd($profile);
        $profile['picture'] = $request->file('picture')->store('/picture/' . 'userId-' . $user->id);

        // $profile['user_id'] = $userId;
        $profile['profile_created'] = true;
        $profile['field'] = '';
        $profile['degree'] = '';
        $profile['cv'] = '';

        if(count($user->profile()->get()) == 0) {
            $user->profile()->create($profile);
        } else {
            Storage::delete($user->profile()->get()[0]->picture);
            $user->profile()->update($profile);
        }


        return redirect('/profile')->with(['success' => 'create has been done']);
    }

    public function storeCompany(Request $request)
    {
        // dd($request->all());
        $companyId = Auth('company')->user()->id;

        $profile = $request->validate([
            'field' => ['required'],
            'cv' => ['required'],
            'picture' => ['required'],
        ]);
        $profile['cv'] = $request->file('cv')->store('/cv/' . 'CompanyId-' . $companyId);
        $profile['picture'] = $request->file('picture')->store('/picture/' . 'CompanyId-' . $companyId);

        $profile['company_id'] = $companyId;
        $profile['profile_created'] = true;

        Company::find($companyId)->profile()->create($profile);

        return redirect('/profile/company')->with(['success' => 'create has been done']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalInfoRequest $request,NumLocationRequest $numLocationRequest)
    {

        $find = User::find(1);

        $FName = $request->validated('FirstName');
        $LName = $request->validated('LastName');

        $willUpdate = $request->validated();

        // Update first name and last name

        if($FName != $find->FirstName || $LName != $find->LastName) {
            
            $find->update([
                'FirstName' => $FName,
                'LastName' => $LName,
            ]);

        } else {
            unset($willUpdate['FirstName']);
            unset($willUpdate['LastName']);
        }

        // Update Personal Info

        $findInfo = $find->userPersonalInfo()->get();

        if(count($findInfo)) {
            $findInfo[0]->update($willUpdate);
        } else {
            $find->userPersonalInfo()->create($willUpdate);
        }

        // Update Location

        $findLocation = $find->userNumLocation()->get();

        if(count($findLocation)) {

            $find->userNumLocation()->update($numLocationRequest->validated());

        } else {

            $find->userNumLocation()->create($numLocationRequest->validated());

        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function companies()
    {

        $countryList = array(
            "AF" => "Afghanistan",
            "AL" => "Albania",
            "DZ" => "Algeria",
            "AS" => "American Samoa",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguilla",
            "AQ" => "Antarctica",
            "AG" => "Antigua and Barbuda",
            "AR" => "Argentina",
            "AM" => "Armenia",
            "AW" => "Aruba",
            "AU" => "Australia",
            "AT" => "Austria",
            "AZ" => "Azerbaijan",
            "BS" => "Bahamas",
            "BH" => "Bahrain",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BY" => "Belarus",
            "BE" => "Belgium",
            "BZ" => "Belize",
            "BJ" => "Benin",
            "BM" => "Bermuda",
            "BT" => "Bhutan",
            "BO" => "Bolivia",
            "BA" => "Bosnia and Herzegovina",
            "BW" => "Botswana",
            "BV" => "Bouvet Island",
            "BR" => "Brazil",
            "BQ" => "British Antarctic Territory",
            "IO" => "British Indian Ocean Territory",
            "VG" => "British Virgin Islands",
            "BN" => "Brunei",
            "BG" => "Bulgaria",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "KH" => "Cambodia",
            "CM" => "Cameroon",
            "CA" => "Canada",
            "CT" => "Canton and Enderbury Islands",
            "CV" => "Cape Verde",
            "KY" => "Cayman Islands",
            "CF" => "Central African Republic",
            "TD" => "Chad",
            "CL" => "Chile",
            "CN" => "China",
            "CX" => "Christmas Island",
            "CC" => "Cocos [Keeling] Islands",
            "CO" => "Colombia",
            "KM" => "Comoros",
            "CG" => "Congo - Brazzaville",
            "CD" => "Congo - Kinshasa",
            "CK" => "Cook Islands",
            "CR" => "Costa Rica",
            "HR" => "Croatia",
            "CU" => "Cuba",
            "CY" => "Cyprus",
            "CZ" => "Czech Republic",
            "CI" => "Côte d’Ivoire",
            "DK" => "Denmark",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "DO" => "Dominican Republic",
            "NQ" => "Dronning Maud Land",
            "DD" => "East Germany",
            "EC" => "Ecuador",
            "EG" => "Egypt",
            "SV" => "El Salvador",
            "GQ" => "Equatorial Guinea",
            "ER" => "Eritrea",
            "EE" => "Estonia",
            "ET" => "Ethiopia",
            "FK" => "Falkland Islands",
            "FO" => "Faroe Islands",
            "FJ" => "Fiji",
            "FI" => "Finland",
            "FR" => "France",
            "GF" => "French Guiana",
            "PF" => "French Polynesia",
            "TF" => "French Southern Territories",
            "FQ" => "French Southern and Antarctic Territories",
            "GA" => "Gabon",
            "GM" => "Gambia",
            "GE" => "Georgia",
            "DE" => "Germany",
            "GH" => "Ghana",
            "GI" => "Gibraltar",
            "GR" => "Greece",
            "GL" => "Greenland",
            "GD" => "Grenada",
            "GP" => "Guadeloupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GG" => "Guernsey",
            "GN" => "Guinea",
            "GW" => "Guinea-Bissau",
            "GY" => "Guyana",
            "HT" => "Haiti",
            "HM" => "Heard Island and McDonald Islands",
            "HN" => "Honduras",
            "HK" => "Hong Kong SAR China",
            "HU" => "Hungary",
            "IS" => "Iceland",
            "IN" => "India",
            "ID" => "Indonesia",
            "IR" => "Iran",
            "IQ" => "Iraq",
            "IE" => "Ireland",
            "IM" => "Isle of Man",
            "IL" => "Israel",
            "IT" => "Italy",
            "JM" => "Jamaica",
            "JP" => "Japan",
            "JE" => "Jersey",
            "JT" => "Johnston Island",
            "JO" => "Jordan",
            "KZ" => "Kazakhstan",
            "KE" => "Kenya",
            "KI" => "Kiribati",
            "KW" => "Kuwait",
            "KG" => "Kyrgyzstan",
            "LA" => "Laos",
            "LV" => "Latvia",
            "LB" => "Lebanon",
            "LS" => "Lesotho",
            "LR" => "Liberia",
            "LY" => "Libya",
            "LI" => "Liechtenstein",
            "LT" => "Lithuania",
            "LU" => "Luxembourg",
            "MO" => "Macau SAR China",
            "MK" => "Macedonia",
            "MG" => "Madagascar",
            "MW" => "Malawi",
            "MY" => "Malaysia",
            "MV" => "Maldives",
            "ML" => "Mali",
            "MT" => "Malta",
            "MH" => "Marshall Islands",
            "MQ" => "Martinique",
            "MR" => "Mauritania",
            "MU" => "Mauritius",
            "YT" => "Mayotte",
            "FX" => "Metropolitan France",
            "MX" => "Mexico",
            "FM" => "Micronesia",
            "MI" => "Midway Islands",
            "MD" => "Moldova",
            "MC" => "Monaco",
            "MN" => "Mongolia",
            "ME" => "Montenegro",
            "MS" => "Montserrat",
            "MA" => "Morocco",
            "MZ" => "Mozambique",
            "MM" => "Myanmar [Burma]",
            "NA" => "Namibia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NL" => "Netherlands",
            "AN" => "Netherlands Antilles",
            "NT" => "Neutral Zone",
            "NC" => "New Caledonia",
            "NZ" => "New Zealand",
            "NI" => "Nicaragua",
            "NE" => "Niger",
            "NG" => "Nigeria",
            "NU" => "Niue",
            "NF" => "Norfolk Island",
            "KP" => "North Korea",
            "VD" => "North Vietnam",
            "MP" => "Northern Mariana Islands",
            "NO" => "Norway",
            "OM" => "Oman",
            "PC" => "Pacific Islands Trust Territory",
            "PK" => "Pakistan",
            "PW" => "Palau",
            "PS" => "Palestinian Territories",
            "PA" => "Panama",
            "PZ" => "Panama Canal Zone",
            "PG" => "Papua New Guinea",
            "PY" => "Paraguay",
            "YD" => "People's Democratic Republic of Yemen",
            "PE" => "Peru",
            "PH" => "Philippines",
            "PN" => "Pitcairn Islands",
            "PL" => "Poland",
            "PT" => "Portugal",
            "PR" => "Puerto Rico",
            "QA" => "Qatar",
            "RO" => "Romania",
            "RU" => "Russia",
            "RW" => "Rwanda",
            "RE" => "Réunion",
            "BL" => "Saint Barthélemy",
            "SH" => "Saint Helena",
            "KN" => "Saint Kitts and Nevis",
            "LC" => "Saint Lucia",
            "MF" => "Saint Martin",
            "PM" => "Saint Pierre and Miquelon",
            "VC" => "Saint Vincent and the Grenadines",
            "WS" => "Samoa",
            "SM" => "San Marino",
            "SA" => "Saudi Arabia",
            "SN" => "Senegal",
            "RS" => "Serbia",
            "CS" => "Serbia and Montenegro",
            "SC" => "Seychelles",
            "SL" => "Sierra Leone",
            "SG" => "Singapore",
            "SK" => "Slovakia",
            "SI" => "Slovenia",
            "SB" => "Solomon Islands",
            "SO" => "Somalia",
            "ZA" => "South Africa",
            "GS" => "South Georgia and the South Sandwich Islands",
            "KR" => "South Korea",
            "ES" => "Spain",
            "LK" => "Sri Lanka",
            "SD" => "Sudan",
            "SR" => "Suriname",
            "SJ" => "Svalbard and Jan Mayen",
            "SZ" => "Swaziland",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "SY" => "Syria",
            "ST" => "São Tomé and Príncipe",
            "TW" => "Taiwan",
            "TJ" => "Tajikistan",
            "TZ" => "Tanzania",
            "TH" => "Thailand",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trinidad and Tobago",
            "TN" => "Tunisia",
            "TR" => "Turkey",
            "TM" => "Turkmenistan",
            "TC" => "Turks and Caicos Islands",
            "TV" => "Tuvalu",
            "UM" => "U.S. Minor Outlying Islands",
            "PU" => "U.S. Miscellaneous Pacific Islands",
            "VI" => "U.S. Virgin Islands",
            "UG" => "Uganda",
            "UA" => "Ukraine",
            "SU" => "Union of Soviet Socialist Republics",
            "AE" => "United Arab Emirates",
            "GB" => "United Kingdom",
            "US" => "United States",
            "ZZ" => "Unknown or Invalid Region",
            "UY" => "Uruguay",
            "UZ" => "Uzbekistan",
            "VU" => "Vanuatu",
            "VA" => "Vatican City",
            "VE" => "Venezuela",
            "VN" => "Vietnam",
            "WK" => "Wake Island",
            "WF" => "Wallis and Futuna",
            "EH" => "Western Sahara",
            "YE" => "Yemen",
            "ZM" => "Zambia",
            "ZW" => "Zimbabwe",
            "AX" => "Åland Islands",
            );

            return $countryList;

    }

}
