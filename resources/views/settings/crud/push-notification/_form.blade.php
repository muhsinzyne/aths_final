<div class="card-body border-top p-9">
    <div class="row mb-6">
        {{ Form::label('code', 'Code', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('code', null, ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Code','required']) }}
            @error('code')
                <span class="invalid-code" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mg-6" style="margin-bottom: 10px">
        <div class="col-lg-4 fw-bold fs-6"></div>
        <div class="col-lg-8 fv-row">
            @foreach ($templateValues as $key => $temItem)
            <span data-id="tempalateData" data-value="[:{{$temItem->code}}]" class="badge badge-light-primary fs-5 clicktoinject">{{theme()->readableString($temItem->value)}}</span>

            @endforeach
        </div>
    </div>


    <div class="row mb-6">
        {{ Form::label('template', 'Template', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::textarea('template', null, ['id'=> 'tempalateData', 'class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Template','required']) }}
            @error('template')
                <span class="invalid-template" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row mb-6">
        {{ Form::label('description', 'Description', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::textarea('description', null, [ 'class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Template Description','rows'=> '3','required']) }}
            @error('description')
                <span class="invalid-description" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-6">
        {{ Form::label('template_id', 'Tempalate ID', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('template_id', null, ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Template ID']) }}
            @error('template_id')
                <span class="invalid-template_id" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

</div>

<div class="card-footer d-flex justify-content-end py-6 px-9">
    <button type="reset"
        class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button>

    <button type="submit" name="save_and_add" value="1" class="btn btn-primary me-2"
        id="kt_tempalate_values_submit">
        @include('partials.general._button-indicator', [
            'label' => __( ((isset($templateValue)) ? 'Update' : 'Save') . ' & Create'),
        ])
    </button>

    <button type="submit" class="btn btn-primary" id="kt_tempalate_values_submit">
        @include('partials.general._button-indicator', [
            'label' => __( ((isset($templateValue)) ? 'Update' : 'Save').''),
        ])
    </button>
</div>
