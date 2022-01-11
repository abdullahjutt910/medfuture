<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Intervention\Image\File;
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

        $candidates = Candidate::with(['media'])->get();


        return view('admin.candidates.index', compact('candidates'));
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
        $candidate->username = $request->username;
        $candidate->password = $request->password;
        $candidate->save();
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
        // if ($request->input('registration_form_document', false)) {
        //     $candidate->addMedia(storage_path('tmp/uploads/' . basename($request->input('registration_form_document'))))->toMediaCollection('registration_form_document');
        // }

        // if ($request->input('privacy_concerns', false)) {
        //     $candidate->addMedia(storage_path('tmp/uploads/' . basename($request->input('privacy_concerns'))))->toMediaCollection('privacy_concerns');
        // }

        // if ($media = $request->input('ck-media', false)) {
        //     Media::whereIn('id', $media)->update(['model_id' => $candidate->id]);
        // }

        return redirect()->route('admin.candidates.index');
    }

    public function edit(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidates.edit', compact('candidate'));
    }

    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $candidate->update($request->all());

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

        return redirect()->route('admin.candidates.index');
    }

    public function show(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidates.show', compact('candidate'));
    }

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
}
