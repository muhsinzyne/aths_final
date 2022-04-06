

<div class="d-flex justify-content-end flex-shrink-0">

         <a
            href="{!! route('settings.crud.template-values.edit', $model->id)!!}"
            data-toggle="tooltip"
            data-placement="bottom"
            title=""
            data-original-title="Edit Permission"
            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
            <span class="svg-icon svg-icon-3">
                <i class="fa-solid fa-pen-to-square"></i>
            </span>
            <!--end::Svg Icon-->
        </a>


    {!! Form::open(['route' => ['settings.crud.template-values.destroy', $model->id,], 'method' => 'delete', 'class'=> 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1']) !!}
    {!! Form::button('<i class="fa-solid fa-trash"></i>', [
    'type' => 'submit',
    'class' => 'btn btn-link text-danger',
    'onclick' => "return confirm('Are you sure?')",
    'data-toggle' => 'tooltip',
    'data-placement' => 'bottom',
    'data-original-title' => 'Delete'
    ]) !!}
    {!! Form::close() !!}



</div>
