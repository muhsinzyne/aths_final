<x-base-layout :page="$page">



    {{ Form::model($role, ['route' => ['settings.roles.update', $role->id],'method' => 'PUT','id' => 'kt_account_role_form','class' => 'form']) }}
    @method('PUT')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="d-flex flex-column flex-lg-row">

                <div class="flex-lg-row-fluid ms-lg-10">
                    <div class="card card-flush mb-6 mb-xl-9">
                        <div class="card-header pt-5">
                            <div class="card-title">
                                <h2 class="d-flex align-items-center"> {{__('Edit Role - ')}} {{ $role->name }}</h2>
                                    <span class="text-gray-600 fs-6 ms-1">  </span>
                                </h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="row g-9 mb-7">
                                <div class="col-md-6 fv-row7">
                                    {{ Form::label('name', 'Role Name', ['class' => 'fs-6 fw-bold mb-2']) }}
                                    {{ Form::text('name', null, ['class' => 'form-control form-control-solid','placeholder' => 'Role Name','required']) }}
                                    @error('name')
                                        <span class="invalid-name" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 fv-row7">
                                    {{ Form::label('guard_name', 'Role Guard Name', ['class' => 'fs-6 fw-bold mb-2']) }}
                                    {{ Form::text('guard_name', null, ['class' => 'form-control form-control-solid','placeholder' => 'Guard Name','required']) }}
                                    @error('guard_name')
                                        <span class="invalid-name" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">

                                <div class="fv-row">
                                    <label class="fs-5 fw-bolder form-label mb-2">{{ __('Role Permissions') }}</label>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                            <tbody class="text-gray-600 fw-bold">

                                                @if ($activeUser->type == 'su_admin')
                                                    <tr>
                                                        <td class="text-gray-800"> {{ __('Administrator Access') }}
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title=" {{ __('Allows a full access to the system') }} "></i>
                                                        </td>
                                                        <td>
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="kt_roles_select_all" />
                                                                <span class="form-check-label"
                                                                    for="kt_roles_select_all">{{ __('Selet All') }}</span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endif


                                                @foreach ($activeUser->getModuleListForUser() as $module)
                                                    <tr>
                                                        <td class="text-gray-800">
                                                            {{ ucfirst(str_replace('.', ' - ', str_replace('_', ' ', $module))) }}
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                @foreach (theme()->getActionList() as $actionKey =>  $actionName)
                                                                 @include('settings.roles._action_item_edit')
                                                                @endforeach
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @foreach ($activeUser->getModuleListForUser() as $item)
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset"
                                class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button>

                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                                @include('partials.general._button-indicator', [
                                    'label' => __( ((isset($permission)) ? 'Update' : 'Save').''),
                                ])
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}


    @section('scripts')
    <script src="{{ URL::asset('pages/roles_edit.js')}}"></script>
    @endsection

</x-base-layout>
