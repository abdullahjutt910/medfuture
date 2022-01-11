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
                           
                            <i class="fas fa-plus"></i>
                            </a>
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
                                <a href="#" class="btn btn-filter white-space-nor"> AHP - HSS Unit </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-filter white-space-nor"> Healthcare Executive Units </a>
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
                    <div class="table-responsive table-cus">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Candidate">
                            <thead>
                                <!-- <tr class="no-row">
                                    <td>
                                       
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                      
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td >
                                       
                                    </td>
                                    <td >
                                     
                                    </td>
 
                                </tr> -->
                                <tr class="no-row">
                                    <td>
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Candidate ID') }}">
                                        <!-- <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::TITLE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select> -->
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('First Name') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('Last Name') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Gender') }}">
                                        <!-- <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::GENDER_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select> -->
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
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Candidate ID') }}">
                                        <!-- <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::TITLE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select> -->
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('First Name') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('Last Name') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Gender') }}">
                                        <!-- <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::GENDER_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select> -->
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
                                            @foreach(App\Models\Candidate::DISTRICT_SELECT as $key => $item)
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
                                            @foreach(App\Models\Candidate::DISTRICT_SELECT as $key => $item)
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
                                            @foreach(App\Models\Candidate::DISTRICT_SELECT as $key => $item)
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
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Candidate ID') }}">
                                        <!-- <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::TITLE_SELECT as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select> -->
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('First Name') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Last Name') }}">
                                    </td>
                                    <!-- <td>
                                    <input class="search" type="text" placeholder="{{ trans('email') }}">
                                    </td> -->
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Gender') }}">
                                        
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Address Line 1') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Address Line 2') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('State/Region') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Map address') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Country') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Post Code') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Mobile Number') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Date of Birth') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Work') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Distance to Main') }}">
                                       
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Town') }}">
                                       
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('District') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('City') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('profession') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Devision') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Senority') }}">
                                       
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Specialty') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('professional Qualification') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Graduation') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Country of Degree') }}">
                                    
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Medical School') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Practice Country') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Practice Licensing Body') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('License Type') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Experience Home Country') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Experience Residing Country') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Recognised Comparable Experience') }}">
                                        <!-- <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Candidate::RECOGNISED_COMPARABLE_EXPERIENCE_SELECT as
                                            $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select> -->
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('CURRENT EMPLOYMENT STATUS') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('COUNTRY OF CITIZENSHIP') }}">
                                        
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('COUNTRY OF RESIDENCE') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('VISA TYPE') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Work Rights Status') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('PROFESSION LOGIN') }}">
                                    </td>
                                    <td>
                                    <input class="search" type="text" placeholder="{{ trans('Username') }}">
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
                                        {{ trans('Candidate ID') }}
                                    </th>
                                    <th>
                                        {{ trans('First Name') }}
                                    </th>
                                    <th>
                                        {{ trans('Last Name') }}
                                    </th>
                                    <th>
                                        {{ trans('Email') }}
                                    </th>
                                    <th>
                                        {{ trans('Gender') }}
                                    </th>
                                    <th>
                                        {{ trans('Address 1') }}
                                    </th>
                                    <th>
                                        {{ trans('Address 2') }}
                                    </th>
                                    <th>
                                        {{ trans('State/Region') }}
                                    </th>
                                    <th>
                                        {{ trans('Map Address') }}
                                    </th>
                                    <th>
                                        {{ trans('Country') }}
                                    </th>
                                    <th>
                                        {{ trans('Postcode') }}
                                    </th>
                                    <th>
                                        {{ trans('Mobile Number') }}
                                    </th>
                                    <th>
                                        {{ trans('DOB') }}
                                    </th>
                                    <th>
                                        {{ trans('Work') }}
                                    </th>
                                    <th>
                                        {{ trans('Distance To main') }}
                                    </th>
                                    <th>
                                        {{ trans('Town') }}
                                    </th>
                                    <th>
                                        {{ trans('District') }}
                                    </th>
                                    <th>
                                        {{ trans('Main City') }}
                                    </th>
                                    <th>
                                        {{ trans('Profession') }}
                                    </th>
                                    <th>
                                        {{ trans('Devision') }}
                                    </th>
                                    <th>
                                        {{ trans('Senority') }}
                                    </th>
                                    <th>
                                        {{ trans('Specialty') }}
                                    </th>
                                    <th>
                                        {{ trans('Professional Qualification') }}
                                    </th>
                                    <th>
                                        {{ trans('Graduation') }}
                                    </th>
                                    <th>
                                        {{ trans('Country Of Primary Degree') }}
                                    </th>
                                    <th>
                                        {{ trans('Medical School') }}
                                    </th>
                                    <th>
                                        {{ trans('Practice Country') }}
                                    </th>
                                    <th>
                                        {{ trans('Practice Licensing Body') }}
                                    </th>
                                    <th>
                                        {{ trans('License Type') }}
                                    </th>
                                    <th>
                                        {{ trans('Experience From Home') }}
                                    </th>
                                    <th>
                                        {{ trans('Experience From Residing') }}
                                    </th>
                                    <th>
                                        {{ trans('Recognised Comparable Experience') }}
                                    </th>
                                    <th>
                                        {{ trans('Current Employment Status') }}
                                    </th>
                                    <th>
                                        {{ trans('Country Of Citizenship') }}
                                    </th>
                                    <th>
                                        {{ trans('Country Of Residence') }}
                                    </th>
                                    <th>
                                        {{ trans('Visa Type') }}
                                    </th>
                                    <th>
                                        {{ trans('Work Rights Status') }}
                                    </th>
                                    <th>
                                        {{ trans('Profession Login') }}
                                    </th>
                                    <th>
                                        {{ trans('Username') }}
                                    </th>
                                    <th>
                                        {{ trans('CV Document') }}
                                    </th>
                                    <th>
                                        {{ trans('Registration Form Document') }}
                                    </th>
                                    <th>
                                        {{ trans('Privacy Concerns') }}
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    <!-- <th>
                                        &nbsp;
                                    </th> -->
                                </tr>

                            </thead>
                            <tbody>

                                    @foreach($candidates as $key => $candidate)
                                    <tr data-entry-id="{{ $candidate->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $candidate->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->gender ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->address_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->address_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->state ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->home ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->country ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->post_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->mobile ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->dob ?? '' }}
                                        </td>


                                        <td>
                                            {{ $candidate->work ?? '' }}
                                        </td>


                                        <td>
                                            {{ $candidate->distance_to_main ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->town ?? '' }}
                                        </td>

                                        <td>
                                            {{ $candidate->district ?? '' }}
                                        </td>

                                        <td>
                                            {{ $candidate->main_city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->profession ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->devision ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->senority ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->specialty ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->professional_qualification ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->graduation ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->country_of_primary_degree ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->medical_school ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->practice_country ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->practice_licensing_body ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->license_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->experience_from_home ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->experience_from_residing ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->recognised_comparable_experience ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->current_employment_status ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->country_of_citizenship ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->country_of_residence ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->visa_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->work_rights_status ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->profession_login ?? '' }}
                                        </td>
                                        <td>
                                            {{ $candidate->username ?? '' }}
                                        </td>
                                        <td>
                                            @if($candidate->cv_document)
                                            <a href="{{ url('files/'. $candidate->cv_document) }}" target="_blank">{{ trans('global.view_file') }}</a>
                                            @endif
                                        </td>
                                        <td>

                                            @if($candidate->registration_form_document)
                                            <a href="{{ url('files/'. $candidate->registration_form_document) }}" target="_blank">{{ trans('global.view_file') }}</a>
                                            @endif
                                        </td>
                                        <td>

                                            @if($candidate->privacy_concerns)
                                            <a href="{{ url('files/'. $candidate->privacy_concerns) }}" target="_blank">{{ trans('global.view_file') }}</a>
                                            @endif
                                        </td>
                                        <td class="candidate-crud-list-btn ">
                                        <span class="three-dots btn btn-xs"><i class="fas fa-ellipsis-v"></i></span>
                                        <div class="candidate-update v-hide">
                                            @can('candidate_edit')
                                            <a class="btn btn-xs"
                                                href="{{ route('admin.candidates.edit', $candidate->id) }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                <!-- <img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid" alt="Edit-img"> -->
                                                <!-- {{ trans('global.edit') }} -->
                                            </a>
                                            @endcan
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
                                                <i class="fas fa-upload"></i>
                                            </a>
                                            @endcan
                                            @can('candidate_delete')
                                            <form action="{{ route('admin.candidates.destroy', $candidate->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-xs">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                                <!-- <img src="{{asset('img/dashboard/Delete-Trash.png')}}" class="img-fluid" alt="Delete-Trash"> -->
                                            </form>
                                            @endcan
                                        </div>
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