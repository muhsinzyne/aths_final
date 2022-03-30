<div class="">
    @if (theme()->isGenderMale($model->Gender))
    <span class="badge badge-light-primary"> {{__('Male')}} </span>

    @else
    <span class="badge badge-light-warning"> {{__('Female')}} </span>

    @endif
</div>
