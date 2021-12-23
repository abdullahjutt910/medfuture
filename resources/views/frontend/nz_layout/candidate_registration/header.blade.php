<header>
    <section class="sec-topbar doctor-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-6 col-sm-6 contact-info">
                    <ul>
                        <li><a href="mailto:helpdesk@medfuture.com.au">
                                <p>helpdesk@medfuture.com.au</p>
                            </a></li>
                        <li><a href="tel:1300633388">
                                <p>1300 633 388(International)</p>
                            </a></li>
                        <li><a href="tel:1300633388">
                                <p>1300 633 388(local)</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 country-icon">
                    <ul>
                        <li><a href="{{route('front.australia')}}">
                                <p>AUS</p>
                            </a>
                        </li>
                        <li><a href="{{route('front.newzeeland')}}">
                                <p>NZ</p>
                            </a>
                        </li>
                        <li><a href="{{route('front.uk')}}">
                                <p>UK</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar doctor-navbar navbar-expand-lg navbar-light bg-light">
        <div class="container padd-0">
            <a class="navbar-brand" href="{{route('front.home')}}"><img src="frontend/img/logo.png" alt=""></a>

            <div class="register-btn register-inner-tab-1">
                <div class="register-inner-doc">
                    <a href="{{route('login')}}">Login</a>
                    <a href="{{route('aus.candidate.registration')}}">Register</a>
                    <span class="down-arrow"><i class="arrow down"></i></span>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-inner" id="navbarScroll">
                <ul class="navbar-nav navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                        <!-- <div class="home-dropdown-list"> -->
                        <ul class="dropdown-list">
                            <li>
                                <a href="{{route('front.australia')}}">Australia</a>
                            </li>
                            <li>
                                <a href="{{route('front.newzeeland')}}">New Zealand</a>
                            </li>
                            <li>
                                <a href="{{route('front.uk')}}">United Kingdom</a>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </li>
                 

                    <li class="nav-item">
                        <a class="nav-link" href="AUS-Medfuture-job-page-perm.html">Jobs</a>
                        <div class="jobs-list">
                            <ul class="jobs-list-dropdown">
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">NSW</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in Central & Eastern Sydney</a> </li>
                                            <li><a href="#">Jobs in Western Sydney</a> </li>
                                            <li><a href="#">Jobs in Central Coast & Hunter New England</a> </li>
                                            <li><a href="#">Jobs in North Sydney</a> </li>
                                            <li><a href="#">Jobs in North Coast</a> </li>
                                            <li><a href="#">Jobs in South Western Sydney</a> </li>
                                            <li><a href="#">Jobs in Nepean Blue Mountains</a> </li>
                                            <li><a href="#">Jobs in South Eastern NSW</a> </li>
                                            <li><a href="#">Jobs in Murrumbidgee</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="AUS-Location-Page.html">QLD</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in Brisbane South</a> </li>
                                            <li><a href="#">Jobs in Brisbane North</a> </li>
                                            <li><a href="#">Jobs in Gold Coast</a> </li>
                                            <li><a href="#">Jobs in Sunshine Coast & Wide bay, Central Queensland</a>
                                            </li>
                                            <li><a href="#">Jobs in Northern Queensland</a> </li>
                                            <li><a href="#">Jobs in Darlings Down & Moreton</a> </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">VIC</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in South East Melbourne</a> </li>
                                            <li><a href="#">Jobs in Eastern Melbourne</a> </li>
                                            <li><a href="#">Jobs in North West Melbourne</a> </li>
                                            <li><a href="#">Jobs in Western Victoria</a> </li>
                                            <li><a href="#">Jobs in Murray</a> </li>
                                            <li><a href="#">Jobs in Gippsland</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">WA</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in North Perth</a> </li>
                                            <li><a href="#">Jobs in South Perth</a> </li>
                                            <li><a href="#">Jobs in Country WA</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">ACT</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in South East Melbourne</a> </li>
                                            <li><a href="#">Jobs in Eastern Melbourne</a> </li>
                                            <li><a href="#">Jobs in North West Melbourne</a> </li>
                                            <li><a href="#">Jobs in Western Victoria</a> </li>
                                            <li><a href="#">Jobs in Murray</a> </li>
                                            <li><a href="#">Jobs in Gippsland</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">TAS</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in South East Melbourne</a> </li>
                                            <li><a href="#">Jobs in Eastern Melbourne</a> </li>
                                            <li><a href="#">Jobs in North West Melbourne</a> </li>
                                            <li><a href="#">Jobs in Western Victoria</a> </li>
                                            <li><a href="#">Jobs in Murray</a> </li>
                                            <li><a href="#">Jobs in Gippsland</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">SA</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in South East Melbourne</a> </li>
                                            <li><a href="#">Jobs in Eastern Melbourne</a> </li>
                                            <li><a href="#">Jobs in North West Melbourne</a> </li>
                                            <li><a href="#">Jobs in Western Victoria</a> </li>
                                            <li><a href="#">Jobs in Murray</a> </li>
                                            <li><a href="#">Jobs in Gippsland</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first">
                                    <a href="#">NT</a>
                                    <div class="list-nsw">
                                        <ul class="jobs-dropdown-dtil-1">
                                            <li><a href="#">Jobs in South East Melbourne</a> </li>
                                            <li><a href="#">Jobs in Eastern Melbourne</a> </li>
                                            <li><a href="#">Jobs in North West Melbourne</a> </li>
                                            <li><a href="#">Jobs in Western Victoria</a> </li>
                                            <li><a href="#">Jobs in Murray</a> </li>
                                            <li><a href="#">Jobs in Gippsland</a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="jobs-list-dropdown-list-first search-btn">
                                    <span class="search-btn-icon"><i class="fas fa-search"></i></span>
                                    <input type="text" placeholder="Search Jobs">

                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Candidates</a>
                        <div class="jobs-list candidat-list">
                            <ul class="nav nav-pills mb-3 jobs-list-dropdown candidate-list" id="pills-tab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-permanent-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-permanent" type="button" role="tab"
                                        aria-controls="pills-permanent" aria-selected="true">Permanent Jobs</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-locum-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-locum" type="button" role="tab"
                                        aria-controls="pills-locum" aria-selected="false">Locum or Temp
                                        Jobs</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-international-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-international" type="button" role="tab"
                                        aria-controls="pills-international" aria-selected="false">International
                                        Jobs</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-permanent" role="tabpanel"
                                    aria-labelledby="pills-permanent-tab">
                                    <ul class="jobs-dropdown-dtil">
                                        <li><a href="AUS-Doctor-Medfuture-Overseas_AU_1.html">Doctors or General
                                                Practitioners East of England</a> </li>
                                        <li><a href="AUS-Nurses-and-Midwives-1.html">Nurses I Care Workers I Midwife
                                            </a> </li>
                                        <li><a href="AUS-Medfuture-AHP_AU_1.html">Allied Health Professional </a>
                                        </li>
                                        <li><a href="AUS-Medfuture-Healthcare-Executives_au1.html">Healthcare
                                                Executives </a> </li>
                                        <li><a href="AUS-Medfuture-Candidate-Registration.html">Create an Account
                                            </a> </li>
                                        <li class="refer-reward" path="v-pills-refer"><a href="AUS-Doctor-Medfuture-Overseas_AU_2.html">Refer & Earn Reward </a> </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-locum" role="tabpanel"
                                    aria-labelledby="pills-locum-tab">
                                    <ul class="jobs-dropdown-dtil">
                                        <li><a href="AUS-Doctor-Medfuture-Overseas_AU_1.html">Doctors or General
                                                Practitioners East of England</a> </li>
                                        <li><a href="AUS-Nurses-and-Midwives-1.html">Nurses I Care Workers I Midwife
                                            </a> </li>
                                        <li><a href="AUS-Medfuture-AHP_AU_1.html">Allied Health Professional </a>
                                        </li>
                                        <li><a href="AUS-Medfuture-Healthcare-Executives_au1.html">Healthcare
                                                Executives </a> </li>
                                        <li><a href="AUS-Medfuture-Candidate-Registration.html">Create an Account
                                            </a> </li>
                                        <li  class="refer-reward" path="v-pills-refer"><a href="AUS-Doctor-Medfuture-Overseas_AU_2.html">Refer & Earn Reward
                                            </a> </li>

                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-international" role="tabpanel"
                                    aria-labelledby="pills-international-tab">
                                    <ul class="jobs-dropdown-dtil">
                                        <li><a href="NZ-Doctor-Medfuture-Overseas_AU_1.html">Doctors or General Practitioners - New Zealand</a> </li>
                                        <li><a href="NZ-Nurses-and-Midwives-1.html">Nurses I Care Workers I Midwife - New Zealand</a> </li>
                                        <li><a href="NZ-Medfuture-AHP_AU_1.html">Allied Health Professional - New Zealand</a></li>
                                        <li><a href="NZ-Medfuture-Healthcare-Executives_au1.html">Healthcare Executives - New Zealand</a> </li>
                                        <li><a href="UK-Doctor-Medfuture-Overseas_AU_1.html">Doctors or General Practitioners Jobs - United Kingdom</a> </li>
                                        <li><a href="UK-Nurses-and-Midwives-1.html">Nurses I Care Workers I Midwife – United Kingdom</a> </li>
                                        <li><a href="UK-Medfuture-AHP_AU_1.html">Allied Health Professional – United Kingdom</a> </li>
                                        <li><a href="UK-Medfuture-Healthcare-Executives_au1.html">Healthcare Executives – United Kingdom</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employer</a>
                        <ul class="dropdown-list">
                            <li>
                                <a href="AUS-Doctor-PermanentAu.html">Permanent Staffing Solution</a>
                            </li>
                            <li>
                                <a href="AUS-Doctor-LocumAu.html">Locum Staffing Solution</a>
                            </li>
                            <li>
                                <a href="AUS-Medfuture-Employer-dropdown-create-your-account.html">Create An
                                    Account</a>
                            </li>
                            <li>
                                <a href="AUS-Medfuture-Employer-dropdown-submit-your-vacancy.html">Submit Your
                                    Vacancy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="register-btn register-inner-tab-2">
                <div class="register-inner-doc">
                    <a href="{{route('login')}}">Login</a>
                    <a href="{{route('nz_candidate_registration')}}">Register</a>
                    <span class="down-arrow"><i class="arrow down"></i></span>
                </div>
            </div>
        </div>
    </nav>
</header>