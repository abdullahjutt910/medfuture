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
                        @include('admin.candidates.partials.profile')
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
                                            <div class=" referrals_dollar">
                                                <p style="display:none;">20</p>
                                                <span>A$</span>
                                            </div>
                                            <!-- <div class="award">
                                                <div class="award-circle">
                                                    <span class="dollar">
                                                        <h2>A$20</h2>
                                                    </span>
                                                </div>
                                            </div> -->
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
                                                        <p style="display:none;">{{$candidate->progbar->contacted ?? ''}}</p>

                                                        <div class="counter-txt">
                                                            <p>Contacted</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="percent Int-scr">
                                                        <p style="display:none;">{{$candidate->progbar->initial_screening ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Initial Screening</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Short-Listed">
                                                        <p style="display:none;">{{$candidate->progbar->short_listed ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Short Listed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Shelved">
                                                        <p style="display:none;">{{$candidate->progbar->shelved ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Shelved</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Job-Match">
                                                        <p style="display:none;">{{$candidate->progbar->job_matching ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Job Matching</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Submissions">
                                                        <p style="display:none;">{{$candidate->progbar->submissions ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Submissions</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Declined">
                                                        <p style="display:none;">{{$candidate->progbar->declined ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Declined</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Interviews">
                                                        <p style="display:none;">{{$candidate->progbar->interviews ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Interviews</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Due-check">
                                                        <p style="display:none;">{{$candidate->progbar->due_check ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Due Diligence Check</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Offered">
                                                        <p style="display:none;">{{$candidate->progbar->offered ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Offered</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Rejected-accpt">
                                                        <p style="display:none;">{{$candidate->progbar->rejected ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Rejected / Accepted</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Placed">
                                                        <p style="display:none;">{{$candidate->progbar->placed ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Placed</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row m-20">
                                                <div class="col-md-4">
                                                    <div class="percent Archived">
                                                        <p style="display:none;">{{$candidate->progbar->archived ?? ''}}</p>
                                                        <div class="counter-txt">
                                                            <p>Archived</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="percent Testimony">
                                                        <p style="display:none;">{{$candidate->progbar->testimony ?? ''}}</p>
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
                                            <form action="{{ url('update_progress')}}/{{$candidate->id}}" method="POST" class="row">
                                                @csrf
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="contacted">Contacted</label>
                                                    <input class="form-control" type="number" name="contacted"
                                                        id="contacted" value="{{old('contacted',$candidate->progbar->contacted ?? '')}}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="initial_screening">Initial Screening</label>
                                                    <input class="form-control" type="number" name="initial_screening"
                                                        id="initial_screening" value="{{old('initial_screening',$candidate->progbar->initial_screening ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="short_listed">Short Listed</label>
                                                    <input class="form-control" type="number" name="short_listed"
                                                        id="short_listed" value="{{old('short_listed',$candidate->progbar->short_listed ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="shelved">Shelved</label>
                                                    <input class="form-control" type="number" name="shelved" id="shelved"
                                                        value="{{old('shelved',$candidate->progbar->shelved ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="job_matching">Job Matching</label>
                                                    <input class="form-control" type="number" name="job_matching"
                                                        id="job_matching" value="{{old('job_matching',$candidate->progbar->job_matching ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="submissions">Submissions</label>
                                                    <input class="form-control" type="number" name="submissions"
                                                        id="submissions" value="{{old('submissions',$candidate->progbar->submissions ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="declined">Declined</label>
                                                    <input class="form-control" type="number" name="declined"
                                                        id="declined" value="{{old('declined',$candidate->progbar->declined ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="interviews">Interviews</label>
                                                    <input class="form-control" type="number" name="interviews"
                                                        id="interviews" value="{{old('interviews',$candidate->progbar->interviews ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="due_check">Due Diligence Check</label>
                                                    <input class="form-control" type="number" name="due_check"
                                                        id="due_check" value="{{old('due_check',$candidate->progbar->due_check ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="offered">Offered</label>
                                                    <input class="form-control" type="number" name="offered" id="offered"
                                                        value="{{old('offered',$candidate->progbar->offered ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="rejected">Rejected / Accepted</label>
                                                    <input class="form-control" type="number" name="rejected"
                                                        id="rejected" value="{{old('rejected',$candidate->progbar->rejected ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="placed">Placed</label>
                                                    <input class="form-control" type="number" name="placed" id="placed"
                                                        value="{{old('placed',$candidate->progbar->placed ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="archived">Archived</label>
                                                    <input class="form-control" type="number" name="archived"
                                                        id="Archived" value="{{old('archived',$candidate->progbar->archived ?? '') }}">
                                                </div>
                                                <div class="col-md-4 profile-eidt-form-inner">
                                                    <label for="testimony">Testimony</label>
                                                    <input class="form-control" type="number" name="testimony"
                                                        id="Testimony" value="{{old('testimony',$candidate->progbar->testimony ?? '') }}">
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
                                                <form action="#" method="" class="assign-form-inner">
                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <label for="Candidate_Manager">Candidate Manager</label>
                                                            <select class="form-select form-select-lg mb-3"disabled name="candidateManager" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">{{$candidate->candidate_manager?? ''}}</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Recruitement">Recruitement Consultant</label>
                                                            <select class="form-select form-select-lg mb-3"disabled name="recruitementConsultant" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">{{$candidate->recruitement ?? ''}} </option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="Administrator">Data Administrator</label>
                                                            <select class="form-select form-select-lg mb-3"disabled name="dataAdministrator" aria-label=".form-select-lg example">
                                                                <option value="" disabled="" selected="">{{$candidate->administrator ?? ''}}</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="edit-brn">
                                                    <button class="btn assign-edit-btn"><img
                                                        src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                        alt="Edit-img"> Edit
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="assign-eidt-form">
                                                <form action="{{ url("update2", [$candidate->id]) }}" method="POST" class="assign-form-edit assign-form-inner">
                                                  @csrf
                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <label for="candidate_manager">Candidate Manager</label>
                                                            <input type="text" name="candidate_manager" value="{{ old('candidate_manager', $candidate->candidate_manager) }}" class="form-control">

                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="recruitement">Recruitement Consultant</label>
                                                            <input type="text" name="recruitement" value="{{ old('recruitement', $candidate->recruitement) }}" class="form-control">


                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                            <label for="administrator">Data Administrator</label>
                                                            <input type="text" name="administrator" value="{{ old('administrator', $candidate->administrator) }}" class="form-control">


                                                        </div>
                                                        <div class="col-md-12 profile-eidt-form-btn">
                                                            <button class="btn back-btn">Back</button>
                                                            <input type="submit" name="submit" class="btn" placeholder="Submit">
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
                               @include('admin.candidates.partials.refree')

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

                                            <p class="summary-id">ID: {{$candidate->id}}</p>
                                            <div class="job-summary-eidt">
                                            <p>{{$candidate->interview->job_summary ?? ''}}</p>
                                            <div class="summary-bottom">
                                                <p>Last Updated Date : {{$candidate->interview->updated_at ?? ''}}</p>
                                                <div class="edit-brn">
                                                    <button class="btn job-summary-eidt-btn"><img
                                                            src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                                            alt="Edit-img"> Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-summary-d-none">
                                            <form action="{{url('update_interviewsummary')}}/{{$candidate->id}}" class="row" method="POST">
                                                @csrf
                                                {{-- <input type="hidden" name="id" value="{{$candidate->id}}"> --}}
                                                <div class="col-md-12 profile-eidt-form-inner">
                                                    <label for="Job Summary">Job Summary Note</label>
                                                    <textarea name="job_summary" id="Job_Summary" cols="76" rows="7" >{{old('job_summary',$candidate->interview->job_summary)?? ''}}</textarea>
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
                                            @include('admin.candidates.partials.interview')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @include('admin.candidates.partials.testimonial')
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
                            <th class="th-sm">Title</th>
                            <th class="th-sm">Clients</th>
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
                            alt="Edit-img"> Edit
                        </button>
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
                                        <option value="Short Listed">Short Listed</option>
                                        <option value="Shelved">Shelved</option>
                                        <option value="Job Matching">Job Matching</option>
                                        <option value="Submissions">Submissions</option>
                                        <!--  <option value="Declined">Declined</option>
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
                <table id="dtActivity" class="table table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Date </th>
                            <th class="th-sm">Type_1 </th>
                            <th class="th-sm">Type_2</th>
                            <th class="th-sm submit-table-head">Notes </th>
                            <th class="th-sm activity-action">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!is_null($candidate->activebar))
                            @foreach ($candidate->activebar as $item)
                            <tr class="activity-data">
                                {{-- {{dd($candidate)}} --}}
                                <td>{{ $item->updated_at ?? '' }}</td>
                                <td>{{ $item->activity_type ?? '' }}</td>
                                <td>{{ $item->activity_type_2 ?? '' }}</td>
                                <td>{{ $item->activity_note ?? '' }}</td>
                                <td>
                                    <div class="profile-buttons action-buttons">
                                        <a href="{{ url('update_activity')}}/{{$item->id}}">
                                        <img src="http://127.0.0.1:8000/img/dashboard/Edit.png" class="img-fluid" alt="Eye">
                                        </a>
                                        <a href="{{ url('delete_activity')}}/{{$item->id}}">
                                        <img src="http://127.0.0.1:8000/img/dashboard/Delete-Trash.png" class="img-fluid" alt="Delete-Trash">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endif

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
                        <button class="btn activity-edit-btn"><img src="{{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                                alt="Edit-img"> Edit</button>
                    </div>
                    <div class="popup-activity">
                        <form action="{{ url('insert_activity')}}/{{$candidate->id}}" method="POST" class="activity-form row">
                            @csrf
                            <div class="col-md-8 profile-eidt-form-inner form-group">
                                    <select name="activity_type" id="activity_type" class="form-control" value="{{ old('activity_type',$candidate->activebar ? 'activity_type' : '') }}">
                                        <option value="Other" selected diable> Other </option>
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
                                    <select name="activity_type_2" id="placement_term" class="form-control" value="{{old('activity_type_2',$candidate->activebar ? 'activity_type_2' : '')}}">
                                        <option value="General" selected diable > General </option>
                                        <option value="Contacted">Contacted</option>
                                        <option value="Initial Screening">Initial Screening</option>
                                        <option value="Shelved">Shelved</option>
                                        <option value="Job Matching">Job Matching</option>
                                        <option value="Submissions">Submissions</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Interviews">Interviews</option>
                                    </select>
                                    <i class="fas fa-sort-down"></i>
                            </div>
                            <div class="col-md-8 profile-eidt-form-inner">
                            <textarea name="activity_note" id="activity-textarea" cols="30" rows="5" placeholder="Your Notes" value="{{old('activity_note',$candidate->activebar ? 'activity_note' : '')}}"></textarea>
                            </div>
                                <div class=" col-md-12 activity-form-back-btn">
                                    <div class=" profile-eidt-form-btn">
                                        <button type="reset" value="reset" class="btn back-btn cancel-btn">Cancel</button>
                                        <input name="submit" type="submit" class="btn" placeholder="Submit">
                                    </div>
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
