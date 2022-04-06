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

    <div class="row mb-6">
        {{ Form::label('value', 'Value', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('value', null, ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Value','required']) }}
            @error('value')
                <span class="invalid-value" role="alert">
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
