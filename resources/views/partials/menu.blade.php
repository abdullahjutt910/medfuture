<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <!-- <img src="{{ asset('img/dashboard/dashboard-icon-1.png') }}" alt=""> -->
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users"></i>
                        <!-- <img src="{{ asset('img/dashboard/portfolio-icon.png') }}" alt=""> -->
                        <span class="menu-txt">{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <hr class="hr-line">
                            <li
                                class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route('admin.permissions.index') }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>

                        @endcan
                        @can('role_access')
                            <hr class="hr-line">
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <hr class="hr-line">
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa-fw fas fa-user">
                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                            <hr class="hr-line">
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('candidates_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw far fa-user">
                        </i>
                        <span class="menu-txt">{{ trans('cruds.candidatesManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('candidate_access')
                            <hr class="hr-line">
                            <li
                                class="{{ request()->is('admin/candidates') || request()->is('admin/candidates/*') ? 'active' : '' }}">
                                {{-- <a href="{{ route("admin.candidates.index") }}"> --}}
                                <a href="{{ route('admin.candidates.create') }}">
                                    <i class="fa-fw fas fa-user-plus">
                                    </i>
                                    <span>{{ trans('cruds.candidate.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view_candidate_access')
                            <hr class="hr-line">
                            <li
                                class="{{ request()->is('admin/view-candidates') || request()->is('admin/view-candidates/*') ? 'active' : '' }}">
                                {{-- <a href="{{ route("admin.view-candidates.index") }}"> --}}
                                <a href="{{ route('admin.candidates.index') }}">
                                    <i class="fa-fw fas fa-user-friends">
                                    </i>
                                    <span>{{ trans('cruds.viewCandidate.title') }}</span>
                                </a>
                            </li>
                            <hr class="hr-line">
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('jobs_manangement_access')

                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-briefcase">

                        </i>
                        <span>{{ trans('cruds.jobsManangement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">

                        @can('job_create')
                            <hr class="hr-line">
                            <li class="{{ request()->is('admin/jobs') || request()->is('admin/jobs/*') ? 'active' : '' }}">
                                {{-- <a href="{{ route("admin.view-candidates.index") }}"> --}}
                                <a href="{{ route('admin.jobs.create') }}">
                                    <i class="fa-fw fas fa-user-friends">
                                    </i>
                                    <span>Add Job</span>
                                </a>
                            </li>
                            <hr class="hr-line">
                        @endcan
                        @can('job_access')
                            <li class="{{ request()->is('admin/jobs') || request()->is('admin/jobs/*') ? 'active' : '' }}">
                                {{-- <a href="{{ route("admin.view-candidates.index") }}"> --}}
                                <a href="{{ route('admin.jobs.index') }}">
                                    <i class="fa-fw fas fa-user-friends">
                                    </i>
                                    <span>{{ trans('cruds.job.title') }}</span>
                                </a>
                            </li>
                            <hr class="hr-line">
                        @endcan


                    </ul>
                </li>
            @endcan
            <li class="treeview">
                <a href="#">
                    <i class="fa-fw far fa-user">

                    </i>
                    <span class="menu-txt">{{ trans('Client Management') }}</span>
                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    @can('candidate_access')
                        <hr class="hr-line">
                        <li
                            class="{{ request()->is('admin/candidates') || request()->is('admin/candidates/*') ? 'active' : '' }}">
                            <a href="{{ route('add_client') }}">
                                <i class="fa-fw fas fa-user-plus">

                                </i>
                                <span>Add Client</span>

                            </a>
                        </li>
                    @endcan
                    @can('view_candidate_access')
                        <hr class="hr-line">
                        <li
                            class="{{ request()->is('admin/view-candidates') || request()->is('admin/view-candidates/*') ? 'active' : '' }}">
                            <a href="{{ route('show_client') }}">
                                <i class="fa-fw fas fa-user-friends"></i>
                                <span>View Client</span>
                            </a>
                        </li>
                        <hr class="hr-line">
                    @endcan
                </ul>
            </li>

            @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li
                        class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            <span>{{ trans('cruds.permission.title') }}</span>

                        </a>
                    </li>

                    @endcan
                    @can('role_access')
                    <hr class="hr-line">
                    <li class="{{ request()->is(" admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa-fw fas fa-briefcase">

                            </i>
                            <span>{{ trans('cruds.role.title') }}</span>

                        </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <hr class="hr-line">
                    <li class="{{ request()->is(" admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa-fw fas fa-user">
                            </i>
                            <span>{{ trans('cruds.user.title') }}</span>
                        </a>
                    </li>
                    <hr class="hr-line">
                    @endcan
                </ul>
            </li>
            @endcan
          
            @can('candidates_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa-fw far fa-user">
                    </i>
                    <span class="menu-txt">{{ trans('cruds.candidatesManagement.title') }}</span>
                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    @can('candidate_access')
                    <hr class="hr-line">
                    <li class="{{ request()->is(" admin/candidates") || request()->is("admin/candidates/*") ? "active" :
                        "" }}">
                        {{-- <a href="{{ route(" admin.candidates.index") }}"> --}}
                            <a href="{{ route('admin.candidates.create') }}">
                                <i class="fa-fw fas fa-user-plus">
                                </i>
                                <span>{{ trans('cruds.candidate.title') }}</span>
                            </a>
                    </li>
                    @endcan
                    @can('view_candidate_access')
                    <hr class="hr-line">
                    <li class="{{ request()->is(" admin/view-candidates") || request()->is("admin/view-candidates/*") ?
                        "active" : "" }}">
                        {{-- <a href="{{ route(" admin.view-candidates.index") }}"> --}}
                            <a href="{{ route('admin.candidates.index') }}">
                                <i class="fa-fw fas fa-user-friends">
                                </i>
                                <span>{{ trans('cruds.viewCandidate.title') }}</span>
                            </a>
                    </li>
                    <hr class="hr-line">
                    @endcan
                </ul>
            </li>


            @endcan


            <li class="treeview">
                <a href="#">
                    <i class="fa-fw far fa-user">

                    </i>
                    <span class="menu-txt">{{ trans('Client Management') }}</span>
                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    @can('candidate_access')
                    <hr class="hr-line">
                    <li class="{{ request()->is(" admin/candidates") || request()->is("admin/candidates/*") ? "active" :
                        "" }}">
                        <a href="{{ route('add_client') }}">
                            <i class="fa-fw fas fa-user-plus">

                            </i>
                            <span>Add Client</span>

                        </a>
                    </li>
                    @endcan
                    @can('view_candidate_access')
                    <hr class="hr-line">
                    <li class="{{ request()->is(" admin/view-candidates") || request()->is("admin/view-candidates/*") ?
                        "active" : "" }}">
                        <a href="{{ route('show_client') }}">
                            <i class="fa-fw fas fa-user-friends"></i>
                            <span>{{ trans('cruds.viewCandidate.title') }}</span>
                        </a>
                    </li>
                    <hr class="hr-line">
                    @endcan
                </ul>
            </li>

            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
            <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                <a href="{{ route('profile.password.edit') }}">
                    <i class="fa-fw fas fa-key">
                    </i>
                    {{ trans('global.change_password') }}
                </a>
            </li>
            @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>