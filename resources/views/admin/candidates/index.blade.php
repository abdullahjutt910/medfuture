@extends('layouts.admin')
@section('content')
    <style>
        .filter-active{
            background-color:#686868 !important;
        }
    </style>
    
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
                                <a  href="{{route('admin.filter.candidates')}}" class="btn btn-filter  {{ request('slug') == "" ? 'filter-active':'' }} "> All </a>
                            </li>
                            <li>
                                <a href="{{route('admin.filter.candidates', 'GP')}}" class="btn btn-filter {{ request('slug') == "GP" ? 'filter-active':'' }}">

                                    GP Unit </a>
                            </li>
                            <li>
                                <a href="{{route('admin.filter.candidates','HU')}}" class="btn btn-filter {{ request('slug') == "HU" ? 'filter-active':'' }}"> Hospital Unit </a>
                            </li>
                            <li>
                                <a href="{{route('admin.filter.candidates','LU')}}" class="btn btn-filter {{ request('slug') == "LU" ? 'filter-active':'' }}"> Locum Unit </a>
                            </li>
                            <li>
                                <a href="{{route('admin.filter.candidates','NU')}}" class="btn btn-filter {{ request('slug') == "NU" ? 'filter-active':'' }}"> Nursing Unit </a>
                            </li>

                            <li>
                                <a href="{{route('admin.filter.candidates','A-H')}}" class="btn btn-filter white-space-nor {{ request('slug') == "A-H" ? 'filter-active':'' }}"> AHP - HSS Unit </a>
                            </li>
                            <li>
                                <a href="{{route('admin.filter.candidates' ,'HEU')}}" class="btn btn-filter white-space-nor {{ request('slug') == "HEU" ? 'filter-active':'' }}"> Healthcare Executive Units </a>
                            </li>

                        </ul>
                    </div>
                </div>


                @include('admin.candidates.partials.search')
                <!-- ajaxTable -->

                <div class="panel-body">
                    <div class="table-responsive table-cus">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Candidate">
                            <thead>
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
                                        {{ trans('Home Phone') }}
                                    </th>
                                    <th>
                                        {{ trans('Work Phone') }}
                                    </th>

                                    <th>
                                        {{ trans('Registered') }}
                                    </th>
                                    <th>
                                        {{ trans('Verified') }}
                                    </th>
                                    <th>
                                        {{ trans('CV') }}
                                    </th>
                                    <th>
                                        {{ trans('Privacy Term') }}
                                    </th>
                                    <th>
                                        {{ trans('Source Name') }}
                                    </th>
                                    <th>
                                        {{ trans('CDF') }}
                                    </th>
                                    <th>
                                        {{ trans('Availability') }}
                                    </th>
                                    <th>
                                        {{ trans('Working Status') }}
                                    </th>
                                    <th>
                                        {{ trans('Local Graduate') }}
                                    </th>
                                    <th>
                                        {{ trans('IMG') }}
                                    </th>
                                    <th>
                                        {{ trans('Source Type') }}
                                    </th>
                                    <th>
                                        {{ trans('Prof Qualification') }}
                                    </th>
                                    <th>
                                        {{ trans('Candidate Manager') }}
                                    </th>
                                    <th>
                                        {{ trans('Rec Consultant') }}
                                    </th>
                                    <th>
                                        {{ trans('Data Administrator') }}
                                    </th>
                                    <th>
                                        {{ trans('Primary Interview Date') }}
                                    </th>

                                    <th>
                                        {{ trans('Registration Body') }}
                                    </th>
                                    <th>
                                        {{ trans('Type of Registration') }}
                                    </th>
                                    <th>
                                        {{ trans('Grade') }}
                                    </th>
                                    <th>
                                        {{ trans('Division') }}
                                    </th>
                                    <th>
                                        {{ trans('Visa Status') }}
                                    </th>
                                    <th>
                                        {{ trans('Profession') }}
                                    </th>
                                    <th>
                                        {{ trans('Seniority') }}
                                    </th>
                                    <th>
                                        {{ trans('Specialty') }}
                                    </th>
                                    <th>
                                        {{ trans('Engagement Type') }}
                                    </th>
                                    <th>
                                        {{ trans('Employment Term') }}
                                    </th>
                                    <th>
                                        {{ trans('Employment Type') }}
                                    </th>
                                    <th>
                                        {{ trans('Registration Via') }}
                                    </th>
                                    <th>
                                        {{ trans('Status') }}
                                    </th>
                                    <th>
                                        {{ trans('Created Date') }}
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($candidates as $key => $candidate)
                                <tr data-entry-id="{{ $candidate->id }}">
                                    <td>
                                    </td>
                                    <td>
                                      {{ $candidate->candidate_id ?? '' }}
                                    </td>
                                    <td>
                                        <a class="btn btn-xs candi-name-color"
                                            href="{{ route('admin.candidates.show', $candidate->id) }}">
                                            {{ $candidate->first_name ?? '' }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-xs candi-name-color"
                                            href="{{ route('admin.candidates.show', $candidate->id) }}">
                                            {{ $candidate->last_name ?? '' }}
                                        </a>
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
                                        map address
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
                                        home phone
                                    </td>
                                    <td>
                                        {{ $candidate->work ?? '' }}
                                    </td>

                                    <td>
                                        {{$candidate->candidate_profile->register ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->verified ?? ''}}
                                    </td>
                                    <td>
                                        cv
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->privacy_term ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->source_name ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->CDF ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->availability ?? ''}}
                                    </td>
                                    <td>
                                        <div class="candi-working-status">
                                        {{$candidate->candidate_profile->working_status ?? ''}}
                                        </div>
                                    </td>
                                    <td>
                                        local graduate
                                    </td>
                                    <td>
                                        IMG
                                    </td>

                                    <td>
                                        {{$candidate->candidate_profile->source_type ?? ''}}
                                    </td>
                                    <td>
                                        prof qualification
                                    </td>
                                    <td>
                                        {{$candidate->candidate_manager ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->recruitement ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->administrator ?? ''}}
                                    </td>
                                    <td>
                                        privacy interview date
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->registeration_body ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->registration_type ?? ''}}
                                    </td>
                                    <td>
                                        <div class="candi-grade">{{$candidate->candidate_profile->profile_grade ?? ''}}</div>
                                    </td>
                                    <td>
                                        {{ $candidate->devision ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->visa_type ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->profession ?? '' }}
                                    </td>

                                    <td>
                                        {{ $candidate->senority ?? '' }}
                                    </td>
                                    <td>
                                        {{ $candidate->specialty ?? '' }}
                                    </td>
                                    <td>
                                        {{$candidate->engagement_type ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->employment_term ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->employment_type ?? ''}}
                                    </td>
                                    <td>
                                        {{$candidate->candidate_profile->registration_via ?? ''}}
                                    </td>
                                    <td>
                                        <div class="candi-status">
                                            <label class="switch">
                                                <input type="checkbox" name="status" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        {{$candidate->created_at ?? ''}}
                                    </td>

                                    <td class="candidate-crud-list-btn ">
                                        <span class="three-dots btn btn-xs"><i class="fas fa-ellipsis-v"></i></span>
                                        <div class="candidate-update v-hide">
                                            @can('candidate_edit')
                                            <a class="btn btn-xs"
                                                href="{{ route('admin.candidates.edit', $candidate->id) }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            @endcan
                                            @can('candidate_show')
                                            <a class="btn btn-xs"
                                                href="{{ route('admin.candidates.show', $candidate->id) }}">
                                                <i class="far fa-eye"></i>

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
