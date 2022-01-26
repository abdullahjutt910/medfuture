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
                    <div class="col-md-3">
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
                    <div class="col-md-6">
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
                        <div class="job-detail">
                            <h3>JOB DESCRIPTION</h3>

                            <div class="tool-bar">
                                <textarea name="content" id="content" cols="30" rows="10">
                                    This is my textarea to be replaced with CKEditor 4.
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection