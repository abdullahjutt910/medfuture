@extends('frontend.home_layout.master')
@section('content')

<div class="banner-slider">
    <section class="sec-banner">
        <!-- <div class="overlay"></div> -->
        <div class="container">

            <div class="row">
                <div class="col-md-12 banner-inner">
                    <h1>We Understand Healthcare</h1>
                    <h3>Serving clients accross</h3>
                    <a href="#"><button type="button" class="btn btn-prmry">Explore</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-banner">
        <!-- <div class="overlay"></div> -->
        <div class="container">

            <div class="row">
                <div class="col-md-12 banner-inner">
                    <h1>We Understand Healthcare</h1>
                    <h3>Serving clients accross</h3>
                    <a href="#"><button type="button" class="btn btn-prmry">Explore</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-banner">
        <!-- <div class="overlay"></div> -->
        <div class="container">

            <div class="row">
                <div class="col-md-12 banner-inner">
                    <h1>We Understand Healthcare</h1>
                    <h3>Serving clients accross</h3>
                    <a href="#"><button type="button" class="btn btn-prmry">Explore</button></a>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="sec-country">
    <div class="container">
        <div class="row country-inner">
            <div></div>
            <div class="col-lg-1 col-md-1">
            </div>
            <div class="col-lg-10 col-md-12">
                <div class="row tab-row-direc">
                    <div class="col-lg-4 col-md-12">
                        <a href="{{route('front.australia')}}">
                            <div class="country-img">
                                <img src="frontend/img/country-circle-f1.png" alt="" class="img-fluid">
                                <h4 class="txt-clor">Australia</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="{{route('front.newzeeland')}}">
                            <div class="country-img">
                                <img src="frontend/img/country-circle-f2.png" alt="" class="img-fluid">
                                <h4 class="txt-clor2">New Zealand</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="{{route('front.uk')}}">
                            <div class="country-img">
                                <img src="frontend/img/country-circle-f3.png" alt="" class="img-fluid">
                                <h4 class="txt-clor3">United Kingdom</h4>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-1 col-md-1">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 job-search">
                <h3>Find your next job</h3>
                <div class="job-form">
                    <form class="row g-3 job-form-inner">
                        <div class="col-4">
                            <span class="select-arrow"></span>
                            <select class="form-select form-select-lg mb-3" name="job_title" aria-label=".form-select-lg example">
                                <option selected>Job title or keywords</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>

                            </select>
                        </div>
                        <div class="col-4">
                            <span class="select-arrow"></span>
                            <select class="form-select form-select-lg mb-3" name="country"  aria-label=".form-select-lg example">
                                <option selected>Country</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary mb-3">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="sec-blog">
    <div class="container">
        <div class="row tab-row-direc">
            <div class="col-lg-8  col-md-12 col-width-100">
                <span class="heading-botm">
                    <h1>News & Blogs</h1>
                </span>
                <div class="blog-left">
                    <ul>
                        <li>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 pad-top">
                                        <img src="frontend/img/news1.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">English Language Requirements for New Zealand
                                                Doctors </h5>
                                            <p class="card-text calander"><small class="text-muted">POSTED ON
                                                    07-07-2021</small></p>
                                            <p class="card-text">Doctors, Medical Staff and Allied Health
                                                Professionals in New Zealand must Pass the Academic Module of the
                                                International English Language Testing System (IELTS) by achieving
                                                above the minimum score... <a href="#">Read More</a> </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 pad-top">
                                        <img src="frontend/img/news2.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">English Language Requirements for New Zealand
                                                Doctors </h5>
                                            <p class="card-text calander"><small class="text-muted">POSTED ON
                                                    07-07-2021</small></p>
                                            <p class="card-text">Doctors, Medical Staff and Allied Health
                                                Professionals in New Zealand must Pass the Academic Module of the
                                                International English Language Testing System (IELTS) by achieving
                                                above the minimum score... <a href="#">Read More</a> </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 pad-top">
                                        <img src="frontend/img/news3.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title ">English Language Requirements for New Zealand
                                                Doctors </h5>
                                            <p class="card-text calander"><small class="text-muted">POSTED ON
                                                    07-07-2021</small></p>
                                            <p class="card-text">Doctors, Medical Staff and Allied Health
                                                Professionals in New Zealand must Pass the Academic Module of the
                                                International English Language Testing System (IELTS) by achieving
                                                above the minimum score... <a href="#">Read More</a> </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="Explore-btn">
                    <a href="#"> <button class="btn btn-prmry">Explore</button></a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 bolg-right">
                <span class="heading-botm">
                    <h1>Fast Track your Career</h1>
                </span>
                <p class="tab-txt-center">Are you a medical or healthcare professional who is looking for a
                    permanent or locum position
                    through a trustworthy, reliable and flexible recruiter? Then search no further because you’ve
                    come to the right place. Here at Medfuture, we work with a wide variety of medical & healthcare
                    employers and service providers across all states and territories in Australia, and as a result,
                    we always have plenty of attractive and lucrative job opportunities for all types of
                    professionals – be it doctors, nurses, allied health staff or even healthcare executives.</p>
                <div>
                    <ul>
                        <li>
                            <a href="AUS-Medfuture-Candidate-Registration.html">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-lg-2 col-md-4 col-sm-2 pad-top tab-regist-img-width">
                                            <img src="frontend/img/register-icon.png" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-lg-10 col-md-8 col-sm-10 tab-regist-width">
                                            <div class="card-body">
                                                <h5 class="card-title">Register with us</h5>

                                                <p class="card-text">Let us help you find your next clinical role
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="AUS-Medfuture-job-page-perm.html">
                                <div class="card mb-3">

                                    <div class="row g-0">
                                        <div class="col-lg-2 col-md-4 col-sm-2 pad-top">
                                            <img src="frontend/img/browse-icon.png" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-lg-10 col-md-8 col-sm-10">
                                            <div class="card-body">
                                                <h5 class="card-title">Browse current jobs</h5>

                                                <p class="card-text">Let us help you find your next clinical role
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li> <a href="AUS-Doctor-Medfuture-Overseas_AU_1.html">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-lg-2 col-md-4 col-sm-2 pad-top">
                                            <img src="frontend/img/refer-and-earn.png" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-lg-10 col-md-8 col-sm-10">
                                            <div class="card-body">
                                                <h5 class="card-title">Refer and Earn</h5>

                                                <p class="card-text">Do you know any other clinicians? Refera
                                                    colleague and receive a bonus for each
                                                    successful registration!</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-job-seaker">
    <div class="container">
        <div class="row">
            <h1><span class="heading-botm"></span>Job Seekers </h1>
            <div class="col-lg-3 col-md-6 job-seaker-col">   

                <div class="job-seaker-inner">
                        <div class="box-shadow">
                        <a href="AUS-Doctor-Medfuture-Overseas_AU_1.html">
                            <img src="frontend/img/job4.png" alt="" class="img-fluid">
                            <div class="heading-seaker">
                                <h4>Doctors</h4>
                            </div>
                        </a>
                        <div class="country-dropdown">
                            <a href="AUS-Doctor-Medfuture-Overseas_AU_1.html">
                                <h4>Australia</h4>
                            </a>
                            <a href="NZ-Doctor-Medfuture-Overseas_AU_1.html">
                                <h4>New Zealand</h4>
                            </a>
                            <a href="UK-Doctor-Medfuture-Overseas_AU_1.html">
                                <h4>United Kingdom</h4>
                            </a>
                        </div>
                        </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 job-seaker-col">
                <div class="job-seaker-inner">
                    <div class="box-shadow">

                    <a href="AUS-Nurses-and-Midwives-1.html">
                        <img src="frontend/img/job2.png" alt="" class="img-fluid">
                        <div class="heading-seaker">
                            <h4>Nurses and Care </h4>
                        </div>
                    </a>
                        <div class="country-dropdown">
                            <a href="AUS-Nurses-and-Midwives-1.html">
                                <h4>Australia</h4>
                            </a>
                            <a href="NZ-Nurses-and-Midwives-1.html">
                                <h4>New Zealand</h4>
                            </a>
                            <a href="UK-Nurses-and-Midwives-1.html">
                                <h4>United Kingdom</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 job-seaker-col">
                <div class="job-seaker-inner">
                    <div class="box-shadow">

                    <a href="AUS-Medfuture-AHP_AU_1.html">
                        <img src="frontend/img/job3.png" alt="" class="img-fluid">
                        <div class="heading-seaker">
                            <h4>Allied Health</h4>
                        </div>
                    </a>
                    
                    <div class="country-dropdown">
                        <a href="AUS-Medfuture-AHP_AU_1.html">
                            <h4>Australia</h4>
                        </a>
                        <a href="NZ-Medfuture-AHP_AU_1.html">
                            <h4>New Zealand</h4>
                        </a>
                        <a href="UK-Medfuture-AHP_AU_1.html">
                            <h4>United Kingdom</h4>
                        </a>
                    </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 job-seaker-col">
                <div class="job-seaker-inner">
                    <div class="box-shadow">
                    <a href="AUS-Medfuture-Healthcare-Executives_au1.html">
                        <img src="frontend/img/job4.png" alt="" class="img-fluid">
                        <div class="heading-seaker">
                            <h4>Healthcare Executives</h4>
                        </div>
                    </a>
                    
                    <div class="country-dropdown">
                        <a href="AUS-Medfuture-Healthcare-Executives_au1.html">
                            <h4>Australia</h4>
                        </a>
                        <a href="NZ-Medfuture-Healthcare-Executives_au1.html">
                            <h4>New Zealand</h4>
                        </a>
                        <a href="UK-Medfuture-Healthcare-Executives_au1.html">
                            <h4>United Kingdom</h4>
                        </a>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="sec-we-work">
    <div class="container">
        <div class="row">
            <h1><span class="heading-botm"></span>We work with.....</h1>
            <div class="col-md-12 we-word-inner">
                <ul>
                    <li> <img src="frontend/img/work1.png" alt="" class="img-fluid"></li>
                    <li> <img src="frontend/img/work2.png" alt="" class="img-fluid"></li>
                    <li> <img src="frontend/img/work3.png" alt="" class="img-fluid"></li>
                    <li> <img src="frontend/img/work4.png" alt="" class="img-fluid"></li>
                    <li> <img src="frontend/img/work2.png" alt="" class="img-fluid"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec-latest-job">
    <div class="container">
        <div class="row">
            <h1><span class="heading-botm"></span>Latest Jobs</h1>
            <div class="col-md-12 latest-job-btn">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active btn btn-prmry" id="pills-australia-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-australia" type="button" role="tab"
                            aria-controls="pills-australia" aria-selected="true">Australia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn btn-prmry" id="pills-newzeland-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-newzeland" type="button" role="tab"
                            aria-controls="pills-newzeland" aria-selected="false">New Zealand</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn btn-prmry" id="pills-uk-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-uk" type="button" role="tab" aria-controls="pills-uk"
                            aria-selected="false">United Kingdom</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-australia" role="tabpanel"
                    aria-labelledby="pills-australia-tab">
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="AUS-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="AUS-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="AUS-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="AUS-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="AUS-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-newzeland" role="tabpanel"
                    aria-labelledby="pills-newzeland-tab">
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="NZ-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="NZ-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="NZ-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="NZ-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="NZ-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-uk" role="tabpanel" aria-labelledby="pills-uk-tab">
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="UK-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="UK-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="UK-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="UK-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row latest-job-txtarea">
                        <div class="col-lg-1 col-md-11 col-sm-10 job-date">
                            <p>15</p>
                            <p>APR</p>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-10 general-inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-10 col-sm-8  general-txt">
                                    <h2>General Practitioner -Sunnybank-QLD</h2>
                                    <div class="general-btm">
                                        <ul>
                                            <li>
                                                <p>Sunnybank</p>
                                            </li>
                                            <li>
                                                <p>QLD</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-12">
                                    <div class="job-disc">
                                        <div class="general-btm">
                                            <ul class="general-btm-txt">
                                                <li>
                                                    <p>Permanent full-time position</p>
                                                </li>
                                                <li>
                                                    <p>Nego...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="general-btm">
                                            <ul>
                                                <li>
                                                    <p>Source: Medfuture </p>
                                                </li>
                                                <li>
                                                    <p>Job ID : GP5352</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="UK-Medfuture-Single-Permanent-Job-Page.html"
                            class="btn btn-prmry ">Detail</a>
                        </div>
                        
                        <div class="col-lg-1 col-md-1 col-sm-2 job-disc-right">
                            <p>QLD</p>
                            <img src="frontend/img/latest-job-logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Read-More-btn">
        <a href="#" class="btn btn-prmry read-more-btn">Read More</a>
        </div>
    </div>
</section>
@endsection