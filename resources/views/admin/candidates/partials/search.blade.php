<div class="row ">
    <div class="col-md-12">
        <div class="search-filter-main">
            <div class="search-filter-top">
                <div class="row">
                    <div class="col-md-5">
                        <div class="search-filter-top-left">
                            <div class="work-status-select">
                                <select class="form-select form-select-lg mb-3" name="work_rights_status"
                                    aria-label=".form-select-lg example">
                                    <option value="" disabled="" selected="">Work Status</option>
                                    <option value="awaiting-review">Awaiting Review</option>
                                    <option value="contacted">Contacted</option>
                                    <option value="cv-submitted">CV Submitted</option>
                                    <option value="declined">Declined</option>
                                    <option value="not-contact">Do Not Contact</option>
                                    <option value="interview">Interview</option>
                                    <option value="not-contacted">Not Contacted</option>
                                    <option value="offer">Offer</option>
                                    <option value="phone-screen">Phone / Direct Screen</option>
                                    <option value="placement">Placement</option>
                                    <option value="rejected">Rejected</option>
                                    <option value="reviewed">Reviewed</option>
                                    <option value="short-listed">Short Listed</option>
                                </select>
                            </div>
                            <button class="btn">Apply</button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="search-filter-top-right">
                            <a href="{{route('admin.filter.candidates')}}/{{request('slug') ? request('slug') : 'all' }}/pdf"
                                class="btn print-btn">Print</a>
                            <a href="{{route('admin.filter.candidates')}}/{{request('slug') ? request('slug') : 'all' }}/excel"
                                class="btn excel-btn">Excel</a>
                            <div class="panel-select">
                                <select class="form-select form-select-lg mb-3" name="registered"
                                    aria-label=".form-select-lg example">
                                    <option value="" disabled="" selected="">Panel</option>
                                    <option value="candidate-id">Candidate ID</option>
                                    <option value="first-name">First Name</option>
                                    <option value="first-name">Last Name</option>
                                    <option value="Email">Email</option>
                                    <option value="Gender">Gender</option>
                                    <option value="Address 1">Address 1</option>
                                    <option value="Address 2">Address 2</option>
                                    <option value="State/Region">State/Region</option>
                                    <option value="Map Address">Map Address</option>
                                    <option value="Country">Country</option>
                                    <option value="Postcode">Postcode</option>
                                    <option value="Mobile Number">Mobile Number</option>
                                    <option value="Home Phone">Home Phone</option>
                                    <option value="Work Phone">Work Phone</option>
                                    <option value="Registered">Registered</option>
                                    <option value="Verified">Verified</option>
                                    <option value="CV">CV</option>
                                    <option value="Privacy Term">Privacy Term</option>
                                    <option value="Source Name">Source Name</option>
                                    <option value="CDF">CDF</option>
                                    <option value="Availability">Availability</option>
                                    <option value="Working Status">Working Status</option>
                                    <option value="Local Graduate">Local Graduate</option>
                                    <option value="IMG">IMG</option>
                                    <option value="Source Type">Source Type</option>
                                    <option value="Prof Qualification">Prof Qualification</option>
                                    <option value="Candidate Manager">Candidate Manager</option>
                                    <option value="Rec Consultant">Rec Consultant</option>
                                    <option value="Data Administrator">Data Administrator</option>
                                    <option value="Primary Interview Date">Primary Interview Date</option>
                                    <option value="Registration Body">Registration Body</option>
                                    <option value="Type of Registration">Type of Registration</option>
                                    <option value="Grade">Grade</option>
                                    <option value="Division">Division</option>
                                    <option value="Visa Status">Visa Status</option>
                                    <option value="Profession">Profession</option>
                                    <option value="Seniority">Seniority</option>
                                    <option value="Specialty">Specialty</option>
                                    <option value="Engagement Type">Engagement Type</option>
                                    <option value="Employment Term">Employment Term</option>
                                    <option value="Employment Type">Employment Type</option>
                                    <option value="Registration Via">Registration Via</option>
                                    <option value="Status">Status</option>
                                    <option value="Created Date">Created Date</option>
                                </select>
                            </div>
                            <div class="panel-select">
                                <select class="form-select form-select-lg mb-3" name="registered"
                                    aria-label=".form-select-lg example">
                                    <option value="" disabled="" selected="">Per Page 100</option>
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <button class="btn hide-search"></button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="hide-show">
                <form method="GET" style="padding: 10px ; margin: 10px">
                    <div class="search-filter-form-inner">
                        <div class="row p-3">

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                    <input class="form-control" type="text" name="first_name" id="first_name"
                                        placeholder="First Name" value="{{ old('first_name', '') }}">
                                    @if($errors->has('first_name'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('first_name') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.first_name_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                    <input class="form-control" type="text" name="last_name" id="last_name"
                                        placeholder="Last Name" value="{{ old('last_name', '') }}">
                                    @if($errors->has('last_name'))
                                    <span class="help-block" role="alert">{{ $errors->first('last_name')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.last_name_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                    <select class="form-control" name="gender" id="gender">
                                        <option value disabled {{ old('gender', null)===null ? 'selected' : '' }}>{{
                                            trans('gender') }}
                                        </option>
                                        @foreach(App\Models\Candidate::GENDER_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('gender', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('gender'))
                                    <span class="help-block" role="alert">{{ $errors->first('gender')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.gender_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                                    <!-- <label class="" for="dob">{{ trans('cruds.candidate.fields.dob') }}</label> -->
                                    <input class="form-control date" type="text" name="dob" placeholder="Date Of Birth"
                                        id="dob" value="{{ old('dob') }}">
                                    <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                        alt="calendar-icon">
                                    @if($errors->has('dob'))
                                    <span class="help-block" role="alert">{{ $errors->first('dob')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.dob_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                                    <!-- <label class="" for="mobile">{{ trans('cruds.candidate.fields.mobile') }}</label> -->
                                    <input class="form-control" type="number" name="mobile" id="mobile"
                                        placeholder="Mobile" value="{{ old('mobile', '') }}">
                                    @if($errors->has('mobile'))
                                    <span class="help-block" role="alert">{{ $errors->first('mobile')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.mobile_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('home') ? 'has-error' : '' }}">
                                    <!-- <label class="" for="home">{{ trans('cruds.candidate.fields.home') }}</label> -->
                                    <input class="form-control" type="text" name="home" id="home" placeholder="Home"
                                        value="{{ old('home', '') }}">
                                    @if($errors->has('home'))
                                    <span class="help-block" role="alert">{{ $errors->first('home')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.home_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('work') ? 'has-error' : '' }}">
                                    <!-- <label class="" for="work">{{ trans('cruds.candidate.fields.work') }}</label> -->
                                    <input class="form-control" type="text" name="work" id="work" placeholder="Work"
                                        value="{{ old('work', '') }}">
                                    @if($errors->has('work'))
                                    <span class="help-block" role="alert">{{ $errors->first('work')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.work_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <!-- <label class="" for="email">{{ trans('cruds.candidate.fields.email') }}</label> -->
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Email ID" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                    <span class="help-block" role="alert">{{ $errors->first('email')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.email_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                                    <!-- <label for="address_1">{{ trans('cruds.candidate.fields.address_1') }}</label> -->
                                    <input class="form-control" type="text" name="address_1" id="address_1"
                                        placeholder="Address Line 1" value="{{ old('address_1', '') }}">
                                    @if($errors->has('address_1'))
                                    <span class="help-block" role="alert">{{ $errors->first('address_1')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.address_1_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
                                    <!-- <label for="address_2">{{ trans('cruds.candidate.fields.address_2') }}</label> -->
                                    <input class="form-control" type="text" name="address_2" id="address_2"
                                        placeholder="Address Line 2" value="{{ old('address_2', '') }}">
                                    @if($errors->has('address_2'))
                                    <span class="help-block" role="alert">{{ $errors->first('address_2')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.address_2_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('distance_to_main') ? 'has-error' : '' }}">
                                    <!-- <label for="distance_to_main">{{ trans('cruds.candidate.fields.distance_to_main') }}</label> -->
                                    <input class="form-control" type="text" name="distance_to_main"
                                        id="distance_to_main" placeholder="Distance to Main City"
                                        value="{{ old('distance_to_main', '') }}">
                                    @if($errors->has('distance_to_main'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('distance_to_main') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.distance_to_main_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('town') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.town') }}</label> -->
                                    <select class="form-control" name="town" id="town">
                                        <option value disabled {{ old('town', null)===null ? 'selected' : '' }}>{{
                                            trans('Suburb/Town') }}</option>
                                        <!-- @foreach(App\Models\Candidate::TOWN_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('town', '' )===(string) $key ? 'selected' : ''
                                            }}>
                                            {{ $label }}</option>
                                        @endforeach -->
                                    </select>

                                    @if($errors->has('town'))
                                    <span class="help-block" role="alert">{{ $errors->first('town')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.town_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                                    <select class="form-control" name="state" id="state">
                                        <option value disabled {{ old('state', null)===null ? 'selected' : '' }}>{{
                                            trans('State/Region') }}</option>
                                        @foreach(App\Models\Candidate::STATE_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('state', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('state'))
                                    <span class="help-block" role="alert">{{ $errors->first('state')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.state_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">
                                    <select class="form-control" name="district" id="district">
                                        <option value disabled {{ old('district', null)===null ? 'selected' : '' }}>{{
                                            trans('Sub-Regions/district') }}
                                        </option>
                                        <!-- @foreach(App\Models\Candidate::DISTRICT_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('district', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach -->
                                    </select>

                                    @if($errors->has('district'))
                                    <span class="help-block" role="alert">{{ $errors->first('district')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.district_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                                    <select class="form-control" name="country" id="country">
                                        <option value disabled {{ old('country', null)===null ? 'selected' : '' }}>{{
                                            trans('Country') }}
                                        </option>
                                        @foreach(App\Models\Candidate::COUNTRY_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('country', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('country'))
                                    <span class="help-block" role="alert">{{ $errors->first('country')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.country_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('post_code') ? 'has-error' : '' }}">
                                    <input class="form-control" type="text" name="post_code" id="post_code"
                                        placeholder="Post Code" value="{{ old('post_code', '') }}">
                                    @if($errors->has('post_code'))
                                    <span class="help-block" role="alert">{{ $errors->first('post_code')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.post_code_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('main_city') ? 'has-error' : '' }}">
                                    <select class="form-control" name="main_city" id="main_city">
                                        <option value disabled {{ old('main_city', null)===null ? 'selected' : '' }}>{{
                                            trans('Main city') }}
                                        </option>
                                        @foreach(App\Models\Candidate::MAIN_CITY_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('main_city', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('main_city'))
                                    <span class="help-block" role="alert">{{ $errors->first('main_city')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.main_city_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('profession') ? 'has-error' : '' }}">
                                    <select class="profession-doctor form-control" name="profession" id="profession">
                                        <option value disabled {{ old('profession', null)===null ? 'selected' : '' }}>{{
                                            trans('profession') }}</option>
                                        @foreach(App\Models\Candidate::PROFESSION_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('profession', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('profession'))
                                    <span class="help-block" role="alert">{{ $errors->first('profession')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.profession_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('devision') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.devision') }}</label> -->
                                    <select class="form-control" name="devision" id="devision">
                                        <option value disabled {{ old('devision', null)===null ? 'selected' : '' }}>{{
                                            trans('devision') }}</option>
                                        @foreach(App\Models\Candidate::DEVISION_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('devision', request('devision') )===(string)
                                            $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('devision'))
                                    <span class="help-block" role="alert">{{ $errors->first('devision')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.candidate.fields.devision_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.senority') }}</label> -->
                                    <select class="form-control" name="senority" id="senority">
                                        <option value disabled {{ old('senority', null)===null ? 'selected' : '' }}>{{
                                            trans('senority') }}</option>
                                        <!-- @foreach(App\Models\Candidate::SENORITY_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('senority', '' )===(string) $key ? 'selected'
                                            : '' }}>
                                            {{ $label }}</option>
                                        @endforeach -->
                                    </select>

                                    @if($errors->has('senority'))
                                    <span class="help-block" role="alert">{{ $errors->first('senority')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('specialty') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.specialty') }}</label> -->
                                    <select class="form-control" name="specialty" id="specialty">
                                        <option value disabled {{ old('specialty', null)===null ? 'selected' : '' }}>{{
                                            trans('specialty') }}</option>
                                        @foreach(App\Models\Candidate::SPECIALTY_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('specialty', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('specialty'))
                                    <span class="help-block" role="alert">{{ $errors->first('specialty')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.candidate.fields.specialty_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="form-group {{ $errors->has('professional_qualification') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.professional_qualification') }}</label> -->
                                    <select class="form-control" name="professional_qualification"
                                        id="professional_qualification">
                                        <option value disabled {{ old('professional_qualification', null)===null
                                            ? 'selected' : '' }}>{{ trans('Professional Qualification') }}</option>
                                        @foreach(App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT as $key
                                        => $label)
                                        <option value="{{ $key }}" {{ old('professional_qualification', '' )===(string)
                                            $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('professional_qualification'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('professional_qualification') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.professional_qualification_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('graduation') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.graduation') }}</label> -->
                                    <select class="form-control" name="graduation" id="graduation">
                                        <option value disabled {{ old('graduation', null)===null ? 'selected' : '' }}>{{
                                            trans('graduation') }}</option>
                                        @foreach(App\Models\Candidate::GRADUATION_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('graduation', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('graduation'))
                                    <span class="help-block" role="alert">{{ $errors->first('graduation')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.graduation_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="form-group {{ $errors->has('country_of_primary_degree') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.country_of_primary_degree') }}</label> -->
                                    <select class="form-control" name="country_of_primary_degree"
                                        id="country_of_primary_degree">
                                        <option value disabled {{ old('country_of_primary_degree', null)===null
                                            ? 'selected' : '' }}>{{ trans('Country of Primary Degree') }}</option>
                                        @foreach(App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT as $key
                                        => $label)
                                        <option value="{{ $key }}" {{ old('country_of_primary_degree', '' )===(string)
                                            $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('country_of_primary_degree'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('country_of_primary_degree') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.country_of_primary_degree_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('medical_school') ? 'has-error' : '' }}">
                                    <!-- <label for="medical_school">{{ trans('cruds.candidate.fields.medical_school') }}</label> -->
                                    <input class="form-control" type="text" name="medical_school" id="medical_school"
                                        placeholder="Medical School" value="{{ old('medical_school', '') }}">
                                    @if($errors->has('medical_school'))
                                    <span class="help-block" role="alert">{{ $errors->first('medical_school')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.medical_school_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('practice_country') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.practice_country') }}</label> -->
                                    <select class="form-control" name="practice_country" id="practice_country">
                                        <option value disabled {{ old('practice_country', null)===null ? 'selected' : ''
                                            }}>{{
                                            trans('Practice Licensing Country') }}</option>
                                        @foreach(App\Models\Candidate::PRACTICE_COUNTRY_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('practice_country', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('practice_country'))
                                    <span class="help-block" role="alert">{{ $errors->first('practice_country')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.practice_country_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="form-group {{ $errors->has('practice_licensing_body') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.practice_licensing_body') }}</label> -->
                                    <select class="form-control" name="practice_licensing_body"
                                        id="practice_licensing_body">
                                        <option value disabled {{ old('practice_licensing_body', null)===null
                                            ? 'selected' : '' }}>{{ trans('Practice Licensing Body') }}</option>
                                        @foreach(App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('practice_licensing_body', '' )===(string)
                                            $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('practice_licensing_body'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('practice_licensing_body') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.practice_licensing_body_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('license_type') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.license_type') }}</label> -->
                                    <select class="form-control" name="license_type" id="license_type">
                                        <option value disabled {{ old('license_type', null)===null ? 'selected' : '' }}>
                                            {{
                                            trans('Registeration/License_Type') }}</option>
                                        @foreach(App\Models\Candidate::LICENSE_TYPE_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('license_type', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('license_type'))
                                    <span class="help-block" role="alert">{{ $errors->first('license_type')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.license_type_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('experience_from_home') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.experience_from_home') }}</label> -->
                                    <select class="form-control" name="experience_from_home" id="experience_from_home">
                                        <option value disabled {{ old('experience_from_home', null)===null ? 'selected'
                                            : '' }}>
                                            {{ trans('Experience from home Country') }}</option>
                                        @foreach(App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('experience_from_home', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('experience_from_home'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('experience_from_home') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.experience_from_home_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="form-group {{ $errors->has('experience_from_residing') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.experience_from_residing') }}</label> -->
                                    <select class="form-control" name="experience_from_residing"
                                        id="experience_from_residing">
                                        <option value disabled {{ old('experience_from_residing', null)===null
                                            ? 'selected' : '' }}>{{ trans('Experience from residing Country') }}
                                        </option>
                                        @foreach(App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT as $key
                                        => $label)
                                        <option value="{{ $key }}" {{ old('experience_from_residing', '' )===(string)
                                            $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('experience_from_residing'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('experience_from_residing') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.experience_from_residing_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="form-group {{ $errors->has('recognised_comparable_experience') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.recognised_comparable_experience') }}</label> -->
                                    <select class="form-control" name="recognised_comparable_experience"
                                        id="recognised_comparable_experience">
                                        <option value disabled {{ old('recognised_comparable_experience', null)===null
                                            ? 'selected' : '' }}>{{ trans('Recognised Comparable Experience') }}
                                        </option>
                                        @foreach(App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT
                                        as $key => $label)
                                        <option value="{{ $key }}" {{ old('recognised_comparable_experience', ''
                                            )===(string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('recognised_comparable_experience'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('recognised_comparable_experience') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.recognised_comparable_experience_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div
                                    class="form-group {{ $errors->has('current_employment_status') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.current_employment_status') }}</label> -->
                                    <select class="form-control" name="current_employment_status"
                                        id="current_employment_status">
                                        <option value disabled {{ old('current_employment_status', null)===null
                                            ? 'selected' : '' }}>{{ trans('Current Employment Status') }}</option>
                                        @foreach(App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT as $key
                                        => $label)
                                        <option value="{{ $key }}" {{ old('current_employment_status', '' )===(string)
                                            $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('current_employment_status'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('current_employment_status') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.current_employment_status_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('country_of_citizenship') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.country_of_citizenship') }}</label> -->
                                    <select class="form-control" name="country_of_citizenship"
                                        id="country_of_citizenship">
                                        <option value disabled {{ old('country_of_citizenship', null)===null
                                            ? 'selected' : '' }}>{{ trans('Country of Citizenship') }}</option>
                                        @foreach(App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('country_of_citizenship', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('country_of_citizenship'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('country_of_citizenship') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.country_of_citizenship_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('country_of_residence') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.country_of_residence') }}</label> -->
                                    <select class="form-control" name="country_of_residence" id="country_of_residence">
                                        <option value disabled {{ old('country_of_residence', null)===null ? 'selected'
                                            : '' }}>
                                            {{ trans('Country of Residence') }}</option>
                                        @foreach(App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('country_of_residence', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('country_of_residence'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('country_of_residence') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.country_of_residence_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('visa_type') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.visa_type') }}</label> -->
                                    <select class="form-control" name="visa_type" id="visa_type">
                                        <option value disabled {{ old('visa_type', null)===null ? 'selected' : '' }}>{{
                                            trans('Visa type') }}</option>
                                        @foreach(App\Models\Candidate::VISA_TYPE_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('visa_type', '' )===(string) $key ? 'selected'
                                            : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('visa_type'))
                                    <span class="help-block" role="alert">{{ $errors->first('visa_type')
                                        }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.candidate.fields.visa_type_helper')
                                        }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('work_rights_status') ? 'has-error' : '' }}">
                                    <!-- <label>{{ trans('cruds.candidate.fields.work_rights_status') }}</label> -->
                                    <select class="form-control" name="work_rights_status" id="work_rights_status">
                                        <option value disabled {{ old('work_rights_status', null)===null ? 'selected'
                                            : '' }}>{{
                                            trans('Work rights Status') }}</option>
                                        @foreach(App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT as $key =>
                                        $label)
                                        <option value="{{ $key }}" {{ old('work_rights_status', '' )===(string) $key
                                            ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('work_rights_status'))
                                    <span class="help-block" role="alert">{{
                                        $errors->first('work_rights_status') }}</span>
                                    @endif
                                    <span class="help-block">{{
                                        trans('cruds.candidate.fields.work_rights_status_helper') }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-form-bottom">
                                <button type="submit" class="btn search-form-btn">Search</button>
                                <button type="reset" class="btn search-form-reset">Reset</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="hide-show">
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
        </div>
    </div>
</div>