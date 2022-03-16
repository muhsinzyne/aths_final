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
                                    <span class="card-label fw-bolder text-dark"> {{ $role->name }} </span>
                                    <span class="text-muted mt-1 fw-bold fs-7"> {{ $role->guard_name }} </span>
                                </h3>


                            </div>
                            <div class="card-body pt-1">
                                <div class="fw-bolder text-gray-600 mb-5">Total users with this role:
                                    {{ $role->users->count() }} </div>
                                <div class="d-flex flex-column text-gray-600">

                                    @foreach ($role->permissionNameList() as $key => $item)
                                        @if ($key > 5)
                                        <a href="{{route('settings.roles.show', $role->id)}}">
                                            <div style="margin: 5px">
                                                <span class="badge badge-light-primary fs-8 fw-bolder">
                                                    {{ __('and More..') }} </span>
                                            </div>
                                        </a>
                                        @break
                                    @else
                                        <div style="margin: 5px">
                                            <span class="badge badge-light-primary fs-8 fw-bolder">
                                                {{ ucwords(str_replace('.', ' > ', $item)) }}</span>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="card-footer flex-wrap pt-0">
                            <a href="{{route('settings.roles.show', $role->id)}}" class="btn modal-new">View Role</a>
                            <a href="{{route('settings.roles.edit', $role->id)}}" type="button" class="btn btn-light btn-active-light-primary my-1"
                               >Edit Role</a>
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
                        <a href="{{ route('settings.roles.create') }}">

                            <!--begin::Illustration-->
                            <img src="{{ asset(theme()->getIllustrationUrl('4.png')) }}" alt=""
                                class="mw-100 mh-150px mb-7" />
                            <!--end::Illustration-->
                            <!--begin::Label-->
                            <div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                            <!--end::Label-->
                        </a>
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
