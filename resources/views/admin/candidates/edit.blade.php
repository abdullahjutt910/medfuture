@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

            <div class="panel-heading">
            <a class="btn btn-default back-candidate" href="{{ route('admin.candidates.index') }}">
                <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
            </a>
                <h4> Edit Candidate</h4>   
                <!-- <h4>   {{ trans('global.edit') }} {{ trans('cruds.candidate.title_singular') }}</h4>    -->
                </div>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.candidates.update", [$candidate->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="box-bg-shadow">
                            <div class="box-inner">
                                <div class="personal-info">
                                    <h2> Personal Information</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 first-top-field">
                                        <div class="row">
                                            <div class="col-md-4">
                                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                <label class="required">{{ trans('cruds.candidate.fields.title') }}</label>
                                                <select class="form-control" name="title" id="title" required>
                                                    <option value disabled {{ old('title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                                    @foreach(App\Models\Candidate::TITLE_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('title', $candidate->title) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('title'))
                                                    <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.candidate.fields.title_helper') }}</span>
                        
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label class="required" for="first_name">{{ trans('cruds.candidate.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', $candidate->first_name) }}" required>
                            @if($errors->has('first_name'))
                                <span class="help-block" role="alert">{{ $errors->first('first_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.first_name_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label class="required" for="last_name">{{ trans('cruds.candidate.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $candidate->last_name) }}" required>
                            @if($errors->has('last_name'))
                                <span class="help-block" role="alert">{{ $errors->first('last_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.last_name_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.candidate.fields.gender') }}</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::GENDER_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('gender', $candidate->gender) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('gender'))
                                <span class="help-block" role="alert">{{ $errors->first('gender') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.gender_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                            <label class="required" for="dob">{{ trans('cruds.candidate.fields.dob') }}</label>
                            <input class="form-control date" type="text" name="dob" id="dob" value="{{ old('dob', $candidate->dob) }}" required>
                            @if($errors->has('dob'))
                                <span class="help-block" role="alert">{{ $errors->first('dob') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.dob_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                            <label class="required" for="mobile">{{ trans('cruds.candidate.fields.mobile') }}</label>
                            <input class="form-control" type="text" name="mobile" id="mobile" value="{{ old('mobile', $candidate->mobile) }}" required>
                            @if($errors->has('mobile'))
                                <span class="help-block" role="alert">{{ $errors->first('mobile') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.mobile_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('home') ? 'has-error' : '' }}">
                            <label class="required" for="home">{{ trans('cruds.candidate.fields.home') }}</label>
                            <input class="form-control" type="text" name="home" id="home" value="{{ old('home', $candidate->home) }}" required>
                            @if($errors->has('home'))
                                <span class="help-block" role="alert">{{ $errors->first('home') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.home_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('work') ? 'has-error' : '' }}">
                            <label class="required" for="work">{{ trans('cruds.candidate.fields.work') }}</label>
                            <input class="form-control" type="text" name="work" id="work" value="{{ old('work', $candidate->work) }}" required>
                            @if($errors->has('work'))
                                <span class="help-block" role="alert">{{ $errors->first('work') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.work_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="required" for="email">{{ trans('cruds.candidate.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $candidate->email) }}" required>
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.email_helper') }}</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 line-border">
                    <hr>
                </div>
                <div class="col-md-12 second-top-field">
                    <div class="row">
                        
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                            <label for="address_1">{{ trans('cruds.candidate.fields.address_1') }}</label>
                            <input class="form-control" type="text" name="address_1" id="address_1" value="{{ old('address_1', $candidate->address_1) }}">
                            @if($errors->has('address_1'))
                                <span class="help-block" role="alert">{{ $errors->first('address_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.address_1_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
                            <label for="address_2">{{ trans('cruds.candidate.fields.address_2') }}</label>
                            <input class="form-control" type="text" name="address_2" id="address_2" value="{{ old('address_2', $candidate->address_2) }}">
                            @if($errors->has('address_2'))
                                <span class="help-block" role="alert">{{ $errors->first('address_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.address_2_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('distance_to_main') ? 'has-error' : '' }}">
                            <label for="distance_to_main">{{ trans('cruds.candidate.fields.distance_to_main') }}</label>
                            <input class="form-control" type="text" name="distance_to_main" id="distance_to_main" value="{{ old('distance_to_main', $candidate->distance_to_main) }}">
                            @if($errors->has('distance_to_main'))
                                <span class="help-block" role="alert">{{ $errors->first('distance_to_main') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.distance_to_main_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('town') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.town') }}</label>
                            <select class="form-control" name="town" id="town">
                                <option value disabled {{ old('town', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::TOWN_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('town', $candidate->town) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('town'))
                                <span class="help-block" role="alert">{{ $errors->first('town') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.town_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.state') }}</label>
                            <select class="form-control" name="state" id="state">
                                <option value disabled {{ old('state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::STATE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('state', $candidate->state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('state'))
                                <span class="help-block" role="alert">{{ $errors->first('state') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.state_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.district') }}</label>
                            <select class="form-control" name="district" id="district">
                                <option value disabled {{ old('district', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::DISTRICT_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('district', $candidate->district) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('district'))
                                <span class="help-block" role="alert">{{ $errors->first('district') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.district_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.country') }}</label>
                            <select class="form-control" name="country" id="country">
                                <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::COUNTRY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('country', $candidate->country) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country'))
                                <span class="help-block" role="alert">{{ $errors->first('country') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.country_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('post_code') ? 'has-error' : '' }}">
                            <label for="post_code">{{ trans('cruds.candidate.fields.post_code') }}</label>
                            <input class="form-control" type="text" name="post_code" id="post_code" value="{{ old('post_code', $candidate->post_code) }}">
                            @if($errors->has('post_code'))
                                <span class="help-block" role="alert">{{ $errors->first('post_code') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.post_code_helper') }}</span>
                        </div>
                        </div>
                                            <div class="col-md-4">
                        <div class="form-group {{ $errors->has('main_city') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.main_city') }}</label>
                            <select class="form-control" name="main_city" id="main_city">
                                <option value disabled {{ old('main_city', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::MAIN_CITY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('main_city', $candidate->main_city) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('main_city'))
                                <span class="help-block" role="alert">{{ $errors->first('main_city') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.main_city_helper') }}</span>
                            </div>
                                            </div>
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
                                    <h2> Professional Information </h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('profession') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.profession') }}</label>
                            <select class="form-control" name="profession" id="profession">
                                <option value disabled {{ old('profession', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::PROFESSION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('profession', $candidate->profession) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('profession'))
                                <span class="help-block" role="alert">{{ $errors->first('profession') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.profession_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('devision') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.devision') }}</label>
                            <select class="form-control" name="devision" id="devision">
                                <option value disabled {{ old('devision', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::DEVISION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('devision', $candidate->devision) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('devision'))
                                <span class="help-block" role="alert">{{ $errors->first('devision') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.devision_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('senority') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.senority') }}</label>
                            <select class="form-control" name="senority" id="senority">
                                <option value disabled {{ old('senority', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::SENORITY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('senority', $candidate->senority) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('senority'))
                                <span class="help-block" role="alert">{{ $errors->first('senority') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.senority_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('specialty') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.specialty') }}</label>
                            <select class="form-control" name="specialty" id="specialty">
                                <option value disabled {{ old('specialty', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::SPECIALTY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('specialty', $candidate->specialty) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('specialty'))
                                <span class="help-block" role="alert">{{ $errors->first('specialty') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.specialty_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('professional_qualification') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.professional_qualification') }}</label>
                            <select class="form-control" name="professional_qualification" id="professional_qualification">
                                <option value disabled {{ old('professional_qualification', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('professional_qualification', $candidate->professional_qualification) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('professional_qualification'))
                                <span class="help-block" role="alert">{{ $errors->first('professional_qualification') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.professional_qualification_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('graduation') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.graduation') }}</label>
                            <select class="form-control" name="graduation" id="graduation">
                                <option value disabled {{ old('graduation', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::GRADUATION_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('graduation', $candidate->graduation) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('graduation'))
                                <span class="help-block" role="alert">{{ $errors->first('graduation') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.graduation_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('country_of_primary_degree') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.country_of_primary_degree') }}</label>
                            <select class="form-control" name="country_of_primary_degree" id="country_of_primary_degree">
                                <option value disabled {{ old('country_of_primary_degree', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('country_of_primary_degree', $candidate->country_of_primary_degree) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country_of_primary_degree'))
                                <span class="help-block" role="alert">{{ $errors->first('country_of_primary_degree') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.country_of_primary_degree_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('medical_school') ? 'has-error' : '' }}">
                            <label for="medical_school">{{ trans('cruds.candidate.fields.medical_school') }}</label>
                            <input class="form-control" type="text" name="medical_school" id="medical_school" value="{{ old('medical_school', $candidate->medical_school) }}">
                            @if($errors->has('medical_school'))
                                <span class="help-block" role="alert">{{ $errors->first('medical_school') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.medical_school_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('practice_country') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.practice_country') }}</label>
                            <select class="form-control" name="practice_country" id="practice_country">
                                <option value disabled {{ old('practice_country', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::PRACTICE_COUNTRY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('practice_country', $candidate->practice_country) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('practice_country'))
                                <span class="help-block" role="alert">{{ $errors->first('practice_country') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.practice_country_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('practice_licensing_body') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.practice_licensing_body') }}</label>
                            <select class="form-control" name="practice_licensing_body" id="practice_licensing_body">
                                <option value disabled {{ old('practice_licensing_body', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('practice_licensing_body', $candidate->practice_licensing_body) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('practice_licensing_body'))
                                <span class="help-block" role="alert">{{ $errors->first('practice_licensing_body') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.practice_licensing_body_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('license_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.license_type') }}</label>
                            <select class="form-control" name="license_type" id="license_type">
                                <option value disabled {{ old('license_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::LICENSE_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('license_type', $candidate->license_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('license_type'))
                                <span class="help-block" role="alert">{{ $errors->first('license_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.license_type_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('experience_from_home') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.experience_from_home') }}</label>
                            <select class="form-control" name="experience_from_home" id="experience_from_home">
                                <option value disabled {{ old('experience_from_home', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('experience_from_home', $candidate->experience_from_home) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('experience_from_home'))
                                <span class="help-block" role="alert">{{ $errors->first('experience_from_home') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.experience_from_home_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('experience_from_residing') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.experience_from_residing') }}</label>
                            <select class="form-control" name="experience_from_residing" id="experience_from_residing">
                                <option value disabled {{ old('experience_from_residing', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('experience_from_residing', $candidate->experience_from_residing) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('experience_from_residing'))
                                <span class="help-block" role="alert">{{ $errors->first('experience_from_residing') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.experience_from_residing_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('recognised_comparable_experience') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.recognised_comparable_experience') }}</label>
                            <select class="form-control" name="recognised_comparable_experience" id="recognised_comparable_experience">
                                <option value disabled {{ old('recognised_comparable_experience', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('recognised_comparable_experience', $candidate->recognised_comparable_experience) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('recognised_comparable_experience'))
                                <span class="help-block" role="alert">{{ $errors->first('recognised_comparable_experience') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.recognised_comparable_experience_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('current_employment_status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.current_employment_status') }}</label>
                            <select class="form-control" name="current_employment_status" id="current_employment_status">
                                <option value disabled {{ old('current_employment_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('current_employment_status', $candidate->current_employment_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('current_employment_status'))
                                <span class="help-block" role="alert">{{ $errors->first('current_employment_status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.current_employment_status_helper') }}</span>
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
                                    <h2> Residential Status & Working Rights</h2>
                                </div>
                                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('country_of_citizenship') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.country_of_citizenship') }}</label>
                            <select class="form-control" name="country_of_citizenship" id="country_of_citizenship">
                                <option value disabled {{ old('country_of_citizenship', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('country_of_citizenship', $candidate->country_of_citizenship) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country_of_citizenship'))
                                <span class="help-block" role="alert">{{ $errors->first('country_of_citizenship') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.country_of_citizenship_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('country_of_residence') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.country_of_residence') }}</label>
                            <select class="form-control" name="country_of_residence" id="country_of_residence">
                                <option value disabled {{ old('country_of_residence', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('country_of_residence', $candidate->country_of_residence) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country_of_residence'))
                                <span class="help-block" role="alert">{{ $errors->first('country_of_residence') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.country_of_residence_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('visa_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.visa_type') }}</label>
                            <select class="form-control" name="visa_type" id="visa_type">
                                <option value disabled {{ old('visa_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::VISA_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('visa_type', $candidate->visa_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('visa_type'))
                                <span class="help-block" role="alert">{{ $errors->first('visa_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.visa_type_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('work_rights_status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.work_rights_status') }}</label>
                            <select class="form-control" name="work_rights_status" id="work_rights_status">
                                <option value disabled {{ old('work_rights_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('work_rights_status', $candidate->work_rights_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('work_rights_status'))
                                <span class="help-block" role="alert">{{ $errors->first('work_rights_status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.work_rights_status_helper') }}</span>
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
                        <h2> Login Credentials</h2>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('profession_login') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.candidate.fields.profession_login') }}</label>
                            <select class="form-control" name="profession_login" id="profession_login">
                                <option value disabled {{ old('profession_login', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Candidate::PROFESSION_LOGIN_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('profession_login', $candidate->profession_login) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('profession_login'))
                                <span class="help-block" role="alert">{{ $errors->first('profession_login') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.profession_login_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                            <label for="username">{{ trans('cruds.candidate.fields.username') }}</label>
                            <input class="form-control" type="text" name="username" id="username" value="{{ old('username', $candidate->username) }}">
                            @if($errors->has('username'))
                                <span class="help-block" role="alert">{{ $errors->first('username') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.username_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">{{ trans('cruds.candidate.fields.password') }}</label>
                            <input class="form-control" type="password" name="password" id="password">
                            @if($errors->has('password'))
                                <span class="help-block" role="alert">{{ $errors->first('password') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.password_helper') }}</span>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('cv_document') ? 'has-error' : '' }}">
                            <label for="cv_document">{{ trans('cruds.candidate.fields.cv_document') }}</label>
                            <div class="needsclick dropzone" id="cv_document-dropzone">
                                <div class="upload-icon">
                                    <i class="fas fa-arrow-up"></i>
                                    <p>Upload</p>
                                </div>
                            </div>
                            @if($errors->has('cv_document'))
                                <span class="help-block" role="alert">{{ $errors->first('cv_document') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.cv_document_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('registration_form_document') ? 'has-error' : '' }}">
                            <label for="registration_form_document">{{ trans('cruds.candidate.fields.registration_form_document') }}</label>
                            <div class="needsclick dropzone" id="registration_form_document-dropzone">
                                <div class="upload-icon">
                                    <i class="fas fa-arrow-up"></i>
                                    <p>Upload</p>
                                </div>
                            </div>
                            @if($errors->has('registration_form_document'))
                                <span class="help-block" role="alert">{{ $errors->first('registration_form_document') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.registration_form_document_helper') }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('privacy_concerns') ? 'has-error' : '' }}">
                            <label for="privacy_concerns">{{ trans('cruds.candidate.fields.privacy_concerns') }}</label>
                            <div class="needsclick dropzone" id="privacy_concerns-dropzone">
                                <div class="upload-icon">
                                    <i class="fas fa-arrow-up"></i>
                                    <p>Upload</p>
                                </div>
                            </div>
                            @if($errors->has('privacy_concerns'))
                                <span class="help-block" role="alert">{{ $errors->first('privacy_concerns') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.candidate.fields.privacy_concerns_helper') }}</span>
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
        <div class="row">
            <div class="col-md-12 submit_btn">
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
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
    Dropzone.options.cvDocumentDropzone = {
    url: '{{ route('admin.candidates.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="cv_document"]').remove()
      $('form').append('<input type="hidden" name="cv_document" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="cv_document"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($candidate) && $candidate->cv_document)
      var file = {!! json_encode($candidate->cv_document) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="cv_document" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.registrationFormDocumentDropzone = {
    url: '{{ route('admin.candidates.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="registration_form_document"]').remove()
      $('form').append('<input type="hidden" name="registration_form_document" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="registration_form_document"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($candidate) && $candidate->registration_form_document)
      var file = {!! json_encode($candidate->registration_form_document) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="registration_form_document" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.privacyConcernsDropzone = {
    url: '{{ route('admin.candidates.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="privacy_concerns"]').remove()
      $('form').append('<input type="hidden" name="privacy_concerns" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="privacy_concerns"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($candidate) && $candidate->privacy_concerns)
      var file = {!! json_encode($candidate->privacy_concerns) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="privacy_concerns" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection