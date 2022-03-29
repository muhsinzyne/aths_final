<div class="d-flex justify-content-end flex-shrink-0">



    {!! Form::open(['route' => ['settings.roles.remove_user_from_role', ['role_id'=> $model->role_id, 'user_id' => $model->id]], 'method' => 'delete', 'class'=> 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1']) !!}
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

