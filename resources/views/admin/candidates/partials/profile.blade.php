<div class="row">
    <div class="col-md-4 profile-left">
        <div class="profile-information">
            <div class="card candi-profile">
                <img src=" {{asset('img/dashboard/profile.png')}}"
                    class="card-img-top img-fluid" alt="profile-img">
                <div class="card-body">
                    <h5 class="card-title">{{$candidate->first_name.' '.$candidate->last_name}}
                    </h5>
                    <p class="card-text">{{$candidate->gender}}</p>
                    <p class="card-text">DOB: {{$candidate->dob}}</p>
                    <a href="#" class="btn">ID: {{$candidate->user_id}}</a>
                </div>
            </div>
            <div class="profile-info">
                <ul>
                    <li>
                        <h3>Home Address</h3>
                        <p>{{$candidate->home}}</p>
                    </li>
                    <li>
                        <h3>Mobile Number</h3>
                        <p>{{$candidate->mobile}}</p>
                    </li>
                    <li>
                        <h3>Office Number</h3>
                        <p>{{$candidate->office_number}}</p>
                    </li>
                    <li>
                        <h3>Email</h3>
                        <p>{{$candidate->email}}</p>
                    </li>
                </ul>
            </div>
            <div class="profession-info">
                <ul>
                    <li>
                        <h3>Profession</h3>
                        <p>{{$candidate->profession}}</p>
                    </li>
                    <li>
                        <h3>Engagement Term</h3>
                        <p>{{$candidate->engagement_term}}</p>
                    </li>
                    <li>
                        <h3>Employement Type</h3>
                        <p>{{$candidate->current_employment_status}}</p>
                    </li>
                    <li>
                        <h3>Placement Type</h3>
                        <p>{{$candidate->placement_term}}</p>
                    </li>
                </ul>
                <div class="edit-brn">
                    <button class="btn candidate-edit-btn"><img
                            src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                            alt="Edit-img"> Edit</button>
                </div>

            </div>
        </div>
        <div class="profile-eidt-form">
            <form action="{{ url("update1", [$candidate->id]) }}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name"
                        value="{{ old('first_name', $candidate->first_name) }}">
                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name"
                        value="{{ old('last_name', $candidate->last_name) }}">
                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="gender">Gender</label>
                    <input class="form-control" type="text" name="gender" id="gender"
                        value="{{ old('gender', $candidate->gender) }}">
                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="dob">DOB</label>
                    <input class="form-control date" type="calander" name="dob"
                                placeholder="" id="dob" value="{{ old('dob', $candidate->dob) }}">
                            <img src="{{asset('img/dashboard/calendar-icon.png')}}"
                                class="calendar" alt="calendar-icon">
                </div>

                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="home">Home Address</label>
                    <input class="form-control" type="text" name="home" id="home"
                        value="{{ old('home', $candidate->home) }}">
                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="mobile">Mobile</label>
                    <input class="form-control" type="text" name="mobile"
                        id="mobile" value="{{ old('mobile', $candidate->mobile) }}">

                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="office_number">Office Number</label>
                    <input class="form-control" type="text" name="office_number"
                        id="office_number" value="{{ old('office_number', $candidate->office_number) }}">
                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email"
                        id="email" value="{{ old('mobile', $candidate->mobile) }}">

                </div>

                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="Profession">Profession</label>
                    <input class="form-control" type="text" name="Profession"
                        id="Profession" value="{{ old('profession', $candidate->
                        profession) }}">

                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="engagement_term">Engagement Term</label>
                    <select name="engagement_term" id="engagement_term" class="form-control">
                        <option value="Full Time" {{ old('engagement_term',$candidate->engagement_term =="Full Time")? "selected" : "" }} >Full Time</option>
                        <option value="Part Time" {{ old('engagement_term',$candidate->engagement_term =="Part Time")? "selected" : "" }} >Part Time</option>
                    </select>

                </div>
                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="current_employment_status">current employment status</label>
                    <input class="form-control" type="text" name="current_employment_status"
                        id="current_employment_status" value="{{ old('current_employment_status', $candidate->
                        current_employment_status) }}">

                </div>

                <div class="col-md-12 profile-eidt-form-inner">
                    <label for="placement_term">Placement Type</label>
                    <select name="placement_term" id="placement_term" class="form-control">
                        <option value="Introductory Placement  " {{ old('placement_term',$candidate->placement_term =="Introductory Placement  ")? "selected" : "" }} >Introductory Placement  </option>
                        <option value="Agency Work Force    " {{ old('placement_term',$candidate->placement_term =="Agency Work Force    ")? "selected" : "" }} >Agency Work Force    </option>
                    </select>

                </div>
                <div class="col-md-12 profile-eidt-form-btn">
                    <button class="btn back-btn">Back</button>
                    <input type="submit" class="btn" placeholder="Submit">
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-8 profile-right">
        <div class="profile-right-color"></div>
        <div class="profile-details-d-none">
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Add-User-Male.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Registered</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->register ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/verified.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Verified</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->verified ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Resume.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Candidate Manager</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_manager ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/CV-receive.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">CV Recived Date</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->cv_receive_date ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Privacy-team.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Privacy Term</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->privacy_term ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/first-refister.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">First Registered Date</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->registerd_date ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/candidate-terms.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Candidate Terms</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->candidate_term ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/source-name.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Source Name</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->source_name ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/register-type.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Registration Type</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->registration_type ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/cdf.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">CDF</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->CDF ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/register-by.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Registered By</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->registered_by ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/division.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Division</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->devision ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/availability.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Availability</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->availability ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/work-status.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Working Status</h5>
                                    <p class="card-text">
                                        <small class="text-muted">{{$candidate->candidate_profile->working_status ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/access-status.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Access Status</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->access_status ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Graduation.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Graduation</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->graduation ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Consultant.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Rec Consultant</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->recruitement ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/register-body.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Registration Body</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->registeration_body ?? '' }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Health-Sources.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Source Type</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->source_type ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/prof-qualification.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Prof Qualification</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->professional_qualification ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Email-Send.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Email - Verify</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->email_verified ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/profile-grade.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Profile Grade</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->profile_grade ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/rigistration-via.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Registration Via</h5>
                                    <p class="card-text"><small class="text-muted">{{$candidate->candidate_profile->registration_via ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/Passport.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Visa Status</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->visa_status ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-details">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-1 card-img">
                                <img src="{{asset('img/dashboard/lead-method.png')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <h5 class="card-title">Lead Method</h5>
                                    <p class="card-text"><small
                                            class="text-muted">{{$candidate->candidate_profile->lead_method ?? '' }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="edit-brn">
                <button class="btn profile-right-edit"><img
                        src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                        alt="Edit-img"> Edit</button>
            </div>
        </div>

        <div class="profile-details-eidt-form">
            <form action="{{url("update3",[$candidate->id])}}" class="row select-dropdown" method="post">
                @csrf
                <div class="col-md-4 form-group">
                    <label for="register">Registered</label>
                    <select class="form-control form-select-lg mb-3"
                        name="register" aria-label=".form-select-lg example">
                        <option value="Yes"{{ (isset($candidate->candidate_profile->register) &&($candidate->candidate_profile->register =="Yes"))? "selected" : '' }}>Yes</option>
                        <option value="No" {{ (isset($candidate->candidate_profile->register) &&($candidate->candidate_profile->register =="No"))? "selected" : '' }}>No</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="verified">Verified</label>
                    <select class="form-control form-select-lg mb-3"
                        name="verified" aria-label=".form-select-lg example">
                        <option value="Yes" {{ (isset($candidate->candidate_profile->verified) &&($candidate->candidate_profile->verified =="Yes"))? "selected" : '' }}>Yes</option>
                        <option value="No" {{ (isset($candidate->candidate_profile->verified) &&($candidate->candidate_profile->verified =="Yes"))? "selected" : '' }}>No</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="candidate_manager">Candidate Manager</label>
                    <input class="form-control" type="text" name="candidate_manager" id="candidate_manager"
                       placeholder="Candidate_Manager" value="{{ old('candidate_manager',$candidate->candidate_manager)?? ''}}">
                </div>
                <div class="col-md-4 form-group">
                    <label for="cv_receive_date">CV Recived Date</label>
                    <input class="form-control date" type="calander" name="cv_receive_date"
                                placeholder="cv_receive_date" id="cv_receive_date" value="{{ old('cv_receive_date',$candidate->candidate_profile->cv_receive_date)?? ''}}"
                                required>
                            <img src="{{asset('img/dashboard/calendar-icon.png')}}"
                                class="calendar" alt="calendar-icon">
                </div>

                <div class="col-md-4 form-group">
                    <label for="privacy_term">Privacy Term</label>
                    <select class="form-control form-select-lg mb-3"
                        name="privacy_term" aria-label=".form-select-lg example">
                        <option value="Yes" {{ old('privacy_term',$candidate->candidate_profile->privacy_term =="Yes")? "selected" : "" }}>Yes</option>
                        <option value="No" {{ old('privacy_term',$candidate->candidate_profile->privacy_term =="Yes")? "selected" : "" }}>No</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="registerd_date">First Registered Date</label>
                    <input class="form-control date" type="calander" name="registerd_date"
                                placeholder="" id="registerd_date" value="{{ old('registerd_date',$candidate->candidate_profile->registerd_date)}}">
                            <img src="{{asset('img/dashboard/calendar-icon.png')}}"
                                class="calendar" alt="calendar-icon">
                </div>
                <div class="col-md-4 form-group">
                    <label for="candidate_term">Candidate Terms</label>
                    <input class="form-control" type="text" name="candidate_term" id="candidate_term"
                    placeholder="Candidate_Terms" value="{{ old('candidate_term',$candidate->candidate_profile->candidate_term)}}">
                </div>
                <div class="col-md-4 form-group">
                    <label for="source_name">Source Name</label>
                    <select class="form-control form-select-lg mb-3"
                        name="source_name" aria-label=".form-select-lg example">
                        <option value="Active jobs" {{ old('source_name',$candidate->candidate_profile->source_name =="Active jobs")? "selected" : "" }}>Active jobs</option>
                        <option value="Medfuture Direct Registration" {{ old('source_name',$candidate->candidate_profile->source_name =="Medfuture Direct Registration")? "selected" : "" }}>Medfuture Direct Registration</option>
                        <option value="Medfuture Job Apply" {{ old('source_name',$candidate->candidate_profile->source_name =="Medfuture Job Apply")? "selected" : "" }}>Medfuture Job Apply</option>
                        <option value="Medfuture Quick Job Apply" {{ old('source_name',$candidate->candidate_profile->source_name =="Medfuture Quick Job Apply")? "selected" : "" }}>Medfuture Quick Job Apply</option>
                        <option value="Adzuna" {{ old('source_name',$candidate->candidate_profile->source_name =="Adzuna")? "selected" : "" }}>Adzuna </option>
                        <option value="CareerOne" {{ old('source_name',$candidate->candidate_profile->source_name =="CareerOne")? "selected" : "" }}>CareerOne</option>
                        <option value="Direct Job Board" {{ old('source_name',$candidate->candidate_profile->source_name =="Direct Job Board")? "selected" : "" }}>Direct Job Board </option>
                        <option value="Black Pearl" {{ old('source_name',$candidate->candidate_profile->source_name =="Black Pearl")? "selected" : "" }}>Black Pearl</option>
                        <option value="Direct Mail" {{ old('source_name',$candidate->candidate_profile->source_name =="Direct Mail")? "selected" : "" }}>Direct Mail</option>
                        <option value="Friends" {{ old('source_name',$candidate->candidate_profile->source_name =="Friends")? "selected" : "" }}>Friends </option>
                        <option value="Recruitment Consultant" {{ old('source_name',$candidate->candidate_profile->source_name =="Recruitment Consultant")? "selected" : "" }}>Recruitment Consultant</option>
                        <option value="Indeed" {{ old('source_name',$candidate->candidate_profile->source_name =="Indeed")? "selected" : "" }}>Indeed </option>
                        <option value="Jooble" {{ old('source_name',$candidate->candidate_profile->source_name =="Jooble")? "selected" : "" }}>Jooble</option>
                        <option value="Jora" {{ old('source_name',$candidate->candidate_profile->source_name =="Jora")? "selected" : "" }}>Jora</option>
                        <option value="Linkedin" {{ old('source_name',$candidate->candidate_profile->source_name =="Linkedin")? "selected" : "" }}>Linkedin </option>
                        <option value="Medhire" {{ old('source_name',$candidate->candidate_profile->source_name =="Medhire")? "selected" : "" }}>Medhire </option>
                        <option value="Mycarieer" {{ old('source_name',$candidate->candidate_profile->source_name =="Mycarieer")? "selected" : "" }}>Mycarieer</option>
                        <option value="Online Chat" {{ old('source_name',$candidate->candidate_profile->source_name =="Online Chat")? "selected" : "" }}>Online Chat</option>
                        <option value="Other" {{ old('source_name',$candidate->candidate_profile->source_name =="Other")? "selected" : "" }}>Other</option>
                        <option value="Quick Apply Job" {{ old('source_name',$candidate->candidate_profile->source_name =="Quick Apply Job")? "selected" : "" }}>Quick Apply Job </option>
                        <option value="Referal" {{ old('source_name',$candidate->candidate_profile->source_name =="Referal")? "selected" : "" }}>Referal</option>
                        <option value="Referred By Doctor" {{ old('source_name',$candidate->candidate_profile->source_name =="Referred By Doctor")? "selected" : "" }}>Referred By Doctor</option>
                        <option value="Referred By Friend" {{ old('source_name',$candidate->candidate_profile->source_name =="Referred By Friend")? "selected" : "" }}>Referred By Friend</option>
                        <option value="Seek" {{ old('source_name',$candidate->candidate_profile->source_name =="Seek")? "selected" : "" }}>Seek</option>
                        <option value="SEO" {{ old('source_name',$candidate->candidate_profile->source_name =="SEO")? "selected" : "" }}>SEO</option>
                        <option value="Twk" {{ old('source_name',$candidate->candidate_profile->source_name =="Twk")? "selected" : "" }}>Twk</option>
                        <option value="Twitter" {{ old('source_name',$candidate->candidate_profile->source_name =="Twitter")? "selected" : "" }}>Twitter</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="registration_type">Registration Type</label>
                    <select class="form-control form-select-lg mb-3"
                    name="registration_type" aria-label=".form-select-lg example">
                    <option value="Eligible for General Registration" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Eligible for General Registration")? "selected" : "" }}>Eligible for General Registration</option>
                    <option value="Eligible for Limited Registration" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Eligible for Limited Registration")? "selected" : "" }}>Eligible for Limited Registration </option>
                    <option value="Eligible for Provisional Registration" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Eligible for Provisional Registration")? "selected" : "" }}>Eligible for Provisional Registration  </option>
                    <option value="General" {{ old('registration_type',$candidate->candidate_profile->registration_type =="General")? "selected" : "" }}>General</option>
                    <option value="Limited" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Limited")? "selected" : "" }}>Limited</option>
                    <option value="Non-Practising Registration" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Non-Practising Registration")? "selected" : "" }}>Non-Practising Registration </option>
                    <option value="Not Applicable" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Not Applicable")? "selected" : "" }}>Not Applicable</option>
                    <option value="Provisional" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Provisional")? "selected" : "" }}>Provisional</option>
                    <option value="Specialist" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Specialist")? "selected" : "" }}>Specialist</option>
                    <option value="Student" {{ old('registration_type',$candidate->candidate_profile->registration_type =="Student")? "selected" : "" }}>Student</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="CDF">CDF</label>
                    <select class="form-control form-select-lg mb-3"
                        name="CDF" aria-label=".form-select-lg example">
                        <option value="Yes" {{ old('CDF',$candidate->candidate_profile->CDF =="Yes")? "selected" : "" }}>Yes</option>
                        <option value="No" {{ old('CDF',$candidate->candidate_profile->CDF =="No")? "selected" : "" }}>No</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="registered_by">Registered By</label>
                    <input class="form-control" type="text" name="registered_by" id="registered_by"
                    placeholder="" value="{{ old('registered_by',$candidate->candidate_profile->registered_by)}}">
                </div>
                <div class="col-md-4 form-group">
                    <label for="devision">Division</label>
                    <select class="form-control form-select-lg mb-3"
                        name="devision" aria-label=".form-select-lg example">
                        <option value="General Practitioners" {{ old('devision',$candidate->devision =="General Practitioners")? "selected" : "" }}>General Practitioners </option>
                        <option value="Healthcare Executives" {{ old('devision',$candidate->devision =="Healthcare Executives")? "selected" : "" }}>Healthcare Executives </option>
                        <option value="Hospital Doctors" {{ old('devision',$candidate->devision =="Hospital Doctors")? "selected" : "" }}>Hospital Doctors </option>
                        <option value="Locum Doctors" {{ old('devision',$candidate->devision =="Locum Doctors")? "selected" : "" }}>Locum Doctors</option>
                        <option value="Nurses & Carers" {{ old('devision',$candidate->devision =="Nurses & Carers")? "selected" : "" }}>Nurses & Carers</option>
                        <option value="Allergologist" {{ old('devision',$candidate->devision =="Allergologist")? "selected" : "" }}>Allergologist</option>
                        <option value="Arts Therapist" {{ old('devision',$candidate->devision =="Arts Therapist")? "selected" : "" }}>Arts Therapist </option>
                        <option value="Audiologist" {{ old('devision',$candidate->devision =="Audiologist")? "selected" : "" }}>Audiologist</option>
                        <option value="Chiropractor" {{ old('devision',$candidate->devision =="Chiropractor")? "selected" : "" }}>Chiropractor </option>
                        <option value="Dietitians" {{ old('devision',$candidate->devision =="Dietitians")? "selected" : "" }}>Dietitians </option>
                        <option value="Exercise Physiologist" {{ old('devision',$candidate->devision =="Exercise Physiologist")? "selected" : "" }}>Exercise Physiologist</option>
                        <option value="Genetic Counsellor" {{ old('devision',$candidate->devision =="Genetic Counsellor")? "selected" : "" }}>Genetic Counsellor</option>
                        <option value="Medical Radiologist" {{ old('devision',$candidate->devision =="Medical Radiologist")? "selected" : "" }}>Medical Radiologist</option>
                        <option value="Music Therapist" {{ old('devision',$candidate->devision =="Music Therapist")? "selected" : "" }}>Music Therapist</option>
                        <option value="Occupational Therapist" {{ old('devision',$candidate->devision =="Occupational Therapist")? "selected" : "" }}>Occupational Therapist</option>
                        <option value="Optometrist" {{ old('devision',$candidate->devision =="Optometrist")? "selected" : "" }}>Optometrist</option>
                        <option value="Orthotist and prosthetist" {{ old('devision',$candidate->devision =="Orthotist and prosthetist")? "selected" : "" }}>Orthotist and prosthetist</option>
                        <option value="Osteopathist" {{ old('devision',$candidate->devision =="Osteopathist")? "selected" : "" }}>Osteopathist</option>
                        <option value="Perfusionist" {{ old('devision',$candidate->devision =="Perfusionist")? "selected" : "" }}>Perfusionist</option>
                        <option value="Physiotherapist" {{ old('devision',$candidate->devision =="Physiotherapist")? "selected" : "" }}>Physiotherapist</option>
                        <option value="Podiatrist" {{ old('devision',$candidate->devision =="Podiatrist")? "selected" : "" }}>Podiatrist</option>
                        <option value="Psychologist" {{ old('devision',$candidate->devision =="Psychologist")? "selected" : "" }}>Psychologist</option>
                        <option value="Psychology & Mental health" {{ old('devision',$candidate->devision =="Psychology & Mental health")? "selected" : "" }}>Psychology & Mental health</option>
                        <option value="Rehabilitation Counsellor" {{ old('devision',$candidate->devision =="Rehabilitation Counsellor")? "selected" : "" }}>Rehabilitation Counsellor </option>
                        <option value="Sonographer" {{ old('devision',$candidate->devision =="Sonographer")? "selected" : "" }}>Sonographer</option>
                        <option value="Specialist service" {{ old('devision',$candidate->devision =="Specialist service")? "selected" : "" }}>Specialist service</option>
                        <option value="Speech-pathology" {{ old('devision',$candidate->devision =="Speech-pathology")? "selected" : "" }}>Speech-pathology</option>
                        <option value="Midwife" {{ old('devision',$candidate->devision =="Midwife")? "selected" : "" }}>Midwife</option>
                        <option value="Dentists" {{ old('devision',$candidate->devision =="Dentists")? "selected" : "" }}>Dentists</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="availability">Availability</label>
                    <select class="form-control form-select-lg mb-3"
                        name="availability" aria-label=".form-select-lg example">
                        <option value="Active" {{ old('availability',$candidate->candidate_profile->availability =="Active")? "selected" : "" }}>Active</option>
                        <option value="In Active"{{ old('availability',$candidate->candidate_profile->availability =="In Active")? "selected" : "" }}>In Active</option>
                        <option value="Active" {{ old('availability',$candidate->candidate_profile->availability =="Active")? "selected" : "" }}>Not Known</option>
                        <option value="In Active" {{ old('availability',$candidate->candidate_profile->availability =="In Active")? "selected" : "" }}>Lost</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="working_status">Working Status</label>
                    <select class="form-control form-select-lg mb-3"
                        name="working_status" aria-label=".form-select-lg example">
                        <option value="Awaiting Review" {{ old('working_status',$candidate->candidate_profile->working_status =="Awaiting Review")? "selected" : "" }}>Awaiting Review</option>
                        <option value="Contacted" {{ old('working_status',$candidate->candidate_profile->working_status =="Contacted")? "selected" : "" }}>Contacted</option>
                        <option value="CV Submitted" {{ old('working_status',$candidate->candidate_profile->working_status =="CV Submitted")? "selected" : "" }}>CV Submitted</option>
                        <option value="Declined" {{ old('working_status',$candidate->candidate_profile->working_status =="Declined")? "selected" : "" }}>Declined</option>
                        <option value="Do Not Contact" {{ old('working_status',$candidate->candidate_profile->working_status =="Do Not Contact")? "selected" : "" }}>Do Not Contact</option>
                        <option value="Interview" {{ old('working_status',$candidate->candidate_profile->working_status =="Interview")? "selected" : "" }}>Interview</option>
                        <option value="Not Contacted" {{ old('working_status',$candidate->candidate_profile->working_status =="Not Contacted")? "selected" : "" }}>Not Contacted</option>
                        <option value="Offer" {{ old('working_status',$candidate->candidate_profile->working_status =="Offer")? "selected" : "" }}>Offer</option>
                        <option value="Phone / Direct Screen" {{ old('working_status',$candidate->candidate_profile->working_status =="Phone / Direct Screen")? "selected" : "" }}>Phone / Direct Screen</option>
                        <option value="Rejected" {{ old('working_status',$candidate->candidate_profile->working_status =="Rejected")? "selected" : "" }}>Rejected</option>
                        <option value="Reviewed" {{ old('working_status',$candidate->candidate_profile->working_status =="Reviewed")? "selected" : "" }}>Reviewed</option>
                        <option value="Short Listed" {{ old('working_status',$candidate->candidate_profile->working_status =="Short Listed")? "selected" : "" }}>Short Listed</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="access_status">Access Status</label>
                    <select class="form-control form-select-lg mb-3"
                        name="access_status" aria-label=".form-select-lg example">
                        <option value="Enable" {{ old('access_status',$candidate->candidate_profile->access_status =="Enable")? "selected" : "" }}>Enable</option>
                        <option value="Disable" {{ old('access_status',$candidate->candidate_profile->access_status =="Disable")? "selected" : "" }}>Disable</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="graduation">Graduation</label>
                    <select class="form-control form-select-lg mb-3"
                        name="graduation" aria-label=".form-select-lg example">
                        <option value="Local Graduate" {{ old('graduation',$candidate->graduation =="Local Graduate")? "selected" : "" }}>Local Graduate</option>
                        <option value="Overseas Graduate" {{ old('graduation',$candidate->graduation =="Overseas Graduate")? "selected" : "" }}>Overseas Graduate</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="recruitement">Rec Consultant</label>
                    <input class="form-control" type="text" name="recruitement" id="recruitement"
                    placeholder="" value="{{ old('recruitement',$candidate->recruitement)}}">

                </div>
                <div class="col-md-4 form-group">
                    <label for="registeration_body">Registration Body</label>
                    <select class="form-control form-select-lg mb-3"
                        name="registeration_body" aria-label=".form-select-lg example">
                        <option value="AHPRA" {{ old('registeration_body',$candidate->candidate_profile->registeration_body =="AHPRA")? "selected" : "" }}>AHPRA</option>
                        <option value="GMC" {{ old('registeration_body',$candidate->candidate_profile->registeration_body =="GMC")? "selected" : "" }}>GMC</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="source_type">Source Type</label>
                    <select class="form-control form-select-lg mb-3"
                        name="source_type" aria-label=".form-select-lg example">
                        <option value="Social Media Platforms" {{ old('source_type',$candidate->candidate_profile->source_type =="Social Media Platforms")? "selected" : "" }}>Social Media Platforms</option>
                        <option value="External Job Board" {{ old('source_type',$candidate->candidate_profile->source_type =="External Job Board")? "selected" : "" }}>External Job Board</option>
                        <option value="Medfuture" {{ old('source_type',$candidate->candidate_profile->source_type =="Medfuture")? "selected" : "" }}>Medfuture</option>
                        <option value="Referral" {{ old('source_type',$candidate->candidate_profile->source_type =="Referral")? "selected" : "" }}>Referral</option>
                        <option value="Email Marketing" {{ old('source_type',$candidate->candidate_profile->source_type =="Email Marketing")? "selected" : "" }}>Email Marketing</option>
                        <option value="Search Engine" {{ old('source_type',$candidate->candidate_profile->source_type =="Search Engine")? "selected" : "" }}>Search Engine</option>
                        <option value="Headhunting" {{ old('source_type',$candidate->candidate_profile->source_type =="Headhunting")? "selected" : "" }}>Headhunting</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="professional_qualification">Prof Qualification</label>
                    <input class="form-control" type="text" name="professional_qualification" id="professional_qualification"
                    placeholder="" value="{{ old('professional_qualification',$candidate->professional_qualification)}}">
                </div>
                <div class="col-md-4 form-group">
                    <label for="email_verified">Email - Verify</label>
                    <select class="form-control form-select-lg mb-3"
                        name="email_verified" aria-label=".form-select-lg example">
                        <option value="Enable" {{ old('email_verified',$candidate->candidate_profile->email_verified =="Enable")? "selected" : "" }}>Enable</option>
                        <option value="Disable" {{ old('email_verified',$candidate->candidate_profile->email_verified =="Disable")? "selected" : "" }}>Disable</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="profile_grade">Profile Grade</label>
                    <select class="form-control form-select-lg mb-3"
                        name="profile_grade" aria-label=".form-select-lg example">
                        <option value="Platinum" {{ old('profile_grade',$candidate->candidate_profile->profile_grade =="Platinum")? "selected" : "" }}>Platinum</option>
                        <option value="Diamond" {{ old('profile_grade',$candidate->candidate_profile->profile_grade =="Diamond")? "selected" : "" }}>Diamond</option>
                        <option value="Gold" {{ old('profile_grade',$candidate->candidate_profile->profile_grade =="Gold")? "selected" : "" }}>Gold</option>
                        <option value="Silver" {{ old('profile_grade',$candidate->candidate_profile->profile_grade =="Silver")? "selected" : "" }}>Silver</option>
                        <option value="Bronz" {{ old('profile_grade',$candidate->candidate_profile->profile_grade =="Bronz")? "selected" : "" }}>Bronz</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="registration_via">Registration Via</label>
                    <select class="form-control form-select-lg mb-3"
                        name="registration_via" aria-label=".form-select-lg example">
                        <option value="Direct" {{ old('registration_via',$candidate->candidate_profile->registration_via =="Direct")? "selected" : "" }}>Direct</option>
                        <option value="Back-end" {{ old('registration_via',$candidate->candidate_profile->registration_via =="Back-end")? "selected" : "" }}>Back-end</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="visa_status">Visa Status</label>
                    <select class="form-control form-select-lg mb-3"
                        name="visa_status" aria-label=".form-select-lg example">
                        <option value="Yes" {{ old('visa_status',$candidate->candidate_profile->visa_status =="Yes")? "selected" : "" }}>Yes</option>
                        <option value="No" {{ old('visa_status',$candidate->candidate_profile->visa_status =="No")? "selected" : "" }}>No</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-4 form-group">
                    <label for="lead_method">Lead Method</label>
                    <select class="form-control form-select-lg mb-3"
                        name="lead_method" aria-label=".form-select-lg example">
                        <option value="Sourced" {{ old('lead_method',$candidate->candidate_profile->lead_method =="Sourced")? "selected" : "" }}>Sourced</option>
                        <option value="Applied" {{ old('lead_method',$candidate->candidate_profile->lead_method =="Applied")? "selected" : "" }}>Applied</option>
                        <option value="Referred" {{ old('lead_method',$candidate->candidate_profile->lead_method =="Referred")? "selected" : "" }}>Referred</option>
                    </select>
                    <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-12 profile-eidt-form-btn">
                    <button class="btn back-btn">Back</button>
                    <input type="submit" class="btn" placeholder="Submit">
                </div>
            </form>
        </div>
        @if (!empty($candidate->cv_document) && !is_null($candidate->cv_document))
        @php
            $fileSize = \File::size(public_path('files/'. $candidate->cv_document));
        @endphp
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 card-img">
                                    <img src="{{asset('img/dashboard/PDF.png')}}"
                                        class="img-fluid pdf-upload rounded-start" alt="...">
                                </div>
                                <div class="col-md-10 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$candidate->cv_document ?? 'no file'}}</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{ round(($fileSize/1024),2) }}KB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/Calendar.png')}}"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-11 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Applied Date</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{$candidate->created_at ?? ''}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="{{ url('files/'. $candidate->cv_document ?? 'no file') }}" target="_blank">
                                <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid"
                                    alt="Eye" >
                            </a>
                            <a href="{{asset('img/dashboard/Download.png')}}" download>
                                <img src="{{asset('img/dashboard/Download.png')}}"
                                    class="img-fluid gray-color" alt="download">
                            </a>
                            <a href="#">
                                <img src="{{asset('img/dashboard/Upload.png')}}"
                                    class="img-fluid gray-color" alt="Upload">
                            </a>
                            <a href="#">
                                <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                    class="img-fluid gray-color" alt="Delete-Trash">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (!empty($candidate->registration_form_document) && !is_null($candidate->registration_form_document))
        @php
            $fileSize = \File::size(public_path('files/'. $candidate->registration_form_document));
        @endphp
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 card-img">
                                    <img src="{{asset('img/dashboard/PDF.png')}}"
                                        class="img-fluid pdf-upload rounded-start" alt="...">
                                </div>
                                <div class="col-md-10 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$candidate->registration_form_document ?? 'no file'}}</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{ round(($fileSize/1024),2) }}KB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/Calendar.png')}}"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-11 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Applied Date</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{$candidate->created_at ?? ''}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="{{ url('files/'. $candidate->registration_form_document ?? 'no file') }}" target="_blank">
                                <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid"
                                    alt="Eye">
                            </a>
                            <a href="{{asset('img/dashboard/Download.png')}}" download>
                                <img src="{{asset('img/dashboard/Download.png')}}"
                                    class="img-fluid gray-color" alt="download">
                            </a>
                            <a href="#">
                                <img src="{{asset('img/dashboard/Upload.png')}}"
                                    class="img-fluid gray-color" alt="Upload">
                            </a>
                            <a href="#">
                                <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                    class="img-fluid gray-color" alt="Delete-Trash">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (!empty($candidate->privacy_concerns) && !is_null($candidate->privacy_concerns))
        @php
            $fileSize = \File::size(public_path('files/'. $candidate->privacy_concerns));
        @endphp
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 card-img">
                                    <img src="{{asset('img/dashboard/PDF.png')}}"
                                        class="img-fluid  pdf-upload rounded-start" alt="...">
                                </div>
                                <div class="col-md-10 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$candidate->privacy_concerns ?? 'no file'}}</h5>
                                        <p class="card-text"><small
                                                class="text-muted">
                                                {{ round(($fileSize/1024),2) }}KB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/Calendar.png')}}"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-11 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Applied Date</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{$candidate->created_at ?? ''}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="{{ url('files/'. $candidate->privacy_concerns ?? 'no file') }}" target="_blank">
                                <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid"
                                    alt="Eye">
                            </a>
                            <a href="{{asset('img/dashboard/Download.png')}}" download>
                            <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid gray-color"
                                alt="download">
                            </a>
                            <a href="#">
                            <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid gray-color"
                                alt="Upload">
                            </a>
                            <a href="#">
                            <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                class="img-fluid gray-color" alt="Delete-Trash">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (!empty($candidate->cv_document) && !is_null($candidate->cv_document))
        @php
            $fileSize = \File::size(public_path('files/'. $candidate->cv_document));
        @endphp
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 card-img">
                                    <img src="{{asset('img/dashboard/PDF.png')}}"
                                        class="img-fluid  pdf-upload rounded-start" alt="...">
                                </div>
                                <div class="col-md-10 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$candidate->cv_document ?? 'no file'}}</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{ round(($fileSize/1024),2) }}KB</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/Calendar.png')}}"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-11 padd-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Applied Date</h5>
                                        <p class="card-text"><small
                                                class="text-muted">{{$candidate->created_at ?? ''}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="#">
                            <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid"
                                alt="Eye">
                            </a>
                                <a href="{{asset('img/dashboard/Download.png')}}" download>
                            <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid gray-color"
                                alt="download">
                                </a>
                                <a href="#">
                            <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid gray-color"
                                alt="Upload">
                                </a>
                                <a href="#">
                            <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                class="img-fluid gray-color" alt="Delete-Trash">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="edit-brn">
            <button class="btn files-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                    class="img-fluid" alt="Edit-img"> Edit</button>
        </div>
        <div class="forms-colored-div">
            <div class="blue"></div>
            <div class="purple"></div>
            <div class="pink"></div>
        </div>
    </div>


</div>
