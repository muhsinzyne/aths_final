<div class="text-end">
    @if ($model->Status == 'Active')
        <span class="badge badge-success"> {{ $model->Status }} </span>
    @else
        <span class="badge badge-danger"> {{ $model->Status }} </span>
    @endif
</div>
