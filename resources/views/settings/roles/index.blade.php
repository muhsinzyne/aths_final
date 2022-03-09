<x-base-layout :page="$page">

    {{-- {{ theme()->getView('settings/roles/_navbar', ['class' => 'mb-5 mb-xl-10', 'info' => $info]) }}


    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3 actionBlock">
                <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="{{ __('Create Role') }}">
                    <a href="{{Route('settings.roles.create') }}" class="btn btn-sm btn-primary fw-bolder">
                        <i class="fa-solid fa-plus"></i>  {{__('Create Role')}}
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">


                @foreach ($roles as $role)
                <div class="col-md-4">
                    <div class="card card-flush h-md-100">
                        <div class="card-header">

                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark"> {{$role->name}} </span>
                                <span class="text-muted mt-1 fw-bold fs-7"> {{$role->guard_name}} </span>
                            </h3>


                        </div>
                        <div class="card-body pt-1">
                            <div class="fw-bolder text-gray-600 mb-5">Total users with this role: 5</div>
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-3"></span>All Admin Controls</div>
                                <div class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries</div>
                                <div class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-3"></span>Enabled Bulk Reports</div>
                                <div class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-3"></span>View and Edit Payouts</div>
                                <div class="d-flex align-items-center py-2">
                                <span class="bullet bg-primary me-3"></span>View and Edit Disputes</div>
                                <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>and 7 more...</em>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer flex-wrap pt-0">
                            <a href="" class="btn modal-new">View Role</a>
                            <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="ol-md-4">
                    <!--begin::Card-->
                    <div class="card h-md-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-clear d-flex flex-column flex-center modal-new" data-href="http://athsnew.local/settings/roles">
                                <!--begin::Illustration-->
                                <img src="{{asset(theme()->getIllustrationUrl('4.png'))}}" alt="" class="mw-100 mh-150px mb-7" />
                                <!--end::Illustration-->
                                <!--begin::Label-->
                                <div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                                <!--end::Label-->
                            </button>
                            <!--begin::Button-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
            </div>

        </div>
        <!--end::Container-->
    </div>


</x-base-layout>
