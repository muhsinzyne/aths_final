<x-base-layout :page="$page">

    {{ theme()->getView('settings/roles/_navbar', ['class' => 'mb-5 mb-xl-10', 'info' => $info]) }}


    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <div class="card-body pt-6">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">{{ __('Create Role') }}</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <div id="kt_account_profile_details" class="collapse show">
                        {{ Form::open(['url' => 'settings/roles','method' => 'post','id' => 'kt_account_role_form','class' => 'form']) }}
                            @include('settings.roles._form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-base-layout>
