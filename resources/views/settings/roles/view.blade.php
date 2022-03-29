<?php

// echo '<pre>';
// print_r($datatable);
// echo '</pre>';
// die();
?>

<x-base-layout :page="$page">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="d-flex flex-column flex-lg-row">
                <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
                    <div class="card card-flush">
                        <div class="card-header">
                            <div class="card-title">
                                <h2 class="mb-0">{{ ucwords($role->name) }}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-1">
                            <div class="fw-bolder text-gray-600 mb-5">Total users with this role:
                                {{ $role->users->count() }}
                            </div>
                            <div class="d-flex flex-column text-gray-600">
                                @foreach ($role->permissionNameList() as $key => $item)
                                    <div style="margin: 5px">
                                        <span class="badge badge-light-primary fs-8 fw-bolder">
                                            {{ ucwords(str_replace('.', ' > ', $item)) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer pt-0">
                            <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update_role">Edit Role</button>
                        </div>
                    </div>


                </div>
                <div class="flex-lg-row-fluid ms-lg-10">
                    <div class="card card-flush mb-6 mb-xl-9">
                        <div class="card-header pt-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="d-flex align-items-center">Users Assigned
                                    <span class="text-gray-600 fs-6 ms-1">({{ $role->users->count() }})</span>
                                </h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            {{-- <div class="card-toolbar">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1"
                                    data-kt-view-roles-table-toolbar="base">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-roles-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-15"
                                        placeholder="Search Users" />
                                </div>
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-view-roles-table-toolbar="selected">
                                    <div class="fw-bolder me-5">
                                        <span class="me-2"
                                            data-kt-view-roles-table-select="selected_count"></span>Selected
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                        data-kt-view-roles-table-select="delete_selected">Delete Selected</button>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-body pt-0">
                            {{ $dataTable->table() }}
                            @section('scripts')
                                {{ $dataTable->scripts() }}
                            @endsection

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>

</x-base-layout>
