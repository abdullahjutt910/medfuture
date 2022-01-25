@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-default back-candidate" href="{{ route('admin.candidates.index') }}">
                        <div class="less-then-icon"> <i class="fas fa-chevron-left"></i> </div>
                    </a>
                    <h4> {{ trans('cruds.candidate.title_singular') }}</h4>
                    <!-- <h4> {{ trans('global.create') }} {{ trans('cruds.candidate.title_singular') }}</h4>    -->
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="view-job">

                <div class="row">
                    <div class="col-md-3">
                        <div class="job-client-details">
                            <h3>Client Details</h3>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-2">
                                    <img src=" {{asset('img/dashboard/Add-User-Male.png')}}"
                                    class="img-fluid" alt="profile-img">
                                  </div>
                                  <div class="col-md-10">
                                    <div class="card-body">
                                      <h5 class="card-title">Job ID</h5>
                                      <p class="card-text"><small class="text-muted">6052</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        
                    
                    </div>
                    <div class="col-md-6">
                    
                    </div>
                    <div class="col-md-3">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection