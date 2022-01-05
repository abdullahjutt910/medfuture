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
                        <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                        <h4> {{ trans('global.create') }} {{ trans('cruds.candidate.title_singular') }}</h4>
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
                                <div class="card">
                                    <img src=" {{asset('img/dashboard/profile.png')}}" class="card-img-top img-fluid" alt="profile-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Mr Ben Johnson</h5>
                                        <p class="card-text">Male</p>
                                        <p class="card-text">DOB: 25th June 1988</p>
                                        <a href="#" class="btn">ID: AH5841</a>
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <ul>
                                        <li>
                                            <h3>Home Address</h3>
                                            <p>6 Manorwood Place, Mitcham VIC 2132, Australia</p>
                                        </li>
                                        <li>
                                            <h3>Mobile Number</h3>
                                            <p>0400 713 855</p>
                                        </li>
                                        <li>
                                            <h3>Office Number</h3>
                                            <p>0400 713 855</p>
                                        </li>
                                        <li>
                                            <h3>Email</h3>
                                            <p>benjohnson54@gmail.com</p>
                                        </li>
                                    </ul>

                                </div>
                                <div class="profession-info">
                                    <ul>
                                        <li>
                                            <h3>Profession</h3>
                                            <p>Allied Health Professionals</p>
                                        </li>
                                        <li>
                                            <h3>Engagement Term</h3>
                                            <p>Permanent</p>
                                        </li>
                                        <li>
                                            <h3>Employement Type</h3>
                                            <p>Full Time</p>
                                        </li>
                                        <li>
                                            <h3>Placement Type</h3>
                                            <p>Introductory</p>
                                        </li>
                                    </ul>
                                    <div class="edit-brn">

                                        <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8 profile-right">
                                <div class="profile-right-color"></div>
                                <div class="row profile-details">
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/Add-User-Male.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Registered</h5>
                                                        <p class="card-text"><small class="text-muted">Yes</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/verified.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Verified</h5>
                                                        <p class="card-text"><small class="text-muted">Yes</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/Resume.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Candidate Manager</h5>
                                                        <p class="card-text"><small class="text-muted">Mary Roshella Silva</small></p>
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
                                                    <img src="{{asset('img/dashboard/CV-receive.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">CV Recived Date</h5>
                                                        <p class="card-text"><small class="text-muted">12/08/2021</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/Privacy-team.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Privacy Term</h5>
                                                        <p class="card-text"><small class="text-muted">No</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/first-refister.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">First Registered Date</h5>
                                                        <p class="card-text"><small class="text-muted">Mary Roshella Silva</small></p>
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
                                                    <img src="{{asset('img/dashboard/candidate-terms.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Candidate Terms</h5>
                                                        <p class="card-text"><small class="text-muted">No</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/source-name.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Source Name</h5>
                                                        <p class="card-text"><small class="text-muted">Indeed</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/register-type.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Registration Type</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
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
                                                    <img src="{{asset('img/dashboard/cdf.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">CDF</h5>
                                                        <p class="card-text"><small class="text-muted">No</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/register-by.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Registered By</h5>
                                                        <p class="card-text"><small class="text-muted">Medfuture</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/division.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Division</h5>
                                                        <p class="card-text"><small class="text-muted">AHP /HSS</small></p>
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
                                                    <img src="{{asset('img/dashboard/availability.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Availability</h5>
                                                        <p class="card-text"><small class="text-muted">In Active</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/work-status.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Working Status</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/access-status.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Access Status</h5>
                                                        <p class="card-text"><small class="text-muted">Enable</small></p>
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
                                                    <img src="{{asset('img/dashboard/Graduation.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Graduation</h5>
                                                        <p class="card-text"><small class="text-muted">No</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/Consultant.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Rec Consultant</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/register-body.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Registration Body</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
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
                                                    <img src="{{asset('img/dashboard/Health-Sources.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Source Type</h5>
                                                        <p class="card-text"><small class="text-muted">Indeed</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/prof-qualification.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Prof Qualification</h5>
                                                        <p class="card-text"><small class="text-muted">Bsc Physical therapy</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/Email-Send.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Email - Verify</h5>
                                                        <p class="card-text"><small class="text-muted">Enable</small></p>
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
                                                    <img src="{{asset('img/dashboard/profile-grade.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Profile Grade</h5>
                                                        <p class="card-text"><small class="text-muted">Diamond</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/rigistration-via.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Registration Via</h5>
                                                        <p class="card-text"><small class="text-muted">Back End</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="{{asset('img/dashboard/Passport.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Visa Status</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
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
                                                    <img src="{{asset('img/dashboard/lead-method.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Lead Method</h5>
                                                        <p class="card-text"><small class="text-muted">LinkedIn</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="edit-brn">
                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
                                </div>

                                <div class="row profile-details-upload">
                                    <div class="col-md-12">
                                        <div class="row profile-details">
                                            <div class="col-md-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-2 card-img">
                                                            <img src="{{asset('img/dashboard/PDF.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-10 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small class="text-muted">58KB</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-1 card-img">
                                                            <img src="{{asset('img/dashboard/Calendar.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Applied Date</h5>
                                                                <p class="card-text"><small class="text-muted">12/1/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                            <img src="{{asset('img/dashboard/PDF.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-10 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small class="text-muted">58KB</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-1 card-img">
                                                            <img src="{{asset('img/dashboard/Calendar.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Applied Date</h5>
                                                                <p class="card-text"><small class="text-muted">12/1/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                            <img src="{{asset('img/dashboard/PDF.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-10 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small class="text-muted">58KB</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-1 card-img">
                                                            <img src="{{asset('img/dashboard/Calendar.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Applied Date</h5>
                                                                <p class="card-text"><small class="text-muted">12/1/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                            <img src="{{asset('img/dashboard/PDF.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-10 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Original CV .pdf</h5>
                                                                <p class="card-text"><small class="text-muted">58KB</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-1 card-img">
                                                            <img src="{{asset('img/dashboard/Calendar.png')}}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-12">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Applied Date</h5>
                                                                <p class="card-text"><small class="text-muted">12/1/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="edit-brn">
                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                <div class="row">
                                <div class="progress-bar">23</div>

                                <!-- <div class="clearfix">
                                    <canvas class="loader" width="200" height="200"></canvas>
                                   
                                    <br>
                                </div> -->
                                </div>
                                <div class="row candidate-referrals">
                                    <div class="col-md-12">
                                        <div class="referrals-txt">
                                            <h3>My Referrals</h3>
                                            <input type="date" name="date">
                                            <!-- <i class="fas fa-sort-down"></i> -->
                                        </div>

                                        <div class="referrals-award">
                                            <div class="referrals-award-inner">
                                                <h5>Medfuture <br> Doctor</h5>
                                                <div>
                                                    <img src=" {{asset('img/dashboard/credit-card-chip.png')}}" class="img-fluid" alt="Edit-img">
                                                    <img src=" {{asset('img/dashboard/Spotlight.png')}}" class="img-fluid" alt="Edit-img">
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
                                                <img src=" {{asset('img/dashboard/master-card.png')}}" class="img-fluid" alt="Edit-img">
                                            </div>
                                            <div class="forms-colored-div">
                                                <div class="blue"></div>
                                                <div class="purple"></div>
                                                <div class="pink"></div>
                                            </div>
                                        </div>

                                        <p>Refer a friend today and boost your income !</p>
                                        <div class="edit-brn">
                                            <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                        <div class="candidate-progress-txt">
                                            <div class="candidate-date"><input type="date" name="date"></div>
                                            <h3>Candidate Recruitment Progress</h3>
                                        </div>
                                        <div class="candidate-progress-bar">
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span class="bar-txt">25</span></div>
                                            </div>


                                        </div>
                                        <div class="edit-brn">
                                            <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                        <div class="candidate-date"><input type="date" name="date"></div>
                                        <div class="row m-20">
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Contacted</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Initial Screening</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Short Listed</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row m-20">
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Shelved</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Job Matching </p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Submissions</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row m-20">
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Declined</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Interviews</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Due Diligence Check</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row m-20">
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Offered</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Rejected / Accepted</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Placed</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row m-20">
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Archived</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="counter-div">
                                                    <div class="counter-inner">
                                                        <span>0</span>
                                                    </div>
                                                    <div class="counter-txt">
                                                        <p>Testimony</p>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="edit-brn">
                                            <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                            <div class="candidate-date"><input type="date" name="date"></div>
                                            <h3>Assigned to</h3>
                                        </div>
                                        <div class="assign-form">
                                            <form action="submit" method="POST" class="assign-form-inner">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <label for="Candidate_Manager">Candidate Manager</label>
                                                        <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                            <option value="" disabled="" selected="">Mary Rosella Silva</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label for="Recruitement">Recruitement Consultant</label>
                                                        <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                            <option value="" disabled="" selected="">Username</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label for="Administrator">Data Administrator</label>
                                                        <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                            <option value="" disabled="" selected="">Purnima Purnima</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>

                                                </div>
                                                <div class="edit-brn">
                                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                                <img src=" {{asset('img/dashboard/Lock.png')}}" class="img-fluid" alt="Edit-img">
                                                <input type="date" name="date">
                                            </div>
                                        </div>
                                        <div class="reference-form">
                                            <form action="submit" method="post">
                                                <h4>Referee 1</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="first_name" placeholder="First Name" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="title" placeholder="Last Name" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile" id="first_name" placeholder="Telephone" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile" id="title" placeholder="Email" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="first_name" placeholder="Referee’s Job Titile" value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Referee 2</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="first_name" placeholder="First Name" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="title" placeholder="Last Name" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile" id="first_name" placeholder="Telephone" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile" id="title" placeholder="Email" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="first_name" placeholder="Referee’s Job Titile" value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Referee 3</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="title" placeholder="Title" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="first_name" placeholder="First Name" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="title" placeholder="Last Name" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="mobile" id="first_name" placeholder="Telephone" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="mobile" id="title" placeholder="Email" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="mobile" id="first_name" placeholder="Referee’s Job Titile" value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="edit-brn">
                                                <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
                                            </div>
                                            <div class="referee-document">
                                                <h4>Referee Documents</h4>
                                                <div class="row profile-details-upload">
                                                    <div class="col-md-12">
                                                        <div class="row profile-details">
                                                            <div class="col-md-8">
                                                                <div class="card mb-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-1 card-img">
                                                                            <img src="{{asset('img/dashboard/PDF.png')}}" class="img-fluid rounded-start" alt="...">
                                                                        </div>
                                                                        <div class="col-md-11 padd-l-0">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Referee Report 1 .pdf</h5>
                                                                                <p class="card-text"><small class="text-muted">32KB | 12/3/2021 </small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="profile-buttons">
                                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                                            <img src="{{asset('img/dashboard/Video-File.png')}}" class="img-fluid rounded-start" alt="...">
                                                                        </div>
                                                                        <div class="col-md-11 padd-l-0">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Referee Report 2 .pdf</h5>
                                                                                <p class="card-text"><small class="text-muted">32KB | 12/3/2021</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="profile-buttons">
                                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                                            <img src="{{asset('img/dashboard/MP3.png')}}" class="img-fluid rounded-start" alt="...">
                                                                        </div>
                                                                        <div class="col-md-11 padd-l-0">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Referee Report 3 .pdf</h5>
                                                                                <p class="card-text"><small class="text-muted">56KB | 12/3/2021</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="profile-buttons">
                                                                    <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                                    <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                                    <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                                    <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edit-brn">
                                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                        <div class="candidate-date"><input type="date" name="date"></div>

                                        <h3>Job Summary</h3>
                                        <p class="summary-id">ID: AH5841</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quidem est rerum placeat nobis voluptates fuga in laudantium cumque veniam! Suscipit at esse tenetur neque cumque, amet quasi incidunt voluptatibus?</p>
                                        <div class="summary-bottom">
                                            <p>Last Updated Date</p>
                                            <div class="edit-brn">
                                                <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 interview">
                                            <div class="interview-inner">
                                                <h3> Interview Notes</h3>
                                                <p>Last Updated Date</p>

                                                <table class="table table-bordered table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                Title
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Division
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Seniority
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Specialty
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                State / Region / County
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Post Code
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Suburb/ Town
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Sub-Region/ District
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Main City
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Distance to Main City
                                                            </th>
                                                            <td>

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
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Licence Board
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Registration/ License Type
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Country of Primary Degree
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Medical School
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>
                                                                Practice Licensing Country
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Practice Licensing Body
                                                            </th>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Experience From Home Country
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Experience From Residing Country
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Recognised Comparable Experience
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Current Employment Status
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                Engagement Type
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                            <td>

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
                                                            <td>

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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Country of Residence
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                VISA Type or Subclass
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Work Right Status
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <i class="fas fa-sort-down"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                VISA Sponsorship
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                Accommodation
                                                            </th>
                                                            <td>
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
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
                                                                    <label for="exampleFormControlTextarea1" class="form-label">Skills & Interests</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </textarea>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="mb-3 text-area">
                                                                    <label for="exampleFormControlTextarea1" class="form-label">Interviewer Notes</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Interviewer Complete Notes</textarea>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <div class="interview-btns">
                                                    <div class="edit-brn">
                                                        <button class="btn"><img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download"> Download</button>
                                                        <button class="btn"><img src=" {{asset('img/dashboard/Print-1.png')}}" class="img-fluid" alt="Edit-img"> Print </button>
                                                        <button class="btn"><img src=" {{asset('img/dashboard/Share.png')}}" class="img-fluid" alt="Edit-img"> Share</button>
                                                        <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
                                                    </div>
                                                </div>
                                                <div class="candidate-date"><input type="date" name="date"></div>
                                                <div class="audio-video-file">
                                                    <h4>Audio or Video File Recording</h4>
                                                    <div class="row profile-details-upload">
                                                        <div class="col-md-12">
                                                            <div class="row profile-details">
                                                                <div class="col-md-8">
                                                                    <div class="card mb-3">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-1 card-img">
                                                                                <img src="{{asset('img/dashboard/PDF.png')}}" class="img-fluid rounded-start" alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Primary Interview Sheet .pdf</h5>
                                                                                    <p class="card-text"><small class="text-muted">58KB | 12/3/2021</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="profile-buttons">
                                                                        <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                                        <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                                        <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                                                <img src="{{asset('img/dashboard/Video-File.png')}}" class="img-fluid rounded-start" alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Video Recording</h5>
                                                                                    <p class="card-text"><small class="text-muted">32KB | 12/3/2021</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="profile-buttons">
                                                                        <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                                        <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                                        <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
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
                                                                                <img src="{{asset('img/dashboard/MP3.png')}}" class="img-fluid rounded-start" alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Audio Recording</h5>
                                                                                    <p class="card-text"><small class="text-muted">56KB | 12/3/2021</small></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="profile-buttons">
                                                                        <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                                                        <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid" alt="download">
                                                                        <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid" alt="Upload">
                                                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="edit-brn">
                                                        <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
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
                                    <input type="date" name="date">
                                    <!-- <i class="fas fa-sort-down"></i> -->
                                </div>
                                <div class="testimonial-txt">
                                    <p>"Medfuture takes time to understand our need as a medical center and successfully place great practitioner that match our value and ethos"
                                    </p>
                                    <p>– KIM CHING, FEBRUARY 21, 2021</p>
                                </div>
                                <div class="edit-brn">
                                    <button class="btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> Edit</button>
                                    <button class="btn"><img src=" {{asset('img/dashboard/Delete-Chat.png')}}" class="img-fluid" alt="Edit-img"> Remove</button>
                                </div>
                                <div class="row testimonial-upload">
                                    <div class="col-md-5">
                                        <div class="row profile-details profile-details-upload">
                                            <div class="col-md-8">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-1 card-img">
                                                            <img src="http://127.0.0.1:8000/img/dashboard/MP3.png" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-l-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Referee Report 3 .pdf</h5>
                                                                <p class="card-text"><small class="text-muted">56KB | 12/3/2021</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="profile-buttons">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Eye.png" class="img-fluid" alt="Eye">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Download.png" class="img-fluid" alt="download">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Upload.png" class="img-fluid" alt="Upload">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/Delete-Trash.png" class="img-fluid" alt="Delete-Trash">
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
            <!-- <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.candidates.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>

                        
                         <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.title') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::TITLE_SELECT[$candidate->title] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $candidate->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $candidate->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.gender') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::GENDER_SELECT[$candidate->gender] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.dob') }}
                                    </th>
                                    <td>
                                        {{ $candidate->dob }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.mobile') }}
                                    </th>
                                    <td>
                                        {{ $candidate->mobile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.home') }}
                                    </th>
                                    <td>
                                        {{ $candidate->home }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.work') }}
                                    </th>
                                    <td>
                                        {{ $candidate->work }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $candidate->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.address_1') }}
                                    </th>
                                    <td>
                                        {{ $candidate->address_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.address_2') }}
                                    </th>
                                    <td>
                                        {{ $candidate->address_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.distance_to_main') }}
                                    </th>
                                    <td>
                                        {{ $candidate->distance_to_main }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.town') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::TOWN_SELECT[$candidate->town] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.state') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::STATE_SELECT[$candidate->state] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.district') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::DISTRICT_SELECT[$candidate->district] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_SELECT[$candidate->country] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.post_code') }}
                                    </th>
                                    <td>
                                        {{ $candidate->post_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.main_city') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::MAIN_CITY_SELECT[$candidate->main_city] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.profession') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSION_SELECT[$candidate->profession] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.devision') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::DEVISION_SELECT[$candidate->devision] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.senority') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::SENORITY_SELECT[$candidate->senority] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.specialty') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::SPECIALTY_SELECT[$candidate->specialty] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.professional_qualification') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT[$candidate->professional_qualification] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.graduation') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::GRADUATION_SELECT[$candidate->graduation] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_primary_degree') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT[$candidate->country_of_primary_degree] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.medical_school') }}
                                    </th>
                                    <td>
                                        {{ $candidate->medical_school }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.practice_country') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PRACTICE_COUNTRY_SELECT[$candidate->practice_country] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.practice_licensing_body') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT[$candidate->practice_licensing_body] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.license_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::LICENSE_TYPE_SELECT[$candidate->license_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.experience_from_home') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT[$candidate->experience_from_home] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.experience_from_residing') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT[$candidate->experience_from_residing] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.recognised_comparable_experience') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT[$candidate->recognised_comparable_experience] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.current_employment_status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT[$candidate->current_employment_status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_citizenship') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT[$candidate->country_of_citizenship] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_residence') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT[$candidate->country_of_residence] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.visa_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::VISA_TYPE_SELECT[$candidate->visa_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.work_rights_status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT[$candidate->work_rights_status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.profession_login') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSION_LOGIN_SELECT[$candidate->profession_login] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.username') }}
                                    </th>
                                    <td>
                                        {{ $candidate->username }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.password') }}
                                    </th>
                                    <td>
                                        ********
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.cv_document') }}
                                    </th>
                                    <td>
                                        @if($candidate->cv_document)
                                            <a href="{{ $candidate->cv_document->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.registration_form_document') }}
                                    </th>
                                    <td>
                                        @if($candidate->registration_form_document)
                                            <a href="{{ $candidate->registration_form_document->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.privacy_concerns') }}
                                    </th>
                                    <td>
                                        @if($candidate->privacy_concerns)
                                            <a href="{{ $candidate->privacy_concerns->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.candidates.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div> 

                      

                    </div>
                </div> -->



                <!-- <table id="data_table" class="table table-bordered table-striped table-hover datatable  candidate-profile-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
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
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sydney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sydney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>$235,500</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>$324,050</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>$164,500</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>$109,850</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>$645,750</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2011/02/03</td>
                            <td>$234,500</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>$87,500</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>$138,575</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>$75,650</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>$356,250</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>$103,500</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>$86,500</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table> -->
                

        </div>
    </div>
</div>
@endsection