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
                                    <img src=" {{asset('img/dashboard/Add-User-Male.png')}}"
                                    class="img-fluid" alt="profile-img">
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
                                    <img src=" {{asset('img/dashboard/CV-receive.png')}}"
                                    class="img-fluid" alt="profile-img">
                                  </div>
                                  <div class="col-md-10">
                                    <div class="card-body">
                                      <h5 class="card-title">Client Name</h5>
                                      <p class="card-text"><small class="text-muted">Act For Kids - Western Sydney</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0 job-client-details-inner">
                                  <div class="col-md-2">
                                    <img src=" {{asset('img/dashboard/New-Job.png')}}"
                                    class="img-fluid" alt="profile-img">
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
                                    <img src=" {{asset('img/dashboard/Email-Send.png')}}"
                                    class="img-fluid" alt="profile-img">
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
                                    <img src=" {{asset('img/dashboard/Security-User-Male.png')}}"
                                    class="img-fluid" alt="profile-img">
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
                                    <img src=" {{asset('img/dashboard/Phone.png')}}"
                                    class="img-fluid" alt="profile-img">
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
                                    <img src=" {{asset('img/dashboard/Secured-Letter.png')}}"
                                    class="img-fluid" alt="profile-img">
                                  </div>
                                  <div class="col-md-10">
                                    <div class="card-body">
                                      <h5 class="card-title">Email</h5>
                                      <p class="card-text"><small class="text-muted">jenny.shutter@gmail.com</small></p>
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
        </div>
    </div>
</div>

@endsection