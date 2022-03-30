

<x-base-layout :page="$page">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3 actionBlock">
                <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="{{ __('Create Permission') }}">
                    <a href="{{Route('schools.create') }}" class="btn btn-sm btn-primary fw-bolder">
                        <i class="fa-solid fa-plus"></i>  {{__('Create Permission')}}
                    </a>
                </div>
            </div>
            <div class="card-body pt-6">
                @include('common._table')
            </div>
        </div>
    </div>
</x-base-layout>
