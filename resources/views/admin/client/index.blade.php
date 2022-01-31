@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-default back-candidate" href="{{ route('admin.candidates.index') }}">
                        <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                    </a>
                    <h4> {{ trans('cruds.candidate.title_singular') }}</h4>
                    <!-- <h4> {{ trans('global.create') }} {{ trans('cruds.candidate.title_singular') }}</h4>    -->
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
                        <div class="position-dtil">
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

                        <div class="position-dtil">
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

                        <div class="position-dtil">
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

                        <div class="position-dtil">
                            <h3 class="position-dtil-hading">Offer & Other Benefits</h3>
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

                        <div class="position-dtil">
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


    <!-- add client view start here -->

    <p style="margin-top:50px">add client view</p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">


                <div class="panel-heading">
                    <a class="btn btn-default back-candidate" href="{{ route('admin.candidates.index') }}">
                        <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                    </a>
                    <h4> Add Client</h4>
                    <!-- <h4> {{ trans('global.create') }} {{ trans('cruds.candidate.title_singular') }}</h4>    -->
                </div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('admin.candidates.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Client Profile</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 first-top-field">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                    <input class="form-control" type="text" name="register_name"
                                                        id="register_name" placeholder="Registered Company Name"
                                                        value="{{ old('first_name', '') }}" required>
                                                    @if($errors->has('first_name'))
                                                    <span class="help-block" role="alert">{{
                                                        $errors->first('first_name') }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.first_name_helper') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                    <!-- <label class="required" for="first_name">{{ trans('cruds.candidate.fields.first_name') }}</label> -->
                                                    <input class="form-control" type="text" name="trade_number"
                                                        id="trade_number" placeholder="Trade Name"
                                                        value="{{ old('first_name', '') }}" required>
                                                    @if($errors->has('first_name'))
                                                    <span class="help-block" role="alert">{{
                                                        $errors->first('first_name') }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.first_name_helper') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                    <input class="form-control" type="number" name="abn" id="abn"
                                                        placeholder="ABN" value="{{ old('last_name', '') }}" required>
                                                    @if($errors->has('last_name'))
                                                    <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                        }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.last_name_helper') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                    <select class="form-control" name="division" id="division" required>
                                                        <option value="Division" selected diable> Division </option>
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

                                                    </select>
                                                    <i class="fas fa-sort-down"></i>
                                                    @if($errors->has('gender'))
                                                    <span class="help-block" role="alert">{{ $errors->first('gender')
                                                        }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.gender_helper') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                    <select class="form-control" name="category" id="category" required>
                                                        <option value="Category" selected diable> Category </option>
                                                    </select>
                                                    <i class="fas fa-sort-down"></i>
                                                    @if($errors->has('gender'))
                                                    <span class="help-block" role="alert">{{ $errors->first('gender')
                                                        }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.gender_helper') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                    <select class="form-control" name="business_services"
                                                        id="business_services" required>
                                                        <option value="Business Services" selected diable> Business Services
                                                        </option>
                                                    </select>
                                                    <i class="fas fa-sort-down"></i>
                                                    @if($errors->has('gender'))
                                                    <span class="help-block" role="alert">{{ $errors->first('gender')
                                                        }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.gender_helper') }}</span>
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
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2> Location Profile </h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="text" name="address_line_1"
                                                id="address_line_1" placeholder="Address Line 1"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="text" name="address_line_2"
                                                id="address_line_2" placeholder="Address Line 2"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.senority') }}</label> -->
                                            <select class="form-control" name="senority" id="senority">
                                                <option value="Suburb | Town" disabled="" selected="">Suburb | Town</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('senority'))
                                            <span class="help-block" role="alert">{{ $errors->first('senority')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('specialty') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.specialty') }}</label> -->
                                            <select class="form-control" name="specialty" id="specialty">
                                                <option value disabled {{ old('specialty', null)===null ? 'selected' : ''
                                                    }}>{{ trans('specialty') }}</option>
                                                @foreach(App\Models\Candidate::SPECIALTY_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('specialty', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('specialty'))
                                            <span class="help-block" role="alert">{{ $errors->first('specialty')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.specialty_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="form-group {{ $errors->has('professional_qualification') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.professional_qualification') }}</label> -->
                                            <select class="form-control" name="professional_qualification"
                                                id="professional_qualification">
                                                <option value disabled {{ old('professional_qualification', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Professional Qualification') }}</option>
                                                @foreach(App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT as $key
                                                => $label)
                                                <option value="{{ $key }}" {{ old('professional_qualification', ''
                                                    )===(string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('professional_qualification'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('professional_qualification') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.professional_qualification_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('graduation') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.graduation') }}</label> -->
                                            <select class="form-control" name="graduation" id="graduation">
                                                <option value disabled {{ old('graduation', null)===null ? 'selected' : ''
                                                    }}>{{ trans('graduation') }}</option>
                                                @foreach(App\Models\Candidate::GRADUATION_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('graduation', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('graduation'))
                                            <span class="help-block" role="alert">{{ $errors->first('graduation')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.graduation_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="form-group {{ $errors->has('country_of_primary_degree') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.country_of_primary_degree') }}</label> -->
                                            <select class="form-control" name="country_of_primary_degree"
                                                id="country_of_primary_degree">
                                                <option value disabled {{ old('country_of_primary_degree', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Country of Primary Degree') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT as $key
                                                => $label)
                                                <option value="{{ $key }}" {{ old('country_of_primary_degree', ''
                                                    )===(string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('country_of_primary_degree'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('country_of_primary_degree') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.country_of_primary_degree_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('medical_school') ? 'has-error' : '' }}">
                                            <!-- <label for="medical_school">{{ trans('cruds.candidate.fields.medical_school') }}</label> -->
                                            <input class="form-control" type="text" name="medical_school"
                                                id="medical_school" placeholder="Medical School"
                                                value="{{ old('medical_school', '') }}">
                                            @if($errors->has('medical_school'))
                                            <span class="help-block" role="alert">{{ $errors->first('medical_school')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.medical_school_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('practice_country') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.practice_country') }}</label> -->
                                            <select class="form-control" name="practice_country" id="practice_country">
                                                <option value disabled {{ old('practice_country', null)===null ? 'selected'
                                                    : '' }}>{{ trans('Practice Licensing Country') }}</option>
                                                @foreach(App\Models\Candidate::PRACTICE_COUNTRY_SELECT as $key =>
                                                $label)
                                                <option value="{{ $key }}" {{ old('practice_country', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('practice_country'))
                                            <span class="help-block" role="alert">{{ $errors->first('practice_country')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.practice_country_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('practice_licensing_body'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('practice_licensing_body') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.practice_licensing_body_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('license_type') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.license_type') }}</label> -->
                                            <select class="form-control" name="license_type" id="license_type">
                                                <option value disabled {{ old('license_type', null)===null ? 'selected' : ''
                                                    }}>{{ trans('Registeration/License_Type') }}</option>
                                                @foreach(App\Models\Candidate::LICENSE_TYPE_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('license_type', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('license_type'))
                                            <span class="help-block" role="alert">{{ $errors->first('license_type')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.license_type_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="form-group {{ $errors->has('experience_from_home') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.experience_from_home') }}</label> -->
                                            <select class="form-control" name="experience_from_home"
                                                id="experience_from_home">
                                                <option value disabled {{ old('experience_from_home', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Experience from home Country') }}
                                                </option>
                                                @foreach(App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT as $key =>
                                                $label)
                                                <option value="{{ $key }}" {{ old('experience_from_home', '' )===(string)
                                                    $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('experience_from_home'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('experience_from_home') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.experience_from_home_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                                <option value="{{ $key }}" {{ old('experience_from_residing', ''
                                                    )===(string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('experience_from_residing'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('experience_from_residing') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.experience_from_residing_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="form-group {{ $errors->has('recognised_comparable_experience') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.recognised_comparable_experience') }}</label> -->
                                            <select class="form-control" name="recognised_comparable_experience"
                                                id="recognised_comparable_experience">
                                                <option value disabled {{ old('recognised_comparable_experience',
                                                    null)===null ? 'selected' : '' }}>{{ trans('Recognised Comparable
                                                    Experience') }}
                                                </option>
                                                @foreach(App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT
                                                as $key => $label)
                                                <option value="{{ $key }}" {{ old('recognised_comparable_experience', ''
                                                    )===(string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('recognised_comparable_experience'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('recognised_comparable_experience') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.recognised_comparable_experience_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="form-group {{ $errors->has('current_employment_status') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.current_employment_status') }}</label> -->
                                            <select class="form-control" name="current_employment_status"
                                                id="current_employment_status">
                                                <option value disabled {{ old('current_employment_status', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Current Employment Status') }}</option>
                                                @foreach(App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT as $key
                                                => $label)
                                                <option value="{{ $key }}" {{ old('current_employment_status', ''
                                                    )===(string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('current_employment_status'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('current_employment_status') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.current_employment_status_helper')
                                                }}</span>
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

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2> Ownership Information</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div
                                            class="form-group {{ $errors->has('country_of_citizenship') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.country_of_citizenship') }}</label> -->
                                            <select class="form-control" name="country_of_citizenship"
                                                id="country_of_citizenship">
                                                <option value disabled {{ old('country_of_citizenship', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Country of Citizenship') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT as $key =>
                                                $label)
                                                <option value="{{ $key }}" {{ old('country_of_citizenship', '' )===(string)
                                                    $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('country_of_citizenship'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('country_of_citizenship') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.country_of_citizenship_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div
                                            class="form-group {{ $errors->has('country_of_residence') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.country_of_residence') }}</label> -->
                                            <select class="form-control" name="country_of_residence"
                                                id="country_of_residence">
                                                <option value disabled {{ old('country_of_residence', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Country of Residence') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT as $key =>
                                                $label)
                                                <option value="{{ $key }}" {{ old('country_of_residence', '' )===(string)
                                                    $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('country_of_residence'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('country_of_residence') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.country_of_residence_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('visa_type') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.visa_type') }}</label> -->
                                            <select class="form-control" name="visa_type" id="visa_type">
                                                <option value disabled {{ old('visa_type', null)===null ? 'selected' : ''
                                                    }}>{{ trans('Visa type') }}</option>
                                                @foreach(App\Models\Candidate::VISA_TYPE_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('visa_type', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('visa_type'))
                                            <span class="help-block" role="alert">{{ $errors->first('visa_type')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.visa_type_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('work_rights_status') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.work_rights_status') }}</label> -->
                                            <select class="form-control" name="work_rights_status" id="work_rights_status">
                                                <option value disabled {{ old('work_rights_status', null)===null
                                                    ? 'selected' : '' }}>{{ trans('Work rights Status') }}</option>
                                                @foreach(App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT as $key =>
                                                $label)
                                                <option value="{{ $key }}" {{ old('work_rights_status', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
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
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Main Contact</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.candidate.fields.profession_login') }}</label> -->
                                            <select class="form-control" name="profession_login" id="profession_login">
                                                <option value disabled {{ old('profession_login', null)===null ? 'selected'
                                                    : '' }}>{{ trans('Profession') }}</option>
                                                @foreach(App\Models\Candidate::PROFESSION_LOGIN_SELECT as $key =>
                                                $label)
                                                <option value="{{ $key }}" {{ old('profession_login', '' )===(string) $key
                                                    ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                            <!-- <label for="username">{{ trans('cruds.candidate.fields.username') }}</label> -->
                                            <input class="form-control" type="text" name="username" id="username"
                                                placeholder="Username" value="{{ old('username', '') }}">
                                            @if($errors->has('username'))
                                            <span class="help-block" role="alert">{{ $errors->first('username')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.username_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                            <!-- <label for="password">{{ trans('cruds.candidate.fields.password') }}</label> -->
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Password" id="password">
                                            @if($errors->has('password'))
                                            <span class="help-block" role="alert">{{ $errors->first('password')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.password_helper')
                                                }}</span>
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
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('cv_document') ? 'has-error' : '' }}">
                                            <div class="upload-add-candi">
                                                <input type="file" name="cv_document" class="form-control" required>

                                                <span class="upload-add-candi-txt">
                                                    <p>Drop files here to upload</p>
                                                </span>
                                                <div class="upload-icon">
                                                    <i class="fas fa-arrow-up"></i>
                                                    <p>Upload</p>
                                                </div>
                                            </div>

                                            @if($errors->has('cv_document'))
                                            <span class="help-block" role="alert">{{ $errors->first('cv_document')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.cv_document_helper') }}</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="form-group {{ $errors->has('registration_form_document') ? 'has-error' : '' }}">
                                            <div class="upload-add-candi">
                                                <input type="file" name="registration_form_document" class="form-control"
                                                    required>
                                                <span class="upload-add-candi-txt">
                                                    <p>Drop files here to upload</p>
                                                </span>
                                                <div class="upload-icon">
                                                    <i class="fas fa-arrow-up"></i>
                                                    <p>Upload</p>
                                                </div>
                                            </div>
                                            @if($errors->has('registration_form_document'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('registration_form_document') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.registration_form_document_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('privacy_concerns') ? 'has-error' : '' }}">
                                            <div class="upload-add-candi">
                                                <input type="file" name="privacy_concerns" class="form-control" required>
                                                <span class="upload-add-candi-txt">
                                                    <p>Drop files here to upload</p>
                                                </span>
                                                <div class="upload-icon">
                                                    <i class="fas fa-arrow-up"></i>
                                                    <p>Upload</p>
                                                </div>
                                            </div>
                                            @if($errors->has('privacy_concerns'))
                                            <span class="help-block" role="alert">{{ $errors->first('privacy_concerns')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.privacy_concerns_helper') }}</span>
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
                        <div class="row">
                            <div class="col-md-12 submit_btn">
                                <div class="form-group">
                                    <button class="btn btn-danger" type="submit">
                                        {{ trans('REGISTER') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- add client view end here -->



    
      <!-- add locum job start here -->

      <p style="margin-top:50px">add locum job</p>
      <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-default">
  
  
                  <div class="panel-heading">
                      <a class="btn btn-default back-candidate" href="{{ route('admin.candidates.index') }}">
                          <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                      </a>
                      <h4> Add Locum Job</h4>
                      <!-- <h4> {{ trans('global.create') }} {{ trans('cruds.candidate.title_singular') }}</h4>    -->
                  </div>
  
                  <div class="panel-body">
                      <form method="POST" action="{{ route('admin.candidates.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="box-bg-shadow">
                              <div class="box-inner">
                                  <div class="personal-info">
                                      <h2>Client Profile</h2>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12 first-top-field">
                                          <div class="row">
                                              <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                    <select class="form-control" name="register_name" id="register_name" required>
                                                        <option value="Registered Company Name" selected diable> Registered Company Name </option>
                                                        <option value="General Practitioners ">General
                                                            Practitioners </option>
                                                    </select>
                                                    <i class="fas fa-sort-down"></i>
                                                    @if($errors->has('gender'))
                                                    <span class="help-block" role="alert">{{ $errors->first('gender')
                                                        }}</span>
                                                    @endif
                                                    <span class="help-block">{{
                                                        trans('cruds.candidate.fields.gender_helper') }}</span>
                                                </div>
                                             </div>
                                              <div class="col-md-4">
                                                  <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                      <input class="form-control" type="text" name="trade_name"
                                                          id="trade_name" placeholder="Trade Name"
                                                          value="{{ old('first_name', '') }}" required>
                                                      @if($errors->has('first_name'))
                                                      <span class="help-block" role="alert">{{
                                                          $errors->first('first_name') }}</span>
                                                      @endif
                                                      <span class="help-block">{{
                                                          trans('cruds.candidate.fields.first_name_helper') }}</span>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                      <input class="form-control" type="number" name="abn" id="abn"
                                                          placeholder="ABN" value="{{ old('last_name', '') }}" required>
                                                      @if($errors->has('last_name'))
                                                      <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                          }}</span>
                                                      @endif
                                                      <span class="help-block">{{
                                                          trans('cruds.candidate.fields.last_name_helper') }}</span>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                      <select class="form-control" name="division" id="division" required>
                                                          <option value="Division" selected diable> Division </option>
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
  
                                                      </select>
                                                      <i class="fas fa-sort-down"></i>
                                                      @if($errors->has('gender'))
                                                      <span class="help-block" role="alert">{{ $errors->first('gender')
                                                          }}</span>
                                                      @endif
                                                      <span class="help-block">{{
                                                          trans('cruds.candidate.fields.gender_helper') }}</span>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                      <select class="form-control" name="category" id="category" required>
                                                          <option value="Category" selected diable> Category </option>
                                                      </select>
                                                      <i class="fas fa-sort-down"></i>
                                                      @if($errors->has('gender'))
                                                      <span class="help-block" role="alert">{{ $errors->first('gender')
                                                          }}</span>
                                                      @endif
                                                      <span class="help-block">{{
                                                          trans('cruds.candidate.fields.gender_helper') }}</span>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                                      <select class="form-control" name="business_services"
                                                          id="business_services" required>
                                                          <option value="Business Services" selected diable> Business Services
                                                          </option>
                                                      </select>
                                                      <i class="fas fa-sort-down"></i>
                                                      @if($errors->has('gender'))
                                                      <span class="help-block" role="alert">{{ $errors->first('gender')
                                                          }}</span>
                                                      @endif
                                                      <span class="help-block">{{
                                                          trans('cruds.candidate.fields.gender_helper') }}</span>
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
                          </div>
  
                          <div class="box-bg-shadow">
                              <div class="box-inner">
                                  <div class="personal-info">
                                      <h2> Location Profile </h2>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                              <input class="form-control" type="text" name="address_line_1"
                                                  id="address_line_1" placeholder="Address Line 1"
                                                  value="{{ old('last_name', '') }}" required>
                                              @if($errors->has('last_name'))
                                              <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.last_name_helper') }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                              <input class="form-control" type="text" name="address_line_2"
                                                  id="address_line_2" placeholder="Address Line 2"
                                                  value="{{ old('last_name', '') }}" required>
                                              @if($errors->has('last_name'))
                                              <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.last_name_helper') }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="senority" id="senority">
                                                  <option value="Suburb | Town" disabled="" selected="">Suburb | Town</option>
                                                  <option value="Suburb">Suburb</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                          </div>
                                      </div>

                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                                <select class="form-control" name="senority" id="senority">
                                                    <option value="State | Region" disabled="" selected="">State | Region</option>
                                                    <option value="State">State</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                                @if($errors->has('senority'))
                                                <span class="help-block" role="alert">{{ $errors->first('senority')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                    }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="number" name="post_code" id="post_code"
                                                    placeholder="Post Code" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                                <select class="form-control" name="country" id="country">
                                                    <option value="Country" disabled="" selected="">Country</option>
                                                    <option value="Country">Country</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                                @if($errors->has('senority'))
                                                <span class="help-block" role="alert">{{ $errors->first('senority')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                    }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                                <select class="form-control" name="sub_district" id="sub_district">
                                                    <option value="Sub - Region | District" disabled="" selected="">Sub - Region | District</option>
                                                    <option value="Region">Region</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                                @if($errors->has('senority'))
                                                <span class="help-block" role="alert">{{ $errors->first('senority')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                    }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="distance_main_city" id="distance_main_city"
                                                    placeholder="Distance to Main City" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                                <select class="form-control" name="main_city" id="main_city">
                                                    <option value="Main City" disabled="" selected="">Main City</option>
                                                    <option value="Main">Main</option>
                                                </select>
                                                <i class="fas fa-sort-down"></i>
                                                @if($errors->has('senority'))
                                                <span class="help-block" role="alert">{{ $errors->first('senority')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                    }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="url" name="website" id="website"
                                                    placeholder="Website" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="url" name="google_address_link" id="google_address_link"
                                                    placeholder="Google Address Link" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
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
  
                          <div class="box-bg-shadow">
                              <div class="box-inner">
                                  <div class="personal-info">
                                      <h2> Ownership Information</h2>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="url" name="corporate_brand" id="corporate_brand"
                                                placeholder="Corporate Brand (If Applicable)" value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                            <select class="form-control" name="ownership_type" id="ownership_type">
                                                <option value="Ownership Type" disabled="" selected="">Ownership Type</option>
                                                <option value="Ownership">Ownership</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('senority'))
                                            <span class="help-block" role="alert">{{ $errors->first('senority')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="url" name="branch_count" id="branch_count"
                                                placeholder="Branch I Subsidiaries Count" value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
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
                            <div class="box-bg-shadow">
                              <div class="box-inner">
                                  <div class="personal-info">
                                      <h2>Vacancy Information</h2>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                              <select class="form-control" name="profession" id="profession">
                                                  <option value disabled selected="">Profession</option>
                                                  <option value="Profession">Profession</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('profession_login'))
                                              <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <select class="form-control" name="division" id="division">
                                                <option value disabled selected="">Division</option>
                                                <option value="Division">Division</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <select class="form-control" name="specialty" id="specialty">
                                                <option value disabled selected="">Specialty</option>
                                                <option value="Specialty">Specialty</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                          <select class="form-control" name="seniority" id="seniority">
                                              <option value disabled selected="">Seniority</option>
                                              <option value="Seniority">Seniority</option>
                                          </select>
                                          <i class="fas fa-sort-down"></i>
                                          @if($errors->has('profession_login'))
                                          <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                              }}</span>
                                          @endif
                                          <span class="help-block">{{
                                              trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <select class="form-control" name="skills_interest" id="skills_interest">
                                                <option value disabled selected="">Skills or Interest</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <select class="form-control" name="placement_type" id="placement_type">
                                                <option value disabled selected="">Placement Type</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <select class="form-control" name="engagement_term" id="engagement_term">
                                                <option value disabled selected="">Engagement Term</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                                            <select class="form-control" name="employment_type" id="employment_type">
                                                <option value disabled selected="">Employment Type</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('profession_login'))
                                            <span class="help-block" role="alert">{{ $errors->first('profession_login')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.profession_login_helper') }}</span>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="gross_salary" id="gross_salary"
                                                    placeholder="Gross Salary" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="gross_salary_information" id="gross_salary_information"
                                                    placeholder="Gross Salary Information" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="billing_share" id="billing_share"
                                                    placeholder="Billing Share" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="billing_share_information" id="billing_share_information"
                                                    placeholder="Billing Share Information" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="hourly_rate" id="hourly_rate"
                                                    placeholder="Hourly Rate" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="hourly_rate_information" id="hourly_rate_information"
                                                    placeholder="Hourly Rate Information" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <input class="form-control" type="text" name="job_title" id="job_title"
                                                    placeholder="Job Title" value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                    }}</span>
                                                @endif
                                                <span class="help-block">{{
                                                    trans('cruds.candidate.fields.last_name_helper') }}</span>
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
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Work Location</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="work-locate-check">
                                            <p>Same as Client Address</p>
                                            <div class="form-check">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="text" name="address_line_1"
                                                id="address_line_1" placeholder="Address Line 1"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="text" name="address_line_2"
                                                id="address_line_2" placeholder="Address Line 2"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                              <input class="form-control" type="text" name="distance_main_city" id="distance_main_city"
                                                  placeholder="Distance to Main City" value="{{ old('last_name', '') }}" required>
                                              @if($errors->has('last_name'))
                                              <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.last_name_helper') }}</span>
                                          </div>
                                      </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                            <select class="form-control" name="senority" id="senority">
                                                <option value="Suburb | Town" disabled="" selected="">Suburb | Town</option>
                                                <option value="Suburb">Suburb</option>
                                            </select>
                                            <i class="fas fa-sort-down"></i>
                                            @if($errors->has('senority'))
                                            <span class="help-block" role="alert">{{ $errors->first('senority')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                }}</span>
                                        </div>
                                    </div>

                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="senority" id="senority">
                                                  <option value="State | Region" disabled="" selected="">State | Region</option>
                                                  <option value="State">State</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="sub_district" id="sub_district">
                                                  <option value="Sub - Region | District" disabled="" selected="">Sub - Region | District</option>
                                                  <option value="Region">Region</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="country" id="country">
                                                  <option value="Country" disabled="" selected="">Country</option>
                                                  <option value="Country">Country</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                              <input class="form-control" type="number" name="post_code" id="post_code"
                                                  placeholder="Post Code" value="{{ old('last_name', '') }}" required>
                                              @if($errors->has('last_name'))
                                              <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.last_name_helper') }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="main_city" id="main_city">
                                                  <option value="Main City" disabled="" selected="">Main City</option>
                                                  <option value="Main">Main</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="priority_status" id="priority_status">
                                                  <option value="Main City" disabled="" selected="">Priority Status</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
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
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Job Status</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="date" name="post_date"
                                                id="post_date" placeholder="Post Date"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="priority_status" id="priority_status">
                                                  <option value="Priority Status" disabled="" selected="">Priority Status</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="date" name="commencement_date"
                                                id="commencement_date" placeholder="Commencement Date"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="date" name="finished_date"
                                                id="finished_date" placeholder="Finished Date"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
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
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Contact</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="text" name="recruitment_consultant"
                                                id="recruitment_consultant" placeholder="Recruitment Consultant"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="number" name="contact_number"
                                                id="contact_number" placeholder="Contact Number"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <input class="form-control" type="email" name="email_id"
                                                id="email_id" placeholder="Email ID"
                                                value="{{ old('last_name', '') }}" required>
                                            @if($errors->has('last_name'))
                                            <span class="help-block" role="alert">{{ $errors->first('last_name')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.candidate.fields.last_name_helper') }}</span>
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
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Locum Job Details</h2>
                                </div>
                                <div class="locum-job-dtil">
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 1</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 1</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 2</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 2</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 3</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 3</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 4</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 4</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 5</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 5</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 6</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 6</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 7</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 7</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 8</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 8</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 9</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 9</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 10</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 10</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 11</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 11</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 12</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 12</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 13</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 13</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 14</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 14</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 15</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 15</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 16</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 16</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                    <div class="row job-key-fetch-inner">
                                        <div class="col-md-6">
                                            <h5>Question 17</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Answer 17</h5>
                                            <div class="key-fetch-txt-box"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-detail">
                                    <h3>Terms and Condition</h3>

                                    <div class="tool-bar">
                                        <textarea name="term_cond" id="term_cond" cols="30" rows="10">
                                            
                                        </textarea>
                                    </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                        <div class="job-detail">
                            <h3>Contacts</h3>

                            <div class="tool-bar">
                                <textarea name="loc_job_contact" id="loc_job_contact" cols="30" rows="10">
                                    
                                </textarea>
                            </div>
                        </div>
                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>

                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Assigned Staff</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="client_manager" id="client_manager">
                                                  <option value="" disabled="" selected="">Client Manager</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="recruitment_consultant" id="recruitment_consultant">
                                                  <option value="" disabled="" selected="">Recruitment Consultant</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                                              <select class="form-control" name="data_administrator" id="data_administrator">
                                                  <option value="" disabled="" selected="">Data Administrator</option>
                                              </select>
                                              <i class="fas fa-sort-down"></i>
                                              @if($errors->has('senority'))
                                              <span class="help-block" role="alert">{{ $errors->first('senority')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper')
                                                  }}</span>
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
                          <!-- <div class="box-bg-shadow">
                              <div class="box-inner">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group {{ $errors->has('cv_document') ? 'has-error' : '' }}">
                                              <div class="upload-add-candi">
                                                  <input type="file" name="cv_document" class="form-control" required>
  
                                                  <span class="upload-add-candi-txt">
                                                      <p>Drop files here to upload</p>
                                                  </span>
                                                  <div class="upload-icon">
                                                      <i class="fas fa-arrow-up"></i>
                                                      <p>Upload</p>
                                                  </div>
                                              </div>
  
                                              @if($errors->has('cv_document'))
                                              <span class="help-block" role="alert">{{ $errors->first('cv_document')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.cv_document_helper') }}</span>
  
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div
                                              class="form-group {{ $errors->has('registration_form_document') ? 'has-error' : '' }}">
                                              <div class="upload-add-candi">
                                                  <input type="file" name="registration_form_document" class="form-control"
                                                      required>
                                                  <span class="upload-add-candi-txt">
                                                      <p>Drop files here to upload</p>
                                                  </span>
                                                  <div class="upload-icon">
                                                      <i class="fas fa-arrow-up"></i>
                                                      <p>Upload</p>
                                                  </div>
                                              </div>
                                              @if($errors->has('registration_form_document'))
                                              <span class="help-block" role="alert">{{
                                                  $errors->first('registration_form_document') }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.registration_form_document_helper')
                                                  }}</span>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group {{ $errors->has('privacy_concerns') ? 'has-error' : '' }}">
                                              <div class="upload-add-candi">
                                                  <input type="file" name="privacy_concerns" class="form-control" required>
                                                  <span class="upload-add-candi-txt">
                                                      <p>Drop files here to upload</p>
                                                  </span>
                                                  <div class="upload-icon">
                                                      <i class="fas fa-arrow-up"></i>
                                                      <p>Upload</p>
                                                  </div>
                                              </div>
                                              @if($errors->has('privacy_concerns'))
                                              <span class="help-block" role="alert">{{ $errors->first('privacy_concerns')
                                                  }}</span>
                                              @endif
                                              <span class="help-block">{{
                                                  trans('cruds.candidate.fields.privacy_concerns_helper') }}</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="forms-colored-div">
                                  <div class="blue"></div>
                                  <div class="purple"></div>
                                  <div class="pink"></div>
                              </div>
                          </div> -->
                          <div class="row">
                              <div class="col-md-12 submit_btn">
                                  <div class="form-group">
                                      <button class="btn btn-danger" type="submit">
                                          {{ trans('POST') }}
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
  
          </div>
      </div>
      <!-- add Job end here -->
</div>
@endsection