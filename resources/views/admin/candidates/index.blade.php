@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row candidate-all">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="candidate-txt-top">
                    <div class="panel-heading">
                        {{ trans('cruds.candidate.title_singular') }} {{ trans('global.list') }}
                    </div>
                    @can('candidate_create')
                    <div class="row add-new-btn">
                        <div class="col-lg-12">
                            <a class="btn btn-success" href="{{ route('admin.candidates.create') }}">
                                Add New
                                <!-- {{ trans('global.add') }} {{ trans('cruds.candidate.title_singular') }} -->
                            </a>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    @endcan
                </div>
                <div class="row filters-bar">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <a href="#" class="btn btn-filter"> All </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-filter"> GP Unit </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-filter"> Hospital Unit </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-filter"> Locum Unit </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-filter"> Nursing Unit </a>
                            </li>

                            <li>
                                <a href="#" class="btn btn-filter"> AHP - HSS Unit </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-filter"> Healthcare Executive Units </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="search-filter-candidate">
                    <div class="box-bg-shadow">
                        <div class="box-inner">
                            <table class="table">
                                <thead>
                                <tr>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::TITLE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::GENDER_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::TOWN_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::STATE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                        <tr>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::DISTRICT_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::MAIN_CITY_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::PROFESSION_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::DEVISION_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::SENORITY_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::SPECIALTY_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::GRADUATION_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::PRACTICE_COUNTRY_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::LICENSE_TYPE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::VISA_TYPE_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search" strict="true">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach(App\Models\Candidate::PROFESSION_LOGIN_SELECT as $key => $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                        </td>
                                        
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="forms-colored-div">
                                    <div class="blue"></div>
                                    <div class="purple"></div>
                                    <div class="pink"></div>
                                </div>
                    </div>
                    </div>
                </div> -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Candidate">
                            <thead>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::TITLE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::GENDER_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::TOWN_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::STATE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::DISTRICT_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <!-- </tr>
                                    <tr> -->
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::COUNTRY_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::MAIN_CITY_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::PROFESSION_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::DEVISION_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::SENORITY_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::SPECIALTY_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT as $key =>
                                            $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::GRADUATION_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT as $key =>
                                            $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::PRACTICE_COUNTRY_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT as $key =>
                                            $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::LICENSE_TYPE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                <!-- </tr>
                                <tr> -->
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT as $key =>
                                            $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT as
                                            $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT as $key =>
                                            $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT as $key =>
                                            $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::VISA_TYPE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::PROFESSION_LOGIN_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <!-- <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td> -->
                                </tr>
                               
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.first_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.last_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.gender') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.dob') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.mobile') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.home') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.work') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.address_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.address_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.distance_to_main') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.town') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.district') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.post_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.main_city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.profession') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.devision') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.senority') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.specialty') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.professional_qualification') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.graduation') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_primary_degree') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.medical_school') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.practice_country') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.practice_licensing_body') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.license_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.experience_from_home') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.experience_from_residing') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.recognised_comparable_experience') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.current_employment_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_citizenship') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.country_of_residence') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.visa_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.work_rights_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.profession_login') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.username') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.cv_document') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.registration_form_document') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.candidate.fields.privacy_concerns') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach($candidates as $key => $candidate)
                                <tr data-entry-id="{{ $candidate->id }}">
                                    <td>

                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::TITLE_SELECT[$candidate->title] ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->first_name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->last_name ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::GENDER_SELECT[$candidate->gender] ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->dob ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->mobile ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->home ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->work ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->email ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->address_1 ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->address_2 ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->distance_to_main ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::TOWN_SELECT[$candidate->town] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::STATE_SELECT[$candidate->state] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::DISTRICT_SELECT[$candidate->district] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::COUNTRY_SELECT[$candidate->country] ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->post_code ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::MAIN_CITY_SELECT[$candidate->main_city] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSION_SELECT[$candidate->profession] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::DEVISION_SELECT[$candidate->devision] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::SENORITY_SELECT[$candidate->senority] ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::SPECIALTY_SELECT[$candidate->specialty] ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::PROFESSIONAL_QUALIFICATION_SELECT[$candidate->professional_qualification]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::GRADUATION_SELECT[$candidate->graduation] ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::COUNTRY_OF_PRIMARY_DEGREE_SELECT[$candidate->country_of_primary_degree]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->medical_school ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::PRACTICE_COUNTRY_SELECT[$candidate->practice_country]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::PRACTICE_LICENSING_BODY_SELECT[$candidate->practice_licensing_body]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::LICENSE_TYPE_SELECT[$candidate->license_type] ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::EXPERIENCE_FROM_HOME_SELECT[$candidate->experience_from_home]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::EXPERIENCE_FROM_RESIDING_SELECT[$candidate->experience_from_residing]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT[$candidate->recognised_comparable_experience]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::CURRENT_EMPLOYMENT_STATUS_SELECT[$candidate->current_employment_status]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::COUNTRY_OF_CITIZENSHIP_SELECT[$candidate->country_of_citizenship]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::COUNTRY_OF_RESIDENCE_SELECT[$candidate->country_of_residence]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::VISA_TYPE_SELECT[$candidate->visa_type] ?? '' }}
                                    </td>
                                    <td>
                                        {{
                                        App\Models\Candidate::WORK_RIGHTS_STATUS_SELECT[$candidate->work_rights_status]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{ App\Models\Candidate::PROFESSION_LOGIN_SELECT[$candidate->profession_login]
                                        ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->username ?? '' }}
                                    </td>
                                    <td>
                                        @if($candidate->cv_document)
                                        <a href="{{ $candidate->cv_document->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($candidate->registration_form_document)
                                        <a href="{{ $candidate->registration_form_document->getUrl() }}"
                                            target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($candidate->privacy_concerns)
                                        <a href="{{ $candidate->privacy_concerns->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                        @endif
                                    </td>
                                    <td class="candidate-crud-list-btn">
                                        @can('candidate_show')
                                        <a class="btn btn-xs"
                                            href="{{ route('admin.candidates.show', $candidate->id) }}">
                                            <i class="far fa-eye"></i>
                                            <!-- <img src="http://127.0.0.1:8000/img/dashboard/Eye.png" class="img-fluid" alt="Eye"> -->
                                            <!-- {{ trans('global.view') }} -->
                                        </a>
                                        @endcan

                                        @can('candidate_edit')
                                        <a class="btn btn-xs"
                                            href="{{ route('admin.candidates.edit', $candidate->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                            <!-- <img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> -->
                                            <!-- {{ trans('global.edit') }} -->
                                        </a>
                                        @endcan

                                        @can('candidate_delete')
                                        <form action="{{ route('admin.candidates.destroy', $candidate->id) }}"
                                            method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                            <!-- <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash"> -->
                                        </form>
                                        @endcan

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('candidate_delete')
        let deleteButtonTrans = '{{ trans('global.datatables.delete ') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.candidates.massDestroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}')

                    return
                }

                if (confirm('{{ trans('global.areYouSure') }}')) {
                    $.ajax({
                        headers: { 'x-csrf-token': _token },
                        method: 'POST',
                        url: config.url,
                        data: { ids: ids, _method: 'DELETE' }
                    })
                        .done(function () { location.reload() })
                }
            }
        }
        dtButtons.push(deleteButton)
        @endcan

        $.extend(true, $.fn.dataTable.defaults, {
            orderCellsTop: true,
            order: [[1, 'desc']],
            pageLength: 100,
        });
        let table = $('.datatable-Candidate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });

        let visibleColumnsIndexes = null;
        $('.datatable thead').on('input', '.search', function () {
            let strict = $(this).attr('strict') || false
            let value = strict && this.value ? "^" + this.value + "$" : this.value

            let index = $(this).parent().index()
            if (visibleColumnsIndexes !== null) {
                index = visibleColumnsIndexes[index]
            }

            table
                .column(index)
                .search(value, strict)
                .draw()
        });
        table.on('column-visibility.dt', function (e, settings, column, state) {
            visibleColumnsIndexes = []
            table.columns(":visible").every(function (colIdx) {
                visibleColumnsIndexes.push(colIdx);
            });
        })
    })

</script>
@endsection