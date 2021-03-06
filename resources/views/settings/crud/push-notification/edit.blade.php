
<x-base-layout :page="$page">

    {{ theme()->getView('settings/crud/template-values/_navbar', ['class' => 'mb-5 mb-xl-10', 'info' => $info]) }}


    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <div class="card-body pt-6">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_tempalate_details" aria-expanded="true"
                        aria-controls="kt_tempalate_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">{{ __('Edit Template Value') }}</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <div id="kt_tempalate_details" class="collapse show">
                        {{Form::model($templateValue, array('route' => array('settings.crud.template-values.update', $templateValue->id), 'method' => 'PUT', 'id' => 'kt_template_values_edit_form','class' => 'form')) }}
                            @include('settings.crud.template-values._form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-base-layout>
