@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.candidate.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.candidates.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.title') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::TITLE_SELECT[$candidate->title] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $candidate->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $candidate->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.gender') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::GENDER_SELECT[$candidate->gender] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.dob') }}
                                    </th>
                                    <td>
                                        {{ $candidate->dob }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.mobile') }}
                                    </th>
                                    <td>
                                        {{ $candidate->mobile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.home') }}
                                    </th>
                                    <td>
                                        {{ $candidate->home }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.work') }}
                                    </th>
                                    <td>
                                        {{ $candidate->work }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $candidate->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.address_1') }}
                                    </th>
                                    <td>
                                        {{ $candidate->address_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.address_2') }}
                                    </th>
                                    <td>
                                        {{ $candidate->address_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.distance_to_main') }}
                                    </th>
                                    <td>
                                        {{ $candidate->distance_to_main }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.town') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::TOWN_SELECT[$candidate->town] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.state') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::STATE_SELECT[$candidate->state] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.district') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::DISTRICT_SELECT[$candidate->district] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_SELECT[$candidate->country] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.post_code') }}
                                    </th>
                                    <td>
                                        {{ $candidate->post_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.main_city') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::MAIN_CITY_SELECT[$candidate->main_city] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.profession') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSION_SELECT[$candidate->profession] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.devision') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::DEVISION_SELECT[$candidate->devision] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.senority') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::SENORITY_SELECT[$candidate->senority] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.specialty') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::SPECIALTY_SELECT[$candidate->specialty] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.professional_qualification') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT[$candidate->professional_qualification] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.graduation') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::GRADUATION_SELECT[$candidate->graduation] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_primary_degree') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT[$candidate->country_of_primary_degree] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.medical_school') }}
                                    </th>
                                    <td>
                                        {{ $candidate->medical_school }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.practice_country') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PRACTICE_COUNTRY_SELECT[$candidate->practice_country] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.practice_licensing_body') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT[$candidate->practice_licensing_body] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.license_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::LICENSE_TYPE_SELECT[$candidate->license_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.experience_from_home') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT[$candidate->experience_from_home] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.experience_from_residing') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT[$candidate->experience_from_residing] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.recognised_comparable_experience') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT[$candidate->recognised_comparable_experience] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.current_employment_status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT[$candidate->current_employment_status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_citizenship') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT[$candidate->country_of_citizenship] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_residence') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT[$candidate->country_of_residence] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.visa_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::VISA_TYPE_SELECT[$candidate->visa_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.work_rights_status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT[$candidate->work_rights_status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.profession_login') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSION_LOGIN_SELECT[$candidate->profession_login] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.username') }}
                                    </th>
                                    <td>
                                        {{ $candidate->username }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.password') }}
                                    </th>
                                    <td>
                                        ********
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.cv_document') }}
                                    </th>
                                    <td>
                                        @if($candidate->cv_document)
                                            <a href="{{ $candidate->cv_document->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.registration_form_document') }}
                                    </th>
                                    <td>
                                        @if($candidate->registration_form_document)
                                            <a href="{{ $candidate->registration_form_document->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.candidate.fields.privacy_concerns') }}
                                    </th>
                                    <td>
                                        @if($candidate->privacy_concerns)
                                            <a href="{{ $candidate->privacy_concerns->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.candidates.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection