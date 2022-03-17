@foreach ($model->roles as $role)
<a href="" class="badge badge-light-{{theme()->getAnyColor($role->id)}} fs-7 m-1">{{$role->name}}</a>
@endforeach
