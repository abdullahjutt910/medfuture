@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-default back-candidate" href="{{ route('admin.jobs.index') }}">
                        <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                    </a>
                    <h4> {{ trans('View Job') }}</h4>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="view-job">

                <div class="row">
                    <div class="col-md-3 view-job-left">
                        <div class="job-client-details">
                            <h3>Client Details</h3>
                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/Add-User-Male.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Job ID</h5>
                                            <p class="card-text"><small class="text-muted">6052</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/CV-receive.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Client Name</h5>
                                            <p class="card-text"><small class="text-muted">Act For Kids - Western
                                                    Sydney</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/New-Job.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Business Type</h5>
                                            <p class="card-text"><small class="text-muted">General Practice</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/Email-Send.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Address</h5>
                                            <p class="card-text"><small class="text-muted">18/125 Main Street
                                                    Blacktown NSW 2148</small></p>
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
                        <div class="job-client-details contact-detail">
                            <h3>Contact Details</h3>
                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/Security-User-Male.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Contact Name</h5>
                                            <p class="card-text"><small class="text-muted">Jenny Sutter</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/Phone.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Phone</h5>
                                            <p class="card-text"><small class="text-muted">02 9622 7636</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                    <div class="col-md-2">
                                        <img src=" {{asset('img/dashboard/Secured-Letter.png')}}" class="img-fluid"
                                            alt="profile-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Email</h5>
                                            <p class="card-text"><small
                                                    class="text-muted">jenny.shutter@gmail.com</small></p>
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
                    </div>
                    <div class="col-md-6 view-job-center">
                        <div class="job-key-fetch">
                            <h3>Key Features</h3>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <h5>Offered</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Answer 1</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <h5>Engagement Term</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Answer 2</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <h5>Specialty</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Answer 3</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <h5>Seniority</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Answer 4</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <h5>Contact</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Answer 5</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <h5>Email</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Answer 6</h5>
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>
                        <div class="job-detail">
                            <h3>JOB DESCRIPTION</h3>

                            <div class="tool-bar">
                                <textarea name="content" id="content" cols="30" rows="10">
                                    This is my.
                                </textarea>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="job-detail">
                            <h3>Eligibility & Qualifications</h3>

                            <div class="tool-bar">
                                <textarea name="qualificate" id="qualificate" cols="30" rows="10">
                                    This is my.
                                </textarea>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="job-key-fetch highlight-job">
                            <h3>Highlights of the Job</h3>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                            <div class="row job-key-fetch-inner">
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="key-fetch-txt-box"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 view-job-right">
                        <div class="position-dtil position-detil-click">
                            <h3 class="position-dtil-hading">Position Details</h3>
                            <div class="position-hide">
                                <div class="position-dtil-inner">
                                    <h4>Title</h4>
                                    <p>Occupational Therapist | Tivendale | Darwin</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Profession</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Sub Category</h4>
                                    <p>General Practice</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Division</h4>
                                    <p>AHP/ HSS</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Seniority</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Specialty</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Placement Type</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Engagement Term</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Employment Type</h4>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="position-dtil location-feature-click">
                            <h3 class="position-dtil-hading">Location Features & Portrayal</h3>
                            <div class="position-hide">
                                <div class="position-dtil-inner">
                                    <h4>Title</h4>
                                    <p>Occupational Therapist | Tivendale | Darwin</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Profession</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Sub Category</h4>
                                    <p>General Practice</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Division</h4>
                                    <p>AHP/ HSS</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Seniority</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Specialty</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Placement Type</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Engagement Term</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Employment Type</h4>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="position-dtil center-hosptl-click">
                            <h3 class="position-dtil-hading">Center / Hospital Facility</h3>
                            <div class="position-hide">
                                <div class="position-dtil-inner">
                                    <h4>Title</h4>
                                    <p>Occupational Therapist | Tivendale | Darwin</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Profession</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Sub Category</h4>
                                    <p>General Practice</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Division</h4>
                                    <p>AHP/ HSS</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Seniority</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Specialty</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Placement Type</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Engagement Term</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Employment Type</h4>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="position-dtil offer-benefit-click">
                            <h3 class="position-dtil-hading ">Offer & Other Benefits</h3>
                            <div class="position-hide">
                                <div class="position-dtil-inner">
                                    <h4>Title</h4>
                                    <p>Occupational Therapist | Tivendale | Darwin</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Profession</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Sub Category</h4>
                                    <p>General Practice</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Division</h4>
                                    <p>AHP/ HSS</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Seniority</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Specialty</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Placement Type</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Engagement Term</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Employment Type</h4>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="position-dtil provided-click">
                            <h3 class="position-dtil-hading">Provided Attachments</h3>
                            <div class="position-hide">
                                <div class="position-dtil-inner">
                                    <h4>Title</h4>
                                    <p>Occupational Therapist | Tivendale | Darwin</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Profession</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Sub Category</h4>
                                    <p>General Practice</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Division</h4>
                                    <p>AHP/ HSS</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Seniority</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Specialty</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Placement Type</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Engagement Term</h4>
                                    <p>-</p>
                                </div>
                                <div class="position-dtil-inner">
                                    <h4>Employment Type</h4>
                                    <p>-</p>
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
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="job-post">
                <div class="row job-post-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Verified Status</h5>
                            <select class="form-control" name="gender" id="gender" required="">
                                <option value="" disabled="" selected="">No</option>
                                <option value="Male">No</option>
                                <option value="Female">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Posted Status</h5>
                            <select class="form-control" name="gender" id="gender" required="">
                                <option value="" disabled="" selected="">No</option>
                                <option value="Male">No</option>
                                <option value="Female">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Status Management</h5>
                            <select class="form-control" name="gender" id="gender" required="">
                                <option value="" disabled="" selected="">No</option>
                                <option value="Male">No</option>
                                <option value="Female">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Priority Status</h5>
                            <select class="form-control" name="gender" id="gender" required="">
                                <option value="" disabled="" selected="">No</option>
                                <option value="Male">No</option>
                                <option value="Female">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <textarea name="post-note" id="post-note" cols="30" rows="10">Internal Notes</textarea>
                    </div>
                </div>
                <div class="job-post-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="job-post-btn">
                                <a href="#" class="btn job-back-btn">
                                    Back
                                </a>
                                <a href="#" class="btn job-edit-btn">
                                    Edit
                                </a>
                                <a href="#" class="btn job-update-btn">
                                    Update
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="job-post-btn job-post-right-btn ">
                                <a href="#" class="btn job-previw-btn">
                                    Post Preview
                                </a>
                                <a href="#" class="btn job-re-post-btn">
                                    Re - Post
                                </a>
                                <a href="#" class="btn job-delete-btn">
                                    Delete
                                </a>
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
        </div>
        <div class="col-md-12">
            <a href="#" class="btn job-post-back-btn">
                Back
            </a>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 job-post-left">
                    <div class="external-post">
                        <h3>EXTERNAL POSTING</h3>
                        <div class="external-post-line"></div>
                        <div class="social-check-box">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Facebook
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Instagram
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    LinkedIn
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Twitter
                                </label>
                            </div>
                        </div>
                        <div class="job-ext-post-btn">
                            <a href="#" class="btn">
                                Update External Posting
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 job-assign-to">
                    <div class="external-post">
                        <h3>ASSIGNED TO</h3>
                        <div class="external-post-line"></div>

                        <div class="row job-post-assign-to">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Job Manager</h5>
                                    <select class="form-control" name="gender" id="gender" required="">
                                        <option value="" disabled="" selected="">Client Manager</option>
                                        <option value="Male">No</option>
                                        <option value="Female">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Recruitment Consultant</h5>
                                    <select class="form-control" name="gender" id="gender" required="">
                                        <option value="" disabled="" selected="">Recruitment Consultant</option>
                                        <option value="Male">No</option>
                                        <option value="Female">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Data Administrator</h5>
                                    <select class="form-control" name="gender" id="gender" required="">
                                        <option value="" disabled="" selected="">Data Administrator</option>
                                        <option value="Male">No</option>
                                        <option value="Female">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="job-ext-post-btn">
                            <a href="#" class="btn">
                                Assign
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="job-candi-pipeline">
                <h3>CANDIDATE PIPELINE</h3>
            </div>
            <div class="candidate-profile-table">
                <table class="table candidate-pipeline  table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Title</th>
                            <th class="th-sm">Candidate</th>
                            <th class="th-sm">Owner</th>
                            <th class="th-sm">Added</th>
                            <th class="th-sm submit-table-head">Submitted</th>
                            <th class="th-sm">Action</th>
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
                            <td class="pipeline-date"><input class="form-control date" type="calander"
                                    name="Pipeline_Date" placeholder="" id="Pipeline_Date" value="2022/04/25">
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
                    <div class="popup-pipeline">
                        <i class="fas fa-times cross-icon"></i>
                        <h3>Add this candidate to the pipeline for a job order.</h3>
                        <div class="padd-20">
                            <p class="popup-pipeline-heading-1">Add this candidate to the pipeline for a job order.</p>
                            <p>Search for a job order below, and then click on the job title to add the candidate to the
                                selected job order pipeline.</p>
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
                                    <option value="Other " selected diable> Other </option>
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
                                    <option value="General" selected diable> General </option>
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
                            <div class="col-md-8 profile-eidt-form-inner">
                                <textarea name="activity-textarea" id="activity-textarea" cols="30" rows="5"
                                    placeholder="Your Notes"></textarea>
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
                <!-- <div class="pipeline-back-btn">
                        <div class="col-md-12 profile-eidt-form-btn">
                        <button class="btn back-btn">Back</button>
                        <input type="submit" class="btn" placeholder="Submit">
                        </div> -->
            </div>
            <div class="forms-colored-div">
                <div class="blue"></div>
                <div class="purple"></div>
                <div class="pink"></div>
            </div>
        </div>
    </div>


    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.job.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $job->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.company_name') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::COMPANY_NAME_SELECT[$job->company_name] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.trade_name') }}
                                    </th>
                                    <td>
                                        {{ $job->trade_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.abn') }}
                                    </th>
                                    <td>
                                        {{ $job->abn }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.devision') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DEVISION_SELECT[$job->devision] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.cetagory') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::CETAGORY_SELECT[$job->cetagory] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.bussiness_service') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::BUSSINESS_SERVICE_SELECT[$job->bussiness_service] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.address_1') }}
                                    </th>
                                    <td>
                                        {{ $job->address_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.address_2') }}
                                    </th>
                                    <td>
                                        {{ $job->address_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.suburb') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SUBURB_SELECT[$job->suburb] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.state') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::STATE_SELECT[$job->state] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.post_code') }}
                                    </th>
                                    <td>
                                        {{ $job->post_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.country') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::COUNTRY_SELECT[$job->country] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.district') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DISTRICT_SELECT[$job->district] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.distance_to_main_city') }}
                                    </th>
                                    <td>
                                        {{ $job->distance_to_main_city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.main_city') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::MAIN_CITY_SELECT[$job->main_city] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.website') }}
                                    </th>
                                    <td>
                                        {{ $job->website }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.google_address_link') }}
                                    </th>
                                    <td>
                                        {{ $job->google_address_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.corporate_brand') }}
                                    </th>
                                    <td>
                                        {{ $job->corporate_brand }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.ownership_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::OWNERSHIP_TYPE_SELECT[$job->ownership_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.branch') }}
                                    </th>
                                    <td>
                                        {{ $job->branch }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.profession') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::PROFESSION_SELECT[$job->profession] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.division') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DIVISION_SELECT[$job->division] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.specialty') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SPECIALTY_SELECT[$job->specialty] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.seniority') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SENIORITY_SELECT[$job->seniority] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.skills') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SKILLS_SELECT[$job->skills] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.placement_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::PLACEMENT_TYPE_SELECT[$job->placement_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.engagment_term') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::ENGAGMENT_TERM_SELECT[$job->engagment_term] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.employment_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::EMPLOYMENT_TYPE_SELECT[$job->employment_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.gross_salary') }}
                                    </th>
                                    <td>
                                        {{ $job->gross_salary }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.gross_salary_information') }}
                                    </th>
                                    <td>
                                        {{ $job->gross_salary_information }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.billing_share') }}
                                    </th>
                                    <td>
                                        {{ $job->billing_share }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.billing_share_information') }}
                                    </th>
                                    <td>
                                        {{ $job->billing_share_information }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.hourly_rate') }}
                                    </th>
                                    <td>
                                        {{ $job->hourly_rate }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.hourly_rate_information') }}
                                    </th>
                                    <td>
                                        {{ $job->hourly_rate_information }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.job_title') }}
                                    </th>
                                    <td>
                                        {{ $job->job_title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.post_date') }}
                                    </th>
                                    <td>
                                        {{ $job->post_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.priority_status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::PRIORITY_STATUS_SELECT[$job->priority_status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.commencement_date') }}
                                    </th>
                                    <td>
                                        {{ $job->commencement_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.finished_date') }}
                                    </th>
                                    <td>
                                        {{ $job->finished_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.recruitment_consultant') }}
                                    </th>
                                    <td>
                                        {{ $job->recruitment_consultant }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.contact_number') }}
                                    </th>
                                    <td>
                                        {{ $job->contact_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $job->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.terms_and_condition') }}
                                    </th>
                                    <td>
                                        {!! $job->terms_and_condition !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.contacts') }}
                                    </th>
                                    <td>
                                        {!! $job->contacts !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.client_manager') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::CLIENT_MANAGER_SELECT[$job->client_manager] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.recruitment_consultant_2') }}
                                    </th>
                                    <td>
                                        {{ $job->recruitment_consultant_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.data_administrator') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DATA_ADMINISTRATOR_SELECT[$job->data_administrator] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div> -->
</div>
@endsection