@extends('frontend.aus_layout.candidate_registration.master')
@section('content')
<main>
    <section class="sec-locum-banner">
     <div class="banner-text">
         Candidate
     </div>
    </section>
    <section class="candidate-registration">
     <div class="reg-container">
     <div class="registration-forms-row">
         <div class="forms-col">
             <div class="form-col-left">
                 <div class="tab-pane fade active show" id="v-pills-register" role="tabpanel" aria-labelledby="v-pills-register-tab">
                     <div class="registration-heading">
                         Registration
                     </div>
                     <div class=" regis-page">
                         <h3>Register as a Doctor with Medfuture to gain access to multiple advantages.</h3>
                         <ul>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Dedicated Consultant to work with your job requirements</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Personalised Job Alerts on a weekly or monthly basis</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Access to hundreds of locum and permanent positions </p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>A range of metropolitan and rural opportunities</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Easy onboarding process</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Career advancement assistance</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Guidance on IELTS, Visa process, and fellowship</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Be a part of the Medfuture Global Doctors Community</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Refer a friend and earn through Medfuture Refer and Earn loyalty scheme</p>
                             </li>
                             <li>
                                 <i class="fas fa-chevron-right"></i>
                                 <p>Stay current on Australia’s medical industry updates</p>
                             </li>
                         </ul>
                     </div>
                     <div class="reg-paragraphs">
                         <p>
                             When you join Medfuture, you connect with a team dedicated to your continuous employment needs in Australia. We can help you develop your career as a medical practitioner and bring you excellent opportunities you have been longing for. 
                         </p>
                         <p>
                             We recruit and directly work with you to manage your job placement with no middlemen and have the capability and resources that complement your professional background. Complete the <span>registration form</span> to login into your professional profile. 
                         </p>
                         <p>
                             To immediately discuss the latest Locum and Permanent opportunities for doctors, 
                             <span>please call 1300 633 388 or email candidateservices@medfuture.com.au.</span>
                         </p>
                     </div>
                     <div class="form-col-right ">
                         <div class="row">
                             <div class="padd-0">
                                 <div class="registration-form">
                                     <form class="row registration-form-inner" >
                                         <div class="registration-heading">
                                             Login Details
                                         </div>
                                         <div class="col-12">
                                             <span class="select-arrow profession-select"></span>
                                     <select class="form-select form-select-lg boder-btm1 single-selected" name="title" required aria-label=".form-select-lg example">
                                         <option selected="">Profession *</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                         </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                             <input type="email" class="form-control form-control-lg" name="email" required list="datalistOptions" id="exampleDataList" value="" placeholder="User name/E-mail*">
                                         </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                             <input type="password" class="form-control form-control-lg" name="password" required list="datalistOptions" id="exampleDataList" value="" placeholder="Password*">
                                         </div>
                                         <div class="pswrd-forget">
                                             <a href="#">Forget Password?</a>
                                         </div>
                                         <div class="form-break-heading">
                                             Or
                                         </div>
                                         <div class="social-icons-divs">
                                             <div class="social-icon-first-row">
                                                 <a href="#contact" class="cont-button"><i class="fab fa-facebook-f icons"></i></i>Sign in with Facebook </a>
                                                 <a href="#contact" class="cont-button"><i class="fab fa-google icons"></i>Sign in with Google </a>
                                             </div>
                                             <div class="social-icon-second-row">
                                                 <a href="#contact" class="cont-button"><i class="fab fa-linkedin icons"></i>Sign in with linkedin </a>
                                                 <a href="#contact" class="cont-button"><i class="fab fa-twitter icons"></i>Sign in with Twitter </a>
                                             </div>
                                         </div>
                                         <div class="col-3">
                                             <input type="submit" value="SUBMIT" name="submit" class="btn regis-btn">
                                         </div>
                                     </form>
 
                                 </div>
                             </div>
                         </div>
                     </div>

                     
                 </div>
             </div>
         </div>
         <div class="forms-col">
             <div class="form-col-right">
                 <div class="row">
                     <div class="padd-0">
                         <div class="registration-form">
                             <form class="row registration-form-inner" action="{{route('store')}}" method="POST">
                                @csrf
                                 <div class="row reg-top-heading register-candi">
                                     <div class="col-6 register-text">
                                         <p> If you have not already register</p>
                                      </div>
                                     <div class="col-6 register-candi-btn">
                                         <a href="AUS-Medfuture-Employer-dropdown-create-your-account.html">
                                             Register as an Employer
                                         </a>
                                     </div>
                                 </div>
                                
                                 
                                 <div class="registration-heading">
                                     Registration 
                                 </div>
                                 <div class="col-12">
                                     <span class="select-arrow profession-select"></span>
                                     <select class="form-select form-select-lg boder-btm1 single-selected" name="title" required aria-label=".form-select-lg example">
                                         <option selected="">Profession *</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="email" class="form-control form-control-lg" name="email"  list="datalistOptions" id="exampleDataList" value="" placeholder="Email">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="password" class="form-control form-control-lg" name="password" list="datalistOptions" id="exampleDataList" value="" placeholder="Password">
                                 </div>
                                 <div class="personal-info">
                                     <h4>Personal Info</h4>
                                 </div>
                                 <div class="forms-colored-div">
                                     <div class="blue"></div>
                                     <div class="purple"></div>
                                     <div class="pink"></div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="text" class="form-control form-control-lg" name="first_name"  list="datalistOptions" id="exampleDataList" value="" placeholder="First name">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="text" class="form-control form-control-lg" name="last_name"  list="datalistOptions" id="exampleDataList" value="" placeholder="Last name">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="date" class="form-control form-control-lg" name="dob"  list="datalistOptions" id="exampleDataList" value="" placeholder="Date of birth">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="email" class="form-control form-control-lg" name="email" list="datalistOptions" id="exampleDataList" value="" placeholder="Email Address">
                                 </div>

                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="number" class="form-control form-control-lg" name="mobile" list="datalistOptions" id="exampleDataList" value="" placeholder="Phone">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <input type="text" class="form-control form-control-lg" name="address_1" list="datalistOptions" id="exampleDataList" value="" placeholder="Street address">
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected" name="town" aria-label=".form-select-lg example">
                                         <option selected="">Suburb</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>

                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected" name="state" aria-label=".form-select-lg example">
                                         <option selected="">State / Region</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>

                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected" name="country" aria-label=".form-select-lg example">
                                         <option selected="">Country</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected"  name="post_code"  aria-label=".form-select-lg example">
                                         <option selected="">Post Code</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                                 <div class="personal-info proftion-info">
                                     <h4>Professional Information</h4>
                                 </div>
                                 <div class="forms-colored-div">
                                     <div class="blue"></div>
                                     <div class="purple"></div>
                                     <div class="pink"></div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow profession-select"></span>
                                     <select class="form-select form-select-lg boder-btm1 single-selected"  name="specialty" aria-label=".form-select-lg example">
                                         <option selected="">Specialty</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow profession-select"></span>
                                     <select class="form-select form-select-lg boder-btm1 single-selected" name="senority"  aria-label=".form-select-lg example">
                                         <option selected="">Senority / Grade / Band</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                                 <span class="registration-form-line"></span>
                                 <div class="col-lg-6 col-md-12 col-sm-12 how_did">
                                     <span class="select-arrow profession-select"></span>
                                     <select class="form-select form-select-lg boder-btm1 single-selected" name="work_rights_status" aria-label=".form-select-lg example">
                                         <option selected="">your work status</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                                 <div class=" upload-resume">
                                     <span class="upload-icon"></span>
                                     <input  type="file" class="form-control form-control-lg cv-upload"  name="file"  list="datalistOptions" id="exampleDataList" value="" placeholder="UPLOAD RESUME">
                                     <span class="upload-btn"><img src="img/upload.png" alt="">UPLOAD RESUME</span>
                                     <div class="forms-colored-div">
                                         <div class="blue"></div>
                                         <div class="purple"></div>
                                         <div class="pink"></div>
                                     </div>
                                 </div>
                                 <!-- <div class="col-12 upload-resume">
                                     <span class="upload-icon"></span>
                                     <input type="text" class="form-control form-control-lg" list="datalistOptions" id="exampleDataList" value="" placeholder="UPLOAD RESUME">
                                     <div class="forms-colored-div">
                                         <div class="blue"></div>
                                         <div class="purple"></div>
                                         <div class="pink"></div>
                                     </div>
                                 </div> -->
                                 <ul class="regis-radio-btn">
                                     <li>
                                         <input type="checkbox" name="subscribe" id="">
                                         <p>Subscribe to Job Alert</p>
                                     </li>
                                     <li>
                                         <input type="checkbox" name="privacy" id="" required>
                                         <p>Candidate Terms and Condition* </p>
                                     </li>
                                     <li>
                                         <input type="checkbox" name="terms" id="" required>
                                         <p>Website Usage Terms and Conditions*</p>
                                     </li>
                                     <li>
                                         <input type="checkbox"  name="check_detail" id=""  required>
                                         <p>I Consent to Medfuture storing my details Securely on its database to
                                             find suitable positions and advise me regarding related medical
                                             opportunities. The information i have provided is accurate and
                                             up-to-date.* </p>
                                     </li>
                                 </ul>
                                 <div class="col-3">
                                     <input type="submit" value="SUBMIT" id="" name="sumbit" class="btn regis-btn">
                                 </div>

                             </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
    </section>
 
 <section class="sec-testi aus-testi-bg">
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
</main>
@endsection