<div class="d-flex align-items-center">
    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
        <a href="../../demo1/dist/apps/user-management/users/view.html">
            <div class="symbol-label fs-3 bg-light-danger text-danger">{{ substr($model->first_name, 0, 1) }}</div>
        </a>
    </div>
    <div class="d-flex flex-column">
        <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1"> {{ucwords($model->first_name).' '.ucwords($model->last_name)}} </a>
        <span>{{$model->email}}</span>
    </div>
</div>
