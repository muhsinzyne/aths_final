@php
$nav = array(
    array('title' => 'List Permission', 'view' => 'settings/permission'),
    array('title' => 'Create Permission', 'view' => 'settings/permission/create'),
    array('title' => 'Edit Permission', 'view' => 'settings/permission/{id}/edit', 'is_edit' => true),
);
@endphp
<div class="card {{ $class }}">
<div class="card-body pt-9 pb-0">
    <div class="d-flex overflow-auto h-55px">
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
            @foreach($nav as $each)
            <!--begin::Nav item-->
                @if (!isset($each['is_edit']))
                    <li class="nav-item">
                        <a class="nav-link text-active-primary me-6 {{ theme()->getPagePath() === $each['view'] ? 'active' : '' }}" href="{{ $each['view'] ? theme()->getPageUrl($each['view']) : '#' }}">
                            {{ $each['title'] }}
                        </a>
                    </li>
                @else
                    @if (Route::is('settings.permission.edit'))
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6 {{ Route::is('settings.permission.edit') ? 'active' : '' }}" href="#">
                                {{ $each['title'] }}
                            </a>
                        </li>
                     @endif
                @endif

                <!--end::Nav item-->
            @endforeach
        </ul>
    </div>
</div>
</div>
