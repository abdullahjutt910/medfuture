@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.job.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $job->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.company_name') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::COMPANY_NAME_SELECT[$job->company_name] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.trade_name') }}
                                    </th>
                                    <td>
                                        {{ $job->trade_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.abn') }}
                                    </th>
                                    <td>
                                        {{ $job->abn }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.devision') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DEVISION_SELECT[$job->devision] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.cetagory') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::CETAGORY_SELECT[$job->cetagory] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.bussiness_service') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::BUSSINESS_SERVICE_SELECT[$job->bussiness_service] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.address_1') }}
                                    </th>
                                    <td>
                                        {{ $job->address_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.address_2') }}
                                    </th>
                                    <td>
                                        {{ $job->address_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.suburb') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SUBURB_SELECT[$job->suburb] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.state') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::STATE_SELECT[$job->state] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.post_code') }}
                                    </th>
                                    <td>
                                        {{ $job->post_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.country') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::COUNTRY_SELECT[$job->country] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.district') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DISTRICT_SELECT[$job->district] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.distance_to_main_city') }}
                                    </th>
                                    <td>
                                        {{ $job->distance_to_main_city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.main_city') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::MAIN_CITY_SELECT[$job->main_city] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.website') }}
                                    </th>
                                    <td>
                                        {{ $job->website }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.google_address_link') }}
                                    </th>
                                    <td>
                                        {{ $job->google_address_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.corporate_brand') }}
                                    </th>
                                    <td>
                                        {{ $job->corporate_brand }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.ownership_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::OWNERSHIP_TYPE_SELECT[$job->ownership_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.branch') }}
                                    </th>
                                    <td>
                                        {{ $job->branch }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.profession') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::PROFESSION_SELECT[$job->profession] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.division') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DIVISION_SELECT[$job->division] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.specialty') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SPECIALTY_SELECT[$job->specialty] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.seniority') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SENIORITY_SELECT[$job->seniority] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.skills') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::SKILLS_SELECT[$job->skills] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.placement_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::PLACEMENT_TYPE_SELECT[$job->placement_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.engagment_term') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::ENGAGMENT_TERM_SELECT[$job->engagment_term] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.employment_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::EMPLOYMENT_TYPE_SELECT[$job->employment_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.gross_salary') }}
                                    </th>
                                    <td>
                                        {{ $job->gross_salary }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.gross_salary_information') }}
                                    </th>
                                    <td>
                                        {{ $job->gross_salary_information }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.billing_share') }}
                                    </th>
                                    <td>
                                        {{ $job->billing_share }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.billing_share_information') }}
                                    </th>
                                    <td>
                                        {{ $job->billing_share_information }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.hourly_rate') }}
                                    </th>
                                    <td>
                                        {{ $job->hourly_rate }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.hourly_rate_information') }}
                                    </th>
                                    <td>
                                        {{ $job->hourly_rate_information }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.job_title') }}
                                    </th>
                                    <td>
                                        {{ $job->job_title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.post_date') }}
                                    </th>
                                    <td>
                                        {{ $job->post_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.priority_status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::PRIORITY_STATUS_SELECT[$job->priority_status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.commencement_date') }}
                                    </th>
                                    <td>
                                        {{ $job->commencement_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.finished_date') }}
                                    </th>
                                    <td>
                                        {{ $job->finished_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.recruitment_consultant') }}
                                    </th>
                                    <td>
                                        {{ $job->recruitment_consultant }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.contact_number') }}
                                    </th>
                                    <td>
                                        {{ $job->contact_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $job->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.terms_and_condition') }}
                                    </th>
                                    <td>
                                        {!! $job->terms_and_condition !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.contacts') }}
                                    </th>
                                    <td>
                                        {!! $job->contacts !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.client_manager') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::CLIENT_MANAGER_SELECT[$job->client_manager] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.recruitment_consultant_2') }}
                                    </th>
                                    <td>
                                        {{ $job->recruitment_consultant_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.data_administrator') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::DATA_ADMINISTRATOR_SELECT[$job->data_administrator] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
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