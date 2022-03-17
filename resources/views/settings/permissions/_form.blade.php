<div class="card-body border-top p-9">
    <div class="row mb-6">
        {{ Form::label('name', 'Name', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('name', null, ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Permission Name','required']) }}
            @error('name')
                <span class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-6">
        {{ Form::label('guard_name', 'Guard Name', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('guard_name', 'web', ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Guard Name Default web','required']) }}
            @error('guard_name')
                <span class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-6">
        {{ Form::label('description', 'Description', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('description', '', ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Add a small description to identity','required']) }}
            @error('description')
                <span class="invalid-name" role="alert">
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
        id="kt_account_profile_details_submit">
        @include('partials.general._button-indicator', [
            'label' => __( ((isset($permission)) ? 'Update' : 'Save') . ' & Create'),
        ])
    </button>

    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
        @include('partials.general._button-indicator', [
            'label' => __( ((isset($permission)) ? 'Update' : 'Save').''),
        ])
    </button>
</div>
