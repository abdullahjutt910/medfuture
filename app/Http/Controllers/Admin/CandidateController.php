<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\User;
use App\Models\Progbar;
use App\Models\Activebar;
use App\Models\Assignbar;
use App\Models\Candidate;
use App\Models\Interview;
use Illuminate\Http\Request;
use Intervention\Image\File;
use App\Models\CandidateProfile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyCandidateRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Reference;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CandidateController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('candidate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $candidates = Candidate::with(['media','candidate_profile']);

        //ID
        if($request->has('candidate_id') && !empty($request->candidate_id))
        {
            $candidates->where('id', '=',$request->candidate_id);
        }
        //First Name
        if($request->has('fname') && !empty($request->fname))
        {
            $candidates->where('first_name', 'LIKE', "%{$request->get('fname')}%");
        }
        //Last Name
        if($request->has('lname') && !empty($request->lname))
        {
            $candidates->where('last_name', 'LIKE', "%{$request->get('lname')}%");
        }
        //Email
        if($request->has('email') && !empty($request->email))
        {
            $candidates->where('email', 'LIKE', "%{$request->get('email')}%");
        }

        //gender
        if($request->has('gender') && !empty($request->gender))
        {
            $candidates->where('gender', 'LIKE', "%{$request->get('gender')}%");
        }

        //Address 1
        if($request->has('address_1') && !empty($request->address_1))
        {
            $candidates->where('address_1', 'LIKE', "%{$request->get('address_1')}%");
        }
        // Address 2
        if($request->has('address_2') && !empty($request->address_2))
        {
            $candidates->where('address_2', 'LIKE', "%{$request->get('address_2')}%");
        }
         //City
         if($request->has('main_city') && !empty($request->main_city))
        {
            $candidates->where('main_city', 'LIKE', "%{$request->get('main_city')}%");
        }

        //state
        if($request->has('state') && !empty($request->state))
        {
            $candidates->where('state', 'LIKE', "%{$request->get('state')}%");
        }

        //country
        if($request->has('country') && !empty($request->country))
        {
            $candidates->where('country', 'LIKE', "%{$request->get('country')}%");
        }

        //Post Code
        if($request->has('post_code') && !empty($request->post_code))
        {
            $candidates->where('post_code', 'LIKE', "%{$request->get('post_code')}%");
        }

        //Mobile number
        if($request->has('mobile') && !empty($request->mobile))
        {
            $candidates->where('mobile', 'LIKE', "%{$request->get('mobile')}%");
        }

        //Work Phone
        if($request->has('work') && !empty($request->work))
        {
            $candidates->where('work', 'LIKE', "%{$request->get('work')}%");
        }

        //Registered
        if($request->has('register') && !empty($request->register))
        {
            $candidates->where('register', 'LIKE', "%{$request->get('register')}%");
        }

        //Verified
        if($request->has('verified') && !empty($request->verified))
        {
            $candidates->where('verified', 'LIKE', "%{$request->get('verified')}%");
        }

        //CV
        if($request->has('cv_document') && !empty($request->cv_document))
        {
            $candidates->where('cv_document', 'LIKE', "%{$request->get('cv_document')}%");
        }
        //Privacy Term
        if($request->has('privacy_term') && !empty($request->privacy_term))
        {
            $candidates->where('privacy_term', 'LIKE', "%{$request->get('privacy_term')}%");
        }
        //Source name
        if($request->has('source_name') && !empty($request->source_name))
        {
            $candidates->where('source_name', 'LIKE', "%{$request->get('source_name')}%");
        }

        //CDF
        if($request->has('CDF') && !empty($request->CDF))
        {
            $candidates->where('CDF', 'LIKE', "%{$request->get('CDF')}%");
        }

        //Availability
        if($request->has('availability') && !empty($request->availability))
        {
            $candidates->where('availability', 'LIKE', "%{$request->get('availability')}%");
        }

        //Working Status
        if($request->has('working_status') && !empty($request->working_status))
        {
            $candidates->where('working_status', 'LIKE', "%{$request->get('working_status')}%");
        }

        //Local Graduate
        if($request->has('graduation') && !empty($request->graduation))
        {
            $candidates->where('graduation', 'LIKE', "%{$request->get('graduation')}%");
        }

        //Source Type
        if($request->has('source_name') && !empty($request->source_name))
        {
            $candidates->where('source_name', 'LIKE', "%{$request->get('source_name')}%");
        }

        //Candidate Manager
        if($request->has('candidate_manager') && !empty($request->candidate_manager))
        {
            $candidates->where('candidate_manager', 'LIKE', "%{$request->get('candidate_manager')}%");
        }

        //Recruitment Consultant
        if($request->has('recruitement') && !empty($request->recruitement))
        {
            $candidates->where('recruitement', 'LIKE', "%{$request->get('recruitement')}%");
        }

        //Data Administrator
        if($request->has('administrator') && !empty($request->administrator))
        {
            $candidates->where('administrator', 'LIKE', "%{$request->get('administrator')}%");
        }

        //Division
        if($request->has('registeration_body') && !empty($request->registeration_body))
        {
            $candidates->where('registeration_body', 'LIKE', "%{$request->get('registeration_body')}%");
        }

        //Visa status
        if($request->has('devision') && !empty($request->devision))
        {
            $candidates->where('devision', 'LIKE', "%{$request->get('devision')}%");
        }

        //Profession
        if($request->has('visa_status') && !empty($request->visa_status))
        {
            $candidates->where('visa_status', 'LIKE', "%{$request->get('visa_status')}%");
        }

        //senority
        if($request->has('profession') && !empty($request->profession))
        {
            $candidates->where('profession', 'LIKE', "%{$request->get('profession')}%");
        }

        //Engagment Type
        if($request->has('senority') && !empty($request->senority))
        {
            $candidates->where('senority', 'LIKE', "%{$request->get('senority')}%");
        }

        //Home Phone
        if($request->has('engagement_term') && !empty($request->engagement_term))
        {
            $candidates->where('engagement_term', 'LIKE', "%{$request->get('engagement_term')}%");
        }

        //Prof Qualification
        if($request->has('home') && !empty($request->home))
        {
            $candidates->where('home', 'LIKE', "%{$request->get('home')}%");
        }

        //Engagment Term
        if($request->has('professional_qualification') && !empty($request->professional_qualification))
        {
            $candidates->where('professional_qualification', 'LIKE', "%{$request->get('professional_qualification')}%");
        }

        //Employment term
        if($request->has('employment_type') && !empty($request->employment_type))
        {
            $candidates->where('employment_type', 'LIKE', "%{$request->get('employment_type')}%");
        }

        //Registration via
        if($request->has('placement_term') && !empty($request->placement_term))
        {
            $candidates->where('placement_term', 'LIKE', "%{$request->get('placement_term')}%");
        }

        //Status
        if($request->has('registration_via') && !empty($request->registration_via))
        {
            $candidates->where('registration_via', 'LIKE', "%{$request->get('registration_via')}%");
        }

        //Map Address
        if($request->has('created_at') && !empty($request->created_at))
        {
            $candidates->where('created_at', 'LIKE', "%{$request->get('created_at')}%");
        }

        //created date
        if($request->has('address_1') && !empty($request->address_1))
        {
            $candidates->where('address_1', 'LIKE', "%{$request->get('address_1')}%");
        }
        $candidates = $candidates->get();

        $count = Candidate::with(['media'])->get()->count();



        return view('admin.candidates.index', compact('candidates', 'count'));
    }

    public function create()
    {
        abort_if(Gate::denies('candidate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidates.create');
    }

    public function store(StoreCandidateRequest $request)
    {

        $user = new User();
        $user->name= $request->first_name;
        $user->email = $request->email;
        $user->role= "candidate";
        $user->password = Hash::make($request->password);
        $user->save();

        $candidate = new Candidate();
        $candidate->user_id = $user->id;
        $candidate->title = $request->title;
        $candidate->first_name = $request->first_name;
        $candidate->last_name = $request->last_name;
        $candidate->gender = $request->gender;
        $candidate->dob = $request->dob;
        $candidate->mobile = $request->mobile;
        $candidate->home = $request->home;
        $candidate->work = $request->work;
        $candidate->email = $request->email;
        $candidate->address_1 = $request->address_1;
        $candidate->address_2 = $request->address_2;
        $candidate->distance_to_main = $request->distance_to_main;
        $candidate->town = $request->town;
        $candidate->state = $request->state;
        $candidate->district = $request->district;
        $candidate->country = $request->country;
        $candidate->post_code = $request->post_code;
        $candidate->main_city = $request->main_city;
        $candidate->profession = $request->profession;
        $candidate->devision = $request->devision;
        $candidate->senority = $request->senority;
        $candidate->specialty = $request->specialty;
        $candidate->professional_qualification = $request->professional_qualification;
        $candidate->graduation = $request->graduation;
        $candidate->country_of_primary_degree = $request->country_of_primary_degree;
        $candidate->medical_school = $request->medical_school;
        $candidate->practice_country = $request->practice_country;
        $candidate->practice_licensing_body = $request->practice_licensing_body;
        $candidate->license_type = $request->license_type;
        $candidate->experience_from_home = $request->experience_from_home;
        $candidate->experience_from_residing = $request->experience_from_residing;
        $candidate->recognised_comparable_experience = $request->recognised_comparable_experience;
        $candidate->current_employment_status = $request->current_employment_status;
        $candidate->country_of_citizenship = $request->country_of_citizenship;
        $candidate->country_of_residence = $request->country_of_residence;
        $candidate->visa_type = $request->visa_type;
        $candidate->work_rights_status = $request->work_rights_status;
        $candidate->profession_login = $request->profession_login;
        $candidate->candidate_manager = $request->candidate_manager;
        $candidate->recruitement = $request->recruitement;
        $candidate->administrator = $request->administrator;
        $candidate->username = $request->username;
        $candidate->password = $request->password;


        if($request->hasfile('cv_document')) {
            $file = $request->file('cv_document')->getClientOriginalName();
            $request->cv_document->move(public_path('/files'), $file);
            $candidate->cv_document =$file;
        }
        if($request->hasfile('registration_form_document')) {
            $file = $request->file('registration_form_document')->getClientOriginalName();
            $request->registration_form_document->move(public_path('/files'), $file);
            $candidate->registration_form_document =$file;
        }
        if($request->hasfile('privacy_concerns')) {
            $file = $request->file('privacy_concerns')->getClientOriginalName();
            $request->privacy_concerns->move(public_path('/files'), $file);
            $candidate->privacy_concerns =$file;
        }
        $candidate->save();

        $candidate_profile = new CandidateProfile();
        $candidate_profile->candidate_id = $candidate->id;
        $candidate_profile->register = $request->register;
        $candidate_profile->verified = $request->verified;
        $candidate_profile->cv_receive_date = $request->cv_receive_date;
        $candidate_profile->privacy_term = $request->privacy_term;
        $candidate_profile->registerd_date = $request->registerd_date;
        $candidate_profile->candidate_term = $request->candidate_term;
        $candidate_profile->source_type = $request->source_type;
        $candidate_profile->registration_type = $request->registration_type;
        $candidate_profile->CDF = $request->CDF;
        $candidate_profile->registered_by = $request->registered_by;
        $candidate_profile->working_status = $request->working_status;
        $candidate_profile->availability = $request->availability;
        $candidate_profile->access_status = $request->access_status;
        $candidate_profile->registeration_body = $request->registeration_body;
        $candidate_profile->source_name = $request->source_name;
        $candidate_profile->email_verified = $request->email_verified;
        $candidate_profile->profile_grade = $request->profile_grade;
        $candidate_profile->registration_via = $request->registration_via;
        $candidate_profile->lead_method = $request->lead_method;
        $candidate_profile->visa_status = $request->visa_status;
        $candidate_profile->save();


        $interview = new Interview;
        $interview->candidate_id = $candidate_profile->candidate_id;
        $interview->start_date = $request->start_date;
        $interview->end_date = $request->end_date;
        $interview->distance = $request->distance;
        $interview->job_location = $request->job_location;
        $interview->practise_licence_number = $request->practise_licence_number;
        $interview->licence_board = $request->licence_board;
        $interview->gross_salary = $request->gross_salary;
        $interview->hourly_rate_expectation = $request->hourly_rate_expectation;
        $interview->billing_share = $request->billing_share;
        $interview->visa_sponsorship = $request->visa_sponsorship;
        $interview->accommodation = $request->accommodation;
        $interview->travel_allowance = $request->travel_allowance;
        $interview->meal_allowance = $request->meal_allowance;
        $interview->uniform_allowance = $request->uniform_allowance;
        $interview->moratorium_restriction = $request->moratorium_restriction;
        $interview->location_restriction = $request->location_restriction;
        $interview->program_type = $request->program_type;
        $interview->medical_board_condition = $request->medical_board_condition;
        $interview->medical_board_undertaking = $request->medical_board_undertaking;
        $interview->skill = $request->skill;
        $interview->program_type = $request->program_type;
        $interview->interview_notes = $request->interview_notes;
        $interview->save();


        $progbar = new Progbar;
        $progbar->candidate_id = $candidate->id;
        $progbar->contacted = $request->contacted;
        $progbar->submissions = $request->submissions;
        $progbar->initial_screening = $request->initial_screening;
        $progbar->short_listed = $request->short_listed;
        $progbar->shelved = $request->shelved;
        $progbar->job_matching = $request->job_matching;
        $progbar->declined = $request->declined;
        $progbar->interviews = $request->interviews;
        $progbar->due_Check = $request->due_Check;
        $progbar->offered = $request->offered;
        $progbar->rejected = $request->rejected;
        $progbar->placed = $request->placed;
        $progbar->archived = $request->archived;
        $progbar->testimony = $request->testimony;
        $progbar->save();



        // $assignbar = new Assignbar;
        // // dd($assignbar);
        // $assignbar->candidate_id = $candidate->id;
        // $assignbar->candidateManager = $request->candidateManager;
        // $assignbar->recruitementConsultant = $request->recruitementConsultant;
        // $assignbar->dataAdministrator = $request->dataAdministrator;
        // $assignbar->save();


        return redirect()->route('admin.candidates.index');
    }

    public function edit(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidates.edit', compact('candidate','activebar'));
    }

    public function update(UpdateCandidateRequest $request,$id)
    {
        // dd('Arsal');
        $candidate = Candidate::find($id);
        $candidate->title = $request->title;
        $candidate->first_name = $request->first_name;
        $candidate->last_name = $request->last_name;
        $candidate->gender = $request->gender;
        $candidate->dob = $request->dob;
        $candidate->mobile = $request->mobile;
        $candidate->home = $request->home;
        $candidate->work = $request->work;
        $candidate->email = $request->email;
        $candidate->address_1 = $request->address_1;
        $candidate->address_2 = $request->address_2;
        $candidate->distance_to_main = $request->distance_to_main;
        $candidate->town = $request->town;
        $candidate->state = $request->state;
        $candidate->district = $request->district;
        $candidate->country = $request->country;
        $candidate->post_code = $request->post_code;
        $candidate->main_city = $request->main_city;
        $candidate->profession = $request->profession;
        $candidate->devision = $request->devision;
        $candidate->senority = $request->senority;
        $candidate->specialty = $request->specialty;
        $candidate->professional_qualification = $request->professional_qualification;
        $candidate->graduation = $request->graduation;
        $candidate->country_of_primary_degree = $request->country_of_primary_degree;
        $candidate->medical_school = $request->medical_school;
        $candidate->practice_country = $request->practice_country;
        $candidate->practice_licensing_body = $request->practice_licensing_body;
        $candidate->license_type = $request->license_type;
        $candidate->experience_from_home = $request->experience_from_home;
        $candidate->experience_from_residing = $request->experience_from_residing;
        $candidate->recognised_comparable_experience = $request->recognised_comparable_experience;
        $candidate->current_employment_status = $request->current_employment_status;
        $candidate->country_of_citizenship = $request->country_of_citizenship;
        $candidate->country_of_residence = $request->country_of_residence;
        $candidate->visa_type = $request->visa_type;
        $candidate->work_rights_status = $request->work_rights_status;
        $candidate->profession_login = $request->profession_login;
        $candidate->username = $request->username;
        // $candidate->engagement_term = $request->engagement_term;
        // $candidate->placement_term = $request->placement_term;
        $candidate->password = $request->password;

        if($request->hasfile('cv_document')) {
            $file = $request->file('cv_document')->getClientOriginalName();
            $request->cv_document->move(public_path('/files'), $file);
            $candidate->cv_document =$file;
        }
        if($request->hasfile('registration_form_document')) {
            $file = $request->file('registration_form_document')->getClientOriginalName();
            $request->registration_form_document->move(public_path('/files'), $file);
            $candidate->registration_form_document =$file;
        }
        if($request->hasfile('privacy_concerns')) {
            $file = $request->file('privacy_concerns')->getClientOriginalName();
            $request->privacy_concerns->move(public_path('/files'), $file);
            $candidate->privacy_concerns =$file;
        }
        $candidate->save();


        return redirect()->route('admin.candidates.index');
    }
    public function updateInterview(Request $request,$id)
    {
        $candidate = Candidate::find($id);
        $candidate->title = $request->title;
        $candidate->profession = $request->profession;
        $candidate->devision = $request->devision;
        $candidate->senority = $request->senority;
        $candidate->specialty = $request->specialty;
        $candidate->town = $request->town;
        $candidate->state = $request->state;
        $candidate->district = $request->district;
        $candidate->country = $request->country;
        $candidate->post_code = $request->post_code;
        $candidate->main_city = $request->main_city;
        $candidate->distance_to_main = $request->distance_to_main;
        $candidate->medical_school = $request->medical_school;
        $candidate->license_type = $request->license_type;
        $candidate->country_of_primary_degree = $request->country_of_primary_degree;
        $candidate->practice_country = $request->practice_country;
        $candidate->practice_licensing_body = $request->practice_licensing_body;
        $candidate->experience_from_home = $request->experience_from_home;
        $candidate->experience_from_residing = $request->experience_from_residing;
        $candidate->recognised_comparable_experience = $request->recognised_comparable_experience;
        $candidate->current_employment_status = $request->current_employment_status;
        $candidate->engagement_term = $request->engagement_term;
        $candidate->country_of_citizenship = $request->country_of_citizenship;
        $candidate->country_of_residence = $request->country_of_residence;
        $candidate->visa_type = $request->visa_type;
        $candidate->work_rights_status = $request->work_rights_status;
        $candidate->placement_term = $request->placement_term;
        $candidate->save();
        // dd($request->all());

        $interview = Interview::where('candidate_id',$candidate->id)->first();
        // $interview->candidate_id = $candidate->id;
        $interview->start_date = $request->start_date;
        $interview->end_date = $request->end_date;
        $interview->distance = $request->distance;
        $interview->job_location = $request->job_location;
        $interview->practise_licence_number = $request->practise_licence_number;
        $interview->licence_board = $request->licence_board;
        $interview->employment_type = $request->employment_type;
        $interview->gross_salary = $request->gross_salary;
        $interview->hourly_rate_expectation = $request->hourly_rate_expectation;
        $interview->billing_share = $request->billing_share;
        $interview->visa_sponsorship = $request->visa_sponsorship;
        $interview->accommodation = $request->accommodation;
        $interview->travel_allowance = $request->travel_allowance;
        $interview->meal_allowance = $request->meal_allowance;
        $interview->uniform_allowance = $request->uniform_allowance;
        $interview->moratorium_restriction = $request->moratorium_restriction;
        $interview->location_restriction = $request->location_restriction;
        $interview->program_type = $request->program_type;
        $interview->medical_board_condition = $request->medical_board_condition;
        $interview->medical_board_undertaking = $request->medical_board_undertaking;
        $interview->skill = $request->skill;
        $interview->program_type = $request->program_type;
        $interview->interview_notes = $request->interview_notes;
        $interview->save();
        return back();

    }
    public function updateProgress(Request $request,$id)
    {

        $progbar = Progbar::where('candidate_id',$id)->first();
        // $progress = Progress::find($id)->where('candidate_id',$progress->$id)->first();
        // dd($request->all());
        $progbar->contacted = $request->contacted;
        $progbar->initial_screening = $request->initial_screening;
        $progbar->short_listed = $request->short_listed;
        $progbar->submissions = $request->submissions;
        $progbar->shelved = $request->shelved;
        $progbar->job_matching = $request->job_matching;
        $progbar->declined = $request->declined;
        $progbar->interviews = $request->interviews;
        $progbar->due_check = $request->due_check;
        $progbar->offered = $request->offered;
        $progbar->rejected = $request->rejected;
        $progbar->placed = $request->placed;
        $progbar->archived = $request->archived;
        $progbar->testimony = $request->testimony;
        $progbar->save();
        return back();
    }
    // public function updateAssign(Request $request,$id)
    // {
    //     $assignbar = Assignbar::where('candidate_id',$id)->first();
    //     $candidate = Candidate::find($id);
    //     $assignbar->candidate_id = $candidate->id;
    //     $assignbar->candidateManager = $request->candidateManager;
    //     $assignbar->recruitementConsultant = $request->recruitementConsultant;
    //     $assignbar->dataAdministrator = $request->dataAdministrator;
    //     $assignbar->save();
    //     return back();
    // }

    public function update_interviewsummary(Request $request,$id)
    {

        $interviewsumery = Interview::where('candidate_id',$id)->first();
        // dd($request->all());
        $interviewsumery->job_summary = $request->job_summary;
        $interviewsumery->save();
        return back();
    }

    public function show(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $candidate = $candidate->with('candidate_profile','interview','progbar','activebar','reference','testimonial')->first();
        // dd(Reference::get());
        // dd($candidate);
        return view('admin.candidates.show', compact('candidate'));
    }
    public function destroy(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $candidate->delete();

        return back();
    }

    // public function deleteActivity($id){
    //     Activebar::find($id)->delete();
    //     return back();
    // }

    public function massDestroy(MassDestroyCandidateRequest $request)
    {
        Candidate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('candidate_create') && Gate::denies('candidate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Candidate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
    public function update1(Request $request,$id)
    {
        $candidate = Candidate::find($id);
        $candidate->first_name = $request->first_name;
        $candidate->last_name = $request->last_name;
        $candidate->gender = $request->gender;
        $candidate->dob = $request->dob;
        $candidate->mobile = $request->mobile;
        $candidate->home = $request->home;
        $candidate->email = $request->email;
        $candidate->engagement_term = $request->engagement_term;
        $candidate->placement_term = $request->placement_term;
        $candidate->office_number = $request->office_number;
        $candidate->Profession = $request->Profession;
        $candidate->current_employment_status = $request->current_employment_status;
        $candidate->candidate_manager = $request->candidate_manager;
        $candidate->recruitement = $request->recruitement;
        $candidate->administrator = $request->administrator;
        $candidate->save();
        return back();
    }
    public function updateActivity(Request $request,$id)
    {
        $activebar =Activebar::where('candidate_id',$id)->first();
        $activebar->activity_type = $request->activity_type;
        $activebar->activity_type_2 = $request->activity_type_2;
        $activebar->activity_note = $request->activity_note;
        $activebar->save();
        return back();
    }
    public function update2(Request $request,$id)
    {
        $candidate = Candidate::find($id);
        $candidate->candidate_manager = $request->candidate_manager;
        $candidate->recruitement = $request->recruitement;
        $candidate->administrator = $request->administrator;
        $candidate->save();
        return back();
    }
    public function update3(Request $request,$id)
    {
        $candidate = Candidate::find($id);
        $candidate->devision = $request->devision;
        $candidate->professional_qualification = $request->professional_qualification;
        $candidate->recruitement = $request->recruitement;
        $candidate->graduation = $request->graduation;
        $candidate->candidate_manager = $request->candidate_manager;
        $candidate->save();

        $candidate_profile =CandidateProfile::where('candidate_id',$candidate->id)->first();
        // $candidate_profile->candidate_id = $candidate->id;
        $candidate_profile->register = $request->register;
        $candidate_profile->verified = $request->verified;
        $candidate_profile->cv_receive_date = $request->cv_receive_date;
        $candidate_profile->privacy_term = $request->privacy_term;
        $candidate_profile->registerd_date = $request->registerd_date;
        $candidate_profile->candidate_term = $request->candidate_term;
        $candidate_profile->source_type = $request->source_type;
        $candidate_profile->registration_type = $request->registration_type;
        $candidate_profile->CDF = $request->CDF;
        $candidate_profile->registered_by = $request->registered_by;
        $candidate_profile->working_status = $request->working_status;
        $candidate_profile->availability = $request->availability;
        $candidate_profile->access_status = $request->access_status;
        $candidate_profile->registeration_body = $request->registeration_body;
        $candidate_profile->source_name = $request->source_name;
        $candidate_profile->email_verified = $request->email_verified;
        $candidate_profile->profile_grade = $request->profile_grade;
        $candidate_profile->registration_via = $request->registration_via;
        $candidate_profile->lead_method = $request->lead_method;
        $candidate_profile->visa_status = $request->visa_status;
        $candidate_profile->save();
        return back();
    }



}
