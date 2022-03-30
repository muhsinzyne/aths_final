<div class="">
    @if ($model->IsRegEnabled)
    <span class="badge badge-light-success">  {{__('Enabled')}} </span>

    @else
    <span class="badge badge-light-danger"> {{__('Disabled')}} </span>

    @endif
</div>
