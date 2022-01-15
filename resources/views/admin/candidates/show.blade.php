@extends('layouts.admin')
@section('content')
<div class="content single-candidate">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.candidate.title') }}
                </div> -->
                <div class="panel-heading">
                    <div class="view-candi">
                        <a class="btn btn-default back-candidate" href="{{ route('admin.candidates.index') }}">
                            <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                        </a>
                        <h4>View Candidate Profile</h4>

                        <!-- <h4> {{ trans('global.create') }} {{ trans('cruds.candidate.title_singular') }}</h4> -->
                    </div>
                    <div class="dashbord-button">
                        <a href="#" class="btn dashbord-btn dashbord-primary ">
                            <h3>Dashboard</h3>
                        </a>
                        <a href="#" class="btn candidate-dash-btn dashbord-primary">
                            <h3>Candidate <br> Dashboard </h3>
                        </a>
                    </div>
                </div>


                <section class="profile-sec">
                    <div class="container-fluid">
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

                                        {{-- <div class="col-md-12 profile-eidt-form-inner">
                                            <div class="upload-add-candi">
                                                <input class="form-control" type="file" name="profession"
                                                    id="profession" value="">
                                                <span class="upload-add-candi-txt">
                                                    <p>Drop files here to upload</p>
                                                </span>
                                                <div class="upload-icon">
                                                    <i class="fas fa-arrow-up"></i>
                                                    <p>Upload</p>
                                                </div>
                                            </div>
                                        </div> --}}
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
                                        {{-- <div class="col-md-12 profile-eidt-form-inner">
                                            <label for="Profession">ID</label>
                                            <input class="form-control" type="text" name="profession" id="profession"
                                                value="{{$candidate->home}}">
                                        </div> --}}
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
                                                <option value="Yes"{{ old('register',$candidate->candidate_profile->register =="Yes")? "selected" : "" }}>Yes</option>
                                                <option value="No" {{ old('register',$candidate->candidate_profile->register =="No")? "selected" : "" }}>No</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="verified">Verified</label>
                                            <select class="form-control form-select-lg mb-3"
                                                name="verified" aria-label=".form-select-lg example">
                                                <option value="Yes" {{ old('verified',$candidate->candidate_profile->verified =="Yes")? "selected" : "" }}>Yes</option>
                                                <option value="No" {{ old('verified',$candidate->candidate_profile->verified =="Yes")? "selected" : "" }}>No</option>
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
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small
                                                                        class="text-muted">58KB</small></p>
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
                                                                        class="text-muted">12/1/2021</small></p>
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
                                                    <a href="#">
                                                        <img src="{{asset('img/dashboard/Download.png')}}"
                                                            class="img-fluid" alt="download">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{asset('img/dashboard/Upload.png')}}"
                                                            class="img-fluid" alt="Upload">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                            class="img-fluid" alt="Delete-Trash">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
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
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small
                                                                        class="text-muted">58KB</small></p>
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
                                                                        class="text-muted">12/1/2021</small></p>
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
                                                    <a href="#">
                                                        <img src="{{asset('img/dashboard/Download.png')}}"
                                                            class="img-fluid" alt="download">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{asset('img/dashboard/Upload.png')}}"
                                                            class="img-fluid" alt="Upload">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                            class="img-fluid" alt="Delete-Trash">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
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
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small
                                                                        class="text-muted">58KB</small></p>
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
                                                                        class="text-muted">12/1/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid"
                                                        alt="Eye">
                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid"
                                                        alt="download">
                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid"
                                                        alt="Upload">
                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                        class="img-fluid" alt="Delete-Trash">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
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
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small
                                                                        class="text-muted">58KB</small></p>
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
                                                                        class="text-muted">12/1/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid"
                                                        alt="Eye">
                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid"
                                                        alt="download">
                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid"
                                                        alt="Upload">
                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                        class="img-fluid" alt="Delete-Trash">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="edit-brn">
                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                            class="img-fluid" alt="Edit-img"> Edit</button>
                                </div>
                                <div class="forms-colored-div">
                                    <div class="blue"></div>
                                    <div class="purple"></div>
                                    <div class="pink"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <section class="referrals-sec">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 referrals-left">
                                <div class="row candidate-referrals">
                                    <div class="col-md-12">
                                        <div class="referrals-txt">
                                            <h3>My Referrals</h3>
                                            <div class="candidate-date">
                                                <div class="form-group">
                                                    <select class="form-control" name="title" id="title" required="">
                                                        <option value="" selected="">2020-2021</option>
                                                        <option value="2019-2020">2019-2020</option>
                                                        <option value="2018-2019">2018-2019</option>
                                                        <option value="2017-2018">2017-2018</option>
                                                        <option value="2016-2017">2016-2017</option>
                                                        <option value="2015-2016">2015-2016</option>
                                                    </select>
                                                    <i class="fas fa-sort-down"></i>
                                                </div>
                                                <span class="date-background"></span>
                                            </div>
                                        </div>

                                        <div class="referrals-award">
                                            <div class="referrals-award-inner">
                                                <h5>Medfuture <br> Doctor</h5>
                                                <div>
                                                    <img src=" {{asset('img/dashboard/credit-card-chip.png')}}"
                                                        class="img-fluid" alt="Edit-img">
                                                    <img src=" {{asset('img/dashboard/Spotlight.png')}}"
                                                        class="img-fluid" alt="Edit-img">
                                                </div>
                                            </div>
                                            <div class="award">
                                                <div class="award-circle">
                                                    <span class="dollar">
                                                        <h2>A$20</h2>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="master-card">
                                                <img src=" {{asset('img/dashboard/master-card.png')}}" class="img-fluid"
                                                    alt="Edit-img">
                                            </div>
                                            <div class="forms-colored-div">
                                                <div class="blue"></div>
                                                <div class="purple"></div>
                                                <div class="pink"></div>
                                            </div>
                                        </div>

                                        <p>Refer a friend today and boost your income !</p>
                                        <div class="edit-brn">
                                            <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                                    class="img-fluid" alt="Edit-img"> Edit</button>
                                        </div>
                                    </div>
                                    <div class="forms-colored-div">
                                        <div class="blue"></div>
                                        <div class="purple"></div>
                                        <div class="pink"></div>
                                    </div>
                                </div>


                                <div class="row candidate-progress">
                                    <div class="col-md-12">
                                        <div class="candidate-date">
                                            <div class="form-group">
                                                <select class="form-control" name="title" id="title" required="">
                                                    <option value="" selected="">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2016-2017">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                            </div>
                                            <span class="date-background"></span>
                                        </div>
                                        <div class="candidate-progress-txt">
                                            <h3>Candidate Recruitment Progress</h3>
                                        </div>
                                        <div class="candidate-progress-bar">
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">25</span></div>
                                            </div>


                                        </div>
                                        <div class="edit-brn">
                                            <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                                    class="img-fluid" alt="Edit-img"> Edit</button>
                                        </div>
                                    </div>
                                    <div class="forms-colored-div">
                                        <div class="blue"></div>
                                        <div class="purple"></div>
                                        <div class="pink"></div>
                                    </div>
                                </div>


                                <div class="row candidate-counter">
                                    <div class="col-md-12">
                                        <div class="candidate-date">
                                            <div class="form-group">
                                                <select class="form-control" name="title" id="title" required="">
                                                    <option value="" selected="">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2016-2017">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                            </div>
                                            <span class="date-background"></span>
                                        </div>
                                        <div class="counter-circle-d-none">
                                            <div class="row m-20 ">
                                                <div class="col-md-4">
                                                    <!-- <div class="counter-div">
                                                        <div class="counter-inner">
                                                            <span>2</span>
                                                        </div>
                                                        <div class="counter-txt">
                                                            <p>Contacted</p>
                                                        </div>

                                                    </div> -->
                                                    <div class="percent">
                                                        <p style="display:none;">5</p>
                                                        <div class="counter-txt">
                                                            <p>Contacted</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="percent">
                                                        <p style="display:none;">40</p>
                                                        <div class="counter-txt">
                                                            <p>Initial Screening</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">50</p>
                                                        <div class="counter-txt">
                                                            <p>Short Listed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Shelved</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">30</p>
                                                        <div class="counter-txt">
                                                            <p>Job Matching</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">20</p>
                                                        <div class="counter-txt">
                                                            <p>Submissions</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">10</p>
                                                        <div class="counter-txt">
                                                            <p>Declined</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">10</p>
                                                        <div class="counter-txt">
                                                            <p>Interviews</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">30</p>
                                                        <div class="counter-txt">
                                                            <p>Due Diligence Check</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Offered</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Rejected / Accepted</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Placed</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Archived</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Testimony</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="edit-brn">
                                                <button class="btn counter-edit-btn"><img
                                                        src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                        alt="Edit-img"> Edit</button>
                                            </div>
                                        </div>
                                        <div class="counter-circle-form">
                                            <form action="" class="row">
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Contacted">Contacted</label>
                                                    <input class="form-control" type="text" name="contacted"
                                                        id="contacted" value="5">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Initial_Screening">Initial Screening</label>
                                                    <input class="form-control" type="text" name="Initial_Screening"
                                                        id="Initial_Screening" value="40">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Short_Listed">Short Listed</label>
                                                    <input class="form-control" type="text" name="Short_Listed"
                                                        id="Short_Listed" value="50">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Shelved">Shelved</label>
                                                    <input class="form-control" type="text" name="Shelved" id="Shelved"
                                                        value="5">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Job_Matching">Job Matching</label>
                                                    <input class="form-control" type="text" name="Job_Matching"
                                                        id="Job_Matching" value="40">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Submissions">Submissions</label>
                                                    <input class="form-control" type="text" name="Submissions"
                                                        id="Submissions" value="50">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Declined">Declined</label>
                                                    <input class="form-control" type="text" name="Declined"
                                                        id="Declined" value="5">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Interviews">Interviews</label>
                                                    <input class="form-control" type="text" name="Interviews"
                                                        id="Interviews" value="40">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Due_Check">Due Diligence Check</label>
                                                    <input class="form-control" type="text" name="Due_Check"
                                                        id="Due_Check" value="50">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Offered">Offered</label>
                                                    <input class="form-control" type="text" name="Offered" id="Offered"
                                                        value="5">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Rejected ">Rejected / Accepted</label>
                                                    <input class="form-control" type="text" name="Rejected "
                                                        id="Rejected " value="40">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Placed">Placed</label>
                                                    <input class="form-control" type="text" name="Placed" id="Placed"
                                                        value="50">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Archived ">Archived</label>
                                                    <input class="form-control" type="text" name="Archived "
                                                        id="Archived " value="40">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="Testimony">Testimony</label>
                                                    <input class="form-control" type="text" name="Testimony"
                                                        id="Testimony" value="50">
                                                </div>
                                                <div class="col-md-12 profile-eidt-form-btn">
                                                    <button class="btn back-btn">Back</button>
                                                    <input type="submit" class="btn" placeholder="Submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="forms-colored-div">
                                        <div class="blue"></div>
                                        <div class="purple"></div>
                                        <div class="pink"></div>
                                    </div>
                                </div>

                                <div class="row candidate-assign-to">
                                    <div class="col-md-12">
                                        <div class="candidate-assign-txt">
                                            <div class="candidate-date">
                                                <div class="form-group">
                                                    <select class="form-control" name="title" id="title" required="">
                                                        <option value="" selected="">2020-2021</option>
                                                        <option value="2019-2020">2019-2020</option>
                                                        <option value="2018-2019">2018-2019</option>
                                                        <option value="2017-2018">2017-2018</option>
                                                        <option value="2016-2017">2016-2017</option>
                                                        <option value="2015-2016">2015-2016</option>
                                                    </select>
                                                    <i class="fas fa-sort-down"></i>
                                                </div>
                                                <span class="date-background"></span>
                                            </div>
                                            <h3>Assigned to</h3>
                                        </div>
                                        <div class="assign-form">
                                            <div class="assign-form-d-none">
                                            <form action="" method="" class="assign-form-inner">
                                                <div class="row">

                                                    <div class="col-md-12 form-group">
                                                        <label for="Candidate_Manager">Candidate Manager</label>
                                                        <select class="form-select form-select-lg mb-3" name="candidate_manager"
                                                            aria-label=".form-select-lg example">
                                                            <option value=""  selected="">{{$candidate->candidate_manager}}
                                                            </option>
                                                            <option value="1" disabled>One</option>
                                                            <option value="2" disabled>Two</option>
                                                            <option value="3" disabled>Three</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label for="Recruitement">Recruitement Consultant</label>
                                                        <select class="form-select form-select-lg mb-3" name="recruitement"
                                                            aria-label=".form-select-lg example">
                                                            <option value="">{{$candidate->recruitement}}</option>
                                                            <option value="1" disabled>One</option>
                                                            <option value="2" disabled>Two</option>
                                                            <option value="3" disabled>Three</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label for="Administrator">Data Administrator</label>
                                                        <select class="form-select form-select-lg mb-3" name="administrator"
                                                            aria-label=".form-select-lg example">
                                                            <option value="">{{$candidate->administrator}}
                                                            </option>
                                                            <option value="1" disabled>One</option>
                                                            <option value="2" disabled>Two</option>
                                                            <option value="3" disabled>Three</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>

                                                    </div>
                                                </form>
                                                <div class="edit-brn">
                                                    <button class="btn assign-edit-btn"><img
                                                            src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                            alt="Edit-img"> Edit</button>
                                                </div>
                                            </div>
                                            <div class="assign-eidt-form">
                                                <form action="{{ url("update2", [$candidate->id]) }}" method="post" class="assign-form-edit assign-form-inner">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <label for="Candidate_Manager">Candidate Manager</label>
                                                            <select class="form-select form-select-lg mb-3" id="candidate_manager" name="candidate_manager"
                                                                aria-label=".form-select-lg example">

                                                                <option value="one"{{ old('candidate_manager',$candidate->candidate_manager =="one")? "selected" : "" }}>One</option>
                                                                <option value="two"{{ old('candidate_manager',$candidate->candidate_manager =="two")? "selected" : "" }}>Two</option>
                                                                <option value="three"{{ old('candidate_manager',$candidate->candidate_manager =="three")? "selected" : "" }}>Three</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Recruitement">Recruitement Consultant</label>
                                                            <select class="form-select form-select-lg mb-3" name="recruitement" id="recruitement"
                                                                aria-label=".form-select-lg example">

                                                                <option value="no"{{ old('recruitement',$candidate->recruitement =="no")? "selected" : "" }}>no</option>
                                                                <option value="yes"{{ old('recruitement',$candidate->recruitement =="yes")? "selected" : "" }}>yes</option>
                                                                <option value="false"{{ old('recruitement',$candidate->recruitement =="false")? "selected" : "" }}>false</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Administrator">Data Administrator</label>
                                                            <select class="form-select form-select-lg mb-3" name="administrator"
                                                                aria-label=".form-select-lg example">

                                                                <option value="ali"{{ old('administrator',$candidate->administrator =="no")? "selected" : "" }}>ali</option>
                                                                <option value="hassan"{{ old('administrator',$candidate->administrator =="no")? "selected" : "" }}>hassan</option>
                                                                <option value="amir"{{ old('administrator',$candidate->administrator =="no")? "selected" : "" }}>amir</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 profile-eidt-form-btn">
                                                            <button class="btn back-btn">Back</button>
                                                            <input type="submit" class="btn" placeholder="Submit">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="forms-colored-div">
                                        <div class="blue"></div>
                                        <div class="purple"></div>
                                        <div class="pink"></div>
                                    </div>
                                </div>

                                <div class="row notification-btns">
                                    <div class="col-md-4">
                                        <button class="btn">
                                            Compliance Check
                                        </button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn">
                                            Notification
                                        </button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn">
                                            Alert to Medfuture
                                        </button>
                                    </div>
                                </div>
                                <div class="row candidate-reference">
                                    <div class="col-md-12 padd-l-0">
                                        <div class="reference-txt">
                                            <h3>Reference</h3>
                                            <div class="reference-lock">
                                                <img src=" {{asset('img/dashboard/Lock.png')}}" class="img-fluid"
                                                    alt="Edit-img">
                                                <div class="candidate-date">
                                                    <div class="form-group">
                                                        <select class="form-control" name="title" id="title"
                                                            required="">
                                                            <option value="" selected="">2020-2021</option>
                                                            <option value="2019-2020">2019-2020</option>
                                                            <option value="2018-2019">2018-2019</option>
                                                            <option value="2017-2018">2017-2018</option>
                                                            <option value="2016-2017">2016-2017</option>
                                                            <option value="2015-2016">2015-2016</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                                    <span class="date-background"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reference-form">
                                            <form action="submit" method="post" class="reference-form-inner">
                                                <h4>Referee 1</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="First Name" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Last Name" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile"
                                                                id="first_name" placeholder="Telephone" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile"
                                                                id="title" placeholder="Email" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="Referee’s Job Titile"
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Referee 2</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="First Name" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Last Name" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile"
                                                                id="first_name" placeholder="Telephone" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile"
                                                                id="title" placeholder="Email" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="Referee’s Job Titile"
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Referee 3</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="First Name" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Last Name" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile"
                                                                id="first_name" placeholder="Telephone" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile"
                                                                id="title" placeholder="Email" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="Referee’s Job Titile"
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edit-brn">
                                                    <button class="btn reference-edit-btn"><img
                                                            src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                            alt="Edit-img"> Edit</button>
                                                </div>
                                            </form>
                                            <form action="submit" method="post" class="reference-form-inner-d-none">
                                                <h4>Referee 1</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="" value="Title" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="" value="First Name"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="" value="Last Name" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile"
                                                                id="first_name" placeholder="" value="Telephone"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile"
                                                                id="title" placeholder="" value="Email" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder=""
                                                                value="Referee’s Job Titile" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Referee 2</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="" value="First Name"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="" value="Last Name" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile"
                                                                id="first_name" placeholder="" value="Telephone"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile"
                                                                id="title" placeholder="" value="Email" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder=""
                                                                value="Referee’s Job Titile" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Referee 3</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="" value="Title" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder="" value="First Name"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="title" placeholder="" value="Last Name" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile"
                                                                id="first_name" placeholder="" value="Telephone"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile"
                                                                id="title" placeholder="" value="Email" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile"
                                                                id="first_name" placeholder=""
                                                                value="Referee’s Job Titile" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 profile-eidt-form-btn">
                                                    <button class="btn back-btn">Back</button>
                                                    <input type="submit" class="btn" placeholder="Submit">
                                                </div>
                                            </form>

                                            <div class="referee-document">
                                                <h4>Referee Documents</h4>
                                                <div class="row profile-details-upload">
                                                    <div class="col-md-12">
                                                        <div class="row profile-details">
                                                            <div class="col-md-8">
                                                                <div class="card mb-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-1 card-img">
                                                                            <img src="{{asset('img/dashboard/PDF.png')}}"
                                                                                class="img-fluid pdf-upload rounded-start"
                                                                                alt="...">
                                                                        </div>
                                                                        <div class="col-md-11 padd-l-0">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Referee Report 1
                                                                                    .pdf</h5>
                                                                                <p class="card-text"><small
                                                                                        class="text-muted">32KB |
                                                                                        12/3/2021 </small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="profile-buttons">
                                                                    <img src="{{asset('img/dashboard/Eye.png')}}"
                                                                        class="img-fluid" alt="Eye">
                                                                    <img src="{{asset('img/dashboard/Download.png')}}"
                                                                        class="img-fluid" alt="download">
                                                                    <img src="{{asset('img/dashboard/Upload.png')}}"
                                                                        class="img-fluid" alt="Upload">
                                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                                        class="img-fluid" alt="Delete-Trash">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row profile-details-upload">
                                                    <div class="col-md-12">
                                                        <div class="row profile-details">
                                                            <div class="col-md-8">
                                                                <div class="card mb-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-1 card-img">
                                                                            <img src="{{asset('img/dashboard/Video-File.png')}}"
                                                                                class="img-fluid pdf-upload rounded-start"
                                                                                alt="...">
                                                                        </div>
                                                                        <div class="col-md-11 padd-l-0">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Referee Report 2
                                                                                    .pdf</h5>
                                                                                <p class="card-text"><small
                                                                                        class="text-muted">32KB |
                                                                                        12/3/2021</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="profile-buttons">
                                                                    <img src="{{asset('img/dashboard/Eye.png')}}"
                                                                        class="img-fluid" alt="Eye">
                                                                    <img src="{{asset('img/dashboard/Download.png')}}"
                                                                        class="img-fluid" alt="download">
                                                                    <img src="{{asset('img/dashboard/Upload.png')}}"
                                                                        class="img-fluid" alt="Upload">
                                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                                        class="img-fluid" alt="Delete-Trash">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row profile-details-upload">
                                                    <div class="col-md-12">
                                                        <div class="row profile-details">
                                                            <div class="col-md-8">
                                                                <div class="card mb-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-1 card-img">
                                                                            <img src="{{asset('img/dashboard/MP3.png')}}"
                                                                                class="img-fluid pdf-upload rounded-start"
                                                                                alt="...">
                                                                        </div>
                                                                        <div class="col-md-11 padd-l-0">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Referee Report 3
                                                                                    .pdf</h5>
                                                                                <p class="card-text"><small
                                                                                        class="text-muted">56KB |
                                                                                        12/3/2021</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="profile-buttons">
                                                                    <img src="{{asset('img/dashboard/Eye.png')}}"
                                                                        class="img-fluid" alt="Eye">
                                                                    <img src="{{asset('img/dashboard/Download.png')}}"
                                                                        class="img-fluid" alt="download">
                                                                    <img src="{{asset('img/dashboard/Upload.png')}}"
                                                                        class="img-fluid" alt="Upload">
                                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                                        class="img-fluid" alt="Delete-Trash">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edit-brn">
                                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                                            class="img-fluid" alt="Edit-img"> Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="forms-colored-div">
                                            <div class="blue"></div>
                                            <div class="purple"></div>
                                            <div class="pink"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="col-md-7 job-summary">
                                <div class="job-summary-inner">
                                    <div class="job-summary-top">
                                        <div class="candidate-date">
                                            <div class="form-group">
                                                <select class="form-control" name="title" id="title" required="">
                                                    <option value="" selected="">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2016-2017">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                            </div>
                                            <span class="date-background"></span>
                                        </div>

                                        <h3>Job Summary</h3>
                                        <div class="job-summary-eidt">
                                        <p class="summary-id">ID: AH5841</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quidem est rerum
                                            placeat nobis voluptates fuga in laudantium cumque veniam! Suscipit at esse
                                            tenetur neque cumque, amet quasi incidunt voluptatibus?</p>
                                        <div class="summary-bottom">
                                            <p>Last Updated Date 01st November, 2021</p>
                                            <div class="edit-brn">
                                                <button class="btn job-summary-eidt-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                                        class="img-fluid" alt="Edit-img"> Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-summary-d-none">
                                        <form action="" class="row">
                                            <div class="col-md-12 profile-eidt-form-inner">
                                                <label for="ID">ID</label>
                                                <input class="form-control" type="text" name="ID" id="ID"
                                                    value="ID">
                                            </div>
                                            <div class="col-md-12 profile-eidt-form-inner">
                                                <label for="Job Summary">Job Summary Note</label>
                                                <textarea name="Job_Summary" id="Job_Summary" cols="76" rows="7">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quidem est rerum placeat nobis voluptates fuga in laudantium cumque veniam! Suscipit at esse
                                                </textarea>
                                            </div>
                                            <div class="col-md-12 profile-eidt-form-btn">
                                                <button class="btn back-btn">Back</button>
                                                <input type="submit" class="btn" placeholder="Submit">
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 interview">
                                            <div class="interview-inner">
                                                <h3> Interview Notes</h3>
                                                <p>Last Updated Date</p>
                                                <div class="interview-table">
                                                    <table class="table table-bordered table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Title
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="title" aria-label=".form-select-lg example">
                                                                        <option value="0" disabled>title</option>
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Miss">Miss</option>
                                                                        <option value="Ms">Ms</option>
                                                                        <option value="Dr">Dr</option>
                                                                        <option value="Prof">Prof</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    First Name
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Last Name
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Gender
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Mobile
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Profession
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="profession"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Doctor">Doctor</option>
                                                                        <option value="Nurse">Nurse</option>
                                                                        <option value="Allied Health Professionals">Allied
                                                                            Health Professionals</option>
                                                                        <option value="Healthcare Executives">Healthcare
                                                                            Executives</option>
                                                                        <option value="Dentists">Dentists</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Division
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="devision"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="General Practitioners ">General
                                                                            Practitioners </option>
                                                                        <option value="Healthcare Executives ">Healthcare
                                                                            Executives </option>
                                                                        <option value="Hospital Doctors">Hospital Doctors
                                                                        </option>
                                                                        <option value="Locum Doctors">Locum Doctors</option>
                                                                        <option value="Nurses &amp; Carers">Nurses &amp;
                                                                            Carers</option>
                                                                        <option value="Allergologist">Allergologist</option>
                                                                        <option value="Arts Therapist ">Arts Therapist
                                                                        </option>
                                                                        <option value="Audiologist">Audiologist</option>
                                                                        <option value="Chiropractor ">Chiropractor </option>
                                                                        <option value="Dietitians ">Dietitians </option>
                                                                        <option value="Exercise Physiologist ">Exercise
                                                                            Physiologist </option>
                                                                        <option value="Genetic Counsellor">Genetic
                                                                            Counsellor</option>
                                                                        <option value="Medical Radiologist ">Medical
                                                                            Radiologist </option>
                                                                        <option value="Music Therapist">Music Therapist
                                                                        </option>
                                                                        <option value="Occupational Therapist">Occupational
                                                                            Therapist</option>
                                                                        <option value="Optometrist">Optometrist</option>
                                                                        <option value="Orthotist and prosthetist">Orthotist
                                                                            and prosthetist</option>
                                                                        <option value="Osteopathist ">Osteopathist </option>
                                                                        <option value="Perfusionist ">Perfusionist </option>
                                                                        <option value="Physiotherapist">Physiotherapist
                                                                        </option>
                                                                        <option value="Podiatrist">Podiatrist</option>
                                                                        <option value="Psychologist">Psychologist</option>
                                                                        <option value="Psychology &amp; Mental health">
                                                                            Psychology &amp; Mental health</option>
                                                                        <option value="Rehabilitation Counsellor ">
                                                                            Rehabilitation Counsellor </option>
                                                                        <option value="Sonographer">Sonographer</option>
                                                                        <option value="Specialist service">Specialist
                                                                            service</option>
                                                                        <option value="Speech-pathology">Speech-pathology
                                                                        </option>
                                                                        <option value="Midwife">Midwife</option>
                                                                        <option value="Dentists">Dentists</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Seniority
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="senority"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Internship - PGY Year 1 ">Internship
                                                                            - PGY Year 1 </option>
                                                                        <option value="Junior House Officer - PGY Year 2 ">
                                                                            Junior House Officer - PGY Year 2 </option>
                                                                        <option value="Senior House Officer - PGY Year 3 ">
                                                                            Senior House Officer - PGY Year 3 </option>
                                                                        <option
                                                                            value="Principal Health Officer – PGY Year 4 ">
                                                                            Principal Health Officer – PGY Year 4 </option>
                                                                        <option value="Registrars">Registrars</option>
                                                                        <option value="Consultant">Consultant</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Specialty
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="specialty"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Anaesthetics">Anaesthetics</option>
                                                                        <option value="Emergency Medicine ">Emergency
                                                                            Medicine </option>
                                                                        <option value="General Practice ">General Practice
                                                                        </option>
                                                                        <option value="Gastroenterologist">
                                                                            Gastroenterologist</option>
                                                                        <option value="Intensive care ">Intensive care
                                                                        </option>
                                                                        <option value="Medicine">Medicine</option>
                                                                        <option value="Obtetrics &amp; Gynaecology ">
                                                                            Obtetrics &amp; Gynaecology </option>
                                                                        <option value="Pathologist">Pathologist</option>
                                                                        <option value="Peadiatrics">Peadiatrics</option>
                                                                        <option value="Psychiatry ">Psychiatry </option>
                                                                        <option value="Radiology">Radiology</option>
                                                                        <option value="Surgery ">Surgery </option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Start Date
                                                                </th>
                                                                <td>
                                                                    <input type="date" name="date">
                                                                    <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    End Date
                                                                </th>
                                                                <td>
                                                                    <input type="date" name="date">
                                                                    <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Distance
                                                                </th>
                                                                <td>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Job Seeking location
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country
                                                                </th>
                                                                <td class="padd-8">
                                                                   {{$candidate->country}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    State / Region / County
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->state}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Post Code
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->post_code}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Suburb/ Town
                                                                </th>
                                                                <td class="padd-8">
                                                                  {{$candidate->town}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Sub-Region/ District
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->district}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Main City
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->main_city}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Distance to Main City
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->distance_to_main}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Practise Licence Number
                                                                </th>
                                                                <td class="padd-8">

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Licence Board
                                                                </th>
                                                                <td class="padd-8">

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Registration/ License Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="license_type"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Eligible for General Registration ">
                                                                            Eligible for General Registration </option>
                                                                        <option value="Eligible for Limited Registration ">
                                                                            Eligible for Limited Registration </option>
                                                                        <option
                                                                            value="Eligible for Provisional Registration ">
                                                                            Eligible for Provisional Registration </option>
                                                                        <option value="General">General</option>
                                                                        <option value="Limited">Limited</option>
                                                                        <option value="Non-Practising Registration ">
                                                                            Non-Practising Registration </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Provisional">Provisional</option>
                                                                        <option value="Specialist">Specialist</option>
                                                                        <option value="Student">Student</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Primary Degree
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="country_of_primary_degree"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical School
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->medical_school}}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>
                                                                    Practice Licensing Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="practice_country"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Practice Licensing Body
                                                                </th>
                                                                <td class="padd-8">
                                                                    {{$candidate->practice_licensing_body}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Experience From Home Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="experience_from_home"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Experience From Residing Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="experience_from_residing"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Recognised Comparable Experience
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="recognised_comparable_experience"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Current Employment Status
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="current_employment_status"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Employed">Employed</option>
                                                                        <option value="Non-employed">Non-employed</option>
                                                                        <option value="Student">Student</option>
                                                                        <option value="Paternity Break">Paternity Break
                                                                        </option>
                                                                        <option value="Maternity Break">Maternity Break
                                                                        </option>
                                                                        <option value="Redundant">Redundant</option>
                                                                        <option value="Phase of Career Break">Phase of
                                                                            Career Break</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Engagement Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Employment Term
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Placement Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Gross Salary Expectation
                                                                </th>
                                                                <td class="padd-8">

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Hourly Rate Expectation
                                                                </th>
                                                                <td>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Billing Share
                                                                </th>
                                                                <td class="padd-8">

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Citizenship
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="country_of_citizenship"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Residence
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="country_of_residence"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    VISA Type or Subclass
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="visa_type"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Visitor visas">Visitor visas</option>
                                                                        <option value="Studying and training visas">Studying
                                                                            and training visas</option>
                                                                        <option value="Family and partner visas">Family and
                                                                            partner visas</option>
                                                                        <option value="Working and skilled visas">Working
                                                                            and skilled visas</option>
                                                                        <option value="Refugee and humanitarian visas">
                                                                            Refugee and humanitarian visas</option>
                                                                        <option value="Other visas">Other visas</option>
                                                                        <option value="Repealed visas">Repealed visas
                                                                        </option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Work Right Status
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="work_rights_status"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="No Limits">No Limits</option>
                                                                        <option value="Limited Working Hours">Limited
                                                                            Working Hours</option>
                                                                        <option value="No Working Rights">No Working Rights
                                                                        </option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    VISA Sponsorship
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Accommodation
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Travel Allowances
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Meal Allowances
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Uniform Allowances
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h4>Competitive Features</h4>
                                                                </td>
                                                                <td></td>

                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Moratorium Restriction
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Location Restrictions
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Training Program Requirement
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Training Program Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical Board Conditions
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical Board Undertakings
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="mb-3 text-area">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Skills & Interests</label>
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1"
                                                                            rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </textarea>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="mb-3 text-area">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Interviewer Notes</label>
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1"
                                                                            rows="3">Interviewer Complete Notes</textarea>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                    <div class="interview-btns">
                                                        <div class="edit-brn">
                                                            <button class="btn"><img
                                                                    src="{{asset('img/dashboard/Download.png')}}"
                                                                    class="img-fluid" alt="download"> Download</button>
                                                            <button class="btn"><img
                                                                    src=" {{asset('img/dashboard/Print-1.png')}}"
                                                                    class="img-fluid" alt="Edit-img"> Print </button>
                                                            <button class="btn"><img
                                                                    src=" {{asset('img/dashboard/Share.png')}}"
                                                                    class="img-fluid" alt="Edit-img"> Share</button>
                                                            <button class="btn interview-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                                                    class="img-fluid" alt="Edit-img"> Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="#" class="interview-form-d-none" method="post">
                                                    <table class="table table-bordered table-striped ">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Title
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="title" aria-label=".form-select-lg example">
                                                                        <option value="0" disabled>title</option>
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Miss">Miss</option>
                                                                        <option value="Ms">Ms</option>
                                                                        <option value="Dr">Dr</option>
                                                                        <option value="Prof">Prof</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    First Name
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Last Name
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Gender
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Mobile
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Profession
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="profession"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Doctor">Doctor</option>
                                                                        <option value="Nurse">Nurse</option>
                                                                        <option value="Allied Health Professionals">Allied
                                                                            Health Professionals</option>
                                                                        <option value="Healthcare Executives">Healthcare
                                                                            Executives</option>
                                                                        <option value="Dentists">Dentists</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Division
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="devision"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="General Practitioners ">General
                                                                            Practitioners </option>
                                                                        <option value="Healthcare Executives ">Healthcare
                                                                            Executives </option>
                                                                        <option value="Hospital Doctors">Hospital Doctors
                                                                        </option>
                                                                        <option value="Locum Doctors">Locum Doctors</option>
                                                                        <option value="Nurses &amp; Carers">Nurses &amp;
                                                                            Carers</option>
                                                                        <option value="Allergologist">Allergologist</option>
                                                                        <option value="Arts Therapist ">Arts Therapist
                                                                        </option>
                                                                        <option value="Audiologist">Audiologist</option>
                                                                        <option value="Chiropractor ">Chiropractor </option>
                                                                        <option value="Dietitians ">Dietitians </option>
                                                                        <option value="Exercise Physiologist ">Exercise
                                                                            Physiologist </option>
                                                                        <option value="Genetic Counsellor">Genetic
                                                                            Counsellor</option>
                                                                        <option value="Medical Radiologist ">Medical
                                                                            Radiologist </option>
                                                                        <option value="Music Therapist">Music Therapist
                                                                        </option>
                                                                        <option value="Occupational Therapist">Occupational
                                                                            Therapist</option>
                                                                        <option value="Optometrist">Optometrist</option>
                                                                        <option value="Orthotist and prosthetist">Orthotist
                                                                            and prosthetist</option>
                                                                        <option value="Osteopathist ">Osteopathist </option>
                                                                        <option value="Perfusionist ">Perfusionist </option>
                                                                        <option value="Physiotherapist">Physiotherapist
                                                                        </option>
                                                                        <option value="Podiatrist">Podiatrist</option>
                                                                        <option value="Psychologist">Psychologist</option>
                                                                        <option value="Psychology &amp; Mental health">
                                                                            Psychology &amp; Mental health</option>
                                                                        <option value="Rehabilitation Counsellor ">
                                                                            Rehabilitation Counsellor </option>
                                                                        <option value="Sonographer">Sonographer</option>
                                                                        <option value="Specialist service">Specialist
                                                                            service</option>
                                                                        <option value="Speech-pathology">Speech-pathology
                                                                        </option>
                                                                        <option value="Midwife">Midwife</option>
                                                                        <option value="Dentists">Dentists</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Seniority
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="senority"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Internship - PGY Year 1 ">Internship
                                                                            - PGY Year 1 </option>
                                                                        <option value="Junior House Officer - PGY Year 2 ">
                                                                            Junior House Officer - PGY Year 2 </option>
                                                                        <option value="Senior House Officer - PGY Year 3 ">
                                                                            Senior House Officer - PGY Year 3 </option>
                                                                        <option
                                                                            value="Principal Health Officer – PGY Year 4 ">
                                                                            Principal Health Officer – PGY Year 4 </option>
                                                                        <option value="Registrars">Registrars</option>
                                                                        <option value="Consultant">Consultant</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Specialty
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="specialty"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Anaesthetics">Anaesthetics</option>
                                                                        <option value="Emergency Medicine ">Emergency
                                                                            Medicine </option>
                                                                        <option value="General Practice ">General Practice
                                                                        </option>
                                                                        <option value="Gastroenterologist">
                                                                            Gastroenterologist</option>
                                                                        <option value="Intensive care ">Intensive care
                                                                        </option>
                                                                        <option value="Medicine">Medicine</option>
                                                                        <option value="Obtetrics &amp; Gynaecology ">
                                                                            Obtetrics &amp; Gynaecology </option>
                                                                        <option value="Pathologist">Pathologist</option>
                                                                        <option value="Peadiatrics">Peadiatrics</option>
                                                                        <option value="Psychiatry ">Psychiatry </option>
                                                                        <option value="Radiology">Radiology</option>
                                                                        <option value="Surgery ">Surgery </option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Start Date
                                                                </th>
                                                                <td>
                                                                    <input type="date" name="start_date">
                                                                    <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    End Date
                                                                </th>
                                                                <td>
                                                                    <input type="date" name="end_date">
                                                                    <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Distance
                                                                </th>
                                                                <td class="padd-8">
                                                                <input type="text" value="Distance" name="distance">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Job Seeking location
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_location"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                            name="country"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                        <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            {{-- <tr>
                                                                <th>
                                                                    State / Region / Country
                                                                </th>
                                                                <td>
                                                                <select class="form-select form-select-lg mb-3"
                                                                            name="job_title"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                    </select>
                                                                        <i class="fas fa-sort-down"></i>


                                                                </td>
                                                            </tr> --}}
                                                            <tr>
                                                                <th>
                                                                    Post Code
                                                                </th>
                                                                <td class="padd-8">
                                                                    <input type="text" value="{{$candidate->post_code}}" name="post_code">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Suburb/ Town
                                                                </th>
                                                                <td>
                                                                <select class="form-select form-select-lg mb-3"
                                                                            name="town"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                    </select>
                                                                        <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Sub-Region/ District
                                                                </th>
                                                                <td>
                                                                <select class="form-select form-select-lg mb-3"
                                                                            name="district"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                    </select>
                                                                        <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Main City
                                                                </th>
                                                                <td>
                                                                    <!-- {{$candidate->main_city}} -->
                                                                    <select class="form-select form-select-lg mb-3"
                                                                            name="main_city"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                    </select>
                                                                        <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Distance to Main City
                                                                </th>
                                                                <td>
                                                                    <!-- {{$candidate->distance_to_main}} -->
                                                                    <select class="form-select form-select-lg mb-3"
                                                                            name="job_title"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                    </select>
                                                                        <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Practise Licence Number
                                                                </th>
                                                                <td class="padd-8">
                                                                <input type="text" value="Practise Licence Number" name="Practise_Licence_Number">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Licence Board
                                                                </th>
                                                                <td class="padd-8">
                                                                <input type="text" value="Licence Board" name="Licence_Board">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Registration/ License Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="license_type"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Eligible for General Registration ">
                                                                            Eligible for General Registration </option>
                                                                        <option value="Eligible for Limited Registration ">
                                                                            Eligible for Limited Registration </option>
                                                                        <option
                                                                            value="Eligible for Provisional Registration ">
                                                                            Eligible for Provisional Registration </option>
                                                                        <option value="General">General</option>
                                                                        <option value="Limited">Limited</option>
                                                                        <option value="Non-Practising Registration ">
                                                                            Non-Practising Registration </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Provisional">Provisional</option>
                                                                        <option value="Specialist">Specialist</option>
                                                                        <option value="Student">Student</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Primary Degree
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="country_of_primary_degree"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical School
                                                                </th>
                                                                <td class="padd-8">
                                                                    <input type="text" value="{{$candidate->medical_school}}" name="Medical_School">

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>
                                                                    Practice Licensing Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="practice_country"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Practice Licensing Body
                                                                </th>
                                                                <td>
                                                                <select class="form-select form-select-lg mb-3"
                                                                        name="practice_licensing_body"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1</option>
                                                                        <option value="3-5">2</option>
                                                                        <option value="5-10">3</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Experience From Home Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="experience_from_home"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Experience From Residing Country
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="experience_from_residing"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Recognised Comparable Experience
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="recognised_comparable_experience"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Current Employment Status
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="current_employment_status"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Employed">Employed</option>
                                                                        <option value="Non-employed">Non-employed</option>
                                                                        <option value="Student">Student</option>
                                                                        <option value="Paternity Break">Paternity Break
                                                                        </option>
                                                                        <option value="Maternity Break">Maternity Break
                                                                        </option>
                                                                        <option value="Redundant">Redundant</option>
                                                                        <option value="Phase of Career Break">Phase of
                                                                            Career Break</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Engagement Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Employment Term
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Placement Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Gross Salary Expectation
                                                                </th>
                                                                <td class="padd-8">
                                                                    <input type="text" value="Gross Salary Expectation" name="Gross_Salary_Expectation">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Hourly Rate Expectation
                                                                </th>
                                                                <td class="padd-8">
                                                                <input type="text" value="Hourly Rate Expectation" name="Hourly_Rate_Expectation">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Billing Share
                                                                </th>
                                                                <td class="padd-8">
                                                                <input type="text" value="Billing Share" name="Billing_Share">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Citizenship
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="country_of_citizenship"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Residence
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="country_of_residence"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Australia ">Australia </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="United Kingdom ">United Kingdom
                                                                        </option>
                                                                        <option value="Austria  ">Austria </option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Canada ">Canada </option>
                                                                        <option value="Czech Republic  ">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark  ">Denmark </option>
                                                                        <option value="Finland  ">Finland </option>
                                                                        <option value="France ">France </option>
                                                                        <option value="Germany  ">Germany </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Iceland ">Iceland </option>
                                                                        <option value="Israel  ">Israel </option>
                                                                        <option value="Italy ">Italy </option>
                                                                        <option value="Norway ">Norway </option>
                                                                        <option value="Portugal  ">Portugal </option>
                                                                        <option value="Republic of Ireland  ">Republic of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland </option>
                                                                        <option value="The Netherlands ">The Netherlands
                                                                        </option>
                                                                        <option value="United States of America ">United
                                                                            States of America </option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="The Bahamas">The Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="The Gambia">The Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, North">Korea, North</option>
                                                                        <option value="Korea, South">Korea, South</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">
                                                                            Micronesia, Federated States of</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar (Burma)">Myanmar (Burma)
                                                                        </option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Sudan">South Sudan</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    VISA Type or Subclass
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="visa_type"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Visitor visas">Visitor visas</option>
                                                                        <option value="Studying and training visas">Studying
                                                                            and training visas</option>
                                                                        <option value="Family and partner visas">Family and
                                                                            partner visas</option>
                                                                        <option value="Working and skilled visas">Working
                                                                            and skilled visas</option>
                                                                        <option value="Refugee and humanitarian visas">
                                                                            Refugee and humanitarian visas</option>
                                                                        <option value="Other visas">Other visas</option>
                                                                        <option value="Repealed visas">Repealed visas
                                                                        </option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Work Right Status
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="work_rights_status"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="No Limits">No Limits</option>
                                                                        <option value="Limited Working Hours">Limited
                                                                            Working Hours</option>
                                                                        <option value="No Working Rights">No Working Rights
                                                                        </option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    VISA Sponsorship
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                        <option value="N/A">N/A</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="disc-width"></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Accommodation
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Travel Allowances
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Meal Allowances
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Uniform Allowances
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h4>Competitive Features</h4>
                                                                </td>
                                                                <td></td>

                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Moratorium Restriction
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Location Restrictions
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Training Program Requirement
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Training Program Type
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical Board Conditions
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical Board Undertakings
                                                                </th>
                                                                <td>
                                                                    <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="mb-3 text-area">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Skills & Interests</label>
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1"
                                                                            rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </textarea>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="mb-3 text-area">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Interviewer Notes</label>
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1"
                                                                            rows="3">Interviewer Complete Notes</textarea>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <div class="col-md-12 profile-eidt-form-btn">
                                                        <button class="btn back-btn">Back</button>
                                                        <input type="submit" class="btn" placeholder="Submit">
                                                    </div>
                                                </form>
                                                <div class="candidate-date">
                                                    <div class="form-group">
                                                        <select class="form-control" name="title" id="title"
                                                            required="">
                                                            <option value="" selected="">2020-2021</option>
                                                            <option value="2019-2020">2019-2020</option>
                                                            <option value="2018-2019">2018-2019</option>
                                                            <option value="2017-2018">2017-2018</option>
                                                            <option value="2016-2017">2016-2017</option>
                                                            <option value="2015-2016">2015-2016</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                                    <span class="date-background"></span>
                                                </div>
                                                <div class="audio-video-file">
                                                    <h4>Audio or Video File Recording</h4>
                                                    <div class="row profile-details-upload">
                                                        <div class="col-md-12">
                                                            <div class="row profile-details">
                                                                <div class="col-md-8">
                                                                    <div class="card mb-3">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-1 card-img">
                                                                                <img src="{{asset('img/dashboard/PDF.png')}}"
                                                                                    class="img-fluid pdf-upload rounded-start"
                                                                                    alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Primary
                                                                                        Interview Sheet .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">58KB |
                                                                                            12/3/2021</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="profile-buttons">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/dashboard/Eye.png')}}"
                                                                            class="img-fluid" alt="Eye">
                                                                            </a>
                                                                            <a href="#">
                                                                        <img src="{{asset('img/dashboard/Download.png')}}"
                                                                            class="img-fluid" alt="download">
                                                                            </a>
                                                                            <a href="#">
                                                                        <img src="{{asset('img/dashboard/Upload.png')}}"
                                                                            class="img-fluid" alt="Upload">
                                                                            </a>
                                                                            <a href="#">
                                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                                            class="img-fluid" alt="Delete-Trash">
                                                                            </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-details-upload">
                                                        <div class="col-md-12">
                                                            <div class="row profile-details">
                                                                <div class="col-md-8">
                                                                    <div class="card mb-3">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-1 card-img">
                                                                                <img src="{{asset('img/dashboard/Video-File.png')}}"
                                                                                    class="img-fluid pdf-upload rounded-start"
                                                                                    alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Video
                                                                                        Recording</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB |
                                                                                            12/3/2021</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="profile-buttons">
                                                                        <img src="{{asset('img/dashboard/Eye.png')}}"
                                                                            class="img-fluid" alt="Eye">
                                                                        <img src="{{asset('img/dashboard/Download.png')}}"
                                                                            class="img-fluid" alt="download">
                                                                        <img src="{{asset('img/dashboard/Upload.png')}}"
                                                                            class="img-fluid" alt="Upload">
                                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                                            class="img-fluid" alt="Delete-Trash">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-details-upload">
                                                        <div class="col-md-12">
                                                            <div class="row profile-details">
                                                                <div class="col-md-8">
                                                                    <div class="card mb-3">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-1 card-img">
                                                                                <img src="{{asset('img/dashboard/MP3.png')}}"
                                                                                    class="img-fluid pdf-upload rounded-start"
                                                                                    alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Audio
                                                                                        Recording</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">56KB |
                                                                                            12/3/2021</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="profile-buttons">
                                                                        <img src="{{asset('img/dashboard/Eye.png')}}"
                                                                            class="img-fluid" alt="Eye">
                                                                        <img src="{{asset('img/dashboard/Download.png')}}"
                                                                            class="img-fluid" alt="download">
                                                                        <img src="{{asset('img/dashboard/Upload.png')}}"
                                                                            class="img-fluid" alt="Upload">
                                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                                                            class="img-fluid" alt="Delete-Trash">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="edit-brn">
                                                        <button class="btn"><img
                                                                src=" {{asset('img/dashboard/Edit.png')}}"
                                                                class="img-fluid" alt="Edit-img"> Edit</button>
                                                    </div>
                                                </div>
                                                <div class="forms-colored-div">
                                                    <div class="blue"></div>
                                                    <div class="purple"></div>
                                                    <div class="pink"></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="testimonial-sec">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial-heading">
                                    <h3>Testimonial</h3>
                                    <div class="candidate-date">
                                        <div class="form-group">
                                            <select class="form-control" name="title" id="title" required="">
                                                <option value="" selected="">2020-2021</option>
                                                <option value="2019-2020">2019-2020</option>
                                                <option value="2018-2019">2018-2019</option>
                                                <option value="2017-2018">2017-2018</option>
                                                <option value="2016-2017">2016-2017</option>
                                                <option value="2015-2016">2015-2016</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                        </div>
                                        <span class="date-background"></span>
                                    </div>
                                </div>
                                    <div class="testimonial-txt-edit">
                                        <div class="testimonial-txt">
                                            <p>"Medfuture takes time to understand our need as a medical center and successfully
                                                place great practitioner that match our value and ethos"
                                            </p>
                                            <p>– KIM CHING, FEBRUARY 21, 2021</p>
                                        </div>
                                        <div class="edit-brn">
                                            <button class="btn testimonial-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                                    class="img-fluid" alt="Edit-img"> Edit</button>
                                            <button class="btn"><img src=" {{asset('img/dashboard/Delete-Chat.png')}}"
                                                    class="img-fluid" alt="Edit-img"> Remove</button>
                                        </div>
                                    </div>
                            <div class="testimonial-txt-d-none">
                                <form action="" class="row">
                                    <div class="col-md-12 profile-eidt-form-inner">
                                        <label for="Job Summary Note">Job Summary Note</label>
                                        <textarea name="Job_Summary_Note" id="Job_Summary_Note" cols="140" rows="7">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quidem est rerum placeat nobis voluptates fuga in laudantium cumque veniam! Suscipit at esse
                                        </textarea>
                                    </div>
                                    <div class="col-md-4 profile-eidt-form-inner">
                                        <label for="Testimonial Note Name">Testimonial Note Name</label>
                                        <input class="form-control" type="text" name="Testimonial_Note_Name" id="Testimonial_Note_Name"
                                            value="KIM CHING">
                                    </div>
                                    <div class="col-md-4 profile-eidt-form-inner form-group">
                                        <label for="Testimonial Note Date">Testimonial Note Date</label>
                                        <input class="form-control date" type="calander" name="dob"
                                            placeholder="" id="Testimonial_Note_Date" value="2022-01-15">
                                         <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar" alt="calendar-icon">
                                    </div>
                                    <div class="col-md-12 profile-eidt-form-btn">
                                        <button class="btn back-btn">Back</button>
                                        <input type="submit" class="btn" placeholder="Submit">
                                    </div>
                                </form>
                            </div>
                                <div class="row testimonial-upload">
                                    <div class="col-md-5">
                                        <div class="row profile-details profile-details-upload">
                                            <div class="col-md-8">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-1 card-img">
                                                            <img src="http://127.0.0.1:8000/img/dashboard/MP3.png"
                                                                class="img-fluid pdf-upload rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-l-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Referee Report 3 .pdf</h5>
                                                                <p class="card-text"><small class="text-muted">56KB |
                                                                        12/3/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Eye.png"
                                                        class="img-fluid" alt="Eye">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Download.png"
                                                        class="img-fluid" alt="download">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Upload.png"
                                                        class="img-fluid" alt="Upload">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Delete-Trash.png"
                                                        class="img-fluid" alt="Delete-Trash">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="forms-colored-div">
                        <div class="blue"></div>
                        <div class="purple"></div>
                        <div class="pink"></div>
                    </div>
                </section>


            </div>

            <!-- counter end -->
            <div class="candidate-profile-table">
                <div class="testimonial-heading">
                    <h3>Job Order Pipeline</h3>
                </div>
                <table id="dtpipeline" class="table  table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Title
                            </th>
                            <th class="th-sm">Clients
                            </th>
                            <th class="th-sm">Owner
                            </th>
                            <th class="th-sm">Added
                            </th>
                            <th class="th-sm">Submitted
                            </th>
                            <th class="th-sm">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>

                    </tbody>
                </table>
                <div class="pipeline-btn">
                    <div class="add-pipeline">
                        <button class="btn">Add This Candidate To Job Order Pipeline </button>
                    </div>

                    <div class="edit-brn">
                        <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                alt="Edit-img"> Edit</button>
                    </div>
                </div>

            </div>
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
            <div class="candidate-profile-table activity-heading">
                <div class="testimonial-heading ">
                    <h3>Activity</h3>
                </div>
                <table id="dtActivity" class="table  table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Title
                            </th>
                            <th class="th-sm">Clients
                            </th>
                            <th class="th-sm">Owner
                            </th>
                            <th class="th-sm">Added
                            </th>
                            <th class="th-sm">Submitted
                            </th>
                            <th class="th-sm">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>

                    </tbody>
                </table>
                <div class="pipeline-btn">
                    <div class="add-pipeline">
                        <button class="btn">Add This Candidate To Job Order Pipeline </button>
                    </div>

                    <div class="edit-brn">
                        <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                alt="Edit-img"> Edit</button>
                    </div>
                </div>

            </div>
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
        </div>
    </div>
</div>
@endsection
