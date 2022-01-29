<div class="interview-inner">
    <h3> Interview Notes</h3>
    <p>Last Updated Date</p>
    <div class="interview-table">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Title
                    </th>
                    <td>
                        {{$candidate->title ?? '' }}
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        First Name
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Last Name
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Gender
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Mobile
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Profession
                    </th>
                    <td>
                    {{-- <select class="profession-doctor form-select form-select-lg mb-3"
                            name="profession"
                            aria-label=".form-select-lg example">
                            <option value="Doctor">Doctor</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Allied Health Professionals">Allied Health Professionals</option>
                            <option value="Healthcare Executives">Healthcare Executives</option>
                        </select>   --}}

                        {{$candidate->profession ?? ''}}
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Division
                    </th>
                    <td>

                        {{$candidate->devision ?? ''}}
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                <th>
                        Seniority
                    </th>
                    <td>
                        {{$candidate->senority ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                <th>
                        Specialty
                    </th>
                    <td>
                        {{$candidate->specialty ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Start Date
                    </th>
                    <td>
                        {{$candidate->interview->start_date ?? ''}}

                        {{-- <input type="date" name="date"> --}}
                        <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                    </td>
                </tr>
                <tr>
                    <th>
                        End Date
                    </th>
                    <td>
                        {{$candidate->interview->end_date ?? ''}}

                        {{-- <input type="date" name="date"> --}}
                        <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                    </td>
                </tr>
                <tr>
                    <th>
                        Distance
                    </th>
                    <td>
                        {{$candidate->interview->distance ?? ''}}

                    </td>
                </tr>
                <tr>
                    <th>
                        Job Seeking location
                    </th>
                    <td>
                        {{$candidate->interview->job_location ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Country
                    </th>
                    <td class="padd-8">
                        {{$candidate->country ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        State / Region / County
                    </th>
                    <td class="padd-8">
                        {{$candidate->state ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Post Code
                    </th>
                    <td class="padd-8">
                        {{$candidate->post_code ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Suburb/ Town
                    </th>
                    <td class="padd-8">
                        {{$candidate->town ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Sub-Region/ District
                    </th>
                    <td class="padd-8">
                        {{$candidate->district ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Main City
                    </th>
                    <td class="padd-8">
                        {{$candidate->main_city ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Distance to Main City
                    </th>
                    <td class="padd-8">
                        {{$candidate->distance_to_main ?? ''}}
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Practise Licence Number
                    </th>
                    <td class="padd-8">
                        {{$candidate->interview->practise_licence_number ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Licence Board
                    </th>
                    <td class="padd-8">
                        {{$candidate->interview->licence_board ?? ''}}

                    </td>
                </tr>
                <tr>
                    <th>
                        Registration/ License Type
                    </th>
                    <td>
                        {{$candidate->license_type ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Country of Primary Degree
                    </th>
                    <td>
                        {{$candidate->country_of_primary_degree ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Medical School
                    </th>
                    <td class="padd-8">
                        {{$candidate->medical_school ?? ''}}
                    </td>
                </tr>

                <tr>
                    <th>
                        Practice Licensing Country
                    </th>
                    <td>
                        {{$candidate->country_of_citizenship ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Practice Licensing Body
                    </th>
                    <td class="padd-8">
                        {{$candidate->practice_licensing_body ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Experience From Home Country
                    </th>
                    <td>
                        {{$candidate->experience_from_home ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Experience From Residing Country
                    </th>
                    <td>
                        {{$candidate->experience_from_residing ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Recognised Comparable Experience
                    </th>
                    <td>
                        {{$candidate->recognised_comparable_experience ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Current Employment Status
                    </th>
                    <td>
                        {{$candidate->current_employment_status ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Engagement Type
                    </th>
                    <td>
                        {{$candidate->engagement_term ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Employment Term
                    </th>
                    <td>
                        {{$candidate->interview->employment_type ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Placement Type
                    </th>
                    <td>
                        {{$candidate->placement_term ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Gross Salary Expectation
                    </th>
                    <td class="padd-8">
                        {{$candidate->interview->gross_salary ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Hourly Rate Expectation
                    </th>
                    <td class="padd-8">
                        {{$candidate->interview->hourly_rate_expectation ?? ''}}

                    </td>
                </tr>
                <tr>
                    <th>
                        Billing Share
                    </th>
                    <td class="padd-8">
                        {{$candidate->interview->billing_share ?? ''}}

                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Country of Citizenship
                    </th>
                    <td>
                        {{$candidate->country_of_citizenship ?? ''}}
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Country of Residence
                    </th>
                    <td>
                        {{$candidate->country_of_residence ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        VISA Type or Subclass
                    </th>
                    <td>
                        {{$candidate->visa_type ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Work Right Status
                    </th>
                    <td>
                        {{$candidate->work_rights_status ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        VISA Sponsorship
                    </th>
                    <td>
                        {{$candidate->interview->visa_sponsorship ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Accommodation
                    </th>
                    <td>
                        {{$candidate->interview->accommodation ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Travel Allowances
                    </th>
                    <td>
                        {{$candidate->interview->travel_allowance ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Meal Allowances
                    </th>
                    <td>
                        {{$candidate->interview->meal_allowance ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Uniform Allowances
                    </th>
                    <td>
                        {{$candidate->interview->uniform_allowance ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Competitive Features</h4>
                    </td>
                    <td></td>

                </tr>
                <tr>
                    <th>
                        Moratorium Restriction
                    </th>
                    <td>
                        {{$candidate->interview->moratorium_restriction ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Location Restrictions
                    </th>
                    <td>
                        {{$candidate->interview->location_restriction ?? ''}}

                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Training Program Requirement
                    </th>
                    <td>
                        {{$candidate->interview->program_type ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Training Program Type
                    </th>
                    <td  class="padd-8">
                        {{$candidate->interview->program_type ?? ''}}

                    </td>
                </tr>
                <tr>
                    <th>
                        Medical Board Conditions
                    </th>
                    <td>
                        {{$candidate->interview->medical_board_condition ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Medical Board Undertakings
                    </th>
                    <td>
                        {{$candidate->interview->medical_board_undertaking ?? ''}}


                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="mb-3 text-area">
                            <label for="exampleFormControlTextarea1"
                                class="form-label">Skills &
                                Interests</label>
                            <textarea class="form-control"
                                id="exampleFormControlTextarea1"

                        rows="3">{{$candidate->interview->skill ?? ''}}</textarea>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="mb-3 text-area">
                            <label for="exampleFormControlTextarea1"
                                class="form-label">Interviewer Notes</label>
                            <textarea class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="3">
                                {{$candidate->interview->interview_notes ?? ''}}
                            </textarea>
                        </div>
                    </td>
                    <td></td>
                </tr>

            </tbody>
        </table>

        <div class="interview-btns">
            <div class="edit-brn">
                <button class="btn"><img
                        src="{{asset('img/dashboard/Download.png')}}"
                        class="img-fluid" alt="download"> Download</button>
                <button class="btn"><img
                        src=" {{asset('img/dashboard/Print-1.png')}}"
                        class="img-fluid" alt="Edit-img"> Print </button>
                <button class="btn"><img
                        src=" {{asset('img/dashboard/Share.png')}}"
                        class="img-fluid" alt="Edit-img"> Share</button>
                <button class="btn interview-edit-btn"><img
                        src=" {{asset('img/dashboard/Edit.png')}}"
                        class="img-fluid" alt="Edit-img"> Edit</button>
            </div>
        </div>
    </div>
    <form action="{{url('update_interview')}}/{{$candidate->id}}" class="interview-form-d-none" method="post">
        @csrf
        <table class="table table-bordered table-striped ">
            <tbody>
                <tr>
                    <th>
                        Title
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="title"
                            aria-label=".form-select-lg example">
                            <option value="Mr" {{ old('title',$candidate->title =="Mr")? "selected" : "" }}>Mr</option>
                            <option value="Mrs" {{ old('title',$candidate->title =="Mrs")? "selected" : "" }}>Mrs</option>
                            <option value="Miss" {{ old('title',$candidate->title =="Miss")? "selected" : "" }}>Miss</option>
                            <option value="Ms" {{ old('title',$candidate->title =="Ms")? "selected" : "" }}>Ms</option>
                            <option value="Dr" {{ old('title',$candidate->title =="Dr")? "selected" : "" }}>Dr</option>
                            <option value="Prof" {{ old('title',$candidate->title =="Prof")? "selected" : "" }}>Prof</option>
                            <option value="Other" {{ old('title',$candidate->title =="Other")? "selected" : "" }}>Other</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        First Name
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Last Name
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Gender
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Mobile
                    </th>
                    <td>
                        <i class="fas fa-lock"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Profession
                    </th>
                    <td>
                        <select class="profession-doctor form-select form-select-lg mb-3" name="profession" aria-label=".form-select-lg example">
                            <option value="Doctor" {{old ('profession',$candidate->profession == "Doctor")? "selected" : ""}}>Doctor</option>
                            <option value="Nurse" {{old ('profession',$candidate->profession == "Nurse")? "selected" : ""}}>Nurse</option>
                            <option value="Allied Health Professionals" {{old ('profession',$candidate->profession == "Allied Health Professionals")? "selected" : ""}}>Allied Health Professionals</option>
                            <option value="Healthcare Executives" {{old ('profession',$candidate->profession == "Healthcare Executives")? "selected" : ""}}>Healthcare Executives</option>
                            <!-- <option value="Dentists">Dentists</option> -->
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Division
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="devision"
                            aria-label=".form-select-lg example">
                            <option value="General Practitioners"{{old ('devision',$candidate->devision == "General Practitioners")? "selected" : ""}}>General
                                Practitioners </option>
                            <option value="Healthcare Executives" {{old ('devision',$candidate->devision == "Healthcare Executives")? "selected" : ""}}>
                                Healthcare
                                Executives </option>
                            <option value="Hospital Doctors" {{old ('devision',$candidate->devision == "Hospital Doctors")? "selected" : ""}}>Hospital
                                Doctors
                            </option>
                            <option value="Locum Doctors" {{old ('devision',$candidate->devision == "Locum Doctors")? "selected" : ""}}>Locum Doctors
                            </option>
                            <option value="Nurses &amp; Carers" {{old ('devision',$candidate->devision == "Nurses &amp; Carers")? "selected" : ""}}>Nurses &amp;
                                Carers</option>
                            <option value="Allergologist" {{old ('devision',$candidate->devision == "Allergologist")? "selected" : ""}}>Allergologist
                            </option>
                            <option value="Arts Therapist " {{old ('devision',$candidate->devision == "Arts Therapist")? "selected" : ""}}>Arts Therapist
                            </option>
                            <option value="Audiologist" {{old ('devision',$candidate->devision == "Audiologist")? "selected" : ""}}>Audiologist</option>
                            <option value="Chiropractor" {{old ('devision',$candidate->devision == "Chiropractor")? "selected" : ""}}>Chiropractor
                            </option>
                            <option value="Dietitians" {{old ('devision',$candidate->devision == "Dietitians")? "selected" : ""}}>Dietitians </option>
                            <option value="Exercise Physiologist" {{old ('devision',$candidate->devision == "Exercise Physiologist")? "selected" : ""}}>Exercise
                                Physiologist </option>
                            <option value="Genetic Counsellor" {{old ('devision',$candidate->devision == "Genetic Counsellor")? "selected" : ""}}>Genetic
                                Counsellor</option>
                            <option value="Medical Radiologist" {{old ('devision',$candidate->devision == "Medical Radiologist")? "selected" : ""}}>Medical
                                Radiologist </option>
                            <option value="Music Therapist" {{old ('devision',$candidate->devision == "Music Therapist")? "selected" : ""}}>Music Therapist
                            </option>
                            <option value="Occupational Therapist" {{old ('devision',$candidate->devision == "Occupational Therapist")? "selected" : ""}}>
                                Occupational
                                Therapist</option>
                            <option value="Optometrist" {{old ('devision',$candidate->devision == "Optometrist")? "selected" : ""}}>Optometrist</option>
                            <option value="Orthotist and prosthetist">
                                Orthotist
                                and prosthetist</option>
                            <option value="Osteopathist" {{old ('devision',$candidate->devision == "Osteopathist")? "selected" : ""}}>Osteopathist
                            </option>
                            <option value="Perfusionist" {{old ('devision',$candidate->devision == "Perfusionist")? "selected" : ""}}>Perfusionist
                            </option>
                            <option value="Physiotherapist" {{old ('devision',$candidate->devision == "Physiotherapist")? "selected" : ""}}>Physiotherapist
                            </option>
                            <option value="Podiatrist" {{old ('devision',$candidate->devision == "Podiatrist")? "selected" : ""}}>Podiatrist</option>
                            <option value="Psychologist" {{old ('devision',$candidate->devision == "Psychologist")? "selected" : ""}}>Psychologist
                            </option>
                            <option value="Psychology &amp; Mental health" {{old ('devision',$candidate->devision == "Psychology &amp; Mental health")? "selected" : ""}}>
                                Psychology &amp; Mental health</option>
                            <option value="Rehabilitation Counsellor" {{old ('devision',$candidate->devision == "Rehabilitation Counsellor")? "selected" : ""}}>
                                Rehabilitation Counsellor </option>
                            <option value="Sonographer" {{old ('devision',$candidate->devision == "Sonographer")? "selected" : ""}}>Sonographer</option>
                            <option value="Specialist service" {{old ('devision',$candidate->devision == "Specialist service")? "selected" : ""}}>Specialist
                                service</option>
                            <option value="Speech-pathology" {{old ('devision',$candidate->devision == "Speech-pathology")? "selected" : ""}}>
                                Speech-pathology
                            </option>
                            <option value="Midwife" {{old ('devision',$candidate->devision == "Midwife")? "selected" : ""}}>Midwife</option>
                            <option value="Dentists" {{old ('devision',$candidate->devision == "Dentists")? "selected" : ""}}>Dentists</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Seniority
                    </th>
                    <td>
                        <select class="seniority-doctor-d-none form-select form-select-lg mb-3"
                            name="senority"
                            aria-label=".form-select-lg example">
                            <option value="Internship - PGY Year 1" {{old('senority',$candidate->senority == "Internship - PGY Year 1")? "selected" : ""}}>
                                Internship
                                - PGY Year 1 </option>
                            <option
                                value="Junior House Officer - PGY Year 2 " {{old('senority',$candidate->senority == "Junior House Officer - PGY Year 2")? "selected" : ""}}>
                                Junior House Officer - PGY Year 2 </option>
                            <option
                                value="Senior House Officer - PGY Year 3 " {{old('senority',$candidate->senority == "Senior House Officer - PGY Year 3")? "selected" : ""}}>
                                Senior House Officer - PGY Year 3 </option>
                            <option
                                value="Principal Health Officer – PGY Year 4 " {{old('senority',$candidate->senority == "Principal Health Officer – PGY Year 4")? "selected" : ""}}>
                                Principal Health Officer – PGY Year 4
                            </option>
                            <option value="Registrars" {{old('senority',$candidate->senority == "Registrars")? "selected" : ""}}>Registrars</option>
                            <option value="Senior Registrar" {{old('senority',$candidate->senority == "Senior Registrar")? "selected" : ""}}>Senior
                                Registrar</option>
                            <option value="Provisional Fellowship Year" {{old('senority',$candidate->senority == "Provisional Fellowship Year")? "selected" : ""}}>
                                Provisional Fellowship Year</option>
                            <option value="General Practitioner" {{old('senority',$candidate->senority == "General Practitioner")? "selected" : ""}}>General
                                Practitioner</option>
                            <option value="Specialist" {{old('senority',$candidate->senority == "Specialist")? "selected" : ""}}>Specialist</option>
                            <option value="Staff Specialists" {{old('senority',$candidate->senority == "Staff Specialists")? "selected" : ""}}>Staff
                                Specialists</option>
                            <option value="Senior Medical Officer" {{old('senority',$candidate->senority == "Senior Medical Officer")? "selected" : ""}}>Senior
                                Medical Officer</option>
                            <option value="Visiting Medical Officer" {{old('senority',$candidate->senority == "Visiting Medical Officer")? "selected" : ""}}>
                                Visiting Medical Officer</option>
                            <option value="Consultant" {{old('senority',$candidate->senority == "Consultant")? "selected" : ""}}>Consultant</option>
                        </select>
                        <select
                            class="nurse-seniority-d-none form-select form-select-lg mb-3 "
                            name="senority"
                            aria-label=".form-select-lg example">
                            <option value="PCA / AIN / Care Worker" {{old('senority',$candidate->senority == "PCA / AIN / Care Worker")? "selected" : ""}}>PCA /
                                AIN / Care Worker</option>
                            <option value="Enrolled Nurse (EN)" {{old('senority',$candidate->senority == "Enrolled Nurse (EN)")? "selected" : ""}}>Enrolled
                                Nurse (EN)</option>
                            <option value="Endorsed Enrolled Nurse (EEN)" {{old('senority',$candidate->senority == "Endorsed Enrolled Nurse (EEN)")? "selected" : ""}}>
                                Endorsed Enrolled Nurse (EEN)</option>
                            <option value="Registered Nurse (RN)" {{old('senority',$candidate->senority == "Registered Nurse (RN)")? "selected" : ""}}>Registered
                                Nurse (RN)</option>
                            <option
                                value="Advanced Practice Nurse / Nurse Practitioner" {{old('senority',$candidate->senority == "Advanced Practice Nurse / Nurse Practitioner")? "selected" : ""}}>
                                Advanced Practice Nurse / Nurse Practitioner
                            </option>
                            <option value="Specialist" {{old('senority',$candidate->senority == "Specialist")? "selected" : ""}}>Specialist </option>
                            <option
                                value="Specialist Nurse / Clinical Nurse Specialist" {{old('senority',$candidate->senority == "Specialist Nurse / Clinical Nurse Specialist")? "selected" : ""}}>
                                Specialist Nurse / Clinical Nurse Specialist
                            </option>
                            <option value="Midwives" {{old('senority',$candidate->senority == "Midwives")? "selected" : ""}}>Midwives</option>
                            <option value="Nurse Manager" {{old('senority',$candidate->senority == "Nurse Manager")? "selected" : ""}}>Nurse Manager
                            </option>
                            <option
                                value="Director of Nursing Practice (DNP)" {{old('senority',$candidate->senority == "Director of Nursing Practice (DNP)")? "selected" : ""}}>
                                Director of Nursing Practice (DNP)</option>
                            <option value="Chief Nursing Officer (CNO)" {{old('senority',$candidate->senority == "Chief Nursing Officer (CNO)")? "selected" : ""}}>
                                Chief Nursing Officer (CNO)</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Specialty
                    </th>
                    <td>
                        <select class="doctor-specialty-d-none form-select form-select-lg mb-3"
                            name="specialty"
                            aria-label=".form-select-lg example">
                            <option value="Anaesthetics" {{old('specialty',$candidate->specialty == "Anaesthetics")? "selected" : ""}}>Anaesthetics
                            </option>
                            <option value="Emergency Medicine "{{old('specialty',$candidate->specialty == "Emergency Medicine")? "selected" : ""}}>Emergency
                                Medicine </option>
                            <option value="General Practice "{{old('specialty',$candidate->specialty == "General Practice")? "selected" : ""}}>General
                                Practice
                            </option>
                            <option value="Gastroenterologist"{{old('specialty',$candidate->specialty == "Gastroenterologist")? "selected" : ""}}>
                                Gastroenterologist</option>
                            <option value="Intensive care "{{old('specialty',$candidate->specialty == "Intensive care")? "selected" : ""}}>Intensive care
                            </option>
                            <option value="Medicine"{{old('specialty',$candidate->specialty == "Medicine")? "selected" : ""}}>Medicine</option>
                            <option value="Obtetrics &amp; Gynaecology " {{old('specialty',$candidate->specialty == "Obtetrics &amp; Gynaecology")? "selected" : ""}}>
                                Obtetrics &amp; Gynaecology </option>
                            <option value="Pathologist" {{old('specialty',$candidate->specialty == "Pathologist")? "selected" : ""}}>Pathologist</option>
                            <option value="Peadiatrics" {{old('specialty',$candidate->specialty == "Peadiatrics")? "selected" : ""}}>Peadiatrics</option>
                            <option value="Psychiatry " {{old('specialty',$candidate->specialty == "Psychiatry")? "selected" : ""}}>Psychiatry </option>
                            <option value="Radiology" {{old('specialty',$candidate->specialty == "Radiology")? "selected" : ""}}>Radiology</option>
                            <option value="Surgery " {{old('specialty',$candidate->specialty == "Surgery")? "selected" : ""}}>Surgery </option>
                        </select>
                        <select
                            class="form-select form-select-lg mb-3 nurse-specialty-d-none"
                            name="specialty"
                            aria-label=".form-select-lg example">
                            <option value="Accident / Emergency / Critical Care & ICU Nurse" {{old('specialty',$candidate->specialty == "Accident / Emergency / Critical Care & ICU Nurse")? "selected" : ""}}>
                                Accident / Emergency / Critical Care & ICU Nurse
                            </option>
                            <option value="Age Care " {{old('specialty',$candidate->specialty == "Age Care")? "selected" : ""}}>Age Care </option>
                            <option value="Anaesthetic/ Theatre Technician" {{old('specialty',$candidate->specialty == "Anaesthetic/ Theatre Technician")? "selected" : ""}}>Anaesthetic/ Theatre Technician

                            </option>
                            <option value="Assistance in Nurse" {{old('specialty',$candidate->specialty == "Assistance in Nurse")? "selected" : ""}}>
                                Assistance in Nurse
                            </option>
                            <option value="Care Worker" {{old('specialty',$candidate->specialty == "Care Worke")? "selected" : ""}}>Care Worker

                            </option>
                            <option value="Community Mental Health " {{old('specialty',$candidate->specialty == "Community Mental Health")? "selected" : ""}}>Community Mental Health
                            </option>
                            <option value="Community NDIS " {{old('specialty',$candidate->specialty == "Community NDIS")? "selected" : ""}}>Community NDIS</option>
                            <option value="CSSD " {{old('specialty',$candidate->specialty == "CSSD")? "selected" : ""}}>CSSD</option>
                            <option value="Educators & Facilitators " {{old('specialty',$candidate->specialty == "Educators & Facilitators")? "selected" : ""}}>Educators & Facilitators
                            </option>
                            <option value="General Medical & Surgical" {{old('specialty',$candidate->specialty == "General Medical & Surgical")? "selected" : ""}}>General Medical & Surgical
                            </option>
                            <option value="Instrument Technician" {{old('specialty',$candidate->specialty == "Instrument Technician")? "selected" : ""}}>Instrument Technician
                            </option>
                            <option value="Mental Health, Forensic & Correctional" {{old('specialty',$candidate->specialty == "Mental Health, Forensic & Correctional")? "selected" : ""}}>
                                Mental Health, Forensic & Correctional
                            </option>
                            <option value="Midwife & Neo - Natal" {{old('specialty',$candidate->specialty == "Midwife & Neo - Natal")? "selected" : ""}}>Midwife & Neo - Natal</option>
                            <option value="Orderly" {{old('specialty',$candidate->specialty == "Orderly")? "selected" : ""}}>Orderly</option>
                            <option value="Paediatric & PICU" {{old('specialty',$candidate->specialty == "Paediatric & PICU")? "selected" : ""}}>Paediatric & PICU</option>
                            <option value="Practice Nurse" {{old('specialty',$candidate->specialty == "Practice Nurse")? "selected" : ""}}>Practice Nurse</option>
                            <option value="Rural & Remote" {{old('specialty',$candidate->specialty == "Rural & Remote")? "selected" : ""}}>Rural & Remote</option>
                            <option value="Theatre & Recovery" {{old('specialty',$candidate->specialty == "Theatre & Recovery")? "selected" : ""}}>Theatre & Recovery</option>

                        </select>
                        <select
                            class="form-select form-select-lg mb-3 AHP-Specialty-d-none"
                            name="specialty"
                            aria-label=".form-select-lg example">
                            <option value="Allergologist"{{old('specialty',$candidate->specialty == "Allergologist")? "selected" : ""}}>
                                Allergologist
                            </option>
                            <option value="Arts Therapist" {{old('specialty',$candidate->specialty == "Arts Therapist")? "selected" : ""}}>Arts Therapist</option>
                            <option value="Audiologist" {{old('specialty',$candidate->specialty == "Audiologist")? "selected" : ""}}>Audiologist
                            </option>
                            <option value="Chiropractor" {{old('specialty',$candidate->specialty == "Chiropractor")? "selected" : ""}}>
                               Chiropractor
                            </option>
                            <option value="Dietitians" {{old('specialty',$candidate->specialty == "Dietitians")? "selected" : ""}}>Dietitians

                            </option>
                            <option value="Exercise Physiologist" {{old('specialty',$candidate->specialty == "Exercise Physiologist")? "selected" : ""}}>Exercise Physiologist
                            </option>
                            <option value="Genetic Counsellor" {{old('specialty',$candidate->specialty == "Genetic Counsellor")? "selected" : ""}}>Genetic Counsellor</option>
                            <option value="Medical Radiologist" {{old('specialty',$candidate->specialty == "Medical Radiologist")? "selected" : ""}}>Medical Radiologist</option>
                            <option value="Music Therapist" {{old('specialty',$candidate->specialty == "Music Therapist")? "selected" : ""}}>Music Therapist
                            </option>
                            <option value="Occupational Therapist" {{old('specialty',$candidate->specialty == "Occupational Therapist")? "selected" : ""}}>Occupational Therapist
                            </option>
                            <option value="Optometrist" {{old('specialty',$candidate->specialty == "Optometrist")? "selected" : ""}}>Optometrist
                            </option>
                            <option value="Orthotist and prosthetist" {{old('specialty',$candidate->specialty == "Orthotist and prosthetist")? "selected" : ""}}>Orthotist and prosthetist</option>
                            <option value="Osteopathist" {{old('specialty',$candidate->specialty == "Osteopathist")? "selected" : ""}}>Osteopathist</option>
                            <option value="Perfusionist" {{old('specialty',$candidate->specialty == "Perfusionist")? "selected" : ""}}>Perfusionist</option>
                            <option value="Physiotherapist" {{old('specialty',$candidate->specialty == "Physiotherapist")? "selected" : ""}}>Physiotherapist</option>
                            <option value="Podiatrist" {{old('specialty',$candidate->specialty == "Podiatrist")? "selected" : ""}}>Podiatrist</option>
                            <option value="Psychologist" {{old('specialty',$candidate->specialty == "Psychologist")? "selected" : ""}}>Psychologist</option>
                            <option value="Psychology & Mental health" {{old('specialty',$candidate->specialty == "Psychology & Mental health")? "selected" : ""}}>Psychology & Mental health</option>
                            <option value="Rehabilitation Counsellor" {{old('specialty',$candidate->specialty == "Rehabilitation Counsellor")? "selected" : ""}}>Rehabilitation Counsellor</option>
                            <option value="Sonographer" {{old('specialty',$candidate->specialty == "Sonographer")? "selected" : ""}}>Sonographer</option>
                            <option value="Specialist service" {{old('specialty',$candidate->specialty == "Specialist service")? "selected" : ""}}>Specialist service</option>
                            <option value="Speech-pathology" {{old('specialty',$candidate->specialty == "Speech-pathology")? "selected" : ""}}>Speech-pathology</option>
                        </select>
                        <select
                            class="form-select form-select-lg mb-3 HE-Specialty-d-none"
                            name="specialty"
                            aria-label=".form-select-lg example">
                            <option value="Business Managers" {{old('specialty',$candidate->specialty == "Business Managers")? "selected" : ""}}>Business Managers</option>
                            <option value="General Managers" {{old('specialty',$candidate->specialty == "General Managers")? "selected" : ""}}>General Managers</option>
                            <option value="Medical Administrators" {{old('specialty',$candidate->specialty == "Medical Administrators")? "selected" : ""}}>Medical Administrators</option>
                            <option value="Medical Director" {{old('specialty',$candidate->specialty == "Medical Director")? "selected" : ""}}>Medical Director</option>
                            <option value="Medical Receptionist" {{old('specialty',$candidate->specialty == "Medical Receptionist")? "selected" : ""}}>Medical Receptionist</option>
                            <option value="Practice Manager" {{old('specialty',$candidate->specialty == "Practice Manager")? "selected" : ""}}>Practice Manager</option>
                            <option value="Professional Management Consultants" {{old('specialty',$candidate->specialty == "Professional Management Consultants")? "selected" : ""}}>Professional Management Consultants</option>

                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Start Date
                    </th>
                    <td>
                        <input type="date" name="start_date" value="{{old('start_date',$candidate->interview->start_date ?? '')}}">
                        <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                    </td>
                </tr>
                <tr>
                    <th>
                        End Date
                    </th>
                    <td>
                        <input type="date" name="end_date" value="{{old('end_date',$candidate->interview->end_date ?? '')}}">
                        <!-- <img src="{{asset('img/dashboard/Calendar.png')}}" class="calendar" alt="calendar-icon"> -->
                    </td>
                </tr>
                <tr>
                    <th>
                        Distance
                    </th>
                    <td class="padd-8">
                    <input type="text" value="{{old('distance',$candidate->interview->distance ?? '')}}" name="distance">
                    </td>
                </tr>
                <tr>
                    <th>
                        Job Seeking location
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="job_location"
                            aria-label=".form-select-lg example">

                            <option value="one" <?= $candidate->interview? ($candidate->interview->job_location == "one"? "selected" : '') : '' ?>>One</option>
                            <option value="two" <?= $candidate->interview? ($candidate->interview->job_location == "two"? "selected" : '') : ''?> >Two</option>
                            <option value="three" <?= $candidate->interview? ($candidate->interview->job_location == "three"? "selected" : '') : ''?> >Three</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    {{-- Country --}}
                    <th>
                        Country
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                                name="country"
                                aria-label=".form-select-lg example">
                            <option value="Australia " {{old('country',$candidate->country == "Australia")? "selected" : ""}}>Australia </option>
                            <option value="New Zealand" {{old('country',$candidate->country == "New Zealand")? "selected" : ""}}>New Zealand</option>
                            <option value="United Kingdom " {{old('country',$candidate->country == "United Kingdom")? "selected" : ""}}>United Kingdom
                            </option>
                            <option value="Austria  " {{old('country',$candidate->country == "Austria")? "selected" : ""}}>Austria </option>
                            <option value="Belgium" {{old('country',$candidate->country == "Belgium")? "selected" : ""}}>Belgium</option>
                            <option value="Canada " {{old('country',$candidate->country == "Canada")? "selected" : ""}}>Canada </option>
                            <option value="Czech Republic  " {{old('country',$candidate->country == "Czech Republic")? "selected" : ""}}>Czech Republic
                            </option>
                            <option value="Denmark  " {{old('country',$candidate->country == "Denmark")? "selected" : ""}}>Denmark </option>
                            <option value="Finland  " {{old('country',$candidate->country == "Finland")? "selected" : ""}}>Finland </option>
                            <option value="France " {{old('country',$candidate->country == "France")? "selected" : ""}}>France </option>
                            <option value="Germany  " {{old('country',$candidate->country == "Germany")? "selected" : ""}}>Germany </option>
                            <option value="Greece" {{old('country',$candidate->country == "Greece")? "selected" : ""}}>Greece</option>
                            <option value="Iceland " {{old('country',$candidate->country == "Iceland")? "selected" : ""}}>Iceland </option>
                            <option value="Israel  " {{old('country',$candidate->country == "Israel")? "selected" : ""}}>Israel </option>
                            <option value="Italy " {{old('country',$candidate->country == "Italy")? "selected" : ""}}>Italy </option>
                            <option value="Norway " {{old('country',$candidate->country == "Norway")? "selected" : ""}}>Norway </option>
                            <option value="Portugal  " {{old('country',$candidate->country == "Portugal")? "selected" : ""}}>Portugal </option>
                            <option value="Republic of Ireland  " {{old('country',$candidate->country == "Republic of Ireland")? "selected" : ""}}>Republic
                                of
                                Ireland </option>
                            <option value="Singapore  " {{old('country',$candidate->country == "Singapore")? "selected" : ""}}>Singapore </option>
                            <option value="Spain " {{old('country',$candidate->country == "Spain")? "selected" : ""}}>Spain </option>
                            <option value="Sweden " {{old('country',$candidate->country == "Sweden")? "selected" : ""}}>Sweden </option>
                            <option value="Switzerland " {{old('country',$candidate->country == "Switzerland")? "selected" : ""}}>Switzerland
                            </option>
                            <option value="The Netherlands " {{old('country',$candidate->country == "The Netherlands")? "selected" : ""}}>The Netherlands
                            </option>
                            <option value="United States of America " {{old('country',$candidate->country == "United States of America")? "selected" : ""}}>United
                                States of America </option>
                            <option value="Afghanistan" {{old('country',$candidate->country == "Afghanistan")? "selected" : ""}}>Afghanistan</option>
                            <option value="Albania" {{old('country',$candidate->country == "Albania")? "selected" : ""}}>Albania</option>
                            <option value="Algeria" {{old('country',$candidate->country == "Algeria")? "selected" : ""}}>Algeria</option>
                            <option value="Andorra" {{old('country',$candidate->country == "Andorra")? "selected" : ""}}>Andorra</option>
                            <option value="Angola" {{old('country',$candidate->country == "Angola")? "selected" : ""}}>Angola</option>
                            <option value="Antigua and Barbuda" {{old('country',$candidate->country == "Antigua and Barbuda")? "selected" : ""}}>Antigua and
                                Barbuda</option>
                            <option value="Argentina" {{old('country',$candidate->country == "Argentina")? "selected" : ""}}>Argentina</option>
                            <option value="Armenia" {{old('country',$candidate->country == "Armenia")? "selected" : ""}}>Armenia</option>
                            <option value="Azerbaijan" {{old('country',$candidate->country == "Azerbaijan")? "selected" : ""}}>Azerbaijan</option>
                            <option value="The Bahamas" {{old('country',$candidate->country == "The Bahamas")? "selected" : ""}}>The Bahamas</option>
                            <option value="Bahrain" {{old('country',$candidate->country == "Bahrain")? "selected" : ""}}>Bahrain</option>
                            <option value="Bangladesh" {{old('country',$candidate->country == "Bangladesh")? "selected" : ""}}>Bangladesh</option>
                            <option value="Barbados" {{old('country',$candidate->country == "Barbados")? "selected" : ""}}>Barbados</option>
                            <option value="Belarus" {{old('country',$candidate->country == "Belarus")? "selected" : ""}}>Belarus</option>
                            <option value="Belize" {{old('country',$candidate->country == "Belize")? "selected" : ""}}>Belize</option>
                            <option value="Benin" {{old('country',$candidate->country == "Benin")? "selected" : ""}}>Benin</option>
                            <option value="Bhutan" {{old('country',$candidate->country == "Bhutan")? "selected" : ""}}>Bhutan</option>
                            <option value="Bolivia" {{old('country',$candidate->country == "Bolivia")? "selected" : ""}}>Bolivia</option>
                            <option value="Bosnia and Herzegovina" {{old('country',$candidate->country == "Bosnia and Herzegovina")? "selected" : ""}}>Bosnia
                                and
                                Herzegovina</option>
                            <option value="Botswana" {{old('country',$candidate->country == "Botswana")? "selected" : ""}}>Botswana</option>
                            <option value="Brazil" {{old('country',$candidate->country == "Brazil")? "selected" : ""}}>Brazil</option>
                            <option value="Brunei" {{old('country',$candidate->country == "Brunei")? "selected" : ""}}>Brunei</option>
                            <option value="Bulgaria" {{old('country',$candidate->country == "Bulgaria")? "selected" : ""}}>Bulgaria</option>
                            <option value="Burkina Faso" {{old('country',$candidate->country == "Burkina Faso")? "selected" : ""}}>Burkina Faso
                            </option>
                            <option value="Burundi" {{old('country',$candidate->country == "Burundi")? "selected" : ""}}>Burundi</option>
                            <option value="Cambodia" {{old('country',$candidate->country == "Cambodia")? "selected" : ""}}>Cambodia</option>
                            <option value="Cameroon" {{old('country',$candidate->country == "Cameroon")? "selected" : ""}}>Cameroon</option>
                            <option value="Cape Verde" {{old('country',$candidate->country == "Cape Verde")? "selected" : ""}}>Cape Verde</option>
                            <option value="Central African Republic" {{old('country',$candidate->country == "Central African Republic")? "selected" : ""}}>Central
                                African Republic</option>
                            <option value="Chad" {{old('country',$candidate->country == "Chad")? "selected" : ""}}>Chad</option>
                            <option value="Chile" {{old('country',$candidate->country == "Chile")? "selected" : ""}}>Chile</option>
                            <option value="China" {{old('country',$candidate->country == "China")? "selected" : ""}}>China</option>
                            <option value="Colombia" {{old('country',$candidate->country == "Colombia")? "selected" : ""}}>Colombia</option>
                            <option value="Comoros" {{old('country',$candidate->country == "Comoros")? "selected" : ""}}>Comoros</option>
                            <option value="Congo, Republic of the" {{old('country',$candidate->country == "Congo, Republic of the")? "selected" : ""}}>Congo,
                                Republic of the</option>
                            <option
                                value="Congo, Democratic Republic of the" {{old('country',$candidate->country == "Congo, Democratic Republic of the")? "selected" : ""}}>
                                Congo, Democratic Republic of the</option>
                            <option value="Costa Rica" {{old('country',$candidate->country == "Costa Rica")? "selected" : ""}}>Costa Rica</option>
                            <option value="Cote d-Ivoire" {{old('country',$candidate->country == "Cote d-Ivoire")? "selected" : ""}}>Cote d-Ivoire
                            </option>
                            <option value="Croatia" {{old('country',$candidate->country == "Croatia")? "selected" : ""}}>Croatia</option>
                            <option value="Cuba" {{old('country',$candidate->country == "Cuba")? "selected" : ""}}>Cuba</option>
                            <option value="Cyprus" {{old('country',$candidate->country == "Cyprus")? "selected" : ""}}>Cyprus</option>
                            <option value="Djibouti" {{old('country',$candidate->country == "Djibouti")? "selected" : ""}}>Djibouti</option>
                            <option value="Dominica" {{old('country',$candidate->country == "Dominica")? "selected" : ""}}>Dominica</option>
                            <option value="Dominican Republic" {{old('country',$candidate->country == "Dominican Republic")? "selected" : ""}}>Dominican
                                Republic</option>
                            <option value="East Timor (Timor-Leste)" {{old('country',$candidate->country == "East Timor (Timor-Leste)")? "selected" : ""}}>East
                                Timor
                                (Timor-Leste)</option>
                            <option value="Ecuador" {{old('country',$candidate->country == "Ecuador")? "selected" : ""}}>Ecuador</option>
                            <option value="Egypt" {{old('country',$candidate->country == "Egypt")? "selected" : ""}}>Egypt</option>
                            <option value="El Salvador" {{old('country',$candidate->country == "El Salvador")? "selected" : ""}}>El Salvador</option>
                            <option value="Equatorial Guinea" {{old('country',$candidate->country == "Equatorial Guinea")? "selected" : ""}}>Equatorial
                                Guinea
                            </option>
                            <option value="Eritrea" {{old('country',$candidate->country == "Eritrea")? "selected" : ""}}>Eritrea</option>
                            <option value="Estonia" {{old('country',$candidate->country == "Estonia")? "selected" : ""}}>Estonia</option>
                            <option value="Ethiopia" {{old('country',$candidate->country == "Ethiopia")? "selected" : ""}}>Ethiopia</option>
                            <option value="Fiji" {{old('country',$candidate->country == "Fiji")? "selected" : ""}}>Fiji</option>
                            <option value="Gabon" {{old('country',$candidate->country == "Gabon")? "selected" : ""}}>Gabon</option>
                            <option value="The Gambia" {{old('country',$candidate->country == "The Gambia")? "selected" : ""}}>The Gambia</option>
                            <option value="Georgia" {{old('country',$candidate->country == "Georgia")? "selected" : ""}}>Georgia</option>
                            <option value="Ghana" {{old('country',$candidate->country == "Ghana")? "selected" : ""}}>Ghana</option>
                            <option value="Grenada" {{old('country',$candidate->country == "Grenada")? "selected" : ""}}>Grenada</option>
                            <option value="Guatemala" {{old('country',$candidate->country == "Guatemala")? "selected" : ""}}>Guatemala</option>
                            <option value="Guinea" {{old('country',$candidate->country == "Guinea")? "selected" : ""}}>Guinea</option>
                            <option value="Guinea-Bissau" {{old('country',$candidate->country == "Guinea-Bissau")? "selected" : ""}}>Guinea-Bissau
                            </option>
                            <option value="Guyana" {{old('country',$candidate->country == "Guyana")? "selected" : ""}}>Guyana</option>
                            <option value="Haiti" {{old('country',$candidate->country == "Haiti")? "selected" : ""}}>Haiti</option>
                            <option value="Honduras" {{old('country',$candidate->country == "Honduras")? "selected" : ""}}>Honduras</option>
                            <option value="Hungary" {{old('country',$candidate->country == "Hungary")? "selected" : ""}}>Hungary</option>
                            <option value="India" {{old('country',$candidate->country == "India")? "selected" : ""}}>India</option>
                            <option value="Indonesia" {{old('country',$candidate->country == "Indonesia")? "selected" : ""}}>Indonesia</option>
                            <option value="Iran" {{old('country',$candidate->country == "Iran")? "selected" : ""}}>Iran</option>
                            <option value="Iraq" {{old('country',$candidate->country == "Iraq")? "selected" : ""}}>Iraq</option>
                            <option value="Ireland" {{old('country',$candidate->country == "Ireland")? "selected" : ""}}>Ireland</option>
                            <option value="Jamaica" {{old('country',$candidate->country == "Jamaica")? "selected" : ""}}>Jamaica</option>
                            <option value="Japan" {{old('country',$candidate->country == "Japan")? "selected" : ""}}>Japan</option>
                            <option value="Jordan" {{old('country',$candidate->country == "Jordan")? "selected" : ""}}>Jordan</option>
                            <option value="Kazakhstan" {{old('country',$candidate->country == "Kazakhstan")? "selected" : ""}}>Kazakhstan</option>
                            <option value="Kenya" {{old('country',$candidate->country == "Kenya")? "selected" : ""}}>Kenya</option>
                            <option value="Kiribati" {{old('country',$candidate->country == "Kiribati")? "selected" : ""}}>Kiribati</option>
                            <option value="Korea, North" {{old('country',$candidate->country == "Korea, North")? "selected" : ""}}>Korea, North
                            </option>
                            <option value="Korea, South" {{old('country',$candidate->country == "Korea, South")? "selected" : ""}}>Korea, South
                            </option>
                            <option value="Kosovo" {{old('country',$candidate->country == "Kosovo")? "selected" : ""}}>Kosovo</option>
                            <option value="Kuwait" {{old('country',$candidate->country == "Kuwait")? "selected" : ""}}>Kuwait</option>
                            <option value="Kyrgyzstan" {{old('country',$candidate->country == "Kyrgyzstan")? "selected" : ""}}>Kyrgyzstan</option>
                            <option value="Laos" {{old('country',$candidate->country == "Laos")? "selected" : ""}}>Laos</option>
                            <option value="Latvia" {{old('country',$candidate->country == "Latvia")? "selected" : ""}}>Latvia</option>
                            <option value="Lebanon" {{old('country',$candidate->country == "Lebanon")? "selected" : ""}}>Lebanon</option>
                            <option value="Lesotho" {{old('country',$candidate->country == "Lesotho")? "selected" : ""}}>Lesotho</option>
                            <option value="Liberia" {{old('country',$candidate->country == "Liberia")? "selected" : ""}}>Liberia</option>
                            <option value="Libya" {{old('country',$candidate->country == "Libya")? "selected" : ""}}>Libya</option>
                            <option value="Liechtenstein" {{old('country',$candidate->country == "Liechtenstein")? "selected" : ""}}>Liechtenstein
                            </option>
                            <option value="Lithuania" {{old('country',$candidate->country == "Lithuania")? "selected" : ""}}>Lithuania</option>
                            <option value="Luxembourg" {{old('country',$candidate->country == "Luxembourg")? "selected" : ""}}>Luxembourg</option>
                            <option value="Macedonia" {{old('country',$candidate->country == "Macedonia")? "selected" : ""}}>Macedonia</option>
                            <option value="Madagascar" {{old('country',$candidate->country == "Madagascar")? "selected" : ""}}>Madagascar</option>
                            <option value="Malawi" {{old('country',$candidate->country == "Malawi")? "selected" : ""}}>Malawi</option>
                            <option value="Malaysia" {{old('country',$candidate->country == "Malaysia")? "selected" : ""}}>Malaysia</option>
                            <option value="Maldives" {{old('country',$candidate->country == "Maldives")? "selected" : ""}}>Maldives</option>
                            <option value="Mali" {{old('country',$candidate->country == "Mali")? "selected" : ""}}>Mali</option>
                            <option value="Malta" {{old('country',$candidate->country == "Malta")? "selected" : ""}}>Malta</option>
                            <option value="Marshall Islands" {{old('country',$candidate->country == "Marshall Islands")? "selected" : ""}}>Marshall
                                Islands
                            </option>
                            <option value="Mauritania" {{old('country',$candidate->country == "Mauritania")? "selected" : ""}}>Mauritania</option>
                            <option value="Mauritius" {{old('country',$candidate->country == "Mauritius")? "selected" : ""}}>Mauritius</option>
                            <option value="Mexico" {{old('country',$candidate->country == "Mexico")? "selected" : ""}}>Mexico</option>
                            <option value="Micronesia, Federated States of" {{old('country',$candidate->country == "Micronesia, Federated States of")? "selected" : ""}}>
                                Micronesia, Federated States of</option>
                            <option value="Moldova" {{old('country',$candidate->country == "Moldova")? "selected" : ""}}>Moldova</option>
                            <option value="Monaco" {{old('country',$candidate->country == "Monaco")? "selected" : ""}}>Monaco</option>
                            <option value="Mongolia" {{old('country',$candidate->country == "Mongolia")? "selected" : ""}}>Mongolia</option>
                            <option value="Montenegro" {{old('country',$candidate->country == "Montenegro")? "selected" : ""}}>Montenegro</option>
                            <option value="Morocco" {{old('country',$candidate->country == "Morocco")? "selected" : ""}}>Morocco</option>
                            <option value="Mozambique" {{old('country',$candidate->country == "Mozambique")? "selected" : ""}}>Mozambique</option>
                            <option value="Myanmar (Burma)" {{old('country',$candidate->country == "Myanmar (Burma)")? "selected" : ""}}>Myanmar (Burma)
                            </option>
                            <option value="Namibia" {{old('country',$candidate->country == "Namibia")? "selected" : ""}}>Namibia</option>
                            <option value="Nauru" {{old('country',$candidate->country == "Nauru")? "selected" : ""}}>Nauru</option>
                            <option value="Nepal" {{old('country',$candidate->country == "Nepal")? "selected" : ""}}>Nepal</option>
                            <option value="Nicaragua" {{old('country',$candidate->country == "Nicaragua")? "selected" : ""}}>Nicaragua</option>
                            <option value="Niger" {{old('country',$candidate->country == "Niger")? "selected" : ""}}>Niger</option>
                            <option value="Nigeria" {{old('country',$candidate->country == "Nigeria")? "selected" : ""}}>Nigeria</option>
                            <option value="Oman" {{old('country',$candidate->country == "Oman")? "selected" : ""}}>Oman</option>
                            <option value="Pakistan" {{old('country',$candidate->country == "Pakistan")? "selected" : ""}}>Pakistan</option>
                            <option value="Palau" {{old('country',$candidate->country == "Palau")? "selected" : ""}}>Palau</option>
                            <option value="Panama" {{old('country',$candidate->country == "Panama")? "selected" : ""}}>Panama</option>
                            <option value="Papua New Guinea" {{old('country',$candidate->country == "Papua New Guinea")? "selected" : ""}}>Papua New
                                Guinea
                            </option>
                            <option value="Paraguay" {{old('country',$candidate->country == "Paraguay")? "selected" : ""}}>Paraguay</option>
                            <option value="Peru" {{old('country',$candidate->country == "Peru")? "selected" : ""}}>Peru</option>
                            <option value="Philippines" {{old('country',$candidate->country == "Philippines")? "selected" : ""}}>Philippines</option>
                            <option value="Poland" {{old('country',$candidate->country == "Poland")? "selected" : ""}}>Poland</option>
                            <option value="Qatar" {{old('country',$candidate->country == "Qatar")? "selected" : ""}}>Qatar</option>
                            <option value="Romania" {{old('country',$candidate->country == "Romania")? "selected" : ""}}>Romania</option>
                            <option value="Russia" {{old('country',$candidate->country == "Russia")? "selected" : ""}}>Russia</option>
                            <option value="Rwanda" {{old('country',$candidate->country == "Rwanda")? "selected" : ""}}>Rwanda</option>
                            <option value="Saint Kitts and Nevis" {{old('country',$candidate->country == "Saint Kitts and Nevis")? "selected" : ""}}>Saint
                                Kitts
                                and Nevis</option>
                            <option value="Saint Lucia" {{old('country',$candidate->country == "Saint Lucia")? "selected" : ""}}>Saint Lucia</option>
                            <option
                                value="Saint Vincent and the Grenadines" {{old('country',$candidate->country == "Saint Vincent and the Grenadines")? "selected" : ""}}>
                                Saint Vincent and the Grenadines</option>
                            <option value="Samoa" {{old('country',$candidate->country == "Samoa")? "selected" : ""}}>Samoa</option>
                            <option value="San Marino" {{old('country',$candidate->country == "San Marino")? "selected" : ""}}>San Marino</option>
                            <option value="Sao Tome and Principe" {{old('country',$candidate->country == "Sao Tome and Principe")? "selected" : ""}}>Sao Tome
                                and
                                Principe</option>
                            <option value="Saudi Arabia" {{old('country',$candidate->country == "Saudi Arabia")? "selected" : ""}}>Saudi Arabia
                            </option>
                            <option value="Senegal" {{old('country',$candidate->country == "Senegal")? "selected" : ""}}>Senegal</option>
                            <option value="Serbia" {{old('country',$candidate->country == "Serbia")? "selected" : ""}}>Serbia</option>
                            <option value="Seychelles" {{old('country',$candidate->country == "Seychelles")? "selected" : ""}}>Seychelles</option>
                            <option value="Sierra Leone" {{old('country',$candidate->country == "Sierra Leone")? "selected" : ""}}>Sierra Leone
                            </option>
                            <option value="Slovakia" {{old('country',$candidate->country == "Slovakia")? "selected" : ""}}>Slovakia</option>
                            <option value="Slovenia" {{old('country',$candidate->country == "Slovenia")? "selected" : ""}}>Slovenia</option>
                            <option value="Solomon Islands" {{old('country',$candidate->country == "Solomon Islands")? "selected" : ""}}>Solomon Islands
                            </option>
                            <option value="Somalia" {{old('country',$candidate->country == "Somalia")? "selected" : ""}}>Somalia</option>
                            <option value="South Africa" {{old('country',$candidate->country == "South Africa")? "selected" : ""}}>South Africa
                            </option>
                            <option value="South Sudan" {{old('country',$candidate->country == "South Sudan")? "selected" : ""}}>South Sudan</option>
                            <option value="Sri Lanka" {{old('country',$candidate->country == "Sri Lanka")? "selected" : ""}}>Sri Lanka</option>
                            <option value="Sudan" {{old('country',$candidate->country == "Sudan")? "selected" : ""}}>Sudan</option>
                            <option value="Suriname" {{old('country',$candidate->country == "Suriname")? "selected" : ""}}>Suriname</option>
                            <option value="Swaziland" {{old('country',$candidate->country == "Swaziland")? "selected" : ""}}>Swaziland</option>
                            <option value="Syria" {{old('country',$candidate->country == "Syria")? "selected" : ""}}>Syria</option>
                            <option value="Taiwan" {{old('country',$candidate->country == "Taiwan")? "selected" : ""}}>Taiwan</option>
                            <option value="Tajikistan" {{old('country',$candidate->country == "Tajikistan")? "selected" : ""}}>Tajikistan</option>
                            <option value="Tanzania" {{old('country',$candidate->country == "Tanzania")? "selected" : ""}}>Tanzania</option>
                            <option value="Thailand" {{old('country',$candidate->country == "Thailand")? "selected" : ""}}>Thailand</option>
                            <option value="Togo" {{old('country',$candidate->country == "Togo")? "selected" : ""}}>Togo</option>
                            <option value="Tonga" {{old('country',$candidate->country == "Tonga")? "selected" : ""}}>Tonga</option>
                            <option value="Trinidad and Tobago" {{old('country',$candidate->country == "Trinidad and Tobago")? "selected" : ""}}>Trinidad and
                                Tobago</option>
                            <option value="Tunisia" {{old('country',$candidate->country == "Tunisia")? "selected" : ""}}>Tunisia</option>
                            <option value="Turkey" {{old('country',$candidate->country == "Turkey")? "selected" : ""}}>Turkey</option>
                            <option value="Turkmenistan" {{old('country',$candidate->country == "Turkmenistan")? "selected" : ""}}>Turkmenistan
                            </option>
                            <option value="Tuvalu" {{old('country',$candidate->country == "Tuvalu")? "selected" : ""}}>Tuvalu</option>
                            <option value="Uganda" {{old('country',$candidate->country == "Uganda")? "selected" : ""}}>Uganda</option>
                            <option value="Ukraine" {{old('country',$candidate->country == "Ukraine")? "selected" : ""}}>Ukraine</option>
                            <option value="United Arab Emirates" {{old('country',$candidate->country == "United Arab Emirates")? "selected" : ""}}>United Arab
                                Emirates</option>
                            <option value="Uruguay" {{old('country',$candidate->country == "Uruguay")? "selected" : ""}}>Uruguay</option>
                            <option value="Uzbekistan" {{old('country',$candidate->country == "Uzbekistan")? "selected" : ""}}>Uzbekistan</option>
                            <option value="Vanuatu" {{old('country',$candidate->country == "Vanuatu")? "selected" : ""}}>Vanuatu</option>
                            <option value="Vatican City (Holy See)" {{old('country',$candidate->country == "Vatican City (Holy See)")? "selected" : ""}}>Vatican
                                City
                                (Holy See)</option>
                            <option value="Venezuela" {{old('country',$candidate->country == "Venezuela")? "selected" : ""}}>Venezuela</option>
                            <option value="Vietnam" {{old('country',$candidate->country == "Vietnam")? "selected" : ""}}>Vietnam</option>
                            <option value="Yemen" {{old('country',$candidate->country == "Yemen")? "selected" : ""}}>Yemen</option>
                            <option value="Zambia" {{old('country',$candidate->country == "Zambia")? "selected" : ""}}>Zambia</option>
                            <option value="Zimbabwe" {{old('country',$candidate->country == "Zimbabwe")? "selected" : ""}}>Zimbabwe</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        State / Region / County
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                                name="state"
                                aria-label=".form-select-lg example">
                        <option value="New South Wales (NSW) " {{old('state',$candidate->state == "New South Wales (NSW)")? "selected" : ""}}>New South Wales (NSW) </option>
                        <option value="Australian Capital Territory (ACT)" {{old('state',$candidate->state == "Australian Capital Territory (ACT)")? "selected" : ""}}>Australian Capital Territory (ACT)</option>
                        <option value="South Australia (SA)" {{old('state',$candidate->state == "South Australia (SA)")? "selected" : ""}}>South Australia (SA)
                        </option>
                        <option value="Queensland (QLD)" {{old('state',$candidate->state == "Queensland (QLD)")? "selected" : ""}}>Queensland (QLD) </option>
                        <option value="Western Australia (WA)" {{old('state',$candidate->state == "Western Australia (WA)")? "selected" : ""}}>Western Australia (WA)</option>
                        <option value="Victoria (VIC)" {{old('state',$candidate->state == "Victoria (VIC)")? "selected" : ""}}>Victoria (VIC) </option>
                        <option value="Tasmania (TAS)" {{old('state',$candidate->state == "Tasmania (TAS)")? "selected" : ""}}>Tasmania (TAS)
                        </option>
                        <option value="Northern Territory (NT)" {{old('state',$candidate->state == "Northern Territory (NT)")? "selected" : ""}}>Northern Territory (NT) </option>
                        </select>
                        <i class="fas fa-sort-down"></i>


                    </td>
                </tr>
                <tr>
                    <th>
                        Post Code
                    </th>
                    <td class="padd-8">
                        <input type="text" value="{{old('post_code',$candidate->post_code)}}"
                            name="post_code">
                    </td>
                </tr>
                <tr>
                    <th>
                        Suburb/ Town
                    </th>
                    <td>
                    <select class="form-select form-select-lg mb-3"
                                name="town"
                                aria-label=".form-select-lg example">
                                <option value="one"{{old('town',$candidate->town == "one")? "selected" : ""}}>One</option>
                                <option value="two"{{old('town',$candidate->town == "two")? "selected" : ""}}>Two</option>
                                <option value="three"{{old('town',$candidate->town == "three")? "selected" : ""}}>Three</option>
                        </select>
                            <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Sub-Region/ District
                    </th>
                    <td>
                    <select class="form-select form-select-lg mb-3"
                                name="district"
                                aria-label=".form-select-lg example">
                                <option value="one"{{old('district',$candidate->district == "one")? "selected" : ""}}>One</option>
                                <option value="two"{{old('district',$candidate->district == "three")? "selected" : ""}}>Two</option>
                                <option value="three"{{old('district',$candidate->district == "three")? "selected" : ""}}>Three</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Main City
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="main_city"
                            aria-label=".form-select-lg example">
                            <option value="Sydney " {{old('main_city',$candidate->main_city == "Sydney")? "selected" : ""}}>Sydney </option>
                            <option value="Coffs Harbour" {{old('main_city',$candidate->main_city == "Coffs Harbour")? "selected" : ""}}>Coffs Harbour</option>
                            <option value="Sunshine Coast" {{old('main_city',$candidate->main_city == "Sunshine Coast")? "selected" : ""}}>Sunshine Coast</option>
                            <option value="Central Coast" {{old('main_city',$candidate->main_city == "Central Coast")? "selected" : ""}}>Central Coast</option>
                            <option value="Cairns" {{old('main_city',$candidate->main_city == "Cairns")? "selected" : ""}}>Cairns</option>
                            <option value="Townsville" {{old('main_city',$candidate->main_city == "Townsville")? "selected" : ""}}>Townsville</option>
                            <option value="Ipswich" {{old('main_city',$candidate->main_city == "Ipswich")? "selected" : ""}}>Ipswich </option>
                            <option value="Penrith" {{old('main_city',$candidate->main_city == "Penrith")? "selected" : ""}}>Penrith</option>
                            <option value="New Castle" {{old('main_city',$candidate->main_city == "New Castle")? "selected" : ""}}>New Castle</option>
                            <option value="Hervey Bay" {{old('main_city',$candidate->main_city == "Hervey Bay")? "selected" : ""}}>Hervey Bay </option>
                            <option value="Geelong" {{old('main_city',$candidate->main_city == "Geelong")? "selected" : ""}}>Geelong </option>
                            <option value="Dubbo" {{old('main_city',$candidate->main_city == "Dubbo")? "selected" : ""}}>Dubbo </option>
                            <option value="Liverpool" {{old('main_city',$candidate->main_city == "Liverpool")? "selected" : ""}}>Liverpool </option>
                            <option value="Ballarat" {{old('main_city',$candidate->main_city == "Ballarat")? "selected" : ""}}>Ballarat </option>
                            <option value="Blue Mountains" {{old('main_city',$candidate->main_city == "Blue Mountains")? "selected" : ""}}>Blue Mountains </option>
                            <option value="Canberra" {{old('main_city',$candidate->main_city == "Canberra")? "selected" : ""}}>Canberra </option>
                            <option value="Hobart" {{old('main_city',$candidate->main_city == "Hobart")? "selected" : ""}}>Hobart </option>
                            <option value="Launceston" {{old('main_city',$candidate->main_city == "Launceston")? "selected" : ""}}>Launceston </option>
                            <option value="Bundaberg" {{old('main_city',$candidate->main_city == "Bundaberg")? "selected" : ""}}>Bundaberg </option>
                            <option value="Albury" {{old('main_city',$candidate->main_city == "Albury")? "selected" : ""}}>Albury </option>
                            <option value="Wangaratta " {{old('main_city',$candidate->main_city == "Wangaratta")? "selected" : ""}}>Wangaratta </option>
                            <option value="Wollongong " {{old('main_city',$candidate->main_city == "Wollongong")? "selected" : ""}}>Wollongong </option>
                            <option value="Bendigo " {{old('main_city',$candidate->main_city == "Bendigo")? "selected" : ""}}>Bendigo </option>
                            <option value="Grafton " {{old('main_city',$candidate->main_city == "Grafton")? "selected" : ""}}>Grafton </option>
                            <option value="Mackay " {{old('main_city',$candidate->main_city == "Mackay")? "selected" : ""}}>Mackay </option>
                            <option value="Darwin " {{old('main_city',$candidate->main_city == "Darwin")? "selected" : ""}}>Darwin </option>
                            <option value="Bunbury " {{old('main_city',$candidate->main_city == "Bunbury")? "selected" : ""}}>Bunbury </option>
                            <option value="Gladstone " {{old('main_city',$candidate->main_city == "Gladstone")? "selected" : ""}}>Gladstone </option>
                            <option value="Wagga Wagga " {{old('main_city',$candidate->main_city == "Wagga Wagga")? "selected" : ""}}>Wagga Wagga </option>
                            <option value="Toowoomba " {{old('main_city',$candidate->main_city == "Toowoomba")? "selected" : ""}}>Toowoomba </option>
                            <option value="Lismore " {{old('main_city',$candidate->main_city == "Lismore")? "selected" : ""}}>Lismore </option>
                            <option value="Campbelltown " {{old('main_city',$candidate->main_city == "Campbelltown")? "selected" : ""}}>Campbelltown </option>
                            <option value="Orange " {{old('main_city',$candidate->main_city == "Orange")? "selected" : ""}}>Orange </option>
                            <option value="Tamworth " {{old('main_city',$candidate->main_city == "Tamworth")? "selected" : ""}}>Tamworth </option>
                            <option value="Byron bay " {{old('main_city',$candidate->main_city == "Byron bay")? "selected" : ""}}>Byron bay </option>
                            <option value="Port Macquaire " {{old('main_city',$candidate->main_city == "Port Macquaire")? "selected" : ""}}>Port Macquaire </option>
                            <option value="Hills main_city Suburbs " {{old('main_city',$candidate->main_city == "Hills main_city Suburbs")? "selected" : ""}}>Hills main_city Suburbs </option>
                            <option value="Bathurst " {{old('main_city',$candidate->main_city == "Bathurst")? "selected" : ""}}>Bathurst </option>
                            <option value="Goulbun " {{old('main_city',$candidate->main_city == "Goulbun")? "selected" : ""}}>Goulbun </option>
                            <option value="Shepparton " {{old('main_city',$candidate->main_city == "Shepparton")? "selected" : ""}}>Shepparton </option>
                            <option value="Mildura " {{old('main_city',$candidate->main_city == "Mildura")? "selected" : ""}}>Mildura </option>
                            <option value="Katherine " {{old('main_city',$candidate->main_city == "Katherine")? "selected" : ""}}>Katherine </option>
                            <option value="South West " {{old('main_city',$candidate->main_city == "South West")? "selected" : ""}}>South West </option>
                            <option value="North West " {{old('main_city',$candidate->main_city == "North West")? "selected" : ""}}>North West </option>
                            <option value="Central West " {{old('main_city',$candidate->main_city == "Central West")? "selected" : ""}}>Central West </option>
                            <option value="Busselton " {{old('main_city',$candidate->main_city == "Busselton")? "selected" : ""}}>Busselton </option>
                            <option value="Gold Coast - North " {{old('main_city',$candidate->main_city == "tGold Coast - Northhree")? "selected" : ""}}>Gold Coast - North </option>
                            <option value="Gold Coast - South " {{old('main_city',$candidate->main_city == "Gold Coast - South")? "selected" : ""}}>Gold Coast - South </option>
                            <option value="North Adelaide " {{old('main_city',$candidate->main_city == "North Adelaide")? "selected" : ""}}>North Adelaide </option>
                            <option value="South Adelaide " {{old('main_city',$candidate->main_city == "South Adelaide")? "selected" : ""}}>South Adelaide </option>
                            <option value="Warragul " {{old('main_city',$candidate->main_city == "Warragul")? "selected" : ""}}>Warragul </option>
                            <option value="Sale " {{old('main_city',$candidate->main_city == "Sale")? "selected" : ""}}>Sale </option>
                            <option value="Bairnsdale " {{old('main_city',$candidate->main_city == "Bairnsdale")? "selected" : ""}}>Bairnsdale </option>
                            <option value="Philip Island " {{old('main_city',$candidate->main_city == "Philip Island")? "selected" : ""}}>Philip Island </option>
                            <option value="Moe " {{old('main_city',$candidate->main_city == "Moe")? "selected" : ""}}>Moe </option>
                            <option value="Mornington Penninsula " {{old('main_city',$candidate->main_city == "Mornington Penninsula")? "selected" : ""}}>Mornington Penninsula </option>
                            <option value="Kalgoorlie " {{old('main_city',$candidate->main_city == "Kalgoorlie")? "selected" : ""}}>Kalgoorlie </option>
                            <option value="Geraldton " {{old('main_city',$candidate->main_city == "Geraldton")? "selected" : ""}}>Geraldton </option>
                            <option value="Moonee " {{old('main_city',$candidate->main_city == "Moonee")? "selected" : ""}}>Moonee </option>
                            <option value="Morwell " {{old('main_city',$candidate->main_city == "Morwell")? "selected" : ""}}>Morwell </option>
                            <option value="San Jose " {{old('main_city',$candidate->main_city == "San Jose")? "selected" : ""}}>San Jose </option>
                            <option value="East Perth " {{old('main_city',$candidate->main_city == "East Perth")? "selected" : ""}}>East Perth </option>
                            <option value="Brisbane South  " {{old('main_city',$candidate->main_city == "Brisbane South")? "selected" : ""}}>Brisbane South  </option>
                            <option value="Rutherford " {{old('main_city',$candidate->main_city == "Rutherford")? "selected" : ""}}>Rutherford </option>
                            <option value="Eastern Melbour " {{old('main_city',$candidate->main_city == "Eastern Melbour")? "selected" : ""}}>Eastern Melbour </option>
                            <option value="Yarra " {{old('main_city',$candidate->main_city == "Yarra")? "selected" : ""}}>Yarra </option>
                            <option value="Port Pirie " {{old('main_city',$candidate->main_city == "Port Pirie")? "selected" : ""}}>Port Pirie </option>
                            <option value="Port Lincoln " {{old('main_city',$candidate->main_city == "Port Lincoln")? "selected" : ""}}>Port Lincoln </option>
                            <option value="Devonport " {{old('main_city',$candidate->main_city == "Devonport")? "selected" : ""}}>Devonport </option>
                            <option value="Alice Springs " {{old('main_city',$candidate->main_city == "Alice Springs")? "selected" : ""}}>Alice Springs </option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Distance to Main City
                    </th>
                    <td>
                        <input type="text" value="{{old('distance_to_main',$candidate->distance_to_main)}}"
                            name="distance_to_main">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Practise Licence Number
                    </th>
                    <td class="padd-8">
                    <input type="text" value="{{ $candidate->interview->practise_licence_number ?? old('practise_licence_number')}}" name="practise_licence_number">
                    </td>
                </tr>
                <tr>
                    <th>
                        Licence Board
                    </th>
                    <td class="padd-8">
                        <input type="text" value="{{ $candidate->interview->licence_board ?? old('licence_board')}}"
                            name="licence_board">
                    </td>
                </tr>
                <tr>
                    <th>
                        Registration/ License Type
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="license_type"
                            aria-label=".form-select-lg example">
                            <option
                                value="Eligible for General Registration" {{old('license_type',$candidate->license_type == "Eligible for General Registration")? "selected" : ""}}>
                                Eligible for General Registration </option>
                            <option
                                value="Eligible for Limited Registration " {{old('license_type',$candidate->license_type == "Eligible for Limited Registration")? "selected" : ""}}>
                                Eligible for Limited Registration </option>
                            <option
                                value="Eligible for Provisional Registration " {{old('license_type',$candidate->license_type == "Eligible for Provisional Registration")? "selected" : ""}}>
                                Eligible for Provisional Registration
                            </option>
                            <option value="General" {{old('license_type',$candidate->license_type == "General")? "selected" : ""}}>General</option>
                            <option value="Limited" {{old('license_type',$candidate->license_type == "Limited")? "selected" : ""}}>Limited</option>
                            <option value="Non-Practising Registration " {{old('license_type',$candidate->license_type == "Non-Practising Registration")? "selected" : ""}}>
                                Non-Practising Registration </option>
                            <option value="Not Applicable" {{old('license_type',$candidate->license_type == "Not Applicable")? "selected" : ""}}>Not Applicable
                            </option>
                            <option value="Provisional" {{old('license_type',$candidate->license_type == "Provisional")? "selected" : ""}}>Provisional</option>
                            <option value="Specialist" {{old('license_type',$candidate->license_type == "Specialist")? "selected" : ""}}>Specialist</option>
                            <option value="Student" {{old('license_type',$candidate->license_type == "Student")? "selected" : ""}}>Student</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Country of Primary Degree
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                                name="country_of_primary_degree"
                                aria-label=".form-select-lg example">
                            <option value="Australia " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Australia")? "selected" : ""}}>Australia </option>
                            <option value="New Zealand" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "New Zealand")? "selected" : ""}}>New Zealand</option>
                            <option value="United Kingdom " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "United Kingdom")? "selected" : ""}}>United Kingdom
                            </option>
                            <option value="Austria  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Austria")? "selected" : ""}}>Austria </option>
                            <option value="Belgium" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Belgium")? "selected" : ""}}>Belgium</option>
                            <option value="Canada " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Canada")? "selected" : ""}}>Canada </option>
                            <option value="Czech Republic  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Czech Republic")? "selected" : ""}}>Czech Republic
                            </option>
                            <option value="Denmark  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Denmark")? "selected" : ""}}>Denmark </option>
                            <option value="Finland  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Finland")? "selected" : ""}}>Finland </option>
                            <option value="France " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "France")? "selected" : ""}}>France </option>
                            <option value="Germany  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Germany")? "selected" : ""}}>Germany </option>
                            <option value="Greece" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Greece")? "selected" : ""}}>Greece</option>
                            <option value="Iceland " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Iceland")? "selected" : ""}}>Iceland </option>
                            <option value="Israel  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Israel")? "selected" : ""}}>Israel </option>
                            <option value="Italy " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Italy")? "selected" : ""}}>Italy </option>
                            <option value="Norway " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Norway")? "selected" : ""}}>Norway </option>
                            <option value="Portugal  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Portugal")? "selected" : ""}}>Portugal </option>
                            <option value="Republic of Ireland  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Republic of Ireland")? "selected" : ""}}>Republic
                                of
                                Ireland </option>
                            <option value="Singapore  " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Singapore")? "selected" : ""}}>Singapore </option>
                            <option value="Spain " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Spain")? "selected" : ""}}>Spain </option>
                            <option value="Sweden " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Sweden")? "selected" : ""}}>Sweden </option>
                            <option value="Switzerland " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Switzerland")? "selected" : ""}}>Switzerland
                            </option>
                            <option value="The Netherlands " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "The Netherlands")? "selected" : ""}}>The Netherlands
                            </option>
                            <option value="United States of America " {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "United States of America")? "selected" : ""}}>United
                                States of America </option>
                            <option value="Afghanistan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Afghanistan")? "selected" : ""}}>Afghanistan</option>
                            <option value="Albania" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Albania")? "selected" : ""}}>Albania</option>
                            <option value="Algeria" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Algeria")? "selected" : ""}}>Algeria</option>
                            <option value="Andorra" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Andorra")? "selected" : ""}}>Andorra</option>
                            <option value="Angola" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Angola")? "selected" : ""}}>Angola</option>
                            <option value="Antigua and Barbuda" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Antigua and Barbuda")? "selected" : ""}}>Antigua and
                                Barbuda</option>
                            <option value="Argentina" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Argentina")? "selected" : ""}}>Argentina</option>
                            <option value="Armenia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Armenia")? "selected" : ""}}>Armenia</option>
                            <option value="Azerbaijan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Azerbaijan")? "selected" : ""}}>Azerbaijan</option>
                            <option value="The Bahamas" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "The Bahamas")? "selected" : ""}}>The Bahamas</option>
                            <option value="Bahrain" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Bahrain")? "selected" : ""}}>Bahrain</option>
                            <option value="Bangladesh" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Bangladesh")? "selected" : ""}}>Bangladesh</option>
                            <option value="Barbados" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Barbados")? "selected" : ""}}>Barbados</option>
                            <option value="Belarus" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Belarus")? "selected" : ""}}>Belarus</option>
                            <option value="Belize" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Belize")? "selected" : ""}}>Belize</option>
                            <option value="Benin" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Benin")? "selected" : ""}}>Benin</option>
                            <option value="Bhutan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Bhutan")? "selected" : ""}}>Bhutan</option>
                            <option value="Bolivia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Bolivia")? "selected" : ""}}>Bolivia</option>
                            <option value="Bosnia and Herzegovina" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Bosnia and Herzegovina")? "selected" : ""}}>Bosnia
                                and
                                Herzegovina</option>
                            <option value="Botswana" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Botswana")? "selected" : ""}}>Botswana</option>
                            <option value="Brazil" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Brazil")? "selected" : ""}}>Brazil</option>
                            <option value="Brunei" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Brunei")? "selected" : ""}}>Brunei</option>
                            <option value="Bulgaria" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Bulgaria")? "selected" : ""}}>Bulgaria</option>
                            <option value="Burkina Faso" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Burkina Faso")? "selected" : ""}}>Burkina Faso
                            </option>
                            <option value="Burundi" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Burundi")? "selected" : ""}}>Burundi</option>
                            <option value="Cambodia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Cambodia")? "selected" : ""}}>Cambodia</option>
                            <option value="Cameroon" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Cameroon")? "selected" : ""}}>Cameroon</option>
                            <option value="Cape Verde" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Cape Verde")? "selected" : ""}}>Cape Verde</option>
                            <option value="Central African Republic" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Central African Republic")? "selected" : ""}}>Central
                                African Republic</option>
                            <option value="Chad" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Chad")? "selected" : ""}}>Chad</option>
                            <option value="Chile" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Chile")? "selected" : ""}}>Chile</option>
                            <option value="China" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "China")? "selected" : ""}}>China</option>
                            <option value="Colombia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Colombia")? "selected" : ""}}>Colombia</option>
                            <option value="Comoros" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Comoros")? "selected" : ""}}>Comoros</option>
                            <option value="Congo, Republic of the" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Congo, Republic of the")? "selected" : ""}}>Congo,
                                Republic of the</option>
                            <option
                                value="Congo, Democratic Republic of the" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Congo, Democratic Republic of the")? "selected" : ""}}>
                                Congo, Democratic Republic of the</option>
                            <option value="Costa Rica" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Costa Rica")? "selected" : ""}}>Costa Rica</option>
                            <option value="Cote d-Ivoire" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Cote d-Ivoire")? "selected" : ""}}>Cote d-Ivoire
                            </option>
                            <option value="Croatia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Croatia")? "selected" : ""}}>Croatia</option>
                            <option value="Cuba" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Cuba")? "selected" : ""}}>Cuba</option>
                            <option value="Cyprus" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Cyprus")? "selected" : ""}}>Cyprus</option>
                            <option value="Djibouti" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Djibouti")? "selected" : ""}}>Djibouti</option>
                            <option value="Dominica" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Dominica")? "selected" : ""}}>Dominica</option>
                            <option value="Dominican Republic" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Dominican Republic")? "selected" : ""}}>Dominican
                                Republic</option>
                            <option value="East Timor (Timor-Leste)" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "East Timor (Timor-Leste)")? "selected" : ""}}>East
                                Timor
                                (Timor-Leste)</option>
                            <option value="Ecuador" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Ecuador")? "selected" : ""}}>Ecuador</option>
                            <option value="Egypt" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Egypt")? "selected" : ""}}>Egypt</option>
                            <option value="El Salvador" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "El Salvador")? "selected" : ""}}>El Salvador</option>
                            <option value="Equatorial Guinea" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Equatorial Guinea")? "selected" : ""}}>Equatorial
                                Guinea
                            </option>
                            <option value="Eritrea" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Eritrea")? "selected" : ""}}>Eritrea</option>
                            <option value="Estonia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Estonia")? "selected" : ""}}>Estonia</option>
                            <option value="Ethiopia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Ethiopia")? "selected" : ""}}>Ethiopia</option>
                            <option value="Fiji" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Fiji")? "selected" : ""}}>Fiji</option>
                            <option value="Gabon" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Gabon")? "selected" : ""}}>Gabon</option>
                            <option value="The Gambia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "The Gambia")? "selected" : ""}}>The Gambia</option>
                            <option value="Georgia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Georgia")? "selected" : ""}}>Georgia</option>
                            <option value="Ghana" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Ghana")? "selected" : ""}}>Ghana</option>
                            <option value="Grenada" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Grenada")? "selected" : ""}}>Grenada</option>
                            <option value="Guatemala" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Guatemala")? "selected" : ""}}>Guatemala</option>
                            <option value="Guinea" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Guinea")? "selected" : ""}}>Guinea</option>
                            <option value="Guinea-Bissau" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Guinea-Bissau")? "selected" : ""}}>Guinea-Bissau
                            </option>
                            <option value="Guyana" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Guyana")? "selected" : ""}}>Guyana</option>
                            <option value="Haiti" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Haiti")? "selected" : ""}}>Haiti</option>
                            <option value="Honduras" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Honduras")? "selected" : ""}}>Honduras</option>
                            <option value="Hungary" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Hungary")? "selected" : ""}}>Hungary</option>
                            <option value="India" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "India")? "selected" : ""}}>India</option>
                            <option value="Indonesia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Indonesia")? "selected" : ""}}>Indonesia</option>
                            <option value="Iran" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Iran")? "selected" : ""}}>Iran</option>
                            <option value="Iraq" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Iraq")? "selected" : ""}}>Iraq</option>
                            <option value="Ireland" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Ireland")? "selected" : ""}}>Ireland</option>
                            <option value="Jamaica" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Jamaica")? "selected" : ""}}>Jamaica</option>
                            <option value="Japan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Japan")? "selected" : ""}}>Japan</option>
                            <option value="Jordan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Jordan")? "selected" : ""}}>Jordan</option>
                            <option value="Kazakhstan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Kazakhstan")? "selected" : ""}}>Kazakhstan</option>
                            <option value="Kenya" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Kenya")? "selected" : ""}}>Kenya</option>
                            <option value="Kiribati" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Kiribati")? "selected" : ""}}>Kiribati</option>
                            <option value="Korea, North" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Korea, North")? "selected" : ""}}>Korea, North
                            </option>
                            <option value="Korea, South" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Korea, South")? "selected" : ""}}>Korea, South
                            </option>
                            <option value="Kosovo" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Kosovo")? "selected" : ""}}>Kosovo</option>
                            <option value="Kuwait" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Kuwait")? "selected" : ""}}>Kuwait</option>
                            <option value="Kyrgyzstan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Kyrgyzstan")? "selected" : ""}}>Kyrgyzstan</option>
                            <option value="Laos" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Laos")? "selected" : ""}}>Laos</option>
                            <option value="Latvia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Latvia")? "selected" : ""}}>Latvia</option>
                            <option value="Lebanon" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Lebanon")? "selected" : ""}}>Lebanon</option>
                            <option value="Lesotho" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Lesotho")? "selected" : ""}}>Lesotho</option>
                            <option value="Liberia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Liberia")? "selected" : ""}}>Liberia</option>
                            <option value="Libya" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Libya")? "selected" : ""}}>Libya</option>
                            <option value="Liechtenstein" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Liechtenstein")? "selected" : ""}}>Liechtenstein
                            </option>
                            <option value="Lithuania" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Lithuania")? "selected" : ""}}>Lithuania</option>
                            <option value="Luxembourg" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Luxembourg")? "selected" : ""}}>Luxembourg</option>
                            <option value="Macedonia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Macedonia")? "selected" : ""}}>Macedonia</option>
                            <option value="Madagascar" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Madagascar")? "selected" : ""}}>Madagascar</option>
                            <option value="Malawi" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Malawi")? "selected" : ""}}>Malawi</option>
                            <option value="Malaysia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Malaysia")? "selected" : ""}}>Malaysia</option>
                            <option value="Maldives" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Maldives")? "selected" : ""}}>Maldives</option>
                            <option value="Mali" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Mali")? "selected" : ""}}>Mali</option>
                            <option value="Malta" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Malta")? "selected" : ""}}>Malta</option>
                            <option value="Marshall Islands" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Marshall Islands")? "selected" : ""}}>Marshall
                                Islands
                            </option>
                            <option value="Mauritania" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Mauritania")? "selected" : ""}}>Mauritania</option>
                            <option value="Mauritius" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Mauritius")? "selected" : ""}}>Mauritius</option>
                            <option value="Mexico" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Mexico")? "selected" : ""}}>Mexico</option>
                            <option value="Micronesia, Federated States of" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Micronesia, Federated States of")? "selected" : ""}}>
                                Micronesia, Federated States of</option>
                            <option value="Moldova" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Moldova")? "selected" : ""}}>Moldova</option>
                            <option value="Monaco" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Monaco")? "selected" : ""}}>Monaco</option>
                            <option value="Mongolia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Mongolia")? "selected" : ""}}>Mongolia</option>
                            <option value="Montenegro" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Montenegro")? "selected" : ""}}>Montenegro</option>
                            <option value="Morocco" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Morocco")? "selected" : ""}}>Morocco</option>
                            <option value="Mozambique" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Mozambique")? "selected" : ""}}>Mozambique</option>
                            <option value="Myanmar (Burma)" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Myanmar (Burma)")? "selected" : ""}}>Myanmar (Burma)
                            </option>
                            <option value="Namibia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Namibia")? "selected" : ""}}>Namibia</option>
                            <option value="Nauru" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Nauru")? "selected" : ""}}>Nauru</option>
                            <option value="Nepal" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Nepal")? "selected" : ""}}>Nepal</option>
                            <option value="Nicaragua" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Nicaragua")? "selected" : ""}}>Nicaragua</option>
                            <option value="Niger" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Niger")? "selected" : ""}}>Niger</option>
                            <option value="Nigeria" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Nigeria")? "selected" : ""}}>Nigeria</option>
                            <option value="Oman" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Oman")? "selected" : ""}}>Oman</option>
                            <option value="Pakistan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Pakistan")? "selected" : ""}}>Pakistan</option>
                            <option value="Palau" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Palau")? "selected" : ""}}>Palau</option>
                            <option value="Panama" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Panama")? "selected" : ""}}>Panama</option>
                            <option value="Papua New Guinea" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Papua New Guinea")? "selected" : ""}}>Papua New
                                Guinea
                            </option>
                            <option value="Paraguay" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Paraguay")? "selected" : ""}}>Paraguay</option>
                            <option value="Peru" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Peru")? "selected" : ""}}>Peru</option>
                            <option value="Philippines" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Philippines")? "selected" : ""}}>Philippines</option>
                            <option value="Poland" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Poland")? "selected" : ""}}>Poland</option>
                            <option value="Qatar" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Qatar")? "selected" : ""}}>Qatar</option>
                            <option value="Romania" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Romania")? "selected" : ""}}>Romania</option>
                            <option value="Russia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Russia")? "selected" : ""}}>Russia</option>
                            <option value="Rwanda" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Rwanda")? "selected" : ""}}>Rwanda</option>
                            <option value="Saint Kitts and Nevis" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Saint Kitts and Nevis")? "selected" : ""}}>Saint
                                Kitts
                                and Nevis</option>
                            <option value="Saint Lucia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Saint Lucia")? "selected" : ""}}>Saint Lucia</option>
                            <option
                                value="Saint Vincent and the Grenadines" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Saint Vincent and the Grenadines")? "selected" : ""}}>
                                Saint Vincent and the Grenadines</option>
                            <option value="Samoa" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Samoa")? "selected" : ""}}>Samoa</option>
                            <option value="San Marino" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "San Marino")? "selected" : ""}}>San Marino</option>
                            <option value="Sao Tome and Principe" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Sao Tome and Principe")? "selected" : ""}}>Sao Tome
                                and
                                Principe</option>
                            <option value="Saudi Arabia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Saudi Arabia")? "selected" : ""}}>Saudi Arabia
                            </option>
                            <option value="Senegal" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Senegal")? "selected" : ""}}>Senegal</option>
                            <option value="Serbia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Serbia")? "selected" : ""}}>Serbia</option>
                            <option value="Seychelles" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Seychelles")? "selected" : ""}}>Seychelles</option>
                            <option value="Sierra Leone" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Sierra Leone")? "selected" : ""}}>Sierra Leone
                            </option>
                            <option value="Slovakia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Slovakia")? "selected" : ""}}>Slovakia</option>
                            <option value="Slovenia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Slovenia")? "selected" : ""}}>Slovenia</option>
                            <option value="Solomon Islands" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Solomon Islands")? "selected" : ""}}>Solomon Islands
                            </option>
                            <option value="Somalia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Somalia")? "selected" : ""}}>Somalia</option>
                            <option value="South Africa" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "South Africa")? "selected" : ""}}>South Africa
                            </option>
                            <option value="South Sudan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "South Sudan")? "selected" : ""}}>South Sudan</option>
                            <option value="Sri Lanka" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Sri Lanka")? "selected" : ""}}>Sri Lanka</option>
                            <option value="Sudan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Sudan")? "selected" : ""}}>Sudan</option>
                            <option value="Suriname" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Suriname")? "selected" : ""}}>Suriname</option>
                            <option value="Swaziland" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Swaziland")? "selected" : ""}}>Swaziland</option>
                            <option value="Syria" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Syria")? "selected" : ""}}>Syria</option>
                            <option value="Taiwan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Taiwan")? "selected" : ""}}>Taiwan</option>
                            <option value="Tajikistan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Tajikistan")? "selected" : ""}}>Tajikistan</option>
                            <option value="Tanzania" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Tanzania")? "selected" : ""}}>Tanzania</option>
                            <option value="Thailand" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Thailand")? "selected" : ""}}>Thailand</option>
                            <option value="Togo" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Togo")? "selected" : ""}}>Togo</option>
                            <option value="Tonga" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Tonga")? "selected" : ""}}>Tonga</option>
                            <option value="Trinidad and Tobago" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Trinidad and Tobago")? "selected" : ""}}>Trinidad and
                                Tobago</option>
                            <option value="Tunisia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Tunisia")? "selected" : ""}}>Tunisia</option>
                            <option value="Turkey" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Turkey")? "selected" : ""}}>Turkey</option>
                            <option value="Turkmenistan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Turkmenistan")? "selected" : ""}}>Turkmenistan
                            </option>
                            <option value="Tuvalu" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Tuvalu")? "selected" : ""}}>Tuvalu</option>
                            <option value="Uganda" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Uganda")? "selected" : ""}}>Uganda</option>
                            <option value="Ukraine" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Ukraine")? "selected" : ""}}>Ukraine</option>
                            <option value="United Arab Emirates" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "United Arab Emirates")? "selected" : ""}}>United Arab
                                Emirates</option>
                            <option value="Uruguay" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Uruguay")? "selected" : ""}}>Uruguay</option>
                            <option value="Uzbekistan" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Uzbekistan")? "selected" : ""}}>Uzbekistan</option>
                            <option value="Vanuatu" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Vanuatu")? "selected" : ""}}>Vanuatu</option>
                            <option value="Vatican City (Holy See)" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Vatican City (Holy See)")? "selected" : ""}}>Vatican
                                City
                                (Holy See)</option>
                            <option value="Venezuela" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Venezuela")? "selected" : ""}}>Venezuela</option>
                            <option value="Vietnam" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Vietnam")? "selected" : ""}}>Vietnam</option>
                            <option value="Yemen" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Yemen")? "selected" : ""}}>Yemen</option>
                            <option value="Zambia" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Zambia")? "selected" : ""}}>Zambia</option>
                            <option value="Zimbabwe" {{old('country_of_primary_degree',$candidate->country_of_primary_degree == "Zimbabwe")? "selected" : ""}}>Zimbabwe</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Medical School
                    </th>
                    <td class="padd-8">
                        <input type="text"
                            value="{{old('medical_school',$candidate->medical_school)}}"
                            name="medical_school">

                    </td>
                </tr>

                <tr>
                    <th>
                        Practice Licensing Country
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                                name="practice_country"
                                aria-label=".form-select-lg example">
                                <option value="{{ $candidate->practice_country ?? '' }}" selected>{{ $candidate->practice_country ?? '' }} </option>
                            <option value="Australia " {{old('practice_country',$candidate->practice_country == "Australia")? "selected" : ""}}>Australia </option>
                            <option value="New Zealand" {{old('practice_country',$candidate->practice_country == "New Zealand")? "selected" : ""}}>New Zealand</option>
                            <option value="United Kingdom " {{old('practice_country',$candidate->practice_country == "United Kingdom")? "selected" : ""}}>United Kingdom
                            </option>
                            <option value="Austria  " {{old('practice_country',$candidate->practice_country == "Austria")? "selected" : ""}}>Austria </option>
                            <option value="Belgium" {{old('practice_country',$candidate->practice_country == "Belgium")? "selected" : ""}}>Belgium</option>
                            <option value="Canada " {{old('practice_country',$candidate->practice_country == "Canada")? "selected" : ""}}>Canada </option>
                            <option value="Czech Republic  " {{old('practice_country',$candidate->practice_country == "Czech Republic")? "selected" : ""}}>Czech Republic
                            </option>
                            <option value="Denmark  " {{old('practice_country',$candidate->practice_country == "Denmark")? "selected" : ""}}>Denmark </option>
                            <option value="Finland  " {{old('practice_country',$candidate->practice_country == "Finland")? "selected" : ""}}>Finland </option>
                            <option value="France " {{old('practice_country',$candidate->practice_country == "France")? "selected" : ""}}>France </option>
                            <option value="Germany  " {{old('practice_country',$candidate->practice_country == "Germany")? "selected" : ""}}>Germany </option>
                            <option value="Greece" {{old('practice_country',$candidate->practice_country == "Greece")? "selected" : ""}}>Greece</option>
                            <option value="Iceland " {{old('practice_country',$candidate->practice_country == "Iceland")? "selected" : ""}}>Iceland </option>
                            <option value="Israel  " {{old('practice_country',$candidate->practice_country == "Israel")? "selected" : ""}}>Israel </option>
                            <option value="Italy " {{old('practice_country',$candidate->practice_country == "Italy")? "selected" : ""}}>Italy </option>
                            <option value="Norway " {{old('practice_country',$candidate->practice_country == "Norway")? "selected" : ""}}>Norway </option>
                            <option value="Portugal  " {{old('practice_country',$candidate->practice_country == "Portugal")? "selected" : ""}}>Portugal </option>
                            <option value="Republic of Ireland  " {{old('practice_country',$candidate->practice_country == "Republic of Ireland")? "selected" : ""}}>Republic
                                of
                                Ireland </option>
                            <option value="Singapore  " {{old('practice_country',$candidate->practice_country == "Singapore")? "selected" : ""}}>Singapore </option>
                            <option value="Spain " {{old('practice_country',$candidate->practice_country == "Spain")? "selected" : ""}}>Spain </option>
                            <option value="Sweden " {{old('practice_country',$candidate->practice_country == "Sweden")? "selected" : ""}}>Sweden </option>
                            <option value="Switzerland " {{old('practice_country',$candidate->practice_country == "Switzerland")? "selected" : ""}}>Switzerland
                            </option>
                            <option value="The Netherlands " {{old('practice_country',$candidate->practice_country == "The Netherlands")? "selected" : ""}}>The Netherlands
                            </option>
                            <option value="United States of America " {{old('practice_country',$candidate->practice_country == "United States of America")? "selected" : ""}}>United
                                States of America </option>
                            <option value="Afghanistan" {{old('practice_country',$candidate->practice_country == "Afghanistan")? "selected" : ""}}>Afghanistan</option>
                            <option value="Albania" {{old('practice_country',$candidate->practice_country == "Albania")? "selected" : ""}}>Albania</option>
                            <option value="Algeria" {{old('practice_country',$candidate->practice_country == "Algeria")? "selected" : ""}}>Algeria</option>
                            <option value="Andorra" {{old('practice_country',$candidate->practice_country == "Andorra")? "selected" : ""}}>Andorra</option>
                            <option value="Angola" {{old('practice_country',$candidate->practice_country == "Angola")? "selected" : ""}}>Angola</option>
                            <option value="Antigua and Barbuda" {{old('practice_country',$candidate->practice_country == "Antigua and Barbuda")? "selected" : ""}}>Antigua and
                                Barbuda</option>
                            <option value="Argentina" {{old('practice_country',$candidate->practice_country == "Argentina")? "selected" : ""}}>Argentina</option>
                            <option value="Armenia" {{old('practice_country',$candidate->practice_country == "Armenia")? "selected" : ""}}>Armenia</option>
                            <option value="Azerbaijan" {{old('practice_country',$candidate->practice_country == "Azerbaijan")? "selected" : ""}}>Azerbaijan</option>
                            <option value="The Bahamas" {{old('practice_country',$candidate->practice_country == "The Bahamas")? "selected" : ""}}>The Bahamas</option>
                            <option value="Bahrain" {{old('practice_country',$candidate->practice_country == "Bahrain")? "selected" : ""}}>Bahrain</option>
                            <option value="Bangladesh" {{old('practice_country',$candidate->practice_country == "Bangladesh")? "selected" : ""}}>Bangladesh</option>
                            <option value="Barbados" {{old('practice_country',$candidate->practice_country == "Barbados")? "selected" : ""}}>Barbados</option>
                            <option value="Belarus" {{old('practice_country',$candidate->practice_country == "Belarus")? "selected" : ""}}>Belarus</option>
                            <option value="Belize" {{old('practice_country',$candidate->practice_country == "Belize")? "selected" : ""}}>Belize</option>
                            <option value="Benin" {{old('practice_country',$candidate->practice_country == "Benin")? "selected" : ""}}>Benin</option>
                            <option value="Bhutan" {{old('practice_country',$candidate->practice_country == "Bhutan")? "selected" : ""}}>Bhutan</option>
                            <option value="Bolivia" {{old('practice_country',$candidate->practice_country == "Bolivia")? "selected" : ""}}>Bolivia</option>
                            <option value="Bosnia and Herzegovina" {{old('practice_country',$candidate->practice_country == "Bosnia and Herzegovina")? "selected" : ""}}>Bosnia
                                and
                                Herzegovina</option>
                            <option value="Botswana" {{old('practice_country',$candidate->practice_country == "Botswana")? "selected" : ""}}>Botswana</option>
                            <option value="Brazil" {{old('practice_country',$candidate->practice_country == "Brazil")? "selected" : ""}}>Brazil</option>
                            <option value="Brunei" {{old('practice_country',$candidate->practice_country == "Brunei")? "selected" : ""}}>Brunei</option>
                            <option value="Bulgaria" {{old('practice_country',$candidate->practice_country == "Bulgaria")? "selected" : ""}}>Bulgaria</option>
                            <option value="Burkina Faso" {{old('practice_country',$candidate->practice_country == "Burkina Faso")? "selected" : ""}}>Burkina Faso
                            </option>
                            <option value="Burundi" {{old('practice_country',$candidate->practice_country == "Burundi")? "selected" : ""}}>Burundi</option>
                            <option value="Cambodia" {{old('practice_country',$candidate->practice_country == "Cambodia")? "selected" : ""}}>Cambodia</option>
                            <option value="Cameroon" {{old('practice_country',$candidate->practice_country == "Cameroon")? "selected" : ""}}>Cameroon</option>
                            <option value="Cape Verde" {{old('practice_country',$candidate->practice_country == "Cape Verde")? "selected" : ""}}>Cape Verde</option>
                            <option value="Central African Republic" {{old('practice_country',$candidate->practice_country == "Central African Republic")? "selected" : ""}}>Central
                                African Republic</option>
                            <option value="Chad" {{old('practice_country',$candidate->practice_country == "Chad")? "selected" : ""}}>Chad</option>
                            <option value="Chile" {{old('practice_country',$candidate->practice_country == "Chile")? "selected" : ""}}>Chile</option>
                            <option value="China" {{old('practice_country',$candidate->practice_country == "China")? "selected" : ""}}>China</option>
                            <option value="Colombia" {{old('practice_country',$candidate->practice_country == "Colombia")? "selected" : ""}}>Colombia</option>
                            <option value="Comoros" {{old('practice_country',$candidate->practice_country == "Comoros")? "selected" : ""}}>Comoros</option>
                            <option value="Congo, Republic of the" {{old('practice_country',$candidate->practice_country == "Congo, Republic of the")? "selected" : ""}}>Congo,
                                Republic of the</option>
                            <option
                                value="Congo, Democratic Republic of the" {{old('practice_country',$candidate->practice_country == "Congo, Democratic Republic of the")? "selected" : ""}}>
                                Congo, Democratic Republic of the</option>
                            <option value="Costa Rica" {{old('practice_country',$candidate->practice_country == "Costa Rica")? "selected" : ""}}>Costa Rica</option>
                            <option value="Cote d-Ivoire" {{old('practice_country',$candidate->practice_country == "Cote d-Ivoire")? "selected" : ""}}>Cote d-Ivoire
                            </option>
                            <option value="Croatia" {{old('practice_country',$candidate->practice_country == "Croatia")? "selected" : ""}}>Croatia</option>
                            <option value="Cuba" {{old('practice_country',$candidate->practice_country == "Cuba")? "selected" : ""}}>Cuba</option>
                            <option value="Cyprus" {{old('practice_country',$candidate->practice_country == "Cyprus")? "selected" : ""}}>Cyprus</option>
                            <option value="Djibouti" {{old('practice_country',$candidate->practice_country == "Djibouti")? "selected" : ""}}>Djibouti</option>
                            <option value="Dominica" {{old('practice_country',$candidate->practice_country == "Dominica")? "selected" : ""}}>Dominica</option>
                            <option value="Dominican Republic" {{old('practice_country',$candidate->practice_country == "Dominican Republic")? "selected" : ""}}>Dominican
                                Republic</option>
                            <option value="East Timor (Timor-Leste)" {{old('practice_country',$candidate->practice_country == "East Timor (Timor-Leste)")? "selected" : ""}}>East
                                Timor
                                (Timor-Leste)</option>
                            <option value="Ecuador" {{old('practice_country',$candidate->practice_country == "Ecuador")? "selected" : ""}}>Ecuador</option>
                            <option value="Egypt" {{old('practice_country',$candidate->practice_country == "Egypt")? "selected" : ""}}>Egypt</option>
                            <option value="El Salvador" {{old('practice_country',$candidate->practice_country == "El Salvador")? "selected" : ""}}>El Salvador</option>
                            <option value="Equatorial Guinea" {{old('practice_country',$candidate->practice_country == "Equatorial Guinea")? "selected" : ""}}>Equatorial
                                Guinea
                            </option>
                            <option value="Eritrea" {{old('practice_country',$candidate->practice_country == "Eritrea")? "selected" : ""}}>Eritrea</option>
                            <option value="Estonia" {{old('practice_country',$candidate->practice_country == "Estonia")? "selected" : ""}}>Estonia</option>
                            <option value="Ethiopia" {{old('practice_country',$candidate->practice_country == "Ethiopia")? "selected" : ""}}>Ethiopia</option>
                            <option value="Fiji" {{old('practice_country',$candidate->practice_country == "Fiji")? "selected" : ""}}>Fiji</option>
                            <option value="Gabon" {{old('practice_country',$candidate->practice_country == "Gabon")? "selected" : ""}}>Gabon</option>
                            <option value="The Gambia" {{old('practice_country',$candidate->practice_country == "The Gambia")? "selected" : ""}}>The Gambia</option>
                            <option value="Georgia" {{old('practice_country',$candidate->practice_country == "Georgia")? "selected" : ""}}>Georgia</option>
                            <option value="Ghana" {{old('practice_country',$candidate->practice_country == "Ghana")? "selected" : ""}}>Ghana</option>
                            <option value="Grenada" {{old('practice_country',$candidate->practice_country == "Grenada")? "selected" : ""}}>Grenada</option>
                            <option value="Guatemala" {{old('practice_country',$candidate->practice_country == "Guatemala")? "selected" : ""}}>Guatemala</option>
                            <option value="Guinea" {{old('practice_country',$candidate->practice_country == "Guinea")? "selected" : ""}}>Guinea</option>
                            <option value="Guinea-Bissau" {{old('practice_country',$candidate->practice_country == "Guinea-Bissau")? "selected" : ""}}>Guinea-Bissau
                            </option>
                            <option value="Guyana" {{old('practice_country',$candidate->practice_country == "Guyana")? "selected" : ""}}>Guyana</option>
                            <option value="Haiti" {{old('practice_country',$candidate->practice_country == "Haiti")? "selected" : ""}}>Haiti</option>
                            <option value="Honduras" {{old('practice_country',$candidate->practice_country == "Honduras")? "selected" : ""}}>Honduras</option>
                            <option value="Hungary" {{old('practice_country',$candidate->practice_country == "Hungary")? "selected" : ""}}>Hungary</option>
                            <option value="India" {{old('practice_country',$candidate->practice_country == "India")? "selected" : ""}}>India</option>
                            <option value="Indonesia" {{old('practice_country',$candidate->practice_country == "Indonesia")? "selected" : ""}}>Indonesia</option>
                            <option value="Iran" {{old('practice_country',$candidate->practice_country == "Iran")? "selected" : ""}}>Iran</option>
                            <option value="Iraq" {{old('practice_country',$candidate->practice_country == "Iraq")? "selected" : ""}}>Iraq</option>
                            <option value="Ireland" {{old('practice_country',$candidate->practice_country == "Ireland")? "selected" : ""}}>Ireland</option>
                            <option value="Jamaica" {{old('practice_country',$candidate->practice_country == "Jamaica")? "selected" : ""}}>Jamaica</option>
                            <option value="Japan" {{old('practice_country',$candidate->practice_country == "Japan")? "selected" : ""}}>Japan</option>
                            <option value="Jordan" {{old('practice_country',$candidate->practice_country == "Jordan")? "selected" : ""}}>Jordan</option>
                            <option value="Kazakhstan" {{old('practice_country',$candidate->practice_country == "Kazakhstan")? "selected" : ""}}>Kazakhstan</option>
                            <option value="Kenya" {{old('practice_country',$candidate->practice_country == "Kenya")? "selected" : ""}}>Kenya</option>
                            <option value="Kiribati" {{old('practice_country',$candidate->practice_country == "Kiribati")? "selected" : ""}}>Kiribati</option>
                            <option value="Korea, North" {{old('practice_country',$candidate->practice_country == "Korea, North")? "selected" : ""}}>Korea, North
                            </option>
                            <option value="Korea, South" {{old('practice_country',$candidate->practice_country == "Korea, South")? "selected" : ""}}>Korea, South
                            </option>
                            <option value="Kosovo" {{old('practice_country',$candidate->practice_country == "Kosovo")? "selected" : ""}}>Kosovo</option>
                            <option value="Kuwait" {{old('practice_country',$candidate->practice_country == "Kuwait")? "selected" : ""}}>Kuwait</option>
                            <option value="Kyrgyzstan" {{old('practice_country',$candidate->practice_country == "Kyrgyzstan")? "selected" : ""}}>Kyrgyzstan</option>
                            <option value="Laos" {{old('practice_country',$candidate->practice_country == "Laos")? "selected" : ""}}>Laos</option>
                            <option value="Latvia" {{old('practice_country',$candidate->practice_country == "Latvia")? "selected" : ""}}>Latvia</option>
                            <option value="Lebanon" {{old('practice_country',$candidate->practice_country == "Lebanon")? "selected" : ""}}>Lebanon</option>
                            <option value="Lesotho" {{old('practice_country',$candidate->practice_country == "Lesotho")? "selected" : ""}}>Lesotho</option>
                            <option value="Liberia" {{old('practice_country',$candidate->practice_country == "Liberia")? "selected" : ""}}>Liberia</option>
                            <option value="Libya" {{old('practice_country',$candidate->practice_country == "Libya")? "selected" : ""}}>Libya</option>
                            <option value="Liechtenstein" {{old('practice_country',$candidate->practice_country == "Liechtenstein")? "selected" : ""}}>Liechtenstein
                            </option>
                            <option value="Lithuania" {{old('practice_country',$candidate->practice_country == "Lithuania")? "selected" : ""}}>Lithuania</option>
                            <option value="Luxembourg" {{old('practice_country',$candidate->practice_country == "Luxembourg")? "selected" : ""}}>Luxembourg</option>
                            <option value="Macedonia" {{old('practice_country',$candidate->practice_country == "Macedonia")? "selected" : ""}}>Macedonia</option>
                            <option value="Madagascar" {{old('practice_country',$candidate->practice_country == "Madagascar")? "selected" : ""}}>Madagascar</option>
                            <option value="Malawi" {{old('practice_country',$candidate->practice_country == "Malawi")? "selected" : ""}}>Malawi</option>
                            <option value="Malaysia" {{old('practice_country',$candidate->practice_country == "Malaysia")? "selected" : ""}}>Malaysia</option>
                            <option value="Maldives" {{old('practice_country',$candidate->practice_country == "Maldives")? "selected" : ""}}>Maldives</option>
                            <option value="Mali" {{old('practice_country',$candidate->practice_country == "Mali")? "selected" : ""}}>Mali</option>
                            <option value="Malta" {{old('practice_country',$candidate->practice_country == "Malta")? "selected" : ""}}>Malta</option>
                            <option value="Marshall Islands" {{old('practice_country',$candidate->practice_country == "Marshall Islands")? "selected" : ""}}>Marshall
                                Islands
                            </option>
                            <option value="Mauritania" {{old('practice_country',$candidate->practice_country == "Mauritania")? "selected" : ""}}>Mauritania</option>
                            <option value="Mauritius" {{old('practice_country',$candidate->practice_country == "Mauritius")? "selected" : ""}}>Mauritius</option>
                            <option value="Mexico" {{old('practice_country',$candidate->practice_country == "Mexico")? "selected" : ""}}>Mexico</option>
                            <option value="Micronesia, Federated States of" {{old('practice_country',$candidate->practice_country == "Micronesia, Federated States of")? "selected" : ""}}>
                                Micronesia, Federated States of</option>
                            <option value="Moldova" {{old('practice_country',$candidate->practice_country == "Moldova")? "selected" : ""}}>Moldova</option>
                            <option value="Monaco" {{old('practice_country',$candidate->practice_country == "Monaco")? "selected" : ""}}>Monaco</option>
                            <option value="Mongolia" {{old('practice_country',$candidate->practice_country == "Mongolia")? "selected" : ""}}>Mongolia</option>
                            <option value="Montenegro" {{old('practice_country',$candidate->practice_country == "Montenegro")? "selected" : ""}}>Montenegro</option>
                            <option value="Morocco" {{old('practice_country',$candidate->practice_country == "Morocco")? "selected" : ""}}>Morocco</option>
                            <option value="Mozambique" {{old('practice_country',$candidate->practice_country == "Mozambique")? "selected" : ""}}>Mozambique</option>
                            <option value="Myanmar (Burma)" {{old('practice_country',$candidate->practice_country == "Myanmar (Burma)")? "selected" : ""}}>Myanmar (Burma)
                            </option>
                            <option value="Namibia" {{old('practice_country',$candidate->practice_country == "Namibia")? "selected" : ""}}>Namibia</option>
                            <option value="Nauru" {{old('practice_country',$candidate->practice_country == "Nauru")? "selected" : ""}}>Nauru</option>
                            <option value="Nepal" {{old('practice_country',$candidate->practice_country == "Nepal")? "selected" : ""}}>Nepal</option>
                            <option value="Nicaragua" {{old('practice_country',$candidate->practice_country == "Nicaragua")? "selected" : ""}}>Nicaragua</option>
                            <option value="Niger" {{old('practice_country',$candidate->practice_country == "Niger")? "selected" : ""}}>Niger</option>
                            <option value="Nigeria" {{old('practice_country',$candidate->practice_country == "Nigeria")? "selected" : ""}}>Nigeria</option>
                            <option value="Oman" {{old('practice_country',$candidate->practice_country == "Oman")? "selected" : ""}}>Oman</option>
                            <option value="Pakistan" {{old('practice_country',$candidate->practice_country == "Pakistan")? "selected" : ""}}>Pakistan</option>
                            <option value="Palau" {{old('practice_country',$candidate->practice_country == "Palau")? "selected" : ""}}>Palau</option>
                            <option value="Panama" {{old('practice_country',$candidate->practice_country == "Panama")? "selected" : ""}}>Panama</option>
                            <option value="Papua New Guinea" {{old('practice_country',$candidate->practice_country == "Papua New Guinea")? "selected" : ""}}>Papua New
                                Guinea
                            </option>
                            <option value="Paraguay" {{old('practice_country',$candidate->practice_country == "Paraguay")? "selected" : ""}}>Paraguay</option>
                            <option value="Peru" {{old('practice_country',$candidate->practice_country == "Peru")? "selected" : ""}}>Peru</option>
                            <option value="Philippines" {{old('practice_country',$candidate->practice_country == "Philippines")? "selected" : ""}}>Philippines</option>
                            <option value="Poland" {{old('practice_country',$candidate->practice_country == "Poland")? "selected" : ""}}>Poland</option>
                            <option value="Qatar" {{old('practice_country',$candidate->practice_country == "Qatar")? "selected" : ""}}>Qatar</option>
                            <option value="Romania" {{old('practice_country',$candidate->practice_country == "Romania")? "selected" : ""}}>Romania</option>
                            <option value="Russia" {{old('practice_country',$candidate->practice_country == "Russia")? "selected" : ""}}>Russia</option>
                            <option value="Rwanda" {{old('practice_country',$candidate->practice_country == "Rwanda")? "selected" : ""}}>Rwanda</option>
                            <option value="Saint Kitts and Nevis" {{old('practice_country',$candidate->practice_country == "Saint Kitts and Nevis")? "selected" : ""}}>Saint
                                Kitts
                                and Nevis</option>
                            <option value="Saint Lucia" {{old('practice_country',$candidate->practice_country == "Saint Lucia")? "selected" : ""}}>Saint Lucia</option>
                            <option
                                value="Saint Vincent and the Grenadines" {{old('practice_country',$candidate->practice_country == "Saint Vincent and the Grenadines")? "selected" : ""}}>
                                Saint Vincent and the Grenadines</option>
                            <option value="Samoa" {{old('practice_country',$candidate->practice_country == "Samoa")? "selected" : ""}}>Samoa</option>
                            <option value="San Marino" {{old('practice_country',$candidate->practice_country == "San Marino")? "selected" : ""}}>San Marino</option>
                            <option value="Sao Tome and Principe" {{old('practice_country',$candidate->practice_country == "Sao Tome and Principe")? "selected" : ""}}>Sao Tome
                                and
                                Principe</option>
                            <option value="Saudi Arabia" {{old('practice_country',$candidate->practice_country == "Saudi Arabia")? "selected" : ""}}>Saudi Arabia
                            </option>
                            <option value="Senegal" {{old('practice_country',$candidate->practice_country == "Senegal")? "selected" : ""}}>Senegal</option>
                            <option value="Serbia" {{old('practice_country',$candidate->practice_country == "Serbia")? "selected" : ""}}>Serbia</option>
                            <option value="Seychelles" {{old('practice_country',$candidate->practice_country == "Seychelles")? "selected" : ""}}>Seychelles</option>
                            <option value="Sierra Leone" {{old('practice_country',$candidate->practice_country == "Sierra Leone")? "selected" : ""}}>Sierra Leone
                            </option>
                            <option value="Slovakia" {{old('practice_country',$candidate->practice_country == "Slovakia")? "selected" : ""}}>Slovakia</option>
                            <option value="Slovenia" {{old('practice_country',$candidate->practice_country == "Slovenia")? "selected" : ""}}>Slovenia</option>
                            <option value="Solomon Islands" {{old('practice_country',$candidate->practice_country == "Solomon Islands")? "selected" : ""}}>Solomon Islands
                            </option>
                            <option value="Somalia" {{old('practice_country',$candidate->practice_country == "Somalia")? "selected" : ""}}>Somalia</option>
                            <option value="South Africa" {{old('practice_country',$candidate->practice_country == "South Africa")? "selected" : ""}}>South Africa
                            </option>
                            <option value="South Sudan" {{old('practice_country',$candidate->practice_country == "South Sudan")? "selected" : ""}}>South Sudan</option>
                            <option value="Sri Lanka" {{old('practice_country',$candidate->practice_country == "Sri Lanka")? "selected" : ""}}>Sri Lanka</option>
                            <option value="Sudan" {{old('practice_country',$candidate->practice_country == "Sudan")? "selected" : ""}}>Sudan</option>
                            <option value="Suriname" {{old('practice_country',$candidate->practice_country == "Suriname")? "selected" : ""}}>Suriname</option>
                            <option value="Swaziland" {{old('practice_country',$candidate->practice_country == "Swaziland")? "selected" : ""}}>Swaziland</option>
                            <option value="Syria" {{old('practice_country',$candidate->practice_country == "Syria")? "selected" : ""}}>Syria</option>
                            <option value="Taiwan" {{old('practice_country',$candidate->practice_country == "Taiwan")? "selected" : ""}}>Taiwan</option>
                            <option value="Tajikistan" {{old('practice_country',$candidate->practice_country == "Tajikistan")? "selected" : ""}}>Tajikistan</option>
                            <option value="Tanzania" {{old('practice_country',$candidate->practice_country == "Tanzania")? "selected" : ""}}>Tanzania</option>
                            <option value="Thailand" {{old('practice_country',$candidate->practice_country == "Thailand")? "selected" : ""}}>Thailand</option>
                            <option value="Togo" {{old('practice_country',$candidate->practice_country == "Togo")? "selected" : ""}}>Togo</option>
                            <option value="Tonga" {{old('practice_country',$candidate->practice_country == "Tonga")? "selected" : ""}}>Tonga</option>
                            <option value="Trinidad and Tobago" {{old('practice_country',$candidate->practice_country == "Trinidad and Tobago")? "selected" : ""}}>Trinidad and
                                Tobago</option>
                            <option value="Tunisia" {{old('practice_country',$candidate->practice_country == "Tunisia")? "selected" : ""}}>Tunisia</option>
                            <option value="Turkey" {{old('practice_country',$candidate->practice_country == "Turkey")? "selected" : ""}}>Turkey</option>
                            <option value="Turkmenistan" {{old('practice_country',$candidate->practice_country == "Turkmenistan")? "selected" : ""}}>Turkmenistan
                            </option>
                            <option value="Tuvalu" {{old('practice_country',$candidate->practice_country == "Tuvalu")? "selected" : ""}}>Tuvalu</option>
                            <option value="Uganda" {{old('practice_country',$candidate->practice_country == "Uganda")? "selected" : ""}}>Uganda</option>
                            <option value="Ukraine" {{old('practice_country',$candidate->practice_country == "Ukraine")? "selected" : ""}}>Ukraine</option>
                            <option value="United Arab Emirates" {{old('practice_country',$candidate->practice_country == "United Arab Emirates")? "selected" : ""}}>United Arab
                                Emirates</option>
                            <option value="Uruguay" {{old('practice_country',$candidate->practice_country == "Uruguay")? "selected" : ""}}>Uruguay</option>
                            <option value="Uzbekistan" {{old('practice_country',$candidate->practice_country == "Uzbekistan")? "selected" : ""}}>Uzbekistan</option>
                            <option value="Vanuatu" {{old('practice_country',$candidate->practice_country == "Vanuatu")? "selected" : ""}}>Vanuatu</option>
                            <option value="Vatican City (Holy See)" {{old('practice_country',$candidate->practice_country == "Vatican City (Holy See)")? "selected" : ""}}>Vatican
                                City
                                (Holy See)</option>
                            <option value="Venezuela" {{old('practice_country',$candidate->practice_country == "Venezuela")? "selected" : ""}}>Venezuela</option>
                            <option value="Vietnam" {{old('practice_country',$candidate->practice_country == "Vietnam")? "selected" : ""}}>Vietnam</option>
                            <option value="Yemen" {{old('practice_country',$candidate->practice_country == "Yemen")? "selected" : ""}}>Yemen</option>
                            <option value="Zambia" {{old('practice_country',$candidate->practice_country == "Zambia")? "selected" : ""}}>Zambia</option>
                            <option value="Zimbabwe" {{old('practice_country',$candidate->practice_country == "Zimbabwe")? "selected" : ""}}>Zimbabwe</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Practice Licensing Body
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="practice_licensing_body"
                            aria-label=".form-select-lg example">
                            <option value="AHPRA" {{old('practice_licensing_body',$candidate->practice_licensing_body == "AHPRA")? "selected" : ""}}>AHPRA</option>
                            <option value="GMC" {{old('practice_licensing_body',$candidate->practice_licensing_body == "GMC")? "selected" : ""}}>GMC</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Experience From Home Country
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="experience_from_home"
                            aria-label=".form-select-lg example">
                            <option value="1-3" {{old('experience_from_home',$candidate->experience_from_home == "1-3")? "selected" : ""}}>1-3</option>
                            <option value="3-5" {{old('experience_from_home',$candidate->experience_from_home == "3-5")? "selected" : ""}}>3-5</option>
                            <option value="5-10" {{old('experience_from_home',$candidate->experience_from_home == "5-10")? "selected" : ""}}>5-10</option>
                            <option value="Above 10" {{old('experience_from_home',$candidate->experience_from_home == "Above 10")? "selected" : ""}}>Above 10</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Experience From Residing Country
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="experience_from_residing"
                            aria-label=".form-select-lg example">
                            <option value="1-3" {{old('experience_from_residing',$candidate->experience_from_residing == "1-3")? "selected" : ""}}>1-3</option>
                            <option value="3-5" {{old('experience_from_residing',$candidate->experience_from_residing == "3-5")? "selected" : ""}}>3-5</option>
                            <option value="5-10" {{old('experience_from_residing',$candidate->experience_from_residing == "5-10")? "selected" : ""}}>5-10</option>
                            <option value="Above 10" {{old('experience_from_residing',$candidate->experience_from_residing == "Above 10")? "selected" : ""}}>Above 10</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Recognised Comparable Experience
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="recognised_comparable_experience"
                            aria-label=".form-select-lg example">
                            <option value="1-3" {{old('recognised_comparable_experience',$candidate->recognised_comparable_experience == "1-3")? "selected" : ""}}>1-3</option>
                            <option value="3-5" {{old('recognised_comparable_experience',$candidate->recognised_comparable_experience == "3-5")? "selected" : ""}}>3-5</option>
                            <option value="5-10" {{old('recognised_comparable_experience',$candidate->recognised_comparable_experience == "5-10")? "selected" : ""}}>5-10</option>
                            <option value="Above 10" {{old('recognised_comparable_experience',$candidate->recognised_comparable_experience == "Above 10")? "selected" : ""}}>Above 10</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Current Employment Status
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="current_employment_status"
                            aria-label=".form-select-lg example">
                            <option value="Employed" {{old('current_employment_status',$candidate->current_employment_status == "Employed")? "selected" : ""}}>Employed</option>
                            <option value="Non-employed" {{old('current_employment_status',$candidate->current_employment_status == "Non-employed")? "selected" : ""}}>Non-employed
                            </option>
                            <option value="Student" {{old('current_employment_status',$candidate->current_employment_status == "Student")? "selected" : ""}}>Student</option>
                            <option value="Paternity Break" {{old('current_employment_status',$candidate->current_employment_status == "Paternity Break")? "selected" : ""}}>Paternity Break
                            </option>
                            <option value="Maternity Break" {{old('current_employment_status',$candidate->current_employment_status == "Maternity Break")? "selected" : ""}}>Maternity Break
                            </option>
                            <option value="Redundant" {{old('current_employment_status',$candidate->current_employment_status == "Redundant")? "selected" : ""}}>Redundant</option>
                            <option value="Phase of Career Break" {{old('current_employment_status',$candidate->current_employment_status == "Phase of Career Break")? "selected" : ""}}>Phase of
                                Career Break</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Engagement Type
                    </th>
                    <td>
                        <select name="engagement_term" id="engagement_term" class="form-control">
                            <option value="Full Time" {{ old('engagement_term',$candidate->engagement_term =="Full Time")? "selected" : "" }} >Full Time</option>
                            <option value="Part Time" {{ old('engagement_term',$candidate->engagement_term =="Part Time")? "selected" : "" }} >Part Time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        Employment Term
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="employment_type"
                            aria-label=".form-select-lg example">
                            <option value="one" {{ old('employment_type',$candidate->employment_type =="one")? "selected" : "" }}>One</option>
                            <option value="two" {{ old('employment_type',$candidate->employment_type =="two")? "selected" : "" }}>Two</option>
                            <option value="three" {{ old('employment_type',$candidate->employment_type =="three")? "selected" : "" }}>Three</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Placement Type
                    </th>
                    <td>
                        <select name="placement_term" id="placement_term" class="form-control">
                            <option value="Introductory Placement  " {{ old('placement_term',$candidate->placement_term =="Introductory Placement  ")? "selected" : "" }} >Introductory Placement  </option>
                            <option value="Agency Work Force    " {{ old('placement_term',$candidate->placement_term =="Agency Work Force    ")? "selected" : "" }} >Agency Work Force    </option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Gross Salary Expectation
                    </th>
                    <td class="padd-8">
                        <input type="text" value="{{$candidate->interview->gross_salary ?? old('gross_salary')}}"
                            name="gross_salary">
                    </td>
                </tr>
                <tr>
                    <th>
                        Hourly Rate Expectation
                    </th>
                    <td class="padd-8">
                        <input type="text" value="{{$candidate->interview->hourly_rate_expectation ?? old('hourly_rate_expectation')}}"
                            name="hourly_rate_expectation">
                    </td>
                </tr>
                <tr>
                    <th>
                        Billing Share
                    </th>
                    <td class="padd-8">
                        <input type="text" value="{{$candidate->interview->billing_share ?? old('billing_share')}}"
                            name="billing_share">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Country of Citizenship
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                                name="country_of_citizenship"
                                aria-label=".form-select-lg example">
                            <option value="Australia " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Australia")? "selected" : ""}}>Australia </option>
                            <option value="New Zealand" {{old('country_of_citizenship',$candidate->country_of_citizenship == "New Zealand")? "selected" : ""}}>New Zealand</option>
                            <option value="United Kingdom " {{old('country_of_citizenship',$candidate->country_of_citizenship == "United Kingdom")? "selected" : ""}}>United Kingdom
                            </option>
                            <option value="Austria  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Austria")? "selected" : ""}}>Austria </option>
                            <option value="Belgium" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Belgium")? "selected" : ""}}>Belgium</option>
                            <option value="Canada " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Canada")? "selected" : ""}}>Canada </option>
                            <option value="Czech Republic  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Czech Republic")? "selected" : ""}}>Czech Republic
                            </option>
                            <option value="Denmark  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Denmark")? "selected" : ""}}>Denmark </option>
                            <option value="Finland  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Finland")? "selected" : ""}}>Finland </option>
                            <option value="France " {{old('country_of_citizenship',$candidate->country_of_citizenship == "France")? "selected" : ""}}>France </option>
                            <option value="Germany  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Germany")? "selected" : ""}}>Germany </option>
                            <option value="Greece" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Greece")? "selected" : ""}}>Greece</option>
                            <option value="Iceland " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Iceland")? "selected" : ""}}>Iceland </option>
                            <option value="Israel  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Israel")? "selected" : ""}}>Israel </option>
                            <option value="Italy " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Italy")? "selected" : ""}}>Italy </option>
                            <option value="Norway " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Norway")? "selected" : ""}}>Norway </option>
                            <option value="Portugal  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Portugal")? "selected" : ""}}>Portugal </option>
                            <option value="Republic of Ireland  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Republic of Ireland")? "selected" : ""}}>Republic
                                of
                                Ireland </option>
                            <option value="Singapore  " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Singapore")? "selected" : ""}}>Singapore </option>
                            <option value="Spain " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Spain")? "selected" : ""}}>Spain </option>
                            <option value="Sweden " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Sweden")? "selected" : ""}}>Sweden </option>
                            <option value="Switzerland " {{old('country_of_citizenship',$candidate->country_of_citizenship == "Switzerland")? "selected" : ""}}>Switzerland
                            </option>
                            <option value="The Netherlands " {{old('country_of_citizenship',$candidate->country_of_citizenship == "The Netherlands")? "selected" : ""}}>The Netherlands
                            </option>
                            <option value="United States of America " {{old('country_of_citizenship',$candidate->country_of_citizenship == "United States of America")? "selected" : ""}}>United
                                States of America </option>
                            <option value="Afghanistan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Afghanistan")? "selected" : ""}}>Afghanistan</option>
                            <option value="Albania" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Albania")? "selected" : ""}}>Albania</option>
                            <option value="Algeria" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Algeria")? "selected" : ""}}>Algeria</option>
                            <option value="Andorra" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Andorra")? "selected" : ""}}>Andorra</option>
                            <option value="Angola" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Angola")? "selected" : ""}}>Angola</option>
                            <option value="Antigua and Barbuda" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Antigua and Barbuda")? "selected" : ""}}>Antigua and
                                Barbuda</option>
                            <option value="Argentina" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Argentina")? "selected" : ""}}>Argentina</option>
                            <option value="Armenia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Armenia")? "selected" : ""}}>Armenia</option>
                            <option value="Azerbaijan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Azerbaijan")? "selected" : ""}}>Azerbaijan</option>
                            <option value="The Bahamas" {{old('country_of_citizenship',$candidate->country_of_citizenship == "The Bahamas")? "selected" : ""}}>The Bahamas</option>
                            <option value="Bahrain" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Bahrain")? "selected" : ""}}>Bahrain</option>
                            <option value="Bangladesh" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Bangladesh")? "selected" : ""}}>Bangladesh</option>
                            <option value="Barbados" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Barbados")? "selected" : ""}}>Barbados</option>
                            <option value="Belarus" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Belarus")? "selected" : ""}}>Belarus</option>
                            <option value="Belize" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Belize")? "selected" : ""}}>Belize</option>
                            <option value="Benin" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Benin")? "selected" : ""}}>Benin</option>
                            <option value="Bhutan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Bhutan")? "selected" : ""}}>Bhutan</option>
                            <option value="Bolivia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Bolivia")? "selected" : ""}}>Bolivia</option>
                            <option value="Bosnia and Herzegovina" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Bosnia and Herzegovina")? "selected" : ""}}>Bosnia
                                and
                                Herzegovina</option>
                            <option value="Botswana" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Botswana")? "selected" : ""}}>Botswana</option>
                            <option value="Brazil" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Brazil")? "selected" : ""}}>Brazil</option>
                            <option value="Brunei" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Brunei")? "selected" : ""}}>Brunei</option>
                            <option value="Bulgaria" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Bulgaria")? "selected" : ""}}>Bulgaria</option>
                            <option value="Burkina Faso" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Burkina Faso")? "selected" : ""}}>Burkina Faso
                            </option>
                            <option value="Burundi" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Burundi")? "selected" : ""}}>Burundi</option>
                            <option value="Cambodia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Cambodia")? "selected" : ""}}>Cambodia</option>
                            <option value="Cameroon" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Cameroon")? "selected" : ""}}>Cameroon</option>
                            <option value="Cape Verde" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Cape Verde")? "selected" : ""}}>Cape Verde</option>
                            <option value="Central African Republic" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Central African Republic")? "selected" : ""}}>Central
                                African Republic</option>
                            <option value="Chad" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Chad")? "selected" : ""}}>Chad</option>
                            <option value="Chile" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Chile")? "selected" : ""}}>Chile</option>
                            <option value="China" {{old('country_of_citizenship',$candidate->country_of_citizenship == "China")? "selected" : ""}}>China</option>
                            <option value="Colombia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Colombia")? "selected" : ""}}>Colombia</option>
                            <option value="Comoros" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Comoros")? "selected" : ""}}>Comoros</option>
                            <option value="Congo, Republic of the" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Congo, Republic of the")? "selected" : ""}}>Congo,
                                Republic of the</option>
                            <option
                                value="Congo, Democratic Republic of the" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Congo, Democratic Republic of the")? "selected" : ""}}>
                                Congo, Democratic Republic of the</option>
                            <option value="Costa Rica" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Costa Rica")? "selected" : ""}}>Costa Rica</option>
                            <option value="Cote d-Ivoire" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Cote d-Ivoire")? "selected" : ""}}>Cote d-Ivoire
                            </option>
                            <option value="Croatia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Croatia")? "selected" : ""}}>Croatia</option>
                            <option value="Cuba" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Cuba")? "selected" : ""}}>Cuba</option>
                            <option value="Cyprus" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Cyprus")? "selected" : ""}}>Cyprus</option>
                            <option value="Djibouti" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Djibouti")? "selected" : ""}}>Djibouti</option>
                            <option value="Dominica" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Dominica")? "selected" : ""}}>Dominica</option>
                            <option value="Dominican Republic" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Dominican Republic")? "selected" : ""}}>Dominican
                                Republic</option>
                            <option value="East Timor (Timor-Leste)" {{old('country_of_citizenship',$candidate->country_of_citizenship == "East Timor (Timor-Leste)")? "selected" : ""}}>East
                                Timor
                                (Timor-Leste)</option>
                            <option value="Ecuador" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Ecuador")? "selected" : ""}}>Ecuador</option>
                            <option value="Egypt" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Egypt")? "selected" : ""}}>Egypt</option>
                            <option value="El Salvador" {{old('country_of_citizenship',$candidate->country_of_citizenship == "El Salvador")? "selected" : ""}}>El Salvador</option>
                            <option value="Equatorial Guinea" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Equatorial Guinea")? "selected" : ""}}>Equatorial
                                Guinea
                            </option>
                            <option value="Eritrea" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Eritrea")? "selected" : ""}}>Eritrea</option>
                            <option value="Estonia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Estonia")? "selected" : ""}}>Estonia</option>
                            <option value="Ethiopia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Ethiopia")? "selected" : ""}}>Ethiopia</option>
                            <option value="Fiji" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Fiji")? "selected" : ""}}>Fiji</option>
                            <option value="Gabon" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Gabon")? "selected" : ""}}>Gabon</option>
                            <option value="The Gambia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "The Gambia")? "selected" : ""}}>The Gambia</option>
                            <option value="Georgia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Georgia")? "selected" : ""}}>Georgia</option>
                            <option value="Ghana" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Ghana")? "selected" : ""}}>Ghana</option>
                            <option value="Grenada" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Grenada")? "selected" : ""}}>Grenada</option>
                            <option value="Guatemala" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Guatemala")? "selected" : ""}}>Guatemala</option>
                            <option value="Guinea" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Guinea")? "selected" : ""}}>Guinea</option>
                            <option value="Guinea-Bissau" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Guinea-Bissau")? "selected" : ""}}>Guinea-Bissau
                            </option>
                            <option value="Guyana" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Guyana")? "selected" : ""}}>Guyana</option>
                            <option value="Haiti" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Haiti")? "selected" : ""}}>Haiti</option>
                            <option value="Honduras" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Honduras")? "selected" : ""}}>Honduras</option>
                            <option value="Hungary" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Hungary")? "selected" : ""}}>Hungary</option>
                            <option value="India" {{old('country_of_citizenship',$candidate->country_of_citizenship == "India")? "selected" : ""}}>India</option>
                            <option value="Indonesia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Indonesia")? "selected" : ""}}>Indonesia</option>
                            <option value="Iran" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Iran")? "selected" : ""}}>Iran</option>
                            <option value="Iraq" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Iraq")? "selected" : ""}}>Iraq</option>
                            <option value="Ireland" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Ireland")? "selected" : ""}}>Ireland</option>
                            <option value="Jamaica" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Jamaica")? "selected" : ""}}>Jamaica</option>
                            <option value="Japan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Japan")? "selected" : ""}}>Japan</option>
                            <option value="Jordan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Jordan")? "selected" : ""}}>Jordan</option>
                            <option value="Kazakhstan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Kazakhstan")? "selected" : ""}}>Kazakhstan</option>
                            <option value="Kenya" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Kenya")? "selected" : ""}}>Kenya</option>
                            <option value="Kiribati" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Kiribati")? "selected" : ""}}>Kiribati</option>
                            <option value="Korea, North" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Korea, North")? "selected" : ""}}>Korea, North
                            </option>
                            <option value="Korea, South" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Korea, South")? "selected" : ""}}>Korea, South
                            </option>
                            <option value="Kosovo" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Kosovo")? "selected" : ""}}>Kosovo</option>
                            <option value="Kuwait" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Kuwait")? "selected" : ""}}>Kuwait</option>
                            <option value="Kyrgyzstan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Kyrgyzstan")? "selected" : ""}}>Kyrgyzstan</option>
                            <option value="Laos" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Laos")? "selected" : ""}}>Laos</option>
                            <option value="Latvia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Latvia")? "selected" : ""}}>Latvia</option>
                            <option value="Lebanon" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Lebanon")? "selected" : ""}}>Lebanon</option>
                            <option value="Lesotho" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Lesotho")? "selected" : ""}}>Lesotho</option>
                            <option value="Liberia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Liberia")? "selected" : ""}}>Liberia</option>
                            <option value="Libya" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Libya")? "selected" : ""}}>Libya</option>
                            <option value="Liechtenstein" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Liechtenstein")? "selected" : ""}}>Liechtenstein
                            </option>
                            <option value="Lithuania" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Lithuania")? "selected" : ""}}>Lithuania</option>
                            <option value="Luxembourg" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Luxembourg")? "selected" : ""}}>Luxembourg</option>
                            <option value="Macedonia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Macedonia")? "selected" : ""}}>Macedonia</option>
                            <option value="Madagascar" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Madagascar")? "selected" : ""}}>Madagascar</option>
                            <option value="Malawi" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Malawi")? "selected" : ""}}>Malawi</option>
                            <option value="Malaysia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Malaysia")? "selected" : ""}}>Malaysia</option>
                            <option value="Maldives" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Maldives")? "selected" : ""}}>Maldives</option>
                            <option value="Mali" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Mali")? "selected" : ""}}>Mali</option>
                            <option value="Malta" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Malta")? "selected" : ""}}>Malta</option>
                            <option value="Marshall Islands" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Marshall Islands")? "selected" : ""}}>Marshall
                                Islands
                            </option>
                            <option value="Mauritania" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Mauritania")? "selected" : ""}}>Mauritania</option>
                            <option value="Mauritius" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Mauritius")? "selected" : ""}}>Mauritius</option>
                            <option value="Mexico" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Mexico")? "selected" : ""}}>Mexico</option>
                            <option value="Micronesia, Federated States of" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Micronesia, Federated States of")? "selected" : ""}}>
                                Micronesia, Federated States of</option>
                            <option value="Moldova" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Moldova")? "selected" : ""}}>Moldova</option>
                            <option value="Monaco" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Monaco")? "selected" : ""}}>Monaco</option>
                            <option value="Mongolia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Mongolia")? "selected" : ""}}>Mongolia</option>
                            <option value="Montenegro" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Montenegro")? "selected" : ""}}>Montenegro</option>
                            <option value="Morocco" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Morocco")? "selected" : ""}}>Morocco</option>
                            <option value="Mozambique" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Mozambique")? "selected" : ""}}>Mozambique</option>
                            <option value="Myanmar (Burma)" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Myanmar (Burma)")? "selected" : ""}}>Myanmar (Burma)
                            </option>
                            <option value="Namibia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Namibia")? "selected" : ""}}>Namibia</option>
                            <option value="Nauru" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Nauru")? "selected" : ""}}>Nauru</option>
                            <option value="Nepal" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Nepal")? "selected" : ""}}>Nepal</option>
                            <option value="Nicaragua" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Nicaragua")? "selected" : ""}}>Nicaragua</option>
                            <option value="Niger" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Niger")? "selected" : ""}}>Niger</option>
                            <option value="Nigeria" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Nigeria")? "selected" : ""}}>Nigeria</option>
                            <option value="Oman" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Oman")? "selected" : ""}}>Oman</option>
                            <option value="Pakistan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Pakistan")? "selected" : ""}}>Pakistan</option>
                            <option value="Palau" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Palau")? "selected" : ""}}>Palau</option>
                            <option value="Panama" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Panama")? "selected" : ""}}>Panama</option>
                            <option value="Papua New Guinea" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Papua New Guinea")? "selected" : ""}}>Papua New
                                Guinea
                            </option>
                            <option value="Paraguay" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Paraguay")? "selected" : ""}}>Paraguay</option>
                            <option value="Peru" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Peru")? "selected" : ""}}>Peru</option>
                            <option value="Philippines" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Philippines")? "selected" : ""}}>Philippines</option>
                            <option value="Poland" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Poland")? "selected" : ""}}>Poland</option>
                            <option value="Qatar" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Qatar")? "selected" : ""}}>Qatar</option>
                            <option value="Romania" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Romania")? "selected" : ""}}>Romania</option>
                            <option value="Russia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Russia")? "selected" : ""}}>Russia</option>
                            <option value="Rwanda" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Rwanda")? "selected" : ""}}>Rwanda</option>
                            <option value="Saint Kitts and Nevis" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Saint Kitts and Nevis")? "selected" : ""}}>Saint
                                Kitts
                                and Nevis</option>
                            <option value="Saint Lucia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Saint Lucia")? "selected" : ""}}>Saint Lucia</option>
                            <option
                                value="Saint Vincent and the Grenadines" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Saint Vincent and the Grenadines")? "selected" : ""}}>
                                Saint Vincent and the Grenadines</option>
                            <option value="Samoa" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Samoa")? "selected" : ""}}>Samoa</option>
                            <option value="San Marino" {{old('country_of_citizenship',$candidate->country_of_citizenship == "San Marino")? "selected" : ""}}>San Marino</option>
                            <option value="Sao Tome and Principe" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Sao Tome and Principe")? "selected" : ""}}>Sao Tome
                                and
                                Principe</option>
                            <option value="Saudi Arabia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Saudi Arabia")? "selected" : ""}}>Saudi Arabia
                            </option>
                            <option value="Senegal" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Senegal")? "selected" : ""}}>Senegal</option>
                            <option value="Serbia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Serbia")? "selected" : ""}}>Serbia</option>
                            <option value="Seychelles" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Seychelles")? "selected" : ""}}>Seychelles</option>
                            <option value="Sierra Leone" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Sierra Leone")? "selected" : ""}}>Sierra Leone
                            </option>
                            <option value="Slovakia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Slovakia")? "selected" : ""}}>Slovakia</option>
                            <option value="Slovenia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Slovenia")? "selected" : ""}}>Slovenia</option>
                            <option value="Solomon Islands" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Solomon Islands")? "selected" : ""}}>Solomon Islands
                            </option>
                            <option value="Somalia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Somalia")? "selected" : ""}}>Somalia</option>
                            <option value="South Africa" {{old('country_of_citizenship',$candidate->country_of_citizenship == "South Africa")? "selected" : ""}}>South Africa
                            </option>
                            <option value="South Sudan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "South Sudan")? "selected" : ""}}>South Sudan</option>
                            <option value="Sri Lanka" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Sri Lanka")? "selected" : ""}}>Sri Lanka</option>
                            <option value="Sudan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Sudan")? "selected" : ""}}>Sudan</option>
                            <option value="Suriname" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Suriname")? "selected" : ""}}>Suriname</option>
                            <option value="Swaziland" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Swaziland")? "selected" : ""}}>Swaziland</option>
                            <option value="Syria" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Syria")? "selected" : ""}}>Syria</option>
                            <option value="Taiwan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Taiwan")? "selected" : ""}}>Taiwan</option>
                            <option value="Tajikistan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Tajikistan")? "selected" : ""}}>Tajikistan</option>
                            <option value="Tanzania" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Tanzania")? "selected" : ""}}>Tanzania</option>
                            <option value="Thailand" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Thailand")? "selected" : ""}}>Thailand</option>
                            <option value="Togo" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Togo")? "selected" : ""}}>Togo</option>
                            <option value="Tonga" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Tonga")? "selected" : ""}}>Tonga</option>
                            <option value="Trinidad and Tobago" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Trinidad and Tobago")? "selected" : ""}}>Trinidad and
                                Tobago</option>
                            <option value="Tunisia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Tunisia")? "selected" : ""}}>Tunisia</option>
                            <option value="Turkey" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Turkey")? "selected" : ""}}>Turkey</option>
                            <option value="Turkmenistan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Turkmenistan")? "selected" : ""}}>Turkmenistan
                            </option>
                            <option value="Tuvalu" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Tuvalu")? "selected" : ""}}>Tuvalu</option>
                            <option value="Uganda" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Uganda")? "selected" : ""}}>Uganda</option>
                            <option value="Ukraine" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Ukraine")? "selected" : ""}}>Ukraine</option>
                            <option value="United Arab Emirates" {{old('country_of_citizenship',$candidate->country_of_citizenship == "United Arab Emirates")? "selected" : ""}}>United Arab
                                Emirates</option>
                            <option value="Uruguay" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Uruguay")? "selected" : ""}}>Uruguay</option>
                            <option value="Uzbekistan" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Uzbekistan")? "selected" : ""}}>Uzbekistan</option>
                            <option value="Vanuatu" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Vanuatu")? "selected" : ""}}>Vanuatu</option>
                            <option value="Vatican City (Holy See)" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Vatican City (Holy See)")? "selected" : ""}}>Vatican
                                City
                                (Holy See)</option>
                            <option value="Venezuela" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Venezuela")? "selected" : ""}}>Venezuela</option>
                            <option value="Vietnam" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Vietnam")? "selected" : ""}}>Vietnam</option>
                            <option value="Yemen" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Yemen")? "selected" : ""}}>Yemen</option>
                            <option value="Zambia" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Zambia")? "selected" : ""}}>Zambia</option>
                            <option value="Zimbabwe" {{old('country_of_citizenship',$candidate->country_of_citizenship == "Zimbabwe")? "selected" : ""}}>Zimbabwe</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Country of Residence
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                                name="country_of_residence"
                                aria-label=".form-select-lg example">
                            <option value="Australia " {{old('country_of_residence',$candidate->country_of_residence == "Australia")? "selected" : ""}}>Australia </option>
                            <option value="New Zealand" {{old('country_of_residence',$candidate->country_of_residence == "New Zealand")? "selected" : ""}}>New Zealand</option>
                            <option value="United Kingdom " {{old('country_of_residence',$candidate->country_of_residence == "United Kingdom")? "selected" : ""}}>United Kingdom
                            </option>
                            <option value="Austria  " {{old('country_of_residence',$candidate->country_of_residence == "Austria")? "selected" : ""}}>Austria </option>
                            <option value="Belgium" {{old('country_of_residence',$candidate->country_of_residence == "Belgium")? "selected" : ""}}>Belgium</option>
                            <option value="Canada " {{old('country_of_residence',$candidate->country_of_residence == "Canada")? "selected" : ""}}>Canada </option>
                            <option value="Czech Republic  " {{old('country_of_residence',$candidate->country_of_residence == "Czech Republic")? "selected" : ""}}>Czech Republic
                            </option>
                            <option value="Denmark  " {{old('country_of_residence',$candidate->country_of_residence == "Denmark")? "selected" : ""}}>Denmark </option>
                            <option value="Finland  " {{old('country_of_residence',$candidate->country_of_residence == "Finland")? "selected" : ""}}>Finland </option>
                            <option value="France " {{old('country_of_residence',$candidate->country_of_residence == "France")? "selected" : ""}}>France </option>
                            <option value="Germany  " {{old('country_of_residence',$candidate->country_of_residence == "Germany")? "selected" : ""}}>Germany </option>
                            <option value="Greece" {{old('country_of_residence',$candidate->country_of_residence == "Greece")? "selected" : ""}}>Greece</option>
                            <option value="Iceland " {{old('country_of_residence',$candidate->country_of_residence == "Iceland")? "selected" : ""}}>Iceland </option>
                            <option value="Israel  " {{old('country_of_residence',$candidate->country_of_residence == "Israel")? "selected" : ""}}>Israel </option>
                            <option value="Italy " {{old('country_of_residence',$candidate->country_of_residence == "Italy")? "selected" : ""}}>Italy </option>
                            <option value="Norway " {{old('country_of_residence',$candidate->country_of_residence == "Norway")? "selected" : ""}}>Norway </option>
                            <option value="Portugal  " {{old('country_of_residence',$candidate->country_of_residence == "Portugal")? "selected" : ""}}>Portugal </option>
                            <option value="Republic of Ireland  " {{old('country_of_residence',$candidate->country_of_residence == "Republic of Ireland")? "selected" : ""}}>Republic
                                of
                                Ireland </option>
                            <option value="Singapore  " {{old('country_of_residence',$candidate->country_of_residence == "Singapore")? "selected" : ""}}>Singapore </option>
                            <option value="Spain " {{old('country_of_residence',$candidate->country_of_residence == "Spain")? "selected" : ""}}>Spain </option>
                            <option value="Sweden " {{old('country_of_residence',$candidate->country_of_residence == "Sweden")? "selected" : ""}}>Sweden </option>
                            <option value="Switzerland " {{old('country_of_residence',$candidate->country_of_residence == "Switzerland")? "selected" : ""}}>Switzerland
                            </option>
                            <option value="The Netherlands " {{old('country_of_residence',$candidate->country_of_residence == "The Netherlands")? "selected" : ""}}>The Netherlands
                            </option>
                            <option value="United States of America " {{old('country_of_residence',$candidate->country_of_residence == "United States of America")? "selected" : ""}}>United
                                States of America </option>
                            <option value="Afghanistan" {{old('country_of_residence',$candidate->country_of_residence == "Afghanistan")? "selected" : ""}}>Afghanistan</option>
                            <option value="Albania" {{old('country_of_residence',$candidate->country_of_residence == "Albania")? "selected" : ""}}>Albania</option>
                            <option value="Algeria" {{old('country_of_residence',$candidate->country_of_residence == "Algeria")? "selected" : ""}}>Algeria</option>
                            <option value="Andorra" {{old('country_of_residence',$candidate->country_of_residence == "Andorra")? "selected" : ""}}>Andorra</option>
                            <option value="Angola" {{old('country_of_residence',$candidate->country_of_residence == "Angola")? "selected" : ""}}>Angola</option>
                            <option value="Antigua and Barbuda" {{old('country_of_residence',$candidate->country_of_residence == "Antigua and Barbuda")? "selected" : ""}}>Antigua and
                                Barbuda</option>
                            <option value="Argentina" {{old('country_of_residence',$candidate->country_of_residence == "Argentina")? "selected" : ""}}>Argentina</option>
                            <option value="Armenia" {{old('country_of_residence',$candidate->country_of_residence == "Armenia")? "selected" : ""}}>Armenia</option>
                            <option value="Azerbaijan" {{old('country_of_residence',$candidate->country_of_residence == "Azerbaijan")? "selected" : ""}}>Azerbaijan</option>
                            <option value="The Bahamas" {{old('country_of_residence',$candidate->country_of_residence == "The Bahamas")? "selected" : ""}}>The Bahamas</option>
                            <option value="Bahrain" {{old('country_of_residence',$candidate->country_of_residence == "Bahrain")? "selected" : ""}}>Bahrain</option>
                            <option value="Bangladesh" {{old('country_of_residence',$candidate->country_of_residence == "Bangladesh")? "selected" : ""}}>Bangladesh</option>
                            <option value="Barbados" {{old('country_of_residence',$candidate->country_of_residence == "Barbados")? "selected" : ""}}>Barbados</option>
                            <option value="Belarus" {{old('country_of_residence',$candidate->country_of_residence == "Belarus")? "selected" : ""}}>Belarus</option>
                            <option value="Belize" {{old('country_of_residence',$candidate->country_of_residence == "Belize")? "selected" : ""}}>Belize</option>
                            <option value="Benin" {{old('country_of_residence',$candidate->country_of_residence == "Benin")? "selected" : ""}}>Benin</option>
                            <option value="Bhutan" {{old('country_of_residence',$candidate->country_of_residence == "Bhutan")? "selected" : ""}}>Bhutan</option>
                            <option value="Bolivia" {{old('country_of_residence',$candidate->country_of_residence == "Bolivia")? "selected" : ""}}>Bolivia</option>
                            <option value="Bosnia and Herzegovina" {{old('country_of_residence',$candidate->country_of_residence == "Bosnia and Herzegovina")? "selected" : ""}}>Bosnia
                                and
                                Herzegovina</option>
                            <option value="Botswana" {{old('country_of_residence',$candidate->country_of_residence == "Botswana")? "selected" : ""}}>Botswana</option>
                            <option value="Brazil" {{old('country_of_residence',$candidate->country_of_residence == "Brazil")? "selected" : ""}}>Brazil</option>
                            <option value="Brunei" {{old('country_of_residence',$candidate->country_of_residence == "Brunei")? "selected" : ""}}>Brunei</option>
                            <option value="Bulgaria" {{old('country_of_residence',$candidate->country_of_residence == "Bulgaria")? "selected" : ""}}>Bulgaria</option>
                            <option value="Burkina Faso" {{old('country_of_residence',$candidate->country_of_residence == "Burkina Faso")? "selected" : ""}}>Burkina Faso
                            </option>
                            <option value="Burundi" {{old('country_of_residence',$candidate->country_of_residence == "Burundi")? "selected" : ""}}>Burundi</option>
                            <option value="Cambodia" {{old('country_of_residence',$candidate->country_of_residence == "Cambodia")? "selected" : ""}}>Cambodia</option>
                            <option value="Cameroon" {{old('country_of_residence',$candidate->country_of_residence == "Cameroon")? "selected" : ""}}>Cameroon</option>
                            <option value="Cape Verde" {{old('country_of_residence',$candidate->country_of_residence == "Cape Verde")? "selected" : ""}}>Cape Verde</option>
                            <option value="Central African Republic" {{old('country_of_residence',$candidate->country_of_residence == "Central African Republic")? "selected" : ""}}>Central
                                African Republic</option>
                            <option value="Chad" {{old('country_of_residence',$candidate->country_of_residence == "Chad")? "selected" : ""}}>Chad</option>
                            <option value="Chile" {{old('country_of_residence',$candidate->country_of_residence == "Chile")? "selected" : ""}}>Chile</option>
                            <option value="China" {{old('country_of_residence',$candidate->country_of_residence == "China")? "selected" : ""}}>China</option>
                            <option value="Colombia" {{old('country_of_residence',$candidate->country_of_residence == "Colombia")? "selected" : ""}}>Colombia</option>
                            <option value="Comoros" {{old('country_of_residence',$candidate->country_of_residence == "Comoros")? "selected" : ""}}>Comoros</option>
                            <option value="Congo, Republic of the" {{old('country_of_residence',$candidate->country_of_residence == "Congo, Republic of the")? "selected" : ""}}>Congo,
                                Republic of the</option>
                            <option
                                value="Congo, Democratic Republic of the" {{old('country_of_residence',$candidate->country_of_residence == "Congo, Democratic Republic of the")? "selected" : ""}}>
                                Congo, Democratic Republic of the</option>
                            <option value="Costa Rica" {{old('country_of_residence',$candidate->country_of_residence == "Costa Rica")? "selected" : ""}}>Costa Rica</option>
                            <option value="Cote d-Ivoire" {{old('country_of_residence',$candidate->country_of_residence == "Cote d-Ivoire")? "selected" : ""}}>Cote d-Ivoire
                            </option>
                            <option value="Croatia" {{old('country_of_residence',$candidate->country_of_residence == "Croatia")? "selected" : ""}}>Croatia</option>
                            <option value="Cuba" {{old('country_of_residence',$candidate->country_of_residence == "Cuba")? "selected" : ""}}>Cuba</option>
                            <option value="Cyprus" {{old('country_of_residence',$candidate->country_of_residence == "Cyprus")? "selected" : ""}}>Cyprus</option>
                            <option value="Djibouti" {{old('country_of_residence',$candidate->country_of_residence == "Djibouti")? "selected" : ""}}>Djibouti</option>
                            <option value="Dominica" {{old('country_of_residence',$candidate->country_of_residence == "Dominica")? "selected" : ""}}>Dominica</option>
                            <option value="Dominican Republic" {{old('country_of_residence',$candidate->country_of_residence == "Dominican Republic")? "selected" : ""}}>Dominican
                                Republic</option>
                            <option value="East Timor (Timor-Leste)" {{old('country_of_residence',$candidate->country_of_residence == "East Timor (Timor-Leste)")? "selected" : ""}}>East
                                Timor
                                (Timor-Leste)</option>
                            <option value="Ecuador" {{old('country_of_residence',$candidate->country_of_residence == "Ecuador")? "selected" : ""}}>Ecuador</option>
                            <option value="Egypt" {{old('country_of_residence',$candidate->country_of_residence == "Egypt")? "selected" : ""}}>Egypt</option>
                            <option value="El Salvador" {{old('country_of_residence',$candidate->country_of_residence == "El Salvador")? "selected" : ""}}>El Salvador</option>
                            <option value="Equatorial Guinea" {{old('country_of_residence',$candidate->country_of_residence == "Equatorial Guinea")? "selected" : ""}}>Equatorial
                                Guinea
                            </option>
                            <option value="Eritrea" {{old('country_of_residence',$candidate->country_of_residence == "Eritrea")? "selected" : ""}}>Eritrea</option>
                            <option value="Estonia" {{old('country_of_residence',$candidate->country_of_residence == "Estonia")? "selected" : ""}}>Estonia</option>
                            <option value="Ethiopia" {{old('country_of_residence',$candidate->country_of_residence == "Ethiopia")? "selected" : ""}}>Ethiopia</option>
                            <option value="Fiji" {{old('country_of_residence',$candidate->country_of_residence == "Fiji")? "selected" : ""}}>Fiji</option>
                            <option value="Gabon" {{old('country_of_residence',$candidate->country_of_residence == "Gabon")? "selected" : ""}}>Gabon</option>
                            <option value="The Gambia" {{old('country_of_residence',$candidate->country_of_residence == "The Gambia")? "selected" : ""}}>The Gambia</option>
                            <option value="Georgia" {{old('country_of_residence',$candidate->country_of_residence == "Georgia")? "selected" : ""}}>Georgia</option>
                            <option value="Ghana" {{old('country_of_residence',$candidate->country_of_residence == "Ghana")? "selected" : ""}}>Ghana</option>
                            <option value="Grenada" {{old('country_of_residence',$candidate->country_of_residence == "Grenada")? "selected" : ""}}>Grenada</option>
                            <option value="Guatemala" {{old('country_of_residence',$candidate->country_of_residence == "Guatemala")? "selected" : ""}}>Guatemala</option>
                            <option value="Guinea" {{old('country_of_residence',$candidate->country_of_residence == "Guinea")? "selected" : ""}}>Guinea</option>
                            <option value="Guinea-Bissau" {{old('country_of_residence',$candidate->country_of_residence == "Guinea-Bissau")? "selected" : ""}}>Guinea-Bissau
                            </option>
                            <option value="Guyana" {{old('country_of_residence',$candidate->country_of_residence == "Guyana")? "selected" : ""}}>Guyana</option>
                            <option value="Haiti" {{old('country_of_residence',$candidate->country_of_residence == "Haiti")? "selected" : ""}}>Haiti</option>
                            <option value="Honduras" {{old('country_of_residence',$candidate->country_of_residence == "Honduras")? "selected" : ""}}>Honduras</option>
                            <option value="Hungary" {{old('country_of_residence',$candidate->country_of_residence == "Hungary")? "selected" : ""}}>Hungary</option>
                            <option value="India" {{old('country_of_residence',$candidate->country_of_residence == "India")? "selected" : ""}}>India</option>
                            <option value="Indonesia" {{old('country_of_residence',$candidate->country_of_residence == "Indonesia")? "selected" : ""}}>Indonesia</option>
                            <option value="Iran" {{old('country_of_residence',$candidate->country_of_residence == "Iran")? "selected" : ""}}>Iran</option>
                            <option value="Iraq" {{old('country_of_residence',$candidate->country_of_residence == "Iraq")? "selected" : ""}}>Iraq</option>
                            <option value="Ireland" {{old('country_of_residence',$candidate->country_of_residence == "Ireland")? "selected" : ""}}>Ireland</option>
                            <option value="Jamaica" {{old('country_of_residence',$candidate->country_of_residence == "Jamaica")? "selected" : ""}}>Jamaica</option>
                            <option value="Japan" {{old('country_of_residence',$candidate->country_of_residence == "Japan")? "selected" : ""}}>Japan</option>
                            <option value="Jordan" {{old('country_of_residence',$candidate->country_of_residence == "Jordan")? "selected" : ""}}>Jordan</option>
                            <option value="Kazakhstan" {{old('country_of_residence',$candidate->country_of_residence == "Kazakhstan")? "selected" : ""}}>Kazakhstan</option>
                            <option value="Kenya" {{old('country_of_residence',$candidate->country_of_residence == "Kenya")? "selected" : ""}}>Kenya</option>
                            <option value="Kiribati" {{old('country_of_residence',$candidate->country_of_residence == "Kiribati")? "selected" : ""}}>Kiribati</option>
                            <option value="Korea, North" {{old('country_of_residence',$candidate->country_of_residence == "Korea, North")? "selected" : ""}}>Korea, North
                            </option>
                            <option value="Korea, South" {{old('country_of_residence',$candidate->country_of_residence == "Korea, South")? "selected" : ""}}>Korea, South
                            </option>
                            <option value="Kosovo" {{old('country_of_residence',$candidate->country_of_residence == "Kosovo")? "selected" : ""}}>Kosovo</option>
                            <option value="Kuwait" {{old('country_of_residence',$candidate->country_of_residence == "Kuwait")? "selected" : ""}}>Kuwait</option>
                            <option value="Kyrgyzstan" {{old('country_of_residence',$candidate->country_of_residence == "Kyrgyzstan")? "selected" : ""}}>Kyrgyzstan</option>
                            <option value="Laos" {{old('country_of_residence',$candidate->country_of_residence == "Laos")? "selected" : ""}}>Laos</option>
                            <option value="Latvia" {{old('country_of_residence',$candidate->country_of_residence == "Latvia")? "selected" : ""}}>Latvia</option>
                            <option value="Lebanon" {{old('country_of_residence',$candidate->country_of_residence == "Lebanon")? "selected" : ""}}>Lebanon</option>
                            <option value="Lesotho" {{old('country_of_residence',$candidate->country_of_residence == "Lesotho")? "selected" : ""}}>Lesotho</option>
                            <option value="Liberia" {{old('country_of_residence',$candidate->country_of_residence == "Liberia")? "selected" : ""}}>Liberia</option>
                            <option value="Libya" {{old('country_of_residence',$candidate->country_of_residence == "Libya")? "selected" : ""}}>Libya</option>
                            <option value="Liechtenstein" {{old('country_of_residence',$candidate->country_of_residence == "Liechtenstein")? "selected" : ""}}>Liechtenstein
                            </option>
                            <option value="Lithuania" {{old('country_of_residence',$candidate->country_of_residence == "Lithuania")? "selected" : ""}}>Lithuania</option>
                            <option value="Luxembourg" {{old('country_of_residence',$candidate->country_of_residence == "Luxembourg")? "selected" : ""}}>Luxembourg</option>
                            <option value="Macedonia" {{old('country_of_residence',$candidate->country_of_residence == "Macedonia")? "selected" : ""}}>Macedonia</option>
                            <option value="Madagascar" {{old('country_of_residence',$candidate->country_of_residence == "Madagascar")? "selected" : ""}}>Madagascar</option>
                            <option value="Malawi" {{old('country_of_residence',$candidate->country_of_residence == "Malawi")? "selected" : ""}}>Malawi</option>
                            <option value="Malaysia" {{old('country_of_residence',$candidate->country_of_residence == "Malaysia")? "selected" : ""}}>Malaysia</option>
                            <option value="Maldives" {{old('country_of_residence',$candidate->country_of_residence == "Maldives")? "selected" : ""}}>Maldives</option>
                            <option value="Mali" {{old('country_of_residence',$candidate->country_of_residence == "Mali")? "selected" : ""}}>Mali</option>
                            <option value="Malta" {{old('country_of_residence',$candidate->country_of_residence == "Malta")? "selected" : ""}}>Malta</option>
                            <option value="Marshall Islands" {{old('country_of_residence',$candidate->country_of_residence == "Marshall Islands")? "selected" : ""}}>Marshall
                                Islands
                            </option>
                            <option value="Mauritania" {{old('country_of_residence',$candidate->country_of_residence == "Mauritania")? "selected" : ""}}>Mauritania</option>
                            <option value="Mauritius" {{old('country_of_residence',$candidate->country_of_residence == "Mauritius")? "selected" : ""}}>Mauritius</option>
                            <option value="Mexico" {{old('country_of_residence',$candidate->country_of_residence == "Mexico")? "selected" : ""}}>Mexico</option>
                            <option value="Micronesia, Federated States of" {{old('country_of_residence',$candidate->country_of_residence == "Micronesia, Federated States of")? "selected" : ""}}>
                                Micronesia, Federated States of</option>
                            <option value="Moldova" {{old('country_of_residence',$candidate->country_of_residence == "Moldova")? "selected" : ""}}>Moldova</option>
                            <option value="Monaco" {{old('country_of_residence',$candidate->country_of_residence == "Monaco")? "selected" : ""}}>Monaco</option>
                            <option value="Mongolia" {{old('country_of_residence',$candidate->country_of_residence == "Mongolia")? "selected" : ""}}>Mongolia</option>
                            <option value="Montenegro" {{old('country_of_residence',$candidate->country_of_residence == "Montenegro")? "selected" : ""}}>Montenegro</option>
                            <option value="Morocco" {{old('country_of_residence',$candidate->country_of_residence == "Morocco")? "selected" : ""}}>Morocco</option>
                            <option value="Mozambique" {{old('country_of_residence',$candidate->country_of_residence == "Mozambique")? "selected" : ""}}>Mozambique</option>
                            <option value="Myanmar (Burma)" {{old('country_of_residence',$candidate->country_of_residence == "Myanmar (Burma)")? "selected" : ""}}>Myanmar (Burma)
                            </option>
                            <option value="Namibia" {{old('country_of_residence',$candidate->country_of_residence == "Namibia")? "selected" : ""}}>Namibia</option>
                            <option value="Nauru" {{old('country_of_residence',$candidate->country_of_residence == "Nauru")? "selected" : ""}}>Nauru</option>
                            <option value="Nepal" {{old('country_of_residence',$candidate->country_of_residence == "Nepal")? "selected" : ""}}>Nepal</option>
                            <option value="Nicaragua" {{old('country_of_residence',$candidate->country_of_residence == "Nicaragua")? "selected" : ""}}>Nicaragua</option>
                            <option value="Niger" {{old('country_of_residence',$candidate->country_of_residence == "Niger")? "selected" : ""}}>Niger</option>
                            <option value="Nigeria" {{old('country_of_residence',$candidate->country_of_residence == "Nigeria")? "selected" : ""}}>Nigeria</option>
                            <option value="Oman" {{old('country_of_residence',$candidate->country_of_residence == "Oman")? "selected" : ""}}>Oman</option>
                            <option value="Pakistan" {{old('country_of_residence',$candidate->country_of_residence == "Pakistan")? "selected" : ""}}>Pakistan</option>
                            <option value="Palau" {{old('country_of_residence',$candidate->country_of_residence == "Palau")? "selected" : ""}}>Palau</option>
                            <option value="Panama" {{old('country_of_residence',$candidate->country_of_residence == "Panama")? "selected" : ""}}>Panama</option>
                            <option value="Papua New Guinea" {{old('country_of_residence',$candidate->country_of_residence == "Papua New Guinea")? "selected" : ""}}>Papua New
                                Guinea
                            </option>
                            <option value="Paraguay" {{old('country_of_residence',$candidate->country_of_residence == "Paraguay")? "selected" : ""}}>Paraguay</option>
                            <option value="Peru" {{old('country_of_residence',$candidate->country_of_residence == "Peru")? "selected" : ""}}>Peru</option>
                            <option value="Philippines" {{old('country_of_residence',$candidate->country_of_residence == "Philippines")? "selected" : ""}}>Philippines</option>
                            <option value="Poland" {{old('country_of_residence',$candidate->country_of_residence == "Poland")? "selected" : ""}}>Poland</option>
                            <option value="Qatar" {{old('country_of_residence',$candidate->country_of_residence == "Qatar")? "selected" : ""}}>Qatar</option>
                            <option value="Romania" {{old('country_of_residence',$candidate->country_of_residence == "Romania")? "selected" : ""}}>Romania</option>
                            <option value="Russia" {{old('country_of_residence',$candidate->country_of_residence == "Russia")? "selected" : ""}}>Russia</option>
                            <option value="Rwanda" {{old('country_of_residence',$candidate->country_of_residence == "Rwanda")? "selected" : ""}}>Rwanda</option>
                            <option value="Saint Kitts and Nevis" {{old('country_of_residence',$candidate->country_of_residence == "Saint Kitts and Nevis")? "selected" : ""}}>Saint
                                Kitts
                                and Nevis</option>
                            <option value="Saint Lucia" {{old('country_of_residence',$candidate->country_of_residence == "Saint Lucia")? "selected" : ""}}>Saint Lucia</option>
                            <option
                                value="Saint Vincent and the Grenadines" {{old('country_of_residence',$candidate->country_of_residence == "Saint Vincent and the Grenadines")? "selected" : ""}}>
                                Saint Vincent and the Grenadines</option>
                            <option value="Samoa" {{old('country_of_residence',$candidate->country_of_residence == "Samoa")? "selected" : ""}}>Samoa</option>
                            <option value="San Marino" {{old('country_of_residence',$candidate->country_of_residence == "San Marino")? "selected" : ""}}>San Marino</option>
                            <option value="Sao Tome and Principe" {{old('country_of_residence',$candidate->country_of_residence == "Sao Tome and Principe")? "selected" : ""}}>Sao Tome
                                and
                                Principe</option>
                            <option value="Saudi Arabia" {{old('country_of_residence',$candidate->country_of_residence == "Saudi Arabia")? "selected" : ""}}>Saudi Arabia
                            </option>
                            <option value="Senegal" {{old('country_of_residence',$candidate->country_of_residence == "Senegal")? "selected" : ""}}>Senegal</option>
                            <option value="Serbia" {{old('country_of_residence',$candidate->country_of_residence == "Serbia")? "selected" : ""}}>Serbia</option>
                            <option value="Seychelles" {{old('country_of_residence',$candidate->country_of_residence == "Seychelles")? "selected" : ""}}>Seychelles</option>
                            <option value="Sierra Leone" {{old('country_of_residence',$candidate->country_of_residence == "Sierra Leone")? "selected" : ""}}>Sierra Leone
                            </option>
                            <option value="Slovakia" {{old('country_of_residence',$candidate->country_of_residence == "Slovakia")? "selected" : ""}}>Slovakia</option>
                            <option value="Slovenia" {{old('country_of_residence',$candidate->country_of_residence == "Slovenia")? "selected" : ""}}>Slovenia</option>
                            <option value="Solomon Islands" {{old('country_of_residence',$candidate->country_of_residence == "Solomon Islands")? "selected" : ""}}>Solomon Islands
                            </option>
                            <option value="Somalia" {{old('country_of_residence',$candidate->country_of_residence == "Somalia")? "selected" : ""}}>Somalia</option>
                            <option value="South Africa" {{old('country_of_residence',$candidate->country_of_residence == "South Africa")? "selected" : ""}}>South Africa
                            </option>
                            <option value="South Sudan" {{old('country_of_residence',$candidate->country_of_residence == "South Sudan")? "selected" : ""}}>South Sudan</option>
                            <option value="Sri Lanka" {{old('country_of_residence',$candidate->country_of_residence == "Sri Lanka")? "selected" : ""}}>Sri Lanka</option>
                            <option value="Sudan" {{old('country_of_residence',$candidate->country_of_residence == "Sudan")? "selected" : ""}}>Sudan</option>
                            <option value="Suriname" {{old('country_of_residence',$candidate->country_of_residence == "Suriname")? "selected" : ""}}>Suriname</option>
                            <option value="Swaziland" {{old('country_of_residence',$candidate->country_of_residence == "Swaziland")? "selected" : ""}}>Swaziland</option>
                            <option value="Syria" {{old('country_of_residence',$candidate->country_of_residence == "Syria")? "selected" : ""}}>Syria</option>
                            <option value="Taiwan" {{old('country_of_residence',$candidate->country_of_residence == "Taiwan")? "selected" : ""}}>Taiwan</option>
                            <option value="Tajikistan" {{old('country_of_residence',$candidate->country_of_residence == "Tajikistan")? "selected" : ""}}>Tajikistan</option>
                            <option value="Tanzania" {{old('country_of_residence',$candidate->country_of_residence == "Tanzania")? "selected" : ""}}>Tanzania</option>
                            <option value="Thailand" {{old('country_of_residence',$candidate->country_of_residence == "Thailand")? "selected" : ""}}>Thailand</option>
                            <option value="Togo" {{old('country_of_residence',$candidate->country_of_residence == "Togo")? "selected" : ""}}>Togo</option>
                            <option value="Tonga" {{old('country_of_residence',$candidate->country_of_residence == "Tonga")? "selected" : ""}}>Tonga</option>
                            <option value="Trinidad and Tobago" {{old('country_of_residence',$candidate->country_of_residence == "Trinidad and Tobago")? "selected" : ""}}>Trinidad and
                                Tobago</option>
                            <option value="Tunisia" {{old('country_of_residence',$candidate->country_of_residence == "Tunisia")? "selected" : ""}}>Tunisia</option>
                            <option value="Turkey" {{old('country_of_residence',$candidate->country_of_residence == "Turkey")? "selected" : ""}}>Turkey</option>
                            <option value="Turkmenistan" {{old('country_of_residence',$candidate->country_of_residence == "Turkmenistan")? "selected" : ""}}>Turkmenistan
                            </option>
                            <option value="Tuvalu" {{old('country_of_residence',$candidate->country_of_residence == "Tuvalu")? "selected" : ""}}>Tuvalu</option>
                            <option value="Uganda" {{old('country_of_residence',$candidate->country_of_residence == "Uganda")? "selected" : ""}}>Uganda</option>
                            <option value="Ukraine" {{old('country_of_residence',$candidate->country_of_residence == "Ukraine")? "selected" : ""}}>Ukraine</option>
                            <option value="United Arab Emirates" {{old('country_of_residence',$candidate->country_of_residence == "United Arab Emirates")? "selected" : ""}}>United Arab
                                Emirates</option>
                            <option value="Uruguay" {{old('country_of_residence',$candidate->country_of_residence == "Uruguay")? "selected" : ""}}>Uruguay</option>
                            <option value="Uzbekistan" {{old('country_of_residence',$candidate->country_of_residence == "Uzbekistan")? "selected" : ""}}>Uzbekistan</option>
                            <option value="Vanuatu" {{old('country_of_residence',$candidate->country_of_residence == "Vanuatu")? "selected" : ""}}>Vanuatu</option>
                            <option value="Vatican City (Holy See)" {{old('country_of_residence',$candidate->country_of_residence == "Vatican City (Holy See)")? "selected" : ""}}>Vatican
                                City
                                (Holy See)</option>
                            <option value="Venezuela" {{old('country_of_residence',$candidate->country_of_residence == "Venezuela")? "selected" : ""}}>Venezuela</option>
                            <option value="Vietnam" {{old('country_of_residence',$candidate->country_of_residence == "Vietnam")? "selected" : ""}}>Vietnam</option>
                            <option value="Yemen" {{old('country_of_residence',$candidate->country_of_residence == "Yemen")? "selected" : ""}}>Yemen</option>
                            <option value="Zambia" {{old('country_of_residence',$candidate->country_of_residence == "Zambia")? "selected" : ""}}>Zambia</option>
                            <option value="Zimbabwe" {{old('country_of_residence',$candidate->country_of_residence == "Zimbabwe")? "selected" : ""}}>Zimbabwe</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        VISA Type or Subclass
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="visa_type"
                            aria-label=".form-select-lg example">
                            <option value="Visitor visas"{{old('visa_type',$candidate->visa_type == "Visitor visas")? "selected" : ""}}>Visitor visas
                            </option>
                            <option value="Studying and training visas" {{old('visa_type',$candidate->visa_type == "Studying and training visas")? "selected" : ""}}>
                                Studying
                                and training visas</option>
                            <option value="Family and partner visas" {{old('visa_type',$candidate->visa_type == "Family and partner visas")? "selected" : ""}}>Family
                                and
                                partner visas</option>
                            <option value="Working and skilled visas" {{old('visa_type',$candidate->visa_type == "Working and skilled visas")? "selected" : ""}}>
                                Working
                                and skilled visas</option>
                            <option value="Refugee and humanitarian visas" {{old('visa_type',$candidate->visa_type == "Refugee and humanitarian visas")? "selected" : ""}}>
                                Refugee and humanitarian visas</option>
                            <option value="Other visas" {{old('visa_type',$candidate->visa_type == "Other visas")? "selected" : ""}}>Other visas</option>
                            <option value="Repealed visas" {{old('visa_type',$candidate->visa_type == "Repealed visas")? "selected" : ""}}>Repealed visas
                            </option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Work Right Status
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="work_rights_status"
                            aria-label=".form-select-lg example">
                            <option value="No Limits"{{old('work_rights_status',$candidate->work_rights_status == "No Limits")? "selected" : ""}}>No Limits</option>
                            <option value="Limited Working Hours" {{old('work_rights_status',$candidate->work_rights_status == "Limited Working Hours")? "selected" : ""}}>Limited
                                Working Hours</option>
                            <option value="No Working Rights" {{old('work_rights_status',$candidate->work_rights_status == "No Working Rights")? "selected" : ""}}>No Working
                                Rights
                            </option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        VISA Sponsorship
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="visa_sponsorship"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->visa_sponsorship) && $candidate->interview->visa_sponsorship == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->visa_sponsorship) && $candidate->interview->visa_sponsorship == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->visa_sponsorship) && $candidate->interview->visa_sponsorship == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="disc-width"></td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Accommodation
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="accommodation"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->accommodation) && $candidate->interview->accommodation == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->accommodation) && $candidate->interview->accommodation == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->accommodation) && $candidate->interview->accommodation == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Travel Allowances
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="travel_allowance"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->travel_allowance) && $candidate->interview->travel_allowance == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->travel_allowance) && $candidate->interview->travel_allowance == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->travel_allowance) && $candidate->interview->travel_allowance == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Meal Allowances
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="meal_allowance"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->meal_allowance) && $candidate->interview->meal_allowance == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->meal_allowance) && $candidate->interview->meal_allowance == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->meal_allowance) && $candidate->interview->meal_allowance == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Uniform Allowances
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="uniform_allowance"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->uniform_allowance) && $candidate->interview->uniform_allowance == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->uniform_allowance) && $candidate->interview->uniform_allowance == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->uniform_allowance) && $candidate->interview->uniform_allowance == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Competitive Features</h4>
                    </td>
                    <td></td>

                </tr>
                <tr>
                    <th>
                        Moratorium Restriction
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="moratorium_restriction"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->moratorium_restriction) && $candidate->interview->moratorium_restriction == 'yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->moratorium_restriction) && $candidate->interview->moratorium_restriction == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->moratorium_restriction) && $candidate->interview->moratorium_restriction == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Location Restrictions
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="location_restriction"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->location_restriction) && $candidate->interview->location_restriction == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->location_restriction) && $candidate->interview->location_restriction == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->location_restriction) && $candidate->interview->location_restriction == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Training Program Requirement
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="program_type"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->program_type) && $candidate->interview->program_type == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->program_type) && $candidate->interview->program_type == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->program_type) && $candidate->interview->program_type == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Medical Board Conditions
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="medical_board_condition"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->medical_board_condition) && $candidate->interview->medical_board_condition == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->medical_board_condition) && $candidate->interview->medical_board_condition == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->medical_board_condition) && $candidate->interview->medical_board_condition == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <th>
                        Medical Board Undertakings
                    </th>
                    <td>
                        <select class="form-select form-select-lg mb-3"
                            name="medical_board_undertaking"
                            aria-label=".form-select-lg example">
                            <option value="Yes" {{ (isset($candidate->interview->medical_board_undertaking) && $candidate->interview->medical_board_undertaking == 'Yes')?'selected':'' }}>Yes</option>
                            <option value="No" {{ (isset($candidate->interview->medical_board_undertaking) && $candidate->interview->medical_board_undertaking == 'No')?'selected':'' }}>No</option>
                            <option value="N/A" {{ (isset($candidate->interview->medical_board_undertaking) && $candidate->interview->medical_board_undertaking == 'N/A')?'selected':'' }}>N/A</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="mb-3 text-area">
                            <label for="exampleFormControlTextarea1"
                                class="form-label">Skills &
                                Interests</label>
                            <textarea class="form-control"
                                id="exampleFormControlTextarea1" value="{{$candidate->interview->skill ?? old('skill')}}" name="skill"
                                rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </textarea>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="mb-3 text-area">
                            <label for="exampleFormControlTextarea1"
                                class="form-label">Interviewer Notes</label>
                            <textarea class="form-control"
                                id="exampleFormControlTextarea1" value="{{$candidate->interview->interview_notes ?? old('interview_notes')}}" name="interview_notes"
                                rows="3">Interviewer Complete Notes</textarea>
                        </div>
                    </td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        <div class="col-md-12 profile-eidt-form-btn">
            <button class="btn back-btn">Back</button>
            <input type="submit" class="btn" placeholder="Submit">
        </div>
    </form>
    <div class="candidate-date">
        <div class="form-group">
            <select class="form-control" name="title" id="title"
                required="">
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
    <div class="audio-video-file">
        <h4>Audio or Video File Recording</h4>
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/PDF.png')}}"
                                        class="img-fluid pdf-upload rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-11 padd-l-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Primary
                                            Interview Sheet .pdf</h5>
                                        <p class="card-text"><small
                                                class="text-muted">58KB |
                                                12/3/2021</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="#">
                                <img src="{{asset('img/dashboard/Eye.png')}}"
                                    class="img-fluid" alt="Eye">
                            </a>
                            <a href="#">
                                <img src="{{asset('img/dashboard/Download.png')}}"
                                    class="img-fluid" alt="download">
                            </a>
                            <div class="upload-icon-link">
                                        <input id="upload" type="file" name="upload"/>
                                        <a href="#" class="upload_link">
                                            <img src="{{asset('img/dashboard/Upload.png')}}"
                                                class="img-fluid gray-color" alt="Upload">
                                        </a>
                            </div>
                            <a href="#">
                                <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                    class="img-fluid gray-color" alt="Delete-Trash">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/Video-File.png')}}"
                                        class="img-fluid pdf-upload rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-11 padd-l-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Video
                                            Recording</h5>
                                        <p class="card-text"><small
                                                class="text-muted">32KB |
                                                12/3/2021</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="#">
                            <img src="{{asset('img/dashboard/Eye.png')}}"
                                class="img-fluid" alt="Eye">
                            </a>
                            <a href="#">
                            <img src="{{asset('img/dashboard/Download.png')}}"
                                class="img-fluid" alt="download">
                            </a>
                            <div class="upload-icon-link">
                                        <input id="upload" type="file" name="upload"/>
                                        <a href="#" class="upload_link">
                                            <img src="{{asset('img/dashboard/Upload.png')}}"
                                                class="img-fluid gray-color" alt="Upload">
                                        </a>
                            </div>
                            <a href="#">
                            <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                class="img-fluid gray-color" alt="Delete-Trash">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-details-upload">
            <div class="col-md-12">
                <div class="row profile-details">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-1 card-img">
                                    <img src="{{asset('img/dashboard/MP3.png')}}"
                                        class="img-fluid pdf-upload rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-11 padd-l-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Audio
                                            Recording</h5>
                                        <p class="card-text"><small
                                            class="text-muted">56KB |
                                            12/3/2021</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-buttons">
                            <a href="#">
                            <img src="{{asset('img/dashboard/Eye.png')}}"
                                class="img-fluid" alt="Eye">
                            </a>
                            <a href="#">
                            <img src="{{asset('img/dashboard/Download.png')}}"
                                class="img-fluid " alt="download">
                            </a>
                            <div class="upload-icon-link">
                                        <input id="upload" type="file" name="upload"/>
                                        <a href="#" class="upload_link">
                                            <img src="{{asset('img/dashboard/Upload.png')}}"
                                                class="img-fluid gray-color" alt="Upload">
                                        </a>
                            </div>
                            <a href="#">
                            <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                class="img-fluid gray-color" alt="Delete-Trash">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-brn">
            <button class="btn audio-edit-btn"><img
                src=" {{asset('img/dashboard/Edit.png')}}"
                class="img-fluid" alt="Edit-img"> Edit
            </button>
        </div>
    </div>
    <div class="forms-colored-div">
        <div class="blue"></div>
        <div class="purple"></div>
        <div class="pink"></div>
    </div>
</div>
