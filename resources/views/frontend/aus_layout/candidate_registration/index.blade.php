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
                                        <option selected="" disabled>Profession </option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Nurse">Nurse</option>
                                        <option value="Allied Health Professionals">Allied Health Professionals</option>
                                        <option value="Healthcare Executives">Healthcare Executives</option>
                                        <option value="Dentists">Dentists</option>
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
                             <form class="row registration-form-inner" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
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
                                     <select class="profession-doctor-filter form-select form-select-lg boder-btm1 single-selected" name="profession" required aria-label=".form-select-lg example">
                                         <option selected="" disabled>Profession</option>
                                         <option value="Doctor">Doctor</option>
                                         <option value="Nurse">Nurse</option>
                                         <option value="Allied Health Professionals">Allied Health Professionals</option>
                                         <option value="Healthcare Executives">Healthcare Executives</option>
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
                                     <input type="date" class="form-control form-control-lg" name="dob" id="DOB" value="" placeholder="Date of birth">
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
                                         <option selected="" disabled>Suburb</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>

                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected" name="state" aria-label=".form-select-lg example">
                                         <option selected="" disabled>State / Region</option>
                                         <option value="New South Wales (NSW)">New South Wales (NSW)</option>
                                         <option value="Australian Capital Territory (ACT)">Australian Capital Territory (ACT)</option>
                                         <option value="South Australia (SA)">South Australia (SA)</option>
                                         <option value="Queensland (QLD)">Queensland (QLD)</option>
                                         <option value="Western Australia (WA)">Western Australia (WA)</option>
                                         <option value="Victoria (VIC)">Victoria (VIC)</option>
                                         <option value="Tasmania (TAS)">Tasmania (TAS)</option>
                                         <option value="Northern Territory (NT)">Northern Territory (NT)</option>
                                     </select>

                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected" name="country" aria-label=".form-select-lg example">
                                         <option selected="" disabled>Country</option>
                                         <option value="Australia " >Australia </option>
                                         <option value="New Zealand" >New Zealand</option>
                                         <option value="United Kingdom " >United Kingdom </option>
                                         <option value="Austria  " >Austria  </option>
                                         <option value="Belgium" >Belgium</option>
                                         <option value="Canada " >Canada </option>
                                         <option value="Czech Republic  " >Czech Republic  </option>
                                         <option value="Denmark  " >Denmark  </option>
                                         <option value="Finland  " >Finland  </option>
                                         <option value="France " >France </option>
                                         <option value="Germany  " >Germany  </option>
                                         <option value="Greece" >Greece</option>
                                         <option value="Iceland " >Iceland </option>
                                         <option value="Israel  " >Israel  </option>
                                         <option value="Italy " >Italy </option>
                                         <option value="Norway " >Norway </option>
                                         <option value="Portugal  " >Portugal  </option>
                                         <option value="Republic of Ireland  " >Republic of Ireland  </option>
                                         <option value="Singapore  " >Singapore  </option>
                                         <option value="Spain " >Spain </option>
                                         <option value="Sweden " >Sweden </option>
                                         <option value="Switzerland " >Switzerland </option>
                                         <option value="The Netherlands " >The Netherlands </option>
                                         <option value="United States of America " >United States of America </option>
                                         <option value="Afghanistan" >Afghanistan</option>
                                         <option value="Albania" >Albania</option>
                                         <option value="Algeria" >Algeria</option>
                                         <option value="Andorra" >Andorra</option>
                                         <option value="Angola" >Angola</option>
                                         <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                                         <option value="Argentina" >Argentina</option>
                                         <option value="Armenia" >Armenia</option>
                                         <option value="Azerbaijan" >Azerbaijan</option>
                                         <option value="The Bahamas" >The Bahamas</option>
                                         <option value="Bahrain" >Bahrain</option>
                                         <option value="Bangladesh" >Bangladesh</option>
                                         <option value="Barbados" >Barbados</option>
                                         <option value="Belarus" >Belarus</option>
                                         <option value="Belize" >Belize</option>
                                         <option value="Benin" >Benin</option>
                                         <option value="Bhutan" >Bhutan</option>
                                         <option value="Bolivia" >Bolivia</option>
                                         <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
                                         <option value="Botswana" >Botswana</option>
                                         <option value="Brazil" >Brazil</option>
                                         <option value="Brunei" >Brunei</option>
                                         <option value="Bulgaria" >Bulgaria</option>
                                         <option value="Burkina Faso" >Burkina Faso</option>
                                         <option value="Burundi" >Burundi</option>
                                         <option value="Cambodia" >Cambodia</option>
                                         <option value="Cameroon" >Cameroon</option>
                                         <option value="Cape Verde" >Cape Verde</option>
                                         <option value="Central African Republic" >Central African Republic</option>
                                         <option value="Chad" >Chad</option>
                                         <option value="Chile" >Chile</option>
                                         <option value="China" >China</option>
                                         <option value="Colombia" >Colombia</option>
                                         <option value="Comoros" >Comoros</option>
                                         <option value="Congo, Republic of the" >Congo, Republic of the</option>
                                         <option value="Congo, Democratic Republic of the" >Congo, Democratic Republic of the</option>
                                         <option value="Costa Rica" >Costa Rica</option>
                                         <option value="Cote d-Ivoire" >Cote d-Ivoire</option>
                                         <option value="Croatia" >Croatia</option>
                                         <option value="Cuba" >Cuba</option>
                                         <option value="Cyprus" >Cyprus</option>
                                         <option value="Djibouti" >Djibouti</option>
                                         <option value="Dominica" >Dominica</option>
                                         <option value="Dominican Republic" >Dominican Republic</option>
                                         <option value="East Timor (Timor-Leste)" >East Timor (Timor-Leste)</option>
                                         <option value="Ecuador" >Ecuador</option>
                                         <option value="Egypt" >Egypt</option>
                                         <option value="El Salvador" >El Salvador</option>
                                         <option value="Equatorial Guinea" >Equatorial Guinea</option>
                                         <option value="Eritrea" >Eritrea</option>
                                         <option value="Estonia" >Estonia</option>
                                         <option value="Ethiopia" >Ethiopia</option>
                                         <option value="Fiji" >Fiji</option>
                                         <option value="Gabon" >Gabon</option>
                                         <option value="The Gambia" >The Gambia</option>
                                         <option value="Georgia" >Georgia</option>
                                         <option value="Ghana" >Ghana</option>
                                         <option value="Grenada" >Grenada</option>
                                         <option value="Guatemala" >Guatemala</option>
                                         <option value="Guinea" >Guinea</option>
                                         <option value="Guinea-Bissau" >Guinea-Bissau</option>
                                         <option value="Guyana" >Guyana</option>
                                         <option value="Haiti" >Haiti</option>
                                         <option value="Honduras" >Honduras</option>
                                         <option value="Hungary" >Hungary</option>
                                         <option value="India" >India</option>
                                         <option value="Indonesia" >Indonesia</option>
                                         <option value="Iran" >Iran</option>
                                         <option value="Iraq" >Iraq</option>
                                         <option value="Ireland" >Ireland</option>
                                         <option value="Jamaica" >Jamaica</option>
                                         <option value="Japan" >Japan</option>
                                         <option value="Jordan" >Jordan</option>
                                         <option value="Kazakhstan" >Kazakhstan</option>
                                         <option value="Kenya" >Kenya</option>
                                         <option value="Kiribati" >Kiribati</option>
                                         <option value="Korea, North" >Korea, North</option>
                                         <option value="Korea, South" >Korea, South</option>
                                         <option value="Kosovo" >Kosovo</option>
                                         <option value="Kuwait" >Kuwait</option>
                                         <option value="Kyrgyzstan" >Kyrgyzstan</option>
                                         <option value="Laos" >Laos</option>
                                         <option value="Latvia" >Latvia</option>
                                         <option value="Lebanon" >Lebanon</option>
                                         <option value="Lesotho" >Lesotho</option>
                                         <option value="Liberia" >Liberia</option>
                                         <option value="Libya" >Libya</option>
                                         <option value="Liechtenstein" >Liechtenstein</option>
                                         <option value="Lithuania" >Lithuania</option>
                                         <option value="Luxembourg" >Luxembourg</option>
                                         <option value="Macedonia" >Macedonia</option>
                                         <option value="Madagascar" >Madagascar</option>
                                         <option value="Malawi" >Malawi</option>
                                         <option value="Malaysia" >Malaysia</option>
                                         <option value="Maldives" >Maldives</option>
                                         <option value="Mali" >Mali</option>
                                         <option value="Malta" >Malta</option>
                                         <option value="Marshall Islands" >Marshall Islands</option>
                                         <option value="Mauritania" >Mauritania</option>
                                         <option value="Mauritius" >Mauritius</option>
                                         <option value="Mexico" >Mexico</option>
                                         <option value="Micronesia, Federated States of" >Micronesia, Federated States of</option>
                                         <option value="Moldova" >Moldova</option>
                                         <option value="Monaco" >Monaco</option>
                                         <option value="Mongolia" >Mongolia</option>
                                         <option value="Montenegro" >Montenegro</option>
                                         <option value="Morocco" >Morocco</option>
                                         <option value="Mozambique" >Mozambique</option>
                                         <option value="Myanmar (Burma)" >Myanmar (Burma)</option>
                                         <option value="Namibia" >Namibia</option>
                                         <option value="Nauru" >Nauru</option>
                                         <option value="Nepal" >Nepal</option>
                                         <option value="Nicaragua" >Nicaragua</option>
                                         <option value="Niger" >Niger</option>
                                         <option value="Nigeria" >Nigeria</option>
                                         <option value="Oman" >Oman</option>
                                         <option value="Pakistan" >Pakistan</option>
                                         <option value="Palau" >Palau</option>
                                         <option value="Panama" >Panama</option>
                                         <option value="Papua New Guinea" >Papua New Guinea</option>
                                         <option value="Paraguay" >Paraguay</option>
                                         <option value="Peru" >Peru</option>
                                         <option value="Philippines" >Philippines</option>
                                         <option value="Poland" >Poland</option>
                                         <option value="Qatar" >Qatar</option>
                                         <option value="Romania" >Romania</option>
                                         <option value="Russia" >Russia</option>
                                         <option value="Rwanda" >Rwanda</option>
                                         <option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
                                         <option value="Saint Lucia" >Saint Lucia</option>
                                         <option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
                                         <option value="Samoa" >Samoa</option>
                                         <option value="San Marino" >San Marino</option>
                                         <option value="Sao Tome and Principe" >Sao Tome and Principe</option>
                                         <option value="Saudi Arabia" >Saudi Arabia</option>
                                         <option value="Senegal" >Senegal</option>
                                         <option value="Serbia" >Serbia</option>
                                         <option value="Seychelles" >Seychelles</option>
                                         <option value="Sierra Leone" >Sierra Leone</option>
                                         <option value="Slovakia" >Slovakia</option>
                                         <option value="Slovenia" >Slovenia</option>
                                         <option value="Solomon Islands" >Solomon Islands</option>
                                         <option value="Somalia" >Somalia</option>
                                         <option value="South Africa" >South Africa</option>
                                         <option value="South Sudan" >South Sudan</option>
                                         <option value="Sri Lanka" >Sri Lanka</option>
                                         <option value="Sudan" >Sudan</option>
                                         <option value="Suriname" >Suriname</option>
                                         <option value="Swaziland" >Swaziland</option>
                                         <option value="Syria" >Syria</option>
                                         <option value="Taiwan" >Taiwan</option>
                                         <option value="Tajikistan" >Tajikistan</option>
                                         <option value="Tanzania" >Tanzania</option>
                                         <option value="Thailand" >Thailand</option>
                                         <option value="Togo" >Togo</option>
                                         <option value="Tonga" >Tonga</option>
                                         <option value="Trinidad and Tobago" >Trinidad and Tobago</option>
                                         <option value="Tunisia" >Tunisia</option>
                                         <option value="Turkey" >Turkey</option>
                                         <option value="Turkmenistan" >Turkmenistan</option>
                                         <option value="Tuvalu" >Tuvalu</option>
                                         <option value="Uganda" >Uganda</option>
                                         <option value="Ukraine" >Ukraine</option>
                                         <option value="United Arab Emirates" >United Arab Emirates</option>
                                         <option value="Uruguay" >Uruguay</option>
                                         <option value="Uzbekistan" >Uzbekistan</option>
                                         <option value="Vanuatu" >Vanuatu</option>
                                         <option value="Vatican City (Holy See)" >Vatican City (Holy See)</option>
                                         <option value="Venezuela" >Venezuela</option>
                                         <option value="Vietnam" >Vietnam</option>
                                         <option value="Yemen" >Yemen</option>
                                         <option value="Zambia" >Zambia</option>
                                         <option value="Zimbabwe" >Zimbabwe</option>
                                     </select>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                 <input type="text" class="form-control form-control-lg" name="post_code" list="datalistOptions" id="exampleDataList" value="" placeholder="Post Code">
                                     <!-- <span class="select-arrow country-select-arrow"></span>
                                     <select class="form-select form-select-lg boder-btm1 four-selected"  name="post_code"  aria-label=".form-select-lg example">
                                         <option selected="" disabled>Post Code</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select> -->
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
                                     <!-- <select class="form-select form-select-lg boder-btm1 single-selected"  name="specialty" aria-label=".form-select-lg example">
                                         <option selected="" disabled>Specialty</option>
                                         <option value="Anaesthetics">Anaesthetics</option>
                                         <option value="Emergency Medicine ">Emergency Medicine </option>
                                         <option value="General Practice ">General Practice </option>
                                         <option value="Gastroenterologist">Gastroenterologist</option>
                                         <option value="Intensive care ">Intensive care </option>
                                         <option value="Medicine">Medicine</option>
                                         <option value="Obtetrics & Gynaecology ">Obtetrics & Gynaecology </option>
                                         <option value="Pathologist">Pathologist</option>
                                         <option value="Peadiatrics">Peadiatrics</option>
                                         <option value="Psychiatry ">Psychiatry </option>
                                         <option value="Radiology">Radiology</option>
                                         <option value="Surgery ">Surgery </option>
                                     </select> -->
                                     <select class="doctor-specialty-d-none form-select form-select-lg mb-3"
                                        name="specialty"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Specialty</option>
                                        <option value="Anaesthetics">Anaesthetics
                                        </option>
                                        <option value="Emergency Medicine ">Emergency
                                            Medicine </option>
                                        <option value="General Practice ">General
                                            Practice
                                        </option>
                                        <option value="Gastroenterologist">
                                            Gastroenterologist</option>
                                        <option value="Intensive care ">Intensive care
                                        </option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Obtetrics &amp; Gynaecology ">
                                            Obtetrics &amp; Gynaecology </option>
                                        <option value="Pathologist">Pathologist</option>
                                        <option value="Peadiatrics">Peadiatrics</option>
                                        <option value="Psychiatry ">Psychiatry </option>
                                        <option value="Radiology">Radiology</option>
                                        <option value="Surgery ">Surgery </option>
                                    </select>
                                    <select
                                        class="form-select form-select-lg mb-3 nurse-specialty-d-none"
                                        name="specialty"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Specialty</option>
                                        <option value="Accident / Emergency / Critical Care & ICU Nurse">
                                            Accident / Emergency / Critical Care & ICU Nurse
                                        </option>
                                        <option value="Age Care ">Age Care </option>
                                        <option value="Anaesthetic/ Theatre Technician">Anaesthetic/ Theatre Technician

                                        </option>
                                        <option value="Assistance in Nurse">
                                            Assistance in Nurse
                                        </option>
                                        <option value="Care Worker">Care Worker

                                        </option>
                                        <option value="Community Mental Health " >Community Mental Health
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
                                        class="form-select form-select-lg mb-3 AHP-Specialty-d-none"
                                        name="specialty"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Specialty</option>
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
                                        <option value="Exercise Physiologist">Exercise Physiologist
                                        </option>
                                        <option value="Genetic Counsellor">Genetic Counsellor</option>
                                        <option value="Medical Radiologist">Medical Radiologist</option>
                                        <option value="Music Therapist">Music Therapist
                                        </option>
                                        <option value="Occupational Therapist">Occupational Therapist
                                        </option>
                                        <option value="Optometrist" >Optometrist
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
                                        <option selected="" disabled>Specialty</option>
                                        <option value="Business Managers">Business Managers</option>
                                        <option value="General Managers" >General Managers</option>
                                        <option value="Medical Administrators">Medical Administrators</option>
                                        <option value="Medical Director">Medical Director</option>
                                        <option value="Medical Receptionist">Medical Receptionist</option>
                                        <option value="Practice Manager">Practice Manager</option>
                                        <option value="Professional Management Consultants">Professional Management Consultants</option>

                                    </select>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow profession-select"></span>
                                     <!-- <select class="form-select form-select-lg boder-btm1 single-selected" name="senority"  aria-label=".form-select-lg example">
                                         <option selected="" disabled>Senority / Grade / Band</option>
                                         <option value="Internship - PGY Year 1 " >Internship - PGY Year 1 </option>
                                         <option value="Junior House Officer - PGY Year 2 " >Junior House Officer - PGY Year 2 </option>
                                         <option value="Senior House Officer - PGY Year 3 " >Senior House Officer - PGY Year 3 </option>
                                         <option value="Principal Health Officer – PGY Year 4 " >Principal Health Officer – PGY Year 4 </option>
                                         <option value="Registrars" >Registrars</option>
                                         <option value="Consultant" >Consultant</option>
                                     </select> -->
                                     <select class="seniority-doctor-d-none form-select form-select-lg mb-3"
                                        name="senority"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Senority / Grade / Band</option>
                                        <option value="Internship - PGY Year 1">
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
                                        <option value="Registrars" >Registrars</option>
                                        <option value="Senior Registrar" >Senior
                                            Registrar</option>
                                        <option value="Provisional Fellowship Year" >
                                            Provisional Fellowship Year</option>
                                        <option value="General Practitioner" >General
                                            Practitioner</option>
                                        <option value="Specialist">Specialist</option>
                                        <option value="Staff Specialists">Staff
                                            Specialists</option>
                                        <option value="Senior Medical Officer">Senior
                                            Medical Officer</option>
                                        <option value="Visiting Medical Officer" >
                                            Visiting Medical Officer</option>
                                        <option value="Consultant" >Consultant</option>
                                    </select>
                                    <select class="nurse-seniority-d-none form-select form-select-lg mb-3"
                                        name="senority"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Senority / Grade / Band</option>
                                        <option value="PCA / AIN / Care Worker" >PCA /
                                            AIN / Care Worker</option>
                                        <option value="Enrolled Nurse (EN)">Enrolled
                                            Nurse (EN)</option>
                                        <option value="Endorsed Enrolled Nurse (EEN)" >
                                            Endorsed Enrolled Nurse (EEN)</option>
                                        <option value="Registered Nurse (RN)">Registered
                                            Nurse (RN)</option>
                                        <option
                                            value="Advanced Practice Nurse / Nurse Practitioner">
                                            Advanced Practice Nurse / Nurse Practitioner
                                        </option>
                                        <option value="Specialist">Specialist </option>
                                        <option
                                            value="Specialist Nurse / Clinical Nurse Specialist" >
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
                                    <select class="seniority-AHP-d-none form-select form-select-lg mb-3"
                                        name="senority"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Senority / Grade / Band</option>
                                        <option value="Provisional Pychologist">Provisional Pychologist</option>
                                        <option value="Psychologist">Psychologist</option>
                                        <option value="Senior Psychologist">Senior Psychologist</option>
                                        <option value="Provisional Physciotherapist">Provisional Physciotherapist</option>
                                        <option value="Physciotherapist">Physciotherapist</option>
                                        <option value="Senior Physciotherapist">Senior Physciotherapist</option>
                                        <option value="Provisional Podiatrist">Provisional Podiatrist</option>
                                        <option value="Podiatrist">Podiatrist</option>
                                        <option value="Senior Podiatrist">Senior Podiatrist</option>
                                        <option value="Provisional Speech Therapist">Provisional Speech Therapist</option>
                                        <option value="Speech Therapist">Speech Therapist</option>
                                        <option value="Senior Speech Therapist">Senior Speech Therapist</option>
                                        <option value="Provisional Occupational Therapist">Provisional Occupational Therapist</option>
                                        <option value="Occupational Therapist">Occupational Therapist</option>
                                        <option value="Senios Occupational Therapist">Senios Occupational Therapist</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Senior Dentist">Senior Dentist</option>
                                        <option value="Dentistry Specialist">Dentistry Specialist</option>
                                        <option value="Provisional Occupational Therapist">Provisional Occupational Therapist</option>
                                        <option value="Occupational Therapist">Occupational Therapist</option>
                                        <option value="Senior Occupational Therapist">Senior Occupational Therapist</option>
                                        <option value="Provisional Dietitians">Provisional Dietitians</option>
                                        <option value="Dietitians">Dietitians</option>
                                        <option value="Senior Dietitians">Senior Dietitians</option>
                                    </select>
                                    <select class="seniority-HE-d-none form-select form-select-lg mb-3"
                                        name="senority"
                                        aria-label=".form-select-lg example">
                                        <option selected="" disabled>Senority / Grade / Band</option>
                                        <option value="Business Managers ">Business Managers </option>
                                        <option value="General Managers ">General Managers </option>
                                        <option value="Medical Administrators ">Medical Administrators </option>
                                        <option value="Medical Director ">Medical Director </option>
                                        <option value="Medical Receptionist">Medical Receptionist</option>
                                        <option value="Practice Manager">Practice Manager</option>
                                        <option value="Professional Management Consultants ">Professional Management Consultants </option>          
                                    </select>
                                 </div>

                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                     <span class="select-arrow profession-select"></span>
                                     <select class="form-select form-select-lg boder-btm1 single-selected" name="devision"  aria-label=".form-select-lg example">
                                         <option selected="" disabled>Professional Division</option>
                                        <option value="General Practitioners">General
                                            Practitioners </option>
                                        <option value="Healthcare Executives" >
                                            Healthcare
                                            Executives </option>
                                        <option value="Hospital Doctors" >Hospital
                                            Doctors
                                        </option>
                                        <option value="Locum Doctors" >Locum Doctors
                                        </option>
                                        <option value="Nurses &amp; Carers">Nurses &amp;
                                            Carers</option>
                                        <option value="Allergologist">Allergologist
                                        </option>
                                        <option value="Arts Therapist ">Arts Therapist
                                        </option>
                                        <option value="Audiologist">Audiologist</option>
                                        <option value="Chiropractor">Chiropractor
                                        </option>
                                        <option value="Dietitians">Dietitians </option>
                                        <option value="Exercise Physiologist">Exercise
                                            Physiologist </option>
                                        <option value="Genetic Counsellor">Genetic
                                            Counsellor</option>
                                        <option value="Medical Radiologist" >Medical
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
                                        <option value="Osteopathist">Osteopathist
                                        </option>
                                        <option value="Perfusionist">Perfusionist
                                        </option>
                                        <option value="Physiotherapist">Physiotherapist
                                        </option>
                                        <option value="Podiatrist">Podiatrist</option>
                                        <option value="Psychologist">Psychologist
                                        </option>
                                        <option value="Psychology &amp; Mental health">
                                            Psychology &amp; Mental health</option>
                                        <option value="Rehabilitation Counsellor">
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
                                 </div>
                                 
                                 <span class="registration-form-line"></span>
                                 <div class="col-lg-12 col-md-12 col-sm-12 how_did">
                                     <select class="form-select form-select-lg boder-btm1 single-selected" name="work_rights_status" aria-label=".form-select-lg example">
                                         <option selected="" disabled>How Did you here about us</option>
                                         <option value="Facebook">Facebook</option>
                                         <option value="Google">Google</option>
                                     </select>
                                 </div>
                                 <div class=" upload-resume">
                                     <span class="upload-icon"></span>
                                     <input type="file" name="cv_document" class="form-control" placeholder="UPLOAD RESUME">
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