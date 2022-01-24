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
                        <a class="btn btn-default back-candidate" href="#">
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
                            <div class="col-md-4 profile-left client-profile-left">
                                <div class="profile-information">
                                    <div class="card candi-profile">
                                        <img src=" {{asset('img/dashboard/company-logo.png')}}"
                                            class="card-img-top img-fluid" alt="profile-img">
                                        <div class="card-body">
                                            <h5 class="card-title">Register Company Name</h5>
                                            <p class="card-text">Company Name</p>
                                            <img src="{{asset('img/dashboard/Company.png')}}" class="company-icon card-img-top img-fluid" alt="">
                                            <p class="card-text">ABN Number</p>
                                            <a href="#" class="btn">ID: AH5841</a>
                                        </div>
                                    </div>
                                    <div class="profile-info">
                                        <ul>
                                            <li>
                                                <h3>Office Address</h3>
                                                <p>6 Place, Australia</p>
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
                                            <li>
                                                <h3>Website</h3>
                                                <p>www.abcde.com</p>
                                            </li>
                                            <li>
                                                <h3>Google Address Link</h3>
                                                <p>http://maps.google.com/maps</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profession-info">
                                        <ul>
                                            <li>
                                                <h3>Category</h3>
                                                <p>General Practice</p>
                                            </li>
                                            <li>
                                                <h3>Division</h3>
                                                <p>Hospital Doctor</p>
                                            </li>
                                            <li>
                                                <h3>Placement Type</h3>
                                                <p>Agency Work Force</p>
                                            </li>
                                            <li>
                                                <h3>Ownership Type</h3>
                                                <p>Government</p>
                                            </li>
                                            <li>
                                                <h3>Branch | Subsidiaries Count</h3>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="edit-brn">
                                            <button class="btn candidate-edit-btn"><img
                                                    src=" {{asset('img/dashboard/penciel-client.png')}}" class="img-fluid"
                                                    alt="Edit-img"> Edit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 profile-right client-profile-right">
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
                                                            <h5 class="card-title">Registered Company Name</h5>
                                                            <p class="card-text"><small class="text-muted">MySupport Medical</small>
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
                                                            <h5 class="card-title">Trade Name</h5>
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
                                                            <h5 class="card-title">ABN</h5>
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
                                                            <h5 class="card-title">Division</h5>
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
                                                            <h5 class="card-title">Category</h5>
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
                                                            <h5 class="card-title">Business Services</h5>
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
                                                            <h5 class="card-title">Registered</h5>
                                                            <p class="card-text"><small class="text-muted">Contacted</small>
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
                                                            <h5 class="card-title">Registration by</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Medfuture</small>
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
                                                            <h5 class="card-title">Verified</h5>
                                                            <p class="card-text"><small class="text-muted">-</small></p>
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
                                                            <h5 class="card-title">Privacy Term</h5>
                                                            <p class="card-text"><small class="text-muted">No</small>
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
                                                            <h5 class="card-title">Terms and Conditions</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">No</small>
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
                                                            <h5 class="card-title">Working Status</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">BT Proposed / Received</small>
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
                                                            <h5 class="card-title">Grade</h5>
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
                                                            <h5 class="card-title">Capital City</h5>
                                                            <p class="card-text">
                                                                <small class="text-muted">Brisbane South</small></p>
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
                                                            <h5 class="card-title">Location Status</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Inner Metro</small>
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
                                                            <h5 class="card-title">Signed Date</h5>
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
                                                            <h5 class="card-title">Client Manager</h5>
                                                            <p class="card-text"><small class="text-muted">Charith Marcus</small></p>
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
                                                            <h5 class="card-title">Rec Consultant</h5>
                                                            <p class="card-text"><small class="text-muted">Charith Marcus</small></p>
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
                                                            <h5 class="card-title">Access Status</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Disable</small>
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
                                                            <h5 class="card-title">Email - Verify</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Enable</small>
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
                                                            <h5 class="card-title">Registration Via</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Back end</small>
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
                                                            <h5 class="card-title">Active</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">-</small>
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
                                                            <h5 class="card-title">Relationship Status</h5>
                                                            <p class="card-text"><small class="text-muted">Charith Marcus</small>
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
                                                            <h5 class="card-title">Service Agreement Agreed</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Charith Marcus</small>
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
                                                            <h5 class="card-title">Agreed Date</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Disable</small>
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
                                                        <img src="{{asset('img/dashboard/lead-method.png')}}"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Agreed Month</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Enable</small>
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
                                                        <img src="{{asset('img/dashboard/lead-method.png')}}"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Agreed Year</h5>
                                                            <p class="card-text"><small
                                                                    class="text-muted">Back end</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="edit-brn">
                                        <button class="btn profile-right-edit "><img
                                                src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                alt="Edit-img"> Edit</button>
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
                                <div class="edit-brn right-profile-edit-btn">
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
                                <div class="row candidate-referrals client-progress">
                                    <div class="col-md-12">
                                        <div class="referrals-txt">
                                            <h3>Value Proposition</h3>
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
                                        <div class="revenue-bar">
                                            <div class="candidate-progress-bar">
                                                <span class="progress-line"></span>
                                                <div class="progress vertical">
                                                    <div class="progress-bar revenue-color" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"><span
                                                            class="bar-txt">A$20</span></div>
                                                </div>
                                                <span class="revenue-bar-perm">Permanent</span>

                                                <div class="progress vertical">
                                                    <div class="progress-bar revenue-color" role="progressbar" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"><span
                                                            class="bar-txt">A$10</span></div>
                                                </div>
                                                <span class="revenue-bar-locum">Locum</span>

                                            </div>
                                            <span class="revenue-txt">Revenue</span>
                                        </div>
                                        <div class="revenue-bar">
                                            <div class="candidate-progress-bar">
                                                <span class="progress-line"></span>
                                                <div class="progress vertical">
                                                    <div class="progress-bar expenses-color" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"><span
                                                            class="bar-txt">A$20</span></div>
                                                </div>
                                                <span class="revenue-bar-perm">Promotional</span>

                                                <div class="progress vertical">
                                                    <div class="progress-bar expenses-color" role="progressbar" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"><span
                                                            class="bar-txt">A$10</span></div>
                                                </div>
                                                <span class="revenue-bar-locum">Refunds</span>

                                            </div>
                                            <span class="revenue-txt expenses-txt">Expenses</span>
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
                                <div class="row candidate-progress client-progress-list">
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
                                            <h3>Placement Progress</h3>
                                        </div>
                                        <div class="candidate-progress-bar">
                                            <span class="progress-line"></span>
                                            <div class="progress vertical">
                                                <div class="progress-bar Contacted" role="progressbar" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Contacted</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Int-scr" role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Initial Screening</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Short-Listed" role="progressbar" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Short Listed</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Shelved" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Shelved</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Job-Match" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Job Matching</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Submissions" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Submissions</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Declined" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Declined</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Interviews" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Interviews</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Due-check" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Due Diligence Check</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Offered" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Offered</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Rejected-accpt" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Rejected / Accepted</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Placed" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Placed</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Archived" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Archived</span></div>
                                            </div>
                                            <div class="progress vertical">
                                                <div class="progress-bar Testimony" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                        class="bar-txt">Testimony</span></div>
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
                                                    <div class="percent Contacted">
                                                        <p style="display:none;">50</p>
                                                        <div class="counter-txt">
                                                            <p>Contacted</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="percent Int-scr">
                                                        <p style="display:none;">0</p>
                                                        <div class="counter-txt">
                                                            <p>Initial Screening</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Short-Listed">
                                                        <p style="display:none;">0</p>
                                                        <div class="counter-txt">
                                                            <p>Short Listed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Shelved">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Shelved</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Job-Match">
                                                        <p style="display:none;">0</p>
                                                        <div class="counter-txt">
                                                            <p>Job Matching</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Submissions">
                                                        <p style="display:none;">20</p>
                                                        <div class="counter-txt">
                                                            <p>Submissions</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Declined">
                                                        <p style="display:none;">10</p>
                                                        <div class="counter-txt">
                                                            <p>Declined</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Interviews">
                                                        <p style="display:none;">10</p>
                                                        <div class="counter-txt">
                                                            <p>Interviews</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Due-check">
                                                        <p style="display:none;">0</p>
                                                        <div class="counter-txt">
                                                            <p>Due Diligence Check</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Offered">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Offered</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Rejected-accpt">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Rejected / Accepted</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Placed">
                                                        <p style="display:none;">0</p>
                                                        <div class="counter-txt">
                                                            <p>Placed</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Archived">
                                                        <p style="display:none;">2</p>
                                                        <div class="counter-txt">
                                                            <p>Archived</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Testimony">
                                                        <p style="display:none;">0</p>
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
                                            <div class="placed-candi-feed">
                                            <h3>Placed Candidate Feedback</h3>
                                            <p>(Internal Usage Only )</p>
                                            </div>
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
                                                <div class="row client-feedback-1">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" disabled type="text" name="candidate_name"
                                                                id="candidate_name" placeholder="Candidate Name 1" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" disabled type="text" name="placement_date"
                                                                id="placement_date" placeholder="Placement Date" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <textarea name="candi-feedback" disabled id="candi-feedback" cols="52" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="referee-document">
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
                                                                                    <h5 class="card-title">Candidate Feedback 1 .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB | 12/3/2021 </small></p>
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
                                                </div>  
                                                
                                                <div class="row client-feedback-1">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" disabled type="text" name="candidate_name"
                                                                id="candidate_name" placeholder="Candidate Name 2" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" disabled type="text" name="placement_date"
                                                                id="placement_date" placeholder="Placement Date" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <textarea name="candi-feedback" disabled id="candi-feedback" cols="52" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="referee-document">
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
                                                                                    <h5 class="card-title">Candidate Feedback 1 .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB | 12/3/2021 </small></p>
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
                                                </div> 
                                                
                                                <div class="row client-feedback-1">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" disabled type="text" name="candidate_name"
                                                                id="candidate_name" placeholder="Candidate Name 3" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" disabled type="text" name="placement_date"
                                                                id="placement_date" placeholder="Placement Date" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <textarea name="candi-feedback" disabled id="candi-feedback" cols="52" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="referee-document">
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
                                                                                    <h5 class="card-title">Candidate Feedback 1 .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB | 12/3/2021 </small></p>
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
                                                </div> 
                                                <div class="edit-brn">
                                                    <button class="btn reference-edit-btn"><img
                                                            src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                            alt="Edit-img"> Edit</button>
                                                </div>
                                            </form>
                                            <form action="submit" method="post" class="reference-form-inner-d-none">
                                            <div class="row client-feedback-1">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="candidate_name"
                                                                id="candidate_name" placeholder="Candidate Name 1" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="placement_date"
                                                                id="placement_date" placeholder="Placement Date" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <textarea name="candi-feedback" id="candi-feedback" cols="52" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="referee-document">
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
                                                                                    <h5 class="card-title">Candidate Feedback 1 .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB | 12/3/2021 </small></p>
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
                                                </div>  
                                                
                                                <div class="row client-feedback-1">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="candidate_name"
                                                                id="candidate_name" placeholder="Candidate Name 2" value="" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="placement_date"
                                                                id="placement_date" placeholder="Placement Date" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <textarea name="candi-feedback" id="candi-feedback" cols="52" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="referee-document">
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
                                                                                    <h5 class="card-title">Candidate Feedback 1 .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB | 12/3/2021 </small></p>
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
                                                </div> 
                                                
                                                <div class="row client-feedback-1">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="candidate_name"
                                                                id="candidate_name" placeholder="Candidate Name 3" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="placement_date"
                                                                id="placement_date" placeholder="Placement Date" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <textarea name="candi-feedback" id="candi-feedback" cols="52" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="referee-document">
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
                                                                                    <h5 class="card-title">Candidate Feedback 1 .pdf</h5>
                                                                                    <p class="card-text"><small
                                                                                            class="text-muted">32KB | 12/3/2021 </small></p>
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
                                                </div> 
                                                <div class="col-md-12 profile-eidt-form-btn">
                                                    <button class="btn back-btn">Back</button>
                                                    <input type="submit" class="btn" placeholder="Submit">
                                                </div>
                                            </form>
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

                                        <h3>Job Profile Summery</h3>
                                       
                                            <p class="summary-id">ID: AH5841</p>
                                            <div class="job-summary-eidt">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quidem est
                                                rerum
                                                placeat nobis voluptates fuga in laudantium cumque veniam! Suscipit at
                                                esse
                                                tenetur neque cumque, amet quasi incidunt voluptatibus?</p>
                                            <div class="summary-bottom">
                                                <p>Last Updated Date 01st November, 2021</p>
                                                <div class="edit-brn">
                                                    <button class="btn job-summary-eidt-btn"><img
                                                            src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                            alt="Edit-img"> Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-summary-d-none">
                                            <form action="" class="row">
                                                <div class="col-md-12 profile-eidt-form-inner">
                                                    <label for="Job Summary">Recent Remarks Note</label>
                                                    <textarea name="Job_Summary" id="Job_Summary" cols="76" rows="7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quidem est rerum placeat nobis voluptates fuga in laudantium cumque veniam! Suscipit at esse</textarea>
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
                                                <p>Last Updated Date 01st November, 2021</p>
                                                <div class="interview-table">
                                                    <table class="table table-bordered table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Registerd Name
                                                                </th>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Trade Name
                                                                </th>
                                                                <td>
                                                                    <i class="fas fa-lock"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                Corporate Brand Name
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
                                                                    {{-- <select class="profession-doctor form-select form-select-lg mb-3"
                                                                        name="profession"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Doctor">Doctor</option>
                                                                        <option value="Nurse">Nurse</option>
                                                                        <option value="Allied Health Professionals">Allied Health Professionals</option>
                                                                        <option value="Healthcare Executives">Healthcare Executives</option>
                                                                        <!-- <option value="Dentists">Dentists</option> -->
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Division
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="devision"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="General Practitioners ">General
                                                                            Practitioners </option>
                                                                        <option value="Healthcare Executives ">
                                                                            Healthcare
                                                                            Executives </option>
                                                                        <option value="Hospital Doctors">Hospital
                                                                            Doctors
                                                                        </option>
                                                                        <option value="Locum Doctors">Locum Doctors
                                                                        </option>
                                                                        <option value="Nurses &amp; Carers">Nurses &amp;
                                                                            Carers</option>
                                                                        <option value="Allergologist">Allergologist
                                                                        </option>
                                                                        <option value="Arts Therapist ">Arts Therapist
                                                                        </option>
                                                                        <option value="Audiologist">Audiologist</option>
                                                                        <option value="Chiropractor ">Chiropractor
                                                                        </option>
                                                                        <option value="Dietitians ">Dietitians </option>
                                                                        <option value="Exercise Physiologist ">Exercise
                                                                            Physiologist </option>
                                                                        <option value="Genetic Counsellor">Genetic
                                                                            Counsellor</option>
                                                                        <option value="Medical Radiologist ">Medical
                                                                            Radiologist </option>
                                                                        <option value="Music Therapist">Music Therapist
                                                                        </option>
                                                                        <option value="Occupational Therapist">
                                                                            Occupational
                                                                            Therapist</option>
                                                                        <option value="Optometrist">Optometrist</option>
                                                                        <option value="Orthotist and prosthetist">
                                                                            Orthotist
                                                                            and prosthetist</option>
                                                                        <option value="Osteopathist ">Osteopathist
                                                                        </option>
                                                                        <option value="Perfusionist ">Perfusionist
                                                                        </option>
                                                                        <option value="Physiotherapist">Physiotherapist
                                                                        </option>
                                                                        <option value="Podiatrist">Podiatrist</option>
                                                                        <option value="Psychologist">Psychologist
                                                                        </option>
                                                                        <option value="Psychology &amp; Mental health">
                                                                            Psychology &amp; Mental health</option>
                                                                        <option value="Rehabilitation Counsellor ">
                                                                            Rehabilitation Counsellor </option>
                                                                        <option value="Sonographer">Sonographer</option>
                                                                        <option value="Specialist service">Specialist
                                                                            service</option>
                                                                        <option value="Speech-pathology">
                                                                            Speech-pathology
                                                                        </option>
                                                                        <option value="Midwife">Midwife</option>
                                                                        <option value="Dentists">Dentists</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                            <th>
                                                                    Seniority
                                                                </th>
                                                                <td>
                                                                    <select class="seniority-doctor-d-none form-select form-select-lg mb-3"
                                                                        name="senority"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Internship - PGY Year 1 ">
                                                                            Internship
                                                                            - PGY Year 1 </option>
                                                                        <option
                                                                            value="Junior House Officer - PGY Year 2 ">
                                                                            Junior House Officer - PGY Year 2 </option>
                                                                        <option
                                                                            value="Senior House Officer - PGY Year 3 ">
                                                                            Senior House Officer - PGY Year 3 </option>
                                                                        <option
                                                                            value="Principal Health Officer – PGY Year 4 ">
                                                                            Principal Health Officer – PGY Year 4
                                                                        </option>
                                                                        <option value="Registrars">Registrars</option>
                                                                        <option value="Senior Registrar">Senior
                                                                            Registrar</option>
                                                                        <option value="Provisional Fellowship Year">
                                                                            Provisional Fellowship Year</option>
                                                                        <option value="General Practitioner">General
                                                                            Practitioner</option>
                                                                        <option value="Specialist">Specialist</option>
                                                                        <option value="Staff Specialists">Staff
                                                                            Specialists</option>
                                                                        <option value="Senior Medical Officer">Senior
                                                                            Medical Officer</option>
                                                                        <option value="Visiting Medical Officer">
                                                                            Visiting Medical Officer</option>
                                                                        <option value="Consultant">Consultant</option>
                                                                    </select>
                                                                    <select class="nurse-seniority-d-none form-select form-select-lg mb-3"
                                                                        name="senority"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="PCA / AIN / Care Worker">PCA /
                                                                            AIN / Care Worker</option>
                                                                        <option value="Enrolled Nurse (EN)">Enrolled
                                                                            Nurse (EN)</option>
                                                                        <option value="Endorsed Enrolled Nurse (EEN)">
                                                                            Endorsed Enrolled Nurse (EEN)</option>
                                                                        <option value="Registered Nurse (RN)">Registered
                                                                            Nurse (RN)</option>
                                                                        <option
                                                                            value="Advanced Practice Nurse / Nurse Practitioner">
                                                                            Advanced Practice Nurse / Nurse Practitioner
                                                                        </option>
                                                                        <option value="Specialist">Specialist </option>
                                                                        <option
                                                                            value="Specialist Nurse / Clinical Nurse Specialist">
                                                                            Specialist Nurse / Clinical Nurse Specialist
                                                                        </option>
                                                                        <option value="Midwives">Midwives</option>
                                                                        <option value="Nurse Manager">Nurse Manager
                                                                        </option>
                                                                        <option
                                                                            value="Director of Nursing Practice (DNP)">
                                                                            Director of Nursing Practice (DNP)</option>
                                                                        <option value="Chief Nursing Officer (CNO)">
                                                                            Chief Nursing Officer (CNO)</option>
                                                                    </select> 
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                            <th>
                                                                    Specialty
                                                                </th>
                                                                <td>
                                                                    <select class="doctor-specialty-d-none form-select form-select-lg mb-3"
                                                                        name="specialty"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Anaesthetics">Anaesthetics
                                                                        </option>
                                                                        <option value="Emergency Medicine ">Emergency Medicine </option>
                                                                        <option value="General Practice ">General Practice</option>
                                                                        <option value="Gastroenterologist">Gastroenterologist</option>
                                                                        <option value="Intensive care ">Intensive care</option>
                                                                        <option value="Medicine">Medicine</option>
                                                                        <option value="Obtetrics &amp; Gynaecology ">Obtetrics &amp; Gynaecology </option>
                                                                        <option value="Pathologist">Pathologist</option>
                                                                        <option value="Peadiatrics">Peadiatrics</option>
                                                                        <option value="Psychiatry ">Psychiatry </option>
                                                                        <option value="Radiology">Radiology</option>
                                                                        <option value="Surgery ">Surgery </option>
                                                                    </select> 
                                                                    <select
                                                                        class="nurse-specialty-d-none form-select form-select-lg mb-3 "
                                                                        name="specialty"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Accident / Emergency / Critical Care & ICU Nurse">Accident / Emergency / Critical Care & ICU Nurse</option>
                                                                        <option value="Age Care ">Age Care </option>
                                                                        <option value="Anaesthetic/ Theatre Technician">Anaesthetic/ Theatre Technician</option>
                                                                        <option value="Assistance in Nurse">Assistance in Nurse</option>
                                                                        <option value="Care Worker">Care Worker</option>
                                                                        <option value="Community Mental Health ">Community Mental Health
                                                                        </option>
                                                                        <option value="Community NDIS ">Community NDIS</option>
                                                                        <option value="CSSD ">CSSD</option>
                                                                        <option value="Educators & Facilitators ">Educators & Facilitators
                                                                        </option>
                                                                        <option value="General Medical & Surgical">General Medical & Surgical
                                                                        </option>
                                                                        <option value="Instrument Technician">Instrument Technician
                                                                        </option>
                                                                        <option value="Mental Health, Forensic & Correctional">
                                                                            Mental Health, Forensic & Correctional
                                                                        </option>
                                                                        <option value="Midwife & Neo - Natal">Midwife & Neo - Natal</option>
                                                                        <option value="Orderly">Orderly</option>
                                                                        <option value="Paediatric & PICU">Paediatric & PICU</option>
                                                                        <option value="Practice Nurse">Practice Nurse</option>
                                                                        <option value="Rural & Remote">Rural & Remote</option>
                                                                        <option value="Theatre & Recovery">Theatre & Recovery</option>

                                                                    </select>
                                                                    <select
                                                                        class=" AHP-Specialty-d-none form-select form-select-lg mb-3"
                                                                        name="specialty"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Allergologist">
                                                                            Allergologist
                                                                        </option>
                                                                        <option value="Arts Therapist">Arts Therapist</option>
                                                                        <option value="Audiologist">Audiologist
                                                                        </option>
                                                                        <option value="Chiropractor">
                                                                           Chiropractor
                                                                        </option>
                                                                        <option value="Dietitians">Dietitians

                                                                        </option>
                                                                        <option value="Exercise Physiologist ">Exercise Physiologist
                                                                        </option>
                                                                        <option value="Genetic Counsellor ">Genetic Counsellor</option>
                                                                        <option value="Medical Radiologist ">Medical Radiologist</option>
                                                                        <option value="Music Therapist ">Music Therapist
                                                                        </option>
                                                                        <option value="Occupational Therapist">Occupational Therapist
                                                                        </option>
                                                                        <option value="Optometrist">Optometrist
                                                                        </option>
                                                                        <option value="Orthotist and prosthetist">Orthotist and prosthetist</option>
                                                                        <option value="Osteopathist">Osteopathist</option>
                                                                        <option value="Perfusionist">Perfusionist</option>
                                                                        <option value="Physiotherapist">Physiotherapist</option>
                                                                        <option value="Podiatrist">Podiatrist</option>
                                                                        <option value="Psychologist">Psychologist</option>
                                                                        <option value="Psychology & Mental health">Psychology & Mental health</option>
                                                                        <option value="Rehabilitation Counsellor">Rehabilitation Counsellor</option>
                                                                        <option value="Sonographer">Sonographer</option>
                                                                        <option value="Specialist service">Specialist service</option>
                                                                        <option value="Speech-pathology">Speech-pathology</option>
                                                                    </select>
                                                                    <select
                                                                        class="form-select form-select-lg mb-3 HE-Specialty-d-none"
                                                                        name="specialty"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Business Managers">Business Managers</option>
                                                                        <option value="General Managers">General Managers</option>
                                                                        <option value="Medical Administrators">Medical Administrators</option>
                                                                        <option value="Medical Director">Medical Director</option>
                                                                        <option value="Medical Receptionist">Medical Receptionist</option>
                                                                        <option value="Practice Manager">Practice Manager</option>
                                                                        <option value="Professional Management Consultants">Professional Management Consultants</option>

                                                                    </select>
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Start Date
                                                                </th>
                                                                <td>
                                                                    {{-- <input type="date" name="date"> --}}
                                                                    <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    End Date
                                                                </th>
                                                                <td>
                                                                    {{-- <input type="date" name="date"> --}}
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

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select> --}}
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
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    State / Region / County
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Post Code
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Suburb/ Town
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Sub-Region/ District
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Main City
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Distance to Main City
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

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="license_type"
                                                                        aria-label=".form-select-lg example">
                                                                        <option
                                                                            value="Eligible for General Registration ">
                                                                            Eligible for General Registration </option>
                                                                        <option
                                                                            value="Eligible for Limited Registration ">
                                                                            Eligible for Limited Registration </option>
                                                                        <option
                                                                            value="Eligible for Provisional Registration ">
                                                                            Eligible for Provisional Registration
                                                                        </option>
                                                                        <option value="General">General</option>
                                                                        <option value="Limited">Limited</option>
                                                                        <option value="Non-Practising Registration ">
                                                                            Non-Practising Registration </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Provisional">Provisional</option>
                                                                        <option value="Specialist">Specialist</option>
                                                                        <option value="Student">Student</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Primary Degree
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
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
                                                                        <option value="Republic of Ireland  ">Republic
                                                                            of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland
                                                                        </option>
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
                                                                        <option value="Bosnia and Herzegovina">Bosnia
                                                                            and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
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
                                                                        <option
                                                                            value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East
                                                                            Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea
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
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
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
                                                                        <option value="Korea, North">Korea, North
                                                                        </option>
                                                                        <option value="Korea, South">Korea, South
                                                                        </option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall
                                                                            Islands
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
                                                                        <option value="Papua New Guinea">Papua New
                                                                            Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint
                                                                            Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option
                                                                            value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome
                                                                            and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
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
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican
                                                                            City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical School
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>
                                                                    Practice Licensing Country
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
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
                                                                        <option value="Republic of Ireland  ">Republic
                                                                            of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland
                                                                        </option>
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
                                                                        <option value="Bosnia and Herzegovina">Bosnia
                                                                            and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
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
                                                                        <option
                                                                            value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East
                                                                            Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea
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
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
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
                                                                        <option value="Korea, North">Korea, North
                                                                        </option>
                                                                        <option value="Korea, South">Korea, South
                                                                        </option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall
                                                                            Islands
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
                                                                        <option value="Papua New Guinea">Papua New
                                                                            Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint
                                                                            Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option
                                                                            value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome
                                                                            and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
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
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican
                                                                            City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Practice Licensing Body
                                                                </th>
                                                                <td class="padd-8">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Experience From Home Country
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="experience_from_home"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Experience From Residing Country
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="experience_from_residing"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Recognised Comparable Experience
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="recognised_comparable_experience"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1-3">1-3</option>
                                                                        <option value="3-5">3-5</option>
                                                                        <option value="5-10">5-10</option>
                                                                        <option value="Above 10">Above 10</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Current Employment Status
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="current_employment_status"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Employed">Employed</option>
                                                                        <option value="Non-employed">Non-employed
                                                                        </option>
                                                                        <option value="Student">Student</option>
                                                                        <option value="Paternity Break">Paternity Break
                                                                        </option>
                                                                        <option value="Maternity Break">Maternity Break
                                                                        </option>
                                                                        <option value="Redundant">Redundant</option>
                                                                        <option value="Phase of Career Break">Phase of
                                                                            Career Break</option>
                                                                    </select> --}}
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
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Employment Term
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Placement Type
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select> --}}
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
                                                                <td class="padd-8">

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
                                                                    {{-- <select class="form-select form-select-lg mb-3"
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
                                                                        <option value="Republic of Ireland  ">Republic
                                                                            of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland
                                                                        </option>
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
                                                                        <option value="Bosnia and Herzegovina">Bosnia
                                                                            and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
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
                                                                        <option
                                                                            value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East
                                                                            Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea
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
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
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
                                                                        <option value="Korea, North">Korea, North
                                                                        </option>
                                                                        <option value="Korea, South">Korea, South
                                                                        </option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall
                                                                            Islands
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
                                                                        <option value="Papua New Guinea">Papua New
                                                                            Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint
                                                                            Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option
                                                                            value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome
                                                                            and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
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
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican
                                                                            City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Country of Residence
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
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
                                                                        <option value="Republic of Ireland  ">Republic
                                                                            of
                                                                            Ireland </option>
                                                                        <option value="Singapore  ">Singapore </option>
                                                                        <option value="Spain ">Spain </option>
                                                                        <option value="Sweden ">Sweden </option>
                                                                        <option value="Switzerland ">Switzerland
                                                                        </option>
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
                                                                        <option value="Bosnia and Herzegovina">Bosnia
                                                                            and
                                                                            Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
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
                                                                        <option
                                                                            value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d-Ivoire">Cote d-Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor (Timor-Leste)">East
                                                                            Timor
                                                                            (Timor-Leste)</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea
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
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
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
                                                                        <option value="Korea, North">Korea, North
                                                                        </option>
                                                                        <option value="Korea, South">Korea, South
                                                                        </option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall
                                                                            Islands
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
                                                                        <option value="Papua New Guinea">Papua New
                                                                            Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint
                                                                            Kitts
                                                                            and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option
                                                                            value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome
                                                                            and
                                                                            Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
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
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City (Holy See)">Vatican
                                                                            City
                                                                            (Holy See)</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    VISA Type or Subclass
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="visa_type"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Visitor visas">Visitor visas
                                                                        </option>
                                                                        <option value="Studying and training visas">
                                                                            Studying
                                                                            and training visas</option>
                                                                        <option value="Family and partner visas">Family
                                                                            and
                                                                            partner visas</option>
                                                                        <option value="Working and skilled visas">
                                                                            Working
                                                                            and skilled visas</option>
                                                                        <option value="Refugee and humanitarian visas">
                                                                            Refugee and humanitarian visas</option>
                                                                        <option value="Other visas">Other visas</option>
                                                                        <option value="Repealed visas">Repealed visas
                                                                        </option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Work Right Status
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="work_rights_status"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="No Limits">No Limits</option>
                                                                        <option value="Limited Working Hours">Limited
                                                                            Working Hours</option>
                                                                        <option value="No Working Rights">No Working
                                                                            Rights
                                                                        </option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    VISA Sponsorship
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                        <option value="N/A">N/A</option>
                                                                    </select> --}}
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

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                        <option value="N/A">N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Travel Allowances
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                        <option value="N/A">N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Meal Allowances
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Uniform Allowances
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
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
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Location Restrictions
                                                                </th>
                                                                <td>
                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Training Program Requirement
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Training Program Type
                                                                </th>
                                                                <td  class="padd-8">

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical Board Conditions
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Medical Board Undertakings
                                                                </th>
                                                                <td>

                                                                    {{-- <select class="form-select form-select-lg mb-3"
                                                                        name="job_title"
                                                                        aria-label=".form-select-lg example">
                                                                        <option value="Yes" disabled>Yes</option>
                                                                        <option value="No" disabled>No</option>
                                                                        <option value="N/A" disabled>N/A</option>
                                                                    </select> --}}
                                                                    <i class="fas fa-sort-down"></i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="mb-3 text-area">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Variety of Services</label>
                                                                        <textarea class="form-control" disabled
                                                                            id="exampleFormControlTextarea1"

                                                                    rows="3">skills </textarea>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="mb-3 text-area">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Client Manager Notes</label>
                                                                        <textarea class="form-control" disabled
                                                                            id="exampleFormControlTextarea1"
                                                                            rows="3">
                                                                            Interviewer
                                                                        </textarea>
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
                                                            <button class="btn interview-edit-btn"><img
                                                                    src=" {{asset('img/dashboard/Edit.png')}}"
                                                                    class="img-fluid" alt="Edit-img"> Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                               
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
                                                    <h4>Current Vacancy</h4>
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
                                                                                    <h5 class="card-title">Current Vacancy 1 .pdf</h5>
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
                                                                                    <h5 class="card-title">Current Vacancy 2 .pdf</h5>
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
                                                                                <img src="{{asset('img/dashboard/MP3.png')}}"
                                                                                    class="img-fluid pdf-upload rounded-start"
                                                                                    alt="...">
                                                                            </div>
                                                                            <div class="col-md-11 padd-l-0">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Current Vacancy 3 .pdf</h5>
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
                                <div class="row candidate-assign-to client-assign-to">
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
                                                            <select class="form-select form-select-lg mb-3"
                                                                name="job_title" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">Mary Rosella
                                                                    Silva
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Recruitement">Recruitement Consultant</label>
                                                            <select class="form-select form-select-lg mb-3"
                                                                name="job_title" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">Username
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Administrator">Data Administrator</label>
                                                            <select class="form-select form-select-lg mb-3"
                                                                name="job_title" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">Purnima Purnima
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
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
                                                <form action="" method="" class="assign-form-edit assign-form-inner">
                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <label for="Candidate_Manager">Candidate Manager</label>
                                                            <select class="form-select form-select-lg mb-3"
                                                                name="job_title" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">Mary Rosella
                                                                    Silva
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Recruitement">Recruitement Consultant</label>
                                                            <select class="form-select form-select-lg mb-3"
                                                                name="job_title" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">Username
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <i class="fas fa-sort-down"></i>
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Administrator">Data Administrator</label>
                                                            <select class="form-select form-select-lg mb-3"
                                                                name="job_title" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">Purnima Purnima
                                                                </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
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
                            </div>
                        </div>
                    </div>
                </section>

                <section class="testimonial-sec client-testi-sec">
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
                                        <p>"Medfuture takes time to understand our need as a medical center and
                                            successfully
                                            place great practitioner that match our value and ethos"
                                        </p>
                                        <p>– KIM CHING, FEBRUARY 21, 2021</p>
                                    </div>
                                    <div class="edit-brn">
                                        <button class="btn testimonial-edit-btn"><img
                                                src=" {{asset('img/dashboard/penciel-client.png')}}" class="img-fluid"
                                                alt="Edit-img"> Edit</button>
                                        <button class="btn"><img src=" {{asset('img/dashboard/deleted_message.png')}}"
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
                                            <input class="form-control" type="text" name="Testimonial_Note_Name"
                                                id="Testimonial_Note_Name" value="KIM CHING">
                                        </div>
                                        <div class="col-md-4 profile-eidt-form-inner form-group">
                                            <label for="Testimonial Note Date">Testimonial Note Date</label>
                                            <input class="form-control date" type="calander" name="dob" placeholder=""
                                                id="Testimonial_Note_Date" value="2022-01-15">
                                            <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                                alt="calendar-icon">
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
                                                            <img src="http://127.0.0.1:8000/img/dashboard/PDF.png"
                                                                class="img-fluid pdf-upload rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-11 padd-l-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Testimonial .pdf</h5>
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
            <div class="main-contact-table">
                <div class="main-contact-heading">
                    <h3>Main Contact</h3>
                </div>
                <table id="myTable" class="table  table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">First Name
                            </th>
                            <th class="th-sm">Last Name
                            </th>
                            <th class="th-sm">Contact Number
                            </th>
                            <th class="th-sm">Mobile Number
                            </th>
                            <th class="th-sm submit-table-head">Email ID
                            </th>
                            <th class="th-sm">Designation
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="pipeline-data">
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="pipeline-data-d-none">
                                <td><input type="text" value="Tiger Nixon"></td>
                                <td><input type="text" value="System Architect"></td>
                                <td><input type="text" value="Edinburgh"></td>
                                <td><input type="number" value="61"></td>
                                <td class="pipeline-date"><input class="form-control date" type="calander" name="Pipeline_Date" placeholder=""
                                    id="Pipeline_Date" value="2022/04/25">
                                    <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                    alt="calendar-icon">
                                </td>
                                <td><input type="number" value="320800"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
            <!-- <div class="main-contact-table">
                <div class="main-contact-heading">
                    <h3>Job Orders</h3>
                </div>
                <table id="myTable" class="table  table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">First Name
                            </th>
                            <th class="th-sm">Last Name
                            </th>
                            <th class="th-sm">Contact Number
                            </th>
                            <th class="th-sm">Mobile Number
                            </th>
                            <th class="th-sm submit-table-head">Email ID
                            </th>
                            <th class="th-sm">Designation
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="pipeline-data">
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="pipeline-data-d-none">
                                <td><input type="text" value="Tiger Nixon"></td>
                                <td><input type="text" value="System Architect"></td>
                                <td><input type="text" value="Edinburgh"></td>
                                <td><input type="number" value="61"></td>
                                <td class="pipeline-date"><input class="form-control date" type="calander" name="Pipeline_Date" placeholder=""
                                    id="Pipeline_Date" value="2022/04/25">
                                    <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                    alt="calendar-icon">
                                </td>
                                <td><input type="number" value="320800"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
            <div class="main-contact-table">
                <div class="main-contact-heading">
                    <h3>Placement History</h3>
                </div>
                <table id="myTable" class="table  table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Date
                            </th>
                            <th class="th-sm">Candidate ID
                            </th>
                            <th class="th-sm">Job Title
                            </th>
                            <th class="th-sm">First Name
                            </th>
                            <th class="th-sm submit-table-head">Last Name
                            </th>
                            <th class="th-sm">Profession
                            </th>
                            <th class="th-sm">Activity Notes
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="pipeline-data">
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="pipeline-data-d-none">
                                <td><input type="text" value="Tiger Nixon"></td>
                                <td><input type="text" value="System Architect"></td>
                                <td><input type="text" value="Edinburgh"></td>
                                <td><input type="number" value="61"></td>
                                <td class="pipeline-date"><input class="form-control date" type="calander" name="Pipeline_Date" placeholder=""
                                    id="Pipeline_Date" value="2022/04/25">
                                    <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                    alt="calendar-icon">
                                </td>
                                <td><input type="number" value="320800"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div> -->



            <div class="candidate-profile-table activity-heading">
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
                            <th class="th-sm submit-table-head">Submitted
                            </th>
                            <th class="th-sm">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="pipeline-data">
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2022/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr class="pipeline-data-d-none">
                                <td><input type="text" value="Tiger Nixon"></td>
                                <td><input type="text" value="System Architect"></td>
                                <td><input type="text" value="Edinburgh"></td>
                                <td><input type="number" value="61"></td>
                                <td class="pipeline-date"><input class="form-control date" type="calander" name="Pipeline_Date" placeholder=""
                                    id="Pipeline_Date" value="2022/04/25">
                                    <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                    alt="calendar-icon">
                                </td>
                                <td><input type="number" value="320800"></td>
                        </tr>

                    </tbody>
                </table>
                <div class="pipeline-btn pipeline-btn-d-none ">
                    <div class="add-pipeline">
                        <button class="btn add-pipeline-btn">Add This Candidate To Job Order Pipeline</button>
                    </div>
                    <div class="edit-brn">
                        <button class="btn pipeline-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                alt="Edit-img"> Edit</button>
                    </div>
                    <div class="popup-pipeline">
                    <i class="fas fa-times cross-icon"></i>
                         <h3>Add this candidate to the pipeline for a job order.</h3>
                         <div class="padd-20">
                         <p class="popup-pipeline-heading-1">Add this candidate to the pipeline for a job order.</p>
                        <p>Search for a job order below, and then click on the job title to add the candidate to the selected job order pipeline.</p>
                        <div>
                            <form action="" class="row pipeline-search-form">
                            <div class="col-md-6">
                                <label for="search job title"> Search by Job Title:</label>
                                <div class="pipeline-search">
                                <input type="text" class="form-control">
                                <span class="pipeline-search-txt search-job-title-btn">Go</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="search job title"> Search by Client Name:</label>
                                <div class="pipeline-search">
                                <input type="text" class="form-control">
                                <span class="pipeline-search-txt search-client-btn">Go</span>
                                </div>
                            </div>
                            </form>
                        </div>  
                        </div>                              
                    </div>
                    <div class="popup-pipeline-form">
                        <form action="" class="pipeline-form row">
                            <div class="col-md-8 profile-eidt-form-inner form-group">
                                    <select name="placement_term" id="placement_term" class="form-control">
                                        <option value="Other " selected diable > Other </option>
                                        <option value="Contacted">Contacted</option>
                                        <option value="Initial Screening">Initial Screening</option>
                                        <option value="Short Listed">Short Listed</option>
                                        <option value="Shelved">Shelved</option>
                                        <option value="Job Matching">Job Matching</option>
                                        <option value="Submissions">Submissions</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Interviews">Interviews</option>
                                        <option value="Due Diligence Check">Due Diligence Check</option>
                                        <option value="Rejected / Accepted">Rejected / Accepted</option>
                                        <option value="Placed">Placed</option>
                                        <option value="Archived">Archived</option>
                                        <option value="Testimony">Testimony</option>
                                    </select>
                                    <i class="fas fa-sort-down"></i>
                            </div>
                            <div class="col-md-8 profile-eidt-form-inner form-group">
                                    <select name="placement_term" id="placement_term" class="form-control">
                                        <option value="General" selected diable > General </option>
                                        <option value="Contacted">Contacted</option>
                                        <option value="Initial Screening">Initial Screening</option>
                                        <!-- <option value="Short Listed">Short Listed</option>
                                        <option value="Shelved">Shelved</option>
                                        <option value="Job Matching">Job Matching</option>
                                        <option value="Submissions">Submissions</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Interviews">Interviews</option>
                                        <option value="Due Diligence Check">Due Diligence Check</option>
                                        <option value="Rejected / Accepted">Rejected / Accepted</option>
                                        <option value="Placed">Placed</option>
                                        <option value="Archived">Archived</option>
                                        <option value="Testimony">Testimony</option> -->
                                    </select>
                                    <i class="fas fa-sort-down"></i>
                            </div>
                            <div class="col-md-8 profile-eidt-form-inner">
                            <textarea name="activity-textarea" id="activity-textarea" cols="30" rows="5" placeholder="Your Notes"></textarea>
                            </div>
                                <div class=" col-md-12 activity-form-back-btn">
                                    <div class=" profile-eidt-form-btn">
                                        <button class="btn back-btn pipeline-cancel-btn">Cancel</button>
                                        <input type="submit" class="btn" placeholder="Submit">
                                    </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="pipeline-back-btn">
                    <div class="col-md-12 profile-eidt-form-btn">
                    <button class="btn back-btn">Back</button>
                    <input type="submit" class="btn" placeholder="Submit">
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
                            <th class="th-sm submit-table-head">Submitted
                            </th>
                            <th class="th-sm">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="activity-data">
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr class="activity-data-d-none">
                            <td><input type="text" value="Tiger Nixon"></td>
                            <td><input type="text" value="System Architect"></td>
                            <td><input type="text" value="Edinburgh"></td>
                            <td><input type="number" value="61"></td>
                            <td class="pipeline-date"><input class="form-control date" type="calander" name="Pipeline_Date" placeholder=""
                                id="Pipeline_Date" value="2022/04/25">
                                <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                alt="calendar-icon">
                            </td>
                            <td><input type="number" value="320800"></td>
                    </tr>
                    </tbody>
                </table>
                <div class="pipeline-btn activity-btn-d-none">
                    <div class="add-pipeline">
                        <button class="btn add-activity-btn">Add Activity </button>
                    </div>
                    <div class="edit-brn">
                        <button class="btn activity-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                alt="Edit-img"> Edit</button>
                    </div>
                    <div class="popup-activity">
                        <form action="" class="activity-form row">
                            <div class="col-md-8 profile-eidt-form-inner form-group">
                                    <select name="placement_term" id="placement_term" class="form-control">
                                        <option value="Other " selected diable > Other </option>
                                        <option value="Contacted">Contacted</option>
                                        <option value="Initial Screening">Initial Screening</option>
                                        <option value="Short Listed">Short Listed</option>
                                        <option value="Shelved">Shelved</option>
                                        <option value="Job Matching">Job Matching</option>
                                        <option value="Submissions">Submissions</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Interviews">Interviews</option>
                                        <option value="Due Diligence Check">Due Diligence Check</option>
                                        <option value="Rejected / Accepted">Rejected / Accepted</option>
                                        <option value="Placed">Placed</option>
                                        <option value="Archived">Archived</option>
                                        <option value="Testimony">Testimony</option>
                                    </select>
                                    <i class="fas fa-sort-down"></i>
                            </div>
                            <div class="col-md-8 profile-eidt-form-inner form-group">
                                    <select name="placement_term" id="placement_term" class="form-control">
                                        <option value="General" selected diable > General </option>
                                        <option value="Contacted">Contacted</option>
                                        <option value="Initial Screening">Initial Screening</option>
                                        <!-- <option value="Short Listed">Short Listed</option>
                                        <option value="Shelved">Shelved</option>
                                        <option value="Job Matching">Job Matching</option>
                                        <option value="Submissions">Submissions</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Interviews">Interviews</option>
                                        <option value="Due Diligence Check">Due Diligence Check</option>
                                        <option value="Rejected / Accepted">Rejected / Accepted</option>
                                        <option value="Placed">Placed</option>
                                        <option value="Archived">Archived</option>
                                        <option value="Testimony">Testimony</option> -->
                                    </select>
                                    <i class="fas fa-sort-down"></i>
                            </div>
                            <div class="col-md-8 profile-eidt-form-inner">
                            <textarea name="activity-textarea" id="activity-textarea" cols="30" rows="5" placeholder="Your Notes"></textarea>
                            </div>
                                <div class=" col-md-12 activity-form-back-btn">
                                    <div class=" profile-eidt-form-btn">
                                        <button class="btn back-btn cancel-btn">Cancel</button>
                                        <input type="submit" class="btn" placeholder="Submit">
                                    </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="activity-back-btn">
                    <div class="col-md-12 profile-eidt-form-btn">
                    <button class="btn back-btn">Back</button>
                    <input type="submit" class="btn" placeholder="Submit">
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
