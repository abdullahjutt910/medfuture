@extends('frontend.uk_layout.master')
@section('content')
<div class="sec-doctor-banner">
    <div class="container" style="padding: 0;">
        <div class="bannerData">
            <h1>Empowering Healthcare Professionals</h1>
            <a href="UK-Medfuture-Candidate-Registration.html"><button><span>Rigester with us</span><img
                        src="frontend/img/cloud.png" alt=""></button></a>
        </div>
    </div>
</div>
<div class="findJobs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 job-search nz-uk">
                <h3>Find your next job</h3>
                <div class="job-form">
                    <form class="row g-3 job-form-inner">
                        <div class="col-2">
                            <span class="select-arrow"></span>
                            <select class="form-select form-select-lg mb-3" name="permanent"  aria-label=".form-select-lg example">
                                <option selected="">Permanent</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>

                            </select>
                        </div>
                        <div class="col-2">
                            <span class="select-arrow"></span>
                            <select class="form-select form-select-lg mb-3" name="professions" aria-label=".form-select-lg example">
                                <option selected="">Professions</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <span class="select-arrow"></span>
                            <select class="form-select form-select-lg mb-3"  name="location" aria-label=".form-select-lg example">
                                <option selected="">Location</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>

                            </select>
                        </div>
                        <div class="col-2">
                            <span class="select-arrow"></span>
                            <select class="form-select form-select-lg mb-3" name="speciality" aria-label=".form-select-lg example">
                                <option selected="">Speciality</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary mb-3">Search</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
    <div class="container" style="padding: 0; ">
        <div class="borderGradient">
            <div class="gradientColor" style="background: #0e4ead;"></div>
            <div class="gradientColor" style="background: #650e82;"></div>
            <div class="gradientColor" style="background: #f42793;"></div>
        </div>
    </div>
</div>

<section class="sec-job-seaker">
    <div class="container">
        <div class="row" style="justify-content: space-between;">
            <h1>Jobseekers</h1>
            <p>Are you a medical or healthcare professional who is looking for a permanent or locum position through
                a trustworthy, reliable and flexible recruiter? Then search no further because you’ve come to the
                right place. Here at Medfuture, we work with a wide variety of medical & healthcare employers and
                service providers across all states and territories in Australia, and as a result, we always have
                plenty of attractive and lucrative job opportunities for all types of professionals – be it doctors,
                nurses, allied health staff or even healthcare executives.</p>
            <div class="col-md-3 job-seaker-col">
                <a href="UK-Doctor-Medfuture-Overseas_AU_1.html">
                    <div class="job-seaker-inner ">
                        <div class="box-shadow">
                            <img src="frontend/img/job4.png" alt="" class="img-fluid">
                            <div class="heading-seaker">
                                <h4>Doctors</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 job-seaker-col">
                <div class="job-seaker-inner">
                    <a href="UK-Nurses-and-Midwives-1.html">
                        <div class="box-shadow">
                            <img src="frontend/img/job2.png" alt="" class="img-fluid">
                            <div class="heading-seaker">
                                <h4>Nurses and Care </h4>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-3 job-seaker-col">
                <div class="job-seaker-inner">
                    <a href="UK-Medfuture-AHP_AU_1.html">
                        <div class="box-shadow">
                            <img src="frontend/img/job3.png" alt="" class="img-fluid">
                            <div class="heading-seaker">
                                <h4>Allied Health</h4>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-3 job-seaker-col">
                <div class="job-seaker-inner">
                    <a href="UK-Medfuture-Healthcare-Executives_au1.html">
                        <div class="box-shadow">
                            <img src="frontend/img/job4.png" alt="" class="img-fluid">
                            <div class="heading-seaker">
                                <h4>Healthcare Executives</h4>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="register-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12  register-section-left">
                <div class="register-section-img">
                    <img class="img-fluid" src="frontend/img/Rectangle 794.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 register-section-right nz-uk">
                <div class="registerSectionInner">
                    <a href="UK-Medfuture-Candidate-Registration.html">
                        <div class="register-detail-inner">
                            <div><img src="frontend/img/login.png" class="img-fluid"  alt=""></div>
                            <div class="register-heading">
                                <h3>Register with us</h3>
                                <p>Let us help you find your next clinical role</p>
                            </div>
                            <div><img class="arrowImg img-fluid"  src="frontend/img/right-arrow (1).png" alt=""></div>
                        </div>
                    </a>
                    <a href="UK-Medfuture-job-page-perm.html">
        
                        <div  class="register-detail-inner">
                            <div><img src="frontend/img/search-bar.png" alt=""></div>
                            <div class="register-heading">
                                <h3>Browse Current Jobs</h3>
                                <p>Let us help you find your next clinical role</p>
                            </div>
                            <div><img class="arrowImg img-fluid" src="frontend/img/right-arrow (1).png" alt=""></div>
                        </div>
                    </a> <a href="UK-Doctor-Medfuture-Overseas_AU_2.html">
                        <div  class="register-detail-inner">
                            <div><img src="frontend/img/network.png" alt=""></div>
                            <div class="register-heading">
                                <h3>Refer and Earn</h3>
                                <p>Do you know any other clinicians? Refer a colleague <br>
                                    and receive a bonus for each successful registration!</p>
                            </div>
                            <div><img class="arrowImg img-fluid" src="frontend/img/right-arrow (1).png" alt=""></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="abm">
    <div class="container" style="padding: 0; margin-top: 150px;">
        <div class="row" style="justify-content: space-between;">

            <div class="col-md-4 abmInner">
                <div class="">
                    <div class="">
                        <img src="frontend/img/Rectangle 841 copy 5.png" alt="" class="img-fluid">
                        <div class="abmInner2">
                            <h4>About Us</h4>
                            <p>Lorem ipsum dolor sit amet, conctetur adipiscing elit. Cras congue lobortis
                                congue.Cras facilisis, metus vitae
                                imperdiet bibendum, erat leo aliquam odio, quis dictum justo nisi fermentum metus.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 abmInner">
                <div class="">
                    <div class="">
                        <img src="frontend/img/Rectangle 841 copy 4.png" alt="" class="img-fluid">
                        <div class="abmInner2">
                            <h4>Blog & News</h4>
                            <p>Lorem ipsum dolor sit amet, conctetur adipiscing elit. Cras congue lobortis
                                congue.Cras facilisis, metus vitae
                                imperdiet bibendum, erat leo aliquam odio, quis dictum justo nisi fermentum metus.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 abmInner">
                <div class="">
                    <div class="">
                        <img src="frontend/img/Rectangle 841 copy 3.png" alt="" class="img-fluid">
                        <div class="abmInner2">
                            <h4>Medical Professional</h4>
                            <p>Lorem ipsum dolor sit amet, conctetur adipiscing elit. Cras congue lobortis
                                congue.Cras facilisis, metus vitae
                                imperdiet bibendum, erat leo aliquam odio, quis dictum justo nisi fermentum metus.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="sec-testi">
    <!-- <div class="overlay"></div> -->
    <div class="container">
        <div class="testi-slider">
            <div>
                <div class="row justify-content-center">

                    <div class="col-md-7 testi-inner">
                        <div class="testi-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum eros ante, et
                                posuere
                                orci sollicitudin in. In in dui dignissim, imperdiet elit ut, convallis dui.
                                Suspendisse
                                potenti. Aenean eleifend congue libero. Nulla facilisi. </p>
                            <h4>- Dr Sara FRACGP / QLD</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-7 testi-inner">
                        <div class="testi-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum eros ante, et
                                posuere
                                orci sollicitudin in. In in dui dignissim, imperdiet elit ut, convallis dui.
                                Suspendisse
                                potenti. Aenean eleifend congue libero. Nulla facilisi. </p>
                            <h4>- Dr Sara FRACGP / QLD</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-7 testi-inner">
                        <div class="testi-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum eros ante, et
                                posuere
                                orci sollicitudin in. In in dui dignissim, imperdiet elit ut, convallis dui.
                                Suspendisse
                                potenti. Aenean eleifend congue libero. Nulla facilisi. </p>
                            <h4>- Dr Sara FRACGP / QLD</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection