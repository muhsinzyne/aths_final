<x-base-layout :page="$page">

    {{ theme()->getView('settings/permissions/_navbar', ['class' => 'mb-5 mb-xl-10', 'info' => $info]) }}


    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3 actionBlock">
                {{-- <div class="me-4">
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        {!! theme()->getSvgIcon('icons/duotune/general/gen031.svg', 'svg-icon-5 svg-icon-gray-500 me-1') !!}
                        Filter
                    </a>
                    {{ theme()->getView('partials/menus/_menu-1') }}
                </div> --}}



                <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="{{ __('Create Permission') }}">
                    <a href="{{Route('settings.permission.create') }}" class="btn btn-sm btn-primary fw-bolder">
                        <i class="fa-solid fa-plus"></i>  {{__('Create Permission')}}
                    </a>
                </div>



                {{-- <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                        </div>
                        <div class="d-flex my-4">
                            <a href="{{ Route('settings.permission.create') }}" class="btn btn-sm btn-primary me-3" data-bs-toggle="tooltip"
                                data-bs-placement="left" data-bs-trigger="hover" title="Coming soon"> {{__('Create Permission')}} </a>

                            <div class="me-0">
                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-three-dots fs-3"></i>
                                </button>
                                {{ theme()->getView('partials/menus/_menu-3') }}
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="card-body pt-6">
                @include('settings.permissions._table')
            </div>
        </div>
    </div>


</x-base-layout>
