@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-default back-candidate" href="{{ route('admin.jobs.index') }}">
                        <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                    </a>
                    <h4> Edit Job</h4>
                </div>

                <div class="panel-body">
                    <form method="POST" class="job-edit-main-form" action="{{ route("admin.jobs.update", [$job->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Client Profile</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 first-top-field">
                                        <div class="row">
                                        <div class="col-md-4">
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
                        </div>
                        <div class="col-md-4">

                        <div class="form-group {{ $errors->has('trade_name') ? 'has-error' : '' }}">
                            <label for="trade_name">{{ trans('cruds.job.fields.trade_name') }}</label>
                            <input class="form-control" type="text" name="trade_name" id="trade_name" value="{{ old('trade_name', $job->trade_name) }}">
                            @if($errors->has('trade_name'))
                                <span class="help-block" role="alert">{{ $errors->first('trade_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.trade_name_helper') }}</span>
                        </div></div>
                        <div class="col-md-4">

                        <div class="form-group {{ $errors->has('abn') ? 'has-error' : '' }}">
                            <label for="abn">{{ trans('cruds.job.fields.abn') }}</label>
                            <input class="form-control" type="text" name="abn" id="abn" value="{{ old('abn', $job->abn) }}">
                            @if($errors->has('abn'))
                                <span class="help-block" role="alert">{{ $errors->first('abn') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.abn_helper') }}</span>
                        </div></div>
                        <div class="col-md-4">

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
                        </div></div>
                        <div class="col-md-4">

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
                        </div></div>
                        <div class="col-md-4">

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
                        </div></div>


                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2> Location Profile </h2>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                            <label for="address_1">{{ trans('cruds.job.fields.address_1') }}</label>
                            <input class="form-control" type="text" name="address_1" id="address_1" value="{{ old('address_1', $job->address_1) }}">
                            @if($errors->has('address_1'))
                                <span class="help-block" role="alert">{{ $errors->first('address_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.address_1_helper') }}</span>
                        </div>
                    </div>
                        <div class="col-md-4">
                        <div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
                            <label for="address_2">{{ trans('cruds.job.fields.address_2') }}</label>
                            <input class="form-control" type="text" name="address_2" id="address_2" value="{{ old('address_2', $job->address_2) }}">
                            @if($errors->has('address_2'))
                                <span class="help-block" role="alert">{{ $errors->first('address_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.address_2_helper') }}</span>
                        </div> </div>
                        <div class="col-md-4">
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
                        </div> </div>
                        <div class="col-md-4">
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
                        </div> </div>
                        <div class="col-md-4">
                        <div class="form-group {{ $errors->has('post_code') ? 'has-error' : '' }}">
                            <label for="post_code">{{ trans('cruds.job.fields.post_code') }}</label>
                            <input class="form-control" type="text" name="post_code" id="post_code" value="{{ old('post_code', $job->post_code) }}">
                            @if($errors->has('post_code'))
                                <span class="help-block" role="alert">{{ $errors->first('post_code') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.post_code_helper') }}</span>
                        </div> </div>
                        <div class="col-md-4">
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
                        </div> </div>
                        <div class="col-md-4">
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
                        </div> </div>
                        <div class="col-md-4">
                        <div class="form-group {{ $errors->has('distance_to_main_city') ? 'has-error' : '' }}">
                            <label for="distance_to_main_city">{{ trans('cruds.job.fields.distance_to_main_city') }}</label>
                            <input class="form-control" type="text" name="distance_to_main_city" id="distance_to_main_city" value="{{ old('distance_to_main_city', $job->distance_to_main_city) }}">
                            @if($errors->has('distance_to_main_city'))
                                <span class="help-block" role="alert">{{ $errors->first('distance_to_main_city') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.distance_to_main_city_helper') }}</span>
                        </div> </div>
                        <div class="col-md-4">
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
                        </div> </div>
                        <div class="col-md-12">
                        <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                            <label for="website">{{ trans('cruds.job.fields.website') }}</label>
                            <input class="form-control" type="text" name="website" id="website" value="{{ old('website', $job->website) }}">
                            @if($errors->has('website'))
                                <span class="help-block" role="alert">{{ $errors->first('website') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.website_helper') }}</span>
                        </div> </div>
                        <div class="col-md-12">
                        <div class="form-group {{ $errors->has('google_address_link') ? 'has-error' : '' }}">
                            <label for="google_address_link">{{ trans('cruds.job.fields.google_address_link') }}</label>
                            <input class="form-control" type="text" name="google_address_link" id="google_address_link" value="{{ old('google_address_link', $job->google_address_link) }}">
                            @if($errors->has('google_address_link'))
                                <span class="help-block" role="alert">{{ $errors->first('google_address_link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.google_address_link_helper') }}</span>
                        </div> </div>
                      
                        </div>
                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2> Ownership Information</h2>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                        <div class="form-group {{ $errors->has('corporate_brand') ? 'has-error' : '' }}">
                            <label for="corporate_brand">{{ trans('cruds.job.fields.corporate_brand') }}</label>
                            <input class="form-control" type="text" name="corporate_brand" id="corporate_brand" value="{{ old('corporate_brand', $job->corporate_brand) }}">
                            @if($errors->has('corporate_brand'))
                                <span class="help-block" role="alert">{{ $errors->first('corporate_brand') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.corporate_brand_helper') }}</span>
                        </div> </div>
                        <div class="col-md-4">
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
                        </div> </div>
                        <div class="col-md-4">
                        <div class="form-group {{ $errors->has('branch') ? 'has-error' : '' }}">
                            <label for="branch">{{ trans('cruds.job.fields.branch') }}</label>
                            <input class="form-control" type="text" name="branch" id="branch" value="{{ old('branch', $job->branch) }}">
                            @if($errors->has('branch'))
                                <span class="help-block" role="alert">{{ $errors->first('branch') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.branch_helper') }}</span>
                        </div> </div>

                        </div>
                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Vacancy Information</h2>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
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
                    </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('gross_salary') ? 'has-error' : '' }}">
                            <label for="gross_salary">{{ trans('cruds.job.fields.gross_salary') }}</label>
                            <input class="form-control" type="number" name="gross_salary" id="gross_salary" value="{{ old('gross_salary', $job->gross_salary) }}" step="0.01">
                            @if($errors->has('gross_salary'))
                                <span class="help-block" role="alert">{{ $errors->first('gross_salary') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.gross_salary_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('gross_salary_information') ? 'has-error' : '' }}">
                            <label for="gross_salary_information">{{ trans('cruds.job.fields.gross_salary_information') }}</label>
                            <input class="form-control" type="text" name="gross_salary_information" id="gross_salary_information" value="{{ old('gross_salary_information', $job->gross_salary_information) }}">
                            @if($errors->has('gross_salary_information'))
                                <span class="help-block" role="alert">{{ $errors->first('gross_salary_information') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.gross_salary_information_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('billing_share') ? 'has-error' : '' }}">
                            <label for="billing_share">{{ trans('cruds.job.fields.billing_share') }}</label>
                            <input class="form-control" type="text" name="billing_share" id="billing_share" value="{{ old('billing_share', $job->billing_share) }}">
                            @if($errors->has('billing_share'))
                                <span class="help-block" role="alert">{{ $errors->first('billing_share') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.billing_share_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('billing_share_information') ? 'has-error' : '' }}">
                            <label for="billing_share_information">{{ trans('cruds.job.fields.billing_share_information') }}</label>
                            <input class="form-control" type="text" name="billing_share_information" id="billing_share_information" value="{{ old('billing_share_information', $job->billing_share_information) }}">
                            @if($errors->has('billing_share_information'))
                                <span class="help-block" role="alert">{{ $errors->first('billing_share_information') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.billing_share_information_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('hourly_rate') ? 'has-error' : '' }}">
                            <label for="hourly_rate">{{ trans('cruds.job.fields.hourly_rate') }}</label>
                            <input class="form-control" type="text" name="hourly_rate" id="hourly_rate" value="{{ old('hourly_rate', $job->hourly_rate) }}">
                            @if($errors->has('hourly_rate'))
                                <span class="help-block" role="alert">{{ $errors->first('hourly_rate') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.hourly_rate_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('hourly_rate_information') ? 'has-error' : '' }}">
                            <label for="hourly_rate_information">{{ trans('cruds.job.fields.hourly_rate_information') }}</label>
                            <input class="form-control" type="text" name="hourly_rate_information" id="hourly_rate_information" value="{{ old('hourly_rate_information', $job->hourly_rate_information) }}">
                            @if($errors->has('hourly_rate_information'))
                                <span class="help-block" role="alert">{{ $errors->first('hourly_rate_information') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.hourly_rate_information_helper') }}</span>
                        </div> </div>
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('job_title') ? 'has-error' : '' }}">
                            <label for="job_title">{{ trans('cruds.job.fields.job_title') }}</label>
                            <input class="form-control" type="text" name="job_title" id="job_title" value="{{ old('job_title', $job->job_title) }}">
                            @if($errors->has('job_title'))
                                <span class="help-block" role="alert">{{ $errors->first('job_title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_title_helper') }}</span>
                        </div> </div>

                        </div>
                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Work Location</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="work-locate-check">
                                            <p>Same as Client Address</p>
                                            <div class="form-check">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                                            <!-- <label for="address_1">{{ trans('cruds.job.fields.address_1') }}</label> -->
                                            <input class="form-control" placeholder="Address Line 1" type="text" name="address_1" id="address_1"
                                                value="{{ old('address_1', '') }}">
                                            @if ($errors->has('address_1'))
                                            <span class="help-block" role="alert">{{ $errors->first('address_1')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.address_1_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
                                            <!-- <label for="address_2">{{ trans('cruds.job.fields.address_2') }}</label> -->
                                            <input class="form-control"  placeholder="Address Line 2" type="text" name="address_2" id="address_2"
                                                value="{{ old('address_2', '') }}">
                                            @if ($errors->has('address_2'))
                                            <span class="help-block" role="alert">{{ $errors->first('address_2')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.address_2_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('distance_to_main_city') ? 'has-error' : '' }}">
                                            <!-- <label for="distance_to_main_city">{{
                                                trans('cruds.job.fields.distance_to_main_city') }}</label> -->
                                            <input class="form-control" placeholder="Distance To Main City" type="text" name="distance_to_main_city"
                                                id="distance_to_main_city"
                                                value="{{ old('distance_to_main_city', '') }}">
                                            @if ($errors->has('distance_to_main_city'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('distance_to_main_city') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.job.fields.distance_to_main_city_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('suburb') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.job.fields.suburb') }}</label> -->
                                            <select class="form-control" name="suburb" id="suburb">
                                                <option value disabled {{ old('suburb', null)===null ? 'selected' : ''
                                                    }}>
                                                    {{ trans('Suburb | Town') }}</option>
                                                <!-- @foreach (App\Models\Job::SUBURB_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('suburb', '' )===(string) $key
                                                    ? 'selected' : '' }}>
                                                    {{ $label }}</option>
                                                @endforeach -->
                                            </select>
                                            @if ($errors->has('suburb'))
                                            <span class="help-block" role="alert">{{ $errors->first('suburb') }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.suburb_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.job.fields.state') }}</label> -->
                                            <select class="form-control" name="state" id="state">
                                                <option value disabled {{ old('state', null)===null ? 'selected' : ''
                                                    }}>
                                                    {{ trans('State | Region') }}</option>
                                                    <option value="New South Wales (NSW) ">New South Wales (NSW) </option>
                                                    <option value="Australian Capital Territory (ACT)">Australian Capital Territory (ACT)</option>
                                                    <option value="South Australia (SA)">South Australia (SA)
                                                    </option>
                                                    <option value="Queensland (QLD)">Queensland (QLD) </option>
                                                    <option value="Western Australia (WA)">Western Australia (WA)</option>
                                                    <option value="Victoria (VIC)">Victoria (VIC) </option>
                                                    <option value="Tasmania (TAS)">Tasmania (TAS)
                                                    </option>
                                                    <option value="Northern Territory (NT)">Northern Territory (NT) </option>
                                                <!-- @foreach (App\Models\Job::STATE_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('state', '' )===(string) $key
                                                    ? 'selected' : '' }}>
                                                    {{ $label }}</option>
                                                @endforeach -->
                                            </select>
                                            @if ($errors->has('state'))
                                            <span class="help-block" role="alert">{{ $errors->first('state') }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.state_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.job.fields.district') }}</label> -->
                                            <select class="form-control" name="district" id="district">
                                                <option value disabled {{ old('district', null)===null ? 'selected' : ''
                                                    }}>
                                                    {{ trans('Sub- Region | District') }}</option>
                                                <!-- @foreach (App\Models\Job::DISTRICT_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('district', '' )===(string) $key
                                                    ? 'selected' : '' }}>
                                                    {{ $label }}</option>
                                                @endforeach -->
                                            </select>
                                            @if ($errors->has('district'))
                                            <span class="help-block" role="alert">{{ $errors->first('district')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.district_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                                        <select class="form-control" name="country" id="country">
                                                <option value disabled {{ old('country', null)===null ? 'selected' : ''
                                                    }}>
                                                    {{ trans('Country') }}</option>
                                                    <option value="Australia ">Australia </option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="United Kingdom ">United Kingdom
                                                    </option>
                                                    <option value="Austria  ">Austria </option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Canada ">Canada </option>
                                                    <option value="Czech Republic  ">Czech Republic
                                                    </option>
                                                    <option value="Denmark  ">Denmark </option>
                                                    <option value="Finland  ">Finland </option>
                                                    <option value="France ">France </option>
                                                    <option value="Germany  ">Germany </option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Iceland ">Iceland </option>
                                                    <option value="Israel  ">Israel </option>
                                                    <option value="Italy ">Italy </option>
                                                    <option value="Norway ">Norway </option>
                                                    <option value="Portugal  ">Portugal </option>
                                                    <option value="Republic of Ireland  ">Republic
                                                        of
                                                        Ireland </option>
                                                    <option value="Singapore  ">Singapore </option>
                                                    <option value="Spain ">Spain </option>
                                                    <option value="Sweden ">Sweden </option>
                                                    <option value="Switzerland ">Switzerland
                                                    </option>
                                                    <option value="The Netherlands ">The Netherlands
                                                    </option>
                                                    <option value="United States of America ">United
                                                        States of America </option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Barbuda">Antigua and
                                                        Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="The Bahamas">The Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia
                                                        and
                                                        Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso
                                                    </option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Central African Republic">Central
                                                        African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo, Republic of the">Congo,
                                                        Republic of the</option>
                                                    <option value="Congo, Democratic Republic of the">
                                                        Congo, Democratic Republic of the</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d-Ivoire">Cote d-Ivoire
                                                    </option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican
                                                        Republic</option>
                                                    <option value="East Timor (Timor-Leste)">East
                                                        Timor
                                                        (Timor-Leste)</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial
                                                        Guinea
                                                    </option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="The Gambia">The Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau
                                                    </option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, North">Korea, North
                                                    </option>
                                                    <option value="Korea, South">Korea, South
                                                    </option>
                                                    <option value="Kosovo">Kosovo</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein
                                                    </option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall
                                                        Islands
                                                    </option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">
                                                        Micronesia, Federated States of</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar (Burma)">Myanmar (Burma)
                                                    </option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New
                                                        Guinea
                                                    </option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint
                                                        Kitts
                                                        and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome
                                                        and
                                                        Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia
                                                    </option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone
                                                    </option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands
                                                    </option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa
                                                    </option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and
                                                        Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab
                                                        Emirates</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City (Holy See)">Vatican
                                                        City
                                                        (Holy See)</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                <!-- @foreach (App\Models\Job::COUNTRY_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('country', '' )===(string) $key
                                                    ? 'selected' : '' }}>
                                                    {{ $label }}</option>
                                                @endforeach -->
                                            </select>
                                            @if ($errors->has('country'))
                                            <span class="help-block" role="alert">{{ $errors->first('country') }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.country_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('post_code') ? 'has-error' : '' }}">
                                            <!-- <label for="post_code">{{ trans('cruds.job.fields.post_code') }}</label> -->
                                            <input class="form-control" placeholder="Post Code" type="text" name="post_code" id="post_code"
                                                value="{{ old('post_code', '') }}">
                                            @if ($errors->has('post_code'))
                                            <span class="help-block" role="alert">{{ $errors->first('post_code')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.post_code_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('distance_to_main_city') ? 'has-error' : '' }}">
                                            <!-- <label for="distance_to_main_city">{{
                                                trans('cruds.job.fields.distance_to_main_city') }}</label> -->
                                            <input class="form-control" placeholder="Distance To Main City" type="text" name="distance_to_main_city"
                                                id="distance_to_main_city"
                                                value="{{ old('distance_to_main_city', '') }}">
                                            @if ($errors->has('distance_to_main_city'))
                                            <span class="help-block" role="alert">{{
                                                $errors->first('distance_to_main_city') }}</span>
                                            @endif
                                            <span class="help-block">{{
                                                trans('cruds.job.fields.distance_to_main_city_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group {{ $errors->has('priority_status') ? 'has-error' : '' }}">
                                            <!-- <label>{{ trans('cruds.job.fields.priority_status') }}</label> -->
                                            <select class="form-control" name="priority_status" id="priority_status">
                                                <option value disabled {{ old('priority_status', null)===null
                                                    ? 'selected' : '' }}>
                                                    {{ trans('Priority Status') }}</option>
                                                <!-- @foreach (App\Models\Job::PRIORITY_STATUS_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('priority_status', '' )===(string)
                                                    $key ? 'selected' : '' }}>
                                                    {{ $label }}</option>
                                                @endforeach -->
                                            </select>
                                            @if ($errors->has('priority_status'))
                                            <span class="help-block" role="alert">{{ $errors->first('priority_status')
                                                }}</span>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.job.fields.priority_status_helper')
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Job Status</h2>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                        <div class="form-group {{ $errors->has('post_date') ? 'has-error' : '' }}">
                            <label for="post_date">{{ trans('cruds.job.fields.post_date') }}</label>
                            <input class="form-control date" type="text" name="post_date" id="post_date" value="{{ old('post_date', $job->post_date) }}">
                            @if($errors->has('post_date'))
                                <span class="help-block" role="alert">{{ $errors->first('post_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.post_date_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
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
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('commencement_date') ? 'has-error' : '' }}">
                            <label for="commencement_date">{{ trans('cruds.job.fields.commencement_date') }}</label>
                            <input class="form-control date" type="text" name="commencement_date" id="commencement_date" value="{{ old('commencement_date', $job->commencement_date) }}">
                            @if($errors->has('commencement_date'))
                                <span class="help-block" role="alert">{{ $errors->first('commencement_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.commencement_date_helper') }}</span>
                        </div> </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('finished_date') ? 'has-error' : '' }}">
                            <label for="finished_date">{{ trans('cruds.job.fields.finished_date') }}</label>
                            <input class="form-control date" type="text" name="finished_date" id="finished_date" value="{{ old('finished_date', $job->finished_date) }}">
                            @if($errors->has('finished_date'))
                                <span class="help-block" role="alert">{{ $errors->first('finished_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.finished_date_helper') }}</span>
                        </div> </div>

                        </div>
                            </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Contact</h2>
                                </div>
                                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('recruitment_consultant') ? 'has-error' : '' }}">
                            <label for="recruitment_consultant">{{ trans('cruds.job.fields.recruitment_consultant') }}</label>
                            <input class="form-control" type="text" name="recruitment_consultant" id="recruitment_consultant" value="{{ old('recruitment_consultant', $job->recruitment_consultant) }}">
                            @if($errors->has('recruitment_consultant'))
                                <span class="help-block" role="alert">{{ $errors->first('recruitment_consultant') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.recruitment_consultant_helper') }}</span>
                        </div> </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : '' }}">
                            <label for="contact_number">{{ trans('cruds.job.fields.contact_number') }}</label>
                            <input class="form-control" type="text" name="contact_number" id="contact_number" value="{{ old('contact_number', $job->contact_number) }}">
                            @if($errors->has('contact_number'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.contact_number_helper') }}</span>
                        </div> </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.job.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $job->email) }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.email_helper') }}</span>
                        </div> </div>
                        </div>

                        </div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>


                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Locum Job Details</h2>
                                </div>

                                <div class="locum-job-dtil">
                                    @include('admin.jobs.partials.questions', ['questions' => $job->questions])
                                </div>

                                <div class="job-detail">
                                    <!-- <h3>Terms and Condition</h3> -->

                                    <div class="tool-bar">
                        <div class="form-group {{ $errors->has('terms_and_condition') ? 'has-error' : '' }}">
                            <label for="terms_and_condition">{{ trans('cruds.job.fields.terms_and_condition') }}</label>
                            <textarea class="form-control ckeditor" name="terms_and_condition" id="terms_and_condition">{!! old('terms_and_condition', $job->terms_and_condition) !!}</textarea>
                            @if($errors->has('terms_and_condition'))
                                <span class="help-block" role="alert">{{ $errors->first('terms_and_condition') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.terms_and_condition_helper') }}</span>
                        </div>

                        <div class="forms-colored-div">
                            <div class="blue"></div>
                            <div class="purple"></div>
                            <div class="pink"></div>
                        </div>
                    </div>

                                </div>
                        <div class="job-detail">
                            <!-- <h3>Contacts</h3> -->

                            <div class="tool-bar">


                                <div class="form-group {{ $errors->has('contacts') ? 'has-error' : '' }}">
                                    <label for="contacts">{{ trans('cruds.job.fields.contacts') }}</label>
                                    <textarea class="form-control ckeditor" name="contacts" id="contacts">{!! old('contacts', $job->contacts) !!}</textarea>
                                    @if($errors->has('contacts'))
                                        <span class="help-block" role="alert">{{ $errors->first('contacts') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.job.fields.contacts_helper') }}</span>
                                </div>

                                <div class="forms-colored-div">
                                    <div class="blue"></div>
                                    <div class="purple"></div>
                                    <div class="pink"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="forms-colored-div">
                        <div class="blue"></div>
                        <div class="purple"></div>
                        <div class="pink"></div>
                    </div>
                </div>
                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2>Assigned Staff</h2>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
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
                        </div> </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('recruitment_consultant_2') ? 'has-error' : '' }}">
                            <label for="recruitment_consultant_2">{{ trans('cruds.job.fields.recruitment_consultant_2') }}</label>
                            <input class="form-control" type="text" name="recruitment_consultant_2" id="recruitment_consultant_2" value="{{ old('recruitment_consultant_2', $job->recruitment_consultant_2) }}">
                            @if($errors->has('recruitment_consultant_2'))
                                <span class="help-block" role="alert">{{ $errors->first('recruitment_consultant_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.recruitment_consultant_2_helper') }}</span>
                        </div> </div>
                    <div class="col-md-4">
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
                        </div> </div>
                    </div>

</div>
                            <div class="forms-colored-div">
                                <div class="blue"></div>
                                <div class="purple"></div>
                                <div class="pink"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 submit_btn">
                                <div class="form-group">
                                    <button class="btn btn-danger" type="submit">
                                        {{ trans('SAVE') }}
                                    </button>
                                </div>
                            </div>
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
