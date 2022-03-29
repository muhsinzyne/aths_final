<div class="d-flex justify-content-end flex-shrink-0">

    <a
    href="{!! route('settings.users.show', $model->id)!!}"
    data-bs-toggle="tooltip"
    data-bs-placement="left"
    data-bs-trigger="hover"
    data-bs-original-title="View User"
    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
        <span class="svg-icon svg-icon-3">
            <i class="fa-solid fa-eye"></i>
        </span>
    </a>


         <a
            href="{!! route('settings.users.edit', $model->id)!!}"
            data-bs-toggle="tooltip"
            data-bs-placement="left"
            data-bs-trigger="hover"
            data-bs-original-title="Edit "
            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
            <span class="svg-icon svg-icon-3">
                <i class="fa-solid fa-pen-to-square"></i>
            </span>
        </a>




    {!! Form::open(['route' => ['settings.users.destroy', $model->id,], 'method' => 'delete', 'class'=> 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1']) !!}
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

