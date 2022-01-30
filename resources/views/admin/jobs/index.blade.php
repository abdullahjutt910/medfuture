@extends('layouts.admin')
@section('content')
<div class="content">
    @can('job_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.jobs.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.job.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.job.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Job">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.company_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.trade_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.abn') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.devision') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.cetagory') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.bussiness_service') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.address_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.address_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.suburb') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.post_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.country') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.district') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.distance_to_main_city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.main_city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.website') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.google_address_link') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.corporate_brand') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.ownership_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.branch') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.profession') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.division') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.specialty') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.seniority') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.skills') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.placement_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.engagment_term') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.employment_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.gross_salary') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.gross_salary_information') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.billing_share') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.billing_share_information') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.hourly_rate') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.hourly_rate_information') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.post_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.priority_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.commencement_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.finished_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.recruitment_consultant') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.contact_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.client_manager') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.recruitment_consultant_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.data_administrator') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $key => $job)
                                    <tr data-entry-id="{{ $job->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $job->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::COMPANY_NAME_SELECT[$job->company_name] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->trade_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->abn ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::DEVISION_SELECT[$job->devision] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::CETAGORY_SELECT[$job->cetagory] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::BUSSINESS_SERVICE_SELECT[$job->bussiness_service] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->address_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->address_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::SUBURB_SELECT[$job->suburb] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::STATE_SELECT[$job->state] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->post_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::COUNTRY_SELECT[$job->country] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::DISTRICT_SELECT[$job->district] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->distance_to_main_city ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::MAIN_CITY_SELECT[$job->main_city] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->website ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->google_address_link ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->corporate_brand ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::OWNERSHIP_TYPE_SELECT[$job->ownership_type] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->branch ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::PROFESSION_SELECT[$job->profession] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::DIVISION_SELECT[$job->division] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::SPECIALTY_SELECT[$job->specialty] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::SENIORITY_SELECT[$job->seniority] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::SKILLS_SELECT[$job->skills] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::PLACEMENT_TYPE_SELECT[$job->placement_type] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::ENGAGMENT_TERM_SELECT[$job->engagment_term] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::EMPLOYMENT_TYPE_SELECT[$job->employment_type] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->gross_salary ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->gross_salary_information ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->billing_share ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->billing_share_information ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->hourly_rate ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->hourly_rate_information ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->post_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::PRIORITY_STATUS_SELECT[$job->priority_status] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->commencement_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->finished_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->recruitment_consultant ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->contact_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::CLIENT_MANAGER_SELECT[$job->client_manager] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->recruitment_consultant_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Job::DATA_ADMINISTRATOR_SELECT[$job->data_administrator] ?? '' }}
                                        </td>
                                        <td>
                                            @can('job_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.jobs.show', $job->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('job_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.jobs.edit', $job->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('job_delete')
                                                <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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
@can('job_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.jobs.massDestroy') }}",
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
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Job:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection