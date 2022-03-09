<x-base-layout :page="$page">

    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <div class="card mb-5 mb-xl-8">
                <div class="card-body">
                    <div class="d-flex flex-center flex-column py-5">
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="{{ asset(theme()->getMediaUrlPath() . 'avatars/300-6.jpg') }}" alt="image" />
                        </div>
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3"> {{ $user->name ?? '' }}
                        </a>
                        <div class="mb-9">
                            <div class="badge badge-lg badge-light-primary d-inline">
                                {{ theme()->readableString($user->type ?? '') }} </div>
                        </div>
                        {{-- <div class="fw-bolder mb-3">
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true"
                                data-bs-content="Number of support tickets assigned, closed and pending this week."></i>
                        </div> --}}
                    </div>
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details"
                            role="button" aria-expanded="false" aria-controls="kt_user_view_details">
                            {{__('Details')}}

                            {{-- <span class="ms-2 rotate-180">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </span> --}}
                        </div>
                        <span data-bs-toggle="tooltip">
                            <a href="#" class="btn btn-sm btn-light-primary modal-new" href="http://athsnew.local/settings/users/2/edit"> {{__('Edit')}} </a>
                        </span>
                    </div>
                    <div class="separator"></div>
                    <div id="kt_user_view_details" class="collapse show">
                        <div class="pb-5 fs-6">
                            <div class="fw-bolder mt-5">{{__('Account ID')}}</div>
                            <div class="text-gray-600">{{$user->id}}</div>
                            <div class="fw-bolder mt-5">{{__('Email')}}</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary"> {{$user->email ?? ''}} </a>
                            </div>

                            {{-- <div class="fw-bolder mt-5">{{__('Address')}}</div>
                            <div class="text-gray-600">101 Collin Street,
                                <br />Melbourne 3000 VIC
                                <br />Australia
                            </div>
                            --}}
                            <div class="fw-bolder mt-5">{{__('Language')}}</div>
                            <div class="text-gray-600">{{__('English')}}</div>
                            <div class="fw-bolder mt-5"> {{__('Joined On')}} </div>
                            <div class="text-gray-600"> {{$user->created_at}}  </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0">
                    <div class="card-title">
                        <h3 class="fw-bolder m-0"> {{__('System Integrations')}}  </h3>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                    fill="black" />
                                <path
                                    d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-bold">
                                <div class="fs-6 text-gray-700">  {{__(' By connecting an account, you hereby agree to our')}}
                                    <a href="#" class="me-1"> {{__('privacy policy')}} </a> {{__('and')}}
                                    <a href="#"> {{__('terms of use')}} </a>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="d-flex flex-stack">
                            <div class="d-flex">
                                <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                                <div class="d-flex flex-column">
                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">{{__('Communicator Mobile App')}}</a>
                                    <div class="fs-6 fw-bold text-muted"> {{_('Mobile Application integration with the system..')}} </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" name="google" type="checkbox" value="1"
                                        id="kt_modal_connected_accounts_google" checked="checked" />
                                    <span class="form-check-label fw-bold text-muted"
                                        for="kt_modal_connected_accounts_google"></span>
                                </label>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <div class="d-flex flex-stack">
                            <div class="d-flex">
                                <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
                                <div class="d-flex flex-column">
                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder"> {{__('Web Applicaiton')}}</a>
                                    <div class="fs-6 fw-bold text-muted"> {{__('Access to web applicaiton console')}} </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" name="github" type="checkbox" value="1"
                                        id="kt_modal_connected_accounts_github" checked="checked" />
                                    <span class="form-check-label fw-bold text-muted"
                                        for="kt_modal_connected_accounts_github"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-0 d-flex justify-content-center pt-0">
                    <button class="btn btn-sm btn-light-primary"> {{__('Save Changes')}} </button>
                </div>
            </div>
        </div>
        <div class="flex-lg-row-fluid ms-lg-15">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_user_view_overview_tab">{{__('Overview')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_user_view_overview_events_and_logs_tab">  {{__('Events & Logs')}}  </a>
                </li>
                <li class="nav-item ms-auto">
                    {{-- <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        {{__('Actions')}}

                        <span class="svg-icon svg-icon-2 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="black" />
                            </svg>
                        </span>
                    </a> --}}
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6"
                        data-kt-menu="true">
                        {{-- <div class="menu-item px-5">
                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
                        </div> --}}

                        {{-- <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">Create invoice</a>
                        </div> --}}

                        {{-- <div class="menu-item px-5">
                            <a href="#" class="menu-link flex-stack px-5">Create payments
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Specify a target name for future usage and reference"></i></a>
                        </div> --}}

                        {{-- <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <div class="menu-sub menu-sub-dropdown w-175px py-4">

                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-5">Apps</a>
                                </div>

                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-5">Billing</a>
                                </div>

                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-5">Statements</a>
                                </div>

                                <div class="separator my-2"></div>

                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value=""
                                                name="notifications" checked="checked"
                                                id="kt_user_menu_notifications" />
                                            <span class="form-check-label text-muted fs-6"
                                                for="kt_user_menu_notifications">Notifications</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="separator my-3"></div> --}}
                        {{-- <div class="menu-item px-5">
                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                        </div> --}}
                        {{-- <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">Reports</a>
                        </div> --}}

                        {{-- <div class="menu-item px-5 my-1">
                            <a href="#" class="menu-link px-5">Account Settings</a>
                        </div> --}}

                        {{-- <div class="menu-item px-5">
                            <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                        </div> --}}
                    </div>

                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                    <div class="card card-flush mb-6 mb-xl-9">
                        <div class="card-header mt-6">
                        </div>
                        <div class="card-body p-9 pt-4">
                            <div class="tab-content">
                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                    {{-- <div class="d-flex flex-stack position-relative mt-6">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-bold ms-5">
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span>
                                            </div>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Dashboard
                                                UI/UX Design Review</a>
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Bob Harris</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    </div> --}}
                                    {{-- <div class="d-flex flex-stack position-relative mt-6">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-bold ms-5">
                                            <!--begin::Time-->
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team
                                                Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Caleb Donaldson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    </div> --}}
                                    {{-- <div class="d-flex flex-stack position-relative mt-6">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-bold ms-5">
                                            <div class="fs-7 mb-1">16:30 - 17:30
                                                <span class="fs-7 text-muted text-uppercase">pm</span>
                                            </div>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Creative
                                                Content Initiative</a>
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Walter White</a>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    </div> --}}
                                    {{-- <div class="d-flex flex-stack position-relative mt-6">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-bold ms-5">
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span>
                                            </div>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Creative
                                                Content Initiative</a>
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Yannis Gloverson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    </div> --}}
                                    {{-- <div class="d-flex flex-stack position-relative mt-6">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-bold ms-5">
                                            <div class="fs-7 mb-1">12:00 - 13:00
                                                <span class="fs-7 text-muted text-uppercase">pm</span>
                                            </div>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Dashboard
                                                UI/UX Design Review</a>
                                            <div class="fs-7 text-muted">Lead by
                                                <a href="#">Mark Randall</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    </div> --}}
                                    <!--end::Time-->
                                </div>

                            </div>
                        </div>
                    </div>

                        <div class="card card-flush mb-6 mb-xl-9">
                        <div class="card-header mt-6">
                            {{-- <div class="card-title flex-column">
                                <h2 class="mb-1">User's Tasks</h2>
                                <div class="fs-6 fw-bold text-muted">Total 25 tasks in backlog</div>
                            </div> --}}
                            {{-- <div class="card-toolbar">
                                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_task">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z"
                                                fill="black" />
                                            <rect x="11" y="19" width="10" height="2" rx="1"
                                                transform="rotate(-90 11 19)" fill="black" />
                                            <rect x="7" y="13" width="10" height="2" rx="1" fill="black" />
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                        </svg>
                                    </span>
                                    Add Task
                                </button>
                            </div> --}}
                        </div>
                        <div class="card-body d-flex flex-column">
                            {{-- <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <div class="fw-bold ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Create FureStibe
                                        branding logo</a>
                                    <div class="fs-7 text-muted">Due in 1 day
                                        <a href="#">Karina Clark</a>
                                    </div>
                                </div>
                                <button type="button"
                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    data-kt-menu-id="kt-users-tasks">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Update Status</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <div class="fv-row mb-10">
                                            <label class="form-label fs-6 fw-bold">Status:</label>
                                            <select class="form-select form-select-solid" name="task_status"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>

                                <div class="fw-bold ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Schedule a meeting
                                        with FireBear CTO John</a>
                                    <div class="fs-7 text-muted">Due in 3 days
                                        <a href="#">Rober Doe</a>
                                    </div>
                                </div>

                                <button type="button"
                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    data-kt-menu-id="kt-users-tasks">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Update Status</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <div class="fv-row mb-10">
                                            <label class="form-label fs-6 fw-bold">Status:</label>

                                            <select class="form-select form-select-solid" name="task_status"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div> --}}

                            {{-- <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>

                                <div class="fw-bold ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">9 Degree Project
                                        Estimation</a>
                                    <div class="fs-7 text-muted">Due in 1 week
                                        <a href="#">Neil Owen</a>
                                    </div>
                                </div>

                                <button type="button"
                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    data-kt-menu-id="kt-users-tasks">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Update Status</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <div class="fv-row mb-10">
                                            <label class="form-label fs-6 fw-bold">Status:</label>

                                            <select class="form-select form-select-solid" name="task_status"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <div class="fw-bold ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Dashboard UI &amp;
                                        UX for Leafr CRM</a>
                                    <div class="fs-7 text-muted">Due in 1 week
                                        <a href="#">Olivia Wild</a>
                                    </div>
                                </div>

                                <button type="button"
                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    data-kt-menu-id="kt-users-tasks">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Update Status</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">

                                        <div class="fv-row mb-10">
                                            <label class="form-label fs-6 fw-bold">Status:</label>

                                            <select class="form-select form-select-solid" name="task_status"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="d-flex align-items-center position-relative">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                <div class="fw-bold ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Mivy App R&amp;D,
                                        Meeting with clients</a>
                                    <div class="fs-7 text-muted">Due in 2 weeks
                                        <a href="#">Sean Bean</a>
                                    </div>
                                </div>
                                <button type="button"
                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    data-kt-menu-id="kt-users-tasks">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Update Status</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                        <div class="fv-row mb-10">
                                            <label class="form-label fs-6 fw-bold">Status:</label>
                                            <select class="form-select form-select-solid" name="task_status"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">In Process</option>
                                                <option value="4">Rejected</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-users-update-task-status="reset">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-users-update-task-status="submit">
                                                <span class="indicator-label">Apply</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <div class="card-title">
                                <h2> {{__('Login Sessions')}} </h2>
                            </div>

                            {{-- <div class="card-toolbar">
                                <button type="button" class="btn btn-sm btn-flex btn-light-primary"
                                    id="kt_modal_sign_out_sesions">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1"
                                                fill="black" />
                                            <path
                                                d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z"
                                                fill="black" />
                                            <path
                                                d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                                fill="#C4C4C4" />
                                        </svg>
                                    </span>
                                    Sign out all sessions
                                </button>
                            </div> --}}
                        </div>

                        <div class="card-body pt-0 pb-5">
                            <div class="table-responsive">
                                {{-- <table class="table align-middle table-row-dashed gy-5"
                                    id="kt_table_users_login_session">
                                    <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                        <tr class="text-start text-muted text-uppercase gs-0">
                                            <th class="min-w-100px">Location</th>
                                            <th>Device</th>
                                            <th>IP Address</th>
                                            <th class="min-w-125px">Time</th>
                                            <th class="min-w-70px">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td>Australia</td>

                                            <td>Chome - Windows</td>

                                            <td>207.39.34.166</td>

                                            <td>23 seconds ago</td>

                                            <td>Current session</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>

                                            <td>Safari - iOS</td>

                                            <td>207.26.37.150</td>

                                            <td>3 days ago</td>

                                            <td>
                                                <a href="#" data-kt-users-sign-out="single_user">Sign out</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>

                                            <td>Chrome - Windows</td>

                                            <td>207.25.41.24</td>

                                            <td>last week</td>

                                            <td>Expired</td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                    </div>

                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <div class="card-title">
                                <h2>{{__('Logs')}}</h2>
                            </div>

                            {{-- <div class="card-toolbar">
                                <button type="button" class="btn btn-sm btn-light-primary">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                fill="black" />
                                            <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    Download Report
                                </button>
                            </div> --}}
                        </div>
                        {{-- <div class="card-body py-0">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5"
                                    id="kt_table_users_logs">
                                    <tbody>
                                        <tr>
                                            <td class="min-w-70px">
                                                <div class="badge badge-light-success">200 OK</div>
                                            </td>

                                            <td>POST /v1/invoices/in_1895_4029/payment</td>

                                            <td class="pe-0 text-end min-w-200px">05 May 2022, 6:43 am</td>
                                        </tr>

                                        <tr>
                                            <td class="min-w-70px">
                                                <div class="badge badge-light-warning">404 WRN</div>
                                            </td>

                                            <td>POST /v1/customer/c_620793164bfc9/not_found</td>

                                            <td class="pe-0 text-end min-w-200px">25 Oct 2022, 10:10 pm</td>
                                        </tr>

                                        <tr>
                                            <td class="min-w-70px">
                                                <div class="badge badge-light-warning">404 WRN</div>
                                            </td>

                                            <td>POST /v1/customer/c_620793164bfc9/not_found</td>

                                            <td class="pe-0 text-end min-w-200px">21 Feb 2022, 5:20 pm</td>
                                        </tr>

                                        <tr>
                                            <td class="min-w-70px">
                                                <div class="badge badge-light-success">200 OK</div>
                                            </td>

                                            <td>POST /v1/invoices/in_7493_1611/payment</td>

                                            <td class="pe-0 text-end min-w-200px">05 May 2022, 2:40 pm</td>
                                        </tr>

                                        <tr>
                                            <td class="min-w-70px">
                                                <div class="badge badge-light-success">200 OK</div>
                                            </td>

                                            <td>POST /v1/invoices/in_7493_1611/payment</td>

                                            <td class="pe-0 text-end min-w-200px">21 Feb 2022, 5:30 pm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <div class="card-title">
                                <h2>{{__('Events')}}</h2>
                            </div>

                            {{-- <div class="card-toolbar">
                                <button type="button" class="btn btn-sm btn-light-primary">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                fill="black" />
                                            <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    Download Report
                                </button>
                            </div> --}}
                        </div>
                        {{-- <div class="card-body py-0">
                            <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5"
                                id="kt_table_customers_events">
                                <tbody>
                                    <tr>
                                        <td class="min-w-400px">Invoice
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary me-1">#KIO-45656</a>status
                                            has changed from
                                            <span class="badge badge-light-succees me-1">In Transit</span>to
                                            <span class="badge badge-light-success">Approved</span>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 9:23 pm</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has
                                            made payment to
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2022, 8:43 pm</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has
                                            made payment to
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a>
                                        </td>

                                        <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2022, 5:20 pm</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">Invoice
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has
                                            been
                                            <span class="badge badge-light-danger">Declined</span>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2022, 5:30 pm</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has
                                            made payment to
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2022, 5:30 pm</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">Invoice
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status
                                            has changed from
                                            <span class="badge badge-light-warning me-1">Pending</span>to
                                            <span class="badge badge-light-info">In Progress</span>
                                        </td>

                                        <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 6:43 am</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">Invoice
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has
                                            been
                                            <span class="badge badge-light-danger">Declined</span>
                                        </td>

                                        <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 11:05 am</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">Invoice
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status
                                            has changed from
                                            <span class="badge badge-light-info me-1">In Progress</span>to
                                            <span class="badge badge-light-primary">In Transit</span>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2022, 11:05 am</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has
                                            made payment to
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 6:05 pm</td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-400px">Invoice
                                            <a href="#"
                                                class="fw-bolder text-gray-900 text-hover-primary me-1">#KIO-45656</a>status
                                            has changed from
                                            <span class="badge badge-light-succees me-1">In Transit</span>to
                                            <span class="badge badge-light-success">Approved</span>
                                        </td>
                                        <td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2022, 11:30 am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-base-layout>
