@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.job.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.jobs.update", [$job->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.company_name') }}</label>
                            <select class="form-control" name="company_name" id="company_name">
                                <option value disabled {{ old('company_name', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::COMPANY_NAME_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('company_name', $job->company_name) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('company_name'))
                                <span class="help-block" role="alert">{{ $errors->first('company_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.company_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('trade_name') ? 'has-error' : '' }}">
                            <label for="trade_name">{{ trans('cruds.job.fields.trade_name') }}</label>
                            <input class="form-control" type="text" name="trade_name" id="trade_name" value="{{ old('trade_name', $job->trade_name) }}">
                            @if($errors->has('trade_name'))
                                <span class="help-block" role="alert">{{ $errors->first('trade_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.trade_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('abn') ? 'has-error' : '' }}">
                            <label for="abn">{{ trans('cruds.job.fields.abn') }}</label>
                            <input class="form-control" type="text" name="abn" id="abn" value="{{ old('abn', $job->abn) }}">
                            @if($errors->has('abn'))
                                <span class="help-block" role="alert">{{ $errors->first('abn') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.abn_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('devision') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.devision') }}</label>
                            <select class="form-control" name="devision" id="devision">
                                <option value disabled {{ old('devision', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::DEVISION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('devision', $job->devision) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('devision'))
                                <span class="help-block" role="alert">{{ $errors->first('devision') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.devision_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('cetagory') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.cetagory') }}</label>
                            <select class="form-control" name="cetagory" id="cetagory">
                                <option value disabled {{ old('cetagory', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::CETAGORY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('cetagory', $job->cetagory) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cetagory'))
                                <span class="help-block" role="alert">{{ $errors->first('cetagory') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.cetagory_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('bussiness_service') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.bussiness_service') }}</label>
                            <select class="form-control" name="bussiness_service" id="bussiness_service">
                                <option value disabled {{ old('bussiness_service', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::BUSSINESS_SERVICE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('bussiness_service', $job->bussiness_service) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('bussiness_service'))
                                <span class="help-block" role="alert">{{ $errors->first('bussiness_service') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.bussiness_service_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                            <label for="address_1">{{ trans('cruds.job.fields.address_1') }}</label>
                            <input class="form-control" type="text" name="address_1" id="address_1" value="{{ old('address_1', $job->address_1) }}">
                            @if($errors->has('address_1'))
                                <span class="help-block" role="alert">{{ $errors->first('address_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.address_1_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
                            <label for="address_2">{{ trans('cruds.job.fields.address_2') }}</label>
                            <input class="form-control" type="text" name="address_2" id="address_2" value="{{ old('address_2', $job->address_2) }}">
                            @if($errors->has('address_2'))
                                <span class="help-block" role="alert">{{ $errors->first('address_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.address_2_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('suburb') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.suburb') }}</label>
                            <select class="form-control" name="suburb" id="suburb">
                                <option value disabled {{ old('suburb', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::SUBURB_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('suburb', $job->suburb) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('suburb'))
                                <span class="help-block" role="alert">{{ $errors->first('suburb') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.suburb_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.state') }}</label>
                            <select class="form-control" name="state" id="state">
                                <option value disabled {{ old('state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::STATE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('state', $job->state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('state'))
                                <span class="help-block" role="alert">{{ $errors->first('state') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.state_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('post_code') ? 'has-error' : '' }}">
                            <label for="post_code">{{ trans('cruds.job.fields.post_code') }}</label>
                            <input class="form-control" type="text" name="post_code" id="post_code" value="{{ old('post_code', $job->post_code) }}">
                            @if($errors->has('post_code'))
                                <span class="help-block" role="alert">{{ $errors->first('post_code') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.post_code_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.country') }}</label>
                            <select class="form-control" name="country" id="country">
                                <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::COUNTRY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('country', $job->country) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country'))
                                <span class="help-block" role="alert">{{ $errors->first('country') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.district') }}</label>
                            <select class="form-control" name="district" id="district">
                                <option value disabled {{ old('district', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::DISTRICT_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('district', $job->district) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('district'))
                                <span class="help-block" role="alert">{{ $errors->first('district') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.district_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('distance_to_main_city') ? 'has-error' : '' }}">
                            <label for="distance_to_main_city">{{ trans('cruds.job.fields.distance_to_main_city') }}</label>
                            <input class="form-control" type="text" name="distance_to_main_city" id="distance_to_main_city" value="{{ old('distance_to_main_city', $job->distance_to_main_city) }}">
                            @if($errors->has('distance_to_main_city'))
                                <span class="help-block" role="alert">{{ $errors->first('distance_to_main_city') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.distance_to_main_city_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('main_city') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.main_city') }}</label>
                            <select class="form-control" name="main_city" id="main_city">
                                <option value disabled {{ old('main_city', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::MAIN_CITY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('main_city', $job->main_city) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('main_city'))
                                <span class="help-block" role="alert">{{ $errors->first('main_city') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.main_city_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                            <label for="website">{{ trans('cruds.job.fields.website') }}</label>
                            <input class="form-control" type="text" name="website" id="website" value="{{ old('website', $job->website) }}">
                            @if($errors->has('website'))
                                <span class="help-block" role="alert">{{ $errors->first('website') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.website_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('google_address_link') ? 'has-error' : '' }}">
                            <label for="google_address_link">{{ trans('cruds.job.fields.google_address_link') }}</label>
                            <input class="form-control" type="text" name="google_address_link" id="google_address_link" value="{{ old('google_address_link', $job->google_address_link) }}">
                            @if($errors->has('google_address_link'))
                                <span class="help-block" role="alert">{{ $errors->first('google_address_link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.google_address_link_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('corporate_brand') ? 'has-error' : '' }}">
                            <label for="corporate_brand">{{ trans('cruds.job.fields.corporate_brand') }}</label>
                            <input class="form-control" type="text" name="corporate_brand" id="corporate_brand" value="{{ old('corporate_brand', $job->corporate_brand) }}">
                            @if($errors->has('corporate_brand'))
                                <span class="help-block" role="alert">{{ $errors->first('corporate_brand') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.corporate_brand_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ownership_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.ownership_type') }}</label>
                            <select class="form-control" name="ownership_type" id="ownership_type">
                                <option value disabled {{ old('ownership_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::OWNERSHIP_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('ownership_type', $job->ownership_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('ownership_type'))
                                <span class="help-block" role="alert">{{ $errors->first('ownership_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.ownership_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('branch') ? 'has-error' : '' }}">
                            <label for="branch">{{ trans('cruds.job.fields.branch') }}</label>
                            <input class="form-control" type="text" name="branch" id="branch" value="{{ old('branch', $job->branch) }}">
                            @if($errors->has('branch'))
                                <span class="help-block" role="alert">{{ $errors->first('branch') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.branch_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('profession') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.profession') }}</label>
                            <select class="form-control" name="profession" id="profession">
                                <option value disabled {{ old('profession', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::PROFESSION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('profession', $job->profession) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('profession'))
                                <span class="help-block" role="alert">{{ $errors->first('profession') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.profession_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('division') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.division') }}</label>
                            <select class="form-control" name="division" id="division">
                                <option value disabled {{ old('division', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::DIVISION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('division', $job->division) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('division'))
                                <span class="help-block" role="alert">{{ $errors->first('division') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.division_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('specialty') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.specialty') }}</label>
                            <select class="form-control" name="specialty" id="specialty">
                                <option value disabled {{ old('specialty', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::SPECIALTY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('specialty', $job->specialty) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('specialty'))
                                <span class="help-block" role="alert">{{ $errors->first('specialty') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.specialty_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('seniority') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.seniority') }}</label>
                            <select class="form-control" name="seniority" id="seniority">
                                <option value disabled {{ old('seniority', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::SENIORITY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('seniority', $job->seniority) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('seniority'))
                                <span class="help-block" role="alert">{{ $errors->first('seniority') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.seniority_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('skills') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.skills') }}</label>
                            <select class="form-control" name="skills" id="skills">
                                <option value disabled {{ old('skills', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::SKILLS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('skills', $job->skills) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('skills'))
                                <span class="help-block" role="alert">{{ $errors->first('skills') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.skills_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('placement_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.placement_type') }}</label>
                            <select class="form-control" name="placement_type" id="placement_type">
                                <option value disabled {{ old('placement_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::PLACEMENT_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('placement_type', $job->placement_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('placement_type'))
                                <span class="help-block" role="alert">{{ $errors->first('placement_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.placement_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('engagment_term') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.engagment_term') }}</label>
                            <select class="form-control" name="engagment_term" id="engagment_term">
                                <option value disabled {{ old('engagment_term', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::ENGAGMENT_TERM_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('engagment_term', $job->engagment_term) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('engagment_term'))
                                <span class="help-block" role="alert">{{ $errors->first('engagment_term') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.engagment_term_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('employment_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.employment_type') }}</label>
                            <select class="form-control" name="employment_type" id="employment_type">
                                <option value disabled {{ old('employment_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::EMPLOYMENT_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('employment_type', $job->employment_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('employment_type'))
                                <span class="help-block" role="alert">{{ $errors->first('employment_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.employment_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('gross_salary') ? 'has-error' : '' }}">
                            <label for="gross_salary">{{ trans('cruds.job.fields.gross_salary') }}</label>
                            <input class="form-control" type="number" name="gross_salary" id="gross_salary" value="{{ old('gross_salary', $job->gross_salary) }}" step="0.01">
                            @if($errors->has('gross_salary'))
                                <span class="help-block" role="alert">{{ $errors->first('gross_salary') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.gross_salary_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('gross_salary_information') ? 'has-error' : '' }}">
                            <label for="gross_salary_information">{{ trans('cruds.job.fields.gross_salary_information') }}</label>
                            <input class="form-control" type="text" name="gross_salary_information" id="gross_salary_information" value="{{ old('gross_salary_information', $job->gross_salary_information) }}">
                            @if($errors->has('gross_salary_information'))
                                <span class="help-block" role="alert">{{ $errors->first('gross_salary_information') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.gross_salary_information_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('billing_share') ? 'has-error' : '' }}">
                            <label for="billing_share">{{ trans('cruds.job.fields.billing_share') }}</label>
                            <input class="form-control" type="text" name="billing_share" id="billing_share" value="{{ old('billing_share', $job->billing_share) }}">
                            @if($errors->has('billing_share'))
                                <span class="help-block" role="alert">{{ $errors->first('billing_share') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.billing_share_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('billing_share_information') ? 'has-error' : '' }}">
                            <label for="billing_share_information">{{ trans('cruds.job.fields.billing_share_information') }}</label>
                            <input class="form-control" type="text" name="billing_share_information" id="billing_share_information" value="{{ old('billing_share_information', $job->billing_share_information) }}">
                            @if($errors->has('billing_share_information'))
                                <span class="help-block" role="alert">{{ $errors->first('billing_share_information') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.billing_share_information_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('hourly_rate') ? 'has-error' : '' }}">
                            <label for="hourly_rate">{{ trans('cruds.job.fields.hourly_rate') }}</label>
                            <input class="form-control" type="text" name="hourly_rate" id="hourly_rate" value="{{ old('hourly_rate', $job->hourly_rate) }}">
                            @if($errors->has('hourly_rate'))
                                <span class="help-block" role="alert">{{ $errors->first('hourly_rate') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.hourly_rate_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('hourly_rate_information') ? 'has-error' : '' }}">
                            <label for="hourly_rate_information">{{ trans('cruds.job.fields.hourly_rate_information') }}</label>
                            <input class="form-control" type="text" name="hourly_rate_information" id="hourly_rate_information" value="{{ old('hourly_rate_information', $job->hourly_rate_information) }}">
                            @if($errors->has('hourly_rate_information'))
                                <span class="help-block" role="alert">{{ $errors->first('hourly_rate_information') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.hourly_rate_information_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('job_title') ? 'has-error' : '' }}">
                            <label for="job_title">{{ trans('cruds.job.fields.job_title') }}</label>
                            <input class="form-control" type="text" name="job_title" id="job_title" value="{{ old('job_title', $job->job_title) }}">
                            @if($errors->has('job_title'))
                                <span class="help-block" role="alert">{{ $errors->first('job_title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('post_date') ? 'has-error' : '' }}">
                            <label for="post_date">{{ trans('cruds.job.fields.post_date') }}</label>
                            <input class="form-control date" type="text" name="post_date" id="post_date" value="{{ old('post_date', $job->post_date) }}">
                            @if($errors->has('post_date'))
                                <span class="help-block" role="alert">{{ $errors->first('post_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.post_date_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('priority_status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.priority_status') }}</label>
                            <select class="form-control" name="priority_status" id="priority_status">
                                <option value disabled {{ old('priority_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::PRIORITY_STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('priority_status', $job->priority_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('priority_status'))
                                <span class="help-block" role="alert">{{ $errors->first('priority_status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.priority_status_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('commencement_date') ? 'has-error' : '' }}">
                            <label for="commencement_date">{{ trans('cruds.job.fields.commencement_date') }}</label>
                            <input class="form-control date" type="text" name="commencement_date" id="commencement_date" value="{{ old('commencement_date', $job->commencement_date) }}">
                            @if($errors->has('commencement_date'))
                                <span class="help-block" role="alert">{{ $errors->first('commencement_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.commencement_date_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('finished_date') ? 'has-error' : '' }}">
                            <label for="finished_date">{{ trans('cruds.job.fields.finished_date') }}</label>
                            <input class="form-control date" type="text" name="finished_date" id="finished_date" value="{{ old('finished_date', $job->finished_date) }}">
                            @if($errors->has('finished_date'))
                                <span class="help-block" role="alert">{{ $errors->first('finished_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.finished_date_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('recruitment_consultant') ? 'has-error' : '' }}">
                            <label for="recruitment_consultant">{{ trans('cruds.job.fields.recruitment_consultant') }}</label>
                            <input class="form-control" type="text" name="recruitment_consultant" id="recruitment_consultant" value="{{ old('recruitment_consultant', $job->recruitment_consultant) }}">
                            @if($errors->has('recruitment_consultant'))
                                <span class="help-block" role="alert">{{ $errors->first('recruitment_consultant') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.recruitment_consultant_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : '' }}">
                            <label for="contact_number">{{ trans('cruds.job.fields.contact_number') }}</label>
                            <input class="form-control" type="text" name="contact_number" id="contact_number" value="{{ old('contact_number', $job->contact_number) }}">
                            @if($errors->has('contact_number'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.contact_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.job.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $job->email) }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('terms_and_condition') ? 'has-error' : '' }}">
                            <label for="terms_and_condition">{{ trans('cruds.job.fields.terms_and_condition') }}</label>
                            <textarea class="form-control ckeditor" name="terms_and_condition" id="terms_and_condition">{!! old('terms_and_condition', $job->terms_and_condition) !!}</textarea>
                            @if($errors->has('terms_and_condition'))
                                <span class="help-block" role="alert">{{ $errors->first('terms_and_condition') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.terms_and_condition_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contacts') ? 'has-error' : '' }}">
                            <label for="contacts">{{ trans('cruds.job.fields.contacts') }}</label>
                            <textarea class="form-control ckeditor" name="contacts" id="contacts">{!! old('contacts', $job->contacts) !!}</textarea>
                            @if($errors->has('contacts'))
                                <span class="help-block" role="alert">{{ $errors->first('contacts') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.contacts_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('client_manager') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.client_manager') }}</label>
                            <select class="form-control" name="client_manager" id="client_manager">
                                <option value disabled {{ old('client_manager', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::CLIENT_MANAGER_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('client_manager', $job->client_manager) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('client_manager'))
                                <span class="help-block" role="alert">{{ $errors->first('client_manager') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.client_manager_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('recruitment_consultant_2') ? 'has-error' : '' }}">
                            <label for="recruitment_consultant_2">{{ trans('cruds.job.fields.recruitment_consultant_2') }}</label>
                            <input class="form-control" type="text" name="recruitment_consultant_2" id="recruitment_consultant_2" value="{{ old('recruitment_consultant_2', $job->recruitment_consultant_2) }}">
                            @if($errors->has('recruitment_consultant_2'))
                                <span class="help-block" role="alert">{{ $errors->first('recruitment_consultant_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.recruitment_consultant_2_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('data_administrator') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.data_administrator') }}</label>
                            <select class="form-control" name="data_administrator" id="data_administrator">
                                <option value disabled {{ old('data_administrator', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::DATA_ADMINISTRATOR_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('data_administrator', $job->data_administrator) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('data_administrator'))
                                <span class="help-block" role="alert">{{ $errors->first('data_administrator') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.data_administrator_helper') }}</span>
                        </div>
                        @include('admin.jobs.partials.questions', ['questions' => $job->questions])
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.jobs.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $job->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection
