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
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyCandidateRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CandidateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {

        abort_if(Gate::denies('candidate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $candidates = Candidate::with(['media','candidate_profile'])->get();

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

        $activebar = new Activebar;
        $activebar->activity_type = $request->activity_type;
        $activebar->activity_type_2 = $request->activity_type_2;
        $activebar->activity_note = $request->activity_note;
        $activebar->save();

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

        return view('admin.candidates.edit', compact('candidate'));
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
         $candidates = $candidate->with('candidate_profile','interview','progbar','activebar')->first();
        //dd($candidates);
        return view('admin.candidates.show', compact('candidate'));
    }
//dd($candidates);//dd($candidates);
    public function destroy(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $candidate->delete();

        return back();
    }

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
